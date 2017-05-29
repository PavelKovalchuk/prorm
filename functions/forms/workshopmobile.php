<?php

class ProRMForms_Workshopmobile extends ProRMForms_Abstract
{
    const FORM_NAME = 'workshopmobile';

    public function __construct(WP_Post $formPost)
    {
        parent::__construct($formPost);

        $this->fetcher = new Fetcher_Workshopmobile($_POST['pro']);
        $this->formName = self::FORM_NAME;
    }



    public function isSubmitted()
    {
        return isset($_POST[$this->formName . '-form']);
    }
}