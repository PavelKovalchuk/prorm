<?php

class ProRMForms_QuickCheck extends ProRMForms_Abstract
{
    const FORM_NAME = 'quick-check';

    public function __construct(WP_Post $formPost)
    {
        parent::__construct($formPost);

        $this->fetcher = new Fetcher_QuickCheck($_POST['pro']);
        $this->formName = self::FORM_NAME;
    }
}