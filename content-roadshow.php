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
    <link href="<?php echo ProRMTheme::url(); ?>/css/roadshow.css" rel="stylesheet">

</head>
<title>Reinvention 2016 - Roadshow mit proMX und Microsoft</title>
<body class="landing-event-body">

<?php $dataCurLang = pll_current_language('slug'); ?>
<script>
    var __sliderInterval = <?php echo $sliderInterval; ?>;
    var __sliderChangingSpeed = <?php echo $sliderChangingSpeed; ?>;
</script>



<div class="visible-md visible-lg ">
<nav class="navbar-top navbar navbar-default  roadshow-nav" role="navigation">
    <div class="container-fluid">
        <div class="row navbar-top-row">
            <div class="col-xs-8 col-md-8"> <!-- was col-md-6 for left menu | col-md-8 for top -->
                <div class="logos-holder navbar-top-item col-sm-push-1" style="border:none;">
                    <div class="logo logo-prorm">
                        <a href="<?php echo esc_url(site_url()); ?>">
                            <img style="float:left"
                                 src="<?php echo ProRMTheme::url(); ?>/images/logo-proMX-new.png"
                                 alt="<?php bloginfo('name'); ?>">
                        </a>

                    </div>

                </div>

            </div>



        </div>
    </div>
</nav>



        <div class="container-fluid container-roadshow" id="form-register">

            <div class="row">
                <div class="col-sm-12">

                    <div class="homepage-hero-module">

                        <div class="video-container">
                            <div class="row">
                                <div class="col-sm-3" style="z-index:2000;float:right;padding-right:100px;margin-top:50px;">
                                    <img style="padding-bottom:10px;" src="<?php echo ProRMTheme::url(); ?>/images/roadshow/logo-road.png" alt="proMX">
                                </div>
                            </div>
                            <div class="title-container">

                                <div class="headline">
                                    <span>Eine Roadshow, eine Konferenz oder ein Workshop?<br/>Hier erleben Sie viel mehr – eine Reinvention 2016!</span>
                                </div>
                                <div class="description">

                                    <div class="inner"><p>Microsoft und die proMX GmbH laden Sie recht herzlich dazu ein, gemeinsam mit
                                            uns herauszufinden, wie Ihr Unternehmen noch leistungsfähiger und produktiver werden kann.
                                            Unsere Gäste, herausragende Experten auf unterschiedlichen Gebieten, erzählen, wie sie die Effektivität
                                            ihrer Unternehmen um bis zu 70 Prozent steigerten und helfen Ihnen dabei, ein perfektes Geschäftsmodell zu erstellen.</p>
											<br><p>Füllen Sie bitte die Felder aus, um uns Bescheid zu geben, dass Sie an unserer Veranstaltung teilnehmen möchten.</p>

                                    </div>

                                </div>

                                <div class="row">
                                    <div class="col-sm-10" style="margin-left:9%;">
                                        <?php echo do_shortcode('[form name=roadshow]'); ?>
                                    </div>
                                </div>
								
								<div class="col-sm-12" style="margin-top:-20px;margin-bottom:30px;">
									<div><img style="margin-right:10px;" src="http://promx.net/wp-content/themes/prorm/images/roadshow/time-icon.png">Köln  |  Beginn: 30. Mai, 13.30</div>
									<div style="margin-left:35px;margin-top:10px;"><img style="margin-right:10px;"  src="http://promx.net/wp-content/themes/prorm/images/roadshow/time-icon.png">München  |  Beginn: 1. Juni , 13.30</div>
								</div>
								
								

                                <div class="row">
                                    <a href="#second-slide" class="link-slide"><img src="<?php echo ProRMTheme::url(); ?>/images/roadshow/arrow.png"></a>
                                </div>
                            </div>



                            <div class="filter"></div>
                            <video autoplay loop class="fillWidth">
                                <source src="<?php echo ProRMTheme::url(); ?>/videos/roadshow.mp4" type="video/mp4" />

                            </video>

                        </div>

                    </div>
                </div>
            </div>

        </div>



        <div style="background-color: #f7f7f7;padding: 70px 0px 130px;" id="second-slide">
            <div class="container-fluid">
                <center>
                    <div class="row" style="padding:0px 50px">
                        <div class="col-sm-12">
                            <div class="col-sm-4">
                                <img src="<?php echo ProRMTheme::url(); ?>/images/roadshow/fourth.png">
                                <p class="title-road" style="padding: 26px 0px;">Mehr als eine Konferenz </p>
                                <p>Reinvention ist eine Inspirationsquelle für Leader. Harte Fakten, Best Practice,
                                   aber auch insbesondere Denkanstöße durch Andersdenker und -macher.</p> <p>Ihr Vorteil: neue Erkenntnisse, Einblicke und Anregungen.  </p>
                            </div>
                            <div class="col-sm-4">
                                <img src="<?php echo ProRMTheme::url(); ?>/images/roadshow/fifth.png">
                                <p class="title-road" style=";padding: 23px 0px;">Mehr als ein Workshop </p>
                                <p>Reinvention bietet gemeinsames Erarbeiten von Lösungen und einen offenen Austausch in vertraulicher Atmosphäre.</p>
                                <p>Ihr Vorteil: Sparring Ihrer Ideen; Coaching für Ihre nächsten Schritte.  </p>
                            </div>
                            <div class="col-sm-4">
                                <img src="<?php echo ProRMTheme::url(); ?>/images/roadshow/sixth.png">
                                <p class="title-road" style="padding-bottom: 24px;margin-left: -30px;">Mehr als Networking  </p>
                                <p>Reinvention ermöglicht den persönlichen Erfahrungsaustausch mit Vorständen, Geschäftsführern und Kennern; ein langfristig offener Austausch.</p>
                                <p>Ihr Vorteil: Perspektivenwechsel, intensive Auseinandersetzung, andere Sichtweisen kennenlernen. </p>
                            </div>
                        </div>

                    </div>

                        <a href="http://promx.net/upload/Agenda_Roadshow.pdf" onclick="_gaq.push(['_trackEvent', 'Agenda herunterladen', 'Click', 'DE'])" target="_blank" id="agenda" style="top:50px;position:relative;margin-left:2%;">
                            <span style="color:#ffffff;"><?php _e('Agenda herunterladen', ProRMTheme::TEXTDOMAIN) ?></span>
                        </a>

                </center>
            </div>
        </div>

