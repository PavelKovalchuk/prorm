<?php

/**
 * Filter the output of the video shortcode.
 *
 * @since 3.6.0
 *
 * @param string $output  Video shortcode HTML output.
 * @param array  $atts    Array of video shortcode attributes.
 * @param string $video   Video file.
 * @param int    $post_id Post ID.
 * @param string $library Media library used for the video shortcode.
 */
//function jc_video_shortcode_output($output, $atts, $video, $post_id, $library){
//    $source_gen = '';
//    $default_types = wp_get_video_extensions();
//    $source = '<source type="%s" src="%s" />';
//    foreach ( $default_types as $fallback ) {
//            if ( ! empty( $atts[ $fallback ] ) ) {
//                    $type = wp_check_filetype( $atts[ $fallback ], wp_get_mime_types() );
//                    $source_gen .= sprintf( $source, $type['type'], esc_url( $atts[ $fallback ] ) );
//            }
//    }
//    $output= '<div class="video-bg embed-ex"><video ';
//    if($atts['autoplay'])
//            $output .= 'autoplay="autoplay" ';
//    if($atts['loop'])
//            $output .= 'loop="loop" ';
//    if($atts['poster'])
//            $output .= 'poster="'.$atts['poster'].'"';
//    $output .=' >';
//
//    $output .= $source_gen;
//
//    $output .= 'Your browser does not support the video tag.';
//    $output .='</video></div>';
//    return $output;
//}
// register the shortcode to wrap html around the content
/*
 * Shortcode for video
 * @param array $atts Array for video shortcode attributes
 */
function wptuts_responsive_video_shortcode($atts) {
    extract(shortcode_atts(array(
        'id' => ''
                    ), $atts));
//    return '<a class="item icon-play href="http://fast.wistia.net/embed/iframe/' . $id . '?seo=false"><iframe src="http://fast.wistia.net/embed/iframe/' . $id . '?seo=false" frameborder="0" scrolling="no"></iframe></a>
    return $id;
}

add_shortcode('responsive-video', 'wptuts_responsive_video_shortcode');

/*
 * Hook for remove p near images
 * @param string $content the content of which is transmitted
 */

function wph_remove_p_images($content) {
    return preg_replace('/<p>\s*(<a .*>)?\s*(<img .* \/>)\s*(<\/a>)?\s*<\/p>/iU', '\1\2\3', $content);
}

add_filter('the_content', 'wph_remove_p_images');

/*
 * Hook for remove link near images
 * @param string $content the content of which is transmitted
 */

function attachment_image_link_remove_filter($content) {
    $content = preg_replace(array('{<a(.*?)(wp-att|wp-content\/uploads)[^>]*><img}', '{ wp-image-[0-9]*" /></a>}'), array('<img', '" />'), $content);
    return $content;
}

add_filter('the_content', 'attachment_image_link_remove_filter');

function http_status_version ($status, $location) {
    return 301;
}
add_filter( 'wp_redirect_status', 'http_status_version');


//add_filter ('wp_redirect_status', 'modify_status', 10, 2);
function modify_status($status, $location) {
  $homepages = array(
    'http://promx.webdev.acceptic.com/de',
      'http://promx.webdev.acceptic.com/',
  );

  if (in_array($location, $homepages))
    return 301;
}

function new_excerpt_length($length) {
    return 50;
}
add_filter('excerpt_length', 'new_excerpt_length');