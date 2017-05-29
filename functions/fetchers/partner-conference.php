<?php

class Fetcher_PartnerConference extends ProRMFormFetcher
{


    protected $formSubject = array(
        'en' => 'proMX-partner-conference-2016'
    );

    public function __construct($source)
    {
        parent::__construct($source);

        $this->fieldsMap = array(
            'first_name' => 'Name',
            'company' => 'Company',
            'email' => 'E-Mail',
            'phone_number' => 'Phone',

        );

        $this->required= array(
          /*  'first_name' => 'Vorname',
            'company' => 'Firma',
            'email' => 'E-Mail',*/


        );



    }


}