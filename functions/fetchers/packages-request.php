<?php

class Fetcher_PackagesRequest  extends ProRMFormFetcher
{
    protected $formSubject = array(
        'de' => 'proMX Leistungspakete-Anfrage-DE',
        'en' => 'proMX Packages-Request-EN',

    );

    public function __construct($source)
    {
        parent::__construct($source);

        $this->fieldsMap['package'] = 'Paket';

    }
}