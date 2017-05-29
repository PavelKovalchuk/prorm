<?php
/*
 * Template Name: Nomination 2017 page
 */

if (!isset($_SESSION)) {
    session_start();
}


$settings = Registry::get('settings');
$image_path = get_template_directory_uri() . '/images/';

//global $post;
$general_alt =  $settings->getOption('general_alt_text_for_images');

$fields = get_fields();


$banner_header = $fields['banner_title'];
$banner_text = $fields['banner_text'];


$land_banner_args = array(
    'banner_header' => $banner_header,
    'banner_text' => $banner_text,
    'banner_planet' => $image_path . 'landings/nomination/rock-planet-1.png',
    'banner_object' => $image_path . 'landings/nomination/rocket.png'
   
    
);


$solutions_block_args = array(
    'section_header' => $fields['second_section_header'],
    'section_text' => $fields['second_section_text'],
    'section_apps' => $fields['second_section_apps']
    
);



$about_us_numbers_block_args = array(
    'section_header' => $fields['about_us_numbers_header']
);

$clients_block_args = array(
    'section_header' => $fields['clients_block_header'],
    'bg' => 'bg-fast-start'
);

$online_args = array(
    'section_header' => $fields['online_block_header'],
    'items' => $fields['online_items']
);

$events_args = array(
    'section_header' => $fields['events_block_header'],
    'items' => $fields['events_items']
);

$customer_story_args = array(
    'section_header' => $fields['customer_story_header'],
    'items' => $fields['customer_story_item']
);


$videos_block_args = array(
    'section_header' => $fields['video_block_header']
);

$team_info_block_args = array(
    'section_text' => $fields['team_info_text'],
    'items' => $fields['team_info_images']
);

$microsoft_args = array(
    'section_header' => $fields['microsoft_header'],
    'items' => $fields['microsoft_items']
);

$social_args = array(
    'section_header' => $fields['social_block_header'],
    'items' => $fields['social_site']
);


$our_partners_args = array(
    'section_header' => $fields['our_partners_header'],
    'img' => $fields['our_partners_image'],
    'img_alt' => $fields['our_partners_image_alt'],
    'description' => $fields['our_partners_text'],
    'slider_header' => $fields['our_partners_slider_header'],
    'video_header' => $fields['our_partners_video_header'],
    'items' => $fields['partners_slider'],
);

$feedback_args = array(
    'section_header' => $fields['feedback_block_header'],
    'items' => $fields['feedback_items']
);

$hololens_args = array(
    'section_header' => $fields['section_header_hololens'],
    'img' => $fields['img_hololens'],
    'img_alt' => $fields['img_hololens_alt'],
    'description' => $fields['text_hololens'],
    'logo' => $fields['logo_hololens'],
    'logo_alt' => $fields['logo_hololens_alt'],
    'link_hololens_url' => $fields['link_hololens_url'],
    'link_hololens_title' => $fields['link_hololens_title']
);



?>

<?php get_header('nomination'); ?>


<main id="main" role="main" class="nomination-page">
    <div id="content">
        
       <?php 
               
                    if(promx_is_mobile()){ 
                        get_land_banner($land_banner_args, $general_alt);
                    } else {
                        include_once  'wp-content/themes/prorm/parts/home/slider_parallax_nom.php'; 
                    } 
                    ?> 
        
        
        <?php get_land_team_info_block($team_info_block_args, $general_alt, 'bg-white'); ?>
        
        <?php  get_land_numbers_block($about_us_numbers_block_args, 'bg-grey'); ?>
        
        <?php get_land_soft_solutions_block($solutions_block_args, $general_alt, 'bg-white'); ?>
        
        <?php get_land_customer_story_block($customer_story_args, $general_alt, 'bg-grey'); ?>
        
        <?php get_land_hololens_block($hololens_args, $general_alt, 'bg-white'); ?>
         
        <?php get_land_feedback_block( $feedback_args, $general_alt, 'bg-grey' ); ?>
        
        <?php get_land_online_block($online_args, 'bg-white'); ?>
        
        <?php get_land_microsoft_block($microsoft_args, 'bg-grey'); ?>
        
        <?php  get_land_events_block($events_args, $general_alt, 'bg-white'); ?> 
        
        <?php get_land_videos_block($videos_block_args); ?>
        
        <?php get_land_our_partners_block( $our_partners_args, $general_alt, 'bg-grey' ); ?>
        
        <?php get_social_block($social_args, 'bg-white'); ?>
        
       
        
        
         
        
    </div>
</main>



<?php get_footer('2017'); ?>