<?php

class Fetcher_FieldSevicesWebinar extends ProRMFormFetcher
{
    protected $formSubject = array(
        'de' => 'FS-Webinar DE',
        'en' => 'FS-Webinar EN',
        'es' => 'FS-Webinar ES'
    );

    public function __construct($source)
    {
        parent::__construct($source);

        $this->fieldsMap['fieldservices-webinar'] = 'Field Service Webinar';

        $this->required['first_name'] = __('First Name', ProRMTheme::TEXTDOMAIN);
        $this->required['email'] = __('E-Mail', ProRMTheme::TEXTDOMAIN);
        $this->required['company'] = __('Company', ProRMTheme::TEXTDOMAIN);
        $this->required['data_usage'] = __('Data usage', ProRMTheme::TEXTDOMAIN);
    }
}