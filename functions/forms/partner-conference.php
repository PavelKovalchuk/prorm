<?php

class ProRMForms_PartnerConference extends ProRMForms_Abstract
{
    const FORM_NAME = 'partner-conference';

    public function __construct(WP_Post $formPost)
    {
        parent::__construct($formPost);

        $this->fetcher = new Fetcher_PartnerConference($_POST['pro']);
        $this->formName = self::FORM_NAME;
    }



    public function isSubmitted()
    {
        return isset($_POST[$this->formName . '-form']);
    }
}