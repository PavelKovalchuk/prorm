<?php

class Fetcher_Request extends ProRMFormFetcher
{
    protected $formSubject = array(
        'de' => 'proRM-Anfrage DE',
        'en' => 'proRM-Anfrage EN',
    );

    public function __construct($source)
    {
        parent::__construct($source);
		
	$this->fieldsMap['edition'] = 'edition';
        
        $this->fieldsMap['stock_remark'] = __('Stock remark', ProRMTheme::TEXTDOMAIN);



        $this->required['first_name'] = __('First Name', ProRMTheme::TEXTDOMAIN);
        $this->required['email'] = __('E-Mail', ProRMTheme::TEXTDOMAIN);
        $this->required['company'] = __('Company', ProRMTheme::TEXTDOMAIN);
        $this->required['data_usage'] = __('Data usage', ProRMTheme::TEXTDOMAIN);

        if (isset($_GET['edition'])) {
            $this->data['edition'] = $_GET['edition'];
        }
    }
}