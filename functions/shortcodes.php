<?php

class ProRMShortcodes {

    public static function init() {
        // Insert menu
        add_shortcode('pagemenu', array(__CLASS__, 'menuShortcodeHandler'));
        // Insert sidebar
        add_shortcode('widgetarea', array(__CLASS__, 'widgetareaShortcodeHandler'));
        // Insert sidebar
        add_shortcode('widgetarea-2017', array(__CLASS__, 'widgetarea2017ShortcodeHandler'));
        // Insert Form
        add_shortcode('form', array(__CLASS__, 'formShortcodeHandler'));
        //Insert forms header
        add_shortcode('form-header', array(__CLASS__, 'formShortcodeHeader'));
        // Render testimonials
        add_shortcode('testimonials', array(__CLASS__, 'testimonialsShortcodeHandler'));
        // Add Pro-button
        add_shortcode('pro-button', array(__CLASS__, 'proButtonShortcodeHandler'));
        // Add br.clear
        add_shortcode('clear', array(__CLASS__, 'clearShortcodeHandler'));
        // Add pdf icon to link
        add_shortcode('pdf-link', array(__CLASS__, 'pdfLinkShortcodeHandler'));
    }

    public static function menuShortcodeHandler($attributes, $content = null) {
        $showImages = isset($attributes['images']) && $attributes['images'];
        $showText = isset($attributes['text']) && $attributes['text'];
        unset($attributes['images']);

        $menuAttributes = shortcode_atts(
                array(
            'menu' => '',
            'container' => false,
            'container_class' => '',
            'container_id' => '',
            'items_wrap' => '<div id="%1$s" class="%2$s">%3$s</div>',
            'menu_class' => 'menu',
            'menu_id' => '',
            'echo' => true,
            'fallback_cb' => false,
            'before' => '',
            'after' => '',
            'link_before' => '',
            'link_after' => '',
            'depth' => 0,
            'walker' => '',
            'theme_location' => ''
                ), $attributes
        );

        if ($showImages) {
            $walker = new Menu_With_Thumbnails();
            $walker->setItemsAdditionalClass('navbar-bottom-item');
            $walker->setShowTextLinks($showText);
            $menuAttributes['walker'] = $walker;
        }
        if ($menuAttributes['menu_class'] != 'menu') {
            $menuAttributes['menu_class'] .= ' menu';
        }

        $menuAttributes['echo'] = false;
        return wp_nav_menu($menuAttributes);
    }

    public static function proButtonShortcodeHandler($attributes, $content = null) {
        $text = $content ? $content : $attributes['text'];
        $isGrey = isset($attributes['grey']) || in_array('grey', $attributes);
        $button = sprintf(
                '<a href="%s" class="pro-btn%s"><span>%s</span></a>&nbsp;', $attributes['url'], ($isGrey ? ' inactive' : ''), $text
        );
        if (isset($attributes['display'])) {
            if ($attributes['display'] == 'block') {
                $button = '<p>' . $button . '</p>';
            }
        }

        return $button;
    }

    public static function formShortcodeHandler($attributes, $content = null) {
        $name = $attributes['name'];
        $content = preg_replace('/^\s*<\/p>(.*)<p>\s*$/is', '$1', $content);
        return ProRMForms::handleForm($name, $content);
    }
    
    public static function formShortcodeHeader($attributes, $content = null) {
        $name = $attributes['name'];
        $id = get_post_id_by_name( $name, 'form' ); 
        $form_header = get_field('header', $id); 
        return $form_header;
    }

    public static function testimonialsShortcodeHandler($attributes, $content = null) {
        return ProRMTestimonials::getTestimonialsList($attributes, $content);
    }

    public static function clearShortcodeHandler($attributes, $content = null) {
        return '<br class="clear">';
    }

    public static function widgetareaShortcodeHandler($attributes, $content = null) {
        $sideabar = $attributes['name'];
        if ($sideabar) {
            ob_start();
            echo '<div class="row">';
            get_sidebar($sideabar);
            echo '</div>';
            $content = ob_get_clean();
        }
        return $content;
    }
    
    public static function widgetarea2017ShortcodeHandler($attributes, $content = null) {
        $sideabar = $attributes['name'];
        if ($sideabar) {
            ob_start();
           
            get_sidebar($sideabar);
           
            $content = ob_get_clean();
        }
        return $content;
    }

    public static function pdfLinkShortcodeHandler($attributes, $content = null) {
        if (preg_match('/<a [^>]*class="/i', $content)) {
            $content = preg_replace('/<a ([^>]*)class="/i', '<a $1class="pdf-link', $content);
        } else {
            $content = preg_replace('/<a /i', '<a class="pdf-link" ', $content);
        }
        return $content;
    }

}
