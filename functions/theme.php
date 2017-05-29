<?php

abstract class ProRMTheme
{
    const TEXTDOMAIN = 'prorm';

    const TPL_VAR_PREFIX = 'pro_';

    public static function init()
    {
        add_action('after_setup_theme', array(__CLASS__, 'setup'));
    }

    public static function setup()
    {
        load_theme_textdomain(self::TEXTDOMAIN, get_template_directory() . '/languages');
        add_editor_style();

        // Filters
        add_filter('wp_title', array(__CLASS__, 'formatTitle'), 10, 2);
        // Prevent 'Nav Menu Images' plugin from attaching images on frontend
        //add_filter('nmi_filter_menu_item_content', function () { return false; });
        add_filter('nmi_filter_menu_item_content', array(__CLASS__, 'returnFalse'));

        // Actions
        add_action('admin_enqueue_scripts', array(__CLASS__, 'adminStyles'));
        add_action('bcn_after_fill', array(__CLASS__, 'formatBreadcrumbs'));
        add_action('wp', array(__CLASS__, 'checkLanguageCode'));

        // Theme support
        add_theme_support('post-thumbnails');
        //add_theme_support('post-formats', array('aside', 'image', 'link', 'quote', 'status'));

        // Short codes are added via ProRMShortcodes

        // Menus
        self::registerMenus();
        self::overwriteBreadcrumbTrail();
    }

    public static function returnFalse()
    {
        return false;
    }

    protected static function registerMenus()
    {
        register_nav_menu('side-menu', __('Side Menu', self::TEXTDOMAIN));
        register_nav_menu('drop-down-menu', __('Drop Down Menu', self::TEXTDOMAIN));
        register_nav_menu('footer-1', __('1<sup>st</sup> column in footer', self::TEXTDOMAIN));
        register_nav_menu('footer-2', __('2<sup>nd</sup> column in footer', self::TEXTDOMAIN));
        register_nav_menu('footer-3', __('3<sup>rd</sup> column in footer', self::TEXTDOMAIN));
        register_nav_menu('footer-4', __('4<sup>th</sup> column in footer', self::TEXTDOMAIN));
        register_nav_menu('legal', __('Legal pages in footer', self::TEXTDOMAIN));
        register_nav_menu('bottom', __('Bottom Menu', self::TEXTDOMAIN));
        register_nav_menu('right-menu', __('Right Menu', self::TEXTDOMAIN));
    }

    public static function formatTitle($title, $sep)
    {
        global $paged, $page;

        if (is_feed()) {
            return $title;
        }

        // Add the site name.
        $title .= get_bloginfo('name');

        // Add the site description for the home/front page.
        $site_description = get_bloginfo('description', 'display');
        if ($site_description && (is_home() || is_front_page())) {
            $title = "$title $sep $site_description";
        }

        // Add a page number if necessary.
        if ($paged >= 2 || $page >= 2) {
            $title = $title . ' ' . $sep
                . ' ' . sprintf(__('Page %s', self::TEXTDOMAIN), max($paged, $page));
        }

        return $title;
    }

    /**
     * @param ProRM_BreadcrumbTrail $trail
     */
    public static function formatBreadcrumbs($trail)
    {
//        global $post;
//        /** @var bcn_breadcrumb[] $breadcrumbs */
//        if (is_singular()) {
//            array_shift($trail->breadcrumbs);
//        }
    }

    public static function adminStyles()
    {
        wp_enqueue_style('prorm_admin_css', get_template_directory_uri() . '/css/admin-style.css', false, '1.0.0');
    }

    /**
     * @param bcn_breadcrumb_trail $trail
     * @return \ProRM_BreadcrumbTrail
     */
    public static function overwriteBreadcrumbTrail($trail = null)
    {
        return false;
        /*
        if (class_exists('breadcrumb_navxt') && class_exists('bcn_breadcrumb_trail')) {
            global $breadcrumb_navxt;
            $trail = new ProRM_BreadcrumbTrail();
            $breadcrumb_navxt = new breadcrumb_navxt($trail);
        }
        */
    }

    public static function getBreadcrumbs()
    {
        if (function_exists('bcn_display')) {
            echo bcn_display(true);
            $line = bcn_display(true);
            return $line;
            //return trim($line) ? $line . ' &gt; ' : '';
        }

        return '';
    }

