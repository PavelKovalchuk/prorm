<?php

class ProRMForms_ConferenceContact extends ProRMForms_Abstract
{
    const FORM_NAME = 'conference-contact';

    public function __construct(WP_Post $formPost)
    {
        parent::__construct($formPost);

        $this->fetcher = new Fetcher_ConferenceContact($_POST['pro']);
        $this->formName = self::FORM_NAME;
    }



}