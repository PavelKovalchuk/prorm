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
                       href="<?php echo esc_url(site_url()); ?>/prorm-newsroom/">Newsroom</a>
                    <a id='what' style="margin-left:  1.0416666667%;"
                       href="<?php echo esc_url(site_url()); ?>/prorm-newsroom/">What is proRM</a>
                    <a id='application' style="margin-left:  1.0416666667%;"
                       href="<?php echo esc_url(site_url()); ?>/prorm-newsroom/">Applications</a>
                    <a id='shop' style="margin-left:  1.0416666667%;"
                       href="<?php echo esc_url(site_url()); ?>/prorm-newsroom/">Shop</a>
                    <a id="references" style="margin-left:  1.0416666667%;"
                       href="<?php echo esc_url(site_url()); ?>/prorm-newsroom/">References</a>
                    <a id="partners" style="margin-left:  1.0416666667%;"
                       href="<?php echo esc_url(site_url()); ?>/prorm-newsroom/">Partners</a>
                    <a id="support" style="margin-left: 1.0416666667%;"
                       href="<?php echo esc_url(site_url()); ?>/prorm-newsroom/">Support</a>
                    <a id="contacts" style="margin-left:  1.0416666667%;"
                       href="<?php echo esc_url(site_url()); ?>/prorm-newsroom/">Contacts</a>
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


<nav id="footerPage" class="navbar-bottom navbar navbar-default"  role="navigation">
    <div class="container">
        <div class="row">
            <?php ProRMTheme::showBottomMenu(); ?>
        </div>
    </div>
</nav>

<div class="container default-page">
<div class="row">
<div class="col-sm-12">
    <div id="content" role="main">



<div id="text">
    <p style="text-indent:100px">HELLO PETER,</p>
<p style="text-indent:100px">Welcome to the world of marketing creativity!
This is an idea of our new landing page, based on proRM-website.
Here our prospects will be explained the sense of our product and asked to use the call-to-action buttons.</p>
<p style="text-indent:100px">The usual-traditional landing page gives the prospects only the chance to click the CTA buttons, but this one is adoptable. While you are reading this text, the horizontal menu begins to appear. Thus, if somebody is not ready to contact us, to meet us, etc., he/she will have a chance to know more about our solution using normal website navigation.</p>
<p style="text-indent:100px">Sincerely yours,</p>
<p style="text-indent:100px">Marketing Team -))</p>
</div>
<div id="arrow">
    <img style="margin-left:12%" src="<?php echo ProRMTheme::url(); ?>/images/arrow.png">
    <img style="margin-left:9%;" src="<?php echo ProRMTheme::url(); ?>/images/arrow.png">
    <img style="margin-left: 8%;" src="<?php echo ProRMTheme::url(); ?>/images/arrow.png">
    <img style="margin-left: 8%;" src="<?php echo ProRMTheme::url(); ?>/images/arrow.png">
    <img style="margin-left: 9%;" src="<?php echo ProRMTheme::url(); ?>/images/arrow.png">

</div>



    <table class="proRmTable" id="pro">
        <col id="col_1" width="19%">
        <col id="col_2" width="28%">
        <col id="col_3" width="28%">

        <tr id="firstStr">
                    <td>proRM</br>   ProjectTree</td>
                    <td>proRM</br>Resource Gantt</td>
                    <td>proRM</br>Tracking</td>
                    <td>proRM</br>Invoicing Manager</td>
                </tr>
                <tr id="secondStr">
                    <td>proRM</br>ProjectGantt</td>
                    <td>proRM</br>Resource Planning</td>
                    <td>proRM</br>Fast Tracking</td>
                    <td></td>
                </tr>
                <tr id="thirdStr">
                    <td>proRM</br>Budget Planning</td>
                    <td>proRM</br>Resource Assignment</td>
                    <td>proRM</br>Tracking Manager</td>
                    <td></td>
                </tr>
                <tr id="fourthStr">
                    <td>proRM</br>Controlling Manager</td>
                    <td>proRM</br>Workload</td>
                    <td>proRM</br>Outlook Tracking</td>
                    <td></td>
                </tr>
                <tr id="fifthStr">
                    <td>proRM</br>Approval Manager</td>
                    <td></td>
                    <td>proRM</br>Windows Tracking</td>
                    <td></td>
                </tr>
                <tr id="sixthStr">
                    <td>proRM</br>Template Editor</td>
                    <td></td>
                    <td>proRM</br>Windows PhoneTracking</td>
                    <td></td>
                </tr>
                <tr id="seventhStr">
                    <td>proRM</br>Bulk Booking</td>
                    <td></td>
                    <td>proRM</br>Web Tracking</td>
                    <td></td>
                </tr>
    </table>




