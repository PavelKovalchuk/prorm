<?php


function get_soft_solutions_block($args, $general_alt, $section_bg){
    extract($args);
    ?>
    
        <section class="soft-solutions-block info-block text-bigger-block <?php echo $section_bg; ?>">
            <div class="container">
                <h2 class="black-style-center center text-bigger"><?php echo $section_header; ?></h2>

                <p class="center"><?php echo $section_text; ?></p>

                <div class="apps-solution-outer row-12">

                    <?php if($section_apps){ 
                        foreach ($section_apps as $app) { ?>

                        <div class="apps-solution col-3">
                       
                            <div class="apps-solution-img-outer">
                                <img src="<?php echo $app['app_image']; ?>" class="apps-solution-img"
                                    alt="<?php echo $app['app_image_alt'] ? $app['app_image_alt'] : $general_alt ; ?>">


                            </div>

                            <div class="apps-solution-text-outer">

                                <h5 class="center marsala-colour apps-solution-title"><?php echo $app['app_name']; ?></h5>

                                <p class="center"><?php echo $app['app_descr']; ?></p>

                                <?php $preview_id = intval($app['app_image_preview']);
                                $app_image_preview_url = wp_get_attachment_image_url($preview_id, 'preview-max' ); ?>

                                <a data-effect="mfp-zoom-in" href="<?php echo $app_image_preview_url; ?>" class="more gallery-item magnifier-link marsala-colour">
                                    <?php _e('Preview', ProRMTheme::TEXTDOMAIN); ?>
                                </a>

                            </div>


                        </div>
                    
                      

                    <?php } ?>
                    <?php } ?>


                </div>
            </div>
            
        </section>
    
<?php } 


function get_features_card_block($args, $general_alt, $section_bg){
    extract($args);
    ?>
    
        <section class="features-block info-block text-bigger-block <?php echo $section_bg; ?>">
            <div class="container">
                <h2 class="black-style-center center text-bigger"><?php echo $section_header; ?></h2>

                <p class="center"><?php echo $section_text; ?></p>

                <div class="features-outer row-12">

                    <?php if($section_apps){ 
                        foreach ($section_apps as $app) { ?>


                        <div class="feature col-3"> 
                            
                            <?php $preview_id = intval($app['app_image_preview']);
                                $app_image_preview_url = wp_get_attachment_image_url($preview_id, 'full' ); ?>
                            
                            <a  data-effect="mfp-zoom-in" href="<?php echo $app_image_preview_url; ?>" class="card card-2 card-link more gallery-item">
                                
                                <div class="feature-img-outer bg-grey">
                                    <img src="<?php echo $app['app_image']; ?>" class="feature-img"
                                        alt="<?php echo $app['app_image_alt'] ? $app['app_image_alt'] : $general_alt ; ?>">

                                </div>

                                <div class="feature-text-outer">

                                    <h5 class="center feature-text marsala-colour"><?php echo $app['app_name']; ?></h5>
                                    
                                    <p class="center feature-des"><?php echo $app['app_descr']; ?></p>
                                                                        
                                </div>
                                
                                <div class="feature-bottom">
                                    
                                    <div class="feature-link-outer">
                                                                           
                                        <div class="feature-link marsala-colour">
                                            <?php _e('Preview', ProRMTheme::TEXTDOMAIN); ?>
                                        </div>

                                    </div>
                                    
                                </div>
                               
                            </a>

                        </div>

                    <?php } ?>
                    <?php } ?>


                </div>
            </div>
            
        </section>
    
<?php } 


function get_pages_card_block($args, $general_alt, $section_bg){
    extract($args);
    ?>
    
        <section class="pages-card-block info-block text-bigger-block <?php echo $section_bg; ?>">
            <div class="container">
                <h2 class="black-style-center center text-bigger"><?php echo $section_header; ?></h2>

                <div class="page-card-outer row-12">

                    <?php if($items){ 
                        foreach ($items as $item) { ?>

                        <div class="page-card col-6"> 
                            
                                                      
                            <a href="<?php echo get_permalink( $item['page_item_button_link'][0] ); ?>" class="card card-2 card-link">
                                
                                <div class="page-card-header-outer  bg-grey">
                                    <h2 class="center page-card-header bold-text marsala-colour"><?php echo $item['page_item_title']; ?></h2>
                                </div>
                                
                                <div class="page-card-img-outer">
                                    <img src="<?php echo $item['page_item_img']; ?>" class="page-card-img"
                                        alt="<?php echo $item['page_item_img_alt'] ? $item['page_item_img_alt'] : $general_alt ; ?>">

                                </div>

                                <div class="page-card-text-outer">

                                    <p class="center page-card-des"><?php echo $item['page_item_text']; ?></p>
                                                                        
                                </div>
                                
                                <div class="page-card-bottom">
                                    
                                    <div class="page-card-link-outer">
                                         
                                            <h5 class="center page-card-text marsala-colour"><?php echo $item['page_item_button_label']; ?></h5>
                                        
                                    </div>
                                    
                                </div>
                               
                            </a>

                        </div>

                    <?php } ?>
                    <?php } ?>


                </div>
            </div>
            
        </section>
    
<?php } 


function get_expectations_block($args, $general_alt, $section_bg){
    extract($args);
    ?>

        <section class="expectation-block info-block text-bigger-block <?php echo $section_bg; ?>">
            <div class="container">
                <h2 class="black-style-center center text-bigger"><?php echo $section_header; ?></h2>

                <div class="expectations-outer row-12">


                    <?php if($section_expectation){ 
                        foreach ($section_expectation as $exp) { ?>

                        <div class="expectation">

                            <div class="expectation-img-outer center alignment-<?php echo $exp['expectation_img_side']; ?>">
                                <img src="<?php echo $exp['expectation_img']; ?>" class="expectation-img"
                                    alt="<?php echo $exp['expectation_image_alt'] ? $exp['expectation_image_alt'] : $general_alt ; ?>">
                            </div>

                            <p class="expectation-text alignment-<?php echo $exp['expectation_text_side']; ?>">
                                <?php echo $exp['expectation_text']; ?>
                            </p>

                        </div>

                    <?php } ?>
                    <?php } ?>


                </div>
            </div>
        </section>
    
<?php } 

function get_button_block($args, $download_bg, $btn_color){
    extract($args);
    ?>
    
        <section class="download-block <?php echo $download_bg; ?>">
            
                <div class="download-btn-outer">
                    <a href="<?php echo $button_link; ?>" target="_blank" class="button-prorm <?php echo $btn_color; ?>"><?php echo $button_label; ?></a>
                </div>
            
        </section>
    
    
<?php } 

function get_button_form_block($args, $download_bg){
//    extract($args);
    ?>
    
        <section class="download-block button_form_block <?php echo $download_bg; ?>">
           
                <div class="download-btn-outer">
                    <?php get_button_link($args); ?>
                </div>
           
        </section>
    
    
<?php } 


function get_button_link($args){
    extract($args);
    
    if($check_button){ ?>

        <button class="<?php echo $classes; ?>"  
                data-form-name="<?php echo $form_name; ?>">
                    <?php echo $label; ?>
        </button>

    <?php }else{ ?>

        <a href="<?php echo $link; ?>" target="_blank" class="<?php echo $classes; ?>"><?php echo $label; ?></a>

    <?php }   
    
}

function get_button_action($args){
    extract($args);
    
    if($action == 'form'){ ?>

        <button class="<?php echo $classes; ?>"  
                data-form-name="<?php echo $form_name; ?>">
                    <?php echo $label; ?>
        </button>

    <?php } elseif($action == 'link'){ ?>

        <a href="<?php echo $link; ?>" class="<?php echo $classes; ?>"><?php echo $label; ?></a>

    <?php }elseif($action == 'targetLink'){ ?>

        <a href="<?php echo $link; ?>" target="_blank" class="<?php echo $classes; ?>"><?php echo $label; ?></a>

    <?php } elseif($action == 'video'){ ?>

        <a href="<?php echo $link; ?>" data-effect="mfp-zoom-in" class="<?php echo $classes; ?> popup-youtube">
            <?php echo $label; ?>
        </a>

    <?php }else{ ?>

        <a href="<?php echo $link; ?>" class="<?php echo $classes; ?>"><?php echo $label; ?></a>
        
    <?php }
}

function get_parent_breadcrumbs($current_title, $parent_id){
    
    ?>
        <div class="container-breadcrumbs">
            
            <div class="container">
            
                <div class="breadcrumbs-outer row-12">

                    <ul class="list-links breadcrumbs">
                        <?php if(!$parent_id){ ?>
                            <li><a href="<?php echo home_url('/'); ?>"><?php echo _e('Homepage', ProRMTheme::TEXTDOMAIN) ?></a></li>
                        <?php } else{ ?>
                            <li><a href="<?php the_permalink($parent_id); ?>"><?php echo get_the_title($parent_id); ?></a></li>
                        <?php }?>

                        <li class="active"><?php echo $current_title; ?></li>
                    </ul>

                </div>
                
            </div>
           
        </div>
    
<?php }


function get_our_team_block($args, $general_alt, $section_bg){
    extract($args);
    
    if(intval($meet_our_team_ID)){
        $persons = get_field('persons_block', $meet_our_team_ID);
    }
    
    if(!$section_header){
        $section_header = get_field('team_block_header', $meet_our_team_ID);
    }
    
    
    ?>
    
        <section class="meet-team-block info-block text-bigger-block <?php echo $section_bg; ?>">
            <div class="container">
                <h2 class="black-style-center center text-bigger"><?php echo $section_header; ?></h2>

                <div class="persons-outer row-12">

                <?php if($persons){ 
                        foreach ($persons as $person) { ?>

                        <div class="person col-2 center">

                            <div class="person-img-outer rotate-photos">
                                <img src="<?php echo $person['person_photo_grey']; ?>" class="person-img"
                                    alt="<?php echo $person['person_photo_alt'] ? $person['person_photo_alt'] : $general_alt ; ?>">
                                <img src="<?php echo $person['person_photo']; ?>" class="person-img"
                                    alt="<?php echo $person['person_photo_alt'] ? $person['person_photo_alt'] : $general_alt ; ?>">
                            </div>

                            <h5 class="center person-name marsala-colour"><?php echo $person['person_name']; ?></h5>

                            <p class="center font-small"><?php echo $person['person_position']; ?></p>


                        </div>

                <?php } ?>
                <?php } ?>

                </div>
            </div>
        </section>
    
<?php } 


