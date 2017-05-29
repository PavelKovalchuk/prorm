<?php
/** @var WP_Post[] $videos Video posts */
$videos = ProRmVideo::getPublishedVideos();
if (count($videos)) {
    ?>
    <div class="owl-carousel owl-carousel-video">
        <?php
        foreach ($videos as $video) {
            Tpl::set('video', $video);
            get_template_part('content', 'videos');
        }
        ?>
    </div>
    <?php
}
Tpl::set('video', null);
?>