<?php

if (class_exists('bcn_breadcrumb_trail')) {
    class ProRM_BreadcrumbTrail extends bcn_breadcrumb_trail
    {
        /** @var bcn_breadcrumb[]  */
        public $breadcrumbs = array();

        /**
         * This functions outputs or returns the breadcrumb trail in string form.
         *
         * @param bool $return Whether to return data or to echo it.
         * @param bool $linked [optional] Whether to allow hyperlinks in the trail or not.
         * @param bool $reverse [optional] Whether to reverse the output or not.
         *
         * @return string|null String-Data of breadcrumb trail.
         */
        public function display($return = false, $linked = true, $reverse = false)
        {
            //Set trail order based on reverse flag
            $this->order($reverse);
            //Initilize the string which will hold the assembled trail
            $trail_str = '';

            //The main compiling loop
            foreach ($this->breadcrumbs as $breadcrumb) {
                //Trim titles, if needed
                if ($this->opt['blimit_title'] && $this->opt['amax_title_length'] > 0) {
                    //Trim the breadcrumb's title
                    $breadcrumb->title_trim($this->opt['amax_title_length']);
                }
                //Place in the breadcrumb's assembled elements
                $trail_str .= $breadcrumb->assemble($linked);
                $trail_str .= $this->opt['hseparator'];
            }
            //Should we return or echo the assembled trail?
            if ($return) {
                return $trail_str;
            } else {
                echo $trail_str;
                return null;
            }
        }
    }
}