<?php

class Fetcher_TraviataMobile extends ProRMFormFetcher
{
    protected $form;

    /**
     * @param mixed $form
     */
    public function setForm($form)
    {
        $this->form = $form;
    }
	
	 protected $formSubject = array(
        'de' => 'Cebit-2016-promx-und-traviata',
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

        $this->required= array(
            'first_name' => 'Name',
            'company' => 'Firma',
            'phone_number' => 'Telefon'
        );
    }
}