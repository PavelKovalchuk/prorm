<?php

class ProRMSettingsForm
{
    const OPTION_NAME = 'prormform';

    protected $options;

    protected $fields;

    public function __construct()
    {
        add_action('admin_menu',  array($this, 'addSettingsSections'));
        add_action('admin_init' , array($this, 'registerFields'));
        $this->options = get_option(self::OPTION_NAME);
        $this->fields = array(
            'prormform-section-events' => array(
                array(
                    'name' => 'add_events_to_email',
                    'label' => __('Add events to email', ProRMTheme::TEXTDOMAIN),
                ),
                array(
                    'name' => 'events_en',
                    'label' => __('Events EN', ProRMTheme::TEXTDOMAIN),
                ),
                array(
                    'name' => 'events_de',
                    'label' => __('Events DE', ProRMTheme::TEXTDOMAIN),
                ),
            )
        );
    }

    public function addSettingsSections()
    {
        add_submenu_page('edit.php?post_type=form', 'Form Settings', 'Form Settings', 'prormform', 'settingsform', array($this, 'optionsPageCallback'));
        //add_options_page('proRM', 'proRM', 'manage_options', 'prorm', array($this, 'optionsPageCallback'));
    }

    public function registerFields()
    {
        register_setting('prormform-group', self::OPTION_NAME);
        add_settings_section('prormform-section-events',
            __('Events', ProRMTheme::TEXTDOMAIN), array($this, 'settingsSectionCallback'), 'prormform');
        foreach ($this->fields as $section => $sectionFields) {
            foreach ($sectionFields as $field) {
                add_settings_field(
                    $field['name'],
                    sprintf('<label for="%s">%s</label>', $field['name'], $field['label']) ,
                    isset($field['callback'])
                        ? $field['callback']
                        : array($this, 'field_' . $field['name']),
                    'prormform',
                    $section
                );
            }
        }
    }

    public function optionsPageCallback()
    {
        include dirname(__FILE__) . '/forms/settings/options-page.php';
    }

    public function settingsSectionCallback($args)
    {
        $path = dirname(__FILE__) . DIRECTORY_SEPARATOR . 'settings'
            . DIRECTORY_SEPARATOR . str_replace('prormform-section-', '', $args['id']) . '.php';
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
            case 'add_events_to_email':
                printf('<input type="checkbox" id="%s" name="%s[%s]" value="1" %s/>',
                    $field, self::OPTION_NAME, $field,
                    isset($this->options[$field]) && $this->options[$field] ? 'checked' : '');
                break;
            // simple inputs
            default:
                printf('<textarea type="text" id="%s" name="%s[%s]">%s</textarea>',
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