<?php

class ProRMForms_MsbscFur20Benutzer extends ProRMForms_Abstract
{
    const FORM_NAME = 'msbsc-fur-20-benutzer';

    public function __construct(WP_Post $formPost)
    {
        parent::__construct($formPost);

        $this->fetcher = new Fetcher_MsbscFur20Benutzer($_POST['pro']);
        $this->formName = self::FORM_NAME;
    }
}