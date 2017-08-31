<?php
/*
 * Template Name: Meet Us 2017 page
 */

if (!isset($_SESSION)) {
    session_start();
}

$settings = Registry::get('settings');
$image_path = get_template_directory_uri() . '/images/';

        
$general_alt =  $settings->getOption('general_alt_text_for_images');

$fields = get_fields();

$form_block_args = array(
    'section_header' => ' '
);

$banner_args = array(
    'banner_planet' => $fields['banner_planet_page']["url"],
    'banner_object' => $fields['banner_object_page']["url"],
    'banner_clouds' => $fields['banner_clouds_page']["url"],
    'banner_clouds_top' => $fields['banner_clouds_page_top']["url"],
    'banner_header' => $fields['banner_header_page'],
    'banner_header_tag' => $fields['banner_header_tag'],
    'banner_text' => $fields['banner_text_page'],
    'banner_buttons' => $fields['banner_buttons_page'],
    'stars_effect' => $fields['stars_effect'],
   
);

$simple_block_args= array(
    'section_header' => $fields['page_header'],
    'section_text' => $fields['page_content']
   
);


?>

<?php get_header(); ?>


<main id="main" class="meet-us-page">
    <div id="content">
    
    <?php // get_prorm_banner_page($banner_args, $general_alt ); ?>
        
    <?php get_prorm_banner_block($banner_args, $general_alt ); ?>
      
    <?php get_parent_breadcrumbs(get_the_title(), false); ?>
        
    <?php get_meet_us_block($simple_block_args, $general_alt, 'bg-white'); ?>    
         
    <?php get_form_block($form_block_args, 'meeting', 'bg-white'); ?>  
        
        
        
    </div>
</main>



<?php get_footer('2017'); ?>