<div style="padding: 70px 0px 130px;">
    <div class="container-fluid">
        <center>
            <div class="row" style="padding:0px 50px">
                <div class="col-sm-12">
                    <p class="title-road" style="margin-bottom:60px;">Reinvention ist eine Veranstaltung zum Überdenken, neu Erfinden und Grenzen auflösen.
                        Innovative Geschäftsmodelle am Brennpunkt der Digitalisierung werden zu Ihrem persönlichen Ausgangspunkt für Möglichkeiten und Chancen.</p>
                    <div class="col-sm-4">
                        <img src="<?php echo ProRMTheme::url(); ?>/images/roadshow/hhpberlin.png" style="height:70px">
                        <div style="margin-top:50px;">Erfahren Sie, wie es hhpberlin – Ingenieure für Brandschutz – geschafft hat, durch branchenunübliche Ideen, in einem atemberaubenden Tempo und der Definition von IT als Betriebsmittel, neue Märkte zu erschließen; und ständig und stetig auf dem Sprung zur nächsten Innovation zu sein. </div>
                    </div>
                    <div class="col-sm-4">
                        <img src="<?php echo ProRMTheme::url(); ?>/images/roadshow/hrs.png" style="height:70px">
                        <div style="margin-top:50px;">Erleben Sie, wie sich HRS, Weltmarktführer bei Online-Hotelbuchungen, auf sich ändernde Marktanforderungen einstellt und flexibel die Customer-Touchpoints und das Kundenbeziehungsmanagement mit klar definierten Geschäftsprozessen vereint.</div>
                    </div>
                    <div class="col-sm-4">
                        <img src="<?php echo ProRMTheme::url(); ?>/images/roadshow/staufen.png" style="height:40px;margin-top:10px;">
                        <div style="margin-top:70px;">Begleiten Sie die Staufen AG auf dem Weg in die Cloud und durch die digitale Transformation. Sehen Sie, wie Customer-Business-Prozesse neu aufgesetzt und Infrastrukturen Schritt für Schritt neu gedacht werden.</div>
                    </div>
                </div>

            </div>

            <a href="http://promx.net/upload/Agenda_Roadshow.pdf" onclick="_gaq.push(['_trackEvent', 'Agenda herunterladen', 'Click', 'DE'])" target="_blank" id="agenda" style="top:50px;position:relative;margin-left:2%;">
                <span style="color:#ffffff;"><?php _e('Agenda herunterladen', ProRMTheme::TEXTDOMAIN) ?></span>
            </a>

        </center>
    </div>
</div>

