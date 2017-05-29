<?php

/**
 * Enqueue scripts and styles.
 *
 * @since Twenty Fifteen 1.0
 */
function prorm_scripts() {
    
    if( is_singular('post')){
        wp_dequeue_script( 'owl.carousel-js' );
        wp_enqueue_script('lightslider-js', get_template_directory_uri() . '/js/lightslider.min.js#asyncload"', array('jquery'), false, true);
        wp_enqueue_style('lightslider-css', get_template_directory_uri() . '/css/lightslider.css', array());
        
    }
    
    if(is_page_template('templates/references-2017.php')){
       //https://github.com/ciar4n/imagehover.css
        wp_enqueue_style('imagehover-css', get_template_directory_uri() . '/css/imagehover.min.css#asyncload', array());
    }
    

    // Add Magnific, used in the main stylesheet.
    wp_enqueue_style('magnific-css', get_template_directory_uri() . '/css/magnific-popup.css', array());
    // Add Magnific, used in the main stylesheet.
    wp_enqueue_style('owl-style-css', get_template_directory_uri() . '/css/owl.carousel.css', array());
    // Load our main stylesheet.
    wp_enqueue_style('prorm-style', get_stylesheet_uri(), array(), '2.3.0');
    
    wp_enqueue_script("jquery");
    // Add cookie, used in the main script.
    wp_enqueue_script('cookie', get_template_directory_uri() . '/js/jquery.cookie.js#asyncload', array('jquery'), true, true);
    // Add Magnific, used in the main script.
    wp_enqueue_script('magnific-popup', get_template_directory_uri() . '/js/jquery.magnific-popup.min.js', array('jquery'), false, true);
//    // Add Owl carousel, used in the main script.
//    wp_enqueue_script('owl.carousel-js', get_template_directory_uri() . '/js/owl.carousel.min.js', array('jquery'), false, true);
     
    wp_enqueue_script('owl.carousel-js', get_template_directory_uri() . '/js/owl.carousel-2.2.0.min.js', array('jquery'), '2.2.0', true);
     
    
//    
//    // Add main js, used in the main script.
    wp_enqueue_script('jquery-main-js', get_template_directory_uri() . '/js/jquery.main.js#asyncload"', array('jquery'), false, true);
//    // Add custom, used in the main script.
    wp_enqueue_script('custom', get_template_directory_uri() . '/js/custom.js#asyncload', array('jquery', 'owl.carousel-js'), '2.1.0', true);
//    // Add main, used in the main script.
//    wp_enqueue_script('main', get_template_directory_uri() . '/js/main.js', array('jquery'), false, true);
    
    $lang = pll_current_language();
    
    if( is_page() || is_singular('post') || is_singular('reference') || is_archive() || is_home() || is_404()){
        wp_dequeue_style( 'ssb-css');
        wp_dequeue_style( 'ParaAdmin');
        
        wp_dequeue_script( 'ssb_js' );
        wp_dequeue_script( 'ParaAdmin' );
        wp_dequeue_script( 'jscript_genimg' );
                        
        wp_deregister_script( 'jquery' );
        wp_register_script( 'jquery', get_template_directory_uri() . '/js/jquery-3.1.1.min.js', array(), '3.1.1', true);
	wp_enqueue_script( 'jquery' );
   }
   
   if( is_singular('post') || is_singular('reference') || is_home()){
        wp_dequeue_script( 'owl.carousel-js' );
       
        wp_enqueue_script('fontawesome-js', 'https://use.fontawesome.com/063e6393a1.js#asyncload');
    }
    
    if( is_singular('reference')){
       wp_dequeue_script( 'owl.carousel-js' );
      
       wp_dequeue_style( 'owl-style-css');
       wp_dequeue_style( 'magnific-css');
    }
    
    if(is_page_template('templates/references-2017.php')){
        
        wp_dequeue_style( 'owl-style-css');
        wp_dequeue_style( 'magnific-css');
       
    }
    
    if(is_page_template('templates/nomination-2017.php')){
        wp_enqueue_script('jquery-ui-effects-js', get_template_directory_uri() . '/js/jquery-ui-effects.min.js#asyncload"', array('jquery'), false, true);
        if(promx_is_mobile()){
//            wp_enqueue_style('hp_slider_mobile-css', get_template_directory_uri() . '/css/hp_slider_mobile.css', array());
//            wp_dequeue_style( 'owl-style-css');
//            wp_enqueue_script('hp_slider_mobile_prorm-js', get_template_directory_uri() . '/js/hp_slider_mobile_prorm_nom.js', array('jquery', 'owl.carousel-js'), false, true);
           
        }else{
            
            wp_enqueue_style('fractionslider-css', get_template_directory_uri() . '/css/fractionslider_nom.css', array());
            wp_enqueue_script('fractionslider-js', get_template_directory_uri() . '/js/jquery.fractionslider.js', array('jquery'), false, true);
            wp_enqueue_script('hp_slider_parallax_prorm-js', get_template_directory_uri() . '/js/hp_slider_parallax_prorm_nom.js', array('jquery', 'fractionslider-js'), false, true);
            
           
         
        }
         wp_enqueue_style('nomination-css', get_template_directory_uri() . '/style_nomination.css',  array(), '2.3.0');
       
    }
   
    //For parallax slider
    
//    if(is_page_template('front-page.php')){
//        
//        if(promx_is_mobile()){
//            wp_enqueue_style('hp_slider_mobile-css', get_template_directory_uri() . '/css/hp_slider_mobile.css', array());
//            wp_dequeue_style( 'owl-style-css');
//            wp_enqueue_script('hp_slider_mobile_prorm-js', get_template_directory_uri() . '/js/hp_slider_mobile_prorm.js', array('jquery', 'owl.carousel-js'), false, true);
//           
//        }else{
//            wp_enqueue_style('fractionslider-css', get_template_directory_uri() . '/css/fractionslider.css', array());
//            wp_enqueue_script('fractionslider-js', get_template_directory_uri() . '/js/jquery.fractionslider.js', array('jquery'), false, true);
//            wp_enqueue_script('hp_slider_parallax_prorm-js', get_template_directory_uri() . '/js/hp_slider_parallax_prorm.js', array('jquery', 'fractionslider-js'), false, true);
//        }
//        
//    }
    
  
}

