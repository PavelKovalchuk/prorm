<?php

class Fetcher_Webinar extends ProRMFormFetcher
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
        'de' => 'proRM-Webinar DE',
        'en' => 'proRM-Webinar EN',
        'es' => 'proRM-Webinar ES',
    );

    public function __construct($source)
    {
        parent::__construct($source);

        $this->fieldsMap['webinar'] = 'Webinar';

        $this->required['first_name'] = __('First Name', ProRMTheme::TEXTDOMAIN);
        $this->required['email'] = __('E-Mail', ProRMTheme::TEXTDOMAIN);
        $this->required['company'] = __('Company', ProRMTheme::TEXTDOMAIN);
        $this->required['data_usage'] = __('Data usage', ProRMTheme::TEXTDOMAIN);
    }

    public function fetch()
    {
        parent::fetch();

        $webinar = get_post($this->data['webinar']);
        if ($webinar) {
            $webinarId = ProRMWebinars::getId($webinar);
            $start = ProRMWebinars::getStart($webinar);
            $end   = ProRMWebinars::getEnd($webinar);
            $webinarLang = ProRMWebinars::getLanguage($webinar);
            $pageLang = ProRMWebinars::getPageLanguage($webinar);

            $this->mappedData['Webinar']         = $webinarId;
            $this->mappedData['WebinarID']       = $webinarId;
            $this->mappedData['WebinarTitle']    = $webinar->post_title;
            $this->mappedData['WebinarStart']    = $start ? $start->format('Y-m-d H:i:s O') : '';
            $this->mappedData['WebinarEnd']      = $end ? $end->format('Y-m-d H:i:s O') : '';
            $this->mappedData['WebinarTyp']      = '1, Customer';
            $this->mappedData['MeetingURL']      = ProRMWebinars::getMeetingUrl($webinar);
            $this->mappedData['MeetingPin']      = ProRMWebinars::getMeetingPin($webinar);
            $this->mappedData['PageLanguage']    = @$this->langTitles[$webinarLang];
            $this->mappedData['WebinarLanguage'] = @$this->langTitles[$pageLang];
        }
    }
}