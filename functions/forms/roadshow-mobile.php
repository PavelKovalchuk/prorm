<?php

class ProRMForms_RoadshowMobile extends ProRMForms_Abstract
{
    const FORM_NAME = 'roadshow-mobile';

    public function __construct(WP_Post $formPost)
    {
        parent::__construct($formPost);

        $this->fetcher = new Fetcher_RoadshowMobile($_POST['pro']);

        $this->formName = self::FORM_NAME;
    }

    public static function addCustomFields()
    {
        $locations = self::getLocations(self::FORM_NAME);
        if ($locations) {
            register_field_group(array(
                'id' => 'acf_roadshow-form-mobile-attributes',
                'title' => __('Roadshow Form Mobile Attributes', ProRMTheme::TEXTDOMAIN),
                'fields' => array (
                    array(
                        'key' => 'field_form_mobile_roadshow',
                        'label' => __('Cities', ProRMTheme::TEXTDOMAIN),
                        'name' => 'form_cities_mobile',
                        'type' => 'repeater',
                        'sub_fields' => array(
                            array(
                                'key' => 'field_form_cities_mobile_option_value',
                                'label' => __('Value (for CRM)', ProRMTheme::TEXTDOMAIN),
                                'name' => 'form_cities_mobile_option_value',
                                'type' => 'text',
                                'required' => 1,
                                'column_width' => 30,
                                'default_value' => '',
                                'placeholder' => '',
                                'prepend' => '',
                                'append' => '',
                                'formatting' => 'none',
                                'maxlength' => '',
                            ),
                            array(
                                'key' => 'field_form_cities_mobile_option_title',
                                'label' => __('Title', ProRMTheme::TEXTDOMAIN),
                                'name' => 'form_cities_mobile_option_title',
                                'type' => 'text',
                                'required' => 1,
                                'column_width' => 30,
                                'default_value' => '',
                                'placeholder' => '',
                                'prepend' => '',
                                'append' => '',
                                'formatting' => 'none',
                                'maxlength' => '',
                            ),

                            array(
                                'key' => 'field_form_mobile_roadshow_date',
                                'label' => __('Date', ProRMTheme::TEXTDOMAIN),
                                'name' => 'field_form_mobile_roadshow_date',
                                'type' => 'date_picker',
                                'column_width' => 30,
                                'show_date' => 'true',
                                'date_format' => 'dd.mm.yy',

                                'show_week_number' => 'false',
                                'picker' => 'select',
                                'save_as_timestamp' => 'true',
                                'get_as_timestamp' => 'true',
                                'required' => 1,
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
                'menu_order' => 5,
            ));
        }
    }

    /**
     * @return array
     */
    public function getCityMobileOption()
    {
        $options = array();
        if (have_rows('form_cities_mobile', $this->post->ID)) {
            while (have_rows('form_cities_mobile', $this->post->ID)) {
                the_row();
                // display a sub field value
                $value = get_sub_field('form_cities_mobile_option_value');
                $title = get_sub_field('form_cities_mobile_option_title');
                $date = get_sub_field('field_form_mobile_roadshow_date');
                $options[$value]['title'] = $title;
                $options[$value]['date'] = $date;
            }
        }
        return $options;

    }

    public function getDateMobileOption()
    {
        $options = array();
        if (have_rows('form_cities_mobile', $this->post->ID)) {
            while (have_rows('form_cities_mobile', $this->post->ID)) {
                the_row();
                $date = get_sub_field('field_form_mobile_roadshow_date');
                $options[$date] = $date;
            }
        }
        return $options;

    }




}