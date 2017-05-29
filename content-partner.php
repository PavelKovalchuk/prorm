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
    <link href="<?php echo ProRMTheme::url(); ?>/css/partner.css" rel="stylesheet">


</head>
<style type="text/css">


    .slide{
        width:100%;
        height:100%;
    }
    .sli-links{
        margin-top:10px;
        text-align:center;}
    .sli-links .control-slide{
        margin:2px;
        display:none;
        width:16px;
        height:16px;
        overflow:hidden;
        text-indent:-9999px;
        background:url(http://promx.net/wp-content/themes/prorm/images/partner-conference/radioBg.png) center bottom no-repeat;}

    .sli-links .control-slide:hover{
        cursor:pointer;
        background-position:center center;}
    .sli-links .control-slide.active{
        background-position:center top;}

    #prewbutton{left:10px;}
    #nextbutton{
        right:10px;}
    #prewbutton:hover, #nextbutton:hover{
        opacity:1;}

    .attachment-full:first-child {
        margin-left:0%;
    }

    .footer-social {
        text-align: center;
    }


    .footer-social a:nth-child(2), .footer-social a:nth-child(3) ,.footer-social a:nth-child(4) {
        margin-left:20px;
    }

    .legal-content {
        margin-top:20px;
    }

</style>
<title>Reinvention 2016 - Roadshow mit proMX and Microsoft</title>
<body class="landing-event-body">

<?php $dataCurLang = pll_current_language('slug'); ?>
<script>
    var __sliderInterval = <?php echo $sliderInterval; ?>;
    var __sliderChangingSpeed = <?php echo $sliderChangingSpeed; ?>;
