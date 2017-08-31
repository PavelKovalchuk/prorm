<?php

class ProRMSettings
{
    const OPTION_NAME = 'prorm';

    protected $options;

    protected $fields;

    public function __construct()
    {
        add_action('admin_menu',  array($this, 'addSettingsSections'));
        add_action('admin_init' , array($this, 'registerFields'));
        $this->options = get_option(self::OPTION_NAME);
        $this->fields = array(
            'prorm-section-general' => array(
// Commented to enable fast in case of need.
//                array(
//                    'name' => 'general_redirect_by_lang',
//                    'label' => __('Redirect by language', ProRMTheme::TEXTDOMAIN),
//                ),
//                array(
//                    'name' => 'general_redirect_to_en',
//                    'label' => __('English version link', ProRMTheme::TEXTDOMAIN),
//                ),
                array(
                    'name' => 'legal_copyright_text',
                    'label' => __('Copyright Text', ProRMTheme::TEXTDOMAIN),
                ),
                array(
                    'name' => 'general_slider_interval',
                    'label' => __('Slider Interval', ProRMTheme::TEXTDOMAIN),
                ),
                array(
                    'name' => 'general_slider_changing_speed',
                    'label' => __('Slider Changing Speed', ProRMTheme::TEXTDOMAIN),
                ),
                array(
                    'name' => 'general_help_text_enable',
                    'label' => __('Help Text: Enable', ProRMTheme::TEXTDOMAIN),
                ),
                array(
                    'name' => 'angular_mode_news_enable',
                    'label' => __('Angular mode for news: Enable', ProRMTheme::TEXTDOMAIN),
                ),
                array(
                    'name' => 'general_help_text_interval',
                    'label' => __('Help Text: Interval (milliseconds)', ProRMTheme::TEXTDOMAIN),
                ),
                array(
                    'name' => 'general_alt_text_for_images',
                    'label' => __('General ALT text for images', ProRMTheme::TEXTDOMAIN),
                ),
                array(
                    'name' => 'header_alt_text_for_image',
                    'label' => __('HEADER ALT text for image', ProRMTheme::TEXTDOMAIN),
                ),
              
            ),
            'prorm-section-social' => array(
                array(
                    'name' => 'social_xing_link_common',
                    'label' => __('Xing link common', ProRMTheme::TEXTDOMAIN),
                ),
                array(
                    'name' => 'social_facebook_link_en',
                    'label' => __('Facebook link EN', ProRMTheme::TEXTDOMAIN),
                ),
                array(
                    'name' => 'social_twitter_link_en',
                    'label' => __('Twitter link EN', ProRMTheme::TEXTDOMAIN),
                ),
                array(
                    'name' => 'social_youtube_link_en',
                    'label' => __('Youtube link EN', ProRMTheme::TEXTDOMAIN),
                ),
                
                array(
                    'name' => 'social_facebook_link_es',
                    'label' => __('Facebook link ES', ProRMTheme::TEXTDOMAIN),
                ),
                array(
                    'name' => 'social_twitter_link_es',
                    'label' => __('Twitter link ES', ProRMTheme::TEXTDOMAIN),
                ),
                array(
                    'name' => 'social_youtube_link_es',
                    'label' => __('Youtube link ES', ProRMTheme::TEXTDOMAIN),
                ),

                array(
                    'name' => 'social_facebook_link_de',
                    'label' => __('Facebook link DE', ProRMTheme::TEXTDOMAIN),
                ),
                array(
                    'name' => 'social_twitter_link_de',
                    'label' => __('Twitter link DE', ProRMTheme::TEXTDOMAIN),
                ),
                array(
                    'name' => 'social_youtube_link_de',
                    'label' => __('Youtube link DE', ProRMTheme::TEXTDOMAIN),
                ),
				    array(
                    'name' => 'social_youtube_video_de',
                    'label' => __('Youtube video DE', ProRMTheme::TEXTDOMAIN),
                ),
				    array(
                    'name' => 'social_youtube_video_en',
                    'label' => __('Youtube video EN', ProRMTheme::TEXTDOMAIN),
                ),
                
                array(
                    'name' => 'social_youtube_video_es',
                    'label' => __('Youtube video ES', ProRMTheme::TEXTDOMAIN),
                ),
				    array(
                    'name' => 'social_linkedin_link',
                    'label' => __('Linkedin link', ProRMTheme::TEXTDOMAIN),
                ),
            ),
            'prorm-section-forms' => array(
                array(
                    'name' => 'forms_crm_is_testing_mode',
                    'label' => __('Testing Mode', ProRMTheme::TEXTDOMAIN),
                ),
                array(
                    'name' => 'forms_crm_to_email_live',
                    'label' => __('CRM E-Mail', ProRMTheme::TEXTDOMAIN),
                ),
                array(
                    'name' => 'forms_crm_to_email_test',
                    'label' => __('CRM Test E-Mail', ProRMTheme::TEXTDOMAIN),
                ),
                array(
                    'name' => 'forms_crm_to_email_support',
                    'label' => __('E-Mail for support requests', ProRMTheme::TEXTDOMAIN),
                ),
                array(
                    'name' => 'forms_crm_to_email_support_test',
                    'label' => __('E-Mail Test for support requests', ProRMTheme::TEXTDOMAIN),
                ),
                array(
                    'name' => 'sitekey_recaptcha',
                    'label' => __('Sitekey for Google recaptcha', ProRMTheme::TEXTDOMAIN),
                ),
                array(
                    'name' => 'secret_sitekey_recaptcha',
                    'label' => __('SECRET Sitekey for Google recaptcha', ProRMTheme::TEXTDOMAIN),
                ),
// Commented because From name and email are managed via wp-smtp plugin.
//                array(
//                    'name' => 'forms_crm_from_email',
//                    'label' => __('Send from E-Mail', ProRMTheme::TEXTDOMAIN),
//                ),
//                array(
//                    'name' => 'forms_crm_from_name',
//                    'label' => __('Send from name', ProRMTheme::TEXTDOMAIN),
//                ),
            ),
            'prorm-section-default-setting' => array(
                array(
                    'name' => 'about_us_in_numbers_header_en',
                    'label' => __('About us in numbers header En', ProRMTheme::TEXTDOMAIN),
                ),
                array(
                    'name' => 'about_us_in_numbers_header_de',
                    'label' => __('About us in numbers header DE', ProRMTheme::TEXTDOMAIN),
                ),
                array(
                    'name' => 'about_us_in_numbers_header_es',
                    'label' => __('About us in numbers header ES', ProRMTheme::TEXTDOMAIN),
                ),
                array(
                    'name' => 'customers_words_header_en',
                    'label' => __('Customers words header En', ProRMTheme::TEXTDOMAIN),
                ),
                array(
                    'name' => 'customers_words_header_de',
                    'label' => __('Customers words header DE', ProRMTheme::TEXTDOMAIN),
                ),
                array(
                    'name' => 'customers_words_header_es',
                    'label' => __('Customers words header ES', ProRMTheme::TEXTDOMAIN),
                ),
                array(
                    'name' => 'video_slider_header_en',
                    'label' => __('Video slider header En', ProRMTheme::TEXTDOMAIN),
                ),
                array(
                    'name' => 'video_slider_header_de',
                    'label' => __('Video slider header DE', ProRMTheme::TEXTDOMAIN),
                ),
                array(
                    'name' => 'video_slider_header_es',
                    'label' => __('Video slider header ES', ProRMTheme::TEXTDOMAIN),
                ),
                array(
                    'name' => 'our_focus_header_en',
                    'label' => __('Our focus header En', ProRMTheme::TEXTDOMAIN),
                ),
                array(
                    'name' => 'our_focus_header_de',
                    'label' => __('Our focus header DE', ProRMTheme::TEXTDOMAIN),
                ),
                array(
                    'name' => 'our_focus_header_es',
                    'label' => __('Our focus header ES', ProRMTheme::TEXTDOMAIN),
                ),
                array(
                    'name' => 'image_placeholder',
                    'label' => __('Image Placeholder', ProRMTheme::TEXTDOMAIN),
                ),
                array(
                    'name' => 'news_image_placeholder',
                    'label' => __('News Image Placeholder', ProRMTheme::TEXTDOMAIN),
                )
            )
        );
    }

