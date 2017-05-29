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

    if (function_exists('yoast_analytics')) {

        yoast_analytics();

    }

    ?>
    <!-- Yandex.Metrika counter -->
    <script src="<?php echo get_template_directory_uri(); ?>/js/metrika.js">

    </script>

    <noscript>
        <div><img src="https://mc.yandex.ru/watch/32043416?ut=noindex" style="position:absolute; left:-9999px;" alt=""/>
        </div>
    </noscript>
    <!-- /Yandex.Metrika counter -->

    <link href="<?php echo ProRMTheme::url(); ?>/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo ProRMTheme::url(); ?>/css/style.compiled.css" rel="stylesheet">
    <link href="<?php echo ProRMTheme::url(); ?>/css/jquery-ui-1.10.4.custom.min.css" rel="stylesheet">
    <link href="<?php echo ProRMTheme::url(); ?>/css/traviata.css" rel="stylesheet">

</head>

<body class="landing-event-body">

<?php $dataCurLang = pll_current_language('slug'); ?>
<script>
    var __sliderInterval = <?php echo $sliderInterval; ?>;
    var __sliderChangingSpeed = <?php echo $sliderChangingSpeed; ?>;
</script>

<div class="container-fluid visible-md visible-lg">

<div class="cebit-head" id="first-slide">

    <div class="row nav-cebit">
        <div class="col-sm-2 col-sm-push-1 first-block">
            <a href="<?php echo esc_url(site_url()); ?>">
                <img
                    src="<?php echo ProRMTheme::url(); ?>/images/logo-proMX-new.png"
                    alt="<?php bloginfo('name'); ?>">
            </a>

        </div>
    </div>

    <div class="row">

        <div class="col-sm-6 col-sm-push-1 img-first">
            <img class="umbrella"
                 src="<?php echo ProRMTheme::url(); ?>/images/cebit/Umbrella.png"
                 alt="<?php bloginfo('name'); ?>">
        </div>

        <div class="col-sm-2 col-sm-pull-1 img-second">
            <img
                src="<?php echo ProRMTheme::url(); ?>/images/cebit/CeBIT.jpg"
                alt="<?php bloginfo('name'); ?>">
        </div>


         <div class="col-sm-12" id="second-block">
           
                 <div class="head-text" style="margin-left:35%;">Erleben Sie die neue digitale Welt des Versicherungsvertriebs<br>
                    mit CRM-Plattformen der nächsten Generation
                </div>
                 
                <?php echo do_shortcode('[form name=ceb]'); ?>
   
        </div>

    </div>

    <div class="col-sm-12" id="third-block">
        <a href="#second-slide"><img
                src="<?php echo ProRMTheme::url(); ?>/images/cebit/down.png"
                alt="<?php bloginfo('name'); ?>"></a>
    </div>

</div>

