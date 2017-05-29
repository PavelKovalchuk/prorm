<?php

class ProRMForms_PartnerDinner extends ProRMForms_Abstract
{
    const FORM_NAME = 'partner-dinner';

    public function __construct(WP_Post $formPost)
    {
        parent::__construct($formPost);

        $this->fetcher = new Fetcher_PartnerDinner($_POST['pro']);
        $this->formName = self::FORM_NAME;
    }



  /*  public function isSubmitted()
    {
        return isset($_POST[$this->formName . '-form']);
    }*/
}