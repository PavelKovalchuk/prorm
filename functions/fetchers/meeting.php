<?php

class Fetcher_Meeting extends ProRMFormFetcher
{
    protected $formSubject = array(
        'de' => 'Meeting DE',
        'en' => 'Meeting EN',
        'es' => 'Meeting ES',
    );

    public function __construct($source)
    {
        parent::__construct($source);

        /** @var ProRMSettings $settings */
        $settings = Registry::get('settings');
        
        $this->fieldsMap['event_name'] = 'EventName';
        
        $this->required['salutation'] = __('Gender', ProRMTheme::TEXTDOMAIN);
        $this->required['first_name'] = __('First Name', ProRMTheme::TEXTDOMAIN);
        $this->required['last_name'] = __('Last Name', ProRMTheme::TEXTDOMAIN);
        $this->required['company'] = __('Company', ProRMTheme::TEXTDOMAIN);
        $this->required['email'] = __('E-Mail', ProRMTheme::TEXTDOMAIN);
        $this->required['event_name'] =__('Event Name', ProRMTheme::TEXTDOMAIN);
       
        
    }
}