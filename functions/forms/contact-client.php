<?php

class ProRMForms_ContactClient extends ProRMForms_Abstract
{
    const FORM_NAME = 'contact-client';
    
    
    public function __construct(WP_Post $formPost)
    {
        parent::__construct($formPost);

        $this->fetcher = new Fetcher_ContactClient($_POST['pro']);
        $this->formName = self::FORM_NAME;
    }
}