<?php

class ProRMSettingsReference
{
    const OPTION_NAME = 'references';

    protected $options;

    protected $fields;

    public function __construct()
    {
        add_action('admin_menu',  array($this, 'addSettingsSections'));
        add_action('admin_init' , array($this, 'registerFields'));
        $this->options = get_option(self::OPTION_NAME);
        $this->fields = array(
            'references-section-general' => array(
                
                array(
                    'name' => 'parent_page_en',
                    'label' => __('Parent page EN', ProRMTheme::TEXTDOMAIN),
                ),
                array(
                    'name' => 'parent_page_de',
                    'label' => __('Parent page DE', ProRMTheme::TEXTDOMAIN),
                ),
                array(
                    'name' => 'parent_page_es',
                    'label' => __('Parent page ES', ProRMTheme::TEXTDOMAIN),
                ),
                
//                array(
//                    'name' => 'customer_profile_header_en',
//                    'label' => __('Customer profile header EN', ProRMTheme::TEXTDOMAIN),
//                ),
//                array(
//                    'name' => 'customer_profile_header_de',
//                    'label' => __('Customer profile header DE', ProRMTheme::TEXTDOMAIN),
//                ),
//                array(
//                    'name' => 'customer_profile_header_es',
//                    'label' => __('Customer profile header ES', ProRMTheme::TEXTDOMAIN),
//                ),
               
                array(
                    'name' => 'website_header_en',
                    'label' => __('Website header EN', ProRMTheme::TEXTDOMAIN),
                ),
                array(
                    'name' => 'website_header_de',
                    'label' => __('Website header DE', ProRMTheme::TEXTDOMAIN),
                ),
                array(
                    'name' => 'website_header_es',
                    'label' => __('Website header ES', ProRMTheme::TEXTDOMAIN),
                ),
                array(
                    'name' => 'customer_header_en',
                    'label' => __('Customer header EN', ProRMTheme::TEXTDOMAIN),
                ),
                array(
                    'name' => 'customer_header_de',
                    'label' => __('Customer header DE', ProRMTheme::TEXTDOMAIN),
                ),
                array(
                    'name' => 'customer_header_es',
                    'label' => __('Customer header ES', ProRMTheme::TEXTDOMAIN),
                ),
                array(
                    'name' => 'customer_size_header_en',
                    'label' => __('Customer size header EN', ProRMTheme::TEXTDOMAIN),
                ),
                array(
                    'name' => 'customer_size_header_de',
                    'label' => __('Customer size header DE', ProRMTheme::TEXTDOMAIN),
                ),
                array(
                    'name' => 'customer_size_header_es',
                    'label' => __('Customer size header ES', ProRMTheme::TEXTDOMAIN),
                ),
                array(
                    'name' => 'region_en',
                    'label' => __('Region EN', ProRMTheme::TEXTDOMAIN),
                ),
                array(
                    'name' => 'region_de',
                    'label' => __('Region DE', ProRMTheme::TEXTDOMAIN),
                ),
                array(
                    'name' => 'region_es',
                    'label' => __('Region ES', ProRMTheme::TEXTDOMAIN),
                ),
                array(
                    'name' => 'industry_en',
                    'label' => __('Industry EN', ProRMTheme::TEXTDOMAIN),
                ),
                array(
                    'name' => 'industry_de',
                    'label' => __('Industry DE', ProRMTheme::TEXTDOMAIN),
                ),
                array(
                    'name' => 'industry_es',
                    'label' => __('Industry ES', ProRMTheme::TEXTDOMAIN),
                ),
                array(
                    'name' => 'software_en',
                    'label' => __('Software EN', ProRMTheme::TEXTDOMAIN),
                ),
                array(
                    'name' => 'software_de',
                    'label' => __('Software DE', ProRMTheme::TEXTDOMAIN),
                ),
                array(
                    'name' => 'software_es',
                    'label' => __('Software ES', ProRMTheme::TEXTDOMAIN),
                ),
            
            ),
            
            'references-section-images' => array(
//                array(
//                    'name' => 'customer_img',
//                    'label' => __('Customer image ID', ProRMTheme::TEXTDOMAIN),
//                ),
                array(
                    'name' => 'website_img',
                    'label' => __('Website image ID', ProRMTheme::TEXTDOMAIN),
                ),
                array(
                    'name' => 'customer_size_img',
                    'label' => __('Customer size image ID', ProRMTheme::TEXTDOMAIN),
                ),
                array(
                    'name' => 'region_img',
                    'label' => __('Region image ID', ProRMTheme::TEXTDOMAIN),
                ),
                array(
                    'name' => 'industry_img',
                    'label' => __('Industry image ID', ProRMTheme::TEXTDOMAIN),
                ),
                array(
                    'name' => 'software_img',
                    'label' => __('Software image ID', ProRMTheme::TEXTDOMAIN),
                ),
            )
           
           
        );
    }

