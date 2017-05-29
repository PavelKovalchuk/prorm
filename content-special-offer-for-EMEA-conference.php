<?php include('header.php');

?>
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

<script src="<?php echo get_template_directory_uri(); ?>/js/jquery-ui-1.10.4.custom.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.cookie.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/main.js?v=1.0"></script>
<link href="<?php echo ProRMTheme::url(); ?>/css/landing-page.css" rel="stylesheet">


<nav class="navbar-top navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container-fluid">
        <div class="row navbar-top-row">
            <div class="col-xs-8 col-md-10"> <!-- was col-md-6 for left menu | col-md-8 for top -->
                <div class="menu-switcher navbar-top-item"></div>
                <div class="logos-holder navbar-top-item">
                    <div class="logo logo-prorm">
                        <a href="<?php echo esc_url(site_url()); ?>">
                            <img src="<?php echo ProRMTheme::url(); ?>/images/logo-prorm-new.png"
                                 alt="<?php bloginfo('name'); ?>">

                        </a>
                    </div>
                </div>
                <!-- added top menu -->


                <div class="top-menu" style="margin-top:30px;margin-left: 0.5208333333%; ">
                    <a id='news' style="margin-left: 1.0416666667%;"
                       href="<?php echo esc_url(site_url()); ?>/en/prorm-newsroom/">Newsroom</a>
                    <a id='what' style="margin-left:  1.0416666667%;"
                       href="<?php echo esc_url(site_url()); ?>/en/what-is-prorm/">What is proRM</a>
                    <a id='application' style="margin-left:  1.0416666667%;"
                       href="<?php echo esc_url(site_url()); ?>/en/applications/">Applications</a>
                    <a id='shop' style="margin-left:  1.0416666667%;"
                       href="<?php echo esc_url(site_url()); ?>/en/prorm-shop/">Shop</a>
                    <a id="references" style="margin-left:  1.0416666667%;"
                       href="<?php echo esc_url(site_url()); ?>/en/testimonials/">References</a>
                    <a id="partners" style="margin-left:  1.0416666667%;"
                       href="<?php echo esc_url(site_url()); ?>/en/partners/">Partners</a>
                    <a id="support" style="margin-left: 1.0416666667%;"
                       href="<?php echo esc_url(site_url()); ?>/en/support-en">Support</a>
                    <a id="contacts" style="margin-left:  1.0416666667%;"
                       href="<?php echo esc_url(site_url()); ?>/en/contact-us">Contacts</a>
                </div>

            </div>
            <div class="col-xs-4 col-md-2"> <!-- was cal-md-6 for left menu | col-md-4 for top-->
                <div class="lang-switcher-holder">
                    <?php echo ProRMTheme::getLangSwitcher(); ?>
                </div>
            </div>
        </div>
    </div>
</nav>


<div class="container default-page">
<div class="row visible-md visible-lg">
    <div class="col-sm-12">
        <div id="content" role="main">

            <img id="imgManEMAE" style="display:none;height:auto;"
                 src="http://promx.staging.acceptic.com/wp-content/themes/prorm/images/prorm-Dublin-proRM.png">

            <a href="http://promx.staging.acceptic.com/en/registration/" id="but-emae" class="pro-btn" style="display:none;">
                <span>Register Now</span>
            </a>


            <div id="spiral">
                <img id="proRm" src="<?php echo ProRMTheme::url(); ?>/images/prorm.png"
                     style="position:absolute;">


                <img id="invoce-management" src="<?php echo ProRMTheme::url(); ?>/images/invoce-management.png"
                     style="position:absolute;">

                <img id="activity-management"
                     src="<?php echo ProRMTheme::url(); ?>/images/Activity-Management.png"
                     style="position:absolute;">


                <img id="resource-management"
                     src="<?php echo ProRMTheme::url(); ?>/images/Resource-Management.png"
                     style="position:absolute;">


                <img id="project-management" src="<?php echo ProRMTheme::url(); ?>/images/Project-Management.png"
                     style="position:absolute;">


                <img id="order" src="<?php echo ProRMTheme::url(); ?>/images/order.png"
                     style="position:absolute;">


                <img id="microdynamics" src="<?php echo ProRMTheme::url(); ?>/images/microdynamics.png"
                     style="position:absolute;">


                <img id="quote" src="<?php echo ProRMTheme::url(); ?>/images/Quote.png"
                     style="position:absolute;">


                <img id="opportunity" src="<?php echo ProRMTheme::url(); ?>/images/Opportunity.png"
                     style="position:absolute;">

                <img id="lead" src="<?php echo ProRMTheme::url(); ?>/images/Lead.png"
                     style="position:absolute;">
            </div>


        </div>
    </div>


