<?php
/*
 * Template Name: Fast Start 2017 page
 */

if (!isset($_SESSION)) {
    session_start();
}
//add_action( 'wp_enqueue_scripts', 'clients_block_scripts' );

$settings = Registry::get('settings');
$image_path = get_template_directory_uri() . '/images/';

//global $post;
$general_alt =  $settings->getOption('general_alt_text_for_images');

$fields = get_fields();



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



$parent_page_id = $fields['parent_page_id'];

$solutions_block_args = array(
    'section_header' => $fields['second_section_header'],
    'section_text' => $fields['second_section_text'],
    'section_apps' => $fields['second_section_apps']
    
);

$expectations_block_args = array(
    'section_header' => $fields['third_section_header'],
    'section_expectation' => $fields['third_section_expectation']
    
);

$download_block_args = array(
    'button_label' => $fields['fourth_block_button_label'],
    'button_link' => $fields['fourth_block_button_link']
    
);

$our_team_block_args = array(
    'meet_our_team_ID' => $fields['meet_our_team'],
    'section_header' => $fields['meet_our_team_block_header']
);

$about_us_numbers_block_args = array(
    'section_header' => $fields['about_us_numbers_header']
);

$clients_block_args = array(
    'section_header' => $fields['header_slider_block'],
    'items' => $fields['quote_items'],
    
);

$bussiness_circle_block_args = array(
    'section_header' => $fields['bussiness_circle_header'],
    'items' => $fields['bussiness_circle_items']
    
);
$videos_block_args = array(
    'section_header' => $fields['video_block_header']
);

$get_it_block_args = array(
    'button_label' => $fields['appstore_button_label'],
    'button_link' => $fields['appstore_button_link']
    
);

$form_block_args = array(
    'section_header' => $fields['form_block_header']
);



?>

<?php get_header(); ?>


<main id="main" role="main" class="fast-start-page">
    <div id="content">
        
        
        <?php //get_prorm_banner_page($banner_args, $general_alt ); ?>
        
        <?php get_prorm_banner_block($banner_args, $general_alt ); ?>
        
        <?php get_parent_breadcrumbs(get_the_title(), $parent_page_id); ?>
        
        <?php // get_soft_solutions_block($solutions_block_args, $general_alt, 'bg-white'); ?>
        
        <?php get_features_card_block($solutions_block_args, $general_alt, 'bg-white'); ?>
        
        <?php get_expectations_block($expectations_block_args, $general_alt, 'bg-grey'); ?>
        
        <?php get_button_block($download_block_args, 'download-bg-1', 'button-prorm-white-transparent'); ?>
        
        <?php get_our_team_block($our_team_block_args, $general_alt, 'bg-white'); ?>
        
        <?php get_about_us_numbers_block($about_us_numbers_block_args, 'bg-grey'); ?>
        
        <?php //get_clients_block($clients_block_args ); ?>
        
        <?php get_clients_page_block($clients_block_args, $general_alt, 'bg-white'); ?>
        
        <?php get_button_block($download_block_args, 'download-bg-2', 'button-prorm-white-transparent'); ?>
        
        <?php get_bussiness_circle_block($bussiness_circle_block_args, $general_alt, 'bg-white'); ?>
        
        <?php get_videos_block($videos_block_args, 'bg-grey'); ?>
        
        <?php //get_button_block($get_it_block_args, 'download-bg-3', 'button-prorm-white-transparent'); ?>
        
        <?php get_form_block($form_block_args, 'contact-client', 'bg-white'); ?>
        
        
         
        
    </div>
</main>


<?php get_footer('2017'); ?>