function get_about_us_numbers_block($args, $section_bg){
    extract($args);
    wp_enqueue_script('jquery-ui-effects-js', get_template_directory_uri() . '/js/jquery-ui-effects.min.js#asyncload"', array('jquery'), false, true);
    
    if(!$section_header){
        $settings = Registry::get('settings');
        $lang = pll_current_language();
        $section_header = $settings->getOption('about_us_in_numbers_header_' . $lang);
        
    }
    
    ?>
    
    <section data-status="ready" class="about-us-numbers-block info-block text-bigger-block <?php echo $section_bg; ?>"> 
        <div class="container">
            <h2 class="black-style-center center text-bigger"><?php echo $section_header; ?></h2>

            <div class="about-us-numbers-outer row-12" >

            <?php if ( is_active_sidebar( 'about-us-numbers-sidebar' ) ) : 

                dynamic_sidebar( 'about-us-numbers-sidebar' ); 

            endif; ?>

            </div>
        </div>
    </section>
    
<?php }

function clients_block_scripts() {
    
    wp_enqueue_style('animate-css', get_template_directory_uri() . '/css/animate.css', array());

}


function get_clients_block($args){
    extract($args);
    
    if(!$section_header){
        $settings = Registry::get('settings');
        $lang = pll_current_language();
        $section_header = $settings->getOption('customers_words_header_' . $lang);
        
    }

    ?>
    
    <section class="carousel-block clients-block <?php echo $bg; ?> info-block text-bigger-block">
            <div class="container">
                <h2 class="black-style-center center text-bigger"><?php echo $section_header; ?></h2>

                <div class="owl-carousel owl-theme" id="carousel_clients">

                    <?php if ( is_active_sidebar( 'customers-words-sidebar' ) ) : 

                        dynamic_sidebar( 'customers-words-sidebar' ); 

                    endif; ?>

                </div>
            </div>
            
        </section>
    
<?php }



function get_bussiness_circle_block($args, $general_alt, $section_bg){
    extract($args);
    
    ?>
    
    <section class="bussiness-circle-block info-block step-block text-bigger-block <?php echo $section_bg; ?>"> 
        <div class="container">
            <h2 class="black-style-center center text-bigger"><?php echo $section_header; ?></h2>

            <div class="bussiness-circle-outer row-12">

            <?php if ( $items ) : 

                foreach ( $items as $key => $item) : ?>

                <?php  
                if($key%2 == 0){
                    $img_class = 'float-img-left';
                    $text_class = 'padding-text-right';
                }else{
                    $img_class = 'float-img-right';
                    $text_class = 'padding-text-left';
                }
                ?>

                <div class="bussiness-item bussiness-item-<?php echo $key; ?>">

                    <?php  
                    if($key%2 == 0){ 
                        ?><div class="row-12"> <?php
                        get_bussiness_circle_img($img_class, $item['bussiness_item_img'], $item['bussiness_item_alt'], $general_alt);

                        get_bussiness_circle_text($text_class, $item['bussiness_item_title'], $item['bussiness_item_text']);
                       ?></div> 
                    <div class="row-12">
                        <div class="arrow-bis"></div>
                            
                    </div><?php

                    }else{ 
                        ?><div class="row-12"> <?php
                        get_bussiness_circle_text($text_class, $item['bussiness_item_title'], $item['bussiness_item_text']);

                        get_bussiness_circle_img($img_class, $item['bussiness_item_img'], $item['bussiness_item_alt'], $general_alt);
                        ?></div> 
                    <div class="row-12">
                        <div class="arrow-bis"></div>
                            
                    </div><?php
                        }
                    ?>



                </div>


                <?php endforeach; 

            endif; ?>

            </div>
        </div>
    </section>
    
<?php }


function get_bussiness_circle_block_bu($args, $general_alt, $section_bg){
    extract($args);
    
    ?>
    
    <section class="bussiness-circle-block info-block step-block text-bigger-block <?php echo $section_bg; ?>"> 
        <div class="container">
            <h2 class="black-style-center center text-bigger"><?php echo $section_header; ?></h2>

            <div class="bussiness-circle-outer row-12">

            <?php if ( $items ) : 

                foreach ( $items as $key => $item) : ?>

                <?php  
                if($key%2 == 0){
                    $img_class = 'float-img-left';
                    $text_class = 'padding-text-right';
                }else{
                    $img_class = 'float-img-right';
                    $text_class = 'padding-text-left';
                }
                ?>

                <div class="bussiness-item bussiness-item-<?php echo $key; ?>">

                    <?php  
                    if($key%2 == 0){ 
                       
                        get_bussiness_circle_img($img_class, $item['bussiness_item_img'], $item['bussiness_item_alt'], $general_alt);

                        get_bussiness_circle_text($text_class, $item['bussiness_item_title'], $item['bussiness_item_text']);
                      

                    }else{ 
                       
                        get_bussiness_circle_text($text_class, $item['bussiness_item_title'], $item['bussiness_item_text']);

                        get_bussiness_circle_img($img_class, $item['bussiness_item_img'], $item['bussiness_item_alt'], $general_alt);
                       
                        }
                    ?>



                </div>


                <?php endforeach; 

            endif; ?>

            </div>
        </div>
    </section>
    
<?php }



function get_service_delivery_block($args, $general_alt, $section_bg){
    extract($args);
    
    ?>
    
    <section class="bussiness-circle-block service-delivery-block info-block step-block text-bigger-block <?php echo $section_bg; ?>"> 
        <div class="container">
            <h2 class="black-style-center center text-bigger"><?php echo $section_header; ?></h2>

            <div class="bussiness-circle-outer row-12">

            <?php if ( $items ) : 

                foreach ( $items as $key => $item) : ?>

                <?php  
                if($key%2 == 0){
                    $img_class = 'float-img-left';
                    $text_class = 'padding-text-right';
                }else{
                    $img_class = 'float-img-right';
                    $text_class = 'padding-text-left';
                }
                ?>

                <div class="bussiness-item service-delivery-item bussiness-item-<?php echo $key; ?>">

                    <?php  
                    if($key%2 == 0){ 
                        ?><div class="row-12"> <?php
                        get_bussiness_circle_img($img_class, $item['service_item_img'], $item['service_item_alt'], $general_alt);

                        get_bussiness_circle_text($text_class, $item['service_item_title'], $item['service_item_text']);
                        ?></div> 
                        <div class="row-12">
                            <div class="arrow-bis"></div>

                        </div><?php

                    }else{ 
                        ?><div class="row-12"> <?php
                        get_bussiness_circle_text($text_class, $item['service_item_title'], $item['service_item_text']);

                        get_bussiness_circle_img($img_class, $item['service_item_img'], $item['service_item_alt'], $general_alt);
                        ?></div> 
                        <div class="row-12">
                            <div class="arrow-bis"></div>

                        </div><?php
                        }
                    ?>



                </div>


                <?php endforeach; 

            endif; ?>

            </div>
        </div>
    </section>
    
<?php }



function get_bussiness_circle_img($img_class, $img_url, $img_alt, $general_alt){
    
    
    ?>
    <div class="bussiness-img-outer <?php echo $img_class; ?>">
        <img src="<?php echo $img_url; ?>" 
            alt="<?php echo $img_alt ? $img_alt : $general_alt ; ?>"
            class="bussiness-img">
    </div>

    <?php
} 

function get_bussiness_circle_text($text_class, $title, $text){
    
    ?>
    <div class="bussiness-text-outer <?php echo $text_class; ?>">
        
        <div class="bussiness-text-inner">
            
                <h5 class="marsala-colour bold-text bussiness-text-title"><?php echo $title; ?></h5>
                <p><?php echo $text; ?></p>
            
        </div>
        
        
        <div class="mobile-arrow"></div>
    </div>
    
   

    <?php
} 


function get_bussiness_circle_block_dev($args, $general_alt){
    extract($args);
    
    ?>
    
    <section class="bussiness-circle-block info-block step-block text-bigger-block"> 
        <div class="container">
            <h2 class="black-style-center center text-bigger"><?php echo $section_header; ?></h2>

            <div class="bussiness-circle-outer row-12">

            <?php if ( $items ) : 

                foreach ( $items as $key => $item) : ?>

                        <article class="step <?php if ($key == 2 || $key == 4 ){ echo 'z-under';} ?>">

                            <div class="step-img">
                                <img src="<?php echo $item['bussiness_item_img']; ?>" 
                                     alt="<?php echo $item['bussiness_item_alt'] ? $item['bussiness_item_alt'] : $general_alt ; ?>">
                            </div>

                            <div class="step-text">
                                <h5 class="marsala-colour"><?php echo $item['bussiness_item_title']; ?></h5>
                                <p><?php echo $item['bussiness_item_text']; ?></p>
                            </div>

                            <?php if ($key == 0) : ?>

                            <div class="visual-step-one"></div>
                            <?php else : ?>
                                <div class="visual-step-top "></div>
                                <div class="visual-step-bottom"></div>
                            <?php endif; ?>
                        </article>
                <?php endforeach; 

            endif; ?>

            </div>
        </div>
    </section>
    
<?php }


