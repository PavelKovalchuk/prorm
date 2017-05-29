<?php

class Fetcher_Subscribe extends ProRMFormFetcher
{
    protected $formSubject = array(
        'de' => 'Subscribe DE',
        'en' => 'Subscribe EN',
    );

    public function __construct($source)
    {
        parent::__construct($source);

        $this->fieldsMap = array(
            'salutation' => 'Anrede',
            'first_name' => 'Vorname', //'name' => 'Name',
            'last_name' => 'Nachname', // required
            'company' => 'Firma', // required
            'email' => 'E-Mail', // required
        );

        $this->required['first_name'] = __('First Name', ProRMTheme::TEXTDOMAIN);
        $this->required['email'] = __('E-Mail', ProRMTheme::TEXTDOMAIN);
        $this->required['company'] = __('Company', ProRMTheme::TEXTDOMAIN);
    }
}