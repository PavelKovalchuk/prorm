<?php

class Fetcher_Conference extends ProRMFormFetcher
{


    protected $formSubject = array(
        'en' => 'proMX-Partner-Conference-2016',
    );

    public function __construct($source)
    {
        parent::__construct($source);

       /* $this->fieldsMap = array(
            'last_name' => 'Name',
            'company' => 'Company',
            'email' => 'E-Mail',
            'phone_number' => 'Phone',

        );

        $this->required= array(
            'last_name' => 'Name',
            'company' => 'Company',
            'email' => 'E-Mail',
        );*/



    }


}