</div>

<div class="visible-sm visible-xs mob" style="margin-bottom:80px;">
    <?php get_header(); ?>

    <div style="margin-top: 20px;display:none;" id="imgManMobiEMAE"></div>
    <a href="http://promx.staging.acceptic.com/en/registration/" id="but-mobiemae" class="pro-btn">
        <span>Register Now</span>
    </a>

    <div id="spiralMobi">
        <div id="blockproRMS">
            <div id="line-shem"></div>
            <div id="line-shemss"></div>
            <div id="line-proRM"></div>
            <div id="line-shem-lines"></div>
            <div id="line-shem-niz"></div>
        </div>
        <div class="Dynamicss"></div>


        <div id="redBlocks">


            <div class="MicrosoftDynamicsCRM InvoiceManags"></div>
            <div id="eightsArrow" class="arrowRed"></div>


            <div class="MicrosoftDynamicsCRM ActivityManags"></div>
            <div id="seventhArrow" class="arrowRed"></div>


            <div class="MicrosoftDynamicsCRM ResourceManags"></div>
            <div id="sixthArrow" class="arrowRed"></div>


            <div class="MicrosoftDynamicsCRM ProjectManags"></div>
            <div id="fifthArrow" class="arrowRed"></div>


        </div>
        <div class="proRMSpiral" id="projects"></div>

        <div id="fourthArrow" class="arrowB"></div>


        <div class="proRMSpiral" id="resources"></div>
        <div id="thirdArrow" class="arrowB"></div>


        <div class="proRMSpiral" id="activitys"></div>
        <div id="secondArrow" class="arrowB"></div>


        <div class="proRMSpiral" id="invoices"></div>
        <div id="firstArrow" class="arrowBlue"></div>

    </div>


    <script src="<?php echo get_template_directory_uri(); ?>/js/main.js?v=1.0"></script>

</div>


