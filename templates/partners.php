<?php
/*
 * Template Name: Partners page
 */

if(!isset($_SESSION)) {
    session_start();
}

$settings = Registry::get('settings');
        
$general_alt =  $settings->getOption('general_alt_text_for_images');
$header_image_alt = get_cfc_meta( 'partners')[0]["header_image_alt"];
?>
<?php get_header(); ?>
    <main id="main" role="main">
        <div id="content">
            <div class="banner top-banner">
                <div class="container">
                    <div class="banner-image">
                        <img  src="<?php echo the_cfc_field( 'partners', 'header_image' ); ?>" 
                              alt="<?php echo $header_image_alt ? $header_image_alt : $general_alt ; ?>">
                    </div>
                    <div class="banner-text">
                        <p><?php echo the_cfc_field( 'partners', 'header_text' ); ?></p>
                    </div>
                </div>
            </div>
            <div class="partners">
                <div class="container">
                    <p class="third-header-section"><?php echo the_cfc_field( 'partners', 'headline' ); ?></p>
                    
                    <?php  
                    
                        $our_partners = get_field('our_partners');
                        if($our_partners)
                        {
                                ?><ul><?php

                                foreach($our_partners as $partner)
                                {
                                    ?><li>
                                        <img src="<?php echo $partner['partner_logo']['url']; ?>" 
                                             alt="<?php  echo $partner['partner_logo_alt'] ? $partner['partner_logo_alt'] : $general_alt ; ?>">
                                    </li><?php
                                        
                                }

                                ?></ul><?php
                        }
                    
                    ?>
                    
<!--                    <ul>
                        <li><img src="<?php //echo ProRMTheme::url(); ?>/images/img-11.png" alt="img description"></li>
                        <li><img src="<?php //echo ProRMTheme::url(); ?>/images/img-12.png" alt="img description"></li>
                        <li><img src="<?php //echo ProRMTheme::url(); ?>/images/img-13.png" alt="img description"></li>
                        <li><img src="<?php //echo ProRMTheme::url(); ?>/images/img-14.png" alt="img description"></li>
                        <li><img src="<?php //echo ProRMTheme::url(); ?>/images/img-15.png" alt="img description"></li>
                        <li><img src="<?php //echo ProRMTheme::url(); ?>/images/img-16.png" alt="img description"></li>
                        <li><img src="<?php //echo ProRMTheme::url(); ?>/images/img-17.png" alt="img description"></li>
                        <li><img src="<?php //echo ProRMTheme::url(); ?>/images/img-18.png" alt="img description"></li>
                        <li><img src="<?php // echo ProRMTheme::url(); ?>/images/img-19.png" alt="img description"></li>
                        <li><img src="<?php // echo ProRMTheme::url(); ?>/images/img-20.png" alt="img description"></li>
                        <li><img src="<?php // echo ProRMTheme::url(); ?>/images/img-21.png" alt="img description"></li>
                        <li><img src="<?php // echo ProRMTheme::url(); ?>/images/img-22.png" alt="img description"></li>
                        <li><img src="<?php // echo ProRMTheme::url(); ?>/images/img-23.png" alt="img description"></li>
                        <li><img src="<?php // echo ProRMTheme::url(); ?>/images/img-24.png" alt="img description"></li>
                        <li><img src="<?php // echo ProRMTheme::url(); ?>/images/img-25.png" alt="img description"></li>
                    </ul>-->
<!--                    --><?php //echo do_shortcode('[widgetarea name=partners]') ?>
                </div>
            </div>

            <!-- open-close -->
            <div class="open-close">
                <!-- tape-block -->
                <div class="tape-block">
                    <div class="container">
                        <p><?php echo the_cfc_field( 'partners', 'cta_text' ); ?></p>
                        <a id="partners-button" href="#" class="btn white opener opener-scroll-slide"><?php echo the_cfc_field( 'partners', 'cta_button_text' ); ?></a>
                    </div>
                </div>
                <!-- slide -->
                <section class="slide slide-scroll">
                    <div class="container">
                        <p class="second-header-section center-text"><?php echo the_cfc_field( 'partners', 'headline_2' ); ?></p>
                        <div class="form-holder">

                            <?php echo do_shortcode('[form name=partnership-request]'); ?>

                        </div>
                    </div>
                </section>
            </div>
        </div>
    </main>
<?php get_footer(); ?>