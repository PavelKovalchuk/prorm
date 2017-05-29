<?php
/*
 * Template Name: Support page
 */

if(!isset($_SESSION)) {
    session_start();
}

Tpl::set('client_view', true);

$settings = Registry::get('settings');
        
$general_alt =  $settings->getOption('general_alt_text_for_images');
$header_image_alt = get_cfc_meta( 'support', 'header_image_alt' )[0]["header_image_alt"];
?>
<?php get_header(); ?>
    <main id="main" role="main">
        <div id="content" class="support-block">
            <div class="banner top-banner">
                <div class="container">
                    <div class="banner-image">
                        <img  src="<?php the_cfc_field( 'support', 'header_image' ); ?>" 
                              alt="<?php echo $header_image_alt ? $header_image_alt : $general_alt ; ?>">
                    </div>
                    <div class="banner-text">
                        <p><?php echo the_cfc_field( 'support', 'header_text' ); ?></p>
                    </div>
                </div>
            </div>

            <!-- slide -->
            <section class="slide form-slide">
                <div class="container">
                    <p class="second-header-section"><?php echo the_cfc_field( 'support', 'headline' ); ?></p>
                    <p><?php echo the_cfc_field( 'support', 'form_title' ); ?></p>
                    <div class="form-holder">
                        <?php echo do_shortcode('[form name=service-request]'); ?>

                    </div>
                </div>
            </section>
        </div>
    </main>
<?php get_footer(); ?>