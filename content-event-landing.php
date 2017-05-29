<?php

/** @var ProRMSettings $settings */
$settings = Registry::get('settings');
$sliderInterval = (int)$settings->getOption('general_slider_interval');
$sliderChangingSpeed = (int)$settings->getOption('general_slider_changing_speed');
if (!$sliderInterval) {
    $sliderInterval = 4000;
}
if (!$sliderChangingSpeed) {
    $sliderChangingSpeed = 1000;
}

$generalHelpTextEnable = (int)$settings->getOption('general_help_text_enable');
$generalHelpTextInterval = (int)$settings->getOption('general_help_text_interval');

?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>


<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
	<?php

if ( function_exists( 'yoast_analytics' ) ) {

  yoast_analytics();

}

?>

    <!-- Yandex.Metrika counter -->
    <script src="<?php echo get_template_directory_uri(); ?>/js/metrika.js">

    </script>
    <noscript><div><img src="https://mc.yandex.ru/watch/32043416?ut=noindex" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
    <!-- /Yandex.Metrika counter -->
  
    <link href="<?php echo ProRMTheme::url(); ?>/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo ProRMTheme::url(); ?>/css/style.compiled.css" rel="stylesheet">
    <link href="<?php echo ProRMTheme::url(); ?>/css/jquery-ui-1.10.4.custom.min.css" rel="stylesheet">
    <link href="<?php echo ProRMTheme::url(); ?>/css/landing-event.css" rel="stylesheet">
</head>
<body class="landing-event-body">

<?php $dataCurLang = pll_current_language('slug'); ?>
<script>
    var __sliderInterval = <?php echo $sliderInterval; ?>;
    var __sliderChangingSpeed = <?php echo $sliderChangingSpeed; ?>;
</script>

