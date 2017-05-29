<?php
/** @var WP_Post $slider */
$slider = Tpl::get('slider');
if ($slider) {
    list($imageUrl, $imageWidth, $imageHeight) = ProRmSlider::getImageSrc($slider);
    ?>
    <div class="item">
        <img src="<?php echo $imageUrl; ?>" alt="img description" >
    </div>
    <?php
}
?>