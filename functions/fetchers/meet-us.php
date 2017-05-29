<?php

class Fetcher_MeetUs extends ProRMFormFetcher
{
    protected $formSubject = array(
        'de' => 'proMX Live Erleben-DE',
        'en' => 'proMX Meet us-EN',
    );

    public function __construct($source)
    {
        parent::__construct($source);

        $this->fieldsMap['desired_date'] = 'EventName';
        $this->required['desired_date'] = __('Event Name', ProRMTheme::TEXTDOMAIN);
      //  $this->required['number_of_users'] = __('Number of users', ProRMTheme::TEXTDOMAIN);
    }

    public function fetch()
    {
        parent::fetch();
        $this->getCustomFields();
        session_start();
        $_SESSION['mappedData'] = serialize($this->mappedData);
        return $this->mappedData;
    }

    public function getCustomFields()
    {
        // if selected Event get custom params for this event sending to CRM
        $chose_event = $this->data['desired_date'];
        if ($chose_event) {
            $form = Tpl::get('form');
            $options = $form->getSendingEventOptions($chose_event);
            $this->mappedData['StartDate']      = $options['StartDate'] ? date('Y-m-d H:i:s O', $options['StartDate']) : '';
            $this->mappedData['EndDate']        = $options['EndDate'] ? date('Y-m-d H:i:s O', $options['EndDate']) : '';
            $this->mappedData['Description']    = $options['Description'] ? $options['Description'] : '';
        }
    }

}