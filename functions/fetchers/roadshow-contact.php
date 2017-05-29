<?php

class Fetcher_RoadshowContact extends ProRMFormFetcher
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
        'de' => 'Roadshow-Reinvention-Contact-2016'
    );

    public function __construct($source)
    {
        parent::__construct($source);

        $this->fieldsMap = array(
            'last_name' => 'Name',
            'company' => 'Firma',
            'email' => 'E-Mail',
            'phone_number' => 'Telefon',
            'message' => 'Anmerkungen'
        );

        $this->required= array(
            'last_name' => 'Name',
            'company' => 'Firma',
            'email' => 'E-Mail',
        );

        $this->validated= array(
            'last_name' => 'Name',
            'company' => 'Firma',
            'phone_number' => 'Telefon',
            'message' => 'Anmerkungen'
        );



    }


}