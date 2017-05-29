<?php

class Fetcher_Cebitf extends ProRMFormFetcher
{
     protected $formSubject = array(
        'de' => 'Cebit-2016' 
    );

    public function __construct($source)
    {
        parent::__construct($source);

        $this->fieldsMap = array(
            'first_name' => 'Name',
            'company' => 'Company',
            'email' => 'E-Mail',
            'phone_number' => 'Phone',
            'date_traviata' => 'Datum',
			'time' => 'Gewünschte Zeit',
            'eintrittskarte' => 'Eintrittskarte',
        );

		 $this->required= array(
             'first_name' => 'Name',
             'company' => 'Company',
             'email' => 'E-Mail',

        );



    }
}