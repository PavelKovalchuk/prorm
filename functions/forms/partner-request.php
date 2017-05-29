<?php

class ProRMForms_PartnerRequest extends ProRMForms_Abstract
{
    const FORM_NAME = 'partner-request';

    public function __construct(WP_Post $formPost)
    {
        parent::__construct($formPost);

        $this->fetcher = new Fetcher_PartnerRequest($_POST['pro']);
        $this->formName = self::FORM_NAME;
    }
}