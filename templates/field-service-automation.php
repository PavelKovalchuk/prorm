<?php
/*
 * Template Name: Field Service Automation page
 */
if(!isset($_SESSION)) {
    session_start();
}
if (pll_current_language() == 'de') {
    Tpl::set('form_anchor', 'FS_webinar');
} else {
    Tpl::set('form_anchor', 'FS_webcast');
}

$settings = Registry::get('settings');
        
$general_alt =  $settings->getOption('general_alt_text_for_images');
$header_image_alt = get_cfc_meta( 'field_service_automation')[0]["header_image_alt"];

get_header();
?>
<main id="main" role="main">
    <div id="content">
        <div class="banner top-banner">
            <div class="container">
                <div class="banner-image">
                    <img  src="<?php echo the_cfc_field('field_service_automation', 'header_image'); ?>" 
                          alt="<?php echo $header_image_alt ? $header_image_alt : $general_alt ; ?>">
                </div>
                <div class="banner-text">
                    <p><?php echo the_cfc_field('field_service_automation', 'header_text'); ?></p>
                </div>
            </div>
        </div>
        <!-- step block -->
        <section class="step-block field-service">
            <div class="container">
                <p class="third-header-section"><?php echo the_cfc_field('field_service_automation', 'headline'); ?></p>
                <?php foreach (get_cfc_meta('field_service_automation_items') as $key => $item) : ?>
                    <article class="step">
                        <div class="step-img">
                            <img src="<?php echo wp_get_attachment_image_url($item['image'], 'full'); ?>" 
                                 alt="<?php echo $item['image_alt'] ? $item['image_alt'] : $general_alt ; ?>">
                        </div>
                        <div class="step-text">
                            <p class="six-header-section"><?php echo $item['title'] ?></p>
                            <p><?php echo $item['desc'] ?></p>
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
        <!-- open-close -->
        <div class="open-close">
            <!-- tape-block -->
            <div class="tape-block">
                <div class="container">
                    <p><?php echo the_cfc_field('field_service_automation', 'cta_text'); ?></p>
                    <a id="request-button" href="#" class="btn white opener opener-scroll-slide"><?php echo the_cfc_field('field_service_automation', 'cta_text_button'); ?></a>
                </div>
            </div>
            <!-- slide -->
            <section class="slide slide-scroll">
                <div class="container">
                    <p class="second-header-section center-text"><?php echo the_cfc_field('field_service_automation', 'form_title'); ?></p>
                    <p><?php echo the_cfc_field('field_service_automation', 'form_desc'); ?></p>
                    <div class="form-holder">
                        <?php echo do_shortcode('[form name=fieldservices-webinar]'); ?>
                    </div>
                </div>
            </section>
        </div>
    </div>
</main>
<?php get_footer(); ?>