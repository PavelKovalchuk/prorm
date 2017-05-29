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
    <link href="<?php echo ProRMTheme::url(); ?>/css/hhp.css" rel="stylesheet">


</head>

<body id="hhp">

<?php $dataCurLang = pll_current_language('slug'); ?>
<script>
    var __sliderInterval = <?php echo $sliderInterval; ?>;
    var __sliderChangingSpeed = <?php echo $sliderChangingSpeed; ?>;
</script>

    <div class="container-fluid">
        <div class="row">
            <div class="visible-md visible-lg">
            <div class="col-sm-12">
                <div class="row-hhp" id="first">
                    <div class="col-sm-1 col-sm-push-1 first-block" style="padding:7px 0px 10px;">
                        <a href="<?php echo esc_url(site_url()); ?>">
                            <img
                                src="<?php echo ProRMTheme::url(); ?>/images/logo-proMX-new.png"
                                alt="<?php bloginfo('name'); ?>">
                        </a>
                    </div>
                        <div class="col-sm-2 col-sm-push-1 first-block" style="padding:7px 0px 10px;margin-left: 20px;">
                        <img height="45"
                            src="<?php echo ProRMTheme::url(); ?>/images/cebit-img/hhp.png"
                            alt="<?php bloginfo('name'); ?>">


                    </div>
                </div>
            </div>

            <div class="col-sm-12 second-block" style="background-image: url(http://promx.net/wp-content/themes/prorm/images/cebit-img/bg-Cebit.jpg);height:195px;">
                <div class="col-sm-4 col-sm-push-2" style="margin-top:70px;">
                    <img
                        src="<?php echo ProRMTheme::url(); ?>/images/cebit-img/logo-cebit-two.png"
                        alt="<?php bloginfo('name'); ?>">
                </div>
                <div class="col-sm-3 col-sm-push-2" style="background-color: #f2f2f3;font-size: 25px;text-align: center;padding: 40px 30px 30px 35px;color:#027bd8;font-weight: 500;margin-left:50px;height:195px;">
                    <p>Besuchen Sie uns auf<br>
                        dem Microsoft Stand<br>
                        C 31 in Halle 4!</p>
                </div>
                <div class="col-sm-2 col-sm-push-2" style="margin: 70px 50px 70px 20px;">
                    <img
                        src="<?php echo ProRMTheme::url(); ?>/images/cebit-img/logo-Microsoft.png"
                        alt="<?php bloginfo('name'); ?>">
                </div>
            </div>

            <div class="col-sm-12" style="text-align: center;">
                <p style="font-size: 50px;margin-top:50px;color:#167eab;">Erleben Sie die Transformation in eine digitale Welt<br>
                    und profitieren Sie von den Erfahrungen von proMX</p>
                <div style="margin-top:50px;">
                        <?php echo do_shortcode('[form name=cebitf]'); ?>
                </div>
                <div class="col-sm-12">
                    <a href="#second-slide"><img
                            src="<?php echo ProRMTheme::url(); ?>/images/cebit-img/buttom-dawn.png"
                            alt="<?php bloginfo('name'); ?>"></a>
                </div>
                <img style="margin-top:-200px;"
                    src="<?php echo ProRMTheme::url(); ?>/images/cebit-img/digital-city.png"
                    alt="<?php bloginfo('name'); ?>">



            </div>

            </div>

            <div class="visible-xs visible-sm">

                <div class="row row-hhp" style="margin-right:0px;">
                    <div class="col-xs-4 col-xs-push-1" style="padding:7px 0px 10px;">
                        <a href="<?php echo esc_url(site_url()); ?>">
                            <img
                                src="<?php echo ProRMTheme::url(); ?>/images/logo-proMX-new.png"
                                alt="<?php bloginfo('name'); ?>">
                        </a>
                    </div>
                    <div class="col-xs-5 col-xs-push-1" style="padding:7px 0px 10px;margin-left: 20px;">
                        <img height="45"
                             src="<?php echo ProRMTheme::url(); ?>/images/cebit-img/hhp.png"
                             alt="<?php bloginfo('name'); ?>">

                    </div>
                </div>

                <div class="row" style="text-align: center;background-color: #0076d6;padding: 70px 70px 110px;margin-right:0px;">
                    <img
                        src="<?php echo ProRMTheme::url(); ?>/images/cebit-img/logo-cebit-two.png"
                        alt="<?php bloginfo('name'); ?>">
                    <p style="font-size: 25px;margin-top:50px;color:#ffffff;">Erleben Sie die Transformation in eine digitale Welt<br>
                        und profitieren Sie von den Erfahrungen von proMX</p>
                    <a href="#second" class="link-first"  style="text-decoration: none;
    color: #000000;
    background-color: #eeeeee;
    padding: 9px 45px;
    font-weight: 500;
    border: none;
    position:relative;
    top:40px;" onclick="_gaq.push(['_trackEvent', 'Сebit', 'Termin vereinbaren', 'DE'])">
                        <span><?php _e('Termin vereinbaren', ProRMTheme::TEXTDOMAIN) ?></span>
                    </a>

                </div>
					<div id="second">
						<?php echo do_shortcode('[form name=cebitf-mobile]'); ?>
					</div>
                
            </div>


            <div class="col-sm-12" id="second-slide" style="background-color: #f7f7f7;padding:50px 0px 150px 0px">
                <div style="text-align: center;">
                    <p class="visible-md visible-lg" style="font-size: 50px;font-weight: 500;padding:50px;">proMX – der Katalysator für die Transformation in eine digitale Welt.</p>
                    <p class="visible-xs visible-sm" style="font-size: 25px;font-weight: 500;padding:50px;">proMX – der Katalysator für die Transformation in eine digitale Welt.</p>
                    <div class="col-sm-4 cloud-block">
                        <img style="height:80px;"
                              src="<?php echo ProRMTheme::url(); ?>/images/cebit-img/cloud.png"
                              alt="<?php bloginfo('name'); ?>">
                        <div>
                            <p style="font-size: 30px;padding: 20px;">Intelligente Cloud-Lösungen
                                erfahren</p>
                            <p>Erleben Sie, wie wir Sie mit intelligenter Software, neuen Cloud-Services und optimierten Prozessen
                                unterstützen, selbst Teil des digitalen Wirtschaftswunders zu werden. Wir entwickeln gemeinsam mit Hilfe unserer
                                Experten maßgeschneiderte Unternehmenslösungen und beraten Sie persönlich vor Ort. Vereinbaren Sie gleich einen
                                Termin mit uns!</p>
                        </div>
                    </div>
                    <div class="col-sm-4 cloud-block">
                        <img style="height:80px;"
                            src="<?php echo ProRMTheme::url(); ?>/images/cebit-img/horse.png"
                            alt="<?php bloginfo('name'); ?>">
                        <div>
                            <p style="font-size: 30px;padding: 20px;">Neue Geschäftsmodelle
                                kennenlernen</p>
                            <p>Erleben Sie, wie Sie dort Neues entdecken, wohin andere bereits
                                Dutzende Male geschaut haben. Entdecken Sie, wie aus Inspirationen
                                neue Geschäftsmodelle werden. Und erfinden und finden Sie neue
                                Wertschöpfungs- und Geschäftsprozesse, von denen Sie langfristig profitieren.</p>
                        </div>
                    </div>
                    <div class="col-sm-4 cloud-block">
                        <img style="height:80px;"
                            src="<?php echo ProRMTheme::url(); ?>/images/cebit-img/nole.png"
                            alt="<?php bloginfo('name'); ?>">
                        <div>
                            <p style="font-size: 30px;padding: 20px;">Pragmatische Umsetzung planen</p>
                            <p>Erleben Sie, wie unsere Experten standardisierte Services mit individuellen
                                Projektansätzen und branchenführenden Applikationen vereinen; wie wir Entwicklungskapazitäten
                                im Cloud-Umfeld und integrierte Beratungsleistungen mit Branchen-Know-how kombinieren,
                                um präzise Ergebnisse für unsere Kunden zu erzielen.</p>
                        </div>
                    </div>
                    <div class="col-sm-12 visible-md visible-lg"">
                    <a href="#first" class="link-first"  style="text-decoration: none;
    color: #ffffff;
    background-color: #0161ab;
    background-image: linear-gradient(to bottom, #0161ab 25%, #0179d8 100%);
    padding: 9px 45px;
    font-weight: 500;
    border: none;
    position:relative;
    top:40px;" onclick="_gaq.push(['_trackEvent', 'Сebit', 'Termin vereinbaren', 'DE'])">
                        <span><?php _e('Termin vereinbaren', ProRMTheme::TEXTDOMAIN) ?></span>
                    </a>
					</div>
					<div class="col-sm-12 visible-xs visible-sm">
					<a href="#second" class="link-first"  style="text-decoration: none;
    color: #ffffff;
    background-color: #0161ab;
    background-image: linear-gradient(to bottom, #0161ab 25%, #0179d8 100%);
    padding: 9px 45px;
    font-weight: 500;
    border: none;
    position:relative;
    top:40px;" onclick="_gaq.push(['_trackEvent', 'Сebit', 'Termin vereinbaren', 'DE'])">
                        <span><?php _e('Termin vereinbaren', ProRMTheme::TEXTDOMAIN) ?></span>
                    </a>
					</div>
					
                </div>

            </div>

            <div class="col-sm-12 text">
                <p>Analytics, Cloud und Mobile, IoT und Social Business:
                    Die aktuellen Megaentwicklungen der IT verändern die Struktur und Wertschöpfungskette
                    nahezu aller Unternehmen und Branchen. Einige Unternehmen spüren diesen Wandel bereits;
                    einige ignorieren ihn noch. Viele Unternehmenslenker reagieren erst dann auf Chancen – aber
                    auch Risiken – neuer Technologien und gesellschaftlicher Strömungen, wenn es fast schon zu spät ist.
                    Nämlich dann, wenn die eigene Wettbewerbsfähigkeit gefährdet ist.
                </p>
                <p style="margin-top: 20px;">Damit Sie nicht in die Innovations- und Transformationsfalle tappen, zeigen
                    wir von proMX auf der diesjährigen CeBIT, wie Sie mit moderner Technologie
                    Ihren täglichen Herausforderungen gerecht werden, schnell hochwertige Lösungen
                    finden und umsetzen sowie neue Geschäftsmodelle entwickeln.
                </p>
                <p style="margin-top: 20px;">proMX präsentiert auf der diesjährigen CeBIT zahlreiche Highlights
                    für erfolgreiches Beziehungsmanagement. Erfahren Sie alles über die aktuellen
                    Trends rund um xRM, CRM und besonders Microsoft Dynamics CRM im Kontext zu Azure.
                    Mit einem 360-Grad-Blick auf die neuesten Microsoft-Lösungen unterstützt proMX Kunden bei
                    der Migration oder der Bereitstellung von Cloud-Infrastrukturen, bietet Entwicklungskapazitäten
                    im Cloud-Umfeld und integrierte Beratungsleistungen. Unsere technologischen Schwerpunkte liegen
                    im Bereich Microsoft Dynamics CRM, Azure und Office 365.</p>
            </div>

            <div class="col-sm-12 highlights" style="background-color: #f7f7f7;">
                <div style="text-align: center;">
                    <p class="visible-md visible-lg" style="font-size: 50px;font-weight: 500;padding:50px;color:#000000;">Highlights</p>
                    <p class="visible-sm visible-xs" style="font-size: 50px;font-weight: 500;color:#000000;">Highlights</p>
                    <div class="col-sm-4">
                        <img style="height:80px"
                            src="<?php echo ProRMTheme::url(); ?>/images/cebit-img/man.png"
                            alt="<?php bloginfo('name'); ?>">
                        <div>

                            <p style="padding:20px;">Optrends aus dem Bereich Customer Relationship Management praxisnah präsentiert </p>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <img style="height:80px"
                            src="<?php echo ProRMTheme::url(); ?>/images/cebit-img/clouds.png"
                            alt="<?php bloginfo('name'); ?>">
                        <div>
                            <p style="padding:20px;">Integrierte Cloud-Lösungen verständlich visualisiert</p>

                        </div>
                    </div>
                    <div class="col-sm-4">
                        <img style="height:80px"
                            src="<?php echo ProRMTheme::url(); ?>/images/cebit-img/monitor.png"
                            alt="<?php bloginfo('name'); ?>">
                        <div>
                            <p style="padding:20px;">Transformation von analogen Prozessen in digitale Arbeitsabläufe erlebbar vorgeführt</p>

                        </div>
                    </div>

                </div>

            </div>

            <div class="col-sm-12 highlights" style="background-color: #009add;color:#ffffff;">
                <div style="text-align: center;">
                    <p class="visible-md visible-lg" style="font-size: 40px;padding:50px;color:#ffffff;">proMX versteht sich als Cloud-Dienstleister. Das heißt, wir unterstützen Sie bei der Migration
                        oder der Bereitstellung von Cloud-Infrastrukturen, bieten Entwicklungskapazitäten im Cloud-Umfeld
                        und integrierte Beratungsleistungen. Lernen Sie unsere drei Ansätze kennen: </p>
                    <p class="visible-xs visible-sm" style="font-size: 25px;padding:50px 20px;color:#ffffff;">proMX versteht sich als Cloud-Dienstleister. Das heißt, wir unterstützen Sie bei der Migration
                        oder der Bereitstellung von Cloud-Infrastrukturen, bieten Entwicklungskapazitäten im Cloud-Umfeld
                        und integrierte Beratungsleistungen. Lernen Sie unsere drei Ansätze kennen: </p>
                    <div class="col-sm-4">
                        <img style="height:80px"
                            src="<?php echo ProRMTheme::url(); ?>/images/cebit-img/call.png"
                            alt="<?php bloginfo('name'); ?>">
                        <div>
                            <p class="visible-md visible-lg" style="font-size: 30px;padding: 20px;">standardisierte/laufende Services</p>
                            <p class="visible-xs visible-sm" style="font-size: 25px;">standardisierte/laufende Services</p>

                        </div>
                    </div>
                    <div class="col-sm-4">
                        <img style="height:80px"
                            src="<?php echo ProRMTheme::url(); ?>/images/cebit-img/man-white.png"
                            alt="<?php bloginfo('name'); ?>">
                        <div>
                            <p class="visible-md visible-lg" style="font-size: 30px;">individuelle Projekte</p>
                            <p class="visible-xs visible-sm" style="font-size: 25px;">individuelle Projekte</p>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <img style="height:80px"
                            src="<?php echo ProRMTheme::url(); ?>/images/cebit-img/monitor-white.png"
                            alt="<?php bloginfo('name'); ?>">
                        <div>
                            <p class="visible-md visible-lg" style="font-size: 30px;padding: 20px;">App-Entwicklung</p>
                            <p  class="visible-xs visible-sm" style="font-size: 25px;padding: 20px;">individuelle Projekte</p>
                        </div>
                    </div>

                </div>

            </div>

            <div class="col-sm-12" style="text-align: center">
                <p style="font-size: 40px;font-weight: 500;padding:50px;">Live-Vorstellung</p>
                <?php echo do_shortcode('[widgetarea name = cebit]'); ?>
            </div>

            <div class="col-sm-12" style="text-align: center">
                <div class="last-header" style="font-size: 40px;font-weight: 500;"><p style="color:#000000;">Auf der Cebit 2016 finden Sie uns zusammen<br>
                    mit Microsoft am Stand C31 in Halle 4.</p>
                    <p style="color:#239acf;">Vereinbaren Sie schon jetzt einen Termin mit uns.</p></div>
                <div class="col-sm-6 col-sm-push-3">
                    <?php echo do_shortcode('[form name=cebits]'); ?>
                </div>

            </div>


        </div>
    </div>

<div class="container visible-md visible-lg" style="margin-top:50px ">

    <div class="row">
        <div class="col-sm-12">
            <div style="padding-bottom:30px;">
                <span style="font-size:25px;">proMX-Auszeichnungen</span>
            </div>
            <div style="border-top: 1px solid #cccccc;padding-top:30px;">
                <img src="<?php echo ProRMTheme::url(); ?>/images/roadshow/logos.png">
            </div>
        </div>
    </div>

    <footer class="footer" style="background-image:none;background-color:#ffffff;">

        <div class="row second-row " id="TextFooter">
            <div class="col-sm-5" style="margin-left:27%;">
                <div class="social-links" style="width:300px;margin-top:50px;">

                    <?php if (is_active_sidebar('social-icons')) { ?>
                        <?php dynamic_sidebar('social-icons'); ?>
                    <?php } ?>

                </div>
            </div>
        </div>


        <div class="row second-row" id="legalContent" style="color: #545454;">
            <div class="col-sm-8 col-sm-offset-5" style="margin-left: 43%;">
                <div class="legal-content">
                    ©2016 proMX GmbH
                </div>
            </div>

        </div>
    </footer>

</div>

</body>
</html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

<script src="<?php echo get_template_directory_uri(); ?>/js/jquery-ui-1.10.4.custom.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.cookie.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/main.js?v=1.0"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/hhp.js"></script>