<?php
if(!isset($_SESSION)) {
    session_start();
}
Tpl::set('client_view', false);

if(pll_current_language() == 'de'){
    Tpl::set('form_1_anchor', 'testversion');
    Tpl::set('form_2_anchor', 'demoversion');
    Tpl::set('form_3_anchor', 'jetzt_kaufen');
} else {
    Tpl::set('form_1_anchor', 'trial-version');
    Tpl::set('form_2_anchor', 'demo-version');
    Tpl::set('form_3_anchor', 'buy_now');
}

$pr_service_page = get_post(pll_get_post(5379));

?>
<?php get_header(); ?>
    <main id="main" role="main">
        <div id="content">
            <div class="banner top-banner">
                <div class="container">
                    <div class="banner-image"><img  src="<?php echo the_cfc_field( 'fast_start', 'header_image' ); ?>" alt="img description"></div>
                    <div class="banner-text">
                        <p><?php echo the_cfc_field( 'fast_start', 'header_text' ); ?></p>
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
                    <h1 class="h3"><?php echo the_cfc_field( 'fast_start', 'headline' ); ?></h1>

                    <?php foreach(get_cfc_meta('fast_start_items') as $key => $item) : ?>
                        <article class="step">
                            <div class="step-img"><img src="<?php echo wp_get_attachment_image_url($item['image'], 'full'); ?>" alt="img description"></div>
                            <div class="step-text">
                                <h2 class="h6"><?php echo $item['title'] ?></h2>
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
                        <p><?php echo the_cfc_field( 'fast_start', 'cta_text' ); ?></p>
                        <a href="#" class="btn white opener opener-scroll-slide"><?php echo the_cfc_field( 'fast_start', 'cta_button_text' ); ?></a>
                    </div>
                </div>
                <!-- slide -->
                <section class="slide slide-scroll">
                    <div class="container">
                        <h1 class="h2"><?php echo the_cfc_field( 'fast_start', 'form_1_title' ); ?></h1>
                        <?php echo the_cfc_field( 'fast_start', 'form_1_desc' ); ?>
                        <div class="form-holder">

                            <?php echo do_shortcode('[form name=testing]'); ?>

                        </div>
                    </div>
                    <div class="container form-popup" style="display: none;">
                        <h1 class="h2"><?php echo the_cfc_field( 'fast_start', 'form_2_title' ); ?></h1>
                        <?php echo the_cfc_field( 'fast_start', 'form_2_desc' ); ?>
                        <div class="form-holder">

                            <?php echo do_shortcode('[form name=quick-check]'); ?>

                        </div>
                    </div>
                </section>
            </div>
            <div class="icons-block">
                <div class="container">
                    <h3 class="icons-header"><?php echo the_cfc_field( 'fast_start', 'header_block' ); ?></h3>
                    <div class="three-columns">
                        <div class="col">
                            <div class="flip-container">
                                <div class="border-holder">
                                    <div class="front">
                                        <div class="icon-box"><img src="<?php echo the_cfc_field( 'fast_start', 'block_1_image' ); ?>" alt="img description"></div>
                                        <span class="title"><?php echo the_cfc_field( 'fast_start', 'block_1_title' ); ?></span>
                                    </div>
                                    <div class="back">
                                        <span><?php echo the_cfc_field( 'fast_start', 'block_1_desc' ); ?></span>
                                    </div>
                                </div>
                                <a href="#" class="more">Preview</a>
                            </div>
                        </div>
                        <div class="col">
                            <div class="flip-container">
                                <div class="border-holder">
                                    <div class="front">
                                        <div class="icon-box"><img src="<?php echo the_cfc_field( 'fast_start', 'block_2_image' ); ?>" alt="img description"></div>
                                        <span class="title"><?php echo the_cfc_field( 'fast_start', 'block_2_title' ); ?></span>
                                    </div>
                                    <div class="back">
                                        <span><?php echo the_cfc_field( 'fast_start', 'block_2_desc' ); ?></span>
                                    </div>
                                </div>
                                <a href="#" class="more">Preview</a>
                            </div>
                        </div>
                        <div class="col">
                            <div class="flip-container">
                                <div class="border-holder">
                                    <div class="front">
                                        <div class="icon-box"><img src="<?php echo the_cfc_field( 'fast_start', 'block_3_image' ); ?>" alt="img description"></div>
                                        <span class="title"><?php echo the_cfc_field( 'fast_start', 'block_3_title' ); ?></span>
                                    </div>
                                    <div class="back">
                                        <span><?php echo the_cfc_field( 'fast_start', 'block_3_desc' ); ?></span>
                                    </div>
                                </div>
                                <a href="#" class="more">Preview</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            
            <div class="open-close">
                <div class="tape-block hidden-tablet">
                    <div class="container">
                        <p><?php echo the_cfc_field( 'fast_start', 'buy_text' ); ?> </p>
                        <a href="#" class="btn white opener opener-scroll-slide"><?php echo the_cfc_field( 'fast_start', 'buy_button_text' ); ?></a>
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

        </div>
    </main>
<?php get_footer(); ?>