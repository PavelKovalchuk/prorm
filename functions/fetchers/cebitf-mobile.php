<?php

class Fetcher_CebitfMobile extends ProRMFormFetcher
{
    /** @var  ProRMForms_Webinar */
    protected $form;

    /**
     * @param mixed $form
     */
    public function setForm($form)
    {
        $this->form = $form;
    }
	
	 protected $formSubject = array(
        'de' => 'Cebit-2016' 
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
            'first_name' => 'Vorname',
            'company' => 'Firma',
            'email' => 'E-Mail',


        );



    }
}