</script>

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



    <div class="row visible-md visible-lg visible-sm" id="first-slide">
        <div class="col-sm-12">

            <div class="homepage-hero-module">

                <div class="video-container">
                    <div class="row">
                        <div class="col-sm-3" style="z-index:2000;float:right;padding-right:100px;margin-top:50px;">
                            <img style="padding-bottom:10px;" src="<?php echo ProRMTheme::url(); ?>/images/partner-conference/partner-logo.png" alt="proMX">
                        </div>
                    </div>
                    <div class="title-container" style="margin-top:50px;">

                        <div class="headline">
                            <span>proMX Partner Conference<br>Where the Best Partners Come Together</span>
                        </div>
                        <div class="description">

                            <div class="inner"><p>proMX announces the second Partner Conference in the company’s home city, Nuremberg, Bavaria.
                                    The conference is aimed at both existing and potential partners and is organized in order to discuss the past
                                    year’s achievements and results of the ever-developing successful partnerships.  </p>

                            </div>

                        </div>

                        <?php echo do_shortcode('[form name=promx-conference]'); ?>

                        <div class="row">
                            <a href="#second-slide" class="link-slide"><img src="<?php echo ProRMTheme::url(); ?>/images/roadshow/arrow.png"></a>
                        </div>
                    </div>



                    <div class="filter"></div>
                    <video autoplay loop class="fillWidth">
                        <source src="<?php echo ProRMTheme::url(); ?>/videos/bg.mp4" type="video/mp4" />
                    </video>

                </div>

            </div>
        </div>
    </div>

    <div class="row visible-xs" id="first-slide-mobi">
        <div class="col-xs-12" style="text-align:center;background-image: url(http://promx.net/wp-content/themes/prorm/images/partner-conference/bg-mobi.png)">
            <img style="padding:50px;" src="<?php echo ProRMTheme::url(); ?>/images/partner-conference/partner-logo.png" alt="proMX">
            <div class="headline">
                <span>proMX Partner Conference – Where the Best Partners Come Together</span>
            </div>
            <div class="description">

                <div class="inner" style="color:#ffffff"><p>proMX announces the second Partner Conference in the company’s home city, Nuremberg, Bavaria.
                        The conference is aimed at both existing and potential partners and is organized in order to discuss the past
                        year’s achievements and results of the ever-developing successful partnerships.  </p>

                </div>

            </div>
            <?php echo do_shortcode('[form name=promx-conference-mobi]'); ?>
        </div>
    </div> 

    <div class="container-fluid" id="second-slide">
        <div class="row">
            <div class="col-sm-12 col-xs-12 second-slide" style="background-color: #f7f7f7;">
                <div class="col-sm-4 col-xs-12">
                    <img src="<?php echo ProRMTheme::url(); ?>/images/partner-conference/partner-icon-people.png">
                </div>
                <div class="col-sm-8 col-xs-12">

                        <p class="headline headline-first" style="color:#000000;">Why you should attend the proMX Partner Conference 2016</p>
                        <p class="inner">Join us on June 8-10 in the proMX headquarters in Nuremberg for an event that allows for growing new business opportunities and expanding partner networks.
										<span style="color:#1e74bb;">*</span><br><br>
                            <p>Here, you will</p>
                            <ul style="padding:0px;list-style-type:none;margin-top:25px;">
                               <li style="margin-bottom:32px;">
								<img src="http://promx.net/wp-content/themes/prorm/images/partner-conference/icon-first.png" style="float:left;width:30px;height:30px;">
							    <p style="padding-left: 50px;">Meet qualified experts in the field of Microsoft Dynamics CRM and its extensions.</p>
							   </li>

								<li style="margin-bottom:32px;">
									<img src="http://promx.net/wp-content/themes/prorm/images/partner-conference/icon-second.png" style="float:left;width:30px;height:30px;">
									<p style="padding-left: 50px;">Exchange experiences and best practices with peers.</p>
								</li>

								<li style="margin-bottom:32px;">
								<img src="http://promx.net/wp-content/themes/prorm/images/partner-conference/icon-third.png" style="float:left;width:30px;height:30px;">
								<p style="padding-left: 50px;">Get to know the progressive add-ons provided by Microsoft partners from all over the
                                   world and use the conference to expand your own product range by including useful innovative solutions.</p>
								</li>

								<li style="margin-bottom:32px;">
								<img src="http://promx.net/wp-content/themes/prorm/images/partner-conference/icon-fourth.png" style="float:left;width:40px;height:30px;">
									<p style="padding-left: 50px;">Find new partners, which will help you open new markets for your products.</p>
								</li>

								<li style="margin-bottom:30px;">
								<img src="http://promx.net/wp-content/themes/prorm/images/partner-conference/icon-fifth.png" style="float:left;width:30px;">
									<p style="padding-left: 50px;">Spend a fantastic time with interesting people in one of the most beautiful cities in Germany.</p>
								</li>
								<li style="margin-bottom:30px;">
									<p style="color:#1e74bb;font-size:11px;">* Organizational fee is 150 Euro per participant</p>
								</li>

							</ul>


                        </p>



                </div>
            </div>

            <div class="col-sm-12 col-xs-12 third-slide">
                <div class="col-sm-8 col-xs-12">

                    <div class="col-sm-1 col-xs-12 visible-lg"><img class="img-soc-icon" style="float:left;" src="<?php echo ProRMTheme::url(); ?>/images/partner-conference/social-icon-microsoft.png"></div>
                    <div class="col-sm-4 col-xs-12 map-first visible-xs">
                        <img src="<?php echo ProRMTheme::url(); ?>/images/partner-conference/map-first.png">
                    </div>
                    <div class="col-sm-10 col-xs-12"><p class="headline" style="color:#000000;">Microsoft Ecosystem</p>
                    <p class="inner">For Microsoft, partnership has always meant much more than just useful business connections
                        to ensure assistance in a company’s continuous development and help spreading its influence across
                        the globe. For years, Microsoft has called its partner network an Ecosystem, in which every member
                        is significant and contributes to the global success of the leading provider of CRM solutions worldwide.
                    </p></div>
                </div>
                <div class="col-sm-4 col-xs-12 map-first visible-lg visible-md visible-sm">
                    <img src="<?php echo ProRMTheme::url(); ?>/images/partner-conference/map-first.png">
                </div>

            </div>

            <div class="col-sm-12 col-xs-12 fourth-slide">
                <div class="col-sm-4 col-xs-12">
                    <img src="<?php echo ProRMTheme::url(); ?>/images/partner-conference/map-second.png">
                </div>
                <div class="col-sm-8 col-xs-12">

                    <div class="col-sm-1 col-xs-12 visible-lg"><img class="img-soc-icon" style="float:left;" src="<?php echo ProRMTheme::url(); ?>/images/partner-conference/social-icon-proMX.png"></div>
                    <div class="col-sm-10 col-xs-12"><p class="headline headline-second" style="color:#000000;">proMX Ecosystem</p>
                        <p class="inner">Being a dedicated, long-time Microsoft partner, proMX shares Microsoft’s corporate values,
                            cherishes its own partners and always aims to establish new strong business relationships.
                            In the proMX-Team, we have a clear vision of how to make partnership effective and bring mutual
                            benefits to both parties. Therefore, following the Microsoft strategy, we built our own Ecosystem,
                            where successful Microsoft partners interact with each other, try to think in a new light and generate
                            ideas for successful implementation of joint projects.
                        </p></div>
                </div>


            </div>

            <div class="col-sm-12 col-xs-12 fifth-slide" style="background-color:#f7f7f7">



                <div class="col-sm-12  col-md-12 col-lg-6 col-xs-12">
                    
					<p class="headline" style="color:#000000;margin-top:-12px;">Spend an unforgettable time in Nuremberg</p>
                    <p class="inner">Without a doubt, Nuremberg is one of the most attractive and historically important cities
                        in Bavaria and Germany as a whole. The city in Northern Germany presents itself as a fascinating combination
                        of living past and modern present. With its medieval flair, Nuremberg offers its visitors a rich selection of culture,
                        art and of course delicious culinary specialties.
                    </p>


                    </p>
                    <div style="margin-top:20px">
                        <a href="http://promx.net/upload/Agenda_Partner_Conference.pdf" target="_blank" class="button button-form visible-md visible-lg visible-sm">
                            <span style="color:#ffffff;"><?php _e('Agenda', ProRMTheme::TEXTDOMAIN) ?></span>
                        </a>
                        <a href="http://promx.net/upload/Agenda_Partner_Conference.pdf" target="_blank" class="button button-form visible-xs" style="float:none;text-align: center">
                            <span style="color:#ffffff;"><?php _e('Agenda', ProRMTheme::TEXTDOMAIN) ?></span>
                        </a>
                    </div>
                </div>

                <div class="col-sm-12 col-md-12 col-lg-6  col-xs-12">
                    <div id="slider-wrap">
                        <div id="slider">
						 <div class="slide"><img src="<?php echo ProRMTheme::url(); ?>/images/partner-conference/slide-show/5.png"></div>
                            <div class="slide"><img src="<?php echo ProRMTheme::url(); ?>/images/partner-conference/slide-show/11.png"></div>
							
							<div class="slide"><img src="<?php echo ProRMTheme::url(); ?>/images/partner-conference/slide-show/23.png"></div>
							<div class="slide"><img src="<?php echo ProRMTheme::url(); ?>/images/partner-conference/slide-show/1.png"></div>
                            <div class="slide"><img src="<?php echo ProRMTheme::url(); ?>/images/partner-conference/slide-show/3.png"></div>
      
                           
                            <div class="slide"><img src="<?php echo ProRMTheme::url(); ?>/images/partner-conference/slide-show/6.png"></div>
                            <div class="slide"><img src="<?php echo ProRMTheme::url(); ?>/images/partner-conference/slide-show/7.png"></div>
                        </div>
                    </div>

                </div>




            </div>

            <div class="col-sm-12 col-xs-12 sixth-slide">
                <div class="col-sm-12 col-md-12 col-lg-6  col-xs-12 video">
                    <video controls style="width:100%;">
                        <source src="<?php echo ProRMTheme::url(); ?>/videos/conference.mp4" type="video/mp4" />
                    </video>
                </div>

                <div class="col-sm-12 col-md-12 col-lg-6 col-xs-12">
                    <p class="headline" style="color:#000000;margin-top:-12px;">Our memories of last year</p>
                    <p class="inner"><p>Let’s go on an excursion into history and take a short look at the brightest and most memorable moments of the proMX Partner Conference 2015:</p>
             
                </div>



            </div>

            <div class="col-sm-12 col-xs-12 seventh-slide">
                <center class="headline last-head" style="color:#000000;"> Unlock the beneficial partnership opportunities with one of the most successful German Microsoft partners</center>
                <div style="color:#000000;font-size:25px;" class="head-form">
                    If you have any further questions regarding the conference and participation, please feel free to contact us
                </div>
                <?php echo do_shortcode('[form name=conference-contact]'); ?>
            </div>

            <div class="col-sm-12 col-xs-12 eighth-slide">

                <div style="padding-bottom:30px;">
                    <span style="font-size:25px;color:#000000;">proMX Awards</span>
                </div>
                <div style="border-top: 1px solid #cccccc;padding-top:30px;text-align: center">
                    <img src="<?php echo ProRMTheme::url(); ?>/images/roadshow/logos.png">
                </div>


            </div>
            <div class="col-sm-12 col-xs-12 footer-social">


                            <?php if (is_active_sidebar('social-icons')) { ?>
                                <?php dynamic_sidebar('social-icons'); ?>
                            <?php } ?>
                <div class="legal-content">
                    ©2016 proMX GmbH
                </div>

                </div>
            </div>
        </div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

