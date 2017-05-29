<?php

class ProRMForms_RegisterWebinar extends ProRMForms_Abstract
{
    const FORM_NAME = 'register-webinar';
    
    
    public function __construct(WP_Post $formPost)
    {
        parent::__construct($formPost);

        $this->fetcher = new Fetcher_RegisterWebinar($_POST['pro']);
        $this->formName = self::FORM_NAME;
    }
}