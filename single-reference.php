<?php

$current_lang = pll_current_language();
$settings = Registry::get('settings');
$settings_references = Registry::get('settings-references');

$general_alt =  $settings->getOption('general_alt_text_for_images');

$general_page_id = 'references';

//For buttons on forms
Tpl::set('general_page_id', $general_page_id);

$parent_page_ID = $settings_references->getOption('parent_page_' . $current_lang);
$customer_profile_header = $settings_references->getOption('customer_profile_header_' . $current_lang);

//$customer_header = $settings_references->getOption('customer_header_' . $current_lang);
$website_header = $settings_references->getOption('website_header_' . $current_lang);
$customer_size_header = $settings_references->getOption('customer_size_header_' . $current_lang);
$region = $settings_references->getOption('region_' . $current_lang);
$industry = $settings_references->getOption('industry_' . $current_lang);
$software = $settings_references->getOption('software_' . $current_lang);

//$customer_img_ID = $settings_references->getOption('customer_img');
$website_img_ID = $settings_references->getOption('website_img');
$customer_size_img_ID = $settings_references->getOption('customer_size_img');
$region_img_ID = $settings_references->getOption('region_img');
$industry_img_ID = $settings_references->getOption('industry_img');
$software_img_ID = $settings_references->getOption('software_img');


    get_header();
?>
<main id="main" class="single-reference">
    <div id="content">
       
                        <?php
                        if (have_posts()) {
                            while (have_posts()) {
                                the_post();
                                $fields = get_fields();

                                
                            $banner_args = array(                                                                                                
                                                'banner_text' => $fields['customer_words'],
                                                'person_photo' => $fields['contact_person_photo'],
                                                'person_name' => $fields['contact_person'],
                                                'person_position' => $fields['contact_person_position'],                                        
                                
                            );    
                            
                            $intro_args = array(
                                'image_url' =>  get_the_post_thumbnail_url($post->ID, 'full' ),
                                'image_alt' => $fields['thumbnail_img_alt'],
                                'description' => $fields['customer_description']

                            );
                            
                            $cus_args = array(
                                
//                                array(
//                                    'img_url' => wp_get_attachment_image_url( $customer_img_ID, 'thumbnail' ),
//                                    'header' => $customer_header,
//                                    'value' => $fields["customer_name"],
//                                    'class' => 'cus-name',
//                                    'icon' => 'fa-info-circle'
//                                ),                                
                                array(
                                    'img_url' => wp_get_attachment_image_url( $website_img_ID, 'thumbnail' ),
                                    'header' => $website_header,
                                    'value' => $fields["website"],
                                    'class' => 'cus-web',
                                    'icon' => 'fa-info-circle'
                                ),
                            
                                array(
                                    'img_url' => wp_get_attachment_image_url( $customer_size_img_ID, 'thumbnail' ),
                                    'header' => $customer_size_header,
                                    'value' => $fields["size"],
                                    'class' => 'cus-size',
                                    'icon' => 'fa-users'
                                ),
                            
                                array(
                                    'img_url' => wp_get_attachment_image_url( $region_img_ID, 'thumbnail' ),
                                    'header' => $region,
                                    'value' => $fields["region"],
                                    'class' => 'cus-region',
                                    'icon' => 'fa-map-marker'
                                ),
                            
                                array(
                                    'img_url' => wp_get_attachment_image_url( $industry_img_ID, 'thumbnail' ),
                                    'header' => $industry,
                                    'value' => $fields["industries"],
                                    'class' => 'cus-industry',
                                    'icon' => 'fa-cog'
                                ),
                            
                                array(
                                    'img_url' => wp_get_attachment_image_url( $software_img_ID, 'thumbnail' ),
                                    'header' => $software,
                                    'value' => $fields["softwares"],
                                    'class' => 'cus-software',
                                    'icon' => 'fa-code'
                                )
                                
                            );
                            
                            $case_study_args = array(
                                'header' =>  $fields["content_header"],
                                'content' => get_the_content(),
                                'items' => $cus_args

                            );
                            
                            $form_block_args = array(
                                'section_header' => $fields['form_block_header']
                            );
    
                            
                            
                                
                            get_reference_banner_block($banner_args, $general_alt ); 
                            
                            
                            ?>
                            <div class="container-breadcrumbs">
            
                                <div class="container">

                                    <div class="breadcrumbs-outer row-12">
                                        
                                        <ul class="list-links breadcrumbs">

                                            <li><a href="<?php the_permalink($parent_page_ID) ?>"><?php echo get_the_title( $parent_page_ID); ?></a></li>

                                            <li class="active"><?php echo get_the_title(); ?></li>
                                        </ul>
                                        
                                    </div>
                                 </div>
                            </div>
        
                            <?php

                                                       
                         
                            get_reference_intro_block($intro_args, $general_alt, 'bg-white');
           
                            get_case_study_block($case_study_args, $general_alt, 'bg-white');  
                                                        
                            get_form_block($form_block_args, 'contact-client', 'bg-white'); 
                            
                            
                            }
                        }
                        ?>
                    
                        
                    <!--</div>-->
       
    </div>
</main>
<?php get_footer('2017'); ?>
    





