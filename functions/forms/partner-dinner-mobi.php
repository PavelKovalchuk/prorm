<?php

class ProRMForms_PartnerDinnerMobi extends ProRMForms_Abstract
{
    const FORM_NAME = 'partner-dinner-mobi';

    public function __construct(WP_Post $formPost)
    {
        parent::__construct($formPost);

        $this->fetcher = new Fetcher_PartnerDinnerMobi($_POST['pro']);
        $this->formName = self::FORM_NAME;
    }



  /*  public function isSubmitted()
    {
        return isset($_POST[$this->formName . '-form']);
    }*/
}