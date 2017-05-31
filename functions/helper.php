<?php

abstract class ProRMHelper
{
    public static function mergeSettings($settings, $default)
    {
        foreach ($default as $key => $option) {
            if (!isset($settings[$key])) {
                $settings[$key] = $option;
            }
        }

        return $settings;
    }

    //#########################################################
    //# Copyright © 2008 Darrin Yeager                        #
    //# http://www.dyeager.org/                               #
    //# Licensed under BSD license.                           #
    //#   http://www.dyeager.org/downloads/license-bsd.txt    #
    //#########################################################

    public static function  getDefaultLanguage() {
        if (isset($_SERVER["HTTP_ACCEPT_LANGUAGE"]))
            return self::parseDefaultLanguage($_SERVER["HTTP_ACCEPT_LANGUAGE"]);
        else
            return self::parseDefaultLanguage(NULL);
    }

    public static function parseDefaultLanguage($http_accept, $deflang = "en") {
        if(isset($http_accept) && strlen($http_accept) > 1)  {
            $lang = array();
            # Split possible languages into array
            $x = explode(",",$http_accept);
            foreach ($x as $val) {
                #check for q-value and create associative array. No q-value means 1 by rule
                if(preg_match("/(.*);q=([0-1]{0,1}\.\d{0,4})/i",$val,$matches))
                    $lang[$matches[1]] = (float)$matches[2];
                else
                    $lang[$val] = 1.0;
            }

            #return default language (highest q-value)
            $qval = 0.0;
            foreach ($lang as $key => $value) {
                if ($value > $qval) {
                    $qval = (float)$value;
                    $deflang = $key;
                }
            }
        }
        return strtolower($deflang);
    }

    public static function handleLangRedirection()
    {
        /** @var ProRMSettings $settings */
        $settings = Registry::get('settings');
        $doRedirect = $settings->getOption('general_redirect_by_lang');
    
        if ($doRedirect) {
            $locale = ProRMHelper::getDefaultLanguage();
            $lang = substr($locale, 0, 2);
            if ($lang != 'de') {
                $redirectTo = $settings->getOption('general_redirect_to_en');
                if ($redirectTo) {
                    wp_redirect($redirectTo);
                    exit;
                }
            }
        }
    }
}
