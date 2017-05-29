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
	<title>Partner Dinner Invitation</title>

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
    <link href="<?php echo ProRMTheme::url(); ?>/css/dinner.css" rel="stylesheet">


</head>


<body class="landing-event-body">

<?php $dataCurLang = pll_current_language('slug'); ?>
<script>
    var __sliderInterval = <?php echo $sliderInterval; ?>;
    var __sliderChangingSpeed = <?php echo $sliderChangingSpeed; ?>;
</script>



<div class="row visible-md visible-lg visible-sm" id="first-slide">
    <div class="col-sm-12">

        <div class="homepage-hero-module">

            <div class="video-container">
                <div class="row">
                    <div class="col-sm-3" style="z-index:2000;float:right;padding-right:100px;margin-top:50px;">
                        <img style="padding-bottom:10px;" src="<?php echo ProRMTheme::url(); ?>/images/partner-dinner/logo.png" alt="proMX">
                    </div>
                </div>
                <div class="title-container" style="margin-top:50px;">

                    <div class="headline">
                        <span>We cordially invite you to attend the Partner Dinner
							  <br>organized by proMX, RealDolmen and Bizdirect



</span>
                    </div>
                    <div class="description">

                        <div class="inner"><p>Join us for dinner at one of the most renowned restaurants in Warsaw. Over a meal and in the warm and friendly atmosphere, let us get to know each other in person and talk about the projects we can accomplish together in the future.</p>
							<br><p>Please fill in the form to let us know that you will join us</p>
                        </div>

                    </div>

                    <?php echo do_shortcode('[form name=partner-dinner]'); ?>

                    <div class="row">
                        <a href="#second-slide" class="link-slide"><img src="<?php echo ProRMTheme::url(); ?>/images/roadshow/arrow.png"></a>
                    </div>
                </div>



                <div class="filter"></div>
                <img class="fillWidth" src="<?php echo ProRMTheme::url(); ?>/images/partner-dinner/main.jpg">



            </div>

        </div>
    </div>
</div>

<div class="row visible-xs" id="first-slide-mobi">
    <div class="col-xs-12" style="text-align:center;background-image: url(http://promx.net/wp-content/themes/prorm/images/partner-dinner/main.jpg)">
        <img style="padding:50px;" src="<?php echo ProRMTheme::url(); ?>/images/partner-dinner/logo.png" alt="proMX">
        <div class="headline">
            <span>We cordially invite you to attend the Partner Dinner<br>
organized by proMX, RealDolmen and Bizdirect


</span>
        </div>
        <div class="description">

            <div class="inner" style="color:#ffffff"><p>Join us for dinner at one of the most renowned restaurants in Warsaw. Over a meal and in the warm and friendly atmosphere, let us get to know each other in person and talk about the projects we can accomplish together in the future.</p>
							<p>Please fill in the form to let us know that you will join us</p>

            </div>

        </div>
        <?php echo do_shortcode('[form name=partner-dinner-mobi]'); ?>
    </div>
