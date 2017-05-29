<?php

class ProRMSocial
{
    /**
     * @return string
     */
    public function getFacebookLink($lang = 'en')
    {
        return Registry::get('settings')->getOption('social_facebook_link_' . $lang);
    }

    /**
     * @return string
     */
    public function getTwitterLink($lang = 'en')
    {
        return Registry::get('settings')->getOption('social_twitter_link_' . $lang);
    }

    /**
     * @return string
     */
    public function getYoutubeLink($lang = 'en')
    {
        return Registry::get('settings')->getOption('social_youtube_link_' . $lang);
    }
	
	  public function getYoutubeVideo($lang = 'en')
    {
        return Registry::get('settings')->getOption('social_youtube_video_' . $lang);
    }
}