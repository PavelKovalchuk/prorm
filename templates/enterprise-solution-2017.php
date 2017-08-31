<?php
/*
 * Template Name: Enterprise Solution 2017 page
 */

if (!isset($_SESSION)) {
    session_start();
}


$settings = Registry::get('settings');
$image_path = get_template_directory_uri() . '/images/';


$general_alt =  $settings->getOption('general_alt_text_for_images');
$lang = pll_current_language();

$fields = get_fields();
//var_dump($fields);
$general_page_id = 'enterprise';

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


$parent_page_id = $fields['parent_page_id'];

$full_business_circle_block_args = array(
    'section_header' => $fields['full_business_circle_block_header'],
    //'graph_1' => $fields['products_graph_img_1'], //???????
    //'graph_2' => $fields['products_graph_img_2'],//???????
    'graph_3' => $fields['products_graph_img_3'],
    'block_text' => $fields['full_business_circle_block_text'],
    'items' => $fields['full_business_circle_items']
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
    'classes' => 'button-prorm button-prorm-white-transparent seo-enterprise-get-demo',
    'form_name' => $fields['cta_button'][0]['form_name']->post_name,
    'label' => $fields['cta_button'][0]['button_label'],
    'link' => $fields['cta_button'][0]['button_link'],
    'headline' => $fields['cta_button'][0]['headline'],
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
    'classes' => 'button-prorm button-prorm-white-transparent seo-enterprise-webinar',
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

$addons_block_args = array(
    'section_header' => $fields['addons_block_header'],
    'section_text' => $fields['addons_block_text'],
    'section_apps' => $fields['addons_items'],
    'lang' => $lang,
    'sign' => $fields['money_sign'],
    'period' => $fields['money_period']
    
);

$side_nav_args = array(
    'enable' => $fields['enable_side_menu'],
    'title' => $fields['side_menu_title'],
    'items' => $fields['side_menu_items'],
);

?>

<?php 

get_header(); 

//get_animated_page_side_nav($side_nav_args);

get_page_side_nav($side_nav_args);

?>

<main id="main" class="enterprise-solution-page">
    <div id="content">
        
        <?php 
        
        get_prorm_banner_block($banner_args, $general_alt, array('id' => 'banner_block') ); 
        
        get_modal_form( 'register-webinar', 'bg-white', $fields['webinar_header']); 
        
        get_modal_form( 'get-demo', 'bg-white', $fields['get_demo_header']); 
        
        get_parent_breadcrumbs(get_the_title(), $parent_page_id); 
             
        get_graph_es_animated($full_business_circle_block_args, $general_alt, 'bg-white', array('id' => 'graph_es_animated')); 
                      
        //get_users_report_list_block($what_get_block_args, 'bg-white'); 
        
         get_animated_users_report($what_get_block_args, 'bg-white', array('id' => 'users_report')); 
        
         get_features_card_block($addons_block_args, $general_alt, 'bg-white addons-block', array('id' => 'features_card')); 
        
     get_button_form_block($get_demo_block_args, 'download-bg-6-big big-field', array('id' => 'form_block_1')); 
        
        get_focus_block($focus_block_args, $general_alt, 'bg-white', array('id' => 'focus_block')); 
                 
        get_our_team_block($our_team_block_args, $general_alt, 'bg-white', array('id' => 'our_team'));
        
        get_about_us_numbers_block($about_us_numbers_block_args, 'bg-grey', array('id' => 'numbers')); 
                  
        get_clients_page_block($clients_block_args, $general_alt, 'bg-white', array('id' => 'clients_page')); 
        
   get_button_form_block($register_block_args, 'download-bg-2', array('id' => 'form_block_2')); 
       
        
        get_service_delivery_block($service_delivery_block_args, $general_alt, 'bg-white', array('id' => 'service_delivery_block')); 
                
      
    //get_button_form_block($get_demo_2_block_args, 'download-bg-3'); 
       
        get_form_block($form_block_args, 'contact-client', 'bg-white', array('id' => 'form_block_3')); 
        
        ?>
        
                
        
    </div>
</main>



<?php get_footer('2017'); ?>