<div class="row" id="second-slide" style="padding-bottom: 80px;">

    <div>
        <p class="first-par">proMX – Ihr Katalysator für die Transformation in eine neue digitale Welt</p>
        <div class="col-sm-4">
            <img style="padding-left: 50px;"
                src="<?php echo ProRMTheme::url(); ?>/images/cebit/umb.png"
                alt="<?php bloginfo('name'); ?>">
            <div class="inner-block-second">
                <p class="inner-block-par" style="padding-left: 50px;"><strong>Neue Technologien sorgen für mehr<br>
                        Umsatz im Versicherungsgeschäft </strong></p>

                <p class="inner-block-par-second" style="padding-left: 50px;">Erleben Sie, wie wir Sie mit intelligenter Software,
                    neuen Cloud-Services und optimierten Prozessen unterstützen, selbst Teil
                    des digitalen Wirtschaftswunders zu werden. Wir entwickeln gemeinsam mit
                    unseren Experten maßgeschneiderte Unternehmenslösungen für Versicherungen,
                    Vermittler und Makler und beraten Sie persönlich vor Ort. Vereinbaren Sie gleich einen Termin mit uns!</p>
            </div>
        </div>

        <div class="col-sm-4">
            <img
                src="<?php echo ProRMTheme::url(); ?>/images/cebit/arrow.png"
                alt="<?php bloginfo('name'); ?>">
            <div class="inner-block-second">
                <p class="inner-block-par"><strong>Die Versicherungsbranche<br>
                        verändert sich</strong></p>

                <p class="inner-block-par-middle">Erleben Sie, wie Sie dort Neues entdecken, wohin
                    andere bereits Dutzende Male geschaut haben. Entdecken Sie, wie aus Inspirationen
                    neue Geschäftsmodelle werden. Und erfinden und finden Sie neue Wertschöpfungs-
                    und Geschäftsprozesse, von denen Sie langfristig profitieren.</p>
            </div>
        </div>

        <div class="col-sm-4">
            <img style="padding-right: 50px;"
                src="<?php echo ProRMTheme::url(); ?>/images/cebit/hends.png"
                alt="<?php bloginfo('name'); ?>">

            <div class="inner-block-second">
                <p class="inner-block-par" style="padding-right: 50px;"><strong>Pragmatische<br>
                        Umsetzung planen</strong></p>

                <p class="inner-block-par-second" style="padding-right: 50px;">Erleben Sie, wie unsere Experten standardisierte
                    Services mit individuellen Projektansätzen und branchenführenden
                    Applikationen vereinen; wie wir Entwicklungskapazitäten im Cloud-Umfeld
                    und integrierte Beratungsleistungen mit Branchen-Know-how kombinieren,
                    um präzise Ergebnisse für unsere Kunden zu erzielen.</p>
            </div>
        </div>

        <div class="col-sm-12" style="margin-top:50px;">
            <a href="#first-slide" class="link-first" onclick="_gaq.push(['_trackEvent', 'Traviata', 'Termin vereinbaren', 'DE'])">
                <span><?php _e('Termin vereinbaren', ProRMTheme::TEXTDOMAIN) ?></span>
            </a>
        </div>

    </div>

</div>
<div class="col-sm-12">
    <div style="padding: 50px;">
        <p>Ganzheitliche CRM-Lösungen sind aus dem modernen Versicherungsvertrieb
            eigentlich nicht mehr wegzudenken. Die Plattformen ermöglichen dem
            Vertrieb einen schnellen, unkomplizierten und ortsunabhängigen Zugriff
            auf alle kundenbezogenen Daten. Und richtig gute Plattformen ermöglichen
            darüber hinaus eine umfassende Integration in den Produktkatalog,
            Analysemöglichkeiten und unterstützende Leistungen im Kundenlebenszyklus.</p>

        <p style="margin-top:30px;">Jetzt werden Sie als Versicherungsexperte, erfahrener Seller oder Makler
            im Kundenservice sicherlich denken, „das ist ja ein alter Hut!“ und „das machen wir schon lange“.
            Und wir von proMX, nachweislich die Experten im Bereich CRM, antworten Ihnen: Ja, Sie haben recht.
            CRM für den Versicherungsvertrieb ist ein alter Hut. Allerdings gilt zu beachten: Zurzeit findet ein
            klar erkennbarer Generationswechsel von klassischen CRM-Lösungen hin zu cloudbasierten CRM-Plattformen,
            xRM und intelligenten CRM-Lösungen statt. Gefragt sind flexible, mobile, übergreifend nutzbare und
            vernetzte Systeme. Systeme, die Sie von Business-Intelligence profitieren lassen, die Ihnen eine integrierte
            Verarbeitung von Versicherungsverträgen ermöglicht und die Sie automatisiert im Kundenservice unterstützen. </p>
    </div>