</div>

    <div class="col-sm-12 col-xs-12" id="second-slide" style="text-align:center">
        <div class="visible-xs">
        <div style="padding:50px;" class="col-sm-4 col-xs-12">
            <img src="<?php echo ProRMTheme::url(); ?>/images/partner-dinner/realdolmen.png">
        </div>
        <div style="padding:50px;" class="col-sm-4 col-xs-12">
            <img  src="<?php echo ProRMTheme::url(); ?>/images/partner-dinner/bizdirect.png">
        </div>
        <div style="padding:50px;" class="col-sm-4 col-xs-12">
            <img   src="<?php echo ProRMTheme::url(); ?>/images/partner-dinner/proMX.png">
        </div>
        </div>

        <div class="visible-md visible-lg visible-sm">
       <div  class="col-sm-4 realdolm-icon">
            <a href="http://crm.realdolmen.com/" target="_blank"><img src="<?php echo ProRMTheme::url(); ?>/images/partner-dinner/realdolmen-big.png"></a>
        </div>
        <div class="col-sm-4">
            <a href="http://www.bizdirect.pt/en/" target="_blank"><img  src="<?php echo ProRMTheme::url(); ?>/images/partner-dinner/bizdirect-big.png"></a>
        </div>
        <div class="col-sm-4">
            <a href="http://promx.net/en/" target="_blank"><img   src="<?php echo ProRMTheme::url(); ?>/images/partner-dinner/proMX-big.png"></a>
        </div>
     
            
      
        </div>

    </div>
	
	
	<div class="col-sm-12 col-xs-12 photos" style="text-align:center;background-color:#f7f7f7;">
		<p class="headline" style="color:#000000;margin-bottom:70px;margin-top:-20px;">We are glad to invite you to our dinner and look forward to active discussions and fruitful cooperation</p>
			<div class="col-sm-4 col-xs-12">
				<img src="<?php echo ProRMTheme::url(); ?>/images/partner-dinner/Wim.jpg">
				<br>
				<br>
				<p><strong>Wim Geukens</strong></p>
				<p>Division Manager CRM<br>RealDolmen</p>
			
			</div>
			
			<div class="col-sm-4 col-xs-12">
				<img  src="<?php echo ProRMTheme::url(); ?>/images/partner-dinner/loa.jpg">
				<br>
				<br>
				<p><strong>João Santiago</strong></p>
				<p>CEO<br>Bizdirect</p>
			
			</div>
			
			<div class="col-sm-4 col-xs-12">
			<img src="<?php echo ProRMTheme::url(); ?>/images/partner-dinner/Piter.jpg">
			<br>
			<br>
			<p><strong>Peter Linke</strong></p>
			<p>CEO and President<br>proMX</p>
			</div>
			
			
		</div>



        <div class="col-sm-12 col-xs-12 third-slide">
            <div class="col-sm-12 col-md-8 col-lg-8 col-xs-12">

                <div class="col-sm-1 col-xs-12 visible-lg"><img class="img-soc-icon" style="float:left;" src="<?php echo ProRMTheme::url(); ?>/images/partner-dinner/eco-check.png"></div>
                <div class="col-sm-4 col-xs-12 map-first visible-xs">
                    <img src="<?php echo ProRMTheme::url(); ?>/images/partner-conference/map-first.png">
                </div>
                <div class="col-sm-10 col-xs-12"><p class="headline" style="color:#000000;">Our Partner Ecosystem</p>
                    <p class="inner"><p>Being dedicated Microsoft partners, proMX (Germany), RealDolmen (Belgium), 
						and Bizdirect (Portugal), share Microsoft’s corporate values, cherish their partners and 
						always aim to strengthen existing business relationships and establish new and promising ones. </p>
                        <p>Our union has proven that by always trusting partners that hold the same business 
						views as you, you can reach new business levels and work more efficient. </p>
                        <p>That is why, proMX, RealDolmen and Bizdirect invite you to this informal 
						dinner in one of the most atmospheric restaurants in Warsaw, where you will meet our decision makers, learn more about our companies and the partner program we offer. </p>
                        <p><strong>Use this opportunity not only to establish reliable business connections but also to meet new friends.</strong></p>

                    </p></div>
            </div>
            <div class="col-sm-12 col-md-4 col-lg-4 col-xs-12 map-first visible-lg visible-md visible-sm">
                <img src="<?php echo ProRMTheme::url(); ?>/images/partner-conference/map-second.png">
            </div>

        </div>


        <div class="col-sm-12 col-xs-12 fifth-slide" style="background-color:#f7f7f7">

            <div class="col-sm-12 col-md-12 col-lg-6  col-xs-12">

					<div id="slider-wrap">
                        <div id="slider">
						 <div class="slide"><img src="<?php echo ProRMTheme::url(); ?>/images/partner-dinner/photo-1.jpg"></div>
                          <div class="slide"><img src="<?php echo ProRMTheme::url(); ?>/images/partner-dinner/photo-2.jpg"></div>
							<div class="slide"><img src="<?php echo ProRMTheme::url(); ?>/images/partner-dinner/photo-3.jpg"></div>
							<div class="slide"><img src="<?php echo ProRMTheme::url(); ?>/images/partner-dinner/photo-4.jpg"></div>
							<div class="slide"><img src="<?php echo ProRMTheme::url(); ?>/images/partner-dinner/photo-5.jpg"></div>
                        </div>
                    </div>



            </div>

            <div class="col-sm-12  col-md-12 col-lg-6 col-xs-12 text-bottom-img">

<div><p class="headline" style="color:#000000;margin-top:-12px;">Enjoy a wonderful time and traditional polish cuisine in the friendly international community</p></div>

                <div class="inner"><p>
                    <div style="position:relative;top:20px;">
                    <div class="col-sm-1 visible-lg"><img class="img-soc-icon icon-map"  src="<?php echo ProRMTheme::url(); ?>/images/partner-dinner/time.png"></div>
                    <div class="col-sm-11 col-xs-12">
                        <p class="headline" style="color:#000000;margin-top:-5px;"><strong>When</strong></p>
                        <p>You are cordially invited on <strong>18th of April at 8.00 pm</strong> <br>to the restaurant Strefa Restaurant & Bar in the Warsaw Old Town.</p></div>
                    </div>

                    <div style="position:relative;top:40px;">
                    <div class="col-sm-1 visible-lg"><img class="img-soc-icon icon-map"  src="<?php echo ProRMTheme::url(); ?>/images/partner-dinner/map-check.png"></div>
                    <div class="col-sm-11 col-xs-12">
                        <p class="headline" style="color:#000000;margin-top:-5px;"><strong>Where</strong></p>
                    <p><strong>Strefa Restaurant & Bar</strong></p>
                    <p>Prozna 9</p>
                    <p>00-107 Warsaw</p></div></div>

                </div>




            </div>






        </div>
		
		


        <div class="col-sm-12 col-xs-12 seventh-slide">
            <center class="headline last-head" style="color:#000000;">Unlock beneficial business opportunities with successful Microsoft partners</center>
            <div style="color:#000000;font-size:25px;" class="head-form">
                <center>If you have any further questions, please feel free to contact us</center>
            </div>
            <?php echo do_shortcode('[form name=dinner-contact]'); ?>
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
<script   src="<?php echo get_template_directory_uri(); ?>/js/dinner.js"></script>

<script type="text/javascript">
    (function ($) {

	var hwSlideSpeed = 300;
        var hwTimeOut = 2500;
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
               /* var $linkArrow = $('<a id="prewbutton" href="#">&lt;</a><a id="nextbutton" href="#">&gt;</a>')
                    .prependTo('#slider');*/
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
           // $('<div class ="sli-links">' + $adderSpan +'</div>').appendTo('#slider-wrap');
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