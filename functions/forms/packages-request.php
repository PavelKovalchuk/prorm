<?php

class ProRMForms_PackagesRequest extends ProRMForms_Abstract
{
    const FORM_NAME = 'packages-request';

    public function __construct(WP_Post $formPost)
    {
        parent::__construct($formPost);

        $this->fetcher = new Fetcher_PackagesRequest($_POST['pro']);
        $this->formName = self::FORM_NAME;
    }

    public static function addCustomFields()
    {
        $locations = self::getLocations(self::FORM_NAME);
        if ($locations) {
            register_field_group(array(
                'id' => 'acf_testing-form-attributes',
                'title' => __('Testing Form Attributes', ProRMTheme::TEXTDOMAIN),
                'fields' => array (
                    array(
                        'key' => 'field_form_test_packages',
                        'label' => __('Test Packages', ProRMTheme::TEXTDOMAIN),
                        'name' => 'form_test_packages',
                        'type' => 'repeater',
                        'sub_fields' => array(
                            array(
                                'key' => 'field_form_test_packages_option_value',
                                'label' => __('Value (for CRM)', ProRMTheme::TEXTDOMAIN),
                                'name' => 'form_test_packages_option_value',
                                'type' => 'text',
                                'required' => 1,
                                'column_width' => 50,
                                'default_value' => '',
                                'placeholder' => '',
                                'prepend' => '',
                                'append' => '',
                                'formatting' => 'none',
                                'maxlength' => '',
                            ),
                            array(
                                'key' => 'field_form_test_packages_option_title',
                                'label' => __('Title', ProRMTheme::TEXTDOMAIN),
                                'name' => 'form_test_packages_option_title',
                                'type' => 'text',
                                'required' => 1,
                                'column_width' => 50,
                                'default_value' => '',
                                'placeholder' => '',
                                'prepend' => '',
                                'append' => '',
                                'formatting' => 'none',
                                'maxlength' => '',
                            ),
                        ),
                        'row_min' => '',
                        'row_limit' => '',
                        'layout' => 'table',
                        'button_label' => __('Add Option', ProRMTheme::TEXTDOMAIN),
                    ),
                ),
                'location' => $locations,
                'options' => array (
                    'position' => 'normal',
                    'layout' => 'no_box',
                    'hide_on_screen' => array (
                    ),
                ),
                'menu_order' => 0,
            ));
        }
    }

    /**
     * @return array
     */
    public function getTestPackageOptions()
    {
        $options = array();
        if (have_rows('form_test_packages', $this->post->ID)) {
            while (have_rows('form_test_packages', $this->post->ID)) {
                the_row();
                // display a sub field value
                $value = get_sub_field('form_test_packages_option_value');
                $title = get_sub_field('form_test_packages_option_title');
                $options[$value] = $title;
            }
        }
        return $options;
    }
}