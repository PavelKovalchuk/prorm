<?php

class ProRMForms_DinnerContact extends ProRMForms_Abstract
{
    const FORM_NAME = 'dinner-contact';

    public function __construct(WP_Post $formPost)
    {
        parent::__construct($formPost);

        $this->fetcher = new Fetcher_DinnerContact($_POST['pro']);
        $this->formName = self::FORM_NAME;
    }



}