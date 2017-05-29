<?php

abstract class ProRMCards
{
    const POST_TYPE = 'card';

    /** @var string Text to display on "Learn more" button */
    private static $defaultButtonText;

    /**
     * Init Cards
     *
     * @return void
     */
    public static function init()
    {
        self::$defaultButtonText = __('Learn more', ProRMTheme::TEXTDOMAIN);

        add_action('init', array(__CLASS__, 'registerPostType'));
        /*
         * Currently this filter doesn't make any affect because the apply_filter() is called earlier.
         * But we still add our filter in case developers will fix this issue.
         * The language support for cards is enabled in admin panel in language settings section.
         */
        add_filter('pll_get_post_types', array(__CLASS__, 'enableLanguageSupport'));
        self::addCustomFields();
    }

    /**
     * Get all published cards
     *
     * @return array
     */
    public static function getPublishedCards()
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

        $cards = get_posts($args);

        return $cards;
    }

    /**
     * Get title
     *
     * @param WP_Post $card
     *
     * @return string Linked page URL
     */
    public static function getTitle($card)
    {
        $title = $card->post_title;

        if (function_exists('get_field')) {
            $title = get_field('card_title', $card->ID);
        }

        return $title;
    }

    /**
     * Get linked page
     *
     * @param WP_Post $card
     *
     * @return string Linked page URL
     */
    public static function getLinkedPageUrl($card)
    {
        $url = null;

        if (function_exists('get_field')) {
            $url = get_field('linked_page', $card->ID);
        }

        return $url;
    }

    /**
     * Get text to display on "Learn more" button
     *
     * @param WP_Post $card
     *
     * @return string Button text
     */
    public static function getButtonText($card)
    {
        $text = '';
        if (function_exists('get_field')) {
            $text = get_field('button_text', $card->ID);
        }
        if (!$text) {
            $text = self::$defaultButtonText;
        }

        return $text;
    }

    /**
     * @deprecated
     * @param $card
     * @return array
     */
    public static function getBackgroundImageSrc($card)
    {
        return self::getBigImageSrc($card);
    }

    public static function getBigImageSrc($card)
    {
        $src = array(null, 0, 0);
        if (function_exists('get_field')) {
            $imageData = get_field('card_big_image', $card->ID);
            $src[0] = $imageData['url'];
            $src[1] = $imageData['width'];
            $src[2] = $imageData['height'];
        }

        return $src;
    }

    public static function getSmallImageSrc($card)
    {
        $src = array(null, 0, 0);
        if (function_exists('get_field')) {
            $imageData = get_field('card_small_image', $card->ID);
            $src[0] = $imageData['url'];
            $src[1] = $imageData['width'];
            $src[2] = $imageData['height'];
        }

        return $src;
    }

    public static function getBGroundImageSrc($card)
    {
        $src = '';
        if (function_exists('get_field')) {
            $src = get_field('card_bground_image', $card->ID);
        }

        return $src;
    }

    public static function getAdditionalStyles($card)
    {
        $styles = '';
        if (function_exists('get_field')) {
            $styles = get_field('card_styles', $card->ID, false);
        }

        return $styles;
    }

    public static function getContainerClass($card)
    {
        $class = '';
        if (function_exists('get_field')) {
            $class = get_field('container_class', $card->ID, false);
        }

        return $class;
    }

    /**
     * Register Card post type
     *
     * @return void
     */
    public static function registerPostType()
    {
        $labels = array(
            'name'               => __('Cards', ProRMTheme::TEXTDOMAIN),
            'singular_name'      => __('Card', ProRMTheme::TEXTDOMAIN),
            'add_new'            => __('Add New', ProRMTheme::TEXTDOMAIN),
            'add_new_item'       => __('Add New Card', ProRMTheme::TEXTDOMAIN),
            'edit_item'          => __('Edit Card', ProRMTheme::TEXTDOMAIN),
            'new_item'           => __('New Card', ProRMTheme::TEXTDOMAIN),
            'all_items'          => __('All Cards', ProRMTheme::TEXTDOMAIN),
            'view_item'          => __('View Card', ProRMTheme::TEXTDOMAIN),
            'search_items'       => __('Search Cards', ProRMTheme::TEXTDOMAIN),
            'not_found'          => __('No Cards found', ProRMTheme::TEXTDOMAIN),
            'not_found_in_trash' => __('No Cards found in Trash', ProRMTheme::TEXTDOMAIN),
            'parent_item_colon'  => '',
            'menu_name'          => __('Cards', ProRMTheme::TEXTDOMAIN),
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
            'hierarchical'       => false,
            'menu_position'      => null,
            'supports'           => array('title', 'editor', 'thumbnail', 'page-attributes')
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
        $postId = isset($_GET['post']) ? $_GET['post'] : 0;
        if (function_exists("register_field_group")) {
            register_field_group(array (
                'id' => 'acf_card-attributes',
                'title' => __('Card attributes', ProRMTheme::TEXTDOMAIN),
                'fields' => array(
                    array(
                        'key' => 'field_card_title',
                        'label' => __('Title text', ProRMTheme::TEXTDOMAIN),
                        'name' => 'card_title',
                        'type' => 'textarea',
                        'instructions' =>
                            __('Used as main card title (default title is ignored).', ProRMTheme::TEXTDOMAIN),
                        'required' => 0,
                        'allow_null' => 1,
                    ),
                    array(
                        'key' => 'field_card_big_image',
                        'label' => __('Big Image', ProRMTheme::TEXTDOMAIN),
                        'name' => 'card_big_image',
                        'type' => 'image',
                        'save_format' => 'object',
                        'preview_size' => 'thumbnail',
                        'library' => 'all',
                    ),
                    array(
                        'key' => 'field_card_small_image',
                        'label' => __('Small Image', ProRMTheme::TEXTDOMAIN),
                        'name' => 'card_small_image',
                        'type' => 'image',
                        'save_format' => 'object',
                        'preview_size' => 'thumbnail',
                        'library' => 'all',
                    ),
                    array(
                        'key' => 'field_card_bground_image',
                        'label' => __('Background Image', ProRMTheme::TEXTDOMAIN),
                        'name' => 'card_bground_image',
                        'type' => 'image_bgr',
                        'save_format' => 'url',
                        'preview_size' => 'thumbnail',
                        'library' => 'all',
                    ),
                    array(
                        'key' => 'field_linked_page',
                        'label' => __('Linked page', ProRMTheme::TEXTDOMAIN),
                        'name' => 'linked_page',
                        'type' => 'page_link',
                        'instructions' =>
                            __('The page where user goes when clicks \'Learn more\' button', ProRMTheme::TEXTDOMAIN),
                        'required' => 0,
                     /*   'post_type' => array (
                            0 => 'page',
                        ),*/
                        'allow_null' => 1,
                        'multiple' => 0,
                    ),
                    array(
                        'key' => 'field_button_text',
                        'label' => __('"Learn more" button text', ProRMTheme::TEXTDOMAIN),
                        'name' => 'button_text',
                        'type' => 'text',
                        'instructions' =>
                            __('Defaults to <strong>"' . self::$defaultButtonText
                                . '"</strong> translated to frontend language.', ProRMTheme::TEXTDOMAIN),
                        'required' => 0,
                        'allow_null' => 1,
                    ),
                    array(
                        'key' => 'field_container_class',
                        'label' => __('Html \'class\' attribute', ProRMTheme::TEXTDOMAIN),
                        'name' => 'container_class',
                        'type' => 'text',
                        'instructions' =>
                            __('Used to customize styles via CSS rules.', ProRMTheme::TEXTDOMAIN),
                        'required' => 0,
                        'allow_null' => 1,
                    ),
                    array(
                        'key' => 'field_card_styles',
                        'label' => __('CSS Styles', ProRMTheme::TEXTDOMAIN),
                        'name' => 'card_styles',
                        'type' => 'textarea',
                        'instructions' =>
                            sprintf(__('Use <strong>#card-%d</strong> to add styles to this card.', ProRMTheme::TEXTDOMAIN), $postId),
                        'required' => 0,
                        'allow_null' => 1,
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
                    'layout' => 'default',
                    'hide_on_screen' => array (
                    ),
                ),
                'menu_order' => 0,
            ));
        }
    }

    /**
     * Add Card post type to 'languaged' types.
     *
     * @param $types
     * @return array
     */
    public static function enableLanguageSupport($types)
    {
        return array_merge($types, array(self::POST_TYPE => self::POST_TYPE));
    }
}