<div id="spiral">
   <img id="proRm" src="<?php echo ProRMTheme::url(); ?>/images/prorm.png"
         style="position:absolute;">


    <img  id="invoce-management" src="<?php echo ProRMTheme::url(); ?>/images/invoce-management.png"
          style="position:absolute;">

    <img id="activity-management"
         src="<?php echo ProRMTheme::url(); ?>/images/Activity-Management.png"
         style="position:absolute;">


    <img id="resource-management"
         src="<?php echo ProRMTheme::url(); ?>/images/Resource-Management.png"
         style="position:absolute;">


    <img id="project-management" src="<?php echo ProRMTheme::url(); ?>/images/Project-Management.png"
         style="position:absolute;">



    <img  id="order" src="<?php echo ProRMTheme::url(); ?>/images/order.png"
          style="position:absolute;">


    <img id="microdynamics" src="<?php echo ProRMTheme::url(); ?>/images/microdynamics.png"
         style="position:absolute;">


    <img  id="quote" src="<?php echo ProRMTheme::url(); ?>/images/Quote.png"
          style="position:absolute;">




    <img  id="opportunity" src="<?php echo ProRMTheme::url(); ?>/images/Opportunity.png"
              style="position:absolute;">

        <img  id="lead" src="<?php echo ProRMTheme::url(); ?>/images/Lead.png"
              style="position:absolute;">
    </div>


</div>
</div>


</div>





<script type="text/javascript">

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

        setTimeout(downElements, 15000);
    });


    function downElements() {

        if(screen.height<=768){
            down(screen.height/2.9,250,'60%',900);
        }

        if(screen.height>768 && screen.height<=900){
            down(screen.height/2.2,280,'80%',950);
        }

        if(screen.height>900 && screen.height<=1020){
            down(screen.height/2.2,400,'70%',950);
        }





    }

    function down(topSpiral, topStabilizeSpiral,marginBottomSpiral,offsetProTable){
        $('#spiral').animate({"top": topSpiral},1200).effect("bounce", {times: 4, distance: 20}, 2000,function(){
            $('#spiral').offset({"top": topStabilizeSpiral});

            $('#seventhStr').css('opacity', 0).show().animate({opacity: 1}, 500);

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
                    $("#pro").animate({top: $(window).height()+$(this).position().top},2000);
                    $("#footerPage").animate({top: screen.height/1.2},2000,
                        function(){
                            $("#footerPage")
                                .css('top','')
                                .addClass('navbar-fixed-bottom')
                                .effect("bounce",{times: 1, distance: 10},100,function () {
                                    $('#text').css('opacity', 0).show().animate({opacity: 1}, 3000);
                                    $('#arrow').css('opacity', 0).show().animate({opacity: 1}, 3000, function () {
                                        $("#pro").offset({top:offsetProTable});
                                        if(screen.height<=768){
                                            $('#pro').css('margin-bottom','250px');
                                        }

                                        if(screen.height>=1360){
                                            $('#pro').css('margin-top','10%');
                                        }
                                        $("#spiral").css({top:''});
                                        $("#spiral").css({marginBottom:marginBottomSpiral});
                                    });
                                });

                        });

                });
            });
        });
        setTimeout(allPage, 30000);
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


</script>