function get_videos_block($args, $section_bg){
    extract($args);

    if(!$section_header){
        $settings = Registry::get('settings');
        $lang = pll_current_language();
        $section_header = $settings->getOption('video_slider_header_' . $lang);
        
    }
    ?>
    
    <section class="carousel-block videos-block info-block text-bigger-block <?php echo $section_bg; ?>">
        <div class="container">    
            <h2 class="black-style-center center text-bigger"><?php echo $section_header; ?></h2>
            
            <div class="video-carousel-outer">
                <div class="owl-carousel owl-theme" id="video-carousel">
                
                <?php if ( is_active_sidebar( 'videos-faststart-sidebar' ) ) : 

                    dynamic_sidebar( 'videos-faststart-sidebar' ); 

                endif; ?>
                
                </div>
            </div>
            
        </div> 
            
    </section>
    
<?php }

function get_form_block($args, $form_name, $section_bg){
    extract($args);
    
    ?>

    <section class="form-block info-block text-bigger-block <?php echo $section_bg; ?>">
        <div class="container">
            <h2 class="black-style-center center text-bigger">
                <?php 
                if($section_header){
                    echo $section_header;
                }else{
                    echo do_shortcode('[form-header name=' .$form_name . '-' . pll_current_language() . ']');
                }
                 ?>
            </h2>

            <div class="form-holder">
                 <?php echo do_shortcode('[form name=' .$form_name . ']'); ?>
            </div>
        </div>
    </section>
    
    
<?php }



function get_modal_form($form_name, $bg, $form_header = false){
//    extract($args);
    ?>
    
        <!-- The Modal -->
        <div id="modalForm-<?php echo $form_name; ?>" data-aim-form-name="<?php echo $form_name . '-'. pll_current_language(); ?>" class="modal-window">

          <!-- Modal content -->
          <div class="modal-content <?php if($bg){ echo $bg; } ?>">
              
            <div class="modal-header">
              <span class="close">&times;</span>
              
            </div>
              
            <div class="modal-body">
                <div class="container">
                    <h5 class="black-style center text-bigger">
                        <?php 
                         
                            if($form_header){
                                echo $form_header;
                            }else{
                                echo do_shortcode('[form-header name=' .$form_name . '-' . pll_current_language() . ']');
                            }
                            
                            
                        
                         ?>
                    </h5>

                    <div class="form-holder">
                         <?php echo do_shortcode('[form name=' .$form_name . ']'); ?>
                    </div>
                  </div>
            </div>
              
            <div class="modal-footer">
             
            </div>
              
          </div>

        </div>

    
    
<?php } 





function get_optimized_fs_block($args, $general_alt, $section_bg){
    extract($args);
    ?>
    
        <section class="optimize-block info-block text-bigger-block <?php echo $section_bg; ?>">
            <div class="container">
                <h2 class="black-style-center center text-bigger"><?php echo $section_header; ?></h2>

                <div class="optimize-outer row-6">

                    <?php if($items){ 
                        foreach ($items as $item) { ?>

                        <div class="optimize-item col-6">
                            <a href="<?php echo $item['optimize_item_link']; ?>" class="optimize-link">
                                <?php // var_dump($item['optimize_item_img']); ?>
                                <div class="optimize-img-outer">
                                    <img src="<?php echo $item['optimize_item_img']; ?>" class="optimize-img"
                                        alt="<?php echo $item['optimize_item_img_alt'] ? $item['optimize_item_img_alt'] : $general_alt ; ?>">

                                </div>

                                <div class="optimize-header-outer">

                                    <h5 class="center marsala-colour"><?php echo $item['optimize_item_label']; ?></h5>

                                </div>
                            </a>

                        </div>

                    <?php } ?>
                    <?php } ?>


                </div>

                <div class="optimize-text-outer row-12">
                    <p class="optimize-p"><?php echo $section_text; ?></p>
                </div>
            </div>
            
        </section>
    
<?php } 


function get_what_you_get_block($args, $section_bg){
    extract($args);
    ?>
    
        <section class="what-get-block info-block text-bigger-block <?php echo $section_bg; ?>">
            <div class="container">
                <h2 class="black-style-center center text-bigger"><?php echo $section_header; ?></h2>

                <div class="what-get-outer row-12">

                    <?php if($items){ 
                        foreach ($items as $item) { ?>


                        <div class="what-get-item col-4 focus">
                            
                            <div class="what-get-img">
                                <img src="<?php echo $item['item_image']; ?>" alt="<?php echo $item['item_image_alt']; ?>" />
                            </div>

                            <div class="what-get-header-outer">
                                
                                <h5 class="center marsala-colour what-get-header focus-el"><?php echo $item['item_header']; ?></h5>

                            </div>

                            <div class="what-get-text-outer">
                                <p class="what-get-p center"><?php echo $item['item_text']; ?></p>
                            </div>

                        </div>

                    <?php } ?>
                    <?php } ?>

                </div>
            </div>
        </section>
    
<?php } 


function get_users_report_block($args, $section_bg){
    extract($args);
    ?>
    
        <section class="users-report-block info-block text-bigger-block <?php echo $section_bg; ?>">
            <div class="container">
                <h2 class="black-style-center center text-bigger"><?php echo $section_header; ?></h2>

                <div class="users-report-outer row-12">

                    <?php if($items){ 
                        foreach ($items as $item) { ?>


                        <div class="users-report col-3 "> 
                            
                            <div class="card-link card card-2">
                                
                                <div class="users-report-header-outer">
                                
                                    <h5 class="center marsala-colour users-report-header"><?php echo $item['item_header']; ?></h5>

                                </div>

                                <div class="users-report-text-outer">
                                    <p class="users-report-text center"><?php echo $item['item_text']; ?></p>
                                </div>
                                
                            </div>
                                                   
                            
                            
                        </div>

                    <?php } ?>
                    <?php } ?>

                </div>
            </div>
        </section>
    
<?php } 



function get_focus_block($args, $general_alt, $section_bg){
    extract($args);
    if(!$section_header){
        $settings = Registry::get('settings');
        $lang = pll_current_language();
        $section_header = $settings->getOption('our_focus_header_' . $lang);
        
    }
    ?>
    
        <section class="focus-block info-block text-bigger-block <?php echo $section_bg; ?>">
            <div class="container">
                <h2 class="black-style-center center text-bigger"><?php echo $section_header; ?></h2>
                
                <div class="focus-text-outer">

                    <p class="focus-text"><?php echo $section_text; ?></p>

                </div>

                <div class="focus-block-outer row-12">

                    <?php if($items){ 
                        foreach ($items as $item) { ?>

                       <?php // var_dump( $item['focus_image']); ?>
                        <div class="focus-item col-2-4">

                            <div class="focus-img-outer">
                                <img src="<?php echo $item['focus_image']; ?>" class="focus-img"
                                    alt="<?php echo $item['focus_image_alt'] ? $item['focus_image_alt'] : $general_alt ; ?>">

                            </div>

                            <div class="focus-header-outer">

                                <h5 class="center bold-text marsala-colour"><?php echo $item['focus_title']; ?></h5>

                            </div>

                        </div>

                    <?php } ?>
                    <?php } ?>

                </div>
            </div>
        </section>
    
<?php } 


function get_full_business_circle_block($args, $general_alt, $section_bg){
    extract($args);
    ?>
    
        <section class="optimize-block full-business-circle-blocl info-block text-bigger-block <?php echo $section_bg; ?>">
            <div class="container">
                <h2 class="black-style-center center text-bigger"><?php echo $section_header; ?></h2>

                <div class="optimize-outer row-12">

                    <?php if($items){ 
                        foreach ($items as $item) { ?>

                        <div class="optimize-item col-4">
                            <a href="<?php echo $item['fbc_item_link']; ?>" class="optimize-link">

                                <div class="optimize-img-outer">
                                    <img src="<?php echo $item['fbc_item_img']; ?>" class="optimize-img"
                                        alt="<?php echo $item['fbc_item_img_alt'] ? $item['fbc_item_img_alt'] : $general_alt ; ?>">

                                </div>

                                <div class="optimize-header-outer">

                                    <h5 class="center marsala-colour"><?php echo $item['fbc_item_label']; ?></h5>

                                </div>
                                
                                <div class="optimize-text-outer optimize-descr">

                                    <p><?php echo $item['fbc_item_text']; ?></p>

                                </div>
                            </a>

                        </div>

                    <?php } ?>
                    <?php } ?>


                </div>
            </div>
            
        </section>
    
<?php } 

function get_graph_block($args, $general_alt, $section_bg){
    extract($args);
    ?>
    
        <section class="graph-block info-block text-bigger-block <?php echo $section_bg; ?>">
            <div class="container">
                <h2 class="black-style-center center text-bigger"><?php echo $section_header; ?></h2>
                
                
                <div class="graph-outer row-12">
                    
                    <div class="graph-img-outer">
                        
                        <div class="graph-img-inner">
                            
                            <img src="<?php echo $graph_1; ?>" class="graph-img"
                            alt="<?php echo $section_header; ?>">
                        
                            <img src="<?php echo $graph_2; ?>" class="graph-img"
                            alt="<?php echo $section_header; ?>">
                            
                        </div>
                        
                        
                        <?php if($items){ 
                            $i = 0;
                            foreach ($items as $item) { 
                                    $i++; ?>
                                    <div class="graph-item-text-outer <?php echo 'gi-' . $i; ?>">

                                        <p class="graph-item-text"><?php echo $item['fbc_item_text']; ?></p>

                                    </div>
                          
                            <?php } ?>
                        <?php } ?>

                    </div>
                    
                   
                    
                    <div class="graph-text-outer">
                        <p class="graph-text"><?php echo $block_text; ?></p>
                    </div>
                    
                    
                    
                </div>
                
                
                
                
            </div>
            
        </section>
    
<?php } 