</div>
        <div class="col-sm-12" style="background-color: #fafafa;color:#000000;text-align: center;padding-bottom:80px;">

            <div>
                <p style="color:#0179d8;font-size:40px;padding:50px 50px 30px 50px">proMX präsentiert auf der diesjährigen CeBIT gemeinsam mit RealDolmen
                    die CRM-Plattform der nächsten Generation für den Versicherungsvertrieb: Travi@ta </p>
                <div class="col-sm-4">

                    <div>
                        <p style="font-size: 25px;color:#0179d8;"><strong>Travi@ta baut  </strong></p>

                        <p>Travi@ta baut auf der Plattform Microsoft Dynamics CRM auf und bietet als einzige
                            CRM-Lösung die Integration der Microsoft Communication Tools wie SharePoint,
                            Skype for Business oder Office.</p>
                    </div>
                </div>

                <div class="col-sm-4">

                    <div>
                        <p style="font-size: 25px;color:#0179d8;"><strong>Travi@ta ermöglicht </strong></p>

                        <p>Travi@ta ermöglicht Ihnen unter anderem personalisierte Betrachtungen
                            durch Gruppierung jeder gewünschten Information, unterstützt Sie
                            im Kundenservice – inklusive Routenplan, Dokumentenmanagement und
                            regelbasierten automatisierten Prozessen–, identifiziert High-Value-Kunden,
                            segmentiert den Kundenstamm und erstellt umfassende Reports.</p>
                    </div>
                </div>

                <div class="col-sm-4">


                    <div>
                        <p style="font-size: 25px;color:#0179d8;"><strong>Travi@ta erleichtert</strong></p>

                        <p>das Managen des Produktkatalogs, bietet einen Raten-Simulator,
                            verschickt Einladungen zu Events oder Terminen im Rahmen von
                            Kampagnen und hilft Ihnen, die Kundenkartei zu pflegen.</p>
                    </div>
                </div>

                <div class="col-sm-12" style="margin-top:50px;">
                    <a href="#first-slide" class="link-first"  style="background-color: #0179d8" onclick="_gaq.push(['_trackEvent', 'Traviata', 'Termin vereinbaren', 'DE'])">
                        <span><?php _e('Termin vereinbaren', ProRMTheme::TEXTDOMAIN) ?></span>
                    </a>
                </div>

            </div>



        </div>
<div class="col-sm-12">
        <p style="padding: 50px;">Weitere zahlreiche Highlights für erfolgreiches Beziehungsmanagement,
            State-of-the-Art-Business-Prozesse der Versicherungswirtschaft,
            Funktionen zum Kontaktmanagement und dem Aufbau eines Distributionsnetzwerks zeigen
            wir Ihnen gerne auf der CeBIT am Stand C31 in Halle 4. Vereinbaren Sie schon jetzt
            einen Termin mit uns. Erfahren Sie vor Ort alles über die aktuellen Trends rund um
            xRM, CRM und besonders Microsoft Dynamics CRM für die Versicherungsbranche. </p>
</div>




<div class="col-sm-12" id="row-highlights">
    <div>
        <p id="par-highlights">Highlights</p>
    </div>

    <div class="col-sm-9 highlights">

        <div style="margin-bottom: 30px;"><img style="margin-right: 20px;"
                                               width="60" src="<?php echo ProRMTheme::url(); ?>/images/cebit/men.png"
                                               alt="<?php bloginfo('name'); ?>"><strong>Toptrends aus dem Bereich
                Customer Relationship Management praxisnah präsentiert</strong></div>

        <div style="margin-bottom: 30px;"><img width="60" style="margin-right: 20px;"
                                               src="<?php echo ProRMTheme::url(); ?>/images/cebit/clouds.png"
                                               alt="<?php bloginfo('name'); ?>">
            <strong>Integrierte Cloud-Lösungen verständlich visualisiert </strong></div>

        <div><img width="60" style="margin-right: 20px;"
                  src="<?php echo ProRMTheme::url(); ?>/images/cebit/comp.png"
                  alt="<?php bloginfo('name'); ?>">
            <strong>Transformation von analogen Prozessen in digitale Arbeitsabläufe erlebbar vorgeführt </strong></div>
    </div>
</div>

<div class="col-sm-12" style="text-align: center;padding-bottom:80px;">

        <img style="margin-right: 20px;"
             src="<?php echo ProRMTheme::url(); ?>/images/cebit/logos-cebit.png"
             alt="<?php bloginfo('name'); ?>">
			 
		 <a href="http://promx.net/upload/traviata_insurance_brochure.pdf" class="link-first" target="_blank" style="background-color: #0179d8;">
					<span><?php _e('Travi@ta-Lösungsbroschüre herunterladen', ProRMTheme::TEXTDOMAIN) ?></span>
				</a>



