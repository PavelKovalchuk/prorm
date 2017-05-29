<?php

abstract class ProRMReferences
{
    const POST_TYPE = 'reference';
    const POST_TYPE_de = 'referenzen';
    const POST_TYPE_es = 'referencias';
    
    const PARENT_URL = 'testimonials';
    const PARENT_URL_de = 'referenzen';
    const PARENT_URL_es = 'referencias';
    
    /** @var string Text to display on "Learn more" link */
    private static $defaultLinkText;

    /**
     * Init Testimonials
     *
     * @return void
     */
    public static function init()
    {
        self::$defaultLinkText = __('Go to success story', ProRMTheme::TEXTDOMAIN);

        add_action('init', array(__CLASS__, 'registerPostType'));
        /*
         * Currently this filter doesn't make any affect because the apply_filter() is called earlier.
         * But we still add our filter in case developers will fix this issue.
         * The language support for testimonials is enabled in admin panel in language settings section.
         */
        add_filter('pll_get_post_types', array(__CLASS__, 'enableLanguageSupport'));
    }

    /**
     * Get all published testimonials
     *
     * @return array
     */
    public static function getPublishedReferences()
    {
        $args = array(
            'posts_per_page' => 100,
            'orderby' => 'menu_order',
            'order' => 'ASC',
            'post_type' => self::POST_TYPE,
            'post_status' => 'publish',
            'suppress_filters' => false,
        );
        if (function_exists('pll_current_language')) {
            $args['lang'] = pll_current_language('slug');
        }

        $references = get_posts($args);

        return $references;
    }

    /**
     * Get link
     *
     * @param WP_Post $reference
     *
     * @return string
     */
    public static function getLinkUrl($reference)
    {
        $link = null;

        if (function_exists('get_field')) {

            $customLink = get_field('testimonial_link_url', $reference->ID);
            if ($customLink) {
                $link = $customLink;
            } else {
                $fileLink = get_field('testimonial_file_url', $reference->ID);
                if ($fileLink) {
                    $link = $fileLink;
                }
            }
        }

        return $link;
    }

    /**
     * Get text to display on link
     *
     * @param WP_Post $reference
     *
     * @return string
     */
    public static function getLinkText($reference)
    {
        $text = '';
        if (function_exists('get_field')) {
            $text = get_field('testimonial_link_text', $reference->ID);
        }
        if (!$text) {
            $text = self::$defaultLinkText;
        }

        return $text;
    }

    public static function getImageSrc($reference)
    {
        $imageId = get_post_thumbnail_id($reference->ID);
        if ($imageId) {
            $imageSrc = wp_get_attachment_image_src($imageId, 'post-thumbnail', false);
            return $imageSrc;
        }
        return null;
    }

    /**
     * Register Reference post type
     *
     * @return void
     */
    public static function registerPostType()
    {
        $labels = array(
            'name'               => __('References', ProRMTheme::TEXTDOMAIN),
            'singular_name'      => __('Reference', ProRMTheme::TEXTDOMAIN),
            'add_new'            => __('Add New', ProRMTheme::TEXTDOMAIN),
            'add_new_item'       => __('Add New Reference', ProRMTheme::TEXTDOMAIN),
            'edit_item'          => __('Edit Reference', ProRMTheme::TEXTDOMAIN),
            'new_item'           => __('New Reference', ProRMTheme::TEXTDOMAIN),
            'all_items'          => __('All References', ProRMTheme::TEXTDOMAIN),
            'view_item'          => __('View Reference', ProRMTheme::TEXTDOMAIN),
            'search_items'       => __('Search References', ProRMTheme::TEXTDOMAIN),
            'not_found'          => __('No References found', ProRMTheme::TEXTDOMAIN),
            'not_found_in_trash' => __('No References found in Trash', ProRMTheme::TEXTDOMAIN),
            'parent_item_colon'  => '',
            'menu_name'          => __('References', ProRMTheme::TEXTDOMAIN),
        );

        $args = array(
            'labels'             => $labels,
            'public'             => true,
            'publicly_queryable' => true,
            'show_ui'            => true,
            'show_in_menu'       => true,
            'show_in_nav_menus' => true,
            'show_in_rest' => true,
            'menu_icon' => 'dashicons-id-alt',
            'query_var'          => true,
            'rewrite'            => array('slug' => self::POST_TYPE . 's'),
            'capability_type'    => 'post',
            'has_archive'        => true,
            'hierarchical'       => false,
            'menu_position'      => null,
            'supports'           => array('title', 'editor', 'thumbnail', 'page-attributes', 'parent')
        );

        register_post_type(self::POST_TYPE, $args);
    }

    /**
     * Add Reference post type to 'languaged' types.
     *
     * @param $types
     * @return array
     */
    public static function enableLanguageSupport($types)
    {
        return array_merge($types, array(self::POST_TYPE => self::POST_TYPE));
    }

    public static function getReferencesList($attributes, $content)
    {
        ob_start();
        get_template_part('References');
        $html = ob_get_clean();

        return $html;
    }
}