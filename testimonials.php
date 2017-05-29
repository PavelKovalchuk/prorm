<?php

/** @var WP_Post[] $testimonials Testimonial posts */
$testimonials = ProRMTestimonials::getPublishedTestimonials();

if (count($testimonials)) {
    foreach ($testimonials as $testimonial) {
        Tpl::set('testimonial', $testimonial);
        get_template_part('content', 'testimonial');
    }
}

Tpl::set('testimonial', null);
?>