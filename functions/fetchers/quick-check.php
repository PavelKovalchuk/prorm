<?php

class Fetcher_QuickCheck extends ProRMFormFetcher
{
    protected $formSubject = array(
        'de' => 'proRM-Schnell-Check DE',
        'en' => 'proRM-Schnell-Check EN',
    );

    public function __construct($source)
    {
        parent::__construct($source);

        $this->required['first_name'] = __('First Name', ProRMTheme::TEXTDOMAIN);
        $this->required['email'] = __('E-Mail', ProRMTheme::TEXTDOMAIN);
        $this->required['company'] = __('Company', ProRMTheme::TEXTDOMAIN);
        $this->required['data_usage'] = __('Data usage', ProRMTheme::TEXTDOMAIN);
    }
}