    public static function url()
    {
        return get_template_directory_uri();
    }

    public static function path()
    {
        return get_template_directory();
    }

    public static function getLangSwitcher()
    {
        $useExternalSwitcher = false;
        $html = '';
        if (!$useExternalSwitcher && function_exists('pll_the_languages')) {
            $languages = pll_the_languages(array('echo' => false, 'raw' => true));
            ?>
            <ul class="lang">
                <?php foreach ($languages as $language) { ?>
                <?php //if($language['slug'] == 'es'){ continue;} // for developing on live site purpose ?>
                    <li class="<?php echo $language['current_lang'] ? 'active' : '' ?>">
                        
                        <?php if(!$language['current_lang']){ ?>
                        
                        <a href="<?php echo $language['url'] ?>">
                            <?php echo $language['slug'] ?>
                        </a>
                        
                        <?php } else{ ?>
                        <span>
                            <?php echo $language['slug'] ?>
                        </span>
                        <?php } ?>
                    </li>
                <?php } ?>
            </ul>
            <?php
        } else {
            /** @var ProRMSettings $settings */
            $settings = Registry::get('settings');
            ?>
            <div class="lang-switcher">
                <a href="" class="de current" onclick="return false;">DE</a>
                <a href="<?php echo $settings->getOption('general_redirect_to_en') ?>" class="en other">EN</a>
                <br class="clear">
            </div>
            <?php
        }
        return $html;
    }

    public static function showLegalPages()
    {
        $args = array(
            'theme_location' => 'legal',
            'container' => false,
            'menu_class' => 'legal-pages',
            'items_wrap' => '%3$s',
            'fallback_cb' => false
        );

        wp_nav_menu($args);
    }

    public static function showSideMenu()
    {
        $args = array(
            'theme_location' => 'side-menu',
            'container' => false,
            'menu_class' => 'legal-pages',
            'items_wrap' => '%3$s',
            'walker'         => new Header_Walker_Nav_Menu(),
            'fallback_cb' => false
        );

        wp_nav_menu($args);
    }

    public static function showDropDownMenu()
    {
        if (pll_current_language() == 'en') {
            $menu_id = 3209;
        } elseif (pll_current_language() == 'de') {
            $menu_id = 3210;
        } elseif (pll_current_language() == 'es') {
            $menu_id = get_current_element_id_wp(3233, 3234);
        }

        $menu = wp_get_nav_menu_items($menu_id);
        foreach ($menu as $item) {
            echo '<option value="'.$item->url.'">'.$item->post_title.'</option>';
        }
    }
    
    public static function showDropDownMenuLinks()
    {
        if (pll_current_language() == 'en') {
            $menu_id = 3209;
        } elseif (pll_current_language() == 'de') {
            $menu_id = 3210;
        } elseif (pll_current_language() == 'es') {
            $menu_id = get_current_element_id_wp(3233, 3234);
        }

        $menu = wp_get_nav_menu_items($menu_id);
        echo '<ul>';
        foreach ($menu as $item) {
            echo '<li class="jcf-option" ><a href="'.$item->url.'">'.$item->post_title.'</a></li>';
        }
        echo '</ul>';
    }

    public static function showBottomMenu()
    {
        $walker = new Menu_With_Thumbnails();
        $walker->setItemsAdditionalClass('navbar-bottom-item');

        $args = array(
            'theme_location'  => 'bottom',
            'container'       => false,
            'items_wrap'      => '%3$s',
            'walker'          => $walker,
            'fallback_cb'     => false
        );

        $walker->renderMenu($args);
    }

    public static function showRightMenu()
    {
        $walker = new Menu_With_Thumbnails();
        $walker->setItemsAdditionalClass('navbar-right-item');

        $args = array(
            'theme_location'  => 'right-menu',
            'container'       => false,
            'items_wrap'      => '%3$s',
            'walker'          => $walker,
            'fallback_cb'     => false
        );

        $walker->renderMenu($args);
    }

    public static function getBlogIds()
    {
        return  array(1, 6);
    }

    public static function setVar($name, $value, $isFlash = false)
    {
        if (!$isFlash) {
            set_query_var(self::TPL_VAR_PREFIX . $name, $value);
        } else {
            ProRMSession::setFlash($name, $value);
        }
    }