function get_simple_graph_block($args, $general_alt, $section_bg){
    extract($args);
    ?>
    
        <section class="simple-graph-block info-block text-bigger-block <?php echo $section_bg; ?>">
            <div class="container">
                <h2 class="black-style-center center text-bigger"><?php echo $section_header; ?></h2>
                
                
                <div class="graph-outer row-12">
                    
                    <div class="graph-img-outer">
                        
                        <img src="<?php echo $graph_1; ?>" class="graph-img"
                        alt="<?php echo $section_header; ?>">
                        
                    </div>
                    
                    
                    <div class="graph-text-outer">
                        <p class="graph-text"><?php echo $block_text; ?></p>
                    </div>
                    
                </div>
                
            </div>
            
        </section>
    
<?php } 



function get_simple_block($args, $section_bg){
    extract($args);
    ?>
    
        <section class="optimize-block simple-block info-block text-bigger-block <?php echo $section_bg; ?>">
            <div class="container">
                <h2 class="black-style-center center text-bigger"><?php echo $section_header; ?></h2>

                <div class="optimize-text-outer row-12">
                    <p class="optimize-p"><?php echo $section_text; ?></p>
                </div>
            </div>
            
        </section>
    
<?php } 


function get_psa_block($args, $general_alt, $section_bg){
    extract($args);
    ?>
    
        <section class="psa-block info-block text-bigger-block <?php echo $section_bg; ?>">
            <div class="container">
                <h2 class="black-style-center center text-bigger"><?php echo $section_header; ?></h2>

                <div class="psa-outer row-12">

                    <?php if($items){ 
                        foreach ($items as $item) { ?>


                        <div class="psa-page-item col-6">
                            
                            <div class="page-img-outer">
                                <img src="<?php echo $item['page_item_img']; ?>" class="psa-page-img"
                                    alt="<?php echo $item['page_item_img_alt'] ? $item['page_item_img_alt'] : $general_alt ; ?>">

                            </div>
                            
                            <div class="info-outer">
                                
                                <div class="page-header-outer">

                                <h5 class="marsala-colour page-item-header"><?php echo $item['page_item_title']; ?></h5>

                                </div>

                                <div class="page-text-outer">
                                    <p class="page-p"><?php echo $item['page_item_text']; ?></p>
                                </div>

                                <div class="page-button-outer">
                                    <a href="<?php echo get_permalink( $item['page_item_button_link'][0] ); ?>" class="button-prorm button-prorm-vinous">
                                        <span class="btn-text-outer"><?php echo $item['page_item_button_label']; ?></span>
                                    </a>
                                </div>
                                
                            </div>

                            

                        </div>

                    <?php } ?>
                    <?php } ?>

                </div>
            </div>
        </section>
    
<?php } 

//http://sachinchoolur.github.io/lightslider/examples.html
function get_gallery_slider($items, $general_alt){
    
    
    ?>
        
        <div class="news-gallery-outer">
            
            <ul id="newsGallery" class="gallery list-unstyled cS-hidden">
                
                <?php if($items){ 
                                    
                    foreach ($items as $item) { ?>
                        
                        <li data-thumb="<?php echo $item['image_for_slider']['sizes']['square-thumbnail']; ?>" 
                            data-src="<?php echo $item['image_for_slider']['sizes']['news-photo']; ?>">
                            <a class="gallery-item-news" href="<?php echo $item['image_for_slider']['sizes']['large']; ?>" 
                                data-effect="mfp-3d-unfold"
                                data-group="1">
                                <img src="<?php echo $item['image_for_slider']['sizes']['news-photo']; ?>"
                                     class="news-slider-medium-img magnifier-cursor"
                                     alt="<?php echo $item['image_alt_for_slider'] ? $item['image_alt_for_slider'] : $general_alt ; ?>"
                                />
                            </a>
                        </li>
                        
                    <?php }

                } ?>
                        
            </ul>
            
        </div>    
   
    
    
 <?php    
}


function prorm_share_buttons($url){
    $qubes = '<div class="share_buttons ssb-share">';

    $qubes .= '<a class="xing sb-prorm btn-eff-4" title="' . __('Share with Xing') . '" target="_blank" href="https://www.xing.com/spi/shares/new?url=' . $url . '"><i class="fa fa-xing fa-1x" aria-hidden="true"></i></a>'; 
    $qubes .= '<a class="facebook sb-prorm btn-eff-4"  title="' . __('Share with Facebook') . '" target="_blank" href="http://www.facebook.com/sharer/sharer.php?u='.$url.'"><i class="fa fa-facebook fa-1x" aria-hidden="true"></i></a>';
    $qubes .= '<a class="gplus sb-prorm btn-eff-4" title="' . __('Google plus') . '" target="_blank" href="https://plus.google.com/share?url='.$url.'"><i class="fa fa-google-plus fa-1x" aria-hidden="true"></i></a>';
    $qubes .= '<a class="twitter sb-prorm btn-eff-4" title="' . __('Share with Twitter') . '" target="_blank" href="https://twitter.com/home?status='.$url.'"><i class="fa fa-twitter fa-1x " aria-hidden="true"></i></a>';
    $qubes .= '<a class="linkedin sb-prorm btn-eff-4" title="' . __('Share with Linkedin') . '" target="_blank" href="https://www.linkedin.com/shareArticle?mini=true&url='.$url.'"><i class="fa fa-linkedin fa-1x" aria-hidden="true"></i></a>';
 
    $qubes .= '</div>';
    
    echo $qubes; 
}

function get_prorm_recent_post($general_alt, $post_id, $img_placeholder){
    
    $args = array(
	'numberposts' => 2,
//	'category' => 5,
	'post_status' => 'publish',
        'exclude'  => $post_id,
    ); 

    $result = wp_get_recent_posts($args);
    
    ?>
        <div class="recent-block sticky" id="recent-block">
            <h3 class="recent-block-header"><?php _e('Recent posts', ProRMTheme::TEXTDOMAIN); ?></h3>
            <div class="recent-link-group">
            <?php
            foreach( $result as $p ){ 
                setup_postdata( $p );
                $img = '';
            ?>
                    <a href="<?php echo get_permalink($p['ID']) ?>"
                       class="recent-link tooltip">
                       <?php if($p['post_excerpt']) { ?>
                            <span class="tooltiptext right-orient"><?php echo $p['post_excerpt']; ?></span>
                        <?php } ?> 
                          
                        <?php  
                            if( has_post_thumbnail($p['ID']) ) {
                                $post_thumbnail_id = get_post_thumbnail_id($p['ID']);
                                $img =  wp_get_attachment_image_url( $post_thumbnail_id, 'thumbnail' );
                            }
                            
//                            $post_thumbnail_url = wp_get_attachment_url( $post_thumbnail_id );
                               
                            if(!$img){
                                
                                $attachment_image = get_children( array(
                                    'numberposts' => 1,
                                    'post_mime_type' => 'image',
                                    'post_parent' => $p['ID'],
                                    'post_type' => 'attachment'
                                ) );

                                // вынимаем первую картинку из массива
                                $attachment_image = array_shift($attachment_image);
                                $img = wp_get_attachment_url( $attachment_image->ID );                            
                            }
                            
                            if(!$img){
                                $img = $img_placeholder;
                            }
                        ?>  
                            
                        <div class="recent-img-outer">
                            <img src="<?php echo $img; ?>"
                                 class="recent-img"
                                 alt="<?php echo $general_alt ; ?>"
                            />
                        </div>
                            <div class="recent-title"><h5>
                                <?php // echo substr($p['post_title'], 0, 50) . '...' ; ?>
                                <?php echo $p['post_title'] ; ?>
                                
                                </h5></div>
                            
                    </a>   
            <?php 
            }
            ?> </div> <?php
            wp_reset_postdata(); ?>
            
            <?php get_subscribe_form('subscribe-news', ''); ?>
        </div>
        
    
<?php }

function get_subscribe_form($form_name, $bg){
   
    ?>

    <div class="subscribe-outer  <?php echo $bg; ?>">
       
            <h3 class="marsala-colour center">
                <?php 
                
                    echo do_shortcode('[form-header name=' .$form_name . '-' . pll_current_language() . ']');
                
                 ?>
            </h3>

            <div class="form-holder">
                 <?php echo do_shortcode('[form name=' .$form_name . ']'); ?>
            </div>
        
    </div>
    
    
<?php }




