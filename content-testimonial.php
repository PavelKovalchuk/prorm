<?php
/** @var WP_Post $testimonial */
$testimonial = Tpl::get('testimonial');
if ($testimonial) {
    $linkUrl = ProRMTestimonials::getLinkUrl($testimonial);
    $linkText = ProRMTestimonials::getLinkText($testimonial);
    list($imageUrl, $imageWidth, $imageHeight) = ProRMTestimonials::getImageSrc($testimonial);
    
    $settings = Registry::get('settings');
        
    $general_alt =  $settings->getOption('general_alt_text_for_images');
    $image_alt = get_cfc_meta( 'testimonial', $testimonial->ID)[0]['image_alt'];
?>

    <div class="references-row">
        <div class="col-left">
            <img src="<?php echo $imageUrl; ?>" alt="<?php echo $image_alt ? $image_alt : $general_alt ; ?>"
                 width="<?php echo $imageWidth ?>" height="<?php echo $imageHeight ?>">
        </div>
        <div class="col-right">
            <blockquote>
                <div class="quote-frame">
                    <p><?php echo the_cfc_field( 'testimonial', 'quote', $testimonial->ID ); ?></p>
                </div>
                <div class="cite-holder">
                    <cite><span><?php echo the_cfc_field( 'testimonial', 'author', $testimonial->ID ); ?>,</span> <?php echo the_cfc_field( 'testimonial', 'sub_title', $testimonial->ID ); ?></cite>
                    <a target="_blank" href="<?php echo the_cfc_field( 'testimonial', 'link_url', $testimonial->ID ); ?>" class="quote-link"><?php echo the_cfc_field( 'testimonial', 'link_text', $testimonial->ID ); ?></a>
                </div>
            </blockquote>
        </div>
    </div>

<?php
}
?>





