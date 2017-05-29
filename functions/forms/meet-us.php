<?php

class ProRMForms_MeetUs extends ProRMForms_Abstract
{
    const FORM_NAME = 'meet-us';

    public function __construct(WP_Post $formPost)
    {
        parent::__construct($formPost);

        $this->fetcher = new Fetcher_MeetUs($_POST['pro']);
        $this->formName = self::FORM_NAME;
    }

    public static function addCustomFields()
    {
        $locations = self::getLocations(self::FORM_NAME);
        if ($locations) {
            register_field_group(array(
                'id' => 'acf_microsoft-form-attributes',
                'title' => __('Microsoft Form Attributes', ProRMTheme::TEXTDOMAIN),
                'fields' => array (
                    array(
                        'key' => 'field_form_microsoft_events',
                        'label' => __('Events', ProRMTheme::TEXTDOMAIN),
                        'name' => 'form_microsoft_events',
                        'type' => 'repeater',
                        'sub_fields' => array(
                            array(
                                'key' => 'field_form_microsoft_events_option_value',
                                'label' => __('Event name (for CRM)', ProRMTheme::TEXTDOMAIN),
                                'name' => 'form_microsoft_events_option_value',
                                'type' => 'text',
                                'required' => 1,
                                'column_width' => 15,
                                'default_value' => '',
                                'placeholder' => '',
                                'prepend' => '',
                                'append' => '',
                                'formatting' => 'none',
                                'maxlength' => '',
                            ),
                            array(
                                'key' => 'field_form_microsoft_events_option_startdate',
                                'label' => __('Start Date', ProRMTheme::TEXTDOMAIN),
                                'name' => 'form_microsoft_events_option_startdate',
                                'type' => 'date_time_picker',
                                'show_date' => 'true',
                                'date_format' => 'dd.mm.yy',
                                'time_format' => 'HH:mm',
                                'show_week_number' => 'false',
                                'picker' => 'select',
                                'save_as_timestamp' => 'true',
                                'get_as_timestamp' => 'true',
                                'required' => 1,
                            ),
                            array(
                                'key' => 'field_form_microsoft_events_option_enddate',
                                'label' => __('End Date', ProRMTheme::TEXTDOMAIN),
                                'name' => 'form_microsoft_events_option_enddate',
                                'type' => 'date_time_picker',
                                'show_date' => 'true',
                                'date_format' => 'dd.mm.yy',
                                'time_format' => 'HH:mm',
                                'show_week_number' => 'false',
                                'picker' => 'select',
                                'save_as_timestamp' => 'true',
                                'get_as_timestamp' => 'true',
                                'required' => 1,
                            ),
                            array(
                                'key' => 'field_form_microsoft_events_option_title',
                                'label' => __('Title (for website)', ProRMTheme::TEXTDOMAIN),
                                'name' => 'form_microsoft_events_option_title',
                                'type' => 'text',
                                'required' => 1,
                                'column_width' => 20,
                                'default_value' => '',
                                'placeholder' => '',
                                'prepend' => '',
                                'append' => '',
                                'formatting' => 'none',
                                'maxlength' => '',
                            ),
                            array(
                                'key' => 'field_form_microsoft_events_option_descr',
                                'label' => __('Description (for CRM)', ProRMTheme::TEXTDOMAIN),
                                'name' => 'form_microsoft_events_option_descr',
                                'type' => 'text',
                                'required' => 1,
                                'column_width' => 30,
                                'default_value' => '',
                                'placeholder' => '',
                                'prepend' => '',
                                'append' => '',
                                'formatting' => 'none',
                                'maxlength' => '',
                                'required' => 1,
                            ),
                            array(
                                'key' => 'field_form_microsoft_events_option_agenda',
                                'label' => __('Agenda', ProRMTheme::TEXTDOMAIN),
                                'name' => 'form_microsoft_events_option_agenda',
                                'type' => 'file',
                                'save_format' => 'url',
                                'library' => 'all',
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

    public function getSendingEventOptions($event)
    {
        $options = array();
        if($event){
            if (have_rows('form_microsoft_events', $this->post->ID)) {
                while (have_rows('form_microsoft_events', $this->post->ID)) {
                    the_row();
                    $value = get_sub_field('form_microsoft_events_option_value');
                    if($value == $event){
                        $options['StartDate'] = get_sub_field('form_microsoft_events_option_startdate');
                        $options['EndDate'] = get_sub_field('form_microsoft_events_option_enddate');
                        $options['Description'] = get_sub_field('form_microsoft_events_option_descr');
                    }
                }
            }
        }
        return $options;
    }

    /**
     * @return array
     */
    public function getEventOptions()
    {
        $options = array();
        if (have_rows('form_microsoft_events', $this->post->ID)) {
            while (have_rows('form_microsoft_events', $this->post->ID)) {
                the_row();
                // display a sub field value
                $value = get_sub_field('form_microsoft_events_option_value');
                $title = get_sub_field('form_microsoft_events_option_title');
                $agenda = get_sub_field('form_microsoft_events_option_agenda');
                if ($agenda) {
                    $title .= sprintf(' &rarr; <a href="%s">%s</a>', $agenda, __('Agenda', ProRMTheme::TEXTDOMAIN));
                }
                $options[$value] = $title;
            }
        }
        return $options;
    }

}