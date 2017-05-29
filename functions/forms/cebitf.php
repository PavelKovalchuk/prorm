<?php

class ProRMForms_Cebitf extends ProRMForms_Abstract
{
    const FORM_NAME = 'cebitf';

    public function __construct(WP_Post $formPost)
    {
        parent::__construct($formPost);

        $this->fetcher = new Fetcher_Cebitf($_POST['pro']);
        $this->formName = self::FORM_NAME;
    }



    public function isSubmitted()
    {
        return isset($_POST[$this->formName . '-form']);
    }
}

