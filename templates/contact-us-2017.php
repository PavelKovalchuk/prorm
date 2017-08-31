<?php
/*
 * Template Name: Contact Us 2017 page
 */

if (!isset($_SESSION)) {
    session_start();
}

$settings = Registry::get('settings');

//global $post;
$general_alt =  $settings->getOption('general_alt_text_for_images');

$fields = get_fields();

$general_page_id = 'contact-page';

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
    'banner_buttons' => $fields['banner_buttons_page']
    
   
);


?>

<?php get_header(); ?>


<main id="main" class="contact-us-page">
    <div id="content">
       
        <?php // get_prorm_banner_page($banner_args, $general_alt ); ?>
        
        <?php get_prorm_banner_block($banner_args, $general_alt ); ?>
        
        <?php get_parent_breadcrumbs(get_the_title(), false); ?>
                        
        <?php get_form_block($form_block_args, 'contact-client', 'bg-white'); ?>
        
        <?php echo do_shortcode('[widgetarea-2017 name=contact-info-2017]'); ?>
            
        <?php //get_sidebar('offices-2017') ?>
       
    </div>
</main>



<?php get_footer('2017'); ?>