<?php

class Fetcher_PartnershipRequest extends ProRMFormFetcher
{
    protected $formSubject = array(
        'de' => 'Partneranfrage auf proRM-Webseite-DE',
        'en' => 'Partneranfrage auf proRM-Webseite-EN',
        'es' => 'Partneranfrage auf proRM-Webseite-ES',
    );

    public function __construct($source)
    {
        parent::__construct($source);

        $this->required['first_name'] = __('First Name', ProRMTheme::TEXTDOMAIN);
        $this->required['email'] = __('E-Mail', ProRMTheme::TEXTDOMAIN);
        $this->required['company'] = __('Company', ProRMTheme::TEXTDOMAIN);
        $this->required['data_usage'] = __('Data usage', ProRMTheme::TEXTDOMAIN);
    }
}