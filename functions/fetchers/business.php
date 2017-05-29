<?php

class Fetcher_Business extends ProRMFormFetcher
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
        'de' => 'IT&Business Einladung - Kostenloses Workshop',
    );

    public function __construct($source)
    {
        parent::__construct($source);

        $this->fieldsMap = array(
			'salutation' => 'Anrede',
            'first_name' => 'Vorname',
            'company' => 'Firma',
            'email' => 'E-Mail',
            'phone_number' => 'Telefon'
        );
		
		$this->required= array(
			'salutation' => 'Anrede',	
            'first_name' => 'Vorname',
            'company' => 'Firma',
            'email' => 'E-Mail',
        );
        
        $this->validated = array(
            'phone_number' => 'Telefon'
        );



    }


}