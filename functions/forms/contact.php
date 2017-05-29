<?php

class ProRMForms_Contact extends ProRMForms_Abstract
{
    const FORM_NAME = 'contact';

    public function __construct(WP_Post $formPost)
    {
        parent::__construct($formPost);

        $this->fetcher = new Fetcher_Contact($_POST['pro']);
        $this->formName = self::FORM_NAME;
    }
}