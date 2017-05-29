<?php

abstract class ProRMCustomFields
{
    public static function init()
    {
        self::addCustomFields();
    }

    /**
     * Add custom fields: page_hide_title
     *
     * @return void
     */
    private static function addCustomFields()
    {
        if (function_exists("register_field_group")) {
            register_field_group(array (
                'id' => 'page-custom-attributes',
                'title' => __('Page attributes', ProRMTheme::TEXTDOMAIN),
                'fields' => array (
                    array (
                        'key' => 'field_page_hide_title',
                        'label' => __('Hide Title', ProRMTheme::TEXTDOMAIN),
                        'name' => 'page_hide_title',
                        'type' => 'true_false',
                        'instructions' =>
                            __('Hide standard title allowing to add custom H1 in content.', ProRMTheme::TEXTDOMAIN),
                        'required' => 0,
                        'default_value' => 0,
                    ),
                    array (
                        'key' => 'field_page_show_siblings_links',
                        'label' => __('Show links to siblings', ProRMTheme::TEXTDOMAIN),
                        'name' => 'page_show_siblings_links',
                        'type' => 'true_false',
                        'instructions' =>
                            __('Show links to previous/next page on child pages.', ProRMTheme::TEXTDOMAIN),
                        'required' => 0,
                        'default_value' => 0,
                    ),
                    array (
                        'key' => 'field_page_show_breadcrumbs',
                        'label' => __('Show breadcrumbs', ProRMTheme::TEXTDOMAIN),
                        'name' => 'page_show_breadcrumbs',
                        'type' => 'true_false',
                        'instructions' =>
                            __('Show breadcrumbs on page.', ProRMTheme::TEXTDOMAIN),
                        'required' => 0,
                        'default_value' => 1,
                    ),
                ),
                'location' => array (
                    array (
                        array (
                            'param' => 'post_type',
                            'operator' => '==',
                            'value' => 'page',
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
}