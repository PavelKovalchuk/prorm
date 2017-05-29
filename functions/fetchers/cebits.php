<?php

class Fetcher_Cebits extends ProRMFormFetcher
{


    protected $form;


    public function setForm($form)
    {
        $this->form = $form;
    }

    protected $formSubject = array(
       'de' => 'Cebit-2016-contact' 
    );

    public function __construct($source)
    {
        parent::__construct($source);

        $this->fieldsMap = array(
            'first_name' => 'Vorname',
            'company' => 'Firma',
            'email' => 'E-Mail',
            'phone_number' => 'Telefon',
            'message' => 'Anmerkungen'
        );
		
		 $this->required= array(
            'first_name' => 'Name',
            'company' => 'Firma',
            'email' => 'E-Mail',
        );

        $this->validated = array(
            'phone_number' => 'Telefon',
            'message' => 'Anmerkungen'
        );




    }


}