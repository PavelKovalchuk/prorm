<?php

class Fetcher_Licence30Days extends ProRMFormFetcher
{
    /** @var  ProRMForms_Webinar */
    protected $form;

    /**
     * @param mixed $form
     */
    public function setForm($form)
    {
        $this->form = $form;
    }

    protected $formSubject = array(
        'de' => 'proRM Webseite - 30 Tage Lizensanfrage',
        'en' => 'proRM Webseite - 30 Tage Lizensanfrage',
    );

    public function __construct($source)
    {
        parent::__construct($source);

        $this->fieldsMap = array(
            //'subject' => 'Betreff',
            //'site_lang' => 'Sprache', // required
            'customer_number' =>'Lizenzschlüssel',
            'crm_organisation' => 'CRM Organisation', // required
            'salutation' => 'Anrede', // required
            'first_name' => 'Vorname',
            'last_name' => 'Nachname', // required
            'email' => 'E-Mail', // required
            'company' => 'Firma', // required
            'street1' => 'Strasse1', // required
            'street2' => 'Strasse2',
            'zipcode' => 'PLZ', // required ?
            'city' => 'Ort', // required ?
            'country' => 'Land', // required ?
            'phone' => 'Telefon', // required
            'crm_installation' => 'CRM Installation', // required
            'ms_partner' => 'MS Partner', // required
            'ms_partner_dedicated' => 'MS Partner vorhanden', // required
            'anschrift_partner' => 'Anschrift Partner',
            'number_prorm_users' => 'Anzahl proRM User', // required
            'number_mscrm_users' => 'Anzahl CRM User', // required
            'price' => 'Preis', // required
            'deployment_time' => 'Installationszeit', // required
            'functionality' => 'Funktionalität', // required
            'compatibility' => 'Kompatibilität', // required
            'performance' => 'Performance', // required
            'your_pros' => 'Positives',
            'your_cons' => 'Negatives',
            'buy_prorm_licenses' => 'proRM Lizenz kaufen',
            'number_prorm_licenses' => 'Wie viele',
            'get_info_upcoming' => 'Neues zu proRM', // required
            'receive_further_info' => 'Weitere Infos zu proRM',
// ?            'subscription' => 'Mehr Info', // ???
            'data_usage' => 'Datennutzung', // required
        );

        $this->required = array(
            'crm_organisation' => __('CRM Organization', ProRMTheme::TEXTDOMAIN),
            'salutation' => __('Salutation', ProRMTheme::TEXTDOMAIN),
            // 'first_name' => __('First Name', ProRMTheme::TEXTDOMAIN),
            'last_name' => __('Last Name', ProRMTheme::TEXTDOMAIN),
            'email' => __('E-Mail', ProRMTheme::TEXTDOMAIN),
            'company' => __('Company', ProRMTheme::TEXTDOMAIN),
            'street1' => __('Company Address', ProRMTheme::TEXTDOMAIN),
            'zipcode' => __('Zip Code', ProRMTheme::TEXTDOMAIN),
            'city' => __('City', ProRMTheme::TEXTDOMAIN),
            'country' => __('Country', ProRMTheme::TEXTDOMAIN),
            'phone' => __('Phone', ProRMTheme::TEXTDOMAIN),
            'crm_installation' => __('CRM Installation', ProRMTheme::TEXTDOMAIN),
            'ms_partner' => __('Are you a Microsoft CRM Partner?', ProRMTheme::TEXTDOMAIN),
            'ms_partner_dedicated' => __('Do you have a dedicated MS CRM Partner?', ProRMTheme::TEXTDOMAIN),
            'number_prorm_users' => __('Number of potential proRM Users', ProRMTheme::TEXTDOMAIN),
            'number_mscrm_users' => __('Number of Microsoft Dynamics CRM User', ProRMTheme::TEXTDOMAIN),
            'price' => __('Price', ProRMTheme::TEXTDOMAIN),
            'deployment_time' => __('Deployment Time', ProRMTheme::TEXTDOMAIN),
            'functionality' => __('Functionality', ProRMTheme::TEXTDOMAIN),
            'compatibility' => __('Compatibility', ProRMTheme::TEXTDOMAIN),
            'performance' => __('Performance', ProRMTheme::TEXTDOMAIN),
            'get_info_upcoming' => __('Do you want to be informed for upcoming proRM Applications and proRM Editions?', ProRMTheme::TEXTDOMAIN),
            'data_usage' => __('Data usage', ProRMTheme::TEXTDOMAIN),
        );
    }
}
?>