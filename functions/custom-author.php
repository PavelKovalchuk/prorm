<?php

abstract class ProRMCustomAuthor
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

                'id' => 'post-custom-attributes',
                'title' => __('Page attributes', ProRMTheme::TEXTDOMAIN),
                'fields' => array (

                    array (
                        'key' => 'field_post_author',
                        'name' => 'custom_author',
                        'label' => __('Author', ProRMTheme::TEXTDOMAIN),
                        'field_type' => 'input',
                        'required' => 0,
                        'default_value' => '',


                    ),

                    array (
                        'key' => 'field_gender_author',
                        'name' => 'gender_author',
                        'label' => __('Gender', ProRMTheme::TEXTDOMAIN),
                        'field_type' => 'input',
                        'required' => 0,
                        'default_value' => '',


                    ),
                ),
                'location' => array (
                    array (
                        array (
                            'param' => 'post_type',
                            'operator' => '==',
                            'value' => 'post',
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