<?php include('header.php');

?>

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
                       href="<?php echo esc_url(site_url()); ?>/de/der-prorm-newsroom/">Newsroom</a>
                    <a id='what' style="margin-left:  1.0416666667%;"
                       href="<?php echo esc_url(site_url()); ?>/de/erleben">Erleben</a>
                    <a id='application' style="margin-left:  1.0416666667%;"
                       href="<?php echo esc_url(site_url()); ?>/de/anwendungen/">Anwendungen</a>
                    <a id='shop' style="margin-left:  1.0416666667%;"
                       href="<?php echo esc_url(site_url()); ?>/de/kaufen/">Kaufen</a>
                    <a id="references" style="margin-left:  1.0416666667%;"
                       href="<?php echo esc_url(site_url()); ?>/de/referenzen/">Referenzen</a>
                    <a id="partners" style="margin-left:  1.0416666667%;"
                       href="<?php echo esc_url(site_url()); ?>/de/partner">Partner</a>
                    <a id="support" style="margin-left: 1.0416666667%;"
                       href="<?php echo esc_url(site_url()); ?>/de/support/">Support</a>
                    <a id="contacts" style="margin-left:  1.0416666667%;"
                       href="<?php echo esc_url(site_url()); ?>/de/kontakt/">Kontakt</a>
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


<!--<nav id="footerPage" class="navbar-bottom navbar navbar-default"  role="navigation">
    <div class="container">
        <div class="row">
            <?php ProRMTheme::showBottomMenu(); ?>
        </div>
    </div>
</nav>-->

<div class="container default-page">
<div class="row visible-md visible-lg">
    <div class="col-sm-12">
        <div id="content" role="main">

            <img id="imgMan-de" style="display:none;height:auto;" src="<?php echo ProRMTheme::url(); ?>/images/man-de.png">

            <a href="http://prorm.net/de/aktionen/testen/" id="but-de" class="pro-btn" style="display:none;">
                <span>Die kostenlose 1-Jahr-Version</span>
            </a>






            <div id="spiral">
                <img id="proRm" src="<?php echo ProRMTheme::url(); ?>/images/prorm.png"
                     style="position:absolute;">


                <img  id="invoce-management" src="<?php echo ProRMTheme::url(); ?>/images/Rechungs-management-de.png"
                      style="position:absolute;">

                <img id="activity-management"
                     src="<?php echo ProRMTheme::url(); ?>/images/Activity-Management-de.png"
                     style="position:absolute;">


                <img id="resource-management"
                     src="<?php echo ProRMTheme::url(); ?>/images/Resource-Management-de.png"
                     style="position:absolute;">


                <img id="project-management" src="<?php echo ProRMTheme::url(); ?>/images/Project-Management-de.png"
                     style="position:absolute;">



                <img  id="order" src="<?php echo ProRMTheme::url(); ?>/images/order-de.png"
                      style="position:absolute;">


                <img id="microdynamics" src="<?php echo ProRMTheme::url(); ?>/images/microdynamics.png"
                     style="position:absolute;">


                <img  id="quote" src="<?php echo ProRMTheme::url(); ?>/images/Quote-de.png"
                      style="position:absolute;">




                <img  id="opportunity" src="<?php echo ProRMTheme::url(); ?>/images/Opportunity-de.png"
                      style="position:absolute;">

                <img  id="lead" src="<?php echo ProRMTheme::url(); ?>/images/Lead.png"
                      style="position:absolute;">
            </div>


        </div>
    </div>


</div>

<div class="visible-sm visible-xs mob" style="margin-bottom:80px;">
    <?php get_header(); ?>

    <div style="margin-top: 20px;display:none;" id="imgManMobi"></div>
    <a href="http://prorm.net/de/aktionen/testen/"  id="but-des" class="pro-btn">
        <span>Die kostenlose 1-Jahr-Version</span>
    </a>