</div>

<div class="col-sm-12" style="background-color: #fafafa;padding-bottom: 20px;">

    <p style="padding: 50px 120px 70px 120px;">proMX versteht sich als Cloud-Dienstleister.
        Unsere DNA beruht auf CRM-Expertise, Branchenwissen und
        operativer Exzellenz. Wir unterstützen Sie bei der Migration oder
        der Bereitstellung von intelligenten CRM-Plattformen, die Ihren Versicherungsvertrieb
        auf eine neue, umfassende, digitale Stufe transformiert. Speziell für Unternehmen aus
        dem Finanzwesen, und hier für Versicherungen, Versicherungsvermittler und Makler, bieten
        wir integrierte Beratungsleistungen. Lernen Sie unsere drei Ansätze kennen: </p>

    <div class="col-sm-5 col-sm-push-5" style="top: -30px;color:#0179d8;position: relative">

        <div style="margin-bottom: 40px;"><img style="margin-right: 20px;"

                                               src="<?php echo ProRMTheme::url(); ?>/images/cebit/serves.png"
                                               alt="<?php bloginfo('name'); ?>"><strong>standardisierte/laufende Services</strong></div>

        <div style="margin-bottom: 40px;"><img  style="margin-right: 20px;"
                                               src="<?php echo ProRMTheme::url(); ?>/images/cebit/man-blue.png"
                                               alt="<?php bloginfo('name'); ?>">
            <strong>individuelle Projekte </strong></div>

        <div><img  style="margin-right: 20px;"
                  src="<?php echo ProRMTheme::url(); ?>/images/cebit/desk.png"
                  alt="<?php bloginfo('name'); ?>">
            <strong>App-Entwicklung</strong></div>
    </div>

</div>

<div class="col-sm-12" style="background-color:#0179d8;">
    <p style="padding:50px 100px 30px;text-align: center;font-size:40px;color:#ffffff;">Auf der Cebit 2016 finden Sie uns zusammen mit Microsoft<br>
        am Stand C31 in Halle 4. Vereinbaren Sie schon jetzt einen Termin mit uns</p>

    <div class="col-sm-6 col-sm-push-3">
        <?php echo do_shortcode('[form name=traviata-contact]'); ?>
    </div>
</div>


</div>


<div class="container visible-md visible-lg">

    <div class="col-sm-12" style="text-align: center;">
        <p style="padding:50px 0px 30px;text-align: center;font-size:40px;color:#000000;">proMX-Auszeichnungen</p>

        <div style="border-top:2px solid #0179d8;padding-top:50px;"><img
                src="<?php echo ProRMTheme::url(); ?>/images/cebit/logos.png"
                alt="<?php bloginfo('name'); ?>"></div>

        <div style="margin-top:50px;">
            <a href="#first-slide"><img
                    src="<?php echo ProRMTheme::url(); ?>/images/cebit/Up.png"
                    alt="<?php bloginfo('name'); ?>"></a>
        </div>
    </div>

    <div class="col-sm-12">
        <div class="col-sm-5" style="margin-left:36%;margin-top:50px;margin-bottom:50px;">
            <div>
                <a href="https://www.facebook.com/promx.de?ref=bookmarks" id="first-social-link" target="_blank">
                    <img width="40" height="40"
                         src="http://prorm.webdev.acceptic.com/wp-content/themes/prorm/images/cebit/fb.jpg">
                </a>
                <a href="https://twitter.com/proMX_CRMexpert" class="social-link" target="_blank">
                    <img width="40" height="40"
                         src="http://prorm.webdev.acceptic.com/wp-content/themes/prorm/images/cebit/Twit.jpg">
                </a>
                <a href="https://www.youtube.com/channel/UCT1jnwo5wAsb4SJ-s8YFsag" class="social-link" target="_blank">
                    <img width="40" height="40"
                         src="http://prorm.webdev.acceptic.com/wp-content/themes/prorm/images/cebit/YT.jpg">
                </a>
                <a href="https://www.linkedin.com/company/promx-gmbh" class="social-link" target="_blank">
                    <img width="40" height="40"
                         src="http://prorm.webdev.acceptic.com/wp-content/themes/prorm/images/cebit/link.jpg">
                </a>
            </div>
        </div>

    </div>

    <div style="text-align: center;color:#000000;margin-top:50px;">
        ©2016 proMX GmbH
    </div>