<div id="fullpage" class="visible-md visible-lg">
    <div class="section" data-anchor="block1">

        <nav class="navbar-top navbar navbar-default navbar-fixed-top" role="navigation">
            <div class="container-fluid">
                <div class="row navbar-top-row">
                    <div class="col-xs-8 col-md-8"> <!-- was col-md-6 for left menu | col-md-8 for top -->
                        <div class="logos-holder navbar-top-item col-sm-push-2" style="border:none;">
                            <div class="logo logo-prorm">
                                <a href="<?php echo esc_url(site_url()); ?>">
                                    <img style="float:left"
                                         src="<?php echo ProRMTheme::url(); ?>/images/logo-proMX-new.png"
                                         alt="<?php bloginfo('name'); ?>">
                                </a>

                            </div>

                        </div>

                    </div>


                    <div class="col-md-4 col-xs-4 landing-event-number-block">
                        <strong><span class="landing-event-number">+49 (911) 239 80 40</span></strong>
                    </div>
                </div>
            </div>
        </nav>


        <div class="cards-holder slider-top card-landing-event">
            <div class="card active card-1"
                 style="display: block; background-image: url(<?php echo get_site_url(); ?>/wp-content/themes/prorm/images/landing-event-bg.jpg); background-size: cover;">
                <div class="card-bg-small visible-xs"
                     style="height: 211px; background-image: url(<?php echo get_site_url(); ?>/wp-content/themes/prorm/images/404-mobi.jpg);"
                     data-initial-width="600" data-initial-height="211"></div>
                <div class="card-bg"
                     style="background-image: url(<?php echo get_site_url(); ?>/wp-content/themes/prorm/images/landing-event-first-image.jpg);"
                     data-initial-width="1600" data-initial-height="540">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12 card-col">


                                <div class="col-sm-6 landing-form-event-first">
                                    <?php echo do_shortcode('[form name=business]'); ?>
                                </div>


                                <div class="text-holder">


                                    <div class="landing-event-slider">
                                        <div class="logos">
                                            <img style="padding-bottom:10px;"
                                                 src="<?php echo ProRMTheme::url(); ?>/images/logo-it-bus.png"
                                                 alt="<?php bloginfo('name'); ?>"></div>
                                        <p class="landing-event-slide-header">3 einfache Schritte zu Ihrem kostenlosen
                                            Workshop
                                            </br>und der erfolgreichen CRM-Einführung:</p>


                                        <p class="slide-text-landing-event">

                                            <img src="http://promx.net/wp-content/themes/prorm/images/icon-list.png">
                                            <span style="text-transform: uppercase">Füllen</span> Sie das
                                            Antragsformular rechts auf der
                                            Seite aus
                                        </p>

                                        <p class="slide-text-landing-event">
                                            <img src="http://promx.net/wp-content/themes/prorm/images/icon-list.png">
                                            <span style="text-transform: uppercase">Treffen</span> Sie das proMX-Team
                                            auf der IT & Business-
                                            Fachmesse in Stuttgart
                                        </p>

                                        <p class="slide-text-landing-event">
                                            <img src="http://promx.net/wp-content/themes/prorm/images/icon-list.png">
                                            <span style="text-transform: uppercase">Erhalten</span> Sie einen
                                            KOSTENLOSEN Workshop von
                                            unseren besten Experten
                                        </p>
                                    </div>


                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>


        <div class="how-works-block">
            <center><h2 class="how-works">Wie es funktioniert</h2></center>

        </div>


        <div class="container-fluid">

            <div style="float:left;width:20%;margin-left:12%;">
                <center><img class="event-icon"
                             src="http://promx.net/wp-content/themes/prorm/images/icon-landing-event-first.png">

                    <h2 class="head-how">Ausfüllen</h2>

                    <p class="icon-text-event-landing">Füllen Sie das Antragsformular rechts auf der Seite aus oder
                        melden Sie sich über LinkedIn an.</p></center>
            </div>

            <div style="float:left;width:20%;margin-left:8%;">
                <center><img class="event-icon"
                             src="http://promx.net/wp-content/themes/prorm/images/icon-landing-event-second.png">

                    <h2 class="head-how">Treffen</h2>

                    <p class="icon-text-event-landing">Treffen Sie das proMX-Team auf der IT & Business 2015 vom
                        29.09-01.10 in Stuttgart und erfahren Sie mehr über Ihre Vorteile bei der Nutzung von ERP- und
                        CRM-Software. </p></center>
            </div>

            <div style="float:left;width:20%;margin-left:8%;">
                <center><img class="event-icon"
                             src="http://promx.net/wp-content/themes/prorm/images/icon-landing-event-third.png">

                    <h2 class="head-how">Erhalten</h2>

                    <p class="icon-text-event-landing">Erhalten Sie einen KOSTENLOSEN Anforderungs- oder
                        Analyse-Workshop von den proMX-Experten, dessen normale Preis 1250€ beträgt.</p></center>
            </div>

        </div>

    </div>


    <div class="section" data-anchor="block2">
        <div class="container">
            <div class="col-sm-12 landing-event-block">
                <h2 class="head-block-first">Über die Veranstaltung:</h2>
                <img class="alignleft landing-event-img-first" alt=""
                     src="http://promx.net/wp-content/themes/prorm/images/logo-it-business.png"/>
                Lieferanten der ERP- und CRM-Lösungen kommen jedes Jahr zusammen, um sich über die Neuheiten aus der
                Welt der Unternehmenssoftware zu informieren und sich auszutauschen.
                Treffen Sie das proMX-Team am Microsoft-Partnerstand in Halle 1, Standnummer 1E41 der Messe Stuttgart.
                Erfahren Sie mehr über Praxiserfahrungen bei der erfolgreichen Projektimplementierung für die
                Dienstleistungsunternehmen von Peter Linke,
                CEO der proMX GmbH, sowie über die mögliche Anbindung von On-Premise ERP-Lösungen an die Cloud auf dem
                Gebiet der diskreten Fertigung von Christian Otto, COO bei proMX.
            </div>
        </div>
        <div style="background-color:#ededed">
            <div class="container" style="padding-bottom:30px;">
                <div class="col-sm-12 landing-event-block">
                    <h2 class="head-block-second">Was wir Ihnen bieten?</h2>
                    Wenn Sie sich für die Einführung des ERP- bzw. CRM-Systems entschieden haben und die
                    Dienstleistungen der proMX GmbH dafür in Anspruch nehmen möchten,
                    dann bieten wir Ihnen eine perfekte Zugabe für allen unsere Leistungspakete: Erfahren Sie mehr über
                    unsere Unternehmenssoftware-Einführungspakete auf
                    der IT & Business-Fachmesse und erhalten Sie einen KOSTENLOSEN Workshop, den die proMX-Experten für
                    Ihr Unternehmen durchführen werden.
                </div>
            </div>
        </div>
        <div>
            <div class="container">
                <div class="col-sm-12 landing-event-block">
                    <h2 class="head-block-third">Diese Unternehmen vertrauen auf uns:</h2>
                    <img class="landing-event-img-second" style="margin-top:20px;" alt=""
                         src="http://promx.net/wp-content/themes/prorm/images/logos.jpg"/>
                </div>
            </div>
        </div>
    </div>
    <div class="section" data-anchor="block3">
        <div style="background-image:url(http://promx.net/wp-content/themes/prorm/images/landing-event-third-image.jpg);
            background-repeat: no-repeat;background-size: 100%;height:85%;">

            <div class="container">
                <div class="form-landing-event">
                    <?php echo do_shortcode('[form name=business]'); ?>
                </div>
            </div>
        </div>


        <center><h2 class="landing-event-bottom" style="font-weight:300;">Wir freuen uns auf das Treffen in
                Stuttgart!</h2></center>

    </div>
