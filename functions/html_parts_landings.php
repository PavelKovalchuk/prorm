<?php

function get_land_soft_solutions_block($args, $general_alt, $section_bg){
    extract($args);
    
    ?>
    
        <section class="appsource-block info-block text-bigger-block <?php echo $section_bg; ?>" id="block_appsource">
            <div class="container">
                <h2 class="black-style-center center text-bigger"><?php echo $section_header; ?></h2>

                <p class="center"><?php echo $section_text; ?></p>

                <div class="app-outer row-12">

                    <?php if($section_apps){ 
                        foreach ($section_apps as $app) { ?>

                        <div class="app col-3"> 
                            <a  href="<?php echo $app['app_link']; ?>" target="_blank" class="card card-2 card-link">
                                
                                <div class="app-img-outer <?php echo $app['app_color']; ?>">
                                    <img src="<?php echo $app['app_image']; ?>" class="app-img"
                                        alt="<?php echo $app['app_image_alt'] ? $app['app_image_alt'] : $general_alt ; ?>">


                                </div>

                                <div class="app-text-outer">

                                    
                                    <h5 class="center app-text"><?php echo $app['app_name']; ?></h5>
                                    
                                    <?php if($app['app_author']){ ?>
                                        
                                        <p class="center app-author">
                                            <?php echo $app['app_author']; ?>
                                        </p>
                                    
                                    <?php } ?>

                                    <p class="center app-des"><?php echo $app['app_description']; ?></p>
                                    
                                    
                                    


                                </div>
                                
                                <div class="app-bottom">
                                    
                                 <?php if($app['app_award']){ ?>

                                        <div class="app-award">
                                            
                                            <p class="award-text"><?php echo $app['app_award']; ?></p>
                                        </div>

                                    <?php } ?>

                                    
                                    <div class="app-link-outer">
                                                                           
                                        <div class="app-link">
                                            <?php echo $app['app_link_label']; ?>
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


function get_land_expectations_block($args, $general_alt, $section_bg){
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
                                <img src="<?php echo $exp['expectation_image']; ?>" class="expectation-img"
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

function get_land_team_block($args, $general_alt, $section_bg){
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

                            <h5 class="center person-name"><?php echo $person['person_name']; ?></h5>

                            <p class="center"><?php echo $person['person_position']; ?></p>


                        </div>

                <?php } ?>
                <?php } ?>

                </div>
            </div>
        </section>
    
<?php } 


function get_land_numbers_block($args, $section_bg){
    extract($args);
   
    ?>
    
    <section data-status="ready" class="about-us-numbers-block info-block text-bigger-block <?php echo $section_bg; ?>" id="block_weinnumbers"> 
        <div class="container">
            <h2 class="black-style-center center text-bigger"><?php echo $section_header; ?></h2>

            <div class="about-us-numbers-outer row-12">

            <?php if ( is_active_sidebar( 'about-us-numbers-sidebar' ) ) : 

                dynamic_sidebar( 'about-us-numbers-sidebar' ); 

            endif; ?>

            </div>
        </div>
    </section>
    
<?php }


function get_land_clients_block($args){
    extract($args);
    
    

    ?>
    
    <section class="carousel-block clients-block <?php echo $bg; ?> info-block text-bigger-block">
            <div class="container">
                <h2 class="white-style center text-bigger"><?php echo $section_header; ?></h2>

                <div class="owl-carousel owl-theme" id="carousel_clients">

                    <?php if ( is_active_sidebar( 'customers-words-sidebar' ) ) : 

                        dynamic_sidebar( 'customers-words-sidebar' ); 

                    endif; ?>

                </div>
            </div>
            
        </section>
    
<?php }


function get_land_videos_block($args){
    extract($args);
   
    ?>
    
    <section class="carousel-block videos-block info-block text-bigger-block" id="block_video">
        <div class="container">    
            <h2 class="white-style center text-bigger"><?php echo $section_header; ?></h2>
            
            <div class="video-carousel-outer">
                <div class="owl-carousel owl-theme" id="video-carousel">
                
                <?php if ( is_active_sidebar( 'videos-works-sidebar' ) ) : 

                    dynamic_sidebar( 'videos-works-sidebar' ); 

                endif; ?>
                
                </div>
            </div>
            
        </div> 
            
    </section>
    
<?php }

function get_land_banner($args, $general_alt){
     extract($args); 
     ?>
        
                          
        <div class="header-page-block">
           
            <img src="<?php echo $banner_planet ?>" class="banner_planet scrolling-object-down"
                 alt="<?php echo $general_alt ; ?>">
            
            <img src="<?php echo $banner_object ?>" class="banner_object scrolling-object-top"
                 alt="<?php echo $general_alt ; ?>">
            
            <div class="banner_text_block">
                
                <div class="banner_header_outer">
                    <h1 class="white-style-left"><?php echo $banner_header; ?></h1>
                </div>
                
                <div class="banner_text_outer">
                    <h2 class="white-style-left"><?php echo $banner_text; ?></h2>
                </div>
                
                
            </div>
            
            
        </div>    
          
     
 <?php }
 
 
 function get_land_online_block($args, $section_bg){
    extract($args);
    
    ?>
    
        <section class="online-block info-block text-bigger-block <?php echo $section_bg; ?>" id="block_weareonline">
            <div class="container">
                <h2 class="black-style-center center text-bigger"><?php echo $section_header; ?></h2>

                <div class="online-block-outer row-12">

                    <?php if($items){ 
                        foreach ($items as $item) { ?>


                        <div class="online-item col-4">
                            
                            <div class="online-img-outer overly-prorm-20">
                               
                                    <img src="<?php echo $item['item_image']; ?>" alt="<?php echo $item['item_title'];  ?>" class="online-img "/>
                                    <div class="ovrly"></div>
                                    <div class="links">
                                        <a href="<?php echo $item['item_link']; ?>" target="_blank" class="online-link-small"><?php echo $item['item_link_label']; ?></a>
                                    </div>
                                
                                
                            </div>
                            
                            <div class="online-item-title-outer">
                                <h3 class="marsala-colour center online-item-title"><?php echo $item['item_title']; ?></h3>
                            </div>
                        </div>
                        
                        

                    <?php } ?>
                    <?php } ?>

                </div>
            </div>
        </section>
    
<?php } 


function get_land_events_block($args, $general_alt, $section_bg){
    extract($args);
    
    ?>
    
    <section class="carousel-block events-slider-block info-block text-bigger-block <?php echo $section_bg; ?>" id="block_events">
        <div class="container">    
            <h2 class="center text-bigger"><?php echo $section_header; ?></h2>
            
            <div class="events-carousel-outer">
                <div class="owl-carousel owl-theme" id="event-carousel">
                    
                     <?php if($items){ 
                        foreach ($items as $item) { ?>
                    
                        <?php if($item['item_image']){ ?>

                        <div class="item event-item overly-prorm-6" style="background-image: url(<?php echo $item['item_image']; ?>)">
                            <!--<img src="<?php echo $item['item_image']; ?>" alt="<?php echo $item['item_image_alt'] ? $item['item_image_alt'] : $general_alt ; ?>"--> 
                                 <!--class="event-item-img"/>-->
                            <div class="ovrlyL"></div>
                            <div class="ovrlyR"></div>
                            <div class="links">
                                <a href="<?php echo $item['item_link']; ?>" target="_blank" class="link-small"><?php echo $item['item_link_label']; ?></a>
                            </div>
                            <p class="event-description"><?php echo $item['item_title']; ?></p>
                        </div> 

                    <?php } ?>
                     <?php } ?>
                    <?php } ?>
                    
                
                </div>
            </div>
            
        </div> 
            
    </section>
    
<?php }



function get_land_team_info_block($args, $general_alt, $section_bg){
    
    extract($args);
        
    ?>
        <section class="team-info-block info-block text-bigger-block <?php echo $section_bg; ?>" id="block_proMX">
             <div class="container">
                    
                                       
                    <div class="team-info-outer row-12">
                        
                        <div class="block-img col-4">
                            
                            <?php if($items){ 
                                foreach ($items as $item) { ?>
                            
                            <div class="team-info-img-outer">
                                 <img src="<?php echo $item['item_image']; ?>" 
                                      alt="<?php echo $item['item_image_alt'] ? $item['item_image_alt'] : $general_alt ; ?>" 
                                      class="team-info-img"/>
                            </div>
                            
                            <?php } ?>
                            <?php } ?>
                            
                        </div>
                        
                        <div class="team-info-text-outer col-8">
                            <p class="team-info-text"><?php echo $section_text; ?></p>
                        </div>
                       
                    </div>
                
                 
            </div>
        </section>
        
        
    
    <?php 

}


function get_land_customer_story_block($args, $general_alt, $section_bg){
    
    extract($args);
   
    
    ?>
        <section class="customer-story-block info-block text-bigger-block <?php echo $section_bg; ?>" id="block_customerstory">
             <div class="container">
                    <h2 class="center text-bigger"><?php echo $section_header; ?></h2>                   
                    <div class="cs-outer row-12">
                        
                       
                            
                            <?php if($items){ 
                                foreach ($items as $item) { ?>
                        
                        
                            <div class="cs-item col-6">
                                
                                <div class="cs-header-img-outer">
                                    <img src="<?php echo $item['label_img']; ?>" 
                                      alt="<?php echo $item['label_img_alt'] ? $item['label_img_alt'] : $general_alt ; ?>" 
                                      class="cs-header-img"/>
                                </div>
                                
                                <div class="cs-text-outer">
                                    <p class="cs-text"><?php echo $item['story']; ?></p>
                                </div>
                                
                                <div class="cs-media-outer row-12">
                                    
                                    <div class="left-p media-object col-8">
                                        
                                        <div class="media-object-inner">
                                            
                                            <?php if($item['what_to_use'] == 'video'){ ?>
                                                <a data-effect="mfp-zoom-in" 
                                                   class="item icon-play popup-youtube media-object"
                                                   target="_blank"
                                                   href="http://fast.wistia.net/embed/iframe/<?php echo $item['customer_video_id']; ?>?seo=false" 
                                                   target="_blank">

                                            <?php } ?>

                                            <img src="<?php echo $item['customer_image']; ?>" 
                                                    alt="<?php echo $item['customer_image_alt'] ? $item['customer_image_alt'] : $general_alt ; ?>" 
                                                    class="cs-header-img"/>

                                            <?php if($item['what_to_use'] == 'video'){ ?>
                                                </a>
                                            <?php } ?>
                                            
                                        </div>
                                        
                                        
                                        
                                    </div>
                                    
                                    <div class="right-p media-object pdf-link-outer col-4">
                                        
                                        <a href="<?php echo $item['pdf_link']; ?>" target="_blank">
                                            
                                            <img src="<?php echo $item['pdf_image']; ?>" 
                                                alt="<?php echo $general_alt ; ?>" 
                                                class="pdf-img"/>
                                            
                                        </a>
                                        
                                        
                                    </div>
                                    
                                </div>
                                
                                
                                <div class="row-12 person-outer">
                                    
                                    <div class="person-img-outer col-3">
                                        <img src="<?php echo $item['person_img']; ?>" 
                                                alt="<?php echo $item['person_name'] ? $item['person_name'] : $general_alt ; ?>" 
                                                class="cs-header-img"/>
                                    </div>
                                    
                                    <div class="person-info-outer col-9">
                                        
                                        <div class="person-quote-outer">
                                            <p><?php echo $item['quote']; ?></p>
                                        </div>
                                        
                                        <div class="person-name-outer">
                                            <h5 class="marsala-colour person-name"><?php echo $item['person_name']; ?>,</h5>
                                        </div>
                                        
                                        <div class="person-position-outer">
                                            <p><?php echo $item['person_position']; ?></p>
                                        </div>
                                        
                                        
                                    </div>
                                    
                                </div>
                                
                                
                                 
                                 
                            </div>
                            
                        
                        
                            <?php } ?>
                            <?php } ?>
                            
                       
                       
                    </div>
                
                 
            </div>
        </section>
        
        
    
    <?php 

}


function get_land_microsoft_block($args, $section_bg){
    extract($args);
    
    ?>
    
        <section class="microsoft-block info-block text-bigger-block <?php echo $section_bg; ?>" id="block_quotes">
            <div class="container">
                <h2 class="black-style-center center text-bigger"><?php echo $section_header; ?></h2>

                <div class="microsoft-block-outer clearboth row-12">

                    <?php if($items){ 
                        foreach ($items as $item) { ?>


                        <div class="m-item col-6">
                            
                            <div class="m-text-ouetr">
                                <p><?php echo $item['quote_text']; ?></p>
                                
                                
                                <div class="person-outer row-12">
                                
                                    <div class="m-img-outer  col-3">

                                        <img src="<?php echo $item['quote_image']; ?>" alt="<?php echo $item['quote_person']; ?>" class="online-img "/>

                                    </div>

                                    <div class="m-data-outer col-9">

                                        <div class="m-data-inner">

                                            <div class="person-name-outer">
                                                <h5 class="person-name"><?php echo $item['quote_person']; ?>,</h5>
                                            </div>

                                            <div class="person-position-outer ">
                                                <p><?php echo $item['quote_position']; ?></p>
                                            </div>

                                        </div>

                                    </div>


                                </div>
                                
                                
                            </div>
                            
                            
                            
                            

                        </div>
                    
                    <?php } ?>
                    <?php } ?>

                </div>
            </div>
        </section>
    
<?php } 


function get_social_block($args, $section_bg){
    extract($args);
   
    ?>
    
        <section class="social-block info-block text-bigger-block <?php echo $section_bg; ?>" id="block_sociallinks">
            <div class="container">
                <h2 class="black-style-center center text-bigger"><?php echo $section_header; ?></h2>

                <div class="social-block-outer row-12">
                    
                     <?php if($items){ 
                        foreach ($items as $item) { ?>


                        <div class="s-item col-6">
                            
                            <div class="s-img-outer ">

                                <img src="<?php echo $item['site_image']; ?>" alt="<?php echo $item['site_image_alt']; ?>" class="s-img"/>
                                
                                <?php if($item['site_social_item']){ 
                                    foreach ($item['site_social_item'] as $link) { ?>
                                
                                    <?php if($link['if_2_lang']){ ?>
                                        
                                        <div class="l-link double">
                                                                              
                                    <?php } else{ ?>
                                   
                                    <a href="<?php echo $link['site_social_link'];?>" 
                                       class="l-link" 
                                       target="_blank">
                                        
                                    <?php } ?>
                                        
                                        <img src="<?php echo $link['site_social_img']; ?>" alt="<?php echo $item['site_image_alt']; ?>" class="l-img"/>
                                        
                                        <?php if($link['if_2_lang']){ ?>
                                          
                                            <span class="lang-img lang-eng">
                                                <a href="<?php echo $link['english_link'];?>" 
                                                    class="ld-link" 
                                                    target="_blank">
                                                </a>
                                            </span>
                                            <span class="lang-img lang-germ">
                                                 <a href="<?php echo $link['german_link'];?>" 
                                                    class="ld-link" 
                                                    target="_blank">
                                                </a>

                                            </span>
                                           
                                        <?php } ?>
                                                
                                     <?php if($link['if_2_lang']){ ?>
                                        
                                        </div>
                                                                              
                                    <?php } else{ ?>    
                                        </a>
                                    <?php } ?>

                                             <?php } ?>
                                <?php } ?>

                            </div>

                        </div>
                            
                            
                            
                            
                            <?php } ?>
                    <?php } ?>

                </div>
            </div>
        </section>
    
<?php } 


function get_land_our_partners_block( $args, $general_alt, $section_bg){
    extract($args);
     
    ?>
        <section class="support-header-block land-our-partners-block info-block text-bigger-block <?php echo $section_bg; ?>" id="block_partners">
             <div class="container">
                 
                <div class="title-outer">
                    <h2 class="text-bigger center"><?php echo $section_header; ?></h2>
                </div> 
                 
                <div class="row-12 lo-row lo-row-1">
                 
                   
                    <div class="lo-left col-4">
                        <div class="lo-img-outer">
                            <img src="<?php echo $img; ?>"
                             class="lo-img"
                             alt="<?php echo $img_alt ? $img_alt : $general_alt; ?>"
                            />
                        </div>

                    </div>

                    <div class="lo-right col-8">

                        <div class="text-outer">

                            <p><?php echo $description; ?></p>

                        </div>

                    </div> 
                    
                    
                
                </div> 
                 
                 
                <div class="row-12 lo-row lo-row-2">
                    
                    <div class="lo-left-2 lok carousel-block col-4">
                        <div class="lo-header-outer">
                            <h3 class="marsala-colour center "><?php echo $slider_header; ?></h3>
                        </div>
                        <div class="events-carousel-outer">
                            <div class="owl-carousel owl-theme" id="op-carousel">

                                 <?php if($items){ 
                                    foreach ($items as $item) { ?>

                                    <?php if($item['partners_image']){ ?>

                                    <div class="item event-item" style="background-image: url(<?php echo $item['partners_image']; ?>)">
                                        
                                    </div> 

                                <?php } ?>
                                 <?php } ?>
                                <?php } ?>


                            </div>
                        </div>
                        
                    </div>
                    
                    <div class="lo-right-2 lok col-8">
                        <div class="lo-header-outer">
                            <h3 class="marsala-colour center "><?php echo $video_header; ?></h3>
                        </div>
                        <div class="row-12 lol-row">
                            
                            <div class="col-6 l-v">
                                <iframe width="100%" height="100%" src="https://www.youtube.com/embed/BIjIsi3tHqA" frameborder="0" allowfullscreen></iframe>
                            </div>
                            
                            <div class="col-6 l-v">
                                <iframe width="100%" height="100%" src="https://www.youtube.com/embed/lfvg8lsAG4M" frameborder="0" allowfullscreen></iframe>
                            </div>
                            
                        </div>
                        
                        
                        
                    </div>
                    
                    
                     
                </div> 
                 
                 
                 
                
                 
            </div>
        </section>
        
        
    
    <?php 

}


function get_land_feedback_block($args, $general_alt, $section_bg){
    
    extract($args);
        
    ?>
        <section class="team-info-block feedback-block info-block text-bigger-block <?php echo $section_bg; ?>" id="block_feedback">
             <div class="container">
                 
                    <div class="title-outer">
                        <h2 class="text-bigger center"><?php echo $section_header; ?></h2>
                    </div> 
                    
                      <?php if($items){ 
                                foreach ($items as $item) { ?>                   
                                    <div class="team-info-outer row-12">

                                        <div class="block-img col-6">

                                            <div class="team-info-img-outer">
                                                 <img src="<?php echo $item['feedback_image']; ?>" 
                                                      alt="<?php echo $general_alt ; ?>" 
                                                      class="team-info-img"/>
                                            </div>

                                        </div>

                                        <div class="team-info-text-outer col-6">
                                            <p class="team-info-text"><?php echo $item['feedback_text']; ?></p>
                                        </div>

                                    </div>
                 
                 <?php } ?>
                            <?php } ?>
                
                 
            </div>
        </section>
        
        
    
    <?php 

}


function get_land_hololens_block($args, $general_alt, $section_bg){
    extract($args);
    ?>

        <section class="hololens-block info-block text-bigger-block <?php echo $section_bg; ?>">
            <div class="container">
                <h2 class="black-style-center center text-bigger"><?php echo $section_header; ?></h2>

                <div class="hololens-outer row-12">

                     
                    <div class="hololens-img-outer center col-6 ">
                        <img src="<?php echo $img; ?>" class="hololens-img"
                            alt="<?php echo $img_alt ? $img_alt : $general_alt ; ?>">
                    </div>
                    
                    <div class="hololens-text-outer col-6 ">
                        <p class="hololens-text">
                            <?php echo $description; ?>
                        </p>
                        
                        <div class="hololens-link-outer row-12">
                            
                            <div class="hololens-logo-outer center col-4 ">
                                <img src="<?php echo $logo; ?>" class="hololens-img"
                                    alt="<?php echo $logo_alt ? $logo_alt : $general_alt ; ?>">
                            </div>
                            
                            <div class="hololens-link-outer center col-8 ">
                                <a href="<?php echo $link_hololens_url; ?>" class="hololens-link marsala-colour"><?php echo $link_hololens_title; ?></a>
                            </div>
                            
                        </div>
                    </div>
                    

                </div>
            </div>
        </section>
    
<?php } 