<?php

abstract class ProRmVideo {

    const POST_TYPE = 'videos';

    /**
     * Init Video
     *
     * @return void
     */
    public static function init() {
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
    public static function getPublishedVideos() {
        $args = array(
            'posts_per_page' => 100,
            'orderby' => 'menu_order',
            'order' => 'ASC',
            'post_type' => self::POST_TYPE,
            'post_status' => 'publish',
            'suppress_filters' => false,
        );
        $videos = get_posts($args);

        return $videos;
    }
    public static function getImageSrc($video)
    {
        $imageId = get_post_thumbnail_id($video->ID);
        if ($imageId) {
            $imageSrc = wp_get_attachment_image_src($imageId, 'post-thumbnail', false);
            return $imageSrc;
        }
        return null;
    }
    public static function getVideoSrc($video)
    {
        $imageId = get_post_thumbnail_id($video->ID);
        if ($imageId) {
            return apply_filters('the_content', get_post_field('post_content', $video->ID));  
        }
        return null;
    }

    /**
     * Register Slider post type
     *
     * @return void
     */
    public static function registerPostType() {
        $labels = array(
            'name' => __('Videos', ProRMTheme::TEXTDOMAIN),
            'singular_name' => __('Video', ProRMTheme::TEXTDOMAIN),
            'add_new' => __('Add New', ProRMTheme::TEXTDOMAIN),
            'add_new_item' => __('Add New Video', ProRMTheme::TEXTDOMAIN),
            'edit_item' => __('Edit Video', ProRMTheme::TEXTDOMAIN),
            'new_item' => __('New Video', ProRMTheme::TEXTDOMAIN),
            'all_items' => __('All Videos', ProRMTheme::TEXTDOMAIN),
            'view_item' => __('View Video', ProRMTheme::TEXTDOMAIN),
            'search_items' => __('Search Videos', ProRMTheme::TEXTDOMAIN),
            'not_found' => __('No Videos found', ProRMTheme::TEXTDOMAIN),
            'not_found_in_trash' => __('No Videos found in Trash', ProRMTheme::TEXTDOMAIN),
            'parent_item_colon' => '',
            'menu_name' => __('Videos', ProRMTheme::TEXTDOMAIN),
        );

        $args = array(
            'labels' => $labels,
            'public' => true,
            'publicly_queryable' => true,
            'show_ui' => true,
            'show_in_menu' => true,
            'query_var' => true,
            'rewrite' => array('slug' => self::POST_TYPE),
            'capability_type' => 'post',
            'has_archive' => true,
            'hierarchical' => true,
            'menu_position' => null,
            'supports' => array('title', 'editor', 'thumbnail', 'page-attributes', 'parent')
        );

        register_post_type(self::POST_TYPE, $args);
    }

    /**
     * Add Testimonial post type to 'languaged' types.
     *
     * @param $types
     * @return array
     */
    public static function enableLanguageSupport($types) {
        return array_merge($types, array(self::POST_TYPE => self::POST_TYPE));
    }
    
    public static function shortcodeVideo(){
        add_filter('wp_video_shortcode','jc_video_shortcode_output',10,5);
    }
}