<div style="background-color: #f7f7f7;padding: 70px 0px">
    <div class="container-fluid">
        <center>
            <div class="row row-road row-men">
                <div class="col-sm-12" style="margin-bottom: 50px;">
                    <p class="header-second-road" style="margin-bottom:60px;">Reinvention-Leader und -Vorreiter, die Sie auf dem Weg der Transformation und Digitalisierung unterstützen</p>

                    <div class="col-sm-4">
                        <img src="http://promx.net/wp-content/themes/prorm/images/roadshow/tenth.jpg">
                        <p class="title-road" style="margin-top:2px;">Stefan Truthän </p>
                        <p>Geschäftsführender Gesellschafter
                            <br>hhpberlin Ingenieure für Brandschutz GmbH
                            <br>Progressiver Motor und Visionär</p>
                    </div>
                    <div class="col-sm-4">
                        <img src="http://promx.net/wp-content/themes/prorm/images/roadshow/heiko.jpg">
                        <p class="title-road">Heiko Reintsch</p>
                        <p>Leiter für Product Management CS
                            <br>HRS, Hotel Reservation Service
                            <br>Impulsgeber für Innovationen und Digitalisierung</p>
                    </div>
                    <div class="col-sm-4">
                        <img src="http://promx.net/wp-content/themes/prorm/images/roadshow/man-block.jpg">
                        <p class="title-road">Lars Ziegler </p>
                        <p>Chief Operating Officer
                            <br>Staufen AG
                            <br>Umsetzer zahlreicher großartiger IT-Projekte</p>
                    </div>
                </div>
            </div>

            <div class="row row-road row-men">
                <div class="col-sm-12" style="margin-bottom: 50px;">
                    <div class="col-sm-4">
                        <img src="<?php echo ProRMTheme::url(); ?>/images/roadshow/nineth.png">
                        <p class="title-road">Peter Linke</p>
                        <p>Geschäftsführer<br>proMX GmbH<br>Inspirator und Innovator</p>
                    </div>
                    <div class="col-sm-4">
                        <img src="<?php echo ProRMTheme::url(); ?>/images/roadshow/eleventh.png">
                        <p class="title-road">Christian Geckeis</p>
                        <p>Partner Sales & Strategy Lead für Microsoft Dynamics Germany
                            <br>Microsoft Deutschland GmbH
                            <br>Microsoft-Experte und -Stratege </p>
                    </div>

                    <div class="col-sm-4">
                        <img src="http://promx.net/wp-content/themes/prorm/images/roadshow/man-who.jpg">
                        <p class="title-road">Marcel Erntges</p>
                        <p>
                            Wirtschaftsjurist
                            <br>PRW Rechtsanwälte
                            <br>Cloud-Datenschutzexperte</p>
                    </div>



                </div>
            </div>

            <a href="#form-register" class="city" onclick="_gaq.push(['_trackEvent', 'Jetzt Anmelden', 'Click', 'DE'])"  style="float:none;margin-left:3%;">
                <span style="color:#ffffff;"><?php _e('Jetzt Anmelden', ProRMTheme::TEXTDOMAIN) ?></span>
            </a>

        </center>
    </div>
