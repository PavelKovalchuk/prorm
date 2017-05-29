<?php

class ProRMForms_NewsLetter extends ProRMForms_Abstract
{
    const FORM_NAME = 'newsletter';

    public function __construct(WP_Post $formPost)
    {
        parent::__construct($formPost);

        $this->fetcher = new Fetcher_NewsLetter($_POST['pro']);
        $this->formName = self::FORM_NAME;
    }
}