</div>

<div class="container-fluid visible-xs visible-sm">

<div class="col-sm-12">
<div class="row nav-cebit" >
    <div class="col-xs-push-1 first-block">
        <a style="margin-left:50px;" href="<?php echo esc_url(site_url()); ?>">
            <img
                src="<?php echo ProRMTheme::url(); ?>/images/logo-proMX-new.png"
                alt="<?php bloginfo('name'); ?>">
        </a>

    </div>
</div>

<div class="row">
    <div class="col-xs-6" style="float:right;margin-top:20px;">
        <img
            src="<?php echo ProRMTheme::url(); ?>/images/cebit/CeBIT.jpg"
            alt="<?php bloginfo('name'); ?>">
    </div>



    <div class="col-xs-12 col-xs-pull-3">
        <img class="umbrella"
             src="<?php echo ProRMTheme::url(); ?>/images/cebit/Umbrella.png"
             alt="<?php bloginfo('name'); ?>">
    </div>

</div>
<div class="row">
    <div class="col-xs-8 visible-xs" style="margin-top: -120px;margin-left: 32%;">Erleben Sie die neue digitale<br>Welt des Versicherungsdienstleisters<br>
        mit CRM-Plattformen der nächsten Generation

    </div>
	
	<div class="visible-sm" style="margin-top: -35%;margin-left: 32%;font-size:25px;">Erleben Sie die neue digitale<br>Welt des Versicherungsdienstleisters<br>
        mit CRM-Plattformen der nächsten Generation
    </div>

    <div class="visible-xs" style="margin-left:30%;margin-top:15%;">
        <a href="#form-mobile"class="second-link" onclick="_gaq.push(['_trackEvent', 'Traviata', 'Termin vereinbaren', 'DE'])">
            <span><?php _e('Termin vereinbaren', ProRMTheme::TEXTDOMAIN) ?></span>
        </a>
    </div>
	
	<div class="visible-sm" style="margin-left:45%;margin-top:5%;">
        <a href="#form-mobile"class="second-link" onclick="_gaq.push(['_trackEvent', 'Traviata', 'Termin vereinbaren', 'DE'])">
            <span><?php _e('Termin vereinbaren', ProRMTheme::TEXTDOMAIN) ?></span>
        </a>
    </div>

</div>

<div class="row" style="text-align: center;margin-top:50px;">
    <div style="margin-bottom: 50px;">

        <a href="#second-slide" ><img
                src="<?php echo ProRMTheme::url(); ?>/images/cebit/down-mob.png"
                alt="<?php bloginfo('name'); ?>"></a>
    </div>
    <div class="col-xs-12" id="form-mobile" style="background-color:#fafafa;">
        <?php echo do_shortcode('[form name=traviata-mobile]'); ?>
    </div>

</div>

