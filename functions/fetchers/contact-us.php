<?php

class Fetcher_ContactUs extends ProRMFormFetcher
{
    protected $formSubject = array(
        'de' => 'Kontaktaufnahme über proRM-Webseite_DE',
        'en' => 'Kontaktaufnahme über proRM-Webseite_EN',
        'es' => 'Kontaktaufnahme über proRM-Webseite_ES',
    );

    public function __construct($source)
    {
        parent::__construct($source);

        /** @var ProRMSettings $settings */
        $settings = Registry::get('settings');

        $this->required['first_name'] = __('First Name', ProRMTheme::TEXTDOMAIN);
        $this->required['email'] = __('E-Mail', ProRMTheme::TEXTDOMAIN);
        $this->required['company'] = __('Company', ProRMTheme::TEXTDOMAIN);
        $this->required['data_usage'] = __('Data usage', ProRMTheme::TEXTDOMAIN);
    }
}