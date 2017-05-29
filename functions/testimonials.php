<?php

abstract class ProRMTestimonials
{
    const POST_TYPE = 'testimonial';

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
    public static function getPublishedTestimonials()
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

        $testimonials = get_posts($args);

        return $testimonials;
    }

    /**
     * Get link
     *
     * @param WP_Post $testimonial
     *
     * @return string
     */
    public static function getLinkUrl($testimonial)
    {
        $link = null;

        if (function_exists('get_field')) {

            $customLink = get_field('testimonial_link_url', $testimonial->ID);
            if ($customLink) {
                $link = $customLink;
            } else {
                $fileLink = get_field('testimonial_file_url', $testimonial->ID);
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
     * @param WP_Post $testimonial
     *
     * @return string
     */
    public static function getLinkText($testimonial)
    {
        $text = '';
        if (function_exists('get_field')) {
            $text = get_field('testimonial_link_text', $testimonial->ID);
        }
        if (!$text) {
            $text = self::$defaultLinkText;
        }

        return $text;
    }

    public static function getImageSrc($testimonial)
    {
        $imageId = get_post_thumbnail_id($testimonial->ID);
        if ($imageId) {
            $imageSrc = wp_get_attachment_image_src($imageId, 'post-thumbnail', false);
            return $imageSrc;
        }
        return null;
    }

    /**
     * Register Testimonial post type
     *
     * @return void
     */
    public static function registerPostType()
    {
        $labels = array(
            'name'               => __('Testimonials', ProRMTheme::TEXTDOMAIN),
            'singular_name'      => __('Testimonial', ProRMTheme::TEXTDOMAIN),
            'add_new'            => __('Add New', ProRMTheme::TEXTDOMAIN),
            'add_new_item'       => __('Add New Testimonial', ProRMTheme::TEXTDOMAIN),
            'edit_item'          => __('Edit Testimonial', ProRMTheme::TEXTDOMAIN),
            'new_item'           => __('New Testimonial', ProRMTheme::TEXTDOMAIN),
            'all_items'          => __('All Testimonials', ProRMTheme::TEXTDOMAIN),
            'view_item'          => __('View Testimonial', ProRMTheme::TEXTDOMAIN),
            'search_items'       => __('Search Testimonials', ProRMTheme::TEXTDOMAIN),
            'not_found'          => __('No Testimonials found', ProRMTheme::TEXTDOMAIN),
            'not_found_in_trash' => __('No Testimonials found in Trash', ProRMTheme::TEXTDOMAIN),
            'parent_item_colon'  => '',
            'menu_name'          => __('Testimonials', ProRMTheme::TEXTDOMAIN),
        );

        $args = array(
            'labels'             => $labels,
            'public'             => true,
            'publicly_queryable' => true,
            'show_ui'            => true,
            'show_in_menu'       => true,
            'query_var'          => true,
            'rewrite'            => array('slug' => self::POST_TYPE),
            'capability_type'    => 'post',
            'has_archive'        => true,
            'hierarchical'       => true,
            'menu_position'      => null,
            'supports'           => array('title', 'editor', 'thumbnail', 'page-attributes', 'parent')
        );

        register_post_type(self::POST_TYPE, $args);
    }

    /**
     * Add Testimonial post type to 'languaged' types.
     *
     * @param $types
     * @return array
     */
    public static function enableLanguageSupport($types)
    {
        return array_merge($types, array(self::POST_TYPE => self::POST_TYPE));
    }

    public static function getTestimonialsList($attributes, $content)
    {
        ob_start();
        get_template_part('testimonials');
        $html = ob_get_clean();

        return $html;
    }
}