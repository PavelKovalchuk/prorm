<?php

class Fetcher_ProductsRequest extends ProRMFormFetcher
{
    protected $formSubject = array(
        'de' => 'proMX Produkte-Anfrage-DE',
        'en' => 'proMX Products Request-EN',

    );

    public function __construct($source)
    {
        parent::__construct($source);

       $this->required['product'] = 'proMX products';
        // $this->required['number_of_users'] = __('Number of users', ProRMTheme::TEXTDOMAIN);

        if (isset($_GET['edition'])) {
            $this->data['edition'] = $_GET['edition'];
        }
    }
}