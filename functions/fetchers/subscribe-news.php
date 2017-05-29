<?php

class Fetcher_SubscribeNews extends ProRMFormFetcher
{
    protected $formSubject = array(
        'de' => 'Subscribe News DE',
        'en' => 'Subscribe News EN',
        'es' => 'Subscribe News ES',
    );

    public function __construct($source)
    {
        parent::__construct($source);

        /** @var ProRMSettings $settings */
        $settings = Registry::get('settings');
               
        $this->required['first_name'] = __('First Name', ProRMTheme::TEXTDOMAIN);
        $this->required['email'] = __('E-Mail', ProRMTheme::TEXTDOMAIN);
        
    }
}