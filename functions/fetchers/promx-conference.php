<?php

class Fetcher_PromxConference extends ProRMFormFetcher
{


    protected $formSubject = array(
        'en' => 'Conference-2016',
    );

    public function __construct($source)
    {
        parent::__construct($source);

        $this->fieldsMap = array(
            'last_name' => 'Name',
            'company' => 'Company',
            'email' => 'E-Mail',
            'phone_number' => 'Phone',

        );

        $this->required= array(
            'last_name' => 'Name',
            'company' => 'Company',
            'email' => 'E-Mail',
        );
        
        $this->validated= array(
            'last_name' => 'Name',
            'company' => 'Company',
            'phone_number' => 'Phone',
        );
        



    }


}