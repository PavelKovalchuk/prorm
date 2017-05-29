<?php
/**
 * Template name: Redirect to first child
 */
global $post;
$children = ProRMTheme::getChildPages($post->ID);
$firstChild = current($children);

if ($firstChild) {
    $url = get_permalink($firstChild);
} else {
    $url = get_site_url();
}

wp_redirect($url);
exit;