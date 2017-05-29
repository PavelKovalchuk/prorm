<?php

class ProRMForms_RoadshowContact extends ProRMForms_Abstract
{
    const FORM_NAME = 'roadshow-contact';

    public function __construct(WP_Post $formPost)
    {
        parent::__construct($formPost);

        $this->fetcher = new Fetcher_RoadshowContact($_POST['pro']);
        $this->formName = self::FORM_NAME;
    }



    public function isSubmitted()
    {
        return isset($_POST[$this->formName . '-form']);
    }
}

