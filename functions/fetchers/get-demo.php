<?php

class Fetcher_GetDemo extends ProRMFormFetcher
{
    protected $formSubject = array(
        'de' => 'Get Demo DE',
        'en' => 'Get Demo EN',
        'es' => 'Get Demo ES',
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