<script src="<?php echo get_template_directory_uri(); ?>/js/jquery-ui-1.10.4.custom.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.cookie.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/main.js?v=1.0"></script>
<script   src="<?php echo get_template_directory_uri(); ?>/js/partner.js"></script>

<script type="text/javascript">
    (function ($) {
        var hwSlideSpeed = 300;
        var hwTimeOut = 700000;
        var hwNeedLinks = true;

        $(document).ready(function(e) {
            $('.slide').css(
                {"position" : "absolute",
                    "top":'0', "left": '0'}).hide().eq(0).show();
            var slideNum = 0;
            var slideTime;
            slideCount = $("#slider .slide").size();
            var animSlide = function(arrow){
                clearTimeout(slideTime);
                $('.slide').eq(slideNum).fadeOut(hwSlideSpeed);
                if(arrow == "next"){
                    if(slideNum == (slideCount-1)){slideNum=0;}
                    else{slideNum++}
                }
                else if(arrow == "prew")
                {
                    if(slideNum == 0){slideNum=slideCount-1;}
                    else{slideNum-=1}
                }
                else{
                    slideNum = arrow;
                }
                $('.slide').eq(slideNum).fadeIn(hwSlideSpeed, rotator);
                $(".control-slide.active").removeClass("active");
                $('.control-slide').eq(slideNum).addClass('active');
            }
            if(hwNeedLinks){
                var $linkArrow = $('<a id="prewbutton" href="#">&lt;</a><a id="nextbutton" href="#">&gt;</a>')
                    .prependTo('#slider');
                $('#nextbutton').click(function(){
                    animSlide("next");
                    return false;
                })
                $('#prewbutton').click(function(){
                    animSlide("prew");
                    return false;
                })
            }
            var $adderSpan = '';
            $('.slide').each(function(index) {
                $adderSpan += '<span class = "control-slide">' + index + '</span>';
            });
            $('<div class ="sli-links">' + $adderSpan +'</div>').appendTo('#slider-wrap');
            $(".control-slide:first").addClass("active");
            $('.control-slide').click(function(){
                var goToNum = parseFloat($(this).text());
                animSlide(goToNum);
            });
            var pause = false;
            var rotator = function(){
                if(!pause){slideTime = setTimeout(function(){animSlide('next')}, hwTimeOut);}
            }
            $('#slider-wrap').hover(
                function(){clearTimeout(slideTime); pause = true;},
                function(){pause = false; rotator();
                });
            rotator();
        });

        $(".link-slide").on("click", function (event) {
            //отменяем стандартную обработку нажатия по ссылке
            event.preventDefault();

            //забираем идентификатор бока с атрибута href
            var id  = $(this).attr('href'),

            //узнаем высоту от начала страницы до блока на который ссылается якорь
                top = $(id).offset().top;

            //анимируем переход на расстояние - top за 1500 мс
            $('body,html').animate({scrollTop: top}, 1000);
        });



    })(jQuery);
</script>
</html>