</div>





        <div class="container-fluid" >
            <div class="row block-roadshow">
                <div class="col-sm-12">
                    <div class="col-sm-4">
                        <img src="http://promx.net/wp-content/themes/prorm/images/roadshow/first.png">
                    </div>
                    <div class="col-sm-8">
                        <p class="header-second-road">Denken Sie Ihre Geschäftsprozesse neu</p>
                        <p class="second-block-road">Erfinden Sie Ihre Wertschöpfungs- und Geschäftsprozesse neu! Steigern Sie Ihren Umsatz und 
						nutzen Sie neue Technologien für neue Dienstleistungen und Produkte.</p>
                    </div>
                </div>
            </div>

            <div class="row block-roadshow">
                <div class="col-sm-12">
                    <div class="col-sm-8">
                        <p class="header-second-road">Erweitern Sie Ihre Denkmuster</p>
                        <p class="second-block-road">Verändern Sie Ihre Denkweise. Wachsen Sie über sich hinaus. Denken Sie Neu und anders.</p>
                    </div>

                    <div class="col-sm-4 img-road">
                        <img src="<?php echo ProRMTheme::url(); ?>/images/roadshow/second.png">
                    </div>
                </div>
            </div>

            <div class="row block-roadshow">
                <div class="col-sm-12">
                    <div class="col-sm-4 img-road">
                        <img src="<?php echo ProRMTheme::url(); ?>/images/roadshow/third.png">
                    </div>
                    <div class="col-sm-8">
                        <p class="header-second-road">Gestalten Sie Ihre intelligente Cloud</p>
                        <p class="second-block-road">Bauen Sie sich eine neue und intelligente Geschäftsplattform in der Cloud. Verstehen Sie neue Technologien als Betriebsmittel und nicht als Kostenfaktor.</p>
                    </div>
                </div>
            </div>

            <div class="row block-roadshow">
                <div class="col-sm-12">
                    <div class="col-sm-8">
                        <p class="header-second-road">Gestalten Sie Ihre individuelle IT</p>
                        <p class="second-block-road">Profitieren Sie von Ihrem eigenen „Digitalen Wirtschaftswunder“!</p>
                    </div>

                    <div class="col-sm-4 img-road">
                        <img src="<?php echo ProRMTheme::url(); ?>/images/roadshow/business.png">
                    </div>
                </div>
            </div>

            <center><a href="http://promx.net/upload/Agenda_Roadshow.pdf" onclick="_gaq.push(['_trackEvent', 'Agenda herunterladen', 'Click', 'DE'])" target="_blank" id="agenda" style="top:50px;position:relative;margin-left:2%;">
                <span style="color:#ffffff;"><?php _e('Agenda herunterladen', ProRMTheme::TEXTDOMAIN) ?></span>
            </a></center>

        </div>






        <div class="container-fluid" style="background-color: #f7f7f7;margin-top:140px;padding-bottom: 80px;">

            <div class="row row-road row-city">
                <div class="col-sm-12">
                    <div class="col-sm-6">
                        <img src="<?php echo ProRMTheme::url(); ?>/images/roadshow/cologne.jpg">
                    </div>
                    <div class="col-sm-6">
                        <p class="header-fourth-road">30. Mai 2016, Köln</p>
                        <p style="padding: 20px 0px 40px;">Treffen Sie uns beim zweiten Teil der Reinvention 2016 im regionalen Microsoft-Büro in Köln, das eines der modernsten Bürogebäude Europas ist.
                            Erfahren Sie noch mehr von unseren Experten, die Ihnen zeigen, wie man die Möglichkeiten der IT-Technologien gewinnbringend und auf neue Art und Weise nutzen kann.  </p>
                        <div><a href="#form-register" id="city-link" class="city" onclick="_gaq.push(['_trackEvent', 'Jetzt Anmelden', 'Click', 'DE'])" style="float:none;">
                                <span style="color:#ffffff;"><?php _e('Jetzt Anmelden', ProRMTheme::TEXTDOMAIN) ?></span>
                            </a></div>
                        
                    </div>


                </div>
            </div>

            <div class="row row-road row-city">
                <div class="col-sm-12">

                    <div class="col-sm-6">
                        <p class="header-fourth-road">1. Juni 2016, München</p>
                        <p style="padding: 20px 0px 40px;">Wir freuen uns darauf, unsere Gäste in der deutschen Microsoft-Firmenzentrale in Unterschleißheim bei München
                            zu empfangen. Hier werden die innovativsten Ideen geboren und die wichtigsten Entscheidungen getroffen.
                            Es ist die beste Gelegenheit  und der beste Ort, Führungskräfte erfolgreicher Unternehmen kennenzulernen und Teil der modernen Technologiewelt zu werden.  </p>
                        <div><a href="#form-register" class="city" onclick="_gaq.push(['_trackEvent', 'Jetzt Anmelden', 'Click', 'DE'])" style="float:none;">
                                <span style="color:#ffffff;"><?php _e('Jetzt Anmelden', ProRMTheme::TEXTDOMAIN) ?></span>
                            </a></div>

                    </div>
                    <div class="col-sm-6">
                        <img src="<?php echo ProRMTheme::url(); ?>/images/roadshow/munchen.jpg">
                    </div>
                </div>
            </div>
        </div>

