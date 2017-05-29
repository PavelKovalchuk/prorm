<?php

class ProRMForms_FieldServicesWebinar extends ProRMForms_Abstract
{
    const FORM_NAME = 'fieldservices-webinar';

    public function __construct(WP_Post $formPost)
    {
        parent::__construct($formPost);

        $this->fetcher = new Fetcher_FieldSevicesWebinar($_POST['pro']);
        $this->formName = self::FORM_NAME;
    }
}