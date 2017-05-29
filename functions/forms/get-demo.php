<?php

class ProRMForms_GetDemo extends ProRMForms_Abstract
{
    const FORM_NAME = 'get-demo';
    
    
    public function __construct(WP_Post $formPost)
    {
        parent::__construct($formPost);

        $this->fetcher = new Fetcher_GetDemo($_POST['pro']);
        $this->formName = self::FORM_NAME;
    }
}