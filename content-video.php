<?php
global $post;


ProRMHelper::handleLangRedirection();

$frontpageCategories = ProRMFrontPage::getCategories($post->ID);

$recentNewsDisplayOptions = array(
    'read_more' => true,
    'read_more_text' => __('more', ProRMTheme::TEXTDOMAIN),
);

get_header();
get_template_part('cards-holder');
?>

    <div class="container newsroom">
        <div class="row">
            <div class="col-sm-12">
                <?php
                if (have_posts()) {
                    while (have_posts()) {
                        the_post();
                        the_content();
                    }
                }
                ?>
            </div>
        </div>
        <div class="row bordered-top-row">
            <?php foreach ($frontpageCategories as $idx => $categoryId) { ?>
            <?php if ($idx > 0 && $idx % 2 == 0) { ?>
        </div>
        <div class="row bordered-news-items">
            <?php } ?>
            <div class="col-md-6 col-<?php echo ($idx % 2) ? 'right' : 'left' ?>">
                <?php ProRMNews::showRecentNews(1, $categoryId, $recentNewsDisplayOptions) ?>
            </div>
            <?php } ?>
        </div>
    </div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>