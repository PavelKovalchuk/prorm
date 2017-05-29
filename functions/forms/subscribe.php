<?php

class ProRMForms_Subscribe extends ProRMForms_Abstract
{
    const FORM_NAME = 'subscribe';

    public function __construct(WP_Post $formPost)
    {
        parent::__construct($formPost);

        $this->fetcher = new Fetcher_Subscribe($_POST['pro']);
        $this->formName = self::FORM_NAME;
    }
}