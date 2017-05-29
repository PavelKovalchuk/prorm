<?php

global $post;
$hideTitle = false;
$showSiblingsLinks = get_field('page_show_siblings_links', $post->post_parent)
    || get_field('page_show_siblings_links');
?>
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


?>
    <!DOCTYPE html>

<html <?php language_attributes(); ?>>
    <head>

        <meta http-equiv="X-UA-Compatible" content="IE=edge">
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




        <script>
            /* Globals */
            var generalHelpTextEnable = <?php echo $generalHelpTextEnable; ?>;
            var generalHelpTextInterval = <?php echo $generalHelpTextInterval; ?>;
        </script>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title><?php wp_title( '|', true, 'right' ); ?></title>



        <link rel="profile" href="http://gmpg.org/xfn/11">
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

        <!-- Bootstrap -->
        <link href="<?php echo ProRMTheme::url(); ?>/css/bootstrap.min.css" rel="stylesheet">

        <link href="<?php echo ProRMTheme::url(); ?>/css/style.compiled.css" rel="stylesheet">
        <link href="<?php echo ProRMTheme::url(); ?>/css/jquery-ui-1.10.4.custom.min.css" rel="stylesheet">
        <link href="<?php echo ProRMTheme::url(); ?>/css/prostorage-landing.css" rel="stylesheet">

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
<body class="fixed-top-bar" style="padding-top:0px;">

<div id="fancybox-overlay"  style="display: none; background-color: rgb(119, 119, 119);opacity:0.7;height:100%;position:fixed;width: 100%;"></div>
<div id="fancybox-wrap" style="left:13%;top:2% !important; position: fixed;">
    <div id="fancybox-outer" style="border:1px solid #791239;">
        <div id="fancybox-content"  style="border-width: 10px;">




            <?php if (pll_current_language('slug') == 'en') { ?>

                <div style="position:relative;top:5%;">




                </div>
            <?php } else { ?>
                <div style="position:relative;top:5%;">



                </div>
            <?php } ?>

        </div>
        <a id="fancybox-close" class="close-video-home" style="display: inline;"></a>
    </div>


</div>
</div>

<?php $dataCurLang = pll_current_language('slug'); ?>
    <div id="fb-root" data-cur-lang="<?php echo $dataCurLang; ?>"></div>

<nav class="side-menu" role="navigation">
    <ul class="menu">
        <?php ProRMTheme::showSideMenu(); ?>
    </ul>