<div style="padding: 70px 0px 130px;">
    <div class="container-fluid">
        <center>
            <div class="row" style="padding:0px 50px">
                <div class="col-sm-12">
                    <div class="col-sm-4">
                        <img src="http://promx.net/wp-content/themes/prorm/images/roadshow/fourth.png">
                        <p class="title-road" style="padding: 26px 0px;">Menschen begegnen </p>
                        <p>Treffen Sie interessante Persönlichkeiten auf Geschäftsführerebene und erfahren Sie, wie aktuelle Business-Herausforderungen effektiv und schnell gelöst werden. </p>
                    </div>
                    <div class="col-sm-4">
                        <img src="http://promx.net/wp-content/themes/prorm/images/roadshow/fifth.png">
                        <p class="title-road" style=";padding: 23px 0px;">Wissen teilen </p>
                        <p>Werfen Sie Ihre Fragen in den Ring – sprechen Sie über Erfahrungen – also Erfolge und Rückschläge. Tauschen Sie sich mit den Teilnehmern aus. </p>
                    </div>
                    <div class="col-sm-4">
                        <img src="http://promx.net/wp-content/themes/prorm/images/roadshow/sixth.png">
                        <p class="title-road" style="padding-bottom: 24px;margin-left: -30px;">Erkenntnisse gewinnen </p>
                        <p>Gewinnen Sie durch den Dialog mit erfahrenen Mentoren, Vorreitern und Querdenkern neue Erkenntnisse und Einblicke. Profitieren Sie durch Ergebnisse in anderen Unternehmen.</p>
                    </div>
                </div>

            </div>

            <a href="http://promx.net/upload/Agenda_Roadshow.pdf" onclick="_gaq.push(['_trackEvent', 'Agenda herunterladen', 'Click', 'DE'])" target="_blank" id="agenda" style="top:50px;position:relative;margin-left:2%;">
                <span style="color:#ffffff;"><?php _e('Agenda herunterladen', ProRMTheme::TEXTDOMAIN) ?></span>
            </a>

        </center>
    </div>
</div>



<div class="container" >
    <div class="row">
        <div class="col-sm-12">
            <p style="font-size:25px;">Falls Sie noch weitere Fragen haben, kontaktieren Sie uns</p>
            <?php echo do_shortcode('[form name=roadshow-contact]'); ?>
        </div>
    </div>
    <div class="row" style="margin-top:-30px;">
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
            <div class="col-sm-8 col-sm-offset-5">
                <div class="legal-content">
                    ©2016 proMX GmbH
                </div>
            </div>

        </div>
    </footer>

</div>
</div>