<div class="row" id="second-slide" style="margin-right:-15px;">

    <div>
        <p class="first-par" style="margin: 50px 0px 50px;font-size:25px;top:0px;color: #ffffff;">proMX – Ihr Katalysator für die Transformation in eine neue digitale Welt</p>
        <div class="col-sm-4 col-xs-12" style="margin-top: 50px;">
            <img
                src="<?php echo ProRMTheme::url(); ?>/images/cebit/umb.png"
                alt="<?php bloginfo('name'); ?>">
            <div class="inner-block-second">
                <p class="inner-block-par"><strong>Neue Technologien sorgen für mehr
                        Umsatz im Versicherungsgeschäft</strong></p>

                <p class="inner-block-par-second">Erleben Sie, wie wir Sie mit intelligenter Software,
                    neuen Cloud-Services und optimierten Prozessen unterstützen, selbst Teil
                    des digitalen Wirtschaftswunders zu werden. Wir entwickeln gemeinsam mit
                    unseren Experten maßgeschneiderte Unternehmenslösungen für Versicherungen,
                    Vermittler und Makler und beraten Sie persönlich vor Ort. Vereinbaren Sie gleich einen Termin mit uns!</p>
            </div>
        </div>

        <div class="col-sm-4 col-xs-12" style="margin-top:50px;">
            <img
                src="<?php echo ProRMTheme::url(); ?>/images/cebit/arrow.png"
                alt="<?php bloginfo('name'); ?>">
            <div class="inner-block-second">
                <p class="inner-block-par"><strong>Die Versicherungsbranche<br>
                        verändert sich</strong></p>

                <p class="inner-block-par-middle">Erleben Sie, wie Sie dort Neues entdecken, wohin
                    andere bereits Dutzende Male geschaut haben. Entdecken Sie, wie aus Inspirationen
                    neue Geschäftsmodelle werden. Und erfinden und finden Sie neue Wertschöpfungs-
                    und Geschäftsprozesse, von denen Sie langfristig profitieren.</p>
            </div>
        </div>

        <div class="col-sm-4 col-xs-12" style="margin-top:50px;">
            <img
                src="<?php echo ProRMTheme::url(); ?>/images/cebit/hends.png"
                alt="<?php bloginfo('name'); ?>">

            <div class="inner-block-second">
                <p class="inner-block-par"><strong>Pragmatische<br>
                        Umsetzung planen</strong></p>

                <p class="inner-block-par-second">Erleben Sie, wie unsere Experten standardisierte
                    Services mit individuellen Projektansätzen und branchenführenden
                    Applikationen vereinen; wie wir Entwicklungskapazitäten im Cloud-Umfeld
                    und integrierte Beratungsleistungen mit Branchen-Know-how kombinieren,
                    um präzise Ergebnisse für unsere Kunden zu erzielen..</p>
            </div>
        </div>

        <div class="col-sm-12 col-xs-12" style="margin-top:50px;">
            <a href="#form-mobile" class="link-first" onclick="_gaq.push(['_trackEvent', 'Traviata', 'Termin vereinbaren', 'DE'])">
                <span><?php _e('Termin vereinbaren', ProRMTheme::TEXTDOMAIN) ?></span>
            </a>
        </div>

    </div>

</div>

<div class="row" style="padding:60px 20px 30px;text-align: center">
    <p>Ganzheitliche CRM-Lösungen sind aus dem modernen Versicherungsvertrieb
            eigentlich nicht mehr wegzudenken. Die Plattformen ermöglichen dem
            Vertrieb einen schnellen, unkomplizierten und ortsunabhängigen Zugriff
            auf alle kundenbezogenen Daten. Und richtig gute Plattformen ermöglichen
            darüber hinaus eine umfassende Integration in den Produktkatalog,
            Analysemöglichkeiten und unterstützende Leistungen im Kundenlebenszyklus.</p>

    <div class="visible" style="display: none;">
        <p style="margin-top:30px;">Jetzt werden Sie als Versicherungsexperte, erfahrener Seller oder Makler
            im Kundenservice sicherlich denken, „das ist ja ein alter Hut!“ und „das machen wir schon lange“.
            Und wir von proMX, nachweislich die Experten im Bereich CRM, antworten Ihnen: Ja, Sie haben recht.
            CRM für den Versicherungsvertrieb ist ein alter Hut. Allerdings gilt zu beachten: Zurzeit findet ein
            klar erkennbarer Generationswechsel von klassischen CRM-Lösungen hin zu cloudbasierten CRM-Plattformen,
            xRM und intelligenten CRM-Lösungen statt. Gefragt sind flexible, mobile, übergreifend nutzbare und
            vernetzte Systeme. Systeme, die Sie von Business-Intelligence profitieren lassen, die Ihnen eine integrierte
            Verarbeitung von Versicherungsverträgen ermöglicht und die Sie automatisiert im Kundenservice unterstützen. </p>

        <p style="margin-top:30px;">Weitere zahlreiche Highlights für erfolgreiches Beziehungsmanagement,
            State-of-the-Art-Business-Prozesse der Versicherungswirtschaft,
            Funktionen zum Kontaktmanagement und dem Aufbau eines Distributionsnetzwerks zeigen
            wir Ihnen gerne auf der CeBIT am Stand C31 in Halle 4. Vereinbaren Sie schon jetzt
            einen Termin mit uns. Erfahren Sie vor Ort alles über die aktuellen Trends rund um
            xRM, CRM und besonders Microsoft Dynamics CRM für die Versicherungsbranche. </p>
    </div>

    <div class="mehr-text" style="color:#428fdd;">Mehr</div>
    <div class="mehr-button"  style="margin-bottom: 50px;margin-top:20px;">

        <a><img class="mehr-img"
                src="<?php echo ProRMTheme::url(); ?>/images/cebit/cebit-mob-down.png"
                alt="<?php bloginfo('name'); ?>"></a>
    </div>