</nav>

    <div class="cards-holder slider-top verticals-slider" >
    <div class="card active card-1" style="display: block; background-image: url(<?php echo get_site_url(); ?>/wp-content/themes/prorm/images/prostorage-lannding/slider.png); background-size: 100% 100%;">
        <?php  if(pll_current_language('slug') == 'en'){ ?>
            <div class="col-xs-4 col-md-2" style="float:right;"> <!-- was cal-md-6 for left menu | col-md-4 for top-->
                <div class="lang-switcher" style="background-color:transparent;">
                    <a href="http://promx.net/de/produkte/prostoragesaver-cloud-solution/" title="Switch to Deutsch" class="de other" style="background-color:transparent;">
                        de |</a>

                    <a href="http://promx.net/en/products/prostoragesaver-cloud-solution/" title="Switch to English" class="en current" style="background-color:transparent;">
                        en                </a>
                </div>
            </div>
        <?php } else { ?>
            <div class="col-xs-4 col-md-2" style="float:right;"> <!-- was cal-md-6 for left menu | col-md-4 for top-->
                <div class="lang-switcher" style="background-color:transparent;">
                    <a href="http://promx.net/de/produkte/prostoragesaver-cloud-solution/" title="Switch to Deutsch" class="de current" style="background-color:transparent;">
                        de |</a>

                    <a href="http://promx.net/en/products/prostoragesaver-cloud-solution/" title="Switch to English" class="en other" style="background-color:transparent;">
                        en                </a>
                </div>
            </div>
        <?php } ?>
        <div class="card-bg-small visible-xs" style="height: 211px; background-image: url(<?php echo get_site_url(); ?>/wp-content/themes/prorm/images/prostorage-lannding/prostorage-card-mob.png);background-size:100%;" data-initial-width="600" data-initial-height="211">
		</div>

         <div class="visible-xs" style="padding:20px;">
             <?php  if(pll_current_language('slug') == 'en'){ ?>
                 <p class="slide-text">Not enough space<br>
                 in your Microsoft Dynamics CRM Online?<br>
                    <span class="span-slide-text">Looking for the most secure,<br>
                    easy and low-priced solution?</span>
                </p>
             <?php } else { ?>
                 <p class="slide-text">
                 <p class="slide-text">Nicht ausreichend Speicherplatz<br>in Ihrem Microsoft Dynamics Online?
                    <span class="span-slide-text">
                        Schaffen Sie in wenigen Minuten<br>mehr Speicherplatz für Ihr stetig wachsendes CRM-System
                    </span>
                 </p>
             <?php } ?>

             <div class="row">
                 <div class="col-sm-12">
                     <div class="breadcrumbs">
                         <?php  if(pll_current_language('slug') == 'en'){ ?>
                            <span property="itemListElement" typeof="ListItem">
                                <a property="item" typeof="WebPage" title="Go to Products." href="http://prorm.webdev.acceptic.com/en/products/" class="list-item post post-page">
                                    <span property="name">Products</span>
                                </a>
                                <meta property="position" content="1">
                            </span> &gt;
                            <span property="itemListElement" typeof="ListItem">
                                <span property="name">proStorageSaver</span>
                                <meta property="position" content="2"
                            </span>
                         <?php } else { ?>
                             <span property="itemListElement" typeof="ListItem">
                                <a property="item" typeof="WebPage" title="Go to Products." href="http://prorm.webdev.acceptic.com/en/produkte/" class="list-item post post-page">
                                    <span property="name">Produkte</span>
                                </a>
                                <meta property="position" content="1">
                            </span> &gt;
                             <span property="itemListElement" typeof="ListItem">
                                <span property="name">proStorageSaver</span>
                                <meta property="position" content="2"
                            </span>
                         <?php } ?>
                     </div>
                 </div>
             </div>
			
         </div>

        <div class="visible-sm" data-initial-width="1600" data-initial-height="540">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 card-col">
                        <div class="visible-sm col-sm-6">
                            <img class="logo-prostorage" src="<?php echo get_site_url(); ?>/wp-content/themes/prorm/images/prostorage-lannding/logo.png">
                            <div>
                                <?php  if(pll_current_language('slug') == 'en'){ ?>
                                    <p class="slide-text">Not enough space<br>
                                        in your Microsoft Dynamics CRM Online?<br>
                    <span class="span-slide-text">Looking for the most secure,<br>
                    easy and low-priced solution?</span>
                                    </p>
                                <?php } else { ?>
                                    <p class="slide-text">
                                    <p class="slide-text">Nicht ausreichend Speicherplatz<br>in Ihrem Microsoft Dynamics Online?
                    <span class="span-slide-text">
                        Schaffen Sie in wenigen Minuten<br>mehr Speicherplatz für Ihr stetig wachsendes CRM-System
                    </span>
                                    </p>
                                <?php } ?>

                            </div>
                        </div>
                        <div class="col-sm-6">
                            <img class="logo-prostorage" src="<?php echo get_site_url(); ?>/wp-content/themes/prorm/images/prostorage-lannding/Dates.png">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="breadcrumbs">
                            <?php  if(pll_current_language('slug') == 'en'){ ?>
                                <span property="itemListElement" typeof="ListItem">
                                <a property="item" typeof="WebPage" title="Go to Products." href="http://prorm.webdev.acceptic.com/en/products/" class="list-item post post-page">
                                    <span property="name">Products</span>
                                </a>
                                <meta property="position" content="1">
                            </span> &gt;
                                <span property="itemListElement" typeof="ListItem">
                                <span property="name">proStorageSaver</span>
                                <meta property="position" content="2"
                            </span>
                            <?php } else { ?>
                                <span property="itemListElement" typeof="ListItem">
                                <a property="item" typeof="WebPage" title="Go to Products." href="http://prorm.webdev.acceptic.com/en/produkte/" class="list-item post post-page">
                                    <span property="name">Produkte</span>
                                </a>
                                <meta property="position" content="1">
                            </span> &gt;
                                <span property="itemListElement" typeof="ListItem">
                                <span property="name">proStorageSaver</span>
                                <meta property="position" content="2"
                            </span>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="visible-md visible-lg" data-initial-width="1600" data-initial-height="540">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 card-col">
                        <div class="visible-md visible-lg col-sm-6">
                            <img class="logo-prostorage" src="<?php echo get_site_url(); ?>/wp-content/themes/prorm/images/prostorage-lannding/logo.png">
                            <div>
                                <?php  if(pll_current_language('slug') == 'en'){ ?>
                                    <p class="slide-text">Not enough space<br>
                                        in your Microsoft Dynamics CRM Online?<br>
                    <span class="span-slide-text">Looking for the most secure,<br>
                    easy and low-priced solution?</span>
                                    </p>
                                <?php } else { ?>
                                    <p class="slide-text">
                                    <p class="slide-text">Nicht ausreichend Speicherplatz<br>in Ihrem Microsoft Dynamics Online?<br>
                    <span class="span-slide-text">
                        Schaffen Sie in wenigen Minuten<br>mehr Speicherplatz für Ihr stetig wachsendes CRM-System
                    </span>
                                    </p>
                                <?php } ?>

                            </div>
                        </div>
                        <div class="col-sm-6">
                            <img class="logo-prostorage" src="<?php echo get_site_url(); ?>/wp-content/themes/prorm/images/prostorage-lannding/Dates.png">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="breadcrumbs">
                            <?php  if(pll_current_language('slug') == 'en'){ ?>
                                <span property="itemListElement" typeof="ListItem">
                                <a property="item" typeof="WebPage" title="Go to Products." href="http://prorm.webdev.acceptic.com/en/products/" class="list-item post post-page">
                                    <span property="name">Products</span>
                                </a>
                                <meta property="position" content="1">
                            </span> &gt;
                                <span property="itemListElement" typeof="ListItem">
                                <span property="name">proStorageSaver</span>
                                <meta property="position" content="2"
                            </span>
                            <?php } else { ?>
                                <span property="itemListElement" typeof="ListItem">
                                <a property="item" typeof="WebPage" title="Go to Products." href="http://prorm.webdev.acceptic.com/en/produkte/" class="list-item post post-page">
                                    <span property="name">Produkte</span>
                                </a>
                                <meta property="position" content="1">
                            </span> &gt;
                                <span property="itemListElement" typeof="ListItem">
                                <span property="name">proStorageSaver</span>
                                <meta property="position" content="2"
                            </span>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <?php  if(pll_current_language('slug') == 'en'){ ?>
    <div class="row second-slide-text">
        Create an extra space for your ever-increasing CRM-data in the fastest way
    </div>
    <div class="row">
        <div class="col-sm-12">
            <div class="col-sm-3 col-xs-6 second-slide-blocks">
                <img src="<?php echo get_site_url(); ?>/wp-content/themes/prorm/images/prostorage-lannding/mouse.png">
                <p class="second-slide-blocks-text">Make just <br> 1 click</p>
            </div>
            <div class="col-sm-3 col-xs-6 second-slide-blocks">
                <img src="<?php echo get_site_url(); ?>/wp-content/themes/prorm/images/prostorage-lannding/Tools.png">
                <p class="second-slide-blocks-text">Enjoy 5 minutes <br> setup</p>
            </div>
            <div class="col-sm-3 col-xs-6 second-slide-blocks">
                <img src="<?php echo get_site_url(); ?>/wp-content/themes/prorm/images/prostorage-lannding/shield.png">
                <p class="second-slide-blocks-text">Get unlimited data <br> storage and security </p>
            </div>
            <div class="col-sm-3 col-xs-6 second-slide-blocks">
                <img src="<?php echo get_site_url(); ?>/wp-content/themes/prorm/images/prostorage-lannding/pig.png">
                <p class="second-slide-blocks-text">Save over 90% <br> of storage costs</p>
            </div>
        </div>
    </div>
    <?php } else { ?>
        <div class="row second-slide-text">
            Schaffen Sie in wenigen Minuten mehr Speicherplatz für Ihr stetig wachsendes CRM-System
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="col-sm-3 col-xs-6 second-slide-blocks">
                    <img src="<?php echo get_site_url(); ?>/wp-content/themes/prorm/images/prostorage-lannding/mouse.png">
                    <p class="second-slide-blocks-text">Mit nur einem einfachen <br>Mausklick</p>
                </div>
                <div class="col-sm-3 col-xs-6 second-slide-blocks">
                    <img src="<?php echo get_site_url(); ?>/wp-content/themes/prorm/images/prostorage-lannding/Tools.png">
                    <p class="second-slide-blocks-text">Einem 5 Minuten<br>Setup</p>
                </div>
                <div class="col-sm-3 col-xs-6 second-slide-blocks">
                    <img src="<?php echo get_site_url(); ?>/wp-content/themes/prorm/images/prostorage-lannding/shield.png">
                    <p class="second-slide-blocks-text">Haben Sie sicheren Zugriff<br>auf unendlich Speicherplatz,</p>
                </div>
                <div class="col-sm-3 col-xs-6 second-slide-blocks">
                    <img src="<?php echo get_site_url(); ?>/wp-content/themes/prorm/images/prostorage-lannding/pig.png">
                    <p class="second-slide-blocks-text">Und sparen dabei noch<br>90% der Kosten ein!</p>
                </div>
            </div>
        </div>
    <?php } ?>
</div>
    <div class="container-fluid">
        <div class="row">
            <div class="third-slide">
                <?php  if(pll_current_language('slug') == 'en'){ ?>
                    <a class="video-home"><img src="<?php echo get_site_url(); ?>/wp-content/themes/prorm/images/prostorage-lannding/play-video.png"></a>
                <?php } else { ?>
                    <a class="video-home"><img src="<?php echo get_site_url(); ?>/wp-content/themes/prorm/images/prostorage-lannding/Video-abspielen.jpg"></a>
                <?php } ?>
            </div>
        </div>
    </div>
<div class="container fourth-block">
    <div class="row">
        <div class="col-sm-12">
            <div class="col-sm-4">
                <img src="<?php echo get_site_url(); ?>/wp-content/themes/prorm/images/prostorage-lannding/cloud.png">
            </div>
            <div class="col-sm-8">
                <?php  if(pll_current_language('slug') == 'en'){ ?>
                    <p class="fourth-block-text">Install proStorageSaver in your Microsoft Dynamics CRM
                    now and start using it immediately</p>
                    <p>The longer you use your Microsoft Dynamics CRM Online, the less free storage space remains at your disposal.<br>
                    On the one hand, this is a good sign as it proves that your employees efficiently use the system and save
                    their emails and documents in CRM.</p>
                    <p>On the other hand, extra space in CRM is a cost-question. All data saved in CRM must be stored on expensive SQL servers.
                    As a result you have to pay up to 9 Euro for 1 GB of memory.</p>
                <?php } else { ?>
                    <p class="fourth-block-text">Installieren Sie proStorageSaver in Ihrem Microsoft Dynamics CRM jetzt und starten Sie es
                        sofort zu verwenden</p>
                    <p>Mit jedem Tag, an dem Sie Microsoft Dynamics CRM Online einsetzen, wird Ihr verfügbarer
                        kostenloser Speicher kleiner.</p>
                    <p>Das ist einerseits ein gutes Zeichen, Ihre Mitarbeiter nutzen das System effektiv und speichern ihre
                        Emails und Dokumente im CRM.</p>
                    <p>Zusätzlicher Speicherplatz im CRM ist immer eine Frage der Ausgaben. Alle Daten innerhalb eines
                        CRM’s müssen auf teuren SQL Servern abgespeichert werden. Dies führt dazu, dass Sie für jeden
                        weiteren Gigabyte 9,00 € bezahlen müssen.</p>
                <?php } ?>
            </div>
        </div>
    </div>
    <div class="row" style="padding-top:50px;">
        <div class="col-sm-12">
            <div class="col-sm-4 visible-xs" style="padding-bottom:50px;">
                <img src="<?php echo get_site_url(); ?>/wp-content/themes/prorm/images/prostorage-lannding/Data.png">
            </div>
            <div class="col-sm-8">
                <?php  if(pll_current_language('slug') == 'en'){ ?>
                    <p class="fourth-block-text-two" style="font-size:22px;font-weight:500;color:#007adf;">The good news is – this is not a must anymore! With proStorageSaver,
                        all your data will be transferred from the SQL Server to the significantly
                        less expensive Azure data storage. </p>
                    <p>Your CRM users won’t experience any changes compared to the standard system.
                           All data is online and available directly from the CRM in the familiar manner.
                           And you save over 90% of storage costs!.</p>
                    <p>
                        Moreover, we guarantee that none of your data will be lost as proStorageSaver meets
                        the highest standards of safety. Additionally, all information is encrypted so that
                        only your CRM users can access and read it.
                    </p>
                <?php } else { ?>
                    <p class="fourth-block-text-two" style="font-size:22px;font-weight:500;color:#007adf;">Erfreulicherweise müssen Sie diesen Betrag nicht mehr bezahlen! Mit dem proStorageSaver werden
                       alle Ihre Daten vom SQL Server zu einem deutlich günstigeren und verschlüsselten Azure Data
                       Storage transferiert. </p>
                    <p>Für Ihre CRM-Benutzer ändert sich nichts im Vergleich zum Standard. Alle Dateien sind online
                        genauso direkt aus dem CRM verfügbar wie Sie es gewohnt sind. Aber Sie sparen dabei über 90%
                        Kosten!</p>
                    <p>
                        Das läuft völlig selbständig im Hintergrund. Wir garantieren, dass keine Dateien verloren gehen
                        können und alle Informationen werden zusätzlich verschlüsselt und können nur von Ihren CRM
                        Benutzern gelesen werden
                    </p>
                <?php } ?>
            </div>
            <div class="col-sm-4 visible-md visible-lg visible-sm">
                <img style="margin-left:50px;" src="<?php echo get_site_url(); ?>/wp-content/themes/prorm/images/prostorage-lannding/Data.png">
            </div>
        </div>
    </div>
    <div id ="download"  class="row button-prostorage visible-md visible-lg visible-sm">
        <?php  if(pll_current_language('slug') == 'en'){ ?>
            <a  download href="https://pss1webapp1.azurewebsites.net/Home/GetCrmSolution"><img src="<?php echo get_site_url(); ?>/wp-content/themes/prorm/images/prostorage-lannding/button.jpg"></a>
        <?php  } else { ?>
            <a  download href="https://pss1webapp1.azurewebsites.net/Home/GetCrmSolution"><img src="<?php echo get_site_url(); ?>/wp-content/themes/prorm/images/prostorage-lannding/Herunterladen.jpg"></a>

        <?php  } ?>
    </div>
   <div class="row button-prostorage visible-xs">
       <?php  if(pll_current_language('slug') == 'en'){ ?>
           <a  data-toggle="collapse" data-target="#demo-mobile""><img src="<?php echo get_site_url(); ?>/wp-content/themes/prorm/images/prostorage-lannding/button.jpg"></a>
       <?php  } else { ?>
           <a  data-toggle="collapse" data-target="#demo-mobile""><img src="<?php echo get_site_url(); ?>/wp-content/themes/prorm/images/prostorage-lannding/Herunterladen.jpg"></a>
       <?php  } ?>
    </div>
</div>


<div id="demo" class="container-fluid fifth-block" style="display: none;">
    <div class="visible-md visible-lg visible-sm">
    <div class="row">
        <div class="col-sm-12">
            <div class="fifth-head-first">Installation Guide</div>
        </div>
    </div>
    <div class="container">
    <div class="row">
        <div class="col-sm-12">
            <div class="col-sm-4">
                <img src="<?php echo get_site_url(); ?>/wp-content/themes/prorm/images/prostorage-lannding/note-first.png">
            </div>
            <div class="col-sm-8">
                <p class="list-head">Installation</p>
                <ul>
                <li><p>Navagate to Settings->Solutions in your CRM</p></li>
                <li><p>Click «Import» and use the system notificatyions to procced the installation</p></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="row pre-last-row">
        <div class="col-sm-12">
            <div class="col-sm-8">
                <p class="list-head">Registration</p>
                <ul>
                    <li><p>Click the name of proStorage Saver Solution and get
                        redicerted to proStorageSaver web-service</p></li>
                    <li><p>Register an account and log in</p></li>
                    <li><p>Confirm your CRM ownership</p></li>
                </ul>
            </div>
            <div class="col-sm-4">
                <img src="<?php echo get_site_url(); ?>/wp-content/themes/prorm/images/prostorage-lannding/note-second.png">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <div class="fifth-head-second">You are ready to use proStorageSaver</div>

            <a target = "_blank" class="download-link" href="http://promx.net/upload/proStoragSaver_How_to_Install_Guide.pdf">
                Download full Installation Guide
            </a></br>
            <?php  if(pll_current_language('slug') == 'en'){ ?>
                <a class="download-link" href="http://promx.net/en/support-en/">Do you have any problems with installation?</a>
            <?php } else { ?>
                <a class="download-link" href="http://promx.net/de/support/">Do you have any problems with installation?</a>
            <?php } ?>
        </div>
    </div>
</div>
        </div>
</div>

<div id="demo-mobile" class="panel-collapse collapse">
    <div class="container-fluid">
        <div class="download-mobile visible-xs">Please use Desktop device</br>
        to download the Solution</div>
    </div>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="fifth-slide">
            <div class="col-md-12 col-lg-3 col-xs-12 col-sm-12 copyright-text">
                <?php echo $settings->getOption('legal_copyright_text') ?>
            </div>
            <div class="col-md-12 col-lg-6 col-xs-12 col-sm-12 copyright-text legal-text">
                <?php  if(pll_current_language('slug') == 'en'){ ?>
                    <ul id="menu-legal-pages-en" class="legal-pages"><li id="menu-item-2777" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2777"><a href="http://promx.net/en/legal-notice/">Legal notice</a></li>
                        <li id="menu-item-2824" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2824"><a href="http://promx.net/en/privacy-and-cookies/">Privacy and Cookies</a></li>
                        <li id="menu-item-894" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-894"><a href="http://promx.net/en/sitemap-en/">Sitemap</a></li>
                    </ul>
                <?php } else { ?>
                    <ul id="menu-legal-pages-en" class="legal-pages"><li id="menu-item-2777" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2777"><a href="http://promx.net/impressum/">Impressum</a></li>
                        <li id="menu-item-2824" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2824"><a href="http://promx.net/datenschutz/">Datenschutz</a></li>
                        <li id="menu-item-894" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-894"><a href="http://promx.net/de/sitemap/">Sitemap</a></li>
                    </ul>
                <?php } ?>
            </div>
            <div class="col-md-12 col-lg-3 col-xs-12 col-sm-12 copyright-text social">
                <a href="https://www.facebook.com/promx.de?ref=bookmarks" target="_self"><div class="facebook"></div></a>
                <a href="https://twitter.com/proMX_CRMexpert"><div class="twitter"></div></a>
                <a href="https://www.youtube.com/channel/UCT1jnwo5wAsb4SJ-s8YFsag"><div class="youtube"></div></a>
                <a href="https://www.linkedin.com/company/promx-gmbht"><div class="linkedin"></div></a>
            </div>

        </div>
    </div>
    </div>
</div>
</body>
<script defer src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

<script defer src="<?php echo get_template_directory_uri(); ?>/js/jquery-ui-1.10.4.custom.min.js"></script>
<script defer src="<?php echo get_template_directory_uri(); ?>/js/jquery.cookie.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script defer src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
<script defer src="<?php echo get_template_directory_uri(); ?>/js/main.js?v=1.0"></script>
<script defer src="<?php echo get_template_directory_uri(); ?>/js/prostorage.js"></script>
    