<div class="visible-xs visible-sm">
    <nav class="navbar-top navbar navbar-default  roadshow-nav" role="navigation">
        <div class="container-fluid">
            <div class="row navbar-top-row">
                <div class="col-xs-8 col-md-8"> <!-- was col-md-6 for left menu | col-md-8 for top -->
                    <div class="logos-holder navbar-top-item col-sm-push-1" style="border:none;">
                        <div class="logo logo-prorm">
                            <a href="<?php echo esc_url(site_url()); ?>">
                                <img style="float:left"
                                     src="<?php echo ProRMTheme::url(); ?>/images/logo-proMX-new.png"
                                     alt="<?php bloginfo('name'); ?>">
                            </a>

                        </div>

                    </div>

                </div>



            </div>
        </div>
    </nav>

    <div class="container-fluid"  style="padding:0">
        <div class="row" style="margin:0">
            <div class="col-sm-12" style="padding:0;">
                <div style="color:#ffffff;background-image:url('http://promx.net/wp-content/themes/prorm/images/roadshow/mob-back.jpg')">
                    <img style="padding:50px;" src="<?php echo ProRMTheme::url(); ?>/images/roadshow/logo-road.png" alt="proMX">
                   <center>
                       <div style="padding: 15px 15px 45px;margin-top:-50px;">
                       <span style="font-size:25px;margin-bottom:20px;">Eine Roadshow, eine Konferenz oder ein Workshop?<br/>Hier erleben Sie viel mehr – eine Reinvention 2016!</span>
                   <p style="margin-top:30px;margin-bottom:30px;">Microsoft und proMX GmbH laden Sie recht herzlich ein, gemeinsam herauszufinden,
                            wie Sie mehr Leistungsfähigkeit und Produktivität dank der herausragenden Erfahrung
                            unserer Gäste erzielen können. Hier erzählen die Experten auf unterschiedlichen Gebieten,
                            wie die Effektivität ihrer Unternehmen um 70% verbessert wurde und helfen Ihnen, ein perfektes Geschäftsmodell zu erstellen.</p>
							<br><p>Füllen Sie bitte die Felder aus, um uns Bescheid zu geben, dass Sie an unserer Veranstaltung teilnehmen möchten.</p>
							
									<div class="col-sm-12" style="margin-bottom:30px;text-align:left;">
									<div><img style="margin-right:10px;" src="http://promx.net/wp-content/themes/prorm/images/roadshow/time-icon.png">Köln  |  Beginn: 30. Mai, 13.30</div>
									<div style="margin-top:10px;"><img style="margin-right:10px;"  src="http://promx.net/wp-content/themes/prorm/images/roadshow/time-icon.png">München  |  Beginn: 1. Juni, 13.30</div>
								</div>
                           <a href="#form-registers" class="city" onclick="_gaq.push(['_trackEvent', 'Jetzt Anmelden', 'Click', 'DE'])" style="float:none;">
                               <span style="color:#ffffff;"><?php _e('Jetzt Anmelden', ProRMTheme::TEXTDOMAIN) ?></span>
                           </a>
                   </div>

                   </center>


                </div>
                <div id="form-registers">
                <?php echo do_shortcode('[form name=roadshow-mobile]'); ?>
				
		

                </div>
				
				
								

                </div>

            </div>

        <div style="padding: 0px 0px 130px;" id="second-slide">
            <div class="container-fluid">
                <center>
                    <div class="row" style="padding:0px 50px">

                            <div class="col-sm-12">
                                <img src="<?php echo ProRMTheme::url(); ?>/images/roadshow/fourth.png">
                                <p class="title-road" style="padding: 26px 0px;">Mehr als eine Konferenz </p>
                                <p>Reinvention ist eine Inspirationsquelle für Leader. Harte Fakten, Best Practice,
                                    aber auch insbesondere Denkanstöße durch Andersdenker und -macher.</p> <p>Ihr Vorteil: neue Erkenntnisse, Einblicke und Anregungen.  </p>
                            </div>
                            <div class="col-sm-12" style="margin-top:50px;">
                                <img src="<?php echo ProRMTheme::url(); ?>/images/roadshow/fifth.png">
                                <p class="title-road" style=";padding: 23px 0px;">Mehr als ein Workshop </p>
                                <p>Reinvention bietet gemeinsames Erarbeiten von Lösungen und einen offenen Austausch in vertraulicher Atmosphäre.</p>
                                <p>Ihr Vorteil: Sparring Ihrer Ideen; Coaching für Ihre nächsten Schritte.  </p>
                            </div>
                            <div class="col-sm-12" style="margin-top:50px;">
                                <img style="margin-left: 25px;" src="<?php echo ProRMTheme::url(); ?>/images/roadshow/sixth.png">
                                <p class="title-road" style="padding-bottom: 24px;">Mehr als Networking  </p>
                                <p>Reinvention ermöglicht den persönlichen Erfahrungsaustausch mit Vorständen, Geschäftsführern und Kennern; ein langfristig offener Austausch.</p>
                                <p>Ihr Vorteil: Perspektivenwechsel, intensive Auseinandersetzung, andere Sichtweisen kennenlernen. </p>
                            </div>


                    </div>

                    <a href="http://promx.net/upload/Agenda_Roadshow.pdf" onclick="_gaq.push(['_trackEvent', 'Agenda herunterladen', 'Click', 'DE'])" target="_blank" id="agenda" style="top:50px;position:relative;">
                        <span style="color:#ffffff;"><?php _e('Agenda herunterladen', ProRMTheme::TEXTDOMAIN) ?></span>
                    </a>

                </center>
            </div>
        </div>

        <div style="padding: 0px 0px 130px;">
            <div class="container-fluid">
                <center>
                    <div class="row" style="padding:0px 50px">
                        <div class="col-sm-12" ">
                            <p class="title-road" style="margin-bottom:60px;">Reinvention ist eine Veranstaltung zum Überdenken, neu Erfinden und Grenzen auflösen.
                                Innovative Geschäftsmodelle am Brennpunkt der Digitalisierung werden zu Ihrem persönlichen Ausgangspunkt für Möglichkeiten und Chancen.</p>
                            <div class="col-sm-12">
                                <img src="<?php echo ProRMTheme::url(); ?>/images/roadshow/hhpberlin.png">
                                <div style="margin-top:50px;">Erfahren Sie, wie es hhpberlin – Ingenieure für Brandschutz – geschafft hat, durch branchenunübliche Ideen, in einem atemberaubenden Tempo und der Definition von IT als Betriebsmittel, neue Märkte zu erschließen; und ständig und stetig auf dem Sprung zur nächsten Innovation zu sein. </div>
                            </div>
                            <div class="col-sm-12" style="margin-top:50px;">
                                <img src="<?php echo ProRMTheme::url(); ?>/images/roadshow/hrs.png">
                                <div style="margin-top:50px;">Erleben Sie, wie sich HRS, Weltmarktführer bei Online-Hotelbuchungen, auf sich ändernde Marktanforderungen einstellt und flexibel die Customer-Touchpoints und das Kundenbeziehungsmanagement mit klar definierten Geschäftsprozessen vereint.</div>
                            </div>
                            <div class="col-sm-12" style="margin-top:50px;">
                                <img src="<?php echo ProRMTheme::url(); ?>/images/roadshow/staufen.png">
                                <div style="margin-top:70px;">Begleiten Sie die Staufen AG auf dem Weg in die Cloud und durch die digitale Transformation. Sehen Sie, wie Customer-Business-Prozesse neu aufgesetzt und Infrastrukturen Schritt für Schritt neu gedacht werden.</div>
                            </div>
                        </div>

                    </div>

                    <a href="http://promx.net/upload/Agenda_Roadshow.pdf" onclick="_gaq.push(['_trackEvent', 'Agenda herunterladen', 'Click', 'DE'])" target="_blank" id="agenda" style="top:50px;position:relative;margin-left:2%;">
                        <span style="color:#ffffff;"><?php _e('Agenda herunterladen', ProRMTheme::TEXTDOMAIN) ?></span>
                    </a>

                </center>
            </div>
        </div>

    <div class="row" style="padding:0px 0px 70px;margin:0;margin-top:-30px;">
        <center>

            <div class="col-sm-12" style="margin-top:70px;">
                <img src="http://promx.net/wp-content/themes/prorm/images/roadshow/tenth.png">
                <p class="title-road" style="margin-top:2px;">Stefan Truthän </p>
                <p>Geschäftsführender Gesellschafter
                    <br>hhpberlin Ingenieure für Brandschutz GmbH
                    <br>Vorreiter auf dem Gebiet der neusten Technologien und Early Adopter</p>
            </div>



            <div class="col-sm-12" style="margin-top:70px;">
                <img src="http://promx.net/wp-content/themes/prorm/images/roadshow/heiko.jpg">
                <p class="title-road">Heiko Reintsch</p>
                <p>Leiter für Product Management CS
                    <br>HRS, Hotel Reservation Service
                    <br>Impulsgeber für Innovationen und Digitalisierung</p>
            </div>

            <div class="col-sm-12" style="margin-top:70px;">
                <img src="http://promx.net/wp-content/themes/prorm/images/roadshow/man-block.jpg">
                <p class="title-road">Lars Ziegler </p>
                <p>Manager IT
                    <br>Staufen.AG
                    <br>Umsetzer zahlreicher großartiger IT-Projekte</p>
            </div>



            <div class="col-sm-12" style="margin-top:70px;">
                <img src="http://promx.net/wp-content/themes/prorm/images/roadshow/nineth.png">
                <p class="title-road">Peter Linke</p>
                <p>Geschäftsführer<br>proMX GmbH<br>Inspirator und Neuerer </p>
            </div>

            <div class="col-sm-12" style="margin-top:70px;">
                <img src="http://promx.net/wp-content/themes/prorm/images/roadshow/eleventh.png">
                <p class="title-road">Christian Geckeis</p>
                <p>Partner Sales & Strategy Lead für Microsoft Dynamics Germany
                    <br>Microsoft Deutschland GmbH
                    <br>Microsft-Experte und -Stratege </p>
            </div>

            <div class="col-sm-12" style="margin-top:70px;">
                <img src="http://promx.net/wp-content/themes/prorm/images/roadshow/man-who.jpg">
                <p class="title-road">Marcel Erntges</p>
                <p>
                    Wirtschaftsjurist
                    <br>PRW Rechtsanwälte
                    <br>Datenschutzexperte</p>
            </div>

        </center>
    </div>

    <div class="row" style="padding:10px;margin:0;">
        <center>
            <div class="col-sm-12">
                <a href="#form-register" class="city" onclick="_gaq.push(['_trackEvent', 'Jetzt Anmelden', 'Click', 'DE'])"  style="float:none;margin-left:3%;">
                    <span style="color:#ffffff;"><?php _e('Jetzt Anmelden', ProRMTheme::TEXTDOMAIN) ?></span>
                </a>
            </div>
        </center>
    </div>
    <div class="row" style="padding:30px;margin-bottom:50px;margin:0;"> <center>
            <div class="col-sm-12">
                <a href="#form-registers" class="city" onclick="_gaq.push(['_trackEvent', 'Jetzt Anmelden', 'Click', 'DE'])" style="float:none;">
                    <span style="color:#ffffff;"><?php _e('Jetzt Anmelden', ProRMTheme::TEXTDOMAIN) ?></span>
                </a>
            </div> </center>
    </div>



        <div class="row" style="padding:70px 0px;margin:0;background-color: #f7f7f7;margin-top:70px;">
            <center>
                <div class="col-sm-12" style="margin-top:20px;">
                    <img src="<?php echo ProRMTheme::url(); ?>/images/roadshow/first.png">
                    <p class="header-second-road" style="margin-top:30px;">Denken Sie Ihre Geschäftsprozesse neu</p>
                    <p class="second-block-road">Erfinden Sie Ihre Wertschöpfungs- und Geschäftsprozesse neu! Steigern Sie Ihren Umsatz und 
						nutzen Sie neue Technologien für neue Dienstleistungen und Produkte.</p>
                </div>

                <div class="col-sm-12" style="margin-top:70px;">
                    <img src="<?php echo ProRMTheme::url(); ?>/images/roadshow/second.png">
                    <p class="header-second-road"  style="margin-top:30px;">Erweitern Sie Ihre Denkmuster</p>
                    <p class="second-block-road">Verändern Sie Ihre Denkweise. Wachsen Sie über sich hinaus. Denken Sie Neu und anders.</p>
                </div>

                <div class="col-sm-12" style="margin-top:70px;">
                    <img src="<?php echo ProRMTheme::url(); ?>/images/roadshow/third.png">
                    <p class="header-second-road"  style="margin-top:30px;">Gestalten Sie Ihre intelligente Cloud</p>
                    <p class="second-block-road">Bauen Sie sich eine neue und intelligente Geschäftsplattform in der Cloud. Verstehen Sie neue Technologien als Betriebsmittel und nicht als Kostenfaktor.</p>
                </div>

                <div class="col-sm-12" style="margin-top:70px;">
                    <img src="<?php echo ProRMTheme::url(); ?>/images/roadshow/business.png">
                    <p class="header-second-road"  style="margin-top:30px;">Gestalten Sie Ihre individuelle IT</p>
                    <p class="second-block-road">Profitieren Sie von Ihrem eigenen „Digitalen Wirtschaftswunder“!</p>
                </div>

            </center>
        </div>

        <div class="row" style="padding:10px 0px 70px;margin:0;">
            <center>


                <div class="col-sm-12" style="margin-top:70px;">
                    <img src="<?php echo ProRMTheme::url(); ?>/images/roadshow/cologne.jpg">
                    <p class="header-fourth-road" style="margin-top:50px;">30. Mai, Köln</p>
                    <p style="padding: 20px 0px;">Treffen Sie uns bei dem zweiten Teil der Reinvention 2016 in dem regionalen Microsoft-Büro in Köln,
                        das zu den modernsten Bürogebäuden Europas zählt. Hören Sie noch mehr von unseren Experten,
                        die Ihnen zeigen, wie man die Möglichkeiten der IT-Technologien gewinnbringend und auf eine ganz neue Weise nutzen kann.  </p>
                    <a href="#form-registers" id="city-link-mob" class="city" onclick="_gaq.push(['_trackEvent', 'Jetzt Anmelden', 'Click', 'DE'])" style="float:none;">
                        <span style="color:#ffffff;"><?php _e('Jetzt Anmelden', ProRMTheme::TEXTDOMAIN) ?></span>
                    </a>
                </div>

                <div class="col-sm-12" style="margin-top:70px;">
                    <img src="<?php echo ProRMTheme::url(); ?>/images/roadshow/munchen.jpg">
                    <p class="header-fourth-road" style="margin-top:50px;">1. Juni 2016, München</p>
                    <p style="padding: 20px 0px;">Wir freuen uns, unsere Gäste in der deutschen Microsoft-Firmenzentrale in Unterschleißheim bei München
                        zu empfangen. Hier werden die innovativsten Ideen geboren und die wichtigsten Entscheidungen getroffen.
                        Das sind die beste Zeit und der beste Ort, Führungskräfte erfolgreicher Unternehmen kennenzulernen und Teil der modernen Welt der Technologien zu werden. </p>
                    <a href="#form-registers" class="city" onclick="_gaq.push(['_trackEvent', 'Jetzt Anmelden', 'Click', 'DE'])" style="float:none;">
                        <span style="color:#ffffff;"><?php _e('Jetzt Anmelden', ProRMTheme::TEXTDOMAIN) ?></span>
                    </a>
                </div>



            </center>
        </div>


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
<script   src="<?php echo get_template_directory_uri(); ?>/js/roadshow.js"></script>