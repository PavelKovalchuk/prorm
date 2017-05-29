<?php

class Fetcher_RequestProducts extends ProRMFormFetcher
{
    protected $formSubject = array(
        'de' => 'proMX Anfrage-Produkte-DE',
        'en' => 'proMX Request-Products-EN',

    );

    public function __construct($source)
    {
        parent::__construct($source);

        $this->required['edition'] = 'proRM edition';



        // $this->required['number_of_users'] = __('Number of users', ProRMTheme::TEXTDOMAIN);

        if (isset($_GET['edition'])) {
            $this->data['edition'] = $_GET['edition'];
        }
    }
}