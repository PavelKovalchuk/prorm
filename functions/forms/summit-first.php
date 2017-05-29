<?php

class ProRMForms_SummitFirst extends ProRMForms_Abstract
{
    const FORM_NAME = 'summit-first';

    public function __construct(WP_Post $formPost)
    {
        parent::__construct($formPost);

        $this->fetcher = new Fetcher_SummitFirst($_POST['pro']);
        $this->formName = self::FORM_NAME;
    }



    public function isSubmitted()
    {
        return isset($_POST[$this->formName . '-form']);
    }
}