    public function addSettingsSections()
    {
        add_options_page('proRM', 'proRM', 'manage_options', 'prorm', array($this, 'optionsPageCallback'));
    }

    public function registerFields()
    {
        register_setting('prorm-group', self::OPTION_NAME);
        add_settings_section('prorm-section-general',
            __('General', ProRMTheme::TEXTDOMAIN), array($this, 'settingsSectionCallback'), 'prorm');
        add_settings_section('prorm-section-social',
            __('Social', ProRMTheme::TEXTDOMAIN), array($this, 'settingsSectionCallback'), 'prorm');
        add_settings_section('prorm-section-forms',
            __('Forms', ProRMTheme::TEXTDOMAIN), array($this, 'settingsSectionCallback'), 'prorm');
        add_settings_section('prorm-section-default-setting',
            __('Default Widget text setting', ProRMTheme::TEXTDOMAIN), array($this, 'settingsSectionCallback'), 'prorm');

        foreach ($this->fields as $section => $sectionFields) {
            foreach ($sectionFields as $field) {
                add_settings_field(
                    $field['name'],
                    sprintf('<label for="%s">%s</label>', $field['name'], $field['label']) ,
                    isset($field['callback'])
                        ? $field['callback']
                        : array($this, 'field_' . $field['name']),
                    'prorm',
                    $section
                );
            }
        }
    }

    public function optionsPageCallback()
    {
        include dirname(__FILE__) . '/settings/options-page.php';
    }

    public function settingsSectionCallback($args)
    {
        $path = dirname(__FILE__) . DIRECTORY_SEPARATOR . 'settings'
            . DIRECTORY_SEPARATOR . str_replace('prorm-section-', '', $args['id']) . '.php';
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
            // checboxes
            case 'forms_crm_is_testing_mode':
            case 'general_redirect_by_lang':
                printf('<input type="checkbox" id="%s" name="%s[%s]" value="1" %s/>',
                    $field, self::OPTION_NAME, $field,
                    isset($this->options[$field]) && $this->options[$field] ? 'checked' : '');
                break;
            case 'general_help_text_enable':
                printf('<input type="checkbox" id="%s" name="%s[%s]" value="1" %s/>',
                    $field, self::OPTION_NAME, $field,
                    isset($this->options[$field]) && $this->options[$field] ? 'checked' : '');
                break;
            case 'angular_mode_news_enable':
                printf('<input type="checkbox" id="%s" name="%s[%s]" value="1" %s/>',
                    $field, self::OPTION_NAME, $field,
                    isset($this->options[$field]) && $this->options[$field] ? 'checked' : '');
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