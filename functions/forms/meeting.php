<?php

class ProRMForms_Meeting extends ProRMForms_Abstract
{
    const FORM_NAME = 'meeting';
    
    
    public function __construct(WP_Post $formPost)
    {
        parent::__construct($formPost);

        $this->fetcher = new Fetcher_Meeting($_POST['pro']);
        $this->formName = self::FORM_NAME;
    }
    
    /**
     * @return array
     */
    public function getEventsObjects()
    {
//        $options = get_field('event', $this->post->ID);
        $options = array();
        if (have_rows('event', $this->post->ID)) {
            while (have_rows('event', $this->post->ID)) {
                the_row();
                // display a sub field value
                $value = get_sub_field('event_name');
                $title = get_sub_field('title');
                $agenda = get_sub_field('agenda');
                if ($agenda) {
                    $title .= sprintf(' &rarr; <a href="%s">%s</a>', $agenda, __('Agenda', ProRMTheme::TEXTDOMAIN));
                }
                $options[$value] = $title;
            }
        }
        
        return $options;
    }    

    
    public function getEventsHeader()
    {

        $data = get_field('events_header', $this->post->ID);
        
        return $data;
    }    
}