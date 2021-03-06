<?php

class Fetcher_TraviataContacts extends ProRMFormFetcher
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
        'de' => 'Cebit-2016-promx-und-traviata-contact',
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
            'first_name' => 'Vorname',
            'company' => 'Firma',
            'email' => 'E-Mail',
        );

        $this->validated= array(
            'first_name' => 'Vorname',
            'company' => 'Firma',
            'phone_number' => 'Telefon',
            'message' => 'Anmerkungen'
        );



    }


}