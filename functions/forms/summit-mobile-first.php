<?php

class ProRMForms_SummitMobileFirst extends ProRMForms_Abstract
{
    const FORM_NAME = 'summit-mobile-first';

    public function __construct(WP_Post $formPost)
    {
        parent::__construct($formPost);

        $this->fetcher = new Fetcher_SummitMobileFirst($_POST['pro']);
        $this->formName = self::FORM_NAME;
    }



    public function isSubmitted()
    {
        return isset($_POST[$this->formName . '-form']);
    }
}