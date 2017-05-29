<?php

class Fetcher_Testing extends ProRMFormFetcher
{
    protected $formSubject = array(
        'de' => 'proRM-30-Tage-Test DE',
        'en' => 'proRM-30-Tage-Test EN',
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