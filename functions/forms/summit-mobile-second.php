<?php

class ProRMForms_SummitMobileSecond extends ProRMForms_Abstract
{
    const FORM_NAME = 'summit-mobile-second';

    public function __construct(WP_Post $formPost)
    {
        parent::__construct($formPost);

        $this->fetcher = new Fetcher_SummitMobileSecond($_POST['pro']);
        $this->formName = self::FORM_NAME;
    }



    public function isSubmitted()
    {
        return isset($_POST[$this->formName . '-form']);
    }
}