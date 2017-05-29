<?php

class ProRMForms_Webcast extends ProRMForms_Abstract
{
    const FORM_NAME = 'webcast';

    public function __construct(WP_Post $formPost)
    {
        parent::__construct($formPost);

        $this->fetcher = new Fetcher_Webcast($_POST['pro']);

        $this->formName = self::FORM_NAME;
    }

    public static function addCustomFields()
    {
        $locations = self::getLocations(self::FORM_NAME);
        if ($locations) {
            register_field_group(array(
                'id' => 'acf_webinar-form-attributes',
                'title' => __('Webinar Form Attributes', ProRMTheme::TEXTDOMAIN),
                'fields' => array (
                    array(
                        'key' => 'field_form_editions',
                        'label' => __('Editions', ProRMTheme::TEXTDOMAIN),
                        'name' => 'form_editions',
                        'type' => 'repeater',
                        'sub_fields' => array(
                            array(
                                'key' => 'field_form_editions_option_value',
                                'label' => __('Value (for CRM)', ProRMTheme::TEXTDOMAIN),
                                'name' => 'form_editions_option_value',
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
                                'key' => 'field_form_editions_option_title',
                                'label' => __('Title', ProRMTheme::TEXTDOMAIN),
                                'name' => 'form_editions_option_title',
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
                'menu_order' => 5,
            ));
        }
    }

    /**
     * @return array
     */
    public function getEditionOptions()
    {
        $options = array();
        if (have_rows('form_editions', $this->post->ID)) {
            while (have_rows('form_editions', $this->post->ID)) {
                the_row();
                // display a sub field value
                $value = get_sub_field('form_editions_option_value');
                $title = get_sub_field('form_editions_option_title');
                $options[$value] = $title;
            }
        }
        return $options;

    }

    /*  public function getAllAppsLink()
      {
          return get_field('form_request_all_apps_link', $this->post->ID);
      }

      public function getAllEditionsLink()
      {
          return get_field('form_request_all_editions_link', $this->post->ID);
      }*/

}