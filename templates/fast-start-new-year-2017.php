<?php
/*
 * Template Name: Fast Start New Year 2017 page
 */

if (!isset($_SESSION)) {
    session_start();
}

Tpl::set('client_view', false);

if (pll_current_language() == 'de') {
    Tpl::set('form_1_anchor', 'testversion');
    Tpl::set('form_2_anchor', 'demoversion');
    Tpl::set('form_3_anchor', 'jetzt_kaufen');
} else {
    Tpl::set('form_1_anchor', 'trial-version');
    Tpl::set('form_2_anchor', 'demo-version');
    Tpl::set('form_3_anchor', 'buy_now');
}

$pr_service_page = get_post(pll_get_post(5379));

$settings = Registry::get('settings');

if (pll_current_language() == 'de') {
    $id_fast_start = 5469;
    $text_finish = "Vielen Dank für Ihr Interesse.<br> Frohes Fest und ein gutes neues Jahr!";
}else{
    $id_fast_start = 5471;
     $text_finish = "Thank you for your interest.<br> Season's greetings and Happy New Year!";
}



        
$general_alt =  $settings->getOption('general_alt_text_for_images');
$header_image_alt = get_cfc_meta( 'fast_start')[0]["header_image_alt"];
?>
<?php get_header(); ?>

<main id="main" role="main">
    <div id="content">
        <div class="banner top-banner">
            <div class="container">
                <div class="banner-image">
                    <img  src="<?php echo the_cfc_field('fast_start', 'header_image', $id_fast_start); ?>" 
                          alt="<?php echo $header_image_alt ? $header_image_alt : $general_alt ; ?>">
                </div>
                <div class="banner-text">
                    <p>
                        <?php the_field('header_text_fast_start'); ?>
                    </p>
                </div>
            </div>
        </div>
        
        
        <section class="step-block banner-block">
             <div class="container-fluid">
                 
                 <div class="row">
                     
                     <div class="col-sm-12">
                         
                        <img  src="<?php the_post_thumbnail_url( 'full' ); ?>" 
                          alt="<?php echo $general_alt ; ?>">
                         
                     </div>
                     
                 </div>
                    
             </div>
        </section>
        
        
        <!-- open-close -->
        <div class="open-close">
            <!-- tape-block -->
            <div class="tape-block">
                <div class="container">
                    <p>
                        <?php the_field('try_prorm_text'); ?>
                    </p>
                   
                    <a id="request-button" href="#" class="btn white opener opener-scroll-slide"> 
                        <?php the_field('request_button'); ?>
                    </a>
                </div>
            </div>
            
            <!-- slide -->
            <section class="slide slide-scroll">
                <div class="container hide-form">
                    <p class="text-noupper second-header-section center-text"><?php echo the_cfc_field( 'fast_start','form_1_title' ); ?></p>
                    
                    <div class="form-holder">
                        <?php //echo do_shortcode('[form name=testing]'); ?>
                         <?php echo do_shortcode('[form name=request]'); ?>
                    </div>
                </div>

            </section>
            
        </div>
        
        
        
        <section class="step-block reviews-block video-block">
             <div class="container-fluid">
                 
                 <div class="row">
                     
                    <div class="col-sm-12">
                         
                        
                            <?php $owl_img = get_field('images_for_carousel');
                            if($owl_img)
                            {
                                    ?> 
                            <h2 class="third-header-section cropped-header"><?php the_field('carousel_header'); ?></h2>
                                <div class="owl-carousel review cycle-gallery" id="carousel-review"> 
                                       <?php
                                       
                                        foreach($owl_img as $img)
                                        { ?>
                                                <div class="review-img-outer"> 

                                                    <img class="review-owl-img" src="<?php echo $img['image_carousel']['url']; ?>" alt="<?php echo $general_alt; ?>"> 

                                                </div>    

                                        <?php } ?>

                                        
                                    </div> <?php
                            }?>
                         

                        
                         
                    </div>
                     
                 </div>
                    
             </div>
        </section>
        
        
        
        
        <!-- step block -->
        <section class="step-block">
            <div class="container">
                <p class="third-header-section cropped-header"><?php echo the_cfc_field('fast_start', 'headline', $id_fast_start); ?></p>

                <?php foreach (get_cfc_meta('fast_start_items', $id_fast_start) as $key => $item) : ?>
                    <article class="step">
                        <div class="step-img">
                            <img src="<?php echo wp_get_attachment_image_url($item['image'], 'full'); ?>" 
                                 alt="<?php echo $item['image_alt'] ? $item['image_alt'] : $general_alt ; ?>">
                        </div>
                        <div class="step-text">
                            <p class="six-header-section"><?php echo $item['title'] ?></p>
                            <p><?php echo $item['description'] ?></p>
                        </div>
                        <?php if ($key == 0) : ?>
                            <div class="visual-step-one"></div>
                        <?php else : ?>
                            <div class="visual-step-top"></div>
                            <div class="visual-step-bottom"></div>
                        <?php endif; ?>
                    </article>
                <?php endforeach; ?>

            </div>
        </section>
        
        
        <div class="open-close">
                <div class="tape-block hidden-tablet">
                    <div class="container">
                        <p> 
                            <?php the_field('try_prorm_text'); ?>
                        </p>
                       
                        <a href="#" class="btn white opener opener-scroll-slide">
                            <?php the_field('request_button'); ?>
                        </a>
                    </div>
                </div>
                <!-- slide -->
                <section class="slide slide-scroll">
                    <div class="container">
                        <h1 class="h2"><?php echo the_cfc_field( 'fast_start', 'form_3_title' ); ?></h1>
                        <?php echo the_cfc_field( 'fast_start', 'form_3_desc' ); ?>
                        <div class="form-holder">

                            <?php echo do_shortcode('[form name=request]'); ?>

                        </div>
                    </div>
                </section>
        </div>
        
        
        
        <!-- video block -->
        <?php
        $videos = ProRmVideo::getPublishedVideos();
        ?>
        <?php if ($videos) :?>
            <section class="video-block video-block-ny">
                <div class="container">
                    <p class="third-header-section header-block"><?php echo the_cfc_field('fast_start', 'video_text', $id_fast_start); ?></p>
                     <!--cycle carousel structure example--> 
                    <div class="cycle-gallery">
                        <div class="slideset">
                            <?php
                            // Template for video
                            get_template_part('videos');
                            ?>
                        </div> 
                        <?php 
                        if ( count($videos) > 3 ):?>
                            <i class="btn-prev icon-left"></i>
                            <i class="btn-next icon-right"></i>
                        <?php endif; ?>
                    </div>
                </div>
            </section>
        <?php endif; ?>
        <!-- end video block -->
        
       

    </div>
</main>

<script>
  
    jQuery( document ).ready(function() {
//        jQuery('div.form-success-message h4').html('<?php echo $text_finish; ?>');
         
        jQuery('#carousel-review').owlCarousel({
            loop:true,
            margin:10,
            items:1,
            nav:true,
            navText: [ '<i class="btn-prev icon-left" >', '<i class="btn-next icon-right" >'],
            autoplay: true
        });
         
         
    });
   
</script>
<?php get_footer(); ?>