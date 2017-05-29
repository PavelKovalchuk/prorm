<?php

class Fetcher_PartnerContact extends ProRMFormFetcher
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
        'en' => 'proMX-partner-conference-contact-2016'
    );

    public function __construct($source)
    {
        parent::__construct($source);

        $this->fieldsMap = array(
            'first_name' => 'Name',
            'company' => 'Company',
            'email' => 'E-Mail',
            'phone_number' => 'Phone',
            'message' => 'Message'
        );

        $this->required= array(
            /*'first_name' => 'Vorname',
            'company' => 'Firma',
            'email' => 'E-Mail',*/


        );



    }


}