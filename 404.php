<?php 
/*
 * Template for page 404
 */
get_header();?>

<main id="main" class="page_not_found" role="main">
    <img src="<?php echo ProRMTheme::url(); ?>/images/404.png" alt="not found">
    <a href="<?php echo pll_home_url(); ?>" class="btn link-main-page"><?php _e('Back to the main page', ProRMTheme::TEXTDOMAIN) ?></a>
</main>
<?php get_footer('2017'); ?>
