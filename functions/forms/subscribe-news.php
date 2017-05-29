<?php

class ProRMForms_SubscribeNews extends ProRMForms_Abstract
{
    const FORM_NAME = 'subscribe-news';
    
    
    public function __construct(WP_Post $formPost)
    {
        parent::__construct($formPost);

        $this->fetcher = new Fetcher_SubscribeNews($_POST['pro']);
        $this->formName = self::FORM_NAME;
    }
}