function get_prorm_latest_post($result, $label_button, $general_alt, $img_placeholder){
    
    
        
    ?>
        <div class="latest-news-block info-block" id="latest-news-block">
          
            <?php
            $i = 0;
            $language = pll_current_language();
            foreach( $result as $p ){ 
                $i++;
//                 setup_postdata( $p );
                $img = '';
            ?>
            <article class="article-item <?php echo 'ai-' . $i; ?>  row-12">
                
                 <?php  
                    if( has_post_thumbnail($p->ID) ) {  
                        $post_thumbnail_id = get_post_thumbnail_id($p->ID);
                        
                        $img_data = wp_get_attachment_image_src( $post_thumbnail_id, 'full' );
                        
                        $img = get_url_from_data_img($img_data[1], $img_data[2], $img_data[0]);
                        
//                        $img =  wp_get_attachment_image_url( $post_thumbnail_id, 'large' );
                       
                    }

//                    if(!$img){
//                        
//                        $attachment_image = get_children( array(
//                            'numberposts' => 1,
//                            'post_mime_type' => 'image',
//                            'post_parent' => $p->ID,
//                            'post_type' => 'attachment'
//                        ) );
//
//                        if($attachment_image){
//                            // вынимаем первую картинку из массива
//                            $attachment_image = array_shift($attachment_image);
//                            $img = wp_get_attachment_url( $attachment_image->ID );
//                           
//
//                        }
//
//                                       
//                    }
                    
                    if(!$img){
                        
                        $sibling_de = pll_get_post($p->ID, 'de');
                        
                        if($language == 'en' && $sibling_de){
                             $attachment_image = get_children( array(
                                'numberposts' => 1,
                                'post_mime_type' => 'image',
                                'post_parent' => pll_get_post($p->ID, 'de'),
                                'post_type' => 'attachment'
                            ) );

                            // вынимаем первую картинку из массива
                            $attachment_image = array_shift($attachment_image);
//                            $img = wp_get_attachment_url( $attachment_image->ID );    
               
                            $img_data = wp_get_attachment_image_src( $attachment_image->ID, 'full' );
                        
                            $img = get_url_from_data_img($img_data[1], $img_data[2], $img_data[0]);
                            
                        }
                                            
                    }

                    if(!$img){
                        $img = $img_placeholder;
                    }
                   
                ?>  

                <div class="article-img-outer article-img-bg" 
                    <?php if($img){ ?> style="background-image: url('<?php echo $img; ?>');" <?php } ?> >
                    <?php if(!$img){ ?>
                        <img src="<?php echo $img; ?>"
                             class="article-img"
                             alt="<?php echo $p->post_title ; ?>"
                        />
                    <?php  } ?>
                </div>
                
                <div class="article-text-outer <?php if($is_old_fashion){ echo 'old_fashion'; } ?>">
                    
                    
                    
                    <div class="article-header">
                        <h2 class="article-header-text bold-text marsala-colour">
                            <a href="<?php echo get_permalink($p->ID); ?>" class="article-header-link">
                                <?php echo $p->post_title ; ?>
                            </a>
                        </h2>
                    </div>
                    
                    <div class="article-date">
                        <?php show_pub_date($p->ID); ?>
                    </div>
                    
                    <div class="article-excerpt">
                        <?php if($p->post_excerpt) { ?>
                            <p class="article-excerpt-body"><?php echo $p->post_excerpt; ?></p>
                        <?php } ?> 
                    </div>
                    
                    <div class="article-button">
                         <a href="<?php echo get_permalink($p->ID); ?>" class="button-prorm button-prorm-vinous">
                             <span class="btn-text-outer"><?php echo $label_button ?></span>
                         </a>
                    </div>
                    
                </div>
                
            </article>
                    
            
          
            <?php 
            }
           
            wp_reset_postdata(); ?>
            
           
        </div>
        
    
<?php }


function get_subscribe_form_latest_news($form_name, $bg){
   
    ?>

    <div class="subscribe-outer  <?php echo $bg; ?>">
       

            <div class="form-holder">
                 <?php echo do_shortcode('[form name=' .$form_name . ']'); ?>
            </div>
        
    </div>
    
    
<?php }

function get_subscribe_footer($header, $text, $img, $alt, $general_alt, $form_name){
    
    ?>
    <div class='footer-subscribe'>

        <div class="sub-text-outer">
            <h3 class="subscribe-header">
                <?php echo $header; ?>
            </h3>
            <p>
               <?php echo $text; ?> 
            </p>
        </div>

        <div class="sub-img-outer">
            <img src="<?php echo $img; ?>"
                 class="sub-img"
                 alt="<?php echo $alt? $alt : $general_alt ; ?>"
            />
        </div>

        <div class="sub-form-outer">
                <?php get_subscribe_form_latest_news($form_name, ''); ?>
        </div>

   </div>
   
    
        
    <?php
        
    
    
}

function get_reference_words_block($customer_name, $person_name, $person_position, $description, $image_url, $image_alt, $general_alt, $section_bg){
    
    ?>
        <section class="reference-words-block info-block text-bigger-block <?php echo $section_bg; ?>">
            
            <div class="container">
                
                <div class="customer-img-outer">
                    
                    <div class="customer-img-container">
                        
                        <img src="<?php echo $image_url; ?>" alt="<?php echo $image_alt ? $image_alt : $general_alt; ?>" class="customer-img">
                        
                    </div>
                                        
                </div>
                
                <div class="text-outer">
                    
                    
                    <div class="customer-description">

                        <p><?php echo $description; ?></p>

                    </div>

                    <div class="customer-person">
                        <p>
                            <span class="person-name"><?php echo $person_name . ',<br>'; ?></span>
                            <span class="person-position"><?php echo $person_position; ?></span>
                        </p>

                    </div>
                </div>
                    
            </div>
              
        </section>
        
        
    
    <?php 

}


function get_reference_intro_block($args, $general_alt, $section_bg){
    extract($args);
    ?>
        <section class="reference-intro-block info-block text-bigger-block <?php echo $section_bg; ?>">
            
            <div class="container">
                
                <div class="reference-intro-outer row-12">
                    
                    <div class="customer-img-outer col-3">
                    
                        <div class="customer-img-container">

                            <img src="<?php echo $image_url; ?>" alt="<?php echo $image_alt ? $image_alt : $general_alt; ?>" class="customer-img">

                        </div>

                    </div>

                    <div class="text-outer col-9">


                        <div class="customer-description-outer">

                            <p class="customer-description"><?php echo $description; ?></p>

                        </div>

                    </div>
                    
                </div>
                
                
                    
            </div>
              
        </section>
        
        
    
    <?php 

}


function get_customer_profile_block( $section_header, $description, $section_bg){
    
    ?>
        <section class="customer-profile-block info-block text-bigger-block <?php echo $section_bg; ?>">
             <div class="container">
                
                <div class="title-outer">
                    
                    <div class="title-container">
                        <h3 class="white-style text-bigger"><?php echo $section_header; ?></h3>
                    </div>
                                        
                </div>
                
                <div class="text-outer">
                    
                    <p><?php echo $description; ?></p>
                    
                </div>
                 
            </div>
        </section>
        
        
    
    <?php 

}

function get_customer_info_block($args, $general_alt, $section_bg){
    
    ?>
    
        <section class="customer-info-block info-block <?php echo $section_bg; ?>">
            
            <div class="container">
                
                <div class="customer-info-outer row-12">
                
                <?php    
                $i = 0;    
                foreach ($args as $arg => $data) { 
                    $i++;
                    
                    ?>
                    
                    <div class="customer-info text-bigger-block col-2-4 <?php echo $data['class']; ?>">
                        
                        <div class="customer-info-img-outer">
                            
                            <div class="img-container">
                                <img src="<?php echo $data['img_url']; ?>" class="customer-info-img"
                                alt="<?php echo $data['header']; ?>">
                            </div>
                         
                        </div>
                        
                        <div class="apps-solution-text-outer">
                            
                            <h5 class="center text-bigger marsala-colour"><?php echo $data['header']; ?></h5>

                            <div class="value-outer <?php if($i < 5){ ?>center <?php } ?>">
                                <?php if(is_array($data['value'])){ ?>
                                    <ul>
                                    <?php foreach ($data['value'] as $v) { ?>

                                        <li>
<!--                                            <i class="fa <?php echo $data['icon']; ?>" aria-hidden="true"></i>-->
                                            <span class="value"><?php echo $v["item"]; ?></span>
                                        </li>

                                    <?php } ?>
                                    </ul>
                                <?php } else{ ?>
                                    
                                        <!--<i class="fa <?php echo $data['icon']; ?>" aria-hidden="true"></i>-->
                                        <span class="value"><?php echo $data['value']; ?></span>
                                    
                                <?php } ?>
                            </div>
                        </div>
                        
                    </div>
                    
                    
                <?php } ?>
                </div>
             
                </div>
           
        </section>
    
<?php } 




function get_case_study_block($args, $general_alt, $section_bg){
    extract($args);
    ?>
    
        <section class="customer-case-study-block info-block <?php echo $section_bg; ?>">
            
            <div class="container">
                
                <div class="customer-case-study-outer row-12">
                    
                    <div class="case-study-header-outer col-9 col-offset-left-3">
                        <h2 class="black-style-center center case-study-header text-bigger"><?php echo $header; ?></h2>
                    </div>
                    
                    <div class="customer-short-list col-3">
                        
                         <?php    
                            $i = 0;    
                            foreach ($items as $arg => $data) { 
                                $i++;

                                ?>

                                <div class="customer-info row-12 text-bigger-block <?php echo $data['class']; ?>">

                                   
                                    <div class="customer-info-default row-12">
                                        
                                        <div class="img-outer">
                                            <img src="<?php echo $data['img_url']; ?>" class="customer-info-img"
                                            alt="<?php echo $data['header']; ?>">
                                        </div>
                                        
                                        <div class="header-outer">
                                            <h5 class="customer-header bold-text text-bigger"><?php echo $data['header']; ?></h5>
                                        </div>
                                        
                                    </div>
                                    

                                    
                                    <div class="customer-data-outer row-12">

                                        

                                        <div class="value-outer">
                                            <?php if(is_array($data['value'])){ ?>
                                                <ul>
                                                <?php foreach ($data['value'] as $v) { ?>

                                                    <li>
                                                        <span class="value"><?php echo $v["item"]; ?></span>
                                                    </li>

                                                <?php } ?>
                                                </ul>
                                            <?php } else{ ?>

                                                    <span class="value"><?php echo $data['value']; ?></span>

                                            <?php } ?>
                                        </div>
                                    </div>

                                </div>


                            <?php } ?>
                        
                    </div>
                    
                    
                    <div class="customer-content col-9">
                        <?php echo $content; ?>
                    </div>
                
               
                </div>
             
                </div>
           
        </section>
    
<?php } 



