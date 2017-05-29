<?php

class Fetcher_Workshopmobile extends ProRMFormFetcher
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
        'de' => 'Handzettel-kostenlosen Workshop',
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
		

		$this->required = array();

        $this->validated = array(
            'first_name' => 'Vorname',
            'company' => 'Firma',
            'phone_number' => 'Telefon'
        );



    }


}