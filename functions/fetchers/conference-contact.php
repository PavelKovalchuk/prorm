<?php

class Fetcher_ConferenceContact extends ProRMFormFetcher
{
	

    protected $formSubject = array(
        'en' => 'Conference Contact-2016'
    );

    public function __construct($source)
    {
        parent::__construct($source);

        $this->fieldsMap = array(
            'last_name' => 'Name',
            'company' => 'Company',
            'email' => 'E-Mail',
            'phone_number' => 'Phone',
            'message' => 'Message'
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
            'message' => 'Message'
        );



    }


}