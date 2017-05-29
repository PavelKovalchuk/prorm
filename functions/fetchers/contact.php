<?php

class Fetcher_Contact extends ProRMFormFetcher
{
    protected $formSubject = array(
        'de' => 'proMX Kontakt-DE',
        'en' => 'proMX Contact-EN',

    );

    public function __construct($source)
    {
        parent::__construct($source);
    }
}