</div>


<div class="visible-xs visible-sm">

    <nav class="navbar-top navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container-fluid">
            <div class="row navbar-top-row">
                <div class="col-xs-8 col-md-8"> <!-- was col-md-6 for left menu | col-md-8 for top -->
                    <div class="logos-holder navbar-top-item col-sm-push-2" style="border:none;">
                        <div class="logo logo-prorm">
                            <a href="<?php echo esc_url(site_url()); ?>">
                                <img style="float:left" src="<?php echo ProRMTheme::url(); ?>/images/logo-proMX-new.png"
                                     alt="<?php bloginfo('name'); ?>">


                            </a>

                        </div>

                    </div>

                </div>


                <div class="col-md-4 col-xs-4 landing-event-number-block">
                    <strong><span class="landing-event-number">+49 (911) 239 80 40</span></strong>
                </div>
            </div>
        </div>
    </nav>
    <div class="landing-event-slider">
        <div class="landing-mobi-slider">
            <div class="logos">
                <img style="padding-bottom:10px;" src="<?php echo ProRMTheme::url(); ?>/images/logo-it-bus.png"
                     alt="<?php bloginfo('name'); ?>">
            </div>
            <p class="landing-event-slide-header">


                3 einfache Schritte zu Ihrem</br>
                kostenlosen Workshop und der erfolgreichen</br>
                CRM-Einführung:</p>

            <p class="slide-text-landing-event">

                <img src="http://promx.net/wp-content/themes/prorm/images/icon-list.png">
                <span style="text-transform: uppercase">Füllen</span> Sie das Antragsformular auf der
                Seite aus
            </p>

            <p class="slide-text-landing-event">
                <img src="http://promx.net/wp-content/themes/prorm/images/icon-list.png">
                <span style="text-transform: uppercase">Treffen</span> Sie das proMX-Team auf der IT & Business-
                Fachmesse in Stuttgart
            </p>

            <p class="slide-text-landing-event">
                <img src="http://promx.net/wp-content/themes/prorm/images/icon-list.png">
                <span style="text-transform: uppercase">Erhalten</span> Sie einen KOSTENLOSEN Workshop von
                unseren besten Experten
            </p>
        </div>

    </div>

    <div class="form-landing-event-mobile">
        <?php echo do_shortcode('[form name=business]'); ?>
    </div>


    <div class="block-event-mobi">

        <div class="how-works-block">
            <center><h2 class="how-works">Wie es funktioniert</h2></center>

        </div>

        <div>
            <center><img class="event-icon"
                         src="http://promx.net/wp-content/themes/prorm/images/icon-landing-event-first.png">

                <h2 class="head-how">Ausfüllen</h2>

                <p class="icon-text-event-landing">Füllen Sie das Antragsformular rechts auf der Seite aus oder melden
                    Sie sich über LinkedIn an.</p></center>
        </div>

        <div>
            <center><img class="event-icon"
                         src="http://promx.net/wp-content/themes/prorm/images/icon-landing-event-second.png">

                <h2 class="head-how">Treffen</h2>

                <p class="icon-text-event-landing">Treffen Sie das proMX-Team auf der IT & Business 2015 vom 29.09-01.10
                    in Stuttgart und erfahren Sie mehr über Ihre Vorteile bei der Nutzung von ERP- und
                    CRM-Software. </p></center>
        </div>

        <div>
            <center><img class="event-icon"
                         src="http://promx.net/wp-content/themes/prorm/images/icon-landing-event-third.png">

                <h2 class="head-how">Erhalten</h2>

                <p class="icon-text-event-landing">Erhalten Sie einen KOSTENLOSEN Anforderungs- oder Analyse-Workshop
                    von den proMX-Experten, dessen normale Preis 1250€ beträgt.</p></center>
        </div>

    </div>


    <div class=" col-sm-12 landing-event-block">
        <h2 class="head-block-first">Über die Veranstaltung:</h2>
        <img class="alignleft landing-event-img-first" alt=""
             src="http://promx.net/wp-content/themes/prorm/images/logo-it-business.png"/>
        Lieferanten der ERP- und CRM-Lösungen kommen jedes Jahr zusammen, um sich über die Neuheiten aus der Welt der
        Unternehmenssoftware zu informieren und sich auszutauschen.
        Treffen Sie das proMX-Team am Microsoft-Partnerstand in Halle 1, Standnummer 1E41 der Messe Stuttgart.
        Erfahren Sie mehr über Praxiserfahrungen bei der erfolgreichen Projektimplementierung für die
        Dienstleistungsunternehmen von Peter Linke,
        CEO der proMX GmbH, sowie über die mögliche Anbindung von On-Premise ERP-Lösungen an die Cloud auf dem Gebiet
        der diskreten Fertigung von Christian Otto, COO bei proMX.
    </div>

    <div class="col-sm-12 landing-event-block">
        <h2 class="head-block-second">Was wir Ihnen bieten?</h2>
        Wenn Sie sich für die Einführung des ERP- bzw. CRM-Systems entschieden haben und die Dienstleistungen der proMX
        GmbH dafür in Anspruch nehmen möchten,
        dann bieten wir Ihnen eine perfekte Zugabe für allen unsere Leistungspakete: Erfahren Sie mehr über unsere
        Unternehmenssoftware-Einführungspakete auf
        der IT & Business-Fachmesse und erhalten Sie einen KOSTENLOSEN Workshop, den die proMX-Experten für Ihr
        Unternehmen durchführen werden.
    </div>

    <div class="col-sm-12 landing-event-block">
        <h2 class="head-block-third">Diese Unternehmen vertrauen auf uns:</h2>
        <img class="landing-event-img-second" style="margin-top:20px;" alt=""
             src="http://promx.net/wp-content/themes/prorm/images/logos.jpg"/>
    </div>


    <div class="form-landing-event-mobile-two">
        <div class="form-landing-event-mobile-two-inner">
            <?php echo do_shortcode('[form name=business]'); ?>
        </div>
    </div>

    <center><h2 class="landing-event-bottom" style="font-weight:300;">Wir freuen uns auf das Treffen in Stuttgart!</h2>
    </center>


