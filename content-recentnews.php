<?php
$settings = Tpl::get('display_settings');
?>

<div class="col-6 news-article-outer">
    <div class="news-article">
        <?php if ($settings['date']) {
            ProRMNews::showPubDate();
        } ?>
        <h3><a href="<?php echo esc_url(get_permalink()) ?>" class="marsala-colour"><?php the_title(); ?></a></h3>
        <p><?php ProRMNews::showExcerpt(); ?></p>
    </div>
    <a href="<?php echo esc_url(get_permalink()) ?>" class="button-prorm button-prorm-vinous">
        <span class="btn-text-outer"><?php echo $settings['read_more_text'] ?>...</span>
    </a>
</div>