<script type="text/javascript">
    $(window).load(function () {
        if ($(window).width() < 1024) {
            $('#invoices,#firstArrow').css('opacity', 0).show().animate({opacity: 1}, 3000);
            $('#activitys,#secondArrow').delay(1000).css('opacity', 0).show().animate({opacity: 1}, 3000);
            $('#resources,#thirdArrow').delay(1500).css('opacity', 0).show().animate({opacity: 1}, 3000);
            $('#projects,#fourthArrow').delay(2000).css('opacity', 0).show().animate({opacity: 1}, 3000);
            $('.ProjectManags,#fifthArrow').delay(2500).css('opacity', 0).show().animate({opacity: 1}, 3000);
            $('.ResourceManags,#sixthArrow').delay(3000).css('opacity', 0).show().animate({opacity: 1}, 3000);
            $('.ActivityManags,#seventhArrow').delay(3500).css('opacity', 0).show().animate({opacity: 1}, 3000);
            $('.InvoiceManags,#eightsArrow').delay(4000).css('opacity', 0).show().animate({opacity: 1}, 3000);
            $('.Dynamicss').delay(5000).css('opacity', 0).show().animate({opacity: 1}, 3000);
            $('#blockproRMS').delay(6000).css('opacity', 0).show().animate({opacity: 1}, 3000, function () {
                if ($(window).width() < 361) {
                    $('.Dynamicss').delay(1000).css({'margin-top': '180px'});
                }
                if ($(window).width() > 360 && $(window).width() <= 640) {
                    $('.Dynamicss').delay(1000).css({'margin-top': '230px'});
                }
                if ($(window).width() > 641) {
                    $('.Dynamicss').delay(1000).css({'margin-top': '360px'});
                }
                $('#imgManMobiEMAE').delay(1500).css('opacity', 0).show().animate({opacity: 1}, 3000);
                $('#but-mobiemae').delay(1500).css('opacity', 0).show().animate({opacity: 1}, 3000);
                //    $('#spiralMobi').offset({"top": '400px'});

            });


        }

    });
    if ($(window).width() > 1024) {
        $(window).load(function () {

            $('#lead').css('opacity', 0).show().animate({opacity: 1}, 3000);
            $('#opportunity').delay(1000).css('opacity', 0).show().animate({opacity: 1}, 3000);
            $('#quote').delay(2000).css('opacity', 0).show().animate({opacity: 1}, 3000);
            $('#order').delay(3000).css('opacity', 0).show().animate({opacity: 1}, 3000);
            $('#project-management').delay(4000).css('opacity', 0).show().animate({opacity: 1}, 3000);
            $('#resource-management').delay(5000).css('opacity', 0).show().animate({opacity: 1}, 3000);
            $('#activity-management').delay(6000).css('opacity', 0).show().animate({opacity: 1}, 3000);
            $('#invoce-management').delay(7000).css('opacity', 0).show().animate({opacity: 1}, 3000);
            $('#microdynamics').delay(8000).css('opacity', 0).show().animate({opacity: 1}, 3000);
            $('#proRm').delay(9000).css('opacity', 0).show().animate({opacity: 1}, 3000);

            setTimeout(downElements, 13000);
        });


        function downElements() {

            if (screen.height <= 768) {
                down(screen.height / 2.2, 450, '60%', 700);
            }


            if (screen.height > 768 && screen.height <= 900) {
                down(screen.height / 2.2, 480, '80%', 950);
            }

            if (screen.height > 900 && screen.height < 1021) {
                down(screen.height / 2.2, 500, '70%', 950);
            }

            if (screen.height >= 1020 && screen.height <= 1079) {
                down(screen.height / 2.2, 550, '70%', 950);
            }
            if (screen.height >= 1080 && screen.height < 1200) {
                down(screen.height / 2.2, 580, '70%', 900);
            }

            if (screen.height >= 1200 && screen.height < 1360) {
                down(screen.height / 2.2, 630, '70%', 1000);
            }

            if (screen.height > 1360) {
                down(screen.height / 2.35, 860, '140%', 1600);
            }


        }

        function down(topSpiral, topStabilizeSpiral) {
            $('#spiral').animate({"top": topSpiral}, 1200).effect("bounce", {times: 4, distance: 20}, 1000, function () {
			if(screen.width == 1280 && screen.height == 960){
                $('#imgManEMAE').css({'opacity':0,'margin-left':'10%'}).show().animate({opacity: 1}, 500);
                $('#but-emae').css({'opacity':0,'top': '80px','position': 'relative','margin-left': '-40%'}).show().animate({opacity: 1}, 500);
			}else{
				$('#imgManEMAE').css('opacity', 0).show().animate({opacity: 1}, 500);
                $('#but-emae').css('opacity', 0).show().animate({opacity: 1}, 500);
			}
                $('#spiral').offset({"top": topStabilizeSpiral});

            });
            setTimeout(allPage, 10000);
        }

        function allPage() {

            $('#news').delay(2000).css('opacity', 0).show().animate({opacity: 1}, 3000);
            $('#what').delay(4000).css('opacity', 0).show().animate({opacity: 1}, 3000);
            $('#application').delay(6000).css('opacity', 0).show().animate({opacity: 1}, 3000);
            $('#shop').delay(8000).css('opacity', 0).show().animate({opacity: 1}, 3000);
            $('#references').delay(10000).css('opacity', 0).show().animate({opacity: 1}, 3000);
            $('#partners').delay(12000).css('opacity', 0).show().animate({opacity: 1}, 3000);
            $('#support').delay(14000).css('opacity', 0).show().animate({opacity: 1}, 3000);
            $('#contacts').delay(16000).css('opacity', 0).show().animate({opacity: 1}, 3000);
        }

    }
</script>