</div>

<div class="row" style="background-color: #fafafa;color:#000000;text-align: center;padding-bottom:80px;">

    <div>
        <p style="color:#0179d8;font-size:25px;padding:50px 50px 30px 50px">proMX präsentiert auf der diesjährigen CeBIT gemeinsam mit RealDolmen
            die CRM-Plattform der nächsten Generation für den Versicherungsvertrieb: Travi@ta </p>
        <div class="col-sm-12">

            <div>
                <p style="font-size: 25px;color:#0179d8;"><strong>Travi@ta baut  </strong></p>

                <p>Travi@ta baut auf der Plattform Microsoft Dynamics CRM auf und bietet als einzige
                    CRM-Lösung die Integration der Microsoft Communication Tools wie SharePoint,
                    Skype for Business oder Office.</p>
            </div>
        </div>

        <div class="col-sm-12">

            <div>
                <p style="font-size: 25px;color:#0179d8;"><strong>Travi@ta ermöglicht </strong></p>

                <p>Travi@ta ermöglicht Ihnen unter anderem personalisierte Betrachtungen
                    durch Gruppierung jeder gewünschten Information, unterstützt Sie
                    im Kundenservice – inklusive Routenplan, Dokumentenmanagement und
                    regelbasierten automatisierten Prozessen–, identifiziert High-Value-Kunden,
                    segmentiert den Kundenstamm und erstellt umfassende Reports.</p>
            </div>
        </div>

        <div class="col-sm-12">


            <div>
                <p style="font-size: 25px;color:#0179d8;"><strong>Travi@ta erleichtert</strong></p>

                <p>das Managen des Produktkatalogs, bietet einen Raten-Simulator,
                    verschickt Einladungen zu Events oder Terminen im Rahmen von
                    Kampagnen und hilft Ihnen, die Kundenkartei zu pflegen.</p>
            </div>
        </div>

        <div class="col-sm-12" style="margin-top:50px;">
            <a href="#form-mobile" class="link-first"  style="background-color: #0179d8" onclick="_gaq.push(['_trackEvent', 'Traviata', 'Termin vereinbaren', 'DE'])">
                <span><?php _e('Termin vereinbaren', ProRMTheme::TEXTDOMAIN) ?></span>
            </a>
        </div>

    </div>



</div>



