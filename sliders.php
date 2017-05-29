<?php
/** @var WP_Post[] $sliders Slider posts */
$sliders = ProRmSlider::getPublishedSliders();
if (count($sliders)) {
    ?>
    <div class="owl-carousel owl-carousel-gallery">
        <?php
        foreach ($sliders as $slider) {
            Tpl::set('slider', $slider);
            get_template_part('content', 'slider');
        }
        ?>
    </div>
    <?php
}
Tpl::set('slider', null);
?>