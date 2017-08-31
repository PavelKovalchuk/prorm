<?php

abstract class ProRMFrontPage
{
    const FRONT_PAGE_ID_DE = 2;
    const FRONT_PAGE_ID_EN = 832;
    const FRONT_PAGE_ID_ES = 6701;

    /**
     * Init Front Page
     *
     * @return void
     */
    public static function init()
    {
        self::addCustomFields();
    }

    public static function getCategories($postId)
    {
        $categories = array();
        if (have_rows('field_frontpage_categories', $postId)) {
            while (have_rows('field_frontpage_categories', $postId)) {
                the_row();
                $catId = get_sub_field('frontpage_categories_category');
                $categories[] = $catId;
            }
        }
        return $categories;
    }

    /**
     * Add custom fields: linked_page, button_text
     *
     * @return void
     */
    private static function addCustomFields()
    {
        if(function_exists("register_field_group"))
        {
            register_field_group(array (
                'id' => 'acf_frontpage-attributes',
                'title' => __('Frontpage attributes', ProRMTheme::TEXTDOMAIN),
                'fields' => array (
                    array (
                        'key' => 'field_frontpage_categories',
                        'label' => __('Categories', ProRMTheme::TEXTDOMAIN),
                        'name' => 'frontpage_categories',
                        'type' => 'repeater',
                        'sub_fields' => array (
                            array (
                                'key' => 'field_frontpage_categories_category',
                                'label' => __('Category', ProRMTheme::TEXTDOMAIN),
                                'name' => 'frontpage_categories_category',
                                'type' => 'taxonomy',
                                'required' => 1,
                                'column_width' => 100,
                                'taxonomy' => 'category',
                                'field_type' => 'select',
                                'allow_null' => 1,
                                'load_save_terms' => 0,
                                'return_format' => 'id',
                                'multiple' => 0,
                            ),
                        ),
                        'row_min' => '',
                        'row_limit' => '',
                        'layout' => 'table',
                        'button_label' => __('Add Category', ProRMTheme::TEXTDOMAIN),
                    ),
                ),
                'location' => array (
                    array (
                        array (
                            'param' => 'page',
                            'operator' => '==',
                            'value' => self::FRONT_PAGE_ID_DE,
                            'order_no' => 0,
                            'group_no' => 0,
                        ),
                    ),
                    array (
                        array (
                            'param' => 'page',
                            'operator' => '==',
                            'value' => self::FRONT_PAGE_ID_EN,
                            'order_no' => 0,
                            'group_no' => 1,
                        ),
                    ),
                    array (
                        array (
                            'param' => 'page',
                            'operator' => '==',
                            'value' => self::FRONT_PAGE_ID_ES,
                            'order_no' => 0,
                            'group_no' => 2,
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
}