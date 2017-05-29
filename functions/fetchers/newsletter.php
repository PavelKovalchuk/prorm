<?php

class Fetcher_NewsLetter extends ProRMFormFetcher
{
    protected $formSubject = array(
        'de' => 'proMX Newsletter-DE',
        'en' => 'proMX Newsletter-EN',
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

        $this->required = array(
            'salutation' => __('Salutation', ProRMTheme::TEXTDOMAIN),
            'last_name' => __('Last Name', ProRMTheme::TEXTDOMAIN),  // 'name' => __('Name', ProRMTheme::TEXTDOMAIN),
            'company' => __('Company', ProRMTheme::TEXTDOMAIN),
            'email' => __('E-Mail', ProRMTheme::TEXTDOMAIN),
        );
    }
}