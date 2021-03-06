<?php

class Fetcher_RegisterWebinar extends ProRMFormFetcher
{
    protected $formSubject = array(
        'de' => 'Register Webinar DE',
        'en' => 'Register Webinar EN',
        'es' => 'Register Webinar ES',
    );
    
    protected $isFormOnManyPages = true;

    public function __construct($source)
    {
        parent::__construct($source);

        /** @var ProRMSettings $settings */
        $settings = Registry::get('settings');
        
        $this->required['salutation'] = __('Gender', ProRMTheme::TEXTDOMAIN);
        $this->required['first_name'] = __('First Name', ProRMTheme::TEXTDOMAIN);
        $this->required['last_name'] = __('Last Name', ProRMTheme::TEXTDOMAIN);
        $this->required['company'] = __('Company', ProRMTheme::TEXTDOMAIN);
        $this->required['email'] = __('E-Mail', ProRMTheme::TEXTDOMAIN);
        
    }
}