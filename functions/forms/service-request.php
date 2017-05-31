<?php

class ProRMForms_ServiceRequest extends ProRMForms_Abstract
{
    const FORM_NAME = 'service-request';

    public function __construct(WP_Post $formPost)
    {
        parent::__construct($formPost);

        $this->fetcher = new Fetcher_ServiceRequest($_POST['pro']);
        $this->formName = self::FORM_NAME;

    }

    public static function addCustomFields()
    {
        $locations = self::getLocations(self::FORM_NAME);
        if ($locations) {
            register_field_group(array(
                'id' => 'acf_support-form-attributes',
                'title' => __('Support Form Attributes', ProRMTheme::TEXTDOMAIN),
                'fields' => array (
                    array(
                        'key' => 'field_form_support_topics',
                        'label' => __('Topics', ProRMTheme::TEXTDOMAIN),
                        'name' => 'form_support_topics',
                        'type' => 'repeater',
                        'sub_fields' => array(
                            array(
                                'key' => 'field_form_support_topics_option_value',
                                'label' => __('Value (for CRM)', ProRMTheme::TEXTDOMAIN),
                                'name' => 'form_support_topics_option_value',
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
                                'key' => 'field_form_support_topics_option_title',
                                'label' => __('Title', ProRMTheme::TEXTDOMAIN),
                                'name' => 'form_support_topics_option_title',
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
    public function getTopicOptions()
    {
        $options = array();
        if (have_rows('form_support_topics', $this->post->ID)) {
            while (have_rows('form_support_topics', $this->post->ID)) {
                the_row();
                // display a sub field value
                $value = get_sub_field('form_support_topics_option_value');
                $title = get_sub_field('form_support_topics_option_title');
                $options[$value] = $title;
            }
        }
        return $options;
    }
    
     
    /**
     * @return array
     */
    public function getDynamicsVersionOptions()
    {
        $options = array(
            '0' => get_field('dynamics_versions_header', $this->post->ID)
        );

        $rows = get_field('dynamics_version', $this->post->ID);
        if($rows)
        {
            foreach($rows as $row){
                $value = $row['dynamics_version_value'];
                $title = $row['dynamics_version_title'];
                $options[$value] = $title;
            }

        }
               
        return $options;
    }    

    /**
     * @return array
     */
    public function getPrormProductOptions()
    {
        $options = array(
            '0' => get_field('prorm_product_header', $this->post->ID)
        );

        $rows = get_field('prorm_product', $this->post->ID);
        if($rows)
        {
            foreach($rows as $row){
                $value = $row['prorm_product_value'];
                $title = $row['prorm_product_title'];
                $options[$value] = $title;
            }

        }
               
        return $options;
    }        
}