<?php
global $post;
$hideTitle = false;
$showSiblingsLinks = get_field('page_show_siblings_links', $post->post_parent)
    || get_field('page_show_siblings_links');
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <?php if (!$hideTitle) { ?>
    <header class="entry-header app-header">
        <?php
        if (is_singular()) {
            the_title('<h1 class="entry-title">', '</h1>');
        } else {
            the_title('<h1 class="entry-title"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h1>');
        }
        ?>
        <a href="../" class="overview-link"><?php _e('Overview', ProRMTheme::TEXTDOMAIN) ?></a>
        <br class="clear">
    </header>
    <?php } ?>

    <?php if (is_search()) { ?>
        <div class="entry-summary">
            <?php the_excerpt(); ?>
        </div>
    <?php } else { ?>
        <div class="entry-content">
        <?php
            the_content();
            wp_link_pages(array(
                'before' => '<div class="page-links"><span class="page-links-title">' . __('Pages:', ProRMTheme::TEXTDOMAIN) . '</span>',
                'after' => '</div>',
                'link_before' => '<span>',
                'link_after' => '</span>',
            ));
        ?>
        </div>
    <?php } ?>

    <?php edit_post_link(__('Edit', ProRMTheme::TEXTDOMAIN), '<p class="edit-link">', '</p>'); ?>
    <?php the_tags('<div class="entry-meta"><span class="tag-links">', '', '</span></div>'); ?>

    <?php if ($showSiblingsLinks) { ?>
        <?php echo ProRMTheme::getPreviousPageLink('<div class="app-side-link app-prev">%link</div>'); ?>
        <?php echo ProRMTheme::getNextPageLink('<div class="app-side-link app-next">%link</div>'); ?>
    <?php } ?>

</article>