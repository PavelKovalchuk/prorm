<?php
if(!isset($_SESSION)) {
    session_start();
}

if (!isset($contentType)) {
    $contentType = get_post_format();
}
if (!isset($sidebar)) {
    $sidebar = '';
}
$showBreadcrumbs = get_field('page_show_breadcrumbs');
?>
<?php get_header(); ?>
<div id="main" class="default">
    <div class="container default-page">
        <div id="content" role="main">
            <?php if ($showBreadcrumbs) { ?>
            <div class="breadcrumbs">
                <?php echo ProRMTheme::getBreadcrumbs(); ?>
            </div>
            <?php } ?>
            <?php
            if (have_posts()) {
                while (have_posts()) {
                    $values = get_post_custom(the_ID);
                    if(isset($values['my_meta_box_select'])) {
                        if($values['my_meta_box_select'][0] !== '') {
                            $_SESSION['preselected_product'] = $values['my_meta_box_select'][0];
                        }
                    }
                    the_post();
                    get_template_part('content', $contentType);
                }
            } else {
                get_template_part('content', 'no-posts');
            }
            ?>
        </div>
    </div>
    </div>
<?php get_sidebar($sidebar); ?>
<?php get_footer(); ?>