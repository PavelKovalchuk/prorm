<?php
/*
 * Template Name: Meet Us page
 */

if(!isset($_SESSION)) {
    session_start();
}

$settings = Registry::get('settings');
        
$general_alt =  $settings->getOption('general_alt_text_for_images');
$header_image_alt = get_cfc_meta( 'meet_us')[0]["header_image_alt"];
?>
<?php get_header(); ?>
    <main id="main" role="main">
        <div id="content">
            <div class="banner top-banner">
                <div class="container">
                    <div class="banner-image">
                        <img  src="<?php the_cfc_field( 'meet_us', 'header_image' ); ?>" 
                              alt="<?php echo $header_image_alt ? $header_image_alt : $general_alt ; ?>">
                    </div>
                    <div class="banner-text">
                        <p><?php echo the_cfc_field( 'meet_us', 'header_text' ); ?></p>
                    </div>
                </div>
            </div>
            <!-- slide -->
            <div class="meet form-slide">
                <div class="container">
                    <p class="third-header-section"><?php echo the_cfc_field( 'meet_us', 'headline' ); ?></p>
                    <?php echo do_shortcode('[form name=microsoft]'); ?>
                </div>
            </div>
        </div>
    </main>

<?php get_footer(); ?>