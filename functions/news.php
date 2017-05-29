<?php

abstract class ProRMNews
{
    public static function getRecentNews($limit = 3, $categoryId = null)
    {
        $args = array(
            'numberposts'   => $limit,
            'category__in'  => $categoryId,
            //'tag__in'       => $tag,
            //'post_type'     => $post_type,
            //'offset'        => $offset,
            //'order'         => $order
        );

        return get_posts($args);
    }

    public static function showRecentNews($limit = 3, $frontpageCategories = null, $displaySettings = array())
    {
        global $post;

        foreach ($frontpageCategories as $idx => $categoryId) {

            ?>

            <!--<p class="second-header-section"><a href="<?php // echo get_category_link($categoryId) ?>"><?php // echo get_cat_name($categoryId) ?></a></p>-->
            <div class="row-12">


            <?php

            $recentPosts = self::getRecentNews($limit, $categoryId);

            foreach ($recentPosts as $post) {
                setup_postdata($post);

                $settings = ProRMHelper::mergeSettings($displaySettings, array(
                    'title' => true,
                    'before_title' => '<h3>',
                    'after_title' => '</h3>',
                    'date' => true,
                    'categories' => true,
                    'thumbnail' => 'left',
                    'excerpt' => true,
                    'read_more' => false,
                    'read_more_text' => '&gt;&gt;',
                    'content' => false,
                ));
                if ($settings['thumbnail'] && $settings['thumbnail'] !== 'right') {
                    $settings['thumbnail'] = 'left';
                }

                Tpl::set('display_settings', $settings);
                get_template_part('content', 'recentnews');
                Tpl::set('display_settings', null);


            }
            wp_reset_postdata();

            ?>

            </div>
<?php

        }

    }

    public static function showNewsItem($displaySettings = array())
    {
        $settings = ProRMHelper::mergeSettings($displaySettings, array(
            'title' => true,
            'before_title' => '<h3>',
            'after_title' => '</h3>',
            'date' => true,
            'categories' => true,
            'thumbnail' => 'left',
            'excerpt' => true,
            'read_more' => false,
            'read_more_text' => '',
            'content' => false,
        ));
        if ($settings['thumbnail'] && $settings['thumbnail'] !== 'right') {
            $settings['thumbnail'] = 'left';
        }
        Tpl::set('display_settings', $settings);
        get_template_part('content', 'newsitem');
        Tpl::set('display_settings', null);
    }

    public static function showCategories()
    {
        $categories = get_the_category();
        $links = array();
        if ($categories) {
            foreach ($categories as $category) {
                $links[] = '<a href="' . get_category_link($category->term_id) . '" title="'
                    . esc_attr(sprintf(__("View all posts in %s"), $category->name)) . '">'
                    . $category->cat_name.'</a>';
            }
            echo implode(', ', $links);
        }
    }

    public static function showPubDate()
    {
        $dateFormat = get_option('date_format');
        $dateString = '';
        if (function_exists('pll_current_language')) {
            if(pll_current_language('slug') == 'de'){
                $dateFormat = 'j. M. Y';
                $dateArr = explode('.', get_the_date($dateFormat));
                $dateArr[1] = __(trim($dateArr[1]), ProRMTheme::TEXTDOMAIN);
                $dateString = $dateArr[0] . '. ' . $dateArr[1] . ' ' . $dateArr[2];
            }
        }
        if(!$dateString){
            $dateString = get_the_date($dateFormat);
        }
        /* <time datetime="<?php echo esc_attr(get_the_date('c')); ?>" pubdate><?php echo esc_html(get_the_date($dateFormat)); ?></time> */
    ?>
        <time datetime="<?php echo esc_attr(get_the_date('c')); ?>" class="date"><?php echo esc_html($dateString); ?></time>
    <?php
    }

    public static function showExcerpt($length = null, $excerpt = null, $content = null)
    {
        echo self::getExcerpt($length, $excerpt, $content);
    }

    public static function getExcerpt($length = null, $excerpt = null, $content = null)
    {
        if (!$excerpt) {
            if ($content) {
                $excerpt = $content;
            } else {
                $excerpt = get_the_excerpt();
            }
        }
        
        if ($length) {
            $excerpt = explode( ' ', $excerpt, $length );
            if ( count( $excerpt ) >= $length ) {
                array_pop( $excerpt );
                $excerpt = implode( " ", $excerpt ) . '...';
            } else {
                $excerpt = implode( " ", $excerpt );
            }
        }

        $excerpt = preg_replace('`\[[^\]]*\]`', '', $excerpt);

        return $excerpt;
    }

    public static function showPageForPosts($templateSlug, $templateName = null)
    {
        global $post;
        $pageForPostsId = get_option('page_for_posts');
        $post = get_post($pageForPostsId);
        setup_postdata($post);
        get_template_part($templateSlug, $templateName);
        rewind_posts();
    }


    public static function getNewsByCategories($limit, $catArgs = array())
    {
        $categories = self::getCategories($catArgs);
        $categories = self::sortCategoriesForNewsroom($categories); // fix for view on page Newsroom
        foreach ($categories as &$category) {
            $filters['category'] = $category->term_id;
            $category->posts = self::getRecentNews($limit, $category->term_id);
        }

        return $categories;
    }

    public static function getCategories($catArgs = array())
    {
        if (!isset($catArgs['hide_empty'])) {
            $catArgs['hide_empty'] = true;
        }
        $areas = get_terms('category', $catArgs);

        return $areas;
    }

    public static function getCategoriesWithoutBlog()
    {
        return self::getCategories(array(
            'exclude' => ProRMTheme::getBlogIds()
        ));
    }

    // fix for view on page Newsroom
    public static function sortCategoriesForNewsroom($unsorted_categories)
    {
        $categories = $unsorted_categories;
        if(($unsorted_categories[0]->term_id == '476') && ($unsorted_categories[2]->term_id == '475')){
            $categories[0] = $unsorted_categories[2];
            $categories[2] = $unsorted_categories[0];
        }
        return $categories;
    }
}