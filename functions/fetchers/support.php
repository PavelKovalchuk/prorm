<?php

class Fetcher_Support extends ProRMFormFetcher
{
    protected $formSubject = array(
        'de' => 'Support DE',
        'en' => 'Support EN',
        'es' => 'Support ES',
    );

    public function __construct($source)
    {
        parent::__construct($source);

        /** @var ProRMSettings $settings */
        $settings = Registry::get('settings');
        
        $this->fieldsMap['dynamics_version'] = __('Dynamics version', ProRMTheme::TEXTDOMAIN);
        $this->required['dynamics_version'] = __('Dynamics version', ProRMTheme::TEXTDOMAIN);
        
        $this->fieldsMap['prorm_product'] = __('Product', ProRMTheme::TEXTDOMAIN);
        $this->required['prorm_product'] = __('Product', ProRMTheme::TEXTDOMAIN);
        
        $this->required['salutation'] = __('Gender', ProRMTheme::TEXTDOMAIN);
        $this->required['first_name'] = __('First Name', ProRMTheme::TEXTDOMAIN);
        $this->required['last_name'] = __('Last Name', ProRMTheme::TEXTDOMAIN);
        $this->required['company'] = __('Company', ProRMTheme::TEXTDOMAIN);
        $this->required['email'] = __('E-Mail', ProRMTheme::TEXTDOMAIN);
        $this->required['event_name'] =__('Event Name', ProRMTheme::TEXTDOMAIN);
       
        
    }
}