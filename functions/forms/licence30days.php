<?php

class ProRMForms_Licence30Days extends ProRMForms_Abstract
{
    const FORM_NAME = 'licence30days';

    public function __construct(WP_Post $formPost)
    {
        parent::__construct($formPost);

        $this->fetcher = new Fetcher_Licence30Days($_POST['pro']);
        $this->fetcher->setForm($this);
        $this->formName = self::FORM_NAME;
    }
    public function isSubmitted()
    {
        return isset($_POST[$this->formName . '-form']);
    }
}
?>