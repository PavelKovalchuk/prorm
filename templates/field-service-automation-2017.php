<?php
/*
 * Template Name: Field Service Automation 2017 page
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

$general_page_id = 'field-s-a';

//For buttons on forms
Tpl::set('general_page_id', $general_page_id);

$banner_args = array(
    'banner_object' => $fields['banner_object_page']["url"],
    'banner_header' => $fields['banner_header_page'],
    'banner_header_tag' => $fields['banner_header_tag'],
    'banner_text' => $fields['banner_text_page'],
    'banner_buttons' => $fields['banner_buttons_page'],
    'button_id' => $general_page_id,
       
);


//$parent_page_id = $fields['parent_page_id'];

//$optimized_fs_block_args = array(
//    'section_header' => $fields['optimize_block_header'],
//    'section_text' => $fields['optimize_block_text'],
//    'items' => $fields['optimize_block_items']
//);

$simple_graph_block_args = array(
    'section_header' => $fields['optimize_block_header'],
    'block_text' => $fields['optimize_block_text'],
    'graph_1' => $fields['products_graph_img_1'],
    
);

$graph_anime_block_args = array(
    'section_header' => $fields['optimize_block_header'],
    'block_text' => $fields['optimize_block_text'],
    'circle_text' => $fields['products_graph_img_1'],
    'items' => $fields['graph_items'],
);

$what_get_block_args = array(
    'section_header' => $fields['what_you_get_block_header'],
    'items' => $fields['what_you_get_block_items']
    
);


$focus_block_args = array(
    'section_header' => $fields['our_focus_block_header'],
    'section_text' => $fields['our_focus_block_text'],
    'items' => $fields['our_focus_block_items']
    
);

$get_demo_block_args = array(
    'check_button' => $fields['cta_button'][0]['call_form'],
    'classes' => 'button-prorm button-prorm-white-transparent  seo-field-s-a-get-demo',
    'form_name' => $fields['cta_button'][0]['form_name']->post_name,
    'label' => $fields['cta_button'][0]['button_label'],
    'link' => $fields['cta_button'][0]['button_link'],
    'button_id' => 'getdemo-btn-' . $general_page_id . '-1'
    
);

//$get_demo_2_block_args = array(
//    'check_button' => $fields['cta_button'][2]['call_form'],
//    'classes' => 'button-prorm button-prorm-white-transparent',
//    'form_name' => $fields['cta_button'][2]['form_name']->post_name,
//    'label' => $fields['cta_button'][2]['button_label'],
//    'link' => $fields['cta_button'][2]['button_link'],
//    'button_id' => 'getdemo-btn-' . $general_page_id . '-2'    
//    
//);

$register_block_args= array(
    'check_button' => $fields['cta_button'][1]['call_form'],
    'classes' => 'button-prorm button-prorm-white-transparent seo-field-s-a-webinar',
    'form_name' => $fields['cta_button'][1]['form_name']->post_name,
    'label' => $fields['cta_button'][1]['button_label'],
    'link' => $fields['cta_button'][1]['button_link'],
    'button_id' => 'register-btn-' . $general_page_id . '-1'
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


<main id="main" class="field-service-automation-page">
    <div id="content">
        
        <?php 
        
        get_prorm_banner_block($banner_args, $general_alt ); 
        
        get_modal_form( 'register-webinar', 'bg-white', $fields['webinar_header']); 

        get_modal_form( 'get-demo', 'bg-white', $fields['get_demo_header']); 
        
        get_parent_breadcrumbs(get_the_title(), false); 
             
        get_graph_fs_animated($graph_anime_block_args, $general_alt, 'bg-white', array('id' => 'graph_fs_animated')); 
//
        get_users_report_block($what_get_block_args, 'bg-white'); 

        get_button_form_block($get_demo_block_args, 'download-bg-1'); 

        get_focus_block($focus_block_args, $general_alt, 'bg-white'); 
        
        get_clients_page_block($clients_block_args, $general_alt, 'bg-white'); 

        get_our_team_block($our_team_block_args, $general_alt, 'bg-white'); 

        get_about_us_numbers_block($about_us_numbers_block_args, 'bg-grey'); 

        get_button_form_block($register_block_args, 'download-bg-2'); 

        get_service_delivery_block($service_delivery_block_args, $general_alt, 'bg-white'); 
         
// get_button_form_block($get_demo_2_block_args, 'download-bg-3'); 
       
        get_form_block($form_block_args, 'contact-client', 'bg-white'); 
        
        ?>
        
     
        
    </div>
</main>



<?php get_footer('2017'); 