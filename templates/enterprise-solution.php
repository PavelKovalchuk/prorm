<?php
/*
 * Template Name: Enterprise Solution page
 */

if(!isset($_SESSION)) {
    session_start();
}

if(pll_current_language() == 'de'){
    Tpl::set('form_anchor', 'PSA_webinar');
} else {
    Tpl::set('form_anchor', 'PSA_webcast');
}

$pr_service_page = get_post(pll_get_post(5379));

$settings = Registry::get('settings');
        
$general_alt =  $settings->getOption('general_alt_text_for_images');
$header_image_alt = get_cfc_meta( 'enterprise_solution')[0]["header_image_alt"];

?>
<?php get_header(); ?>
    <main id="main" role="main">
        <div id="content" class="template-solution">
            <div class="banner top-banner">
                <div class="container">
                    <div class="banner-image">
                        <img  src="<?php echo the_cfc_field( 'enterprise_solution', 'header_image' ); ?>" 
                              alt="<?php echo $header_image_alt ? $header_image_alt : $general_alt ; ?>">
                    </div>
                    <div class="banner-text">
                        <p><?php echo the_cfc_field( 'enterprise_solution', 'header_text' ); ?></p>
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
                    <p class="third-header-section"><?php echo the_cfc_field( 'enterprise_solution', 'headline' ); ?></p>
                    <?php foreach(get_cfc_meta('enterprise_solution_items') as $key => $item) : ?>
                        <article class="step">
                            <div class="step-img">
                                <img src="<?php echo wp_get_attachment_image_url($item['image'], 'full'); ?>" 
                                     alt="<?php echo $item['image_alt'] ? $item['image_alt'] : $general_alt ; ?>">
                            </div>
                            <div class="step-text">
                                <p class="six-header-section"><?php echo $item['title'] ?></p>
                                <p><?php echo $item['description'] ?></p>
                            </div>
                            <?php if($key == 0) : ?>
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
                        <p><?php echo the_cfc_field( 'enterprise_solution', 'cta_text' ); ?></p>
                        <a id="request-button" href="#" class="btn white opener opener-scroll-slide"><?php echo the_cfc_field( 'enterprise_solution', 'cta_button_text' ); ?></a>
                    </div>
                </div>
                <!-- slide -->
                <section class="slide slide-scroll">
                    <div class="container">
                        <p class="second-header-section"><?php echo the_cfc_field( 'enterprise_solution', 'headline_2' ); ?></p>
                        <p><?php echo the_cfc_field( 'enterprise_solution', 'form_1_desc' ); ?></p>
                        <div class="form-holder">

                            <?php echo do_shortcode('[form name=webinar]'); ?>

                        </div>
                    </div>
                </section>
            </div>
        </div>
    </main>
<?php get_footer(); ?>