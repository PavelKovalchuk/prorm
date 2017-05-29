<?php

class ProRMForms_Webinar extends ProRMForms_Abstract
{
    const FORM_NAME = 'webinar';

    public function __construct(WP_Post $formPost)
    {
        parent::__construct($formPost);

        $this->fetcher = new Fetcher_Webinar($_POST['pro']);
        $this->fetcher->setForm($this);
        $this->formName = self::FORM_NAME;
    }

    public function getWebinarOptions()
    {

        //phpinfo();exit;
        $options = array();
        $webinars = ProRMWebinars::getPublishedWebinars();

        usort($webinars, array($this, 'compareWebinars'));
        $tomorrow = new DateTime();
        $tomorrow->add(new DateInterval('P1D'));

        foreach ($webinars as $webinar) {
            $start = ProRMWebinars::getStart($webinar);
            if ($start < $tomorrow) {
                continue;
            }
            $end = ProRMWebinars::getEnd($webinar);

            $start_time = $start->getTimestamp();
            $end_time = $end->getTimestamp();

            // correct timezone for de
            if(get_locale() === 'de_DE') {
                $utc_date = DateTime::createFromFormat(
                    'Y-m-d H:i:s',
                    date('Y-m-d H:i:s', $start_time),
                    new DateTimeZone('UTC')
                );

                $nyc_date = $utc_date;
                $nyc_date->setTimeZone(new DateTimeZone('Europe/Berlin'));

                $start_time =  strtotime($nyc_date->format('Y-m-d H:i:s'));


                $utc_date = DateTime::createFromFormat(
                    'Y-m-d H:i:s',
                    date('Y-m-d H:i:s', $end_time),
                    new DateTimeZone('UTC')
                );

                $nyc_date = $utc_date;
                $nyc_date->setTimeZone(new DateTimeZone('Europe/Berlin'));

                $end_time = strtotime($nyc_date->format('Y-m-d H:i:s'));
            }

            $title = sprintf('%s %s &ndash; %s',
                $webinar->post_title,
                date('d.m.Y H:i', $start_time),
                date('d.m.Y H:i', $end_time)
            );
            $options[$webinar->ID] = $title;
        }

        return $options;
    }

    public function compareWebinars($a, $b)
    {
        $startA = ProRMWebinars::getStart($a);
        $startB = ProRMWebinars::getStart($b);
        if ($startA == $startB) {
            return 0;
        }
        return ($startA < $startB) ? -1 : 1;
    }

    public function isSubmitted()
    {
        return isset($_POST[$this->formName . '-form']);
    }
}