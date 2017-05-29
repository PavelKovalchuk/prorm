<?php

class Fetcher_RoadshowMobile extends ProRMFormFetcher
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
            'city_mobile' => 'Ort',
            'date_mobile' => 'Datum',
        );

        $this->required= array(
            'last_name' => 'Name',
            'company' => 'Firma',
            'email' => 'E-Mail',
        );

        $this->validated= array(
            'last_name' => 'Name',
            'company' => 'Firma',
            'date_mobile' => 'Datum',
            'phone_number' => 'Telefon',
        );
    }
}