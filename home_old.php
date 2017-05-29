<?php

if(!isset($_SESSION)) {
    session_start();
}

Tpl::set('tabsNewsContent', true);

if(pll_current_language() == 'de'){
    Tpl::set('form_anchor', 'abonnement');
} else {
    Tpl::set('form_anchor', 'subscription');
}

$page_id = get_post(pll_get_post(6))->ID;
$settings = Registry::get('settings');
        
$general_alt =  $settings->getOption('general_alt_text_for_images');
$header_image_alt = get_cfc_meta( 'newsroom', $page_id )[0]["header_image_alt"];
?>
<?php get_header(); ?>
    <main id="main" role="main">
        <div id="content">
            <div class="banner top-banner">
                <div class="container">
                    <div class="banner-image">
                        <img  src="<?php echo the_cfc_field( 'newsroom', 'header_image', $page_id ); ?>" 
                              alt="<?php echo $header_image_alt ? $header_image_alt : $general_alt ; ?>">
                    </div>
                    <div class="banner-text">
                        <p><?php echo the_cfc_field( 'newsroom', 'header_text', $page_id ); ?></p>
                    </div>
                </div>
            </div>
            <div class="newsroom-posts">
                <div class="container">
                    <p class="third-header-section"><?php echo the_cfc_field( 'newsroom', 'headline', $page_id ); ?></p>
                    <!-- tabs structure example -->
                    <?php get_template_part('parts/newsroom/categ-blocks'); ?>
                </div>
            </div>
            <!-- open-close -->
            <div class="open-close">
                <!-- tape-block -->
                <div class="tape-block">
                    <div class="container">
                        <p><?php echo the_cfc_field( 'newsroom', 'cta_text', $page_id ); ?></p>
                        <a id="meet-us-button" href="#" class="btn white opener opener-scroll-slide"><?php echo the_cfc_field( 'newsroom', 'cta_button_text', $page_id ); ?></a>
                    </div>
                </div>
                <!-- slide -->
                <section class="slide slide-scroll">
                    <div class="container">
                        <div class="form-holder">
                            <?php echo do_shortcode('[form name=subscribe]'); ?>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </main>
<?php get_footer(); ?>