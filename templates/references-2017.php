<?php
/*
 * Template Name: References 2017 page
 */

if (!isset($_SESSION)) {
    session_start();
}


$settings = Registry::get('settings');


//global $post;
$general_alt =  $settings->getOption('general_alt_text_for_images');
$img_placeholder =  $settings->getOption('image_placeholder');

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

$form_block_args = array(
    'section_header' => $fields['form_block_header']
);


?>

<?php get_header(); ?>


<main id="main" role="main" class="references-page">
    <div id="content">
        
        <?php // get_prorm_banner_page($banner_args, $general_alt ); ?>
        
        <?php get_prorm_banner_block($banner_args, $general_alt ); ?>
        
        <?php get_parent_breadcrumbs(get_the_title(), false); ?>
       
        <?php  
        while ( have_posts() ) : the_post(); 
       
            get_reviews_header_block( $fields['page_header'], get_the_content(), $general_alt, 'bg-white'); 
        
        
        endwhile; //resetting the page loop
        wp_reset_query(); //resetting the page query
        ?>
        
        <?php
        
        $references = $fields['references_items'];
        
        get_references_block($references, $fields['button_label'], $img_placeholder, $general_alt, 'bg-white' );
        
        ?>
        
        <?php get_form_block($form_block_args, 'contact-client', 'bg-white'); ?>
       
    </div>
</main>



<?php get_footer('2017'); ?>