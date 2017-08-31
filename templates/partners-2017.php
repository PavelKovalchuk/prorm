<?php
/*
 * Template Name: Partners 2017 page
 */

if (!isset($_SESSION)) {
    session_start();
}

$settings = Registry::get('settings');

//global $post;
$general_alt =  $settings->getOption('general_alt_text_for_images');

$fields = get_fields();

$general_page_id = 'partners';

//For buttons on forms
Tpl::set('general_page_id', $general_page_id);

$form_block_args = array(
    'section_header' => $fields['form_block_header']
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


<main id="main" class="partners-page">
    <div id="content">
        
        <?php // get_prorm_banner_page($banner_args, $general_alt ); ?>
        
        <?php get_prorm_banner_block($banner_args, $general_alt ); ?>
        
        <?php get_parent_breadcrumbs(get_the_title(), false); ?>
        
        <?php get_our_partners_header_block( $fields['our_partners_header'], $fields['our_partners_text'], $general_alt, 'bg-white'); ?>
        
        <?php get_our_partners_block($fields['our_partners'], $fields['our_partners_header'], $general_alt, 'bg-white'); ?>
                
        <?php // get_cta_block($fields['cta_footer'], 'download-bg-2'); ?>
        
        <?php get_form_block($form_block_args, 'contact-client', 'bg-white'); ?>
        
       
    </div>
</main>



<?php get_footer('2017'); ?>