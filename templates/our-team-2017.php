<?php
/*
 * Template Name: Our team 2017 page
 */

if (!isset($_SESSION)) {
    session_start();
}

$settings = Registry::get('settings');

//global $post;
$general_alt =  $settings->getOption('general_alt_text_for_images');
$img_placeholder =  $settings->getOption('image_placeholder');

$fields = get_fields();

$form_block_args = array(
    'section_header' => ''
);

$slider_args = array(
    'section_header' => $fields['slider_header'],
    'items' => $fields['slider_photos']
);

$header_block_1_args = array(
    'section_header' => $fields['first_block_header'],
    'description' => $fields['first_block_text'],
    'img' => $fields['first_block_image']['sizes']['news-photo'],
    'img_alt' =>  $fields['first_block_image_alt'],
    'h' => 'h1',
    'img_left_pos' => true
);

$header_block_2_args = array(
    'section_header' => $fields['second_block_header'],
    'section_text' => $fields['second_block_text']
    
);

$experts_block_args = array(
    'section_header' => $fields['experts_block_header'],
    'section_text' => $fields['experts_block_text'],
    'items' => $fields['experts_items_block']
);

$awards_args = array(
    'section_header' => $fields['awards_block_header'],
    'items' => $fields['awards_items']
);

$banner_args = array(
    'banner_object' => $fields['banner_object_page']["url"],
    'banner_header' => $fields['banner_header_page'],
    'banner_header_tag' => $fields['banner_header_tag'],
    'banner_text' => $fields['banner_text_page'],
    'banner_buttons' => $fields['banner_buttons_page'],
  
);




?>

<?php get_header(); ?>


<main id="main" role="main" class="our-team-page">
    <div id="content">
        
        <?php // get_prorm_banner($banner_args, $general_alt); ?>
        
        <?php get_prorm_banner_block($banner_args, $general_alt ); ?>
        
        <?php get_parent_breadcrumbs(get_the_title(), false); ?>
        
        <?php get_our_team_header_block( $header_block_1_args, $general_alt, 'bg-white'); ?>
        
        <?php get_simple_block($header_block_2_args, 'bg-grey'); ?>
        
        <?php get_team_slider_block($slider_args, $general_alt, 'bg-grey'); ?>
        
        <?php get_experts_block($experts_block_args, $img_placeholder, $general_alt, 'bg-white' ) ?>
        
        <?php get_awards_block($awards_args, $general_alt, 'bg-white');?>
        
        <?php get_form_block($form_block_args, 'contact-client', 'bg-white'); ?>
        
       
    </div>
</main>



<?php get_footer('2017'); ?>