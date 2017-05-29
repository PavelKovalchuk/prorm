<?php
/*
 * Template Name: References page
 */

if(!isset($_SESSION)) {
    session_start();
}

$testimonials = ProRMTestimonials::getPublishedTestimonials();
$settings = Registry::get('settings');
        
$general_alt =  $settings->getOption('general_alt_text_for_images');
$header_image_alt = get_cfc_meta( 'references')[0]["header_image_alt"];
?>
<?php get_header(); ?>
    <main id="main" role="main">
        <div id="content">
            <!-- banner -->
            <div class="banner top-banner">
                <div class="container">
                    <div class="banner-image">
                        <img  src="<?php echo the_cfc_field( 'references', 'header_image' ); ?>" 
                              alt="<?php echo $header_image_alt ? $header_image_alt : $general_alt ; ?>">
                    </div>
                    <div class="banner-text">
                        <p><?php echo the_cfc_field( 'references', 'header_text' ); ?></p>
                    </div>
                </div>
            </div>
            <div class="references">
                <p class="third-header-section"><?php echo the_cfc_field( 'references', 'headline' ); ?></p>

                <?php
                    if (count($testimonials)) {
                ?>
                <div class="container">
                    <?php
                    foreach ($testimonials as $testimonial) {
                        Tpl::set('testimonial', $testimonial);
                        get_template_part('content','testimonial');
                    }
                    ?>
                </div>
                <?php
                }

                Tpl::set('testimonial', null);
                ?>

            </div>
        </div>
    </main>
<?php get_footer(); ?>