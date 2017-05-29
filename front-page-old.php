<?php
/*
 * Template Name: Home page OLD
 */

global $post;

ProRMHelper::handleLangRedirection();

$frontpageCategories = ProRMFrontPage::getCategories($post->ID);

$recentNewsDisplayOptions = array(
    'read_more' => true,
    'read_more_text' => __('more', ProRMTheme::TEXTDOMAIN),
);

$service_pages = new WP_Query(array(
    'post_type' => 'page',
    'post_status' => 'publish',
    'meta_query' => array(
        array(
            'key' => 'page_show_on_homepage',
            'value' => '1',
            'compare' => '=',
        )
    )
));

$related_pages = get_field( "related_pages" );
$pr_service_page = $related_pages[0];
$fl_service_page = $related_pages[1];

//$pr_service_page = get_post(pll_get_post(5379));
//$fl_service_page = get_post(pll_get_post(5456));

$settings = Registry::get('settings');
        
$general_alt =  $settings->getOption('general_alt_text_for_images');
$pr_service_page_alt = get_cfc_meta( 'project_service_automation', $pr_service_page->ID)[0]['image_alt'];
$fl_service_page_alt = get_cfc_meta( 'field_service_automation', $fl_service_page->ID)[0]['image_alt'];
$banner_img_alt = get_field( 'homepage_block_banner_image_alt');
$banner_img = get_field( 'homepage_block_banner_image')['url'];
get_header();
?>

<main id="main" role="main">
    <div id="content">
        <!-- banner -->
        <div class="banner">
            <div class="container">
              
                <div class="banner-text software-block-outer">
                    <span><?php echo the_cfc_field( 'homepage_main', 'top_slider_text_1' ); ?></span>
                    <span id="links">
                        <span id="software-button" class="hidden software-button jcf-select-text">
                            <?php //echo pll_current_language() == 'de' ? 'Software,' : 'software' ?>
                            <?php echo get_translated_text('Software,', 'software', 'software') ?>
                            <span id="software-button-opener"></span>
                        </span>

                    </span>
                    <span class="slider-text-2"><?php echo the_cfc_field( 'homepage_main', 'top_slider_text_2' ); ?></span>
                    <div id="software-block" class="jcf-list software-hidden"><?php ProRMTheme::showDropDownMenuLinks(); ?></div>
                </div>
                  
                <div class="image-align">
                    <div class="img-holder">
                        <img src="<?php echo $banner_img ?>" 
                             alt="<?php echo $banner_img_alt ? $banner_img_alt : $general_alt ; ?>">
                    </div>
                </div>
            </div>
        </div>
        <!-- intro -->
        <div class="intro">
            <div class="container">
                <h1><?php echo the_cfc_field( 'homepage_main', 'headline' ); ?></h1>
                
                <article class="intro-post">
                    <div class="image">
                        <img src="<?php echo the_cfc_field( 'project_service_automation', 'image', $pr_service_page->ID ); ?>" 
                             alt="<?php echo $pr_service_page_alt ? $pr_service_page_alt : $general_alt ; ?>">
                    </div>
                    <div class="holder">
                        <h2><?php echo $pr_service_page->post_title ?></h2>
                        <p><?php echo the_cfc_field( 'project_service_automation', 'excerpt', $pr_service_page->ID ); ?></p>
                        <a id="project_service_button" href="<?php the_permalink($pr_service_page->ID) ?>" class="btn "><?php echo the_cfc_field( 'project_service_automation', 'more_button_text', $pr_service_page->ID ); ?></a>
                    </div>
                </article>

                <article class="intro-post">
                    <div class="image">
                        <img src="<?php echo the_cfc_field( 'field_service_automation', 'image', $fl_service_page->ID ); ?>" 
                             alt="<?php echo $fl_service_page_alt ? $fl_service_page_alt : $general_alt ; ?>">
                    </div>
                    <div class="holder">
                        <h2><?php echo $fl_service_page->post_title; ?></h2>
                        <p><?php echo the_cfc_field( 'field_service_automation', 'excerpt', $fl_service_page->ID ); ?></p>
                        <a id="field_service_button" href="<?php the_permalink($fl_service_page->ID) ?>" class="btn"><?php echo the_cfc_field( 'field_service_automation', 'more_button_text', $fl_service_page->ID ); ?></a>
                    </div>
                </article>
            </div>
        </div>
        <div class="tape-block meet-blok">
            <div class="container">
                <p><?php echo the_cfc_field( 'homepage_main', 'cta_text' ); ?></p>
                <a id="meet-us-button" href="<?php the_permalink(pll_get_post(843)) ?>" class="btn white opener"><?php echo the_cfc_field( 'homepage_main', 'cta_button_text' ); ?></a>
            </div>
        </div>
        <!-- newsroom -->
        <?php if($frontpageCategories){ ?>
            <section class="newsroom-index">
                <div class="container">
                    <p class="header-section"><?php echo get_post(pll_get_post(6))->post_title ?></p>
                    <?php ProRMNews::showRecentNews(2, $frontpageCategories, $recentNewsDisplayOptions) ?>
                </div>
            </section>
        <?php } ?>
        
    </div>
</main>

<?php get_footer(); ?>
