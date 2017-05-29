<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex, nofollow"/>
    <?php // if(is_front_page()){ 
        remove_action('wp_head', 'ssb_open_graph'); ?>
        <meta property="og:image" content="http://prorm.net/wp-content/themes/prorm/images/FS.png" />
    <?php // } ?>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <title><?php wp_title( '|', true, 'right' ); ?></title>
    <link rel="icon" href="<?php echo ProRMTheme::url(); ?>/images/favicon.ico" type="image/png" />
    
    <?php  
    
    $multi_recapctha = get_field('if_2_recaptchas');    
    if($multi_recapctha){
        get_multi_recaptcha_js(); 
    }
    ?>
    
    <?php wp_head(); ?>
    <?php if(is_live_site()){ get_google_tag_anal(); } ?>
</head>
<body <?php echo is_front_page() ? 'class="homepage"' : '' ?>  <?php echo is_page_template('templates/nomination-2017.php') ? 'class="homepage"' : '' ?> >
    
<?php if(is_live_site()){ get_google_no_script(); } ?>    
<?php $dataCurLang = pll_current_language('slug');
session_set_cookie_params(10800);
$settings = Registry::get('settings');
        
$general_alt =  $settings->getOption('general_alt_text_for_images');
$header_alt =  $settings->getOption('header_alt_text_for_image');
?>
<div id="wrapper" class="<?php echo $dataCurLang; ?>">
    <header id="header">
        <div class="container">
            <div class="logo">
                
                
                    <div>    
                
                    <img src="http://promx.net/wp-content/themes/prorm/images/logo-proMX-new.png" 
                         alt="<?php echo $header_alt ? $header_alt : $general_alt ; ?>">
               
                    </div>    
                
            </div>
          
        </div>
       
    </header>
 