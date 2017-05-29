<?php

class Fetcher_Enterprise extends ProRMFormFetcher
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
        'en' => 'proMX-Enterprise package-EN',
		'de' => 'proMX-Enterprise package-DE',
    );

    public function __construct($source)
    {
        parent::__construct($source);

        $this->fieldsMap = array(
            'first_name' => 'Vorname',
            'company' => 'Firma',
            'email' => 'E-Mail',
            'phone_number' => 'Telefon'
			
        );
		
		$this->required= array(
            'first_name' => 'Vorname',
            'company' => 'Firma',
            'email' => 'E-Mail',
        );
        
        $this->validated = array(
            'first_name' => 'Vorname',
            'company' => 'Firma',
            'phone_number' => 'Telefon'

        );
        



    }


}