<div class="row" style="background-color: #0179d8;">
    <div class="col-sm-12" style="position: relative;text-align: center;color:#ffffff;padding: 10px 0px 70px;">
        <div>
            <p id="par-highlights">Highlights</p>
        </div>


        <div style="margin-bottom: 30px;"><img
                width="60" src="<?php echo ProRMTheme::url(); ?>/images/cebit/men.png"
                alt="<?php bloginfo('name'); ?>"><div style="margin-top: 30px;"><strong>Toptrends aus dem Bereich
                    Customer Relationship Management praxisnah präsentiert</strong></div>
        </div>

        <div style="margin-bottom: 30px;"><img width="60"
                                               src="<?php echo ProRMTheme::url(); ?>/images/cebit/clouds.png"
                                               alt="<?php bloginfo('name'); ?>"><div style="margin-top: 30px">
                <strong>Integrierte Cloud-Lösungen verständlich visualisiert </strong></div>
        </div>

        <div><img width="60"
                  src="<?php echo ProRMTheme::url(); ?>/images/cebit/comp.png"
                  alt="<?php bloginfo('name'); ?>"><div style="margin-top: 30px">
                <strong>Transformation von analogen Prozessen in digitale Arbeitsabläufe erlebbar vorgeführt </strong></div>
        </div>
    </div>

</div>

<div class="row" style="text-align: center">
    <img
        src="<?php echo ProRMTheme::url(); ?>/images/cebit/cebit-logo-mob.jpg"
        alt="<?php bloginfo('name'); ?>">

    <a href="#" class="link-first" target="_blank" onclick="_gaq.push(['_trackEvent', 'Traviata', 'Termin vereinbaren', 'DE'])">
        <span><?php _e('Termin vereinbaren', ProRMTheme::TEXTDOMAIN) ?></span>
    </a>
	

</div>

<div class="row" style="text-align: center;margin-top:50px;">
<a href="http://promx.net/upload/traviata_insurance_brochure.pdf" class="link-first" target="_blank" style="background-color: #0179d8;padding: 15px;font-size: 16px;">
					<span><?php _e('Travi@ta-Lösungsbroschüre herunterladen', ProRMTheme::TEXTDOMAIN) ?></span>
	</a>
</div>

<div class="row" style="background-color: #fafafa;padding-bottom: 70px;margin-right:-15px;margin-top:70px;">

    <p style="padding:60px 20px 30px 40px;">proMX versteht sich als Cloud-Dienstleister.
        Unsere DNA beruht auf CRM-Expertise, Branchenwissen und
        operativer Exzellenz. Wir unterstützen Sie bei der Migration oder
        der Bereitstellung von intelligenten CRM-Plattformen, die Ihren Versicherungsvertrieb
        auf eine neue, umfassende, digitale Stufe transformiert. Speziell für Unternehmen aus
        dem Finanzwesen, und hier für Versicherungen, Versicherungsvermittler und Makler, bieten
        wir integrierte Beratungsleistungen. Lernen Sie unsere drei Ansätze kennen:</p>

    <div style="color:#0179d8;position: relative;padding-left:40px;">

        <div><img style="margin-right: 20px;float:left;"

                  src="<?php echo ProRMTheme::url(); ?>/images/cebit/serves.png"
                  alt="<?php bloginfo('name'); ?>"><div><strong>standardisierte/laufende</br>
                    Services</strong></div></div>

        <div style="margin-bottom: 40px;position: relative;top:40px;"><img  style="margin-right: 20px;"
                                                                            src="<?php echo ProRMTheme::url(); ?>/images/cebit/man-blue.png"
                                                                            alt="<?php bloginfo('name'); ?>">
            <strong>individuelle Projekte</strong></div>

        <div style="position: relative;top:40px;"><img  style="margin-right: 20px;"
                                                        src="<?php echo ProRMTheme::url(); ?>/images/cebit/desk.png"
                                                        alt="<?php bloginfo('name'); ?>">
            <strong>App-Entwicklung</strong></div>
    </div>

</div>

<div class="row" style="text-align: center;background-color:#0179d8;">
    <p style="padding:50px 0px 0px;text-align: center;font-size:25px;color:#ffffff;">Auf der Cebit 2016 finden Sie uns zusammen mit Microsoft<br>
        am Stand C31 in Halle 4. Vereinbaren Sie schon jetzt einen Termin mit uns</p>
    <?php echo do_shortcode('[form name=traviata-contacts]'); ?>
</div>








</div>
</div>

</body>
</html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

<script src="<?php echo get_template_directory_uri(); ?>/js/jquery-ui-1.10.4.custom.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.cookie.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/main.js?v=1.0"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/traviata.js"></script>