<?php

abstract class ProRMWebinars
{
    const POST_TYPE = 'webinar';

    /**
     * Init Webinars
     *
     * @return void
     */
    public static function init()
    {
        add_action('init', array(__CLASS__, 'registerPostType'));
        self::addCustomFields();
        /*
         * Currently this filter doesn't make any affect because the apply_filter() is called earlier.
         * But we still add our filter in case developers will fix this issue.
         * The language support for webinars is enabled in admin panel in language settings section.
         */
        //add_filter('pll_get_post_types', array(__CLASS__, 'enableLanguageSupport'));
    }

    /**
     * Get all published webinars
     *
     * @return WP_Post[]
     */
    public static function getPublishedWebinars()
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

        $webinars = get_posts($args);

        return $webinars;
    }

    /**
     * Register Webinar post type
     *
     * @return void
     */
    public static function registerPostType()
    {
        $labels = array(
            'name'               => __('Webinars', ProRMTheme::TEXTDOMAIN),
            'singular_name'      => __('Webinar', ProRMTheme::TEXTDOMAIN),
            'add_new'            => __('Add New', ProRMTheme::TEXTDOMAIN),
            'add_new_item'       => __('Add New Webinar', ProRMTheme::TEXTDOMAIN),
            'edit_item'          => __('Edit Webinar', ProRMTheme::TEXTDOMAIN),
            'new_item'           => __('New Webinar', ProRMTheme::TEXTDOMAIN),
            'all_items'          => __('All Webinars', ProRMTheme::TEXTDOMAIN),
            'view_item'          => __('View Webinar', ProRMTheme::TEXTDOMAIN),
            'search_items'       => __('Search Webinars', ProRMTheme::TEXTDOMAIN),
            'not_found'          => __('No Webinars found', ProRMTheme::TEXTDOMAIN),
            'not_found_in_trash' => __('No Webinars found in Trash', ProRMTheme::TEXTDOMAIN),
            'parent_item_colon'  => '',
            'menu_name'          => __('Webinars', ProRMTheme::TEXTDOMAIN),
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
            'supports'           => array('title')
        );

        register_post_type(self::POST_TYPE, $args);
    }

    /**
     * Add custom fields: linked_page, button_text
     *
     * @return void
     */
    private static function addCustomFields()
    {
        if (function_exists("register_field_group")) {
            register_field_group(array(
                'id' => 'acf_webinar-attributes',
                'title' => __('Webinar Attributes', ProRMTheme::TEXTDOMAIN),
                'fields' => array (
                    array(
                        'key' => 'field_webinar_id',
                        'label' => __('ID', ProRMTheme::TEXTDOMAIN),
                        'name' => 'webinar_id',
                        'type' => 'text',
                        'required' => 1,
                    ),
                    array(
                        'key' => 'field_webinar_start',
                        'label' => __('Start', ProRMTheme::TEXTDOMAIN),
                        'name' => 'webinar_start',
                        'type' => 'date_time_picker',
                        'show_date' => 'true',
                        'date_format' => 'dd.mm.yy',
                        'time_format' => 'HH:mm',
                        'show_week_number' => 'false',
                        'picker' => 'select',
                        'save_as_timestamp' => 'true',
                        'get_as_timestamp' => 'true',
                        'required' => 1,
                    ),
                    array(
                        'key' => 'field_webinar_end',
                        'label' => __('End', ProRMTheme::TEXTDOMAIN),
                        'name' => 'webinar_end',
                        'type' => 'date_time_picker',
                        'show_date' => 'true',
                        'date_format' => 'dd.mm.yy',
                        'time_format' => 'HH:mm',
                        'show_week_number' => 'false',
                        'picker' => 'select',
                        'save_as_timestamp' => 'true',
                        'get_as_timestamp' => 'true',
                        'required' => 1,
                    ),
                    array(
                        'key' => 'field_webinar_url',
                        'label' => __('MeetingURL', ProRMTheme::TEXTDOMAIN),
                        'name' => 'webinar_url',
                        'type' => 'text',
                        'required' => 1,
                    ),
                    array(
                        'key' => 'field_webinar_pin',
                        'label' => __('MeetingPIN', ProRMTheme::TEXTDOMAIN),
                        'name' => 'webinar_pin',
                        'type' => 'text',
                        'required' => 1,
                    ),
                    array(
                        'key' => 'field_webinar_page_lang',
                        'label' => __('Page Language', ProRMTheme::TEXTDOMAIN),
                        'name' => 'webinar_page_lang',
                        'type' => 'select',
                        'required' => 1,
                        'choices' => array (
                            'en' => 'English',
                            'de' => 'German',
                        ),
                        'default_value' => '',
                        'allow_null' => 0,
                        'multiple' => 0,
                    ),
                    array(
                        'key' => 'field_webinar_lang',
                        'label' => __('Webinar Language', ProRMTheme::TEXTDOMAIN),
                        'name' => 'webinar_lang',
                        'type' => 'select',
                        'required' => 1,
                        'choices' => array (
                            'en' => 'English',
                            'de' => 'German',
                        ),
                        'default_value' => '',
                        'allow_null' => 0,
                        'multiple' => 0,
                    ),
                ),
                'location' => array (
                    array (
                        array (
                            'param' => 'post_type',
                            'operator' => '==',
                            'value' => self::POST_TYPE,
                            'order_no' => 0,
                            'group_no' => 0,
                        ),
                    ),
                ),
                'options' => array (
                    'position' => 'normal',
                    'layout' => 'no_box',
                    'hide_on_screen' => array (
                    ),
                ),
                'menu_order' => 0,
            ));

            ProRMForms_ServiceRequest::addCustomFields();
            ProRMForms_PartnershipRequest::addCustomFields();
            ProRMForms_ContactUs::addCustomFields();
            ProRMForms_Webinar::addCustomFields();
        }
    }

    /**
     * Add Webinar post type to 'languaged' types.
     *
     * @param $types
     * @return array
     */
    public static function enableLanguageSupport($types)
    {
        return array_merge($types, array(self::POST_TYPE => self::POST_TYPE));
    }

    /**
     * Get field value.
     *
     * @param string $field
     * @param WP_Post $webinar
     *
     * @return string
     */
    protected static function getField($field, $webinar)
    {
        $start = '';
        if (function_exists('get_field')) {
            $start = get_field($field, $webinar->ID);
        }

        return $start;
    }

    /**
     * @param $webinar
     * @return DateTime|null
     */
    public static function getStart($webinar)
    {
        $ts = self::getField('webinar_start', $webinar);
        if ($ts) {
            $dateTime = new DateTime();
            $dateTime->setTimestamp($ts);
            return $dateTime;
        }
        return null;
    }

    /**
     * @param $webinar
     * @return DateTime|null
     */
    public static function getEnd($webinar)
    {
        $ts = self::getField('webinar_end', $webinar);
        if ($ts) {
            $dateTime = new DateTime();
            return $dateTime->setTimestamp($ts);
        }
        return null;
    }

    public static function getId($webinar)
    {
        return self::getField('webinar_id', $webinar);
    }

    public static function getMeetingUrl($webinar)
    {
        return self::getField('webinar_url', $webinar);
    }

    public static function getMeetingPin($webinar)
    {
        return self::getField('webinar_pin', $webinar);
    }

    public static function getLanguage($webinar)
    {
        return self::getField('webinar_lang', $webinar);
    }

    public static function getPageLanguage($webinar)
    {
        return self::getField('webinar_page_lang', $webinar);
    }
}