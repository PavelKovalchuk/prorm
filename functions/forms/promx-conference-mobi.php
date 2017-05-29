<?php

class ProRMForms_PromxConferenceMobi extends ProRMForms_Abstract
{
    const FORM_NAME = 'promx-conference-mobi';

    public function __construct(WP_Post $formPost)
    {
        parent::__construct($formPost);

        $this->fetcher = new Fetcher_PromxConferenceMobi($_POST['pro']);
        $this->formName = self::FORM_NAME;
    }



  /*  public function isSubmitted()
    {
        return isset($_POST[$this->formName . '-form']);
    }*/
}