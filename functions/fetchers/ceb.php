<?php

class Fetcher_Ceb extends ProRMFormFetcher

{
    protected $form;

  
    public function setForm($form)
    {
        $this->form = $form;
    }


    protected $formSubject = array(
       'de' => 'Cebit-2016-promx-und-traviata' 
    );

    public function __construct($source)
    {
        parent::__construct($source);

        $this->fieldsMap = array(
            'first_name' => 'Name',
            'company' => 'Firma',
            'email' => 'E-Mail',
            'phone_number' => 'Telefon',
			'date_traviata' => 'Datum',
			'time' => 'Gewünschte Zeit',
            'eintrittskarte' => 'Eintrittskarte',
        );

        $this->required= array(
            'first_name' => 'Name',
            'company' => 'Firma',
            'email' => 'E-Mail',
        );
    }
}