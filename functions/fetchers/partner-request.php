<?php

class Fetcher_PartnerRequest extends ProRMFormFetcher
{
    protected $formSubject = array(
        'de' => 'proMX Partneranfrage-DE',
        'en' => 'proMX Partner Request-EN',
        'es' => 'proMX Partner Request-ES',
    );

    public function __construct($source)
    {
        parent::__construct($source);
    }
}