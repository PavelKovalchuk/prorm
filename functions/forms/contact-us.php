<?php

class ProRMForms_ContactUs extends ProRMForms_Abstract
{
    const FORM_NAME = 'contact-us';

    public function __construct(WP_Post $formPost)
    {
        parent::__construct($formPost);

        $this->fetcher = new Fetcher_ContactUs($_POST['pro']);
        $this->formName = self::FORM_NAME;
    }
}