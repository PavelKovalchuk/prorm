<?php
/** @var WP_Post $slider */
$video = Tpl::get('video');
if ($video) {
    list($imageUrl, $imageWidth, $imageHeight) = ProRmVideo::getImageSrc($video);
    $id_video = ProRmVideo::getVideoSrc($video);
}
?>
<?php ?>
<a data-effect="mfp-zoom-in" class="item icon-play popup-youtube" href="http://fast.wistia.net/embed/iframe/<?= $id_video; ?>?seo=false">
    <img src="<?= $imageUrl; ?>" alt="img description" width="<?= $imageWidth ?>" height="<?= $imageHeight ?>">
</a>