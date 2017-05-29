<?php

class Fetcher_Microsoft extends ProRMFormFetcher
{
    protected $formSubject = array(
        'de' => 'proRM-Bei-Microsoft-erleben DE',
        'en' => 'proRM-Bei-Microsoft-erleben EN',
        'es' => 'proRM-Bei-Microsoft-erleben ES',
    );

    public function __construct($source)
    {
        parent::__construct($source);

        $this->fieldsMap['desired_date'] = 'EventName';

        $this->required = array(
            'first_name' => __('First Name', ProRMTheme::TEXTDOMAIN),
            'email' => __('E-Mail', ProRMTheme::TEXTDOMAIN),
            'company' => __('Company', ProRMTheme::TEXTDOMAIN),
            'data_usage' => __('Data usage', ProRMTheme::TEXTDOMAIN),
            'desired_date' => __('Event Name', ProRMTheme::TEXTDOMAIN)

        );

    }

    public function fetch()
    {
        parent::fetch();
        $this->getCustomFields();
        session_start();
        $_SESSION['mappedData'] = serialize($this->mappedData);
        return $this->mappedData;
    }

    public function getCustomFields()
    {
        // if selected Event get custom params for this event sending to CRM
        $chose_event = $this->data['desired_date'];
        if ($chose_event) {
            $form = Tpl::get('form');
            $options = $form->getSendingEventOptions($chose_event);
            $this->mappedData['StartDate']      = $options['StartDate'] ? date('Y-m-d H:i:s O', $options['StartDate']) : '';
            $this->mappedData['EndDate']        = $options['EndDate'] ? date('Y-m-d H:i:s O', $options['EndDate']) : '';
            $this->mappedData['Description']    = $options['Description'] ? $options['Description'] : '';
            
        }
    }

}