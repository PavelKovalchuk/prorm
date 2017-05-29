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
<?php include('header.php');

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
    <link href="<?php echo ProRMTheme::url(); ?>/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo ProRMTheme::url(); ?>/css/style.compiled.css" rel="stylesheet">
    <link href="<?php echo ProRMTheme::url(); ?>/css/jquery-ui-1.10.4.custom.min.css" rel="stylesheet">

</head>
<body style="margin: 0px -10px;">
<div class="cards-holder slider-top card-landing-event">
    <div class="card active card-1"
         style="display: block; background-image: url(<?php echo get_site_url(); ?>/wp-content/themes/prorm/images/bg-slide-landing.jpg); background-size: cover;">

        <?php if (pll_current_language('slug') == 'en') { ?>
            <div class="card-bg-small visible-xs"
                 style="height: 211px; background-size:100%;background-image: url(<?php echo get_site_url(); ?>/wp-content/themes/prorm/images/mobi-landing-youtube.png);"
                 data-initial-width="600" data-initial-height="211"></div>
        <?php } else { ?>
            <div class="card-bg-small visible-xs"
                 style="height: 211px; background-size:100%;background-image: url(<?php echo get_site_url(); ?>/wp-content/themes/prorm/images/mobi-landing-youtube.png);"
                 data-initial-width="600" data-initial-height="211"></div>
        <?php } ?>

        <div class="card-bg"
             style="background-image: url(<?php echo get_site_url(); ?>/wp-content/themes/prorm/images/man-with-mouthpiece.png);"
             data-initial-width="1600" data-initial-height="540">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 card-col">
                        <?php if (pll_current_language('slug') == 'en') { ?>
                            <div class="text-holder visible-md visible-lg" style="margin-top: 2%;">
                                <span style="color: #000000;font-size: 50px;">proRM Freemium</br></span>
                                    <span style="color: #000000;font-size: 40px;">a free productive version of proRM Business Solutions</span>
                                <a href="#form-youtube" class="pro-btn"
                                   style="font-size:20px;font-style: normal;margin-top:20px;"><span>Get it now</span></a>
                            </div>

                            <div class="text-holder visible-xs visible-sm" style="margin-top: 5%;">
								 <span style="color: #000000;font-size: 30px;">proRM Freemium</br></span>
                                    <span style="color: #000000;font-size: 30px;">a free productive version of proRM Business Solutions</span>
                                <a href="#form-youtube" class="pro-btn"
                                   style="font-size:16px;font-style: normal;margin-top:10px;margin-left:5px;"><span>Get it now</span></a>
                            </div>

                        <?php } else { ?>
                            <div class="text-holder visible-md visible-lg" style="margin-top: 2%;">
                                <span style="color: #000000;font-size: 50px;">proRM Freemium</br></span>
                                <span style="color: #000000;font-size: 40px;"> eine kostenlose vollständige Version der proRM Business Solutions</span>

                                <p><a href="#form-youtube" class="pro-btn"
                                      style="font-size:20px;font-style: normal;margin-top:20px;"><span>Jetzt erhalten</span></a>
                                </p>
                            </div>

                            <div class="text-holder visible-sm visible-xs" style="margin-top: 5%;">
								<span style="color: #000000;font-size: 30px;">proRM Freemium</br></span>
                                <span style="color: #000000;font-size: 20px;"> eine kostenlose vollständige Version der proRM Business Solutions</span>

                                <p><a href="#form-youtube" class="pro-btn"
                                      style="font-size:16px;font-style: normal;margin-top:10px;margin-left:5px;"><span>Jetzt erhalten</span></a>
                                </p>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
<div class="row">
<div class="col-sm-12">
<?php if (pll_current_language('slug') == 'en') { ?>
    <center><p style="font-size:25px;font-style:italic;color:#791239;margin-top: 20px;">Your full business cycle is under
            control </p>

        <h3 style="font-size:30px;font-style:italic;font-weight:700;margin-top: -5px;">with Microsoft Dynamics CRM and proRM Business
            Solutions</h3></center>
<?php } else { ?>
    <center><h3 style="font-size:30px;font-style:italic;font-weight:700;">Mit Microsoft Dynamics CRM und proRM Business
            Solutions</h3>

        <p style="font-size:25px;font-style:italic;color:#791239;margin-top: -20px;">bleibt Ihr vollständiger Geschäftszyklus unter
            Kontrolle</p></center>
<?php } ?>

<div class="visible-md visible-lg spiral-landing" style="margin-bottom:-150px;">
<?php if (pll_current_language('slug') == 'en') { ?>
    <img style="margin-left: -9px;margin-top: 40px;"
         src="http://promx.staging.acceptic.com/wp-content/themes/prorm/images/newDesktopSpiral/1.png"><br>
    <img id="proRMImage" style="margin-left: 390px;"
         src="http://promx.staging.acceptic.com/wp-content/themes/prorm/images/newDesktopSpiral/2.png"><br>
    <img style="margin-left: -9px;margin-top: -23px;" class="landing-click"
         onmouseover="this.src='http://promx.staging.acceptic.com/wp-content/themes/prorm/images/newDesktopSpiral/Lead-gray.png';"
         onmouseout="this.src='http://promx.staging.acceptic.com/wp-content/themes/prorm/images/newDesktopSpiral/3.png';"
         src="http://promx.staging.acceptic.com/wp-content/themes/prorm/images/newDesktopSpiral/3.png"><br>
    <img id="Opportunity" class="landing-click"
         onmouseover="this.src='http://promx.staging.acceptic.com/wp-content/themes/prorm/images/newDesktopSpiral/Opportunity-gray.png';"
         onmouseout="this.src='http://promx.staging.acceptic.com/wp-content/themes/prorm/images/newDesktopSpiral/4.png';"
         src="http://promx.staging.acceptic.com/wp-content/themes/prorm/images/newDesktopSpiral/4.png"><br>
    <img id="Quote" class="landing-click"
         onmouseover="this.src='http://promx.staging.acceptic.com/wp-content/themes/prorm/images/newDesktopSpiral/Quote-gray.png';"
         onmouseout="this.src='http://promx.staging.acceptic.com/wp-content/themes/prorm/images/newDesktopSpiral/5.png';"
         src="http://promx.staging.acceptic.com/wp-content/themes/prorm/images/newDesktopSpiral/5.png"><br>
    <img id="Order" class="landing-click"
         onmouseover="this.src='http://promx.staging.acceptic.com/wp-content/themes/prorm/images/newDesktopSpiral/Order-gray.png';"
         onmouseout="this.src='http://promx.staging.acceptic.com/wp-content/themes/prorm/images/newDesktopSpiral/6.png';"
         src="http://promx.staging.acceptic.com/wp-content/themes/prorm/images/newDesktopSpiral/6.png"><br>
    <img id="Sales" class="landing-click"
         onmouseover="this.src='http://promx.staging.acceptic.com/wp-content/themes/prorm/images/newDesktopSpiral/12.png';"
         onmouseout="this.src='http://promx.staging.acceptic.com/wp-content/themes/prorm/images/newDesktopSpiral/7.png';"
         src="http://promx.staging.acceptic.com/wp-content/themes/prorm/images/newDesktopSpiral/7.png"><br>
    <img id="ProjectImg" class="landing-click"
         onmouseover="this.src='http://promx.staging.acceptic.com/wp-content/themes/prorm/images/newDesktopSpiral/13.png';"
         onmouseout="this.src='http://promx.staging.acceptic.com/wp-content/themes/prorm/images/newDesktopSpiral/8.png';"
         src="http://promx.staging.acceptic.com/wp-content/themes/prorm/images/newDesktopSpiral/8.png"><p></p>
    <img id="ResourceImg" class="landing-click"
         onmouseover="this.src='http://promx.staging.acceptic.com/wp-content/themes/prorm/images/newDesktopSpiral/14.png';"
         onmouseout="this.src='http://promx.staging.acceptic.com/wp-content/themes/prorm/images/newDesktopSpiral/9.png';"
         src="http://promx.staging.acceptic.com/wp-content/themes/prorm/images/newDesktopSpiral/9.png"></p>
    <img id="ActivityImg" class="landing-click"
         onmouseover="this.src='http://promx.staging.acceptic.com/wp-content/themes/prorm/images/newDesktopSpiral/15.png';"
         onmouseout="this.src='http://promx.staging.acceptic.com/wp-content/themes/prorm/images/newDesktopSpiral/10.png';"
         src="http://promx.staging.acceptic.com/wp-content/themes/prorm/images/newDesktopSpiral/10.png"><br>
    <img id="InvoiceImg" class="landing-click"
         onmouseover="this.src='http://promx.staging.acceptic.com/wp-content/themes/prorm/images/newDesktopSpiral/16.png';"
         onmouseout="this.src='http://promx.staging.acceptic.com/wp-content/themes/prorm/images/newDesktopSpiral/11.png';"
         src="http://promx.staging.acceptic.com/wp-content/themes/prorm/images/newDesktopSpiral/11.png"></p>
<?php } else { ?>

    <img style="margin-left: -7px;margin-top: 40px;width: 414px;"
         src="http://prorm.net/wp-content/themes/prorm/images/germanSpiral/15.png"><br>
    <img id="proRMDe" style="margin-left: 405px;"
         src="http://prorm.net/wp-content/themes/prorm/images/germanSpiral/16.png"><br>
    <img style="margin-left: -9px;margin-top: -23px;" class="landing-click"
         src="http://prorm.net/wp-content/themes/prorm/images/germanSpiral/2.png"
         onmouseover="this.src='http://promx.staging.acceptic.com/wp-content/themes/prorm/images/germanSpiral/Lead-gray.png';"
         onmouseout="this.src='http://promx.staging.acceptic.com/wp-content/themes/prorm/images/germanSpiral/2.png';">
    <br>
    <img id="Verk" class="landing-click" src="http://prorm.net/wp-content/themes/prorm/images/germanSpiral/3.png"
         onmouseover="this.src='http://promx.staging.acceptic.com/wp-content/themes/prorm/images/germanSpiral/Verkaufschance-gray.png';"
         onmouseout="this.src='http://promx.staging.acceptic.com/wp-content/themes/prorm/images/germanSpiral/3.png';">
    <br>
    <img id="Ang" class="landing-click" src="http://prorm.net/wp-content/themes/prorm/images/germanSpiral/4.png"
         onmouseover="this.src='http://promx.staging.acceptic.com/wp-content/themes/prorm/images/germanSpiral/Angebot-gray.png';"
         onmouseout="this.src='http://promx.staging.acceptic.com/wp-content/themes/prorm/images/germanSpiral/4.png';">
    <br>
    <img id="Auf" class="landing-click" src="http://prorm.net/wp-content/themes/prorm/images/germanSpiral/1(3).png"
         onmouseover="this.src='http://promx.staging.acceptic.com/wp-content/themes/prorm/images/germanSpiral/Auftrag-gray.png';"
         onmouseout="this.src='http://promx.staging.acceptic.com/wp-content/themes/prorm/images/germanSpiral/1(3).png';">
    <br>
    <img id="Vert" class="landing-click"
         onmouseover="this.src='http://prorm.net/wp-content/themes/prorm/images/germanSpiral/10.png';"
         onmouseout="this.src='http://prorm.net/wp-content/themes/prorm/images/germanSpiral/5.png';"
         src="http://prorm.net/wp-content/themes/prorm/images/germanSpiral/5.png"><br>
    <img id="ProjektImg" class="landing-click"
         onmouseover="this.src='http://prorm.net/wp-content/themes/prorm/images/germanSpiral/11.png';"
         onmouseout="this.src='http://prorm.net/wp-content/themes/prorm/images/germanSpiral/6.png';"
         src="http://prorm.net/wp-content/themes/prorm/images/germanSpiral/6.png"><p></p>
    <img id="RessourceImg" class="landing-click"
         onmouseover="this.src='http://prorm.net/wp-content/themes/prorm/images/germanSpiral/12.png';"
         onmouseout="this.src='http://prorm.net/wp-content/themes/prorm/images/germanSpiral/7.png';"
         src="http://prorm.net/wp-content/themes/prorm/images/germanSpiral/7.png"><br>
    <img id="Leist" class="landing-click"
         onmouseover="this.src='http://prorm.net/wp-content/themes/prorm/images/germanSpiral/13.png';"
         src="http://prorm.net/wp-content/themes/prorm/images/germanSpiral/8.png"
         onmouseout="this.src='http://prorm.net/wp-content/themes/prorm/images/germanSpiral/8.png';"><br>
    <img id="Rech" class="landing-click"
         onmouseover="this.src='http://prorm.net/wp-content/themes/prorm/images/germanSpiral/14.png';"
         onmouseout="this.src='http://prorm.net/wp-content/themes/prorm/images/germanSpiral/9.png';"
         src="http://prorm.net/wp-content/themes/prorm/images/germanSpiral/9.png">

<?php } ?>
<?php if (pll_current_language('slug') == 'en') { ?>
    <div class="landing-text" style="margin-top:-220px;margin-bottom:40px;margin-left:-9px;display:none;">
        <div><img  style="margin-left:20px;" src="<?php echo get_site_url(); ?>/wp-content/themes/prorm/images/arrow-desktop.png"></div>
		<div style="margin-top:-10px;height:1px;width:100%;float:left;background-image:url('<?php echo get_site_url(); ?>/wp-content/themes/prorm/images/line-block-desktop.png')"></div>

        <div class="row">

            <div class="col-sm-10" style="left:10%;"><p class="header-video"
                    style="font-size:22px;font-style:italic;font-weight:700;color:#791239;display:none;margin-left:-300px;">Lead</p>
                <p class="video-text-spiral" style="display:none;margin-left:1000px;width:100%;">
				Lead allows you to define people interested in your products and services and assign them
                the Lead status. Provide potential clients with all the needed information to ensure
                further cooperation.</p>
            </div>
        </div>
    </div>

    <div class="landing-text" style="margin-top:-220px;margin-bottom:40px;margin-left:-9px;display:none;">
		<div><img  style="margin-left:100px;" src="<?php echo get_site_url(); ?>/wp-content/themes/prorm/images/arrow-desktop.png"></div>
		<div style="margin-top:-10px;height:1px;width:100%;float:left;background-image:url('<?php echo get_site_url(); ?>/wp-content/themes/prorm/images/line-block-desktop.png')"></div>
        <div class="row">
            <div class="col-sm-10" style="left:10%;"><p class="header-video"
                    style="font-size:22px;font-style:italic;font-weight:700;color:#791239;display:none;margin-left:-300px;">
                    Opportunity</p>
					      <p class="video-text-spiral" style="display:none;margin-left:1000px;width:100%;">
                Opportunity reflects chances to sell the product or service to potential or established
                customers, therefore setting the level of sales engagement. Here, you have the estimated
                revenue as well as all activities related to the sale always on hand.</p>

            </div>
        </div>
    </div>

    <div class="landing-text" style="margin-top:-220px;margin-bottom:40px;margin-left:-9px;display:none;">
        <div><img  style="margin-left:210px;" src="<?php echo get_site_url(); ?>/wp-content/themes/prorm/images/arrow-desktop.png"></div>
        <div style="margin-top:-10px;height:1px;width:100%;float:left;background-image:url('<?php echo get_site_url(); ?>/wp-content/themes/prorm/images/line-block-desktop.png')"></div>

        <div class="row">
             <div class="col-sm-10" style="left:10%;"><p class="header-video"
                    style="font-size:22px;font-style:italic;font-weight:700;color:#791239;display:none;margin-left:-300px;">Quote</p>
					      <p class="video-text-spiral" style="display:none;margin-left:1000px;width:100%;">
                While issuing the quote for the customer you can easily add products or
                services from the catalogue using prices from the pricelist and specifying the quantity.</p>

            </div>
        </div>
    </div>

    <div class="landing-text" style="margin-top:-220px;margin-bottom:40px;margin-left:-9px;display:none;">
        <div><img  style="margin-left:280px;" src="<?php echo get_site_url(); ?>/wp-content/themes/prorm/images/arrow-desktop.png"></div>
        <div style="margin-top:-10px;height:1px;width:100%;float:left;background-image:url('<?php echo get_site_url(); ?>/wp-content/themes/prorm/images/line-block-desktop.png')"></div>

        <div class="row">
             <div class="col-sm-10" style="left:10%;"><p class="header-video"
                    style="font-size:22px;font-style:italic;font-weight:700;color:#791239;display:none;margin-left:-300px;">Order</p>
				<p class="video-text-spiral" style="display:none;margin-left:1000px;width:100%;">
                While issuing the quote for the customer you can easily add products or services from
                the catalogue using prices from the pricelist and specifying the quantity.</p>
            </div>
        </div>
    </div>

    <div class="landing-text" style="margin-top:-220px;margin-bottom:40px;margin-left:-9px;display:none;">
        <div><img  style="margin-left:390px;" src="<?php echo get_site_url(); ?>/wp-content/themes/prorm/images/arrow-desktop.png"></div>
        <div style="margin-top:-10px;height:1px;width:100%;float:left;background-image:url('<?php echo get_site_url(); ?>/wp-content/themes/prorm/images/line-block-desktop.png')"></div>

        <div class="row">
             <div class="col-sm-10" style="left:10%;"><p class="header-video"
                    style="font-size:22px;font-style:italic;font-weight:700;color:#791239;display:none;margin-left:-300px;">Sales Management</p>
			  <p class="video-text-spiral" style="display:none;margin-left:1000px;width:100%;">With proRM Sales Assistant, you can easily configure the Opportunities and Quotes to the entire
                project structure while adding the products. You can assign required resources directly in the
                application or find the necessary ones with specific skills and availability.</p>

            </div>
        </div>
    </div>

    <div class="landing-text" style="margin-top:-220px;margin-bottom:40px;margin-left:-9px;display:none;">
        <div><img  style="margin-left:520px;" src="<?php echo get_site_url(); ?>/wp-content/themes/prorm/images/arrow-desktop.png"></div>
        <div style="margin-top:-10px;height:1px;width:100%;float:left;background-image:url('<?php echo get_site_url(); ?>/wp-content/themes/prorm/images/line-block-desktop.png')"></div>

        <div class="row">
             <div class="col-sm-10" style="left:10%;"><p class="header-video"
                    style="font-size:22px;font-style:italic;font-weight:700;color:#791239;display:none;margin-left:-300px;">Project Management</p>
				<p class="video-text-spiral" style="display:none;margin-left:1000px;width:100%;">With main applications such as Project Gantt, Controlling Manager and Approval Manager,
                you will always stay informed about the status and progress of your projects, monitor
                even the most complicated project thanks to the accurate visualization and keep all
                the bookings under control.</p>

            </div>
        </div>
    </div>

    <div class="landing-text" style="margin-top:-220px;margin-bottom:40px;margin-left:-9px;display:none;">
        <div><img  style="margin-left:660px;" src="<?php echo get_site_url(); ?>/wp-content/themes/prorm/images/arrow-desktop.png"></div>
        <div style="margin-top:-10px;height:1px;width:100%;float:left;background-image:url('<?php echo get_site_url(); ?>/wp-content/themes/prorm/images/line-block-desktop.png')"></div>

        <div class="row">
             <div class="col-sm-10" style="left:10%;"><p class="header-video"
                    style="font-size:22px;font-style:italic;font-weight:700;color:#791239;display:none;margin-left:-300px;">Resource Management</p>
				<p class="video-text-spiral" style="display:none;margin-left:1000px;width:100%;">Applications such as Resource Planning and Resource Assignment are essential tools for your clear and
                reliable resource management. If you need reinforcement for you project, just choose the most suitable
                available resource and assign it to the corresponding project.</p>

            </div>
        </div>
    </div>

    <div class="landing-text" style="margin-top:-220px;margin-bottom:40px;margin-left:-9px;display:none;">
        <div><img  style="margin-left:790px;" src="<?php echo get_site_url(); ?>/wp-content/themes/prorm/images/arrow-desktop.png"></div>
        <div style="margin-top:-10px;height:1px;width:100%;float:left;background-image:url('<?php echo get_site_url(); ?>/wp-content/themes/prorm/images/line-block-desktop.png')"></div>

        <div class="row">
           <div class="col-sm-10" style="left:10%;"><p class="header-video"
                    style="font-size:22px;font-style:italic;font-weight:700;color:#791239;display:none;margin-left:-300px;">Activity Management</p>
			  <p class="video-text-spiral" style="display:none;margin-left:1000px;width:100%;">Applications such as Resource Planning and Resource Assignment are essential tools for your
                clear and reliable resource management. If you need reinforcement for you project, just choose
                the most suitable available resource and assign it to the corresponding project.</p>

            </div>
        </div>
    </div>
	


<div class="landing-text" style="margin-top:-220px;margin-bottom:40px;margin-left:-9px;display:none;">
        <div><img  style="margin-left:920px;" src="<?php echo get_site_url(); ?>/wp-content/themes/prorm/images/arrow-desktop.png"></div>
        <div style="margin-top:-10px;height:1px;width:100%;float:left;background-image:url('<?php echo get_site_url(); ?>/wp-content/themes/prorm/images/line-block-desktop.png')"></div>

        <div class="row">
             <div class="col-sm-10" style="left:10%;"><p class="header-video"
                    style="font-size:22px;font-style:italic;font-weight:700;color:#791239;display:none;margin-left:-300px;">Invoice Management</p>
                      <p class="video-text-spiral" style="display:none;margin-left:1000px;width:100%;">proRM Invoicing Manager ensures a quick and accurate invoicing process. Flexibility of the application
                allows for making changes shortly before invoice publication. This can be especially convenient because
                of the importance of the billing process.</p>

            </div>
        </div>
    </div> 

<?php } else { ?>
    <div class="landing-text" style="margin-top:-200px;margin-bottom:40px;margin-left:-9px;display:none;">
        <div><img   style="margin-left:20px;" src="<?php echo get_site_url(); ?>/wp-content/themes/prorm/images/arrow-desktop.png"></div>
        <div style="margin-top:-10px;height:1px;width:100%;float:left;background-image:url('<?php echo get_site_url(); ?>/wp-content/themes/prorm/images/line-block-desktop.png')"></div>

        <div class="row">
              <div class="col-sm-10" style="left:10%;"><p class="header-video"
                    style="font-size:22px;font-style:italic;font-weight:700;color:#791239;display:none;margin-left:-300px;">Lead</p>
					<p class="video-text-spiral" style="display:none;margin-left:1000px;width:100%;">
                Der Lead ermöglicht es Ihnen, Leute zu bestimmen, die sich für Ihre Produkte und Dienstleistungen
                interessieren.
                Stellen Sie den Interessenten alle notwendige Informationen bereit, um die weitere Zusammenarbeit
                sicherzustellen.</p>
            </div>
        </div>
    </div>

    <div class="landing-text" style="margin-top:-200px;margin-bottom:40px;margin-left:-9px;display:none;">
        <div><img  style="margin-left:120px;" src="<?php echo get_site_url(); ?>/wp-content/themes/prorm/images/arrow-desktop.png"></div>
        <div style="margin-top:-10px;height:1px;width:100%;float:left;background-image:url('<?php echo get_site_url(); ?>/wp-content/themes/prorm/images/line-block-desktop.png')"></div>

        <div class="row">
           <div class="col-sm-10" style="left:10%;"><p class="header-video"
                    style="font-size:22px;font-style:italic;font-weight:700;color:#791239;display:none;margin-left:-300px;">
                    Verkaufschance</p>
					<p class="video-text-spiral" style="display:none;margin-left:1000px;width:100%;">
                Die Verkaufschance zeigt Ihnen die Chance an, das Produkt oder die Dienstleistung dem potenziellen
                oder
                vorhandenen Kunden zu verkaufen, also das Niveau des Vertriebsengagements. Hier haben Sie den
                geschätzten
                Umsatz sowie alle mit dem Verkauf verbundenen Aktivitäten zur Hand.</p>

            </div>
        </div>
    </div>

    <div class="landing-text" style="margin-top:-200px;margin-bottom:40px;margin-left:-9px;display:none;">
        <div><img  style="margin-left:220px;" src="<?php echo get_site_url(); ?>/wp-content/themes/prorm/images/arrow-desktop.png"></div>
        <div style="margin-top:-10px;height:1px;width:100%;float:left;background-image:url('<?php echo get_site_url(); ?>/wp-content/themes/prorm/images/line-block-desktop.png')"></div>

        <div class="row">
              <div class="col-sm-10" style="left:10%;"><p class="header-video"
                    style="font-size:22px;font-style:italic;font-weight:700;color:#791239;display:none;margin-left:-300px;">Angebot</p>
					<p class="video-text-spiral" style="display:none;margin-left:1000px;width:100%;">
                Beim Erstellen des Angebots für den Kunden können Sie ganz einfach Produkte und Dienstleistungen aus
                dem Katalog hinzufügen, dabei Preise aus der Preisliste nutzen und die Anzahl angeben.</p>
            </div>
        </div>
    </div>

    <div class="landing-text" style="margin-top:-200px;margin-bottom:40px;margin-left:-9px;display:none;">
        <div><img  style="margin-left:300px;" src="<?php echo get_site_url(); ?>/wp-content/themes/prorm/images/arrow-desktop.png"></div>
        <div style="margin-top:-10px;height:1px;width:100%;float:left;background-image:url('<?php echo get_site_url(); ?>/wp-content/themes/prorm/images/line-block-desktop.png')"></div>

        <div class="row">
             <div class="col-sm-10" style="left:10%;"><p class="header-video"
                    style="font-size:22px;font-style:italic;font-weight:700;color:#791239;display:none;margin-left:-300px;">Auftrag</p>
					<p class="video-text-spiral" style="display:none;margin-left:1000px;width:100%;">
                Auftrag ist ein akzeptiertes Angebot. Die präzise Auftragserstellung garantiert Ihnen
                Kundenvertrauen
                und erleichtert wesentlich die zukünftigen mit der Abrechnung verbundenen Prozesse.</p>

            </div>
        </div>
    </div>

    <div class="landing-text" style="margin-top:-200px;margin-bottom:40px;margin-left:-9px;display:none;">
        <div><img  style="margin-left:400px;" src="<?php echo get_site_url(); ?>/wp-content/themes/prorm/images/arrow-desktop.png"></div>
        <div style="margin-top:-10px;height:1px;width:100%;float:left;background-image:url('<?php echo get_site_url(); ?>/wp-content/themes/prorm/images/line-block-desktop.png')"></div>

        <div class="row">
          <div class="col-sm-10" style="left:10%;"><p class="header-video"
                    style="font-size:22px;font-style:italic;font-weight:700;color:#791239;display:none;margin-left:-300px;">Vertriebsmanagement</p>
					<p class="video-text-spiral" style="display:none;margin-left:1000px;width:100%;">
                Mit dem proRM-Vertriebsassistenten ist es einfach, die Verkaufschancen und Angebote in der gesamten
                Projektstruktur
                zu konfigurieren, während Produkte hinzugefügt werden.Sie können die erforderlichen Ressourcen
                direkt in der Anwendung zuweisen
                sowie die notwendigen Ressourcen mit den benötigten Fähigkeiten und Verfügbarkeiten finden.</p>
            </div>
        </div>
    </div>

    <div class="landing-text" style="margin-top:-200px;margin-bottom:40px;margin-left:-9px;display:none;">
        <div><img  style="margin-left:530px;" src="<?php echo get_site_url(); ?>/wp-content/themes/prorm/images/arrow-desktop.png"></div>
        <div style="margin-top:-10px;height:1px;width:100%;float:left;background-image:url('<?php echo get_site_url(); ?>/wp-content/themes/prorm/images/line-block-desktop.png')"></div>

        <div class="row">
             <div class="col-sm-10" style="left:10%;"><p class="header-video"
                    style="font-size:22px;font-style:italic;font-weight:700;color:#791239;display:none;margin-left:-300px;">Projektmanagement</p>
					<p class="video-text-spiral" style="display:none;margin-left:1000px;width:100%;">
                Mit den Hauptanwendungen wie Projekt Gantt, Controlling Manager und Genehmigungsmanager bleiben Sie
                immer auf dem Laufenden über
                den Fortschritt und Stand Ihrer Projekte, überwachen sogar die kompliziertesten Projekte dank einer
                verständlichen Visualisierung
                und behalten die Kontrolle über alle Buchungen.</p>

            </div>
        </div>
    </div>

    <div class="landing-text" style="margin-top:-200px;margin-bottom:40px;margin-left:-9px;display:none;">
        <div><img  style="margin-left:660px;" src="<?php echo get_site_url(); ?>/wp-content/themes/prorm/images/arrow-desktop.png"></div>
        <div style="margin-top:-10px;height:1px;width:100%;float:left;background-image:url('<?php echo get_site_url(); ?>/wp-content/themes/prorm/images/line-block-desktop.png')"></div>

        <div class="row">
            <div class="col-sm-10" style="left:10%;"><p class="header-video"
                    style="font-size:22px;font-style:italic;font-weight:700;color:#791239;display:none;margin-left:-300px;">Ressourcenmanagement</p>
					<p class="video-text-spiral" style="display:none;margin-left:1000px;width:100%;">
                Applikationen wie Ressourcenplanung und Ressourcenzuweisung sind unerlässliche Werkzeuge für eine
                eindeutige und verlässige Ressourcenverwaltung.
                Wenn Sie für Ihr Projekt Verstärkung benötigen, wählen Sie einfach eine am besten passende
                verfügbare Ressource aus und weisen Sie sie dem entsprechenden Projekt zu.</p>

            </div>
        </div>
    </div>

    <div class="landing-text" style="margin-top:-200px;margin-bottom:40px;margin-left:-9px;display:none;">
        <div><img  style="margin-left:790px;" src="<?php echo get_site_url(); ?>/wp-content/themes/prorm/images/arrow-desktop.png"></div>
        <div style="margin-top:-10px;height:1px;width:100%;float:left;background-image:url('<?php echo get_site_url(); ?>/wp-content/themes/prorm/images/line-block-desktop.png')"></div>

        <div class="row">
              <div class="col-sm-10" style="left:10%;"><p class="header-video"
                    style="font-size:22px;font-style:italic;font-weight:700;color:#791239;display:none;margin-left:-300px;">Leistungsmanagement</p>
					<p class="video-text-spiral" style="display:none;margin-left:1000px;width:100%;">
                Mit den Erfassungsapplikationen wie proRM-Erfassung und proRM-Erfassungsmanager haben Sie alle
                Buchungen der Mitarbeiter im Blick,
                überwachen den Projektfortschritt und können die Gaps ganz einfach bewerten. Darüber hinaus können
                Projektmanager eigene Buchungen
                erstellen und den Verlauf des Projektes, falls nötig, selbst beeinflussen.</p>

            </div>
        </div>
    </div>

    <div class="landing-text" style="margin-top:-200px;margin-bottom:40px;margin-left:-9px;display:none;">
        <div><img  style="margin-left:920px;" src="<?php echo get_site_url(); ?>/wp-content/themes/prorm/images/arrow-desktop.png"></div>
        <div style="margin-top:-10px;height:1px;width:100%;float:left;background-image:url('<?php echo get_site_url(); ?>/wp-content/themes/prorm/images/line-block-desktop.png')"></div>

        <div class="row">
              <div class="col-sm-10" style="left:10%;"><p class="header-video"
                    style="font-size:22px;font-style:italic;font-weight:700;color:#791239;display:none;margin-left:-300px;">Rechnungsmanagement</p>
					<p class="video-text-spiral" style="display:none;margin-left:1000px;width:100%;">
                Der proRM-Rechnungsmanager garantiert Ihnen eine schnelle und fehlerfreie Rechnungserstellung.
                Dank der Flexibilität der Applikation können Veränderungen bis kurz vor Rechnungserstellung
                vorgenommen werden,
                was beim Abrechnungsprozess besonders wichtig ist.</p>

            </div>
        </div>
    </div>
<?php } ?>


</div>



<?php if (pll_current_language('slug') == 'en') { ?>
    <div class="visible-sm visible-xs" style="margin-bottom:80px;">
        <div id="blockproRM">
            <div id="line-shem"></div>
            <div id="line-shems"></div>
            <div id="line-proRM"></div>
            <div id="line-shem-line"></div>
            <div id="line-shem-niz"></div>
        </div>
        <div class="Dynamics" style="margin-left:-9px;margin-top:50px;"></div>
        <div class="proRMSpiral landing-click" id="invoice"></div>
        <div id="arrowBlue"></div>
        <div class="arrowButton"></div>
        <div class="landing-text mobi-text" style="display:none;padding-bottom: 10px;">
            <ul>
                <li><p style="font-size:22px;font-style:italic;font-weight:700;color:#791239;">Lead</p>
                    Lead allows you to define people interested in your products and services and assign them
                    the Lead status. Provide potential clients with all the needed information to ensure further
                    cooperation.
                </li>
            </ul>
        </div>


        <div class="proRMSpiral landing-click" id="activity"></div>
        <div class="arrow2"></div>
          <div class="arrowButton"></div>
        <div class="landing-text mobi-text" style="display:none;padding-bottom: 10px;">
            <ul>
                <li><p style="font-size:22px;font-style:italic;font-weight:700;color:#791239;">Opportunity</p>
                    Opportunity reflects chances to sell the product or service to potential or established customers,
                    therefore setting the level of sales engagement. Here, you have the estimated revenue as well as all
                    activities related to the sale always on hand.
                </li>
            </ul>
        </div>

        <div class="proRMSpiral landing-click" id="resource"></div>
        <div class="arrow2"></div>
		<div class="arrowButton"></div>
        <div class="landing-text mobi-text" style="display:none;padding-bottom: 10px;">
            <ul>
                <li><p style="font-size:22px;font-style:italic;font-weight:700;color:#791239;">Quote</p>
                    While issuing the quote for the customer you can easily add products or services
                    from the catalogue using prices from the pricelist and specifying the quantity.
                </li>
            </ul>
        </div>
        <div class="proRMSpiral landing-click" id="project"></div>
        <div class="arrow2"></div>
		<div class="arrowButton"></div>
        <div class="landing-text mobi-text" style="display:none;padding-bottom: 10px;">
            <ul>
                <li><p style="font-size:22px;font-style:italic;font-weight:700;color:#791239;">Order</p>
                    Order is an accepted quote. Accurate order creation guarantees you customer’s trust
                    and significantly simplifies all the future processes related to accounting
                </li>
            </ul>
        </div>
        <div id="redBlock">
            <div class="MicrosoftDynamicsCRM SalesManag"></div>
            <div class="arrowSales"></div>
            <div class="buttomProject" id="buttomSales"></div>
            <div class="textSales landing-text-mobile">
                <div>
                    <ul>
                        <li><p style="font-size:22px;font-style:italic;font-weight:700;color:#791239;">Sales
                                Management</p>
                            With proRM Sales Assistant, you can easily configure the Opportunities and Quotes to the
                            entire
                            project structure while adding the products. You can assign required resources directly in
                            the
                            application or find the necessary ones with specific skills and availability.
                        </li>
                    </ul>
                </div>
            </div>
            <div class="MicrosoftDynamicsCRM ProjectManag"></div>
            <div class="arrow3"></div>
            <div class="buttomProject" id="buttomProject"></div>
            <div class="textProject landing-text-mobile">
                <div>
                    <ul>
                        <li>
                            <p style="font-size:22px;font-style:italic;font-weight:700;color:#791239;">Project
                                Management</p>
                            With main applications such as Project Gantt, Controlling Manager and Approval Manager,
                            you will always stay informed about the status and progress of your projects, monitor even
                            the most complicated project thanks to the accurate visualization and keep all the bookings
                            under control.
                        </li>
                    </ul>
                </div>

            </div>
            <div class="MicrosoftDynamicsCRM ResourceManag"></div>
            <div class="arrow3"></div>
            <div class="buttomProject" id="buttomResource"></div>
            <div class="textResource landing-text-mobile">
                <div>
                    <ul>
                        <li>
                            <p style="font-size:22px;font-style:italic;font-weight:700;color:#791239;">Resource
                                Management</p>
                            Applications such as Resource Planning and Resource Assignment are essential tools for your
                            clear
                            and reliable resource management.
                            If you need reinforcement for you project, just choose the most suitable available resource
                            and assign it
                            to the corresponding project.
                        </li>
                    </ul>
                </div>

            </div>
            <div class="MicrosoftDynamicsCRM ActivityManag"></div>
            <div class="arrow3"></div>
            <div class="buttomProject" id="buttomActivity"></div>
            <div class="textActivity landing-text-mobile">
                <div>
                    <ul>
                        <li>
                            <p style="font-size:22px;font-style:italic;font-weight:700;color:#791239;">Activity
                                Management</p>
                            With tracking application as proRM Tracking and proRM Tracking Manager you can keep an eye
                            on your
                            employees bookings, monitor the project progress and easily evaluate the gaps. Moreover,
                            project
                            managers can create their own bookings and, if necessary, influence the project course by
                            themselves.
                        </li>
                    </ul>
                </div>

            </div>
            <div class="MicrosoftDynamicsCRM InvoiceManag"></div>
            <div class="arrow3"></div>
            <div class="buttomProject" id="buttomInvoice"></div>
            <div id="textInvoice" class="landing-text-mobile">
                <ul>
                    <li>
                        <p style="font-size:22px;font-style:italic;font-weight:700;color:#791239;">Invoice
                            Management</p>
                        proRM Invoicing Manager ensures a quick and accurate invoicing process. Flexibility of the
                        application allows for making changes shortly before invoice publication. This can be
                        especially convenient because of the importance of the billing process.
                    </li>
                </ul>
            </div>
        </div>
    </div>

<?php } else { ?>
    <div class="visible-sm visible-xs" style="margin-bottom:90px;">
        <div id="blockproRM">
            <div id="line-shem"></div>
            <div id="line-shems"></div>
            <div id="line-proRM"></div>
            <div id="line-shem-line"></div>
            <div id="line-shem-niz"></div>
        </div>
        <div class="Dynamics" style="margin-left:-9px;margin-top:50px;"></div>

        <div class="proRMSpiral landing-click" id="invoice"></div>
        <div id="arrowBlue"></div>
		 <div class="arrowButton"></div>
        <div class="landing-text" style="display:none;padding-bottom: 10px;">
            <ul>
                <li><p style="font-size:22px;font-style:italic;font-weight:700;color:#791239;">Lead</p>
                    Der Lead ermöglicht es Ihnen, Leute zu bestimmen, die sich für Ihre Produkte und Dienstleistungen
                    interessieren. Stellen Sie den Interessenten alle notwendige Informationen bereit, um die weitere
                    Zusammenarbeit sicherzustellen.
                </li>
            </ul>
        </div>


        <div class="proRMSpiral landing-click" id="activity"></div>
        <div class="arrow2"></div>
		 <div class="arrowButton"></div>
        <div class="landing-text" style="display:none;padding-bottom: 10px;">
            <ul>
                <li><p style="font-size:22px;font-style:italic;font-weight:700;color:#791239;">Verkaufschance</p>
                    Die Verkaufschance zeigt Ihnen die Chance an, das Produkt oder die Dienstleistung dem
                    potenziellen oder vorhandenen Kunden zu verkaufen, also das Niveau des Vertriebsengagements.
                    Hier haben Sie den geschätzten Umsatz sowie alle mit dem Verkauf verbundenen Aktivitäten zur Hand.
                </li>
            </ul>
        </div>


        <div class="proRMSpiral landing-click" id="resource"></div>
        <div class="arrow2"></div>
		 <div class="arrowButton"></div>
        <div class="landing-text" style="display:none;padding-bottom: 10px;">
            <ul>
                <li><p style="font-size:22px;font-style:italic;font-weight:700;color:#791239;">Angebot</p>
                    Beim Erstellen des Angebots für den Kunden können Sie ganz einfach Produkte und Dienstleistungen
                    aus dem Katalog hinzufügen, dabei Preise aus der Preisliste nutzen und die Anzahl angeben.
                </li>
            </ul>
        </div>


        <div class="proRMSpiral landing-click" id="project"></div>
        <div class="arrow2"></div>
		 <div class="arrowButton"></div>
        <div class="landing-text" style="display:none;padding-bottom: 10px;">
            <ul>
                <li><p style="font-size:22px;font-style:italic;font-weight:700;color:#791239;">Auftrag</p>
                    Auftrag ist ein akzeptiertes Angebot. Die präzise Auftragserstellung garantiert
                    Ihnen Kundenvertrauen und erleichtert wesentlich die zukünftigen mit der Abrechnung
                    verbundenen Prozesse.
                </li>
            </ul>
        </div>

        <div id="redBlock">
            <div class="MicrosoftDynamicsCRM SalesManag"></div>
            <div class="arrowSales"></div>
            <div class="buttomProject" id="buttomSales"></div>
            <div class="textSales landing-text-mobile">
                <div>
                    <ul>
                        <li><p style="font-size:22px;font-style:italic;font-weight:700;color:#791239;">Vertriebsmanagement</p>
                            Mit dem proRM-Vertriebsassistenten ist es einfach, die Verkaufschancen und Angebote in der
                            gesamten Projektstruktur zu konfigurieren, während Produkte hinzugefügt werden.
                            Sie können die erforderlichen Ressourcen direkt in der Anwendung zuweisen sowie die
                            notwendigen Ressourcen mit den benötigten Fähigkeiten und Verfügbarkeiten finden.

                        </li>
                    </ul>
                </div>
            </div>

            <div class="MicrosoftDynamicsCRM ProjectManag"></div>

            <div class="arrow3"></div>
            <div class="buttomProject" id="buttomProject"></div>

            <div class="textProject landing-text-mobile">
                <div>
                    <ul>
                        <li><p style="font-size:22px;font-style:italic;font-weight:700;color:#791239;">Projektmanagement</p>
                            Mit den Hauptanwendungen wie Projekt Gantt, Controlling Manager und Genehmigungsmanager
                            bleiben Sie immer auf dem Laufenden über den Fortschritt und Stand Ihrer Projekte,
                            überwachen sogar die kompliziertesten Projekte dank einer verständlichen Visualisierung
                            und behalten die Kontrolle über alle Buchungen.
                        </li>
                    </ul>
                </div>
            </div>

            <div class="MicrosoftDynamicsCRM ResourceManag"></div>
            <div class="arrow3"></div>
            <div class="buttomProject" id="buttomResource"></div>
            <div class="textResource landing-text-mobile">
                <div>
                    <ul>
                        <li><p style="font-size:22px;font-style:italic;font-weight:700;color:#791239;">Ressourcenmanagement</p>
                            Applikationen wie Ressourcenplanung und Ressourcenzuweisung sind unerlässliche
                            Werkzeuge für eine eindeutige und verlässige Ressourcenverwaltung. Wenn Sie für
                            Ihr Projekt Verstärkung benötigen, wählen Sie einfach eine am besten passende verfügbare
                            Ressource aus und weisen Sie sie dem entsprechenden Projekt zu.
                        </li>
                    </ul>
                </div>
            </div>
            <div class="MicrosoftDynamicsCRM ActivityManag"></div>
            <div class="arrow3"></div>
            <div class="buttomProject" id="buttomActivity"></div>
            <div class="textActivity landing-text-mobile">
                <div>
                    <ul>
                        <li><p style="font-size:22px;font-style:italic;font-weight:700;color:#791239;">Leistungsmanagement</p>
                            Mit den Erfassungsapplikationen wie proRM-Erfassung und proRM-Erfassungsmanager haben
                            Sie alle Buchungen der Mitarbeiter im Blick, überwachen den Projektfortschritt und
                            können die Gaps ganz einfach bewerten. Darüber hinaus können Projektmanager eigene
                            Buchungen erstellen und den Verlauf des Projektes, falls nötig, selbst beeinflussen.
                        </li>
                    </ul>
                </div>

            </div>
            <div class="MicrosoftDynamicsCRM InvoiceManag"></div>
            <div class="arrow3"></div>
            <div class="buttomProject" id="buttomInvoice"></div>
            <div id="textInvoice" class="landing-text-mobile">
                <div>
                    <ul>
                        <li><p style="font-size:22px;font-style:italic;font-weight:700;color:#791239;">Rechnungsmanagement</p>
                            Der proRM-Rechnungsmanager garantiert Ihnen eine schnelle und fehlerfreie
                            Rechnungserstellung. Dank der Flexibilität der Applikation können Veränderungen
                            bis kurz vor Rechnungserstellung vorgenommen werden, was beim Abrechnungsprozess
                            besonders wichtig ist.
                        </li>
                    </ul>
                </div>
            </div>
        </div>

    </div>



<?php } ?>
</div>
</div>
</div>

<?php if (pll_current_language('slug') == 'en') { ?>
    <div style="background-color: #ededed;padding:30px 30px 60px;">
        <div class="container">
    <div style="margin-bottom:60px;">
        <center><h3 style="font-size:30px;font-style:italic;font-weight:700;">Try proRM Business Solutions </h3>

            <p style="font-size:25px;font-style:italic;color:#791239;margin-top: -20px;">in your company completely for free</p></center>
    </div>

        <center>
            <div class="row visible-sm visible-md visible-lg" style="margin-bottom:20px;">
                <div class="col-sm-4"><img src="<?php echo get_site_url(); ?>/wp-content/themes/prorm/images/5-proRM-Apps.png">
                </div>
                <div class="col-sm-4  col-xs-12"><img
                        src="<?php echo get_site_url(); ?>/wp-content/themes/prorm/images/30-day.png"></div>
                <div class="col-sm-4  col-xs-12"><img
                        src="<?php echo get_site_url(); ?>/wp-content/themes/prorm/images/people.png"></div>
            </div>

            <div class="row">
            <div class="col-sm-4 visible-sm visible-md visible-lg"><span style="color:#791239;">5 proRM Apps</br>With no time limitation</span>
            </div>
            <div class="col-sm-4  visible-sm visible-md visible-lg"><span
                    style="color:#791239;">All proRM Apps</br>Free 30-Day-Trial</span></div>
            <div class="col-sm-4  visible-sm visible-md visible-lg"><span style="color:#791239;">Up to 5 users</br>Completely for free</span>
            </div>

            <div class="row visible-xs" style="margin-bottom:20px;">
                <div class="col-xs-12" style="margin-top:-30px;"><img
                        src="<?php echo get_site_url(); ?>/wp-content/themes/prorm/images/5-proRM-Apps.png"></div>
                <div class="col-xs-12" style="margin-top:15px;"><span style="color:#791239;">5 proRM Apps</br>With no time limitatio</span></div>
                <div class="col-xs-12" style="margin-top:30px;"><img
                        src="<?php echo get_site_url(); ?>/wp-content/themes/prorm/images/30-day.png"></div>
                <div class="col-xs-12" style="margin-top:15px;"><span style="color:#791239;">All proRM Apps</br>Free 30-Day-Trial</span></div>
                <div class="col-xs-12" style="margin-top:30px;"><img
                        src="<?php echo get_site_url(); ?>/wp-content/themes/prorm/images/people.png"></div>
                <div class="col-xs-12" style="margin-top:15px;"><span style="color:#791239;">Up to 5 users</br>Completely for free</span></div>
            </div>

        </center>
            </div>
        </div>
<?php } else { ?>
    <div style="background-color: #ededed;padding:30px 30px 60px;">
            <div class="container">
    <div style="margin-bottom:60px;">
        <center><h3 style="font-size:30px;font-style:italic;font-weight:700;">Testen Sie die proRM Business
                Solutions </h3>

            <p style="font-size:25px;font-style:italic;color:#791239;margin-top: -20px;">komplett kostenlos in Ihrem Unternehmen</p>
        </center>
    </div>
        <center>
            <div class="row visible-sm visible-md visible-lg" style="margin-bottom:20px;">
                <div class="col-sm-4"><img src="<?php echo get_site_url(); ?>/wp-content/themes/prorm/images/5-proRM-Apps.png">
                </div>
                <div class="col-sm-4  col-xs-12"><img
                        src="<?php echo get_site_url(); ?>/wp-content/themes/prorm/images/30-day.png"></div>
                <div class="col-sm-4  col-xs-12"><img
                        src="<?php echo get_site_url(); ?>/wp-content/themes/prorm/images/people.png"></div>
            </div>
            <div class="row">
        <div class="col-sm-4  visible-sm visible-md visible-lg"><span style="color:#791239;">5 proRM Apps</br>Ohne zeitliche Beschränkung</span>
        </div>
        <div class="col-sm-4  visible-sm visible-md visible-lg"><span
                style="color:#791239;">Alle proRM Apps</br>30-Tage-Trial kostenlos</span></div>
        <div class="col-sm-4  visible-sm visible-md visible-lg"><span
                style="color:#791239;">Für bis zu 5 Benutzer</br>Komplett kostenlos</span></div>
            </div>


            <div class="row visible-xs" style="margin-bottom:20px;">
                <div class="col-xs-12" style="margin-top:-30px;"><img
                        src="<?php echo get_site_url(); ?>/wp-content/themes/prorm/images/5-proRM-Apps.png"></div>
                <div class="col-xs-12" style="margin-top:15px;"><span style="color:#791239;">5 proRM Apps</span></br>Ohne zeitliche Beschränkung</span></span></span></div>
                <div class="col-xs-12" style="margin-top:30px;"><img
                        src="<?php echo get_site_url(); ?>/wp-content/themes/prorm/images/30-day.png"></div>
                <div class="col-xs-12" style="margin-top:15px;"><span style="color:#791239;">Alle proRM Apps</br>30-Tage-Trial kostenlos</span></div>
                <div class="col-xs-12" style="margin-top:30px;"><img
                        src="<?php echo get_site_url(); ?>/wp-content/themes/prorm/images/people.png"></div>
                <div class="col-xs-12" style="margin-top:15px;"><span style="color:#791239;">Für bis zu 5 Benutzer</br>Komplett kostenlos</span></div>
            </div>
            </center>
        </div>

</div>
            </div>

<?php } ?>







<div class="container">
<?php if (pll_current_language('slug') == 'en') { ?>

    <div class="visible-sm visible-md visible-lg" style="margin-top:50px;">
        <center><p style="font-size:25px;font-style:italic;color:#791239;">Fill in the form and benefit from the
                advantages</br></p>
                <h3 style="font-size:30px;font-style:italic;font-weight:700;margin-top: -5px;">of proRM Business Solutions with proRM Freemium</h3>
    </div>

    <div class="visible-xs">
        <center><p style="font-size:25px;font-style:italic;color:#791239;">Fill in the form and benefit from the
                advantages</br></p>
                <h3 style="font-size:30px;font-style:italic;font-weight:700;margin-top: -5px;">of proRM Business Solutions with proRM Freemium</h3>
    </div>
<?php } else { ?>
    <div class="visible-sm visible-md visible-lg" style="margin-top:50px;">
        <center><p style="font-size:25px;font-style:italic;color:#791239;">Füllen Sie das Antragsformular aus und
                nutzen Sie</br></p>
                <h3 style="font-size:30px;font-style:italic;font-weight:700;margin-top: -5px;"> die Vorteile der proRM Business Solutions mit proRM Freemium</h3>
    </div>

    <div class="visible-xs">
        <center><p style="font-size:25px;font-style:italic;color:#791239;">Füllen Sie das Antragsformular aus und
                nutzen Sie</br></p>
                <h3 style="font-size:30px;font-style:italic;font-weight:700;margin-top: -5px;"> die Vorteile der proRM Business Solutions mit proRM Freemium</h3>
    </div>
<?php } ?>


<div id="form-youtube" class="col-sm-6 col-xs-12 landing-form-event-first">
    <div class="visible-md visible-lg visible-sm" style="margin-top:-30px;"><?php echo do_shortcode('[form name=wpc]'); ?></div>
    <div class="visible-xs" style="margin-left:10%;margin-top:-30px;"><?php echo do_shortcode('[form name=wpc]'); ?></div>
</div>

</div>



</body>
<?php get_template_part('navbar', 'bottom'); ?>


</html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

<script src="<?php echo get_template_directory_uri(); ?>/js/jquery-ui-1.10.4.custom.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.cookie.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/main.js?v=1.0"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/landing.js"></script>