function get_reviews_header_block( $section_header, $description, $general_alt, $section_bg){
    
    ?>
        <section class="reviews-header-block info-block text-bigger-block <?php echo $section_bg; ?>">
             <div class="container">
                 
                
                <div class="text-container row-12">
                
                    <div class="title-outer"><h1 class="black-style-center center text-bigger reviews-title"><?php echo $section_header; ?></h1></div>
                    
                    <div class="text-outer">
                    
                        <p><?php echo $description; ?></p>
                    
                    </div>
                    
                </div> 
            
                 
            </div>
        </section>
        
        
    
    <?php 

}


function get_references_block($result, $label, $img_placeholder, $general_alt, $section_bg ){
    
   
    ?>
        <section class="references-preview-block info-block text-bigger-block <?php echo $section_bg; ?>">
            <div class="container">
                
                <?php if($result){ ?>    
                
                <div class="reference-preview-container">
                <div class="row-12 reference-preview-outer box-shadow">
                    
                
                
                <?php foreach( $result as $p ){ ?>
                
                    <div class="reference-preview col-4">
                        <figure class="imghvr-zoom-in box-shadow">


                            <?php  

                            if( has_post_thumbnail($p["item"][0]) ) {  
                                $post_thumbnail_id = get_post_thumbnail_id($p["item"][0]);
                                $img =  wp_get_attachment_image_url( $post_thumbnail_id, 'news-photo' );
                            }else{
                                $img = $img_placeholder;
                            }


                            ?>

                            
                                <img class="reference-preview-img" src="<?php echo $img; ?>" alt="<?php echo $p["item_header"]; ?>">
                           
                            <figcaption>

                                <h3 class="reference-header center">
                                    <a href="<?php echo get_permalink($p["item"][0]) ; ?>" class="header-link">
                                        <?php echo $p["item_header"]; ?>
                                    </a>
                                </h3>
                                
                                <div class="reference-body">
                                    <p class="reference-text"><?php echo $p["item_description"]; ?></p>
                                </div>
                                
                                <div class="reference-bottom">
                                    <a href="<?php echo get_permalink($p["item"][0]) ; ?>" class="button-prorm button-prorm-vinous"><?php echo $label; ?></a>
                                </div>
                              
                              
                            </figcaption>

                            
                        </figure>


                    </div>
                
                <?php } ?>
                    
               
                    
                </div>
                
            </div>
                
                <?php } ?> 
            </div>
            
       </section>
          
          
           
           <?php  wp_reset_postdata(); ?>
            
           
     
        
    
<?php }


function get_our_partners_block_bu($our_partners, $section_header, $general_alt, $section_bg){
    ?>
    
        <section class="our-partners-block info-block text-bigger-block <?php echo $section_bg; ?>">
            <div class="container">
                
                <h1 class="center text-bigger "><?php echo $section_header; ?></h1>

                <?php  

                    if($our_partners)
                    {
                            ?><ul><?php

                            foreach($our_partners as $partner)
                            {
                                ?><li class="partner ">
                                    <span class="partner-inner rotate-photos">
                                        <img src="<?php echo $partner['partner_logo']['url']; ?>" 
                                            alt="<?php  echo $partner['partner_logo_alt'] ? $partner['partner_logo_alt'] : $general_alt ; ?>">
                                        <img src="<?php echo $partner['partner_logo_colour']['url']; ?>" 
                                             alt="<?php  echo $partner['partner_logo_alt'] ? $partner['partner_logo_alt'] : $general_alt ; ?>">
                                    </span>
                                    
                                </li><?php

                            }

                            ?></ul><?php
                    }

                ?>
            
            </div>
        </section>
    
<?php }


function get_our_partners_block($our_partners, $section_header, $general_alt, $section_bg ){
    
   
    ?>
        <section class="our-partners-preview-block info-block text-bigger-block <?php echo $section_bg; ?>">
            <div class="container">
                
                <?php if($our_partners){ ?>    
                
                <div class="reference-preview-container">
                <div class="row-12 reference-preview-outer box-shadow">
                    
                
                
                <?php foreach( $our_partners as $partner ){ ?>
                
                    <div class="reference-preview col-4">
                        <figure class="imghvr-zoom-in box-shadow partner-block rotate-photos">
                            
                                <img class="reference-preview-img partner-img" src="<?php echo $partner['partner_logo_colour']['url']; ?>" 
                                     alt="<?php  echo $partner['partner_logo_alt'] ? $partner['partner_logo_alt'] : $general_alt ; ?>">
                                
                                <img class="reference-preview-img partner-img" src="<?php echo $partner['partner_logo']['url']; ?>" 
                                     alt="<?php  echo $partner['partner_logo_alt'] ? $partner['partner_logo_alt'] : $general_alt ; ?>">
                           
                        </figure>


                    </div>
                
                <?php } ?>
                    
               
                    
                </div>
                
            </div>
                
                <?php } ?> 
            </div>
            
       </section>
          
          
    
<?php }


function get_our_partners_header_block( $section_header, $description, $general_alt, $section_bg){
    
    ?>
        <section class="our-partners-header-block info-block text-bigger-block <?php echo $section_bg; ?>">
             <div class="container">
                 
                
                <div class="text-container row-12">
                
                    <div class="title-outer"><h1 class="black-style-center center text-bigger reviews-title"><?php echo $section_header; ?></h1></div>
                    
                    <div class="text-outer">
                    
                        <p><?php echo $description; ?></p>
                    
                    </div>
                    
                </div> 
            
                 
            </div>
        </section>
        
        
    
    <?php 

}


function get_cta_block($section_header, $section_bg){
    ?>
    
        <section class="cta-block info-block text-bigger-block download-block <?php echo $section_bg; ?>">
            <div class="container">
                
                <h2 class="center text-bigger white-style"><?php echo $section_header; ?></h2>

            </div>
        </section>
    
<?php }



function get_our_team_header_block( $args, $general_alt, $section_bg){
    extract($args);
    ?>
        <section class="our-team-header-block info-block text-bigger-block <?php echo $section_bg; ?>">
             <div class="container">
                 
                <div class="title-outer">
                        <<?php echo $h ?> class="text-bigger center"><?php echo $section_header; ?></<?php echo $h ?>>
                </div> 
                 
                <div class="row-12 our-team-content">
                 
                    <?php if($img_left_pos){ ?>
                    <div class="our-team-img-outer">
                        <div class="our-team-img-inner">
                            <img src="<?php echo $img; ?>"
                             class="our-team-header-img"
                             alt="<?php echo $img_alt ? $img_alt : $general_alt; ?>"
                            />
                        </div>

                    </div>

                    <div class="text-container">

                        <div class="text-outer">

                            <p><?php echo $description; ?></p>

                        </div>

                    </div> 
                    
                    <?php } else { ?>
                        
                        <div class="text-container">

                            <div class="text-outer">

                                <p><?php echo $description; ?></p>

                            </div>

                        </div> 
                    
                        <div class="our-team-img-outer">
                            <div class="our-team-img-inner">
                                <img src="<?php echo $img; ?>"
                                 class="our-team-header-img"
                                 alt="<?php echo $img_alt ? $img_alt : $general_alt; ?>"
                                />
                            </div>

                        </div>
                    
                    <?php } ?>
                
                </div> 
                 
            </div>
        </section>
        
        
    
    <?php 

}


function get_team_slider_block($args, $general_alt, $bg){
    extract($args);
    
   
    ?>
    
    <section class="team-slider-block carousel-block <?php echo $bg; ?> info-block text-bigger-block">
            <div class="container">
                
             
                    <h2 class="black-style-center center text-bigger"><?php echo $section_header; ?></h2>

                    <div class="owl-carousel owl-theme team-slider-photo-outer" id="carouselTeam">

                        <?php 

                        foreach ($items as $item) {

                        ?>
                        <div class="bw bigger owl-img-outer " > 

                                <a class="team-item-big magnifier-cursor" href="<?php echo $item['photo_item']['url']; ?>" 
                                    data-effect="mfp-3d-unfold"
                                    data-group="2"
                                    title="<?php echo $item['photo_item_title'] ?>" 
                                    style="background-image: url(<?php echo $item['photo_item']['sizes']['preview-max']; ?>)">
                                  
                                </a>

                            </div>

                        <?php  } ?>
                    </div>
                
            </div>
            
        </section>
    
<?php }


function get_awards_slider_block($args, $general_alt, $bg){
    extract($args);
    
   
    ?>
    
    <section class="awards-slider-block carousel-block <?php echo $bg; ?> info-block text-bigger-block">
            <div class="container">
                
                <!--<div class="carouselAwards-outer">-->
                
                    <h2 class="white-style center text-bigger"><?php echo $section_header; ?></h2>

                    <div class="owl-carousel owl-theme carouselAwards-outer" id="carouselAwards">

                        <?php 

                        foreach ($items as $item) {
    //                        var_dump($item['photo_item']);
                        ?>

                            <div class="award-img"> 
                                <img class="owl-img" src="<?php echo $item['awards_photo_grey']; ?>" 
                                     alt="<?php echo $item['awards_photo_alt'] ? $item['awards_photo_alt'] : $general_alt; ?>">
                                <img class="owl-img-hover" src="<?php echo $item['awards_photo']; ?>" 
                                     alt="<?php echo $item['awards_photo_alt'] ? $item['awards_photo_alt'] : $general_alt; ?>">
                            </div>


                        <?php  } ?>
                    </div>
                <!--</div>-->
            </div>
            
        </section>
    
<?php }

 function get_prorm_banner($args, $general_alt){
     extract($args); 
     
     if($img['url']){
     ?>
        <div class="prorm-header-page-block" style="background-image: url('<?php echo $img['url']; ?>');">
           
            
<!--            <img src="<?php echo $img['url']; ?>" class="banner_img"
                 alt="<?php echo $img_alt ? $img_alt: $general_alt ; ?>">-->
                                    
<!--            <div class="banner_text_block">
                
                <div class="banner_header_outer">
                    <h1 class="white-style-left"><?php // echo $banner_header; ?></h1>
                </div>
                
                <div class="banner_text_outer">
                    <h2 class="white-style-left"><?php // echo $banner_text; ?></h2>
                </div>
                
                
            
            </div>-->
            
            <?php // var_dump($second_section_apps_1); ?>
        </div>
        
     <?php } ?>
     
 <?php }
 
 
