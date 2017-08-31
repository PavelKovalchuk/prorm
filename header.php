<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" 
      xmlns:fb="http://ogp.me/ns/fb#" 
      xmlns:og="http://ogp.me/ns#" <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <?php $is_live_site = is_live_site(); 
          $browser = trim(get_browser_name($_SERVER['HTTP_USER_AGENT']));
    ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php if(!$is_live_site){ get_noindex_tag(); } ?>
    <?php if(is_front_page()){ 
        remove_action('wp_head', 'ssb_open_graph'); ?>
        <meta property="og:image" content="http://prorm.net/wp-content/themes/prorm/images/FS.png" />
    <?php } ?>
    <title><?php wp_title( '|', true, 'right' ); ?></title>
    <link rel="icon" href="<?php echo ProRMTheme::url(); ?>/images/favicon.ico" type="image/png" />
    <?php if ( $browser == "Internet Explorer" || $browser == "Edge") { ?>
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300" rel="stylesheet"  async='async'>
     <?php }  ?>
      
    <?php if(!is_front_page()){ get_multi_recaptcha_js();} ?>
    <?php wp_head(); ?>
    <?php if($is_live_site){ get_google_tag_anal(); } get_google_tag_anal();?>
    
</head>
<body <?php echo is_front_page() ? 'class="homepage"' : '' ?>  <?php echo is_page_template('templates/nomination-2017.php') ? 'class="homepage"' : '' ?> >
 <?php if($is_live_site){ get_google_no_script(); } if($is_live_site){get_google_no_script(); }?>    
<?php $dataCurLang = pll_current_language('slug');
session_set_cookie_params(10800);
$settings = Registry::get('settings');

if(is_singular('reference')){
    $template = 'single-reference.php';
}else{
    $template = get_post_meta( $post->ID, '_wp_page_template', true );
}

$_SESSION['template'] = $template;

        
$general_alt =  $settings->getOption('general_alt_text_for_images');
$header_alt =  $settings->getOption('header_alt_text_for_image');
?>
<div id="wrapper" class="<?php echo $dataCurLang; ?>">
    <header id="header">
        <div class="container">
            
            <div class="header-outer">
            
            <div class="logo">
                
                <?php if(!is_front_page()){ ?>
                    <a href="<?php echo pll_home_url(); ?>">
                <?php } else{ ?>
                    <div>    
                <?php } ?>
                    <img src="<?php echo ProRMTheme::url(); ?>/images/logo.png" 
                         alt="<?php echo $header_alt ? $header_alt : $general_alt ; ?>">
                <?php if(!is_front_page()){ ?>
                    </a>
                <?php } else{ ?>
                    </div>    
                <?php } ?>
                        
            </div>
            <nav class="menu">
                <ul id="nav" class="nav-drop">
                    <?php ProRMTheme::showSideMenu(); ?>
                </ul>
            </nav>
            <a href="#" class="nav-opener"><span></span></a>
            <?php echo ProRMTheme::getLangSwitcher(); ?>
            
            </div>
            
        </div>
    </header>
 