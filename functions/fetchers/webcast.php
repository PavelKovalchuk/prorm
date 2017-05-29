<?php

class Fetcher_Webcast extends ProRMFormFetcher
{
    protected $formSubject = array(
        'de' => 'proMX-Webinar-DE',
        'en' => 'proMX-Webcast-EN',

    );

    public function __construct($source)
    {
        parent::__construct($source);

        $this->required['productswebinar'] = 'proMX products';
        // $this->required['number_of_users'] = __('Number of users', ProRMTheme::TEXTDOMAIN);

        if (isset($_GET['edition'])) {
            $this->data['edition'] = $_GET['edition'];
        }
    }
}