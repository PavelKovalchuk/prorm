<?php
/*
 * Template Name: Contact Us page
 */
if(!isset($_SESSION)) {
    session_start();
}
$settings = Registry::get('settings');
        
$general_alt =  $settings->getOption('general_alt_text_for_images');
$header_image_alt = get_cfc_meta( 'contact_us' )[0]["header_image_alt"];
?>
<?php get_header(); ?>
    <main id="main" role="main">
        <div id="content" class="contact-us-block">
            <div class="banner top-banner">
                <div class="container">
                    <div class="banner-image">
                        <img  src="<?php the_cfc_field( 'contact_us', 'header_image' ); ?>" 
                              alt="<?php echo $header_image_alt ? $header_image_alt : $general_alt ; ?>">
                    </div>
                    <div class="banner-text">
                        <p><?php echo the_cfc_field( 'contact_us', 'header_text' ); ?></p>
                    </div>
                </div>
            </div>
            <!-- slide -->
            <section class="slide form-slide">
                <div class="container">
                    <p class="third-header-section" style="text-transform:uppercase;"><?php echo the_cfc_field( 'contact_us', 'headline' ); ?></p>
                    <p><span class="highlight"><?php echo the_cfc_field( 'contact_us', 'form_title' ); ?></span></p>
                    <div class="form-holder">
                        <?php echo do_shortcode('[form name=contact-us]'); ?>
                    </div>
                </div>
            </section>
            <?php echo do_shortcode('[widgetarea name=contact-info]'); ?>
            <?php get_sidebar('offices') ?>
        </div>
    </main>
<?php get_footer(); ?>