<?php

/** @var ProRMSettings $settings */
$settings = Registry::get('settings');
$sliderInterval = (int) $settings->getOption('general_slider_interval');
$sliderChangingSpeed = (int) $settings->getOption('general_slider_changing_speed');
if (!$sliderInterval) {
    $sliderInterval = 4000;
}
if (!$sliderChangingSpeed) {
    $sliderChangingSpeed = 1000;
}

$generalHelpTextEnable = (int) $settings->getOption('general_help_text_enable');
$generalHelpTextInterval = (int) $settings->getOption('general_help_text_interval');
$dataCurLang = pll_current_language('slug'); 
?>
    <!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script>
            /* Globals */
            var generalHelpTextEnable = <?php echo $generalHelpTextEnable; ?>;
            var generalHelpTextInterval = <?php echo $generalHelpTextInterval; ?>;
        </script>
        <meta charset="<?php bloginfo( 'charset' ); ?>">


        <title><?php wp_title( '|', true, 'right' ); ?></title>

        <link rel="profile" href="http://gmpg.org/xfn/11">
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

        <!-- Bootstrap -->
        <link href="<?php echo ProRMTheme::url(); ?>/css/bootstrap.min.css" rel="stylesheet">

        <link href="<?php echo ProRMTheme::url(); ?>/css/style.compiled.css" rel="stylesheet">
        <link href="<?php echo ProRMTheme::url(); ?>/css/jquery-ui-1.10.4.custom.min.css" rel="stylesheet">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
        <!--[if lt IE 10]>
        <link href="<?php echo ProRMTheme::url(); ?>/css/ie-lt-10.css" rel="stylesheet">
        <![endif]-->
        <!--[if lt IE 9]>
        <link href="<?php echo ProRMTheme::url(); ?>/css/ie-lt-9.css" rel="stylesheet">
        <![endif]-->

        <script>
            var __sliderInterval = <?php echo $sliderInterval; ?>;
            var __sliderChangingSpeed = <?php echo $sliderChangingSpeed; ?>;
        </script>

        <?php wp_head(); ?>
    </head>
<body class="fixed-top-bar <?php echo $dataCurLang; ?>">

    <div id="fb-root" data-cur-lang="<?php echo $dataCurLang; ?>"></div>
<?php get_template_part('navbar', 'top'); ?>
<?php get_template_part('navbar', 'side'); ?>