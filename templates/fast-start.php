<?php
/*
 * Template Name: Fast Start page
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

$pr_service_page = get_post(pll_get_post(8123));

$settings = Registry::get('settings');
        
$general_alt =  $settings->getOption('general_alt_text_for_images');
$header_image_alt = get_cfc_meta( 'fast_start')[0]["header_image_alt"];
?>
<?php get_header(); ?>
<main id="main" role="main">
    <div id="content">
        <div class="banner top-banner">
            <div class="container">
                <div class="banner-image">
                    <img  src="<?php echo the_cfc_field('fast_start', 'header_image'); ?>" 
                          alt="<?php echo $header_image_alt ? $header_image_alt : $general_alt ; ?>">
                </div>
                <div class="banner-text">
                    <p><?php echo the_cfc_field('fast_start', 'header_text'); ?></p>
                </div>
            </div>
        </div>
        <div class="container">
            <ul class="list-links breadcrumbs">
                <li><a href="<?php the_permalink($pr_service_page->ID) ?>"><?php echo $pr_service_page->post_title ?></a></li>
                <li class="active"><?php the_title() ?></li>
            </ul>
        </div>
        <!-- step block -->
        <section class="step-block">
            <div class="container">
                <p class="third-header-section cropped-header"><?php echo the_cfc_field('fast_start', 'headline'); ?></p>

                <?php foreach (get_cfc_meta('fast_start_items') as $key => $item) : ?>
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
        <!-- video block -->
        <?php
        $videos = ProRmVideo::getPublishedVideos();
        ?>
        <?php if ($videos) :?>
            <section class="video-block">
                <div class="container">
                    <p class="third-header-section header-block"><?php echo the_cfc_field('fast_start', 'video_text'); ?></p>
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
        <!-- open-close -->
        <div class="open-close">
            <!-- tape-block -->
            <div class="tape-block">
                <div class="container">
                    <p><?php echo the_cfc_field('fast_start', 'cta_text'); ?></p>
                    <a id="go-button" target="_blank" href="<?php echo the_cfc_field('fast_start', 'cta_button_text_url'); ?>" class="btn white"><?php echo the_cfc_field('fast_start', 'cta_button_text'); ?></a>
                    <!--<a id="request-button" href="#" class="btn white opener opener-scroll-slide"><?php //echo the_cfc_field('fast_start', 'cta_button_text'); ?></a>-->
                </div>
            </div>
            
            <!-- slide -->
<!--            <section class="slide slide-scroll">
                <div class="container hide-form">
                    <p class="text-noupper second-header-section center-text"><?php //echo the_cfc_field( 'fast_start','form_1_title' ); ?></p>
                    <?php //echo the_cfc_field('fast_start', 'form_1_desc'); ?>
                    <div class="form-holder">
                        <?php //echo do_shortcode('[form name=testing]'); ?>
                    </div>
                </div>
                <div class="container form-popup" style="display: none;">
                    <p class="second-header-section center-text"><?php //echo the_cfc_field('fast_start', 'form_2_title'); ?></p>
                    <? // = the_cfc_field('fast_start', 'form_2_desc');?>
                    <div class="form-holder">

                        <?php //echo do_shortcode('[form name=quick-check]'); ?>

                    </div>
                </div>
            </section>-->
            
        </div>
        <div class="icons-block">
            <div class="container">
                <p class="third-header-section icons-header"><?php echo the_cfc_field('fast_start', 'header_block'); ?></p>
                <div class="three-columns">
                    <div class="col">
                        <div class="flip-container">
                            <div class="border-holder">
                                <div class="front">
                                    <div class="icon-box"><img src="<?php echo the_cfc_field('fast_start', 'block_1_image'); ?>" alt="img description"></div>
                                    <span class="title"><?php echo the_cfc_field('fast_start', 'block_1_title'); ?></span>
                                </div>
                                <div class="back">
                                    <span><?php echo the_cfc_field('fast_start', 'block_1_desc'); ?></span>
                                </div>
                            </div>
                            <a data-effect="mfp-zoom-in" href="<?= the_cfc_field('fast_start', 'block_1_preview'); ?>" class="more gallery-item"><?php _e('Preview', ProRMTheme::TEXTDOMAIN); ?></a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="flip-container">
                            <div class="border-holder">
                                <div class="front">
                                    <div class="icon-box"><img src="<?php echo the_cfc_field('fast_start', 'block_2_image'); ?>" alt="img description"></div>
                                    <span class="title"><?php echo the_cfc_field('fast_start', 'block_2_title'); ?></span>
                                </div>
                                <div class="back">
                                    <span><?php echo the_cfc_field('fast_start', 'block_2_desc'); ?></span>
                                </div>
                            </div>
                            <a data-effect="mfp-zoom-in" href="<?= the_cfc_field('fast_start', 'block_2_preview'); ?>" class="more gallery-item"><?php _e('Preview', ProRMTheme::TEXTDOMAIN); ?></a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="flip-container">
                            <div class="border-holder">
                                <div class="front">
                                    <div class="icon-box"><img src="<?php echo the_cfc_field('fast_start', 'block_3_image'); ?>" alt="img description"></div>
                                    <span class="title"><?php echo the_cfc_field('fast_start', 'block_3_title'); ?></span>
                                </div>
                                <div class="back">
                                    <span><?php echo the_cfc_field('fast_start', 'block_3_desc'); ?></span>
                                </div>
                            </div>
                            <a data-effect="mfp-zoom-in" href="<?= the_cfc_field('fast_start', 'block_3_preview'); ?>" class="more gallery-item"><?php _e('Preview', ProRMTheme::TEXTDOMAIN); ?></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>


       <div class="open-close">
                <div class="tape-block hidden-tablet">
                    <div class="container">
                        <p><?php echo the_cfc_field( 'fast_start', 'buy_text' ); ?> </p>
                        <a id="go-button-2" href="<?php echo the_cfc_field( 'fast_start', 'buy_button_text_url' ); ?>" target="_blank" class="btn white"><?php echo the_cfc_field( 'fast_start', 'buy_button_text' ); ?></a>
                        <!--<a href="#" class="btn white opener opener-scroll-slide"><?php //echo the_cfc_field( 'fast_start', 'buy_button_text' ); ?></a>-->
                    </div>
                </div>
                <!-- slide -->
<!--                <section class="slide slide-scroll">
                    <div class="container">
                        <h1 class="h2"><?php //echo the_cfc_field( 'fast_start', 'form_3_title' ); ?></h1>
                        <?php //echo the_cfc_field( 'fast_start', 'form_3_desc' ); ?>
                        <div class="form-holder">

                            <?php //echo do_shortcode('[form name=request]'); ?>

                        </div>
                    </div>
                </section>-->
            </div>

    </div>
</main>
<?php get_footer(); ?>