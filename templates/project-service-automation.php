<?php
/*
 * Template Name: Project Service Automation page
 */
if(!isset($_SESSION)) {
    session_start();
}

$fast_start_page = get_post(pll_get_post(5471));
$enterprise_solution_page = get_post(pll_get_post(5475));

$lang = pll_current_language();

if($lang = 'es'){
    $fast_start_page = get_post(6716);
    $enterprise_solution_page = get_post(6720);
}


$settings = Registry::get('settings');
        
$general_alt =  $settings->getOption('general_alt_text_for_images');
$fast_start_page_alt = get_field( 'alt_for_images_on_psa_page', $fast_start_page->ID);
$enterprise_solution_page_alt = get_field( 'alt_for_images_on_psa_page', $enterprise_solution_page->ID);
?>

<?php get_header(); ?>
    <main id="main" role="main">
        <div id="content">
            <section class="automation">
                <div class="container">
                    <h1 class="h2"><?php echo $post->post_title ?></h1>
                    <div class="text-row">
                        <div class="col">
                            <div class="img-box">
                                <a href="<?php the_permalink($fast_start_page->ID) ?>">
                                    <img src="<?php echo get_the_post_thumbnail_url($fast_start_page->ID) ?>" 
                                         alt="<?php echo $fast_start_page_alt ? $fast_start_page_alt : $general_alt ; ?>">
                                </a>
                            </div>
                            <p><?php echo the_cfc_field( 'fast_start', 'excerpt', $fast_start_page->ID ); ?></p>
                            <a id="fast-start-button" href="<?php the_permalink($fast_start_page->ID) ?>" class="btn"><?php echo the_cfc_field( 'fast_start', 'more_button_text', $fast_start_page->ID ); ?></a>
                        </div>
                        <div class="col">
                            <div class="img-box">
                                <a href="<?php the_permalink($enterprise_solution_page->ID) ?>">
                                    <img src="<?php echo get_the_post_thumbnail_url($enterprise_solution_page->ID) ?>" 
                                         alt="<?php echo $enterprise_solution_page_alt ? $enterprise_solution_page_alt : $general_alt ; ?>">
                                </a>
                            </div>
                            <p><?php echo the_cfc_field( 'enterprise_solution', 'excerpt', $enterprise_solution_page->ID ); ?></p>
                            <a id="ecnterprise-solution-button" href="<?php the_permalink($enterprise_solution_page->ID) ?>" class="btn"><?php echo the_cfc_field( 'enterprise_solution', 'more_button_text', $enterprise_solution_page->ID ); ?></a>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>

<?php get_footer(); ?>