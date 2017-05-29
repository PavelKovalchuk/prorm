<?php

class ProRMForms_PartnershipRequest extends ProRMForms_Abstract
{
    const FORM_NAME = 'partnership-request';

    public function __construct(WP_Post $formPost)
    {
        parent::__construct($formPost);

        $this->fetcher = new Fetcher_PartnershipRequest($_POST['pro']);
        $this->formName = self::FORM_NAME;
    }
}