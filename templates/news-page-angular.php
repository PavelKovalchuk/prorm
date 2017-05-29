<?php
/*
 * Template Name: News page Angular
 */
?>
<?php

get_header('angular');
$settings = Registry::get('settings');
$general_alt =  $settings->getOption('general_alt_text_for_images');
$header_alt =  $settings->getOption('header_alt_text_for_image');
?>
   
    
    <div ng-app="app">
        <div ui-view autoscroll="true"></div>
    </div>


<?php get_footer('angular'); ?>
