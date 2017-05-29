<?php
/*
 * Template Name: Enterprise Solution 2017 page
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
//var_dump($fields);



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

$full_business_circle_block_args = array(
    'section_header' => $fields['full_business_circle_block_header'],
    'graph_1' => $fields['products_graph_img_1'],
    'graph_2' => $fields['products_graph_img_2'],
    'block_text' => $fields['full_business_circle_block_text'],
    'items' => $fields['full_business_circle_items']
);

$what_get_block_args = array(
    'section_header' => $fields['what_you_get_block_header'],
    'items' => $fields['what_you_get_block_items']
    
);

//$why_use_it_block_args = array(
//    'section_header' => $fields['why_use_it_block_header'],
//    'section_text' => $fields['why_use_it_block_text']
//    
//);


$focus_block_args = array(
    'section_header' => $fields['our_focus_block_header'],
    'section_text' => $fields['our_focus_block_text'],
    'items' => $fields['our_focus_block_items']
    
);

$get_demo_block_args = array(
    'check_button' => $fields['cta_button'][0]['call_form'],
    'classes' => 'button-prorm button-prorm-white-transparent',
    'form_name' => $fields['cta_button'][0]['form_name']->post_name,
    'label' => $fields['cta_button'][0]['button_label'],
    'link' => $fields['cta_button'][0]['button_link']    
    
);

$get_demo_2_block_args = array(
    'check_button' => $fields['cta_button'][2]['call_form'],
    'classes' => 'button-prorm button-prorm-white-transparent',
    'form_name' => $fields['cta_button'][2]['form_name']->post_name,
    'label' => $fields['cta_button'][2]['button_label'],
    'link' => $fields['cta_button'][2]['button_link']      
    
);

$register_block_args= array(
    'check_button' => $fields['cta_button'][1]['call_form'],
    'classes' => 'button-prorm button-prorm-white-transparent',
    'form_name' => $fields['cta_button'][1]['form_name']->post_name,
    'label' => $fields['cta_button'][1]['button_label'],    
    'link' => $fields['cta_button'][1]['button_link']   
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

$service_delivery_block_args = array(
    'section_header' => $fields['service_delivery_header'],
    'items' => $fields['service_delivery_items']
    
);


$form_block_args = array(
    'section_header' => $fields['form_block_header']
);



?>

<?php get_header(); ?>


<main id="main" role="main" class="enterprise-solution-page">
    <div id="content">
        
      
        
        <?php //get_prorm_banner_page($banner_args, $general_alt ); ?>
        
        <?php get_prorm_banner_block($banner_args, $general_alt ); ?>
        
        <?php get_modal_form( 'register-webinar', 'bg-white', $fields['webinar_header']); ?>
        
        <?php get_modal_form( 'get-demo', 'bg-white', $fields['get_demo_header']); ?>
        
        <?php get_parent_breadcrumbs(get_the_title(), $parent_page_id); ?>
        
        <?php //get_full_business_circle_block($full_business_circle_block_args, $general_alt, 'bg-white'); ?>
        
        <?php get_graph_block($full_business_circle_block_args, $general_alt, 'bg-white'); ?>
        
        <?php //get_what_you_get_block($what_get_block_args, 'bg-grey'); ?>
        
        <?php //get_simple_block($why_use_it_block_args, 'bg-white'); ?> 
        
        <?php get_users_report_block($what_get_block_args, 'bg-white'); ?>
        
        
        
    <?php get_button_form_block($get_demo_block_args, 'download-bg-1'); ?>
        
        <?php get_focus_block($focus_block_args, $general_alt, 'bg-white'); ?>
                 
        <?php get_our_team_block($our_team_block_args, $general_alt, 'bg-white'); ?>
        
        <?php get_about_us_numbers_block($about_us_numbers_block_args, 'bg-grey'); ?>
        
        <?php // get_clients_block($clients_block_args ); ?>
        
        <?php get_clients_page_block($clients_block_args, $general_alt, 'bg-white'); ?>
        
   <?php get_button_form_block($register_block_args, 'download-bg-2'); ?>
       
        
        <?php get_service_delivery_block($service_delivery_block_args, $general_alt, 'bg-white'); ?>
                
      
   <?php //get_button_form_block($get_demo_2_block_args, 'download-bg-3'); ?>
       
        <?php get_form_block($form_block_args, 'contact-client', 'bg-white'); ?>
        
        <?php // $template = get_post_meta( $post->ID, '_wp_page_template', true ); 
// var_dump($template);
 
        ?>
         
        
    </div>
</main>



<?php get_footer('2017'); ?>