add_action('wp_enqueue_scripts', 'prorm_scripts');




ini_set('upload_max_filesize', '64M');
ini_set('post_max_size', '64M');
$setTimeZone = get_option('timezone_string');
if ($setTimeZone) {
    ini_set('date.timezone', $setTimeZone);
    date_default_timezone_set($setTimeZone);
}
require_once dirname(__FILE__) . '/functions/hooks.php';
require_once dirname(__FILE__) . '/functions/session.php';
require_once dirname(__FILE__) . '/functions/helper.php';
require_once dirname(__FILE__) . '/functions/theme.php';
require_once dirname(__FILE__) . '/functions/shortcodes.php';
require_once dirname(__FILE__) . '/functions/widgets.php';
require_once dirname(__FILE__) . '/functions/news.php';
require_once dirname(__FILE__) . '/functions/cards.php';
require_once dirname(__FILE__) . '/functions/front-page.php';
require_once dirname(__FILE__) . '/functions/testimonials.php';
require_once dirname(__FILE__) . '/functions/references.php';
require_once dirname(__FILE__) . '/functions/sliders.php';
require_once dirname(__FILE__) . '/functions/videos.php';
require_once dirname(__FILE__) . '/functions/webinars.php';
require_once dirname(__FILE__) . '/functions/fetcher.php';
require_once dirname(__FILE__) . '/functions/forms.php';
require_once dirname(__FILE__) . '/functions/crm-client.php';
require_once dirname(__FILE__) . '/functions/social.php';
require_once dirname(__FILE__) . '/functions/settings.php';
require_once dirname(__FILE__) . '/functions/settings-references.php';
require_once dirname(__FILE__) . '/functions/settingsform.php';
require_once dirname(__FILE__) . '/functions/custom-fields.php';
require_once dirname(__FILE__) . '/functions/custom-meta-boxes.php';
require_once dirname(__FILE__) . '/functions/breadcrumb-trail.php';
require_once dirname(__FILE__) . '/functions/menu-walkers/menu-with-thumbnails.php';
require_once dirname(__FILE__) . '/functions/ajax-func.php';
require_once dirname(__FILE__) . '/functions/theme-functions.php';
require_once dirname(__FILE__) . '/functions/recaptcha.php';
require_once dirname(__FILE__) . '/functions/menu-walkers/header-menu.php';
require_once dirname(__FILE__) . '/functions/html_parts.php';
require_once dirname(__FILE__) . '/functions/html_parts_landings.php';
require_once dirname(__FILE__) . '/angular/functions.php';

ProRMSession::init();
ProRMTheme::init();
ProRMWidgets::init();
ProRMShortcodes::init();
ProRMCards::init();
ProRMTestimonials::init();
ProRMReferences::init();
ProRMSlider::init();
ProRmVideo::init();
ProRMFrontPage::init();
ProRMWebinars::init();
ProRMCustomFields::init();
ProRMCustomMetaBoxes::init();

ProRMForms::init(
        dirname(__FILE__) . '/functions/fetchers', 'forms'
);
Registry::register('social', new ProRMSocial());
Registry::register('settings', new ProRMSettings());
Registry::register('settingsform', new ProRMSettingsForm());

Registry::register('settings-references', new ProRMSettingsReference());

// Just a short alias for working with template vars
class Tpl extends ProRMTheme {

    public static function set($name, $value, $isFlash = false) {
        self::setVar($name, $value, $isFlash);
    }

    public static function get($name, $default = null, $isFlash = false) {
        return self::getVar($name, $default, $isFlash);
    }

}

;

abstract class Registry {

    /** @var array  */
    protected static $store = array();

    /**
     * @param string $name
     * @param object $instance
     */
    public static function register($name, $instance) {
        if (!isset(self::$store[$name])) {
            self::$store[$name] = $instance;
        }
    }

    /**
     * @param string $name
     * @return object
     */
    public static function get($name) {
        return isset(self::$store[$name]) ? self::$store[$name] : null;
    }

}

//add_filter('admin_footer_text', 'usage');
//add_filter('wp_footer', 'usage');
//function usage(){
//	$out = sprintf( 'SQL: %d. time: %s sec.', get_num_queries(), timer_stop(0, 3) );
//	if ( function_exists('memory_get_usage') )
//		$out .= ' '. round( memory_get_usage()/1024/1024, 2 ) . ' MB';
//
//	echo $out;
//}