</div>


</body>


</html>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

<script src="<?php echo get_template_directory_uri(); ?>/js/jquery-ui-1.10.4.custom.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.cookie.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/main.js?v=1.0"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/fullpage/jquery.fullPage.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/landing-event.js"></script>
<script type="text/javascript"
        src="<?php echo get_template_directory_uri(); ?>/js/fullpage/vendors/jquery.slimscroll.min.js"></script>

<script type="text/javascript">
		var google_conversion_id = 948085569;
		var google_custom_params = window.google_tag_params;
		var google_remarketing_only = true;
	</script>
	<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js"></script>
	<noscript>
		<div style="display:inline;">
		<img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/948085569/?value=0&amp;guid=ON&amp;script=0"/>
		</div>
	</noscript>
<script type="text/javascript">


    var height = $('.form-event-main').height();
    $('.form-success-message').empty();

    $('.form-success-message').css('padding', '20px');
    $('.form-success-message').css('height', height);
    $('.form-success-message').
        prepend('<center><img style="width:50%;" class="ball"  src="http://promx.net/wp-content/themes/prorm/images/mail-massenge.png"><br><p class="succes-p success-one" style="color:#6c1234;font-weight:400;font-style:italic;">Vielen Dank</p><p class="succes-p success-second" style="font-weight:300;color:#000000;">für Ihre Anmeldung!</p><p  class="succes-p success-second" style="font-weight:300;color:#000000;">Wir werden so bald</p><p  class="succes-p success-third" style="font-weight:300;color:#000000;">wie möglich Kontakt</p><p class="succes-p success-third" style="font-weight:300;color:#000000;">mit Ihnen aufnehmen</p></center>');
    if ($('.form-success-message').css('display') == 'block') {

        $('.landing-form-event-first').css('float', 'right');
        $('.landing-form-event-first').css('right', '-20%');
        $('.landing-form-event-first').css('top', '5%');
        $('.landing-form-event-first').css('width', '35%');
        $('.landing-form-event-first').css('opacity', '0.9');
        $('.landing-form-event-first').css('background-color', '#f0f0f0');
        $('.form-landing-event').css('opacity', '0.9');
        $('.form-landing-event').css('background-color', '#f0f0f0');
        $('.form-landing-event').css('width', '35%');
        $('.form-landing-event').css('margin-left', '35%');


        $('.form-landing-event-mobile-two-inner').css('opacity', '0.9');
        $('.form-landing-event-mobile-two-inner').css('background-color', '#f0f0f0');
        $('.form-landing-event-mobile-two').css('background-image', 'none');

        $('.form-landing-event-mobile-two').css('padding-bottom', '0');

        $('.form-landing-event-mobile').css('opacity', '0.9');
        $('.form-landing-event-mobile').css('background-color', '#f0f0f0');
        $('.form-landing-event-mobile').css('background-image', 'none');
        $('.form-landing-event-mobile').css('margin-top', '80%');


        $('succes-p').css('margin-bottom', '0px');

        if (screen.height >= 1024) {
            $('.success-one').css('font-size', '35px');
            $('.success-second').css('font-size', '27px');
            $('.success-third').css('font-size', '24px');
        }

        if (screen.height == 1024) {
            $('.landing-form-event-first').css('right', '-1%');
        }

        if (screen.height == 1050) {
            $('.landing-form-event-first').css('right', '-2%');
        }

        if (screen.height >= 720 && screen.height <= 960) {
            $('.landing-form-event-first').css('top', '10%');
            $('.landing-form-event-first').css('width', '25%');
            $('.form-landing-event').css('width', '25%');
            $('.form-landing-event').css('margin-left', '40%');
            $('.success-one').css('font-size', '25px');
            $('.success-second').css('font-size', '17px');
            $('.success-third').css('font-size', '14px');
            $('.landing-form-event-first').css('right', '-2%');
            $('.form-landing-event-mobile').css('margin-top', '80%');


        }


        if (screen.width == 320) {
            $('.form-landing-event-mobile').css('margin-top', '150%');

        }


        else if (screen.width > 320 && screen.width < 460) {
            //  alert('a');
            $('.form-landing-event-mobile').css('margin-top', '130%');

        }

        else if (screen.width >= 460 && screen.width <= 480) {
            $('.form-landing-event-mobile').css('margin-top', '100%');

        }

        else if (screen.width > 480 && screen.width <= 599) {
            $('.form-landing-event-mobile').css('margin-top', '60%');

        }

        else if (screen.width >= 600 && screen.width <= 604) {
            $('.form-landing-event-mobile').css('margin-top', '90%');

        }

        else if (screen.width >= 605 && screen.width <= 640) {
            $('.form-landing-event-mobile').css('margin-top', '70%');

        }

        else if (screen.width >= 769 && screen.width <= 960) {
            $('.form-landing-event-mobile').css('margin-top', '60%');

        }

        else if (screen.width == 768) {
            $('.form-landing-event-mobile').css('margin-top', '100%');

        }


    }


    if (screen.height <= 900 && screen.width > 480) {

        $('.landing-event-bottom').css('margin-top', '30px');
        $('.landing-event-img-first').css('height', '100px');
        $('.landing-event-img-second').css('height', '150px');
        $('.landing-event-img-second').css('margin-top', '0px');
        $('.head-block-first').css('margin-top', '10px');
        $('.head-block-second').css('margin-top', '20px');
        $('.head-block-third').css('margin-top', '0px');


    }


</script>


