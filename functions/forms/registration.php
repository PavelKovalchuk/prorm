<?php

class ProRMForms_Registration extends ProRMForms_Abstract
{
    const FORM_NAME = 'registration';

    public function __construct(WP_Post $formPost)
    {
        parent::__construct($formPost);

        $this->fetcher = new Fetcher_Registration($_POST['pro']);
        $this->formName = self::FORM_NAME;
    }
}