    public static function getVar($name, $default = null, $isFlash = false)
    {
        if (!$isFlash) {
            $value = get_query_var(self::TPL_VAR_PREFIX . $name);

            return (!is_null($default) && $value == '') ? $default : $value;
        } else {
            return ProRMSession::getFlash($name, $default);
        }
    }

    public static function unsetVar($name, $isFlash = false)
    {
        if (!$isFlash) {
            set_query_var(self::TPL_VAR_PREFIX . $name, null);
        } else {
            ProRMSession::unsetFlash($name);
        }
    }

    public static function getPreviousPageLink($format = '&laquo; %link', $link = '%title')
    {
        return self::getAdjacentPageLink($format, $link, true);
    }

    public static function getNextPageLink($format = '&laquo; %link', $link = '%title')
    {
        return self::getAdjacentPageLink($format, $link, false);
    }

    protected static function getAdjacentPageLink($format, $link, $isPrevious)
    {
        $post = self::getAdjacentPage($isPrevious, true);

        if (!$post) {
            $output = '';
        } else {
            $title = $post->post_title;

            /** This filter is documented in wp-includes/post-template.php */
            $title = apply_filters('the_title', $title, $post->ID);
            $rel = $isPrevious ? 'prev' : 'next';

            $string = '<a href="' . get_permalink($post) . '" rel="'.$rel.'">';
            $inlink = str_replace('%title', $title, $link);
            $inlink = $string . $inlink . '</a>';

            $output = str_replace('%link', $inlink, $format);
        }

        $adjacent = $isPrevious ? 'previous' : 'next';

        return apply_filters("{$adjacent}_post_link", $output, $format, $link, $post);
    }

    protected static function getAdjacentPage($isPrevious, $sameParent = true)
    {
        /** @var $wpdb WPDB */
        global $wpdb;

        $post = get_post();
        if (!$post) {
            return null;
        }

        $adjacent = $isPrevious ? 'previous' : 'next';
        $op = $isPrevious ? '<=' : '>=';
        $order = $isPrevious ? 'DESC' : 'ASC';

        $join = '';
        $where = $wpdb->prepare(
            "WHERE
                p.menu_order $op %s
                AND p.ID != %s
                AND p.post_type = %s
                AND p.post_status = 'publish'" . ($sameParent ? ' AND p.post_parent = %s' : ''),
            $post->menu_order,
            $post->ID,
            $post->post_type,
            $post->post_parent
        );
        $sort = "ORDER BY p.menu_order $order, p.post_date $order LIMIT 1";
        $in_same_term = false; // Required for filter
        $excluded_terms = ''; // Required for filter

        $join  = apply_filters("get_{$adjacent}_post_join", $join, $in_same_term, $excluded_terms);
        $where = apply_filters("get_{$adjacent}_post_where", $where, $in_same_term, $excluded_terms );
        $sort  = apply_filters("get_{$adjacent}_post_sort", $sort);

        $query = "SELECT p.ID FROM $wpdb->posts AS p $join $where $sort";
        $query_key = 'adjacent_post_' . md5($query);
        $result = wp_cache_get($query_key, 'counts');
        if (false !== $result) {
            if ($result) {
                $result = get_post($result);
            }
            return $result;
        }

        $result = $wpdb->get_var($query);
        if (null === $result) {
            $result = '';
        }

        wp_cache_set($query_key, $result, 'counts');

        if ($result) {
            $result = get_post($result);
        }

        return $result;
    }


    public static function getChildPages($parentId)
    {
        $pages = get_children(array(
            'post_parent' => $parentId,
            'post_type'   => 'page',
            'post_status' => 'publish',
            'orderby'     => 'menu_order',
            'order'       => 'ASC',
        ));

        return $pages ? $pages : array();
    }

    public static function checkLanguageCode()
    {
        if (function_exists('pll_current_language')) {
            $slug = pll_current_language('slug'); 
            
//            var_dump($_SERVER['SERVER_NAME']);
            if($slug == 'de'){
                return;
            }
            if ($slug && !is_admin()) {
                $url = $_SERVER['REQUEST_URI'];          
                if ($url === '/' . $slug) {
                    wp_redirect($url . '/', 301);  
                    exit;
                }
                if (strpos($url, '/' . $slug . '/') !== 0) {
                    wp_redirect('/' . $slug . $url, 301); 
                    exit;
                }
            }
        }
    }
}