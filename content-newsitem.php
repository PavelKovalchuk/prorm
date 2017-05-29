<?php
$settings = Tpl::get('display_settings');
?>

<article class="news-post">

    <?php if ($settings['date']) {
        ProRMNews::showPubDate();
    } ?>

    <h2 class="h6"><a href="<?php echo esc_url(get_permalink()) ?>"><?php the_title(); ?></a></h2>
    <p><?php ProRMNews::showExcerpt(); ?></p>
    <?php if (!isset($settings['read_more_text'])):?>
        <div class="more-holder">
            <a href="<?php echo esc_url(get_permalink()) ?>" class="read-more-news"><?php echo $settings['read_more_text'] ?>...</a>
        </div>
    <?php endif; ?>
</article>