function get_html_effect_blinking_stars(){
    ?>
        
    <div class="js-shine-star star-eff-shine star-1"></div>
    <div class="js-shine-star star-eff-shine star-2"></div>
    <div class="js-shine-star star-eff-shine star-3"></div>
    <div class="js-shine-star star-eff-shine star-4"></div>
    <div class="js-shine-star star-eff-shine star-5"></div>
    <div class="js-shine-star star-eff-shine star-6"></div>
<?php    
} 

function get_html_effect_flying_stars(){
    ?>
        
    <div id="js-space-area" class="space-area-fly">
        <div class="stars-fly"></div>
        <div class="stars-fly"></div>
        <div class="stars-fly"></div>
        <div class="stars-fly"></div>
        <div class="stars-fly"></div>
    </div>
<?php    
} 

function get_html_effect_meteor(){
    ?>
        
    <div id="meteors">
        <div class="meteor">
          <div class="meteor-head"></div>
          <div class="meteor-trail"></div>
        </div>

        <div class="meteor">
          <div class="meteor-head"></div>
          <div class="meteor-trail"></div>
        </div>

        <div class="meteor">
          <div class="meteor-head"></div>
          <div class="meteor-trail"></div>
        </div>

        <div class="meteor">
          <div class="smeteor-head"></div>
          <div class="meteor-trail"></div>
        </div>

        <div class="meteor">
          <div class="meteor-head"></div>
          <div class="meteor-trail"></div>
        </div>

        <div class="meteor">
          <div class="meteor-trail"></div>
        </div>

        <div class="meteor">
          <div class="meteor-trail"></div>
        </div>

        <div class="meteor">
          <div class="meteor-trail"></div>
        </div>

        <div class="meteor">
          <div class="meteor-trail"></div>
        </div>

        <div class="meteor">
          <div class="meteor-trail"></div>
        </div>
    </div>
<?php    
} 


function get_html_effect_flying_birds(){
    ?>
        
    <canvas id="canv" class="birds_area"></canvas>
    <div class="sky">
<!--        <div class="clouds">-->
            <div class="c1 one"></div>
            <div class="c1 two"></div>
            <div class="c1 three"></div>
            <div class="c1 four"></div>
            <div class="c2 one"></div>
            <div class="c2 two"></div>
            <div class="c2 three"></div>
            <div class="c2 four"></div>
        <!--</div>-->
   </div>
<?php    
} 



function get_html_effect_flying_clouds(){
    ?>
    <div class="flying-clouds">
        
    </div>
   
<?php    
} 


function get_html_effect_galaxy(){
    ?>
<!--    <div class="stars">
       
    </div>
    <div class="twinkling">

    </div>
    <div class="clouds"></div>-->
   
<?php    
} 


function get_html_lightning(){
    ?>
    
    <div class="lightning flashit"></div>
   
<?php    
} 
 
 
 
 
 function get_prorm_banner_page($args, $general_alt){
    extract($args); 
    
    if($banner_buttons){

        $banner_button_1 = $banner_buttons[0];
        $banner_button_2 = $banner_buttons[1];
   
    }
    
    if( $banner_button_1 ){
        //button-prorm button-prorm-red
        $button_1_arg = array(
           'action' => $banner_button_1['action'],
           'classes' => $banner_button_1['css_classes'],
           'form_name' => $banner_button_1['form_name']->post_name,
           'label' => $banner_button_1['banner_button_label'],
           'link' => $banner_button_1['banner_button_link']
        );
        
    }
    
    if( $banner_button_2 ){
        //button-prorm button-prorm-white-red
        $button_2_arg = array(
            'action' => $banner_button_2['action'],
            'classes' => $banner_button_2['css_classes'],
            'form_name' => $banner_button_2['form_name']->post_name,
            'label' => $banner_button_2['banner_button_label'],
            'link' => $banner_button_2['banner_button_link']
        );
        
    }
    
   
    ?>
        
         <div class="banner-block" id="js-banner-objects">
             
            <?php if($stars_effect == 'effect_blinking_stars'){ 
                    get_html_effect_blinking_stars();
            }
                
            if($stars_effect == 'effect_flying_stars'){ 
                    get_html_effect_flying_stars();
            } 
                
            if($stars_effect == 'effect_meteor'){ 
                    get_html_effect_meteor();
            } 
            
            if($stars_effect == 'effect_birds'){ 
                    get_html_effect_flying_birds();
            } 
            
            if($stars_effect == 'effect_flying_clouds'){ 
                   get_html_effect_flying_clouds();
            } 
            
            if($stars_effect == 'effect_lightning'){ 
                    get_html_lightning();
            } 
            ?>
             
             
             
             
             
             
             
            
            <?php if($banner_planet){ ?>
                <img src="<?php echo $banner_planet; ?>" class="banner-planet scrolling-object-down"
                     alt="<?php echo $general_alt ; ?>">
            <?php } ?>
            
            <?php if($banner_object){ ?>
                <img src="<?php echo $banner_object; ?>" class="banner-object scrolling-object-top"
                     alt="<?php echo $general_alt ; ?>">
            <?php } ?>
                
            <?php if($banner_clouds_top){ ?>    
                <img src="<?php echo $banner_clouds_top; ?>" class="banner-clouds-top scrolling-object-top"
                 alt="<?php echo $general_alt; ?>">
            <?php } ?>  
            
            <?php if($banner_clouds){ ?>
                <img src="<?php echo $banner_clouds; ?>" class="banner-clouds scrolling-object-opacity"
                     alt="<?php echo $general_alt ; ?>">
            <?php } ?>
            
            <div class="banner-text-block scrolling-object-down-quik">
                
                <?php if($banner_header){ ?>
                    <div class="banner-header-outer">
                        
                        <?php $tag = $banner_header_tag ? $banner_header_tag : 'h2'; ?>
                        
                        <<?php echo $tag; ?> class="banner-header"><?php echo $banner_header; ?></<?php echo $tag; ?>>
                    </div>
                <?php } ?>
                
                <?php if($banner_text){ ?>
                    <div class="banner-text-outer">
                        <h2 class="banner-text"><?php echo $banner_text; ?></h2>
                    </div>
                <?php } ?>
                
                <?php if($button_1_arg || $button_2_arg){ ?>
                    <div class="banner-button-outer">

                        <?php 
                        if($button_1_arg){
                            get_button_action($button_1_arg);
                        }

                        if($button_2_arg){
                            get_button_action($button_2_arg);
                        }    


                        ?>  

                    </div>
                <?php } ?>
            </div>
            
            
        </div>
        
     
<?php }
 
 
function get_prorm_banner_block($args, $general_alt){
    extract($args); 
    
    if($banner_buttons){

        $banner_button_1 = $banner_buttons[0];
        $banner_button_2 = $banner_buttons[1];
   
    }
    
    if( $banner_button_1 ){
        //button-prorm button-prorm-red
        $button_1_arg = array(
           'action' => $banner_button_1['action'],
           'classes' => $banner_button_1['css_classes'],
           'form_name' => $banner_button_1['form_name']->post_name,
           'label' => $banner_button_1['banner_button_label'],
           'link' => $banner_button_1['banner_button_link']
        );
        
    }
    
    if( $banner_button_2 ){
        //button-prorm button-prorm-white-red
        $button_2_arg = array(
            'action' => $banner_button_2['action'],
            'classes' => $banner_button_2['css_classes'],
            'form_name' => $banner_button_2['form_name']->post_name,
            'label' => $banner_button_2['banner_button_label'],
            'link' => $banner_button_2['banner_button_link']
        );
        
    }
    
   
    ?>
    
        <div class="banner-block plain-banner-block">
             
            <div class="container">
                
                <div class="banner-inner-block">
                
                    <div class="banner-text-block">
                        
                        <div class="banner-header-outer">
                            <?php if($banner_header){ ?>


                                    <?php $tag = $banner_header_tag ? $banner_header_tag : 'h2'; ?>

                                    <<?php echo $tag; ?> class="banner-header"><?php echo $banner_header; ?></<?php echo $tag; ?>>

                            <?php }else{ ?>
                                    
                                    <span class="empty-header"></span>
                                    
                            <?php } ?>
                        </div>

                        <?php if($banner_text){ ?>
                            <div class="banner-text-outer">
                                <p class="banner-text"><?php echo $banner_text; ?></p>
                            </div>
                        <?php } ?>
                        
                        <div class="banner-button-outer">
                        <?php if($button_1_arg || $button_2_arg){ ?>
                           

                                <?php 
                                if($button_1_arg){
                                    get_button_action($button_1_arg);
                                }

                                if($button_2_arg){
                                    get_button_action($button_2_arg);
                                }    


                                ?>  

                            
                        <?php } ?>
                        </div>
                    </div>

                    <div class="banner-subject-block <?php if(!$button_1_arg || !$button_2_arg){ echo 'empty-buttons'; }?>">

                        <?php if($banner_object){ ?>
                            <img src="<?php echo $banner_object; ?>" class="banner-subject <?php if(!$button_1_arg || !$button_2_arg){ echo 'empty-buttons'; }?>  "
                                 alt="<?php echo $general_alt ; ?>">
                        <?php } ?>

                    </div>     
                </div>
            </div>
        </div>    
     
<?php }