    public function addSettingsSections()
    {
        add_options_page('References Settings', 'References Settings', 'manage_options', 'references', array($this, 'optionsPageCallback'));
    }

    public function registerFields()
    {
        register_setting('references-group', self::OPTION_NAME);
        add_settings_section('references-section-general',
            __('General Headers', ProRMTheme::TEXTDOMAIN), array($this, 'settingsSectionCallback'), 'references');
        add_settings_section('references-section-images',
            __('Images on the template', ProRMTheme::TEXTDOMAIN), array($this, 'settingsSectionCallback'), 'references');

        foreach ($this->fields as $section => $sectionFields) {
            foreach ($sectionFields as $field) {
                add_settings_field(
                    $field['name'],
                    sprintf('<label for="%s">%s</label>', $field['name'], $field['label']) ,
                    isset($field['callback'])
                        ? $field['callback']
                        : array($this, 'field_' . $field['name']),
                    'references',
                    $section
                );
            }
        }
    }

    public function optionsPageCallback()
    {
        include dirname(__FILE__) . '/settings/references-options-page.php';
    }

    public function settingsSectionCallback($args)
    {
        $path = dirname(__FILE__) . DIRECTORY_SEPARATOR . 'settings'
            . DIRECTORY_SEPARATOR . str_replace('references-section-', '', $args['id']) . '.php';
        if (is_readable($path)) {
            include $path;
        }
    }

    public function __call($name, $args)
    {
        if (strpos($name, 'field_forms_options_') === 0) {
            $this->fieldFormOption(substr($name, 6));
            return;
        }
        if (strpos($name, 'field_') === 0) {
            $this->fieldHtml(substr($name, 6));
            
            return;
        }
    }

    public function fieldHtml($field, $type = 'text') {
        switch ($field) {
            
            case 'customer_img':
            case 'website_img':
            case 'customer_size_img': 
            case 'region_img': 
            case 'industry_img': 
            case 'software_img': 
                $value = isset($this->options[$field]) ? esc_attr($this->options[$field]) : '';
                printf('<input type="number" id="%s" name="%s[%s]" value="%s" />',
                    $field, self::OPTION_NAME, $field, $value);
                
                
                if(intval($value)){
                    echo '<p class="description">' . wp_get_attachment_url( $value ) . '</p>';
                    wp_get_attachment_image_url( $value, 'thumbnail' );
                    echo '<img src=" ' . wp_get_attachment_image_url( $value, 'thumbnail' ) . ' " />';
                    
                    echo '<a href=" ' . admin_url( 'upload.php?item=', $_SERVER["REQUEST_SCHEME"] )  . $value .' " >EDIT IMAGE</a>';
                }

                break;
           
            default:
                printf('<input type="text" id="%s" name="%s[%s]" value="%s" />',
                    $field, self::OPTION_NAME, $field,
                    isset($this->options[$field]) ? esc_attr($this->options[$field]) : '');
        }
    }

    /**
     * @deprecated
     * @param $field
     */
    public function fieldFormOption($field) {
        switch ($field) {
            default:
                printf('<textarea id="%s" name="%s[%s]" cols="40" rows="6">%s</textarea>',
                    $field, self::OPTION_NAME, $field,
                    isset($this->options[$field]) ? esc_attr($this->options[$field]) : '');
                echo '<p class="description">Formats: <strong>value | title</strong> or just <strong>title</strong>. One line &mdash; one option (empty lines are skipped).</p>';
        }
    }

    public function getOption($name)
    {
        return isset($this->options[$name]) ? $this->options[$name] : null;
    }
}