<div id="spiralMobi">
    <div id="blockproRMS">
        <div id="line-shem" ></div>
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
    <div class="proRMSpiral" id="projects" ></div>

    <div  id="fourthArrow" class="arrowB"></div>





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
        if($(window).width()<1024){
            $('#invoices,#firstArrow').css('opacity', 0).show().animate({opacity: 1}, 1000);
            $('#activitys,#secondArrow').delay(500).css('opacity', 0).show().animate({opacity: 1}, 1000);
            $('#resources,#thirdArrow').delay(1000).css('opacity', 0).show().animate({opacity: 1}, 1000);
            $('#projects,#fourthArrow').delay(1500).css('opacity', 0).show().animate({opacity: 1}, 1000);
            $('.ProjectManags,#fifthArrow').delay(2000).css('opacity', 0).show().animate({opacity: 1}, 1000);
            $('.ResourceManags,#sixthArrow').delay(2500).css('opacity', 0).show().animate({opacity: 1}, 1000);
            $('.ActivityManags,#seventhArrow').delay(3000).css('opacity', 0).show().animate({opacity: 1}, 1000);
            $('.InvoiceManags,#eightsArrow').delay(3500).css('opacity', 0).show().animate({opacity: 1}, 1000);
            $('.Dynamicss').delay(4000).css('opacity', 0).show().animate({opacity: 1}, 1000);
            $('#blockproRMS').delay(4500).css('opacity', 0).show().animate({opacity: 1}, 1000,function(){
                if($(window).width()<361){
              $('.Dynamicss').delay(1000).css({'margin-top':'230px'});
                }
                if($(window).width()>360 && $(window).width()<=640){
                    $('.Dynamicss').delay(1000).css({'margin-top':'250px'});
                }
                if($(window).width()>641){
                    $('.Dynamicss').delay(1000).css({'margin-top':'420px'});
                }
                    $('#imgManMobi').delay(1500).css('opacity', 0).show().animate({opacity: 1}, 1000);
                    $('#but-des').delay(1500).css('opacity', 0).show().animate({opacity: 1}, 1000);
                    //    $('#spiralMobi').offset({"top": '400px'});

            });




        }

    });

    if($(window).width()>1024){
        $(window).load(function () {
            //   console.log($(window).width());
            $('#lead').css('opacity', 0).show().animate({opacity: 1}, 2000);
            $('#opportunity').delay(500).css('opacity', 0).show().animate({opacity: 1}, 2000);
            $('#quote').delay(1000).css('opacity', 0).show().animate({opacity: 1}, 2000);
            $('#order').delay(1500).css('opacity', 0).show().animate({opacity: 1}, 2000);
            $('#project-management').delay(2000).css('opacity', 0).show().animate({opacity: 1}, 2000);
            $('#resource-management').delay(2500).css('opacity', 0).show().animate({opacity: 1}, 2000);
            $('#activity-management').delay(3000).css('opacity', 0).show().animate({opacity: 1}, 2000);
            $('#invoce-management').delay(3500).css('opacity', 0).show().animate({opacity: 1}, 2000);
            $('#microdynamics').delay(4000).css('opacity', 0).show().animate({opacity: 1}, 2000);
            $('#proRm').delay(4500).css('opacity', 0).show().animate({opacity: 1}, 2000);

            setTimeout(downElements, 5000);
        });


        function downElements() {

            if(screen.height<=768){
                down(screen.height/2.2,450,'60%',700);
            }


            if(screen.height>768 && screen.height<=900){
                down(screen.height/2.2,480,'80%',950);
            }

            if(screen.height>900 && screen.height<1021){
                down($screen.height/2.2,400,'70%',950);
            }

            if(screen.height>=1020 && screen.height<=1079){
                down(screen.height/2.2,550,'70%',950);
            }
            if(screen.height>=1080 && screen.height<1200){
                down(screen.height/2.2,580,'70%',900);
            }

            if(screen.height>=1200 && screen.height<1360){
                down(screen.height/2.2,630,'70%',1000);
            }

            if(screen.height>1360){
                down(screen.height/2.35,860,'140%',1600);
            }






        }

        function down(topSpiral,topStabilizeSpiral){
            $('#spiral').animate({"top": topSpiral},1200).effect("bounce", {times: 4, distance: 20}, 1000,function(){
                $('#imgMan-de').css('opacity', 0).show().animate({opacity: 1}, 500);
                $('#but-de').css('opacity', 0).show().animate({opacity: 1}, 500);
                $('#spiral').offset({"top": topStabilizeSpiral});
                // $("#spiral").css({marginBottom:'100px'});

                /*    $('#seventhStr').css('opacity', 0).show().animate({opacity: 1}, 500);

                 $('#sixthStr').delay(500).css('opacity', 0).show().animate({opacity: 1}, 500);
                 $('#fifthStr').delay(1000).css('opacity', 0).show().animate({opacity: 1}, 500);
                 $('#fourthStr').delay(1500).css('opacity', 0).show().animate({opacity: 1}, 500);
                 $('#thirdStr').delay(2000).css('opacity', 0).show().animate({opacity: 1}, 500);
                 $('#secondStr').delay(2500).css('opacity', 0).show().animate({opacity: 1}, 500);
                 $('#firstStr').delay(3000).css('opacity', 0).show().animate({opacity: 1}, 500, function () {
                 $('td:first-child+td').delay(3500).css('border-left-style', 'solid');
                 $('td:first-child+td+td').delay(3500).css('border-left-style', 'solid');
                 $('td:first-child+td+td+td').delay(3500).css('border-left-style', 'solid');


                 $('#footerPage').delay(2500).slideToggle(function(){

                 $("#spiral").animate({top:700},2000);
                 $("#pro").animate({top: screen.height+$(this).position().top},2000);
                 $("#footerPage").animate({top: screen.height/1.2},2000,
                 function(){
                 $("#footerPage")
                 .css('top','')
                 .addClass('navbar-fixed-bottom')
                 .effect("bounce",{times: 1, distance: 10},100,function () {
                 $('#text').css('opacity', 0).show().animate({opacity: 1}, 3000);
                 $('#arrow').css('opacity', 0).show().animate({opacity: 1}, 3000, function () {
                 $("#pro").offset({top:offsetProTable});
                 /*   if(screen.height<=768){
                 $('#pro').css('margin-bottom','250px');
                 }*/

                /*   if(screen.height>=1360){
                 $('#pro').css('margin-top','10%');
                 }

                 $("#spiral").css({top:''});
                 $("#spiral").css({marginBottom:marginBottomSpiral});
                 });
                 });

                 });

                 });
                 });*/
            });
            setTimeout(allPage, 4000);
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




