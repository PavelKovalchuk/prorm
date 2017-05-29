<?php

class ProRMForms_TraviataContact extends ProRMForms_Abstract
{
    const FORM_NAME = 'traviata-contact';

    public function __construct(WP_Post $formPost)
    {
        parent::__construct($formPost);

        $this->fetcher = new Fetcher_TraviataContact($_POST['pro']);
        $this->formName = self::FORM_NAME;
    }

}

