<?php

class Fetcher_Roadshow extends ProRMFormFetcher
{
    protected $formSubject = array(
        'de' => 'Roadshow-Reinvention-2016'

    );

    public function __construct($source)
    {
        parent::__construct($source);

        $this->fieldsMap = array(
            'last_name' => 'Name',
            'company' => 'Firma',
            'email' => 'E-Mail',
            'phone_number' => 'Telefon',
            'city' => 'Ort',
            'date' => 'Datum',
        );

        $this->required= array(
           'last_name' => 'Name',
            'company' => 'Firma',
            'email' => 'E-Mail',
           // 'city' => 'Ort',
        );

        $this->validated= array(
            'last_name' => 'Name',
            'company' => 'Firma',
            'phone_number' => 'Telefon',
            'date' => 'Datum',
        );
    }
}