function get_reference_banner_block($args, $general_alt){
    extract($args); 
    
   
    ?>
    
        <div class="banner-block plain-banner-block reference-block">
             
            <div class="container">
                
                <div class="banner-inner-block">
                
                    <div class="banner-text-block">
                        
                        <div class="banner-header-outer">
                          
                            <span class="empty-header"></span>
                            
                        </div>

                        <?php if($banner_text){ ?>
                            <div class="banner-text-outer">
                                <p class="banner-text"><?php echo $banner_text; ?></p>
                            </div>
                        <?php } ?>
                        
                        <div class="banner-button-outer">
                        
                        </div>
                    </div>

                    <div class="banner-subject-block empty-buttons">

                        
                        
                            <div class="banner-subject empty-buttons">
                                
                                <?php if($person_photo){ ?>
                                
                                <div class="person-photo-outer">
                                    <img src="<?php echo $person_photo; ?>" class="person-photo"
                                     alt="<?php echo $person_name ; ?>">
                                </div>
                                    
                                <?php } ?>
                                
                                <p class="person-data">
                                    
                                    <span class="person-name"><?php echo $person_name; ?>, </span>
                                    <span class="person-position"><?php echo $person_position; ?></span>
                                </p>
                                
                               
                                
                            </div>
                           
                        

                    </div>     
                </div>
            </div>
        </div>    
     
<?php }




function get_meet_us_block($args, $general_alt, $section_bg){
    extract($args);
    ?>
    
        <section class="meet-us-header-block simple-block info-block text-bigger-block <?php echo $section_bg; ?>">
            <div class="container">
                <h1 class="black-style-center center text-bigger"><?php echo $section_header; ?></h1>

                <div class="form-description">
                    <div class="row-12">
                        <p><?php echo $section_text; ?></p>
                    </div>
                </div>
                
            </div>
            
        </section>
    
<?php } 


function get_clients_page_block($args, $general_alt, $bg){
    extract($args);
    
   

    ?>
    
    <section class="carousel-block clients-block <?php echo $bg; ?> info-block text-bigger-block">
            <div class="container">
                <h2 class="black-style-center center text-bigger"><?php echo $section_header; ?></h2>

                <div class="owl-carousel owl-theme" id="carousel_clients">

                    <?php if($items){?>
                    
                    <?php foreach ($items as $item) { ?>
                         
                        <div class="customer-words-item center">
                        
                            <div class="item customer-item">

                                <div class="customer-description">
                                    <p class="small"><?php echo $item['quote_text']; ?></p>

                                </div>

                                <div class="customer-person-outer">
                                    <div class="customer-img-outer">
                                        <img src="<?php echo $item['quote_image']; ?>" class="customer-img"
                                             alt="<?php echo $item['quote_image_alt'] ? $item['quote_image_alt'] : $general_alt; ?>" >
                                    </div>
                                    <div class="customer-person">
                                        <p>
                                            <span class="person-name"><?php echo $item['quote_person'] . '<br>'; ?></span>
                                            <span class="person-position"><?php echo $item['quote_person_position']; ?></span>
                                        </p>

                                    </div>
                                </div>

                            </div>
                        </div>
                           
                    <?php }?>
                    
                    <?php } ?>

                </div>
            </div>
            
        </section>
    
<?php }



function get_homepage_slider_block($args, $general_alt, $bg){
    extract($args);
    
   

    ?>
    
    <section class="carousel-block homepage-slider-block <?php echo $bg; ?> info-block text-bigger-block">
            <div class="container">
                
                <div class="homepage-slider-outer">
                
                    <div class="owl-carousel owl-theme" id="homepage_slider">

                        <?php if($items){?>

                        <?php foreach ($items as $item) { ?>


                                    <div class="item homepage-item">


                                            <div class="banner-inner-block">

                                                <div class="banner-text-block">

                                                    <div class="banner-header-outer">

                                                        <h2 class="banner-header"><?php echo $item['slider_item_header']; ?></h2>

                                                    </div>

                                                    <?php if( $item['slider_item_header']){ ?>
                                                        <div class="banner-text-outer">
                                                            <p class="banner-text"><?php echo $item['slider_item_text']; ?></p>
                                                        </div>
                                                    <?php } ?>

                                                    <div class="banner-button-outer">

                                                        <a href="<?php echo $item['slider_item_link']; ?>" class="button-prorm <?php echo $css_class; ?>">
                                                            <?php echo $label; ?>
                                                        </a>

                                                    </div>
                                                </div>

                                                <div class="banner-subject-block">

                                                    <?php if($item['slider_item_image']){ ?>
                                                        <img src="<?php echo $item['slider_item_image']; ?>" class="banner-subject"
                                                             alt="<?php echo $item['slider_item_image_alt'] ? $item['slider_item_image_alt'] : $general_alt; ?>">
                                                    <?php } ?>

                                                </div>

                                            </div>

                                    </div>    


                        <?php }?>

                        <?php } ?>

                    </div>
                </div>
            </div>
            
        </section>
    
<?php }


function get_experts_block($args, $img_placeholder, $general_alt, $section_bg ){
    extract($args);
    
   
    ?>
        <section class="experts-block info-block text-bigger-block <?php echo $section_bg; ?>">
            <div class="container">
                
                <?php if($items){ ?>    
                
                <div class="experts-preview-container">
                    
                    <h2 class="black-style-center center text-bigger experts-block-title"><?php echo $section_header; ?></h2>     

                    <p class="experts-block-text center"><?php echo $section_text; ?></p>
                    
                    <div class="experts-container">

                    <div class="row-12 experts-preview-outer">
                    
                
                
                <?php foreach( $items as $item ){ ?>
                
                    <div class="experts-preview col-2">
                        <figure class="imghvr-zoom-in ">

                                <img class="experts-preview-img" src="<?php echo $item["expert_photo"] ? $item["expert_photo"] : $img_placeholder; ?>" alt="<?php echo $item["expert_name"]; ?>">
                           
                            <figcaption>

                                <div class="experts-body">
                                    
                                    <h3 class="experts-header">
                                        <?php echo $item["expert_name"]; ?>
                                    </h3>
                                    
                                    <p class="experts-text"><?php echo '&#8222;' . $item["expert_info"] . '&#8221;' ; ?></p>
                                </div>
                               
                            </figcaption>

                            
                        </figure>

                        
                    </div>
                
                <?php } ?>
                    
               </div>
                    
                </div>
                
            </div>
                
                <?php } ?> 
            </div>
            
       </section>
          
    
<?php }



function get_awards_block($args, $general_alt, $section_bg ){
    extract($args);
   
    ?>
        <section class="awards-block our-partners-preview-block info-block text-bigger-block <?php echo $section_bg; ?>">
            <div class="container">
                
                <?php if($items){ ?>    
                
                <h2 class="black-style-center center text-bigger experts-block-title"><?php echo $section_header; ?></h2> 
                        
                <div class="reference-preview-container">
                    
                <div class="row-12 reference-preview-outer box-shadow">
                    
                
                
                <?php foreach( $items as $item ){ ?>
                
                    <div class="reference-preview col-4">
                        <figure class="imghvr-zoom-in box-shadow partner-block ">
                            
                                <img class="reference-preview-img partner-img" src="<?php echo $item['awards_photo']; ?>" 
                                     alt="<?php echo $item['awards_alt'] ? $item['awards_alt'] : $general_alt ; ?>">
                                
                        </figure>


                    </div>
                
                <?php } ?>
                    
               
                    
                </div>
                
            </div>
                
                <?php } ?> 
            </div>
            
       </section>
          
          
    
<?php }











function get_wistia_video($video_id){
    ?>
    <div class="videos-item-outer">
        <div class="wistia_responsive_padding z-index-up" style="padding:56.25% 0 0 0;position:relative;">
                            <div class="wistia_responsive_wrapper" style="height:100%;left:0;position:absolute;top:0;width:100%;">
                                <iframe src="//fast.wistia.net/embed/iframe/<?php echo $video_id; ?>?seo=false&videoFoam=true" allowtransparency="true" frameborder="0" scrolling="no" class="wistia_embed" name="wistia_embed" allowfullscreen mozallowfullscreen webkitallowfullscreen oallowfullscreen msallowfullscreen width="100%" height="100%"></iframe>
                            </div>
        </div>
    </div>
    
<?php }






function get_cube_slider($args){
    extract($args);
    wp_enqueue_script('jquery.refineslide-js', get_template_directory_uri() . '/js/jquery.refineslide.js"', array('jquery'), false, true);
    ?>
    
    <section class="clients-cube info-block"> 
        
         <ul class="demo">

<li class="group"> 
<a href="#"> <img src="<?php echo $image_path; ?>background_customer.jpg" alt="" /> </a>
<div class="rs-caption rs-bottom">
<h3>Caption Area 1</h3>
<p>Description 1</p>
</div>
</li>

<li class="group"> 
<a href="#"> <img src="<?php echo $image_path; ?>background_customer.jpg" alt="" /> </a>
<div class="rs-caption rs-bottom">
<h3>Caption Area 2</h3>
<p>Description 2</p>
</div>
</li>

<li class="group"> 
<a href="#"> <img src="<?php echo $image_path; ?>background_customer.jpg" alt="" /> </a>
<div class="rs-caption rs-bottom">
<h3>Caption Area 3</h3>
<p>Description 3</p>
</div>
</li>

<li class="group"> 
<a href="#"> <img src="<?php echo $image_path; ?>background_customer.jpg" alt="" /> </a>
<div class="rs-caption rs-bottom">
<h3>Caption Area 3</h3>
<p>Description 3</p>
</div>
</li>

<li class="group"> 
<a href="#"> <img src="<?php echo $image_path; ?>background_customer.jpg" alt="" /> </a>
<div class="rs-caption rs-bottom">
<h3>Caption Area 3</h3>
<p>Description 3</p>
</div>
</li>

</ul>
       
    </section>
    
<?php }



