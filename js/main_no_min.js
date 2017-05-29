(function ($) {

   $( document ).ready(function() {
	   
		if(location.href=="http://promx.net/de/") {
			document.title = 'proMX - verlässlicher MS-Partner für Umsetzung Ihrer CRM-Projekte | proMX';
		}
 			
        var height = $(window).height() ;

        var cebitHeight = parseInt(height) + 'px';

        $('.cebit-first-slide').css('height',cebitHeight);

        $('#hhp').css('overflow-x','visible');
    });


    if(screen.width<=480) {

        $('#partner_products img:first').css('margin-top','35px');
        $('#business-consulting img[src="http://promx.net/wp-content/uploads/2015/10/pavlov-media-logo-300x120-300x120.png"]').css('margin-top','30px');
        $('#construction-industry img[src="http://promx.net/wp-content/uploads/2015/11/envicon.png"]').css('margin-top','30px');

    }




        $('.ssb-share').before('<p class="share-text">Share this:</p>');


    (function() {
        var ua = window.navigator.userAgent;
        var msie = ua.indexOf("MSIE");
//        if(msie) { // Условие для вызова только в IE
//            $("form").find("input").each(function() {
//                var tp = $(this).attr("placeholder");
//                $(this).attr('value',tp).css('color','#ccc');
//            }).focusin(function() {
//                var val = $(this).attr('placeholder');
//                if($(this).val() == val) {
//                    $(this).attr('value','').css('color','#303030');
//                }
//            }).focusout(function() {
//                var val = $(this).attr('placeholder');
//                if($(this).val() == "") {
//                    $(this).attr('value', val).css('color','#ccc');
//                }
//            });
//
//            /* Protected send form */
//            $("form").submit(function() {
//                $(this).find("input").each(function() {
//                    var val = $(this).attr('placeholder');
//                    if($(this).val() == val) {
//                        $(this).attr('value','');
//                    }
//                })
//            });
//        }

    })();


    $(document).ready(function () {
		
		$('#card-9444 a').attr('href','http://promx.net/de/roadshow-reinvention-2016/');
		
		$('#card-9446 a').attr('href','http://promx.net/de/roadshow-reinvention-2016/');
		
		$('#card-9303 a').attr('href','http://promx.net/de/cebit-2016/');
		
		$('#card-9298 a').attr('href','http://promx.net/de/cebit-2016/');
		
		$('#card-9345 a').attr('href','http://promx.net/de/cebit-2016-promx-und-traviata/');
		
		$('#card-9349 a').attr('href','http://promx.net/de/cebit-2016-promx-und-traviata/');
		
		$('#card-9512 a').attr('href','http://promx.net/en/promx-partner-conference-2016/');
		
		$('#card-9508 a').attr('href','http://promx.net/en/promx-partner-conference-2016/');

        $('script').attr('defer','defer')

     //   $('.breadcrumbs a').attr('onclick','goBack()');

        $('.size-medium').addClass('aligncenter');
        $('.size-medium').css('padding', '10px');
        $('.size-medium').wrap('<div class="imgWrap"></div>');

        $('.size-thumbnail').addClass('aligncenter');
        $('.size-thumbnail').css('padding', '10px');
        $('.size-thumbnail').wrap('<div class="imgWrap"></div>');

        $('.imgWrap').css('background-color', '#f5f5f5');

        $('pre').parent().css('margin-bottom', '20px');

        $('#tablist1-tab1').
            prepend('<img class="img-tab-first" style="top:1000px;position:relative" src="http://promx.net/wp-content/themes/prorm/images/microsoft-dynamics-products/microsoft-dynamics/sales-icon.png">');
        $('#tablist1-tab2').
            prepend('<img class="img-tab-second" style="top:1000px;position:relative" src="http://promx.net/wp-content/themes/prorm/images/microsoft-dynamics-products/microsoft-dynamics/marketing-icon.png">');
        $('#tablist1-tab3').
            prepend('<img class="img-tab-second"  style="top:1000px;position:relative" src="http://promx.net/wp-content/themes/prorm/images/microsoft-dynamics-products/microsoft-dynamics/service-icon.png">');
        $('#tablist1-tab4').
            prepend('<img class="img-tab-first" style="top:1000px;position:relative" src="http://promx.net/wp-content/themes/prorm/images/microsoft-dynamics-products/microsoft-dynamics/social-icon.png">');

        $('.product-left-block').animate({'left': '0px'}, 600, 'easeOutQuad');
        $('.img-tab-first').animate({'top': '0px'}, 600, 'easeOutQuad');
        $('.img-tab-second').animate({'top': '0px'}, 600, 'easeOutQuad');

        $('.product-text-block-first:first').css('left', '0px');
        $('.product-text-block-second:first').css('left', '0px');

        $('.responsive-tabs__list__item').each(function (i) {
            $('.responsive-tabs__list__item').eq(i).click(function () {
                $('.product-text-block-first').eq(i).animate({'left': '0px'}, 500, 'easeOutQuad');
                $('.product-text-block-second').eq(i).animate({'left': '0px'}, 500, 'easeOutQuad');

                $('.product-text-block-first').eq(i - 1).css('left', '-1500px');
                $('.product-text-block-first').eq(i + 1).css('left', '-1500px');


                $('.product-text-block-second').eq(i - 1).css('left', '1500px');
                $('.product-text-block-second').eq(i + 1).css('left', '1500px');
            });

        });

        if (screen.width > 1024) {
            $('.product-right-block').animate({'left': '-50px'}, 600, 'easeOutQuad');
        }

        $('#pro_products option[value=1]').attr('disabled', 'disabled');
        $('#pro_products option[value=2]').attr('disabled', 'disabled');
        $('#pro_productswebinar option[value=1]').attr('disabled', 'disabled');
        $('#pro_productswebinar option[value=2]').attr('disabled', 'disabled');

        $('#pro_products option[value=1]').css('color', '#941043');
        $('#pro_products option[value=2]').css('color', '#941043');
        $('#pro_productswebinar option[value=1]').css('color', '#941043');
        $('#pro_productswebinar option[value=2]').css('color', '#941043');


        $('.default-page').after($('.business-pack'));
        $('.default-page').after($('.hr-block'));
        $('.hr-block').after($('.hr-second-block'));

        $('body').css('overflow-x', 'hidden');

        $('#hr-img').animate({'margin-left': '0px'}, 600, 'easeOutQuad');
        $('#hr-text-first').animate({'left': '0px'}, 600, 'easeOutQuad');
        $('#hr-button-first').animate({'margin-top': '0px'}, 600, 'easeOutQuad');

        $('.icon-prohr').animate({'margin-left': '0px'}, 600, 'easeOutQuad');
        $('.text-prohr').animate({'left': '0px'}, 600, 'easeOutQuad');

        $(document).scroll(function () {

            s_top_ie = $("html").scrollTop();
            s_top_chrome = $("body").scrollTop();

//            yes = $("#monitor").offset().top - 50;

//            other_products = $("#monitor").offset().top - 500;

//            if (s_top_ie > other_products) {
//                $('#proaccount-img-first').animate({'margin-left': '15px'}, 500, 'easeOutQuad');
//                $('#account-last-text').animate({'margin-left': '0px'}, 500, 'easeOutQuad');
//                $('#account-last-button').animate({'margin-top': '0px'}, 500, 'easeOutQuad');
//
//                $('#response-table').show();
//                $('#response-table').animate({'top': '2px'}, 500, 'easeOutBack');
//                $('#response-boy').animate({'margin-left': '0px'}, 500, 'easeOutQuad');
//                $('#response-last-text').animate({'margin-left': '0px'}, 500, 'easeOutQuad');
//                $('#response-last-button').animate({'margin-top': '0px'}, 500, 'easeOutQuad');
//
//                $('#prosem-img-first').animate({'margin-left': '-30px'}, 500, 'easeOutQuad');
//				$('#prostorage-img').animate({'margin-left': '0px'}, 500, 'easeOutQuad');
//            }
//
//            if (s_top_chrome > other_products) {
//                $('#proaccount-img-first').animate({'margin-left': '15px'}, 500, 'easeOutQuad');
//                $('#account-last-text').animate({'margin-left': '0px'}, 500, 'easeOutQuad');
//                $('#account-last-button').animate({'margin-top': '0px'}, 500, 'easeOutQuad');
//
//                $('#response-table').show();
//                $('#response-table').animate({'top': '2px'}, 500, 'easeOutBack');
//                $('#response-boy').animate({'margin-left': '0px'}, 500, 'easeOutQuad');
//                $('#response-last-text').animate({'margin-left': '0px'}, 500, 'easeOutQuad');
//                $('#response-last-button').animate({'margin-top': '0px'}, 500, 'easeOutQuad');
//
//                $('#prosem-img-first').animate({'margin-left': '-30px'}, 500, 'easeOutQuad');
//				$('#prostorage-img').animate({'margin-left': '0px'}, 500, 'easeOutQuad');
//            }

//            if (s_top_ie > yes) {
//                $('#hr-img-mon').show();
//                $('#hr-img-mon').animate({'top': '2px'}, 500, 'easeOutBack');
//                $('#hr-girl').animate({'margin-left': '0px'}, 500, 'easeOutQuad');
//                $('#hr-last-text').animate({'margin-left': '0px'}, 500, 'easeOutQuad');
//                $('#hr-last-button').animate({'margin-top': '0px'}, 500, 'easeOutQuad');
//                $('#hr-line-block').css('height', '0');
//
//                $('#proauto-numbers').animate({'margin-top': '0px'}, 500, 'easeOutQuad');
//                $('#proauto-people').animate({'margin-left': '-10px'}, 500, 'easeOutQuad');
//
//                $('#provcard-icons').animate({'margin-top': '-140px'}, 500, 'easeOutQuad');
//                $('#provcard-boy').animate({'margin-left': '10px'}, 500, 'easeOutQuad');
//
//                $('#proef-stairs').animate({'margin-top': '0px'}, 500, 'easeOutQuad');
//                $('#proef-people').animate({'margin-left': '0px'}, 500, 'easeOutQuad');
//
//                $('#prorm-monitor').animate({'margin-top': '-105px'}, 500, 'easeOutQuad');
//                $('#prorm-man').animate({'margin-left': '90px'}, 500, 'easeOutQuad');
//
//            }
//
//            if (s_top_chrome > yes) {
//                $('#hr-img-mon').show();
//                $('#hr-img-mon').animate({'top': '2px'}, 500, 'easeOutBack');
//                $('#hr-girl').animate({'margin-left': '0px'}, 500, 'easeOutQuad');
//
//                $('#proauto-numbers').animate({'margin-top': '0px'}, 500, 'easeOutQuad');
//                $('#proauto-people').animate({'margin-left': '-10px'}, 500, 'easeOutQuad');
//
//                $('#hr-last-text').animate({'margin-left': '0px'}, 500, 'easeOutQuad');
//                $('#hr-last-button').animate({'margin-top': '0px'}, 500, 'easeOutQuad');
//                $('#hr-line-block').css('height', '0');
//
//                $('#proef-stairs').animate({'margin-top': '0px'}, 500, 'easeOutQuad');
//                $('#proef-people').animate({'margin-left': '0px'}, 500, 'easeOutQuad');
//
//                $('#provcard-icons').animate({'margin-top': '-140px'}, 500, 'easeOutQuad');
//                $('#provcard-boy').animate({'margin-left': '10px'}, 500, 'easeOutQuad');
//
//                $('#prorm-monitor').animate({'margin-top': '-105px'}, 500, 'easeOutQuad');
//                $('#prorm-man').animate({'margin-left': '90px'}, 500, 'easeOutQuad');
//
//            }
        });


        $('#home-first').show();
        $('#home-second').show();
        $('#home-third').show();
        $('#home-fourth').show();
        $('#home-fifth').show();
        $('#home-sixth').show();


        $('#home-enter-first').show();
        $('#home-enter-second').show();
        $('#home-enter-third').show();
        $('#home-enter-fourth').show();
        $('#home-enter-fifth').show();

        $('#home-first').animate({'margin-top': '-64px'}, 600, 'easeOutBack');
        $('#home-second').delay(100).animate({'margin-top': '-64px'}, 600, 'easeOutBack');
        $('#home-third').delay(200).animate({'margin-top': '-64px'}, 600, 'easeOutBack');
        $('#home-fourth').delay(300).animate({'margin-top': '-64px'}, 600, 'easeOutBack');
        $('#home-fifth').delay(400).animate({'margin-top': '-64px'}, 600, 'easeOutBack');
        $('#home-sixth').delay(500).animate({'margin-top': '-64px'}, 600, 'easeOutBack');


        $('#home-enter-first').animate({'margin-top': '-21px'}, 600, 'easeOutBack');
        $('#home-enter-second').delay(100).animate({'margin-top': '-21px'}, 600, 'easeOutBack');
        $('#home-enter-third').delay(200).animate({'margin-top': '-21px'}, 600, 'easeOutBack');
        $('#home-enter-fourth').delay(300).animate({'margin-top': '-21px'}, 600, 'easeOutBack');
        $('#home-enter-fifth').delay(400).animate({'margin-top': '-21px'}, 600, 'easeOutBack');


        $('.man-enter').animate({'margin-left': '0px'}, 500, 'easeOutQuad');

        $('#gray-cloud-package').animate({'left': '19%'}, 500, 'easeOutQuad', function () {
            $('#price-package-gray').show();
        });
        $('#bordo-cloud-package').animate({'left': '-3%'}, 500, 'easeOutQuad', function () {
            $('#price-package-bordo').show();
        });

        $('#crm-package').animate({'margin-left': '0px'}, 500, 'easeOutQuad');
        $('#training-package').animate({'margin-left': '0px'}, 500, 'easeOutQuad');
        $('#crm-conf-package').animate({'top': '0px'}, 500, 'easeOutQuad');
        $('.icon-packages-block').animate({'top': '0px'}, 500, 'easeOutQuad');

        $('.form-enter-field').animate({'margin-left': '0px'}, 500, 'easeOutQuad');



        if(screen.width > 1023) {
            $('#card-9270 .card-col').append('<img class="red-block" style="cursor:pointer"  src="http://promx.net/wp-content/themes/prorm/images/play.png">');
        }

        $('img.red-block').mouseout(function() {
            $('img.red-block').attr('src', 'http://promx.net/wp-content/themes/prorm/images/play.png');
        });

        $('img.red-block').mouseover(function() {
            $('img.red-block').attr('src','http://promx.net/wp-content/themes/prorm/images/play-click.png');
        });


    $('#fancybox-content').width($(window).width() * 0.9);
    $('#fancybox-content').height(screen.height * 0.65);

  /*  $('#video-button').click(function () {

        var isFirefox = typeof InstallTrigger !== 'undefined';

        if ($('#first-video-block').css('display') == "block") {

            $('#first-video').remove();

            $('#first-video-block').hide();

            if (isFirefox) {
                $('#second-video').attr('src', '//www.youtube.com/embed/uyII_GxtjtU');
            } else {
                $('#second-video').attr('src', '//www.youtube.com/embed/uyII_GxtjtU?autoplay=1');
            }

            if (isFirefox) {
                $('#first-video-block').append('<iframe id="first-video" class="video-front" style="height:100%;width: 100%;padding: 0;margin-top: 0px;border: none;outline: none;line-height: 0;vertical-align: top;" src="//www.youtube.com/embed/zno2NgBbBbo"></iframe>');
            } else {
                $('#first-video-block').append('<iframe id="first-video" class="video-front" style="height:100%;width: 100%;padding: 0;margin-top: 0px;border: none;outline: none;line-height: 0;vertical-align: top;" src="//www.youtube.com/embed/zno2NgBbBbo?autoplay=1"></iframe>');
            }

            $('#first-video').attr('src', '//www.youtube.com/embed/zno2NgBbBbo');

            $('#second-video-block').show();

        }


        else if ($('#second-video-block').css('display') == "block") {

            $('#second-video').remove();

            $('#second-video-block').hide();

            if (isFirefox) {
                $('#first-video').attr('src', '//www.youtube.com/embed/zno2NgBbBbo');
            } else {
                $('#first-video').attr('src', '//www.youtube.com/embed/zno2NgBbBbo?autoplay=1');
            }

            if (isFirefox) {
                $('#second-video-block').append('<iframe id="second-video" class="video-front" style="height:100%;width: 100%;padding: 0;margin-top: 0px;border: none;outline: none;line-height: 0;vertical-align: top;" src="//www.youtube.com/embed/uyII_GxtjtU"></iframe>');
            } else {
                $('#second-video-block').append('<iframe id="second-video" class="video-front" style="height:100%;width: 100%;padding: 0;margin-top: 0px;border: none;outline: none;line-height: 0;vertical-align: top;" src="//www.youtube.com/embed/uyII_GxtjtU?autoplay=1"></iframe>');
            }

            $('#second-video').attr('src', '//www.youtube.com/embed/uyII_GxtjtU');


            $('#first-video-block').show();


        }
    })

    $('.close-video').click(function () {
        $('#fancybox-overlay').hide();
        $('#fancybox-wrap').hide();
        $('.red-block').show();
        $('.video-front').attr('src', 'asdasd');
        $('.video-front').remove();
        $('#first-video-block').show();
        $('#second-video-block').hide();
        $('#first-video-block').append('<iframe id="first-video" class="video-front" style="width: 100%;height:100%;padding: 0;margin-top: 0px;border: none;outline: none;line-height: 0;vertical-align: top;" src="//www.youtube.com/embed/zno2NgBbBbo"></iframe>');

        $('#second-video-block').append('<iframe id="second-video" class="video-front" style="height:100%;width: 100%;padding: 0;margin-top: 0px;border: none;outline: none;line-height: 0;vertical-align: top;" src="//www.youtube.com/embed/uyII_GxtjtU"></iframe>');

        $('body').css('overflow-y', 'auto');
    });

    $('.red-block').click(function () {
        $('#fancybox-overlay').css('width', '100%');
        $('#fancybox-overlay').show();
        $('#fancybox-wrap').show();
        $('.red-block').hide();
        $('body').css('overflow-y', 'hidden');


        $('#fancybox-wrap').css("left", ($(window).width() - $('#fancybox-wrap').outerWidth()) / 2 + $(window).scrollLeft() + "px");
    });*/

   
	
	
	$('.video-home').click(function () { 
			$('#fancybox-content').append('<div  class="video-block" style="height:100%;width:100%;"><iframe  class="video-homepage" allowfullscreen mozallowfullscreen webkitallowfullscreen oallowfullscreen msallowfullscreen class="video-front" style="width: 100%;height:100%;padding: 0;margin-top: 0px;border: none;outline: none;line-height: 0;vertical-align: top;" src="//fast.wistia.net/embed/iframe/pavt8yr9jb?seo=false"></iframe></div>');
			$('#fancybox-wrap').css("left", ($(window).width() - $('#fancybox-wrap').outerWidth()) / 2 + $(window).scrollLeft() + "px");
			$('#fancybox-overlay').show();
			$('#fancybox-wrap').show();
	
	 });
	 
	 $('.close-video-home').click(function(){
		$('#fancybox-overlay').hide();
		$('#fancybox-wrap').hide();
		$('.video-block').remove();


		$('body').css('overflow-y','auto');
	
	});
	
	 });

    $(document).ready(function () {

        $('#business-consulting').parent().parent().parent().parent().parent().css({'margin-left': '-5%'});

        $('#it-consultancy').parent().parent().parent().parent().parent().css({'margin-left': '-5%'});

        $('#discrete-manufacturing').parent().parent().parent().parent().parent().css({'margin-left': '-5%'});

        if (screen.width < 1024) {
            $('.first-block-header-vertical:first').css('margin-top', '-40px');
        }

        $('.landing-event-form-button').click(function () {

            if ($('#pro_first_name').val() != "" && $('#pro_company').val() != "" && $('#pro_email').val() != "" && $('#pro_phone_number').val() != "") {
                $('.landing-event-form-button').hide();
                $('#download-form').show();
            }
        });


        $('iframe[name="google_conversion_frame"]').hide();

        if (screen.width < 481) {
            $('#microsoftreferences:first-child + #microsoftreferences + #microsoftreferences + #microsoftreferences img').css('margin-top', '30px');
            $('.partner').css('padding-top', '0px');
        }

        if ($('#request-form button span').text() == "Absenden") {
            $('#request-form button').attr('onSubmit', "_gaq.push(['_trackEvent', '10Request-DE', '10Send', '10Request-DE-Send'])");
        } else if ($('#request-form button span').text() == "Send") {
            $('#request-form button').attr('onSubmit', "_gaq.push(['_trackEvent', '12Request-EN', '12Send', '12Request-EN-Send'])");
        }

        if ($('#webcast button span').text() == "Absenden") {
            $('#webcast button span').attr('onSubmit', "_gaq.push(['_trackEvent', '10Request-DE', 'Click', 'Webinar'])");
        } else if ($('#webcast button span').text() == "Send") {
            $('#webcast button span').attr('onSubmit', "_gaq.push(['_trackEvent', 'Webinar-EN', 'Click', 'Webinar'])");
        }

        if ($('#quick-check button span').text() == "Absenden") {
            $('#quick-check button span').attr('onSubmit', "_gaq.push(['_trackEvent', 'Demo-DE', 'Click', 'Demo'])");
        } else if ($('#quick-check button span').text() == "Send") {
            $('#quick-check button span').attr('onSubmit', "_gaq.push(['_trackEvent', 'Demo-EN', 'Click', 'Demo'])");
        }

        $('a[href="http://promx.net/en/actions/webcast/"]').attr('onclick', "_gaq.push(['_trackEvent', 'Webinar-EN', 'Click', 'Webinar'])");
        $('a[href="http://promx.net/de/aktionen/webinar/"]').attr('onclick', "_gaq.push(['_trackEvent', 'Webinar-DE', 'Click', 'Webinar'])");

        $('a[href="http://promx.net/en/actions/online-demo/"]').attr('onclick', "_gaq.push(['_trackEvent', 'Demo-EN', 'Click', 'Demo'])");
        $('a[href="http://promx.net/de/aktionen/schnell-check/"]').attr('onclick', "_gaq.push(['_trackEvent', 'WDemo-DE', 'Click', 'Demo'])");

        $('a[href="http://promx.net/en/contact-us/"]').attr('onclick', "_gaq.push(['_trackEvent', '3Contact-us-EN', '3Click', '3Contact-EN'])");
        $('a[href="http://promx.net/de/kontakt/"]').attr('onclick', "_gaq.push(['_trackEvent', '1Contact-us-DE', '1Click', '1Contact-DE'])");

        $('a[href="http://promx.net/de/aktionen/anfrage/"]').attr('onclick', "_gaq.push(['_trackEvent', '9Request-Click-DE', '9Click', '9Request-Click-DE'])");
        $('a[href="http://promx.net/en/actions/request/"]').attr('onclick', "_gaq.push(['_trackEvent', '11Request-Click-EN', '11Click', 11Request-Click-EN'])");

        $('a[href="http://promx.net/en/actions/live-experience/"]').attr('onclick', "_gaq.push(['_trackEvent', '7Meet-us-EN', '7Click', '7Meet-us-EN'])");
        $('a[href="http://promx.net/de/aktionen/live-erleben/"]').attr('onclick', "_gaq.push(['_trackEvent', '5Meet-us-DE', '5Click', '5Meet-us-DE'])");

        if ($('#contact-form button span').text() == "Absenden") {
            $('#contact-form button').attr('onSubmit', "_gaq.push(['_trackEvent', '2Contact-us-DE', '2Send', '2Contact-DE'])");
        } else if ($('#contact-form button span').text() == "Send") {
            $('#contact-form button').attr('onSubmit', "_gaq.push(['_trackEvent', '4Contact-us-EN', '4Send', '4Contact-EN'])");
        }

        if ($('#meet-us-form button span').text() == "Absenden") {
            $('#meet-us-form button').attr('onSubmit', "_gaq.push(['_trackEvent', '6Meet-us-DE', '6Send', '6Meet-us-DE'])");
        } else if ($('#meet-us-form button span').text() == "Send") {
            $('#meet-us-form button').attr('onSubmit', "_gaq.push(['_trackEvent', '8Meet-us-EN', '8Send', '8Meet-us-EN'])");
        }

        if ($('.package-but span').text() == "PreisPreisPreisErwerben") {
            $('.package-but button').attr('onclick', "_gaq.push(['_trackEvent', '13Request-Packages', '13Click', '13Request-Packages-DE'])");
        } else if ($('.package-but span').text() == "PricePricePriceBuy now") {
            $('.package-but button').attr('onclick', "_gaq.push(['_trackEvent', '15Request-Packages', '15Click', '15Request-Packages-EN'])");
        }

        if ($('#packages-request-form button span').text() == "Absenden") {
            $('#packages-request-form button').attr('onSubmit', "_gaq.push(['_trackEvent', '14Request-Packages', '14Send', '14Request-Packages-DE'])");
        } else if ($('#packages-request-form button span').text() == "Send") {
            $('#packages-request-form button').attr('onSubmit', "_gaq.push(['_trackEvent', '16Request-Packages', '16Send', '16Request-Packages-EN'])");
        }

        $('#dynamics-products').attr('onclick', "_gaq.push(['_trackEvent', '19Request-Products', '19Click', '19Request-Products-EN'])");
        $('#promx-products').attr('onclick', "_gaq.push(['_trackEvent', '19Request-Products', '19Click', '19Request-Products-EN'])");
        $('#our-partner-products').attr('onclick', "_gaq.push(['_trackEvent', '19Request-Products', '19Click', '19Request-Products-EN'])");

        $('#dynamics-produkte').attr('onclick', "_gaq.push(['_trackEvent', '17Request-Products', '17Click', '17Request-Products-DE'])");
        $('#promx-produkte').attr('onclick', "_gaq.push(['_trackEvent', '17Request-Products', '17Click', '17Request-Products-DE'])");
        $('#our-partner-produkte').attr('onclick', "_gaq.push(['_trackEvent', '17Request-Products', '17Click', '17Request-Products-DE'])");

        if ($('#products-request-form button span').text() == "Absenden") {
            $('#products-request-form button').attr('onSubmit', "_gaq.push(['_trackEvent', '18Request-Products', '18Send', '18Request-Products-DE'])");
        } else if ($('#products-request-form button span').text() == "Send") {
            $('#products-request-form button').attr('onSubmit', "_gaq.push(['_trackEvent', '20Request-Products', '20Send', '20Request-Products-EN'])");
        }


    });


    $('.navbar-top').after($('.verticals-slider'));

    $('.app-side-link.app-next').css('bottom', '0px');


    if (screen.width < 1024) {
        $('#firstLogo').attr('src', 'http://promx.net/wp-content/themes/prorm/images/slider/Microsoft-Dynamics-Online-261x129.png');
        $('#secondLogo').attr('src', 'http://promx.net/wp-content/themes/prorm/images/slider/award.png');
        $('#thirdLogo').attr('src', 'http://promx.net/wp-content/themes/prorm/images/slider/Microsoft-Partner210x129.jpg');
        $('ul#logo-slider').append(
            "<li class='slide' style='position: absolute; top: 0px; left: 0px; z-index: 97; opacity: 1; display: block; visibility: hidden;'><img  src='http://promx.net/wp-content/themes/prorm/images/slider/Microsoft-Partner-Network261x129.png' class='logo-img'></li>");

        $('ul#logo-slider').append(
            "<li class='slide' style='position: absolute; top: 0px; left: 0px; z-index: 97; opacity: 1; display: block; visibility: hidden;'><img  src='http://promx.net/wp-content/themes/prorm/images/slider/Mittelstand-261x129.png' class='logo-img'></li>");

        $('ul#logo-slider').append(
            "<li class='slide' style='position: absolute; top: 0px; left: 0px; z-index: 97; opacity: 1; display: block; visibility: hidden;'><img  src='http://promx.net/wp-content/themes/prorm/images/slider/Emea-261x129.png' class='logo-img'></li>");

        $('ul#logo-slider').append(
            "<li class='slide' style='position: absolute; top: 0px; left: 0px; z-index: 97; opacity: 1; display: block; visibility: hidden;'><img  src='http://promx.net/wp-content/themes/prorm/images/slider/circle-261X129.png' class='logo-img'></li>");

        $('ul#logo-slider').append(
            "<li class='slide' style='position: absolute; top: 0px; left: 0px; z-index: 97; opacity: 1; display: block; visibility: hidden;'><img  src='http://promx.net/wp-content/themes/prorm/images/slider/Partner-261.png' class='logo-img'></li>");
    }


    if (screen.width == 1024) {
        console.log('a');
        $('.slide.cycle-slide.cycle-sentinel:first-child +li+li+li+li').remove();
    }

    $('article table tr:odd').addClass('even');
    $('article table tr:even').addClass('odd');


    (function () {

        $('.pn-control-inp-cc').on('input', function () {
            if ($('.pn-control-inp-cc').val().length == 3) {
                $('.pn-control-inp-tc').focus();
            }
        });
        $('.pn-control-inp-tc').on('input', function () {
            if ($('.pn-control-inp-tc').val().length == 5) {
                $('.pn-control-inp-mp').focus();
            }
            else if ($('.pn-control-inp-tc').val().length == 0) {
                $('.pn-control-inp-cc').focus();
            }
        });
        $('.pn-control-inp-mp').on('input', function () {
            if ($('.pn-control-inp-mp').val().length == 8) {
                $('.pn-control-inp-ap').focus();
            }
            else if ($('.pn-control-inp-mp').val().length == 0) {
                $('.pn-control-inp-tc').focus();
            }
        });
        $('.pn-control-inp-ap').on('input', function () {
            if ($('.pn-control-inp-ap').val().length == 0) {
                $('.pn-control-inp-mp').focus();
            }
        });


    })();


    // Menu switcher
    (function () {


        $('a[title=company-net]').mouseover(function () {
            $('a[title=company-net] img').attr('src', 'http://promx.net/wp-content/themes/prorm/images/partners/company-net-gray.png');
        });

        $('a[title=company-net]').mouseout(function () {
            $('a[title=company-net] img').attr('src', 'http://promx.net/wp-content/uploads/2015/05/company-net.png');
        });

        $('a[title=axcentro]').mouseover(function () {
            $('a[title=axcentro] img').attr('src', 'http://promx.net/wp-content/themes/prorm/images/partners/axcentro-gray.png');
        });

        $('a[title=axcentro]').mouseout(function () {
            $('a[title=axcentro] img').attr('src', 'http://promx.net/wp-content/uploads/2015/05/axcentro.png');
        });

        $('a[title=arquiconsult]').mouseover(function () {
            $('a[title=arquiconsult] img').attr('src', 'http://promx.net/wp-content/themes/prorm/images/partners/ArquiconsultLogo-gray.png');
        });

        $('a[title=arquiconsult]').mouseout(function () {
            $('a[title=arquiconsult] img').attr('src', 'http://promx.net/wp-content/uploads/2015/05/ArquiconsultLogo.png');
        });

        $('a[title=lzcrm]').mouseover(function () {
            $('a[title=lzcrm] img').attr('src', 'http://promx.net/wp-content/themes/prorm/images/partners/Logo_L3CRM-gray.png');
        });

        $('a[title=lzcrm]').mouseout(function () {
            $('a[title=lzcrm] img').attr('src', 'http://promx.net/wp-content/uploads/2015/05/Logo_L3CRM.png');
        });

        $('a[title=accentis]').mouseover(function () {
            $('a[title=accentis] img').attr('src', 'http://promx.net/wp-content/themes/prorm/images/partners/logo_accentis-gray.png');
        });

        $('a[title=accentis]').mouseout(function () {
            $('a[title=accentis] img').attr('src', 'http://promx.net/wp-content/uploads/2015/05/logo_accentis.png');
        });

        $('a[title=itvt]').mouseover(function () {
            $('a[title=itvt] img').attr('src', 'http://promx.net/wp-content/themes/prorm/images/partners/itvt-gray.png');
        });

        $('a[title=itvt]').mouseout(function () {
            $('a[title=itvt] img').attr('src', 'http://promx.net/wp-content/uploads/2015/05/itvt.png');
        });

        $('a[title=fwi]').mouseover(function () {
            $('a[title=fwi] img').attr('src', 'http://promx.net/wp-content/themes/prorm/images/partners/FWI-gray.png');
        });

        $('a[title=fwi]').mouseout(function () {
            $('a[title=fwi] img').attr('src', 'http://promx.net/wp-content/uploads/2015/05/FWI.png');
        });

        $('a[title=acando]').mouseover(function () {
            $('a[title=acando] img').attr('src', 'http://promx.net/wp-content/themes/prorm/images/partners/acando2.png');
        });

        $('a[title=acando]').mouseout(function () {
            $('a[title=acando] img').attr('src', 'http://promx.net/wp-content/uploads/2014/04/acando1.png');
        });

        $('a[title=axentit]').mouseover(function () {
            $('a[title=axentit] img').attr('src', 'http://promx.net/wp-content/themes/prorm/images/partners/axentit12.png');
        });

        $('a[title=axentit]').mouseout(function () {
            $('a[title=axentit] img').attr('src', 'http://promx.net/wp-content/uploads/2014/04/axentit1.png');
        });

        $('a[title=EmergeNextADNM]').mouseover(function () {
            $('a[title=EmergeNextADNM] img').attr('src', 'http://promx.net/wp-content/themes/prorm/images/partners/EmergeNextADNM2.png');
        });

        $('a[title=EmergeNextADNM]').mouseout(function () {
            $('a[title=EmergeNextADNM] img').attr('src', 'http://promx.net/wp-content/uploads/2014/04/EmergeNextADNM.png');
        });

        $('a[title=OnDemand4u]').mouseover(function () {
            $('a[title=OnDemand4u] img').attr('src', 'http://promx.net/wp-content/uploads/2016/04/onedem-2.jpg');
        });

        $('a[title=OnDemand4u]').mouseout(function () {
            $('a[title=OnDemand4u] img').attr('src', 'http://promx.net/wp-content/uploads/2016/04/onedem-1.jpg');
        });

        $('a[title=linkdev-MX]').mouseover(function () {
            $('a[title=linkdev-MX] img').attr('src', 'http://promx.net/wp-content/uploads/2015/11/linkdev-MX-gray.png');
        });

        $('a[title=linkdev-MX]').mouseout(function () {
            $('a[title=linkdev-MX] img').attr('src', 'http://promx.net/wp-content/uploads/2015/11/linkdev-MX.png');
        });

        $('a[title=synalis]').mouseover(function () {
            $('a[title=synalis] img').attr('src', 'http://promx.net/wp-content/themes/prorm/images/partners/synalis12.png');
        });

        $('a[title=synalis]').mouseout(function () {
            $('a[title=synalis] img').attr('src', 'http://promx.net/wp-content/uploads/2014/04/synalis.png');
        });

        $('a[title=trivadis]').mouseover(function () {
            $('a[title=trivadis] img').attr('src', 'http://promx.net/wp-content/themes/prorm/images/partners/trivadis12.png');
        });

        $('a[title=trivadis]').mouseout(function () {
            $('a[title=trivadis] img').attr('src', 'http://promx.net/wp-content/uploads/2014/04/trivadis.png');
        });

        $('a[title=XAPT]').mouseover(function () {
            $('a[title=XAPT] img').attr('src', 'http://promx.net/wp-content/themes/prorm/images/partners/XAPT12.png');
        });

        $('a[title=XAPT]').mouseout(function () {
            $('a[title=XAPT] img').attr('src', 'http://promx.net/wp-content/uploads/2014/04/XAPT1.png');
        });

        $('a[title=xRM4Legal]').mouseover(function () {
            $('a[title=xRM4Legal] img').attr('src', 'http://promx.net/wp-content/themes/prorm/images/partners/xRM4Legal2.png');
        });

        $('a[title=xRM4Legal]').mouseout(function () {
            $('a[title=xRM4Legal] img').attr('src', 'http://promx.net/wp-content/uploads/2014/04/xRM4Legal.png');
        });

        $('a[title=megabyte]').mouseover(function () {
            $('a[title=megabyte] img').attr('src', 'http://promx.net/wp-content/themes/prorm/images/partners/megabyte2.png');
        });

        $('a[title=megabyte]').mouseout(function () {
            $('a[title=megabyte] img').attr('src', 'http://promx.net/wp-content/uploads/2014/04/megabyte.png');
        });

        $('a[title=sag]').mouseover(function () {
            $('a[title=sag] img').attr('src', 'http://promx.net/wp-content/uploads/2015/05/Saglobal2.png');
        });

        $('a[title=sag]').mouseout(function () {
            $('a[title=sag] img').attr('src', 'http://promx.net/wp-content/uploads/2015/05/Saglobal.png');
        });

        $('a[title=sag]').mouseover(function () {
            $('a[title=sag] img').attr('src', 'http://promx.net/wp-content/uploads/2015/05/Saglobal2.png');
        });

        $('a[title=sag]').mouseout(function () {
            $('a[title=sag] img').attr('src', 'http://promx.net/wp-content/uploads/2015/05/Saglobal.png');
        });


        $('a[title=ADNM-International-Inc]').mouseover(function () {
            $('a[title=ADNM-International-Inc] img').attr('src', 'http://promx.net/wp-content/themes/prorm/images/partners/ADNM International Inc.png');
        });

        $('a[title=ADNM-International-Inc]').mouseout(function () {
            $('a[title=ADNM-International-Inc] img').attr('src', 'http://promx.net/wp-content/uploads/2015/07/ADNM-International-Inc.png');
        });

        $('a[title=C-Clear-Partners-BVBA] ').mouseover(function () {
            $('a[title=C-Clear-Partners-BVBA] img').attr('src', 'http://promx.net/wp-content/themes/prorm/images/partners/C-Clear-Partners-BVBA.png');
        });

        $('a[title=C-Clear-Partners-BVBA]').mouseout(function () {
            $('a[title=C-Clear-Partners-BVBA] img').attr('src', 'http://promx.net/wp-content/uploads/2015/07/C-Clear-Partners-BVBA.png');
        });

        $('a[title=Endeavour-Solutions-Inc] ').mouseover(function () {
            $('a[title=Endeavour-Solutions-Inc] img').attr('src', 'http://promx.net/wp-content/themes/prorm/images/partners/Endeavour-Solutions-Inc..png');
        });

        $('a[title=Endeavour-Solutions-Inc]').mouseout(function () {
            $('a[title=Endeavour-Solutions-Inc] img').attr('src', 'http://promx.net/wp-content/uploads/2015/07/Endeavour-Solutions-Inc..png');
        });

        $('a[title=Extreme-d] ').mouseover(function () {
            $('a[title=Extreme-d] img').attr('src', 'http://promx.net/wp-content/themes/prorm/images/partners/Extreme-d.o.o..png');
        });

        $('a[title=Extreme-d]').mouseout(function () {
            $('a[title=Extreme-d] img').attr('src', 'http://promx.net/wp-content/uploads/2015/07/Extreme-d.o.o..png');
        });

        $('a[title=ITmovement-AG] ').mouseover(function () {
            $('a[title=ITmovement-AG] img').attr('src', 'http://promx.net/wp-content/themes/prorm/images/partners/ITmovement-AG.png');
        });

        $('a[title=ITmovement-AG]').mouseout(function () {
            $('a[title=ITmovement-AG] img').attr('src', 'http://promx.net/wp-content/uploads/2015/07/ITmovement-AG.png');
        });

        $('a[title=Logic-Point] ').mouseover(function () {
            $('a[title=Logic-Point] img').attr('src', 'http://promx.net/wp-content/themes/prorm/images/partners/Logic-Point.png');
        });

        $('a[title=Logic-Point]').mouseout(function () {
            $('a[title=Logic-Point] img').attr('src', 'http://promx.net/wp-content/uploads/2015/07/Logic-Point.png');
        });

        $('a[title=New-Frontier-Slovakia] ').mouseover(function () {
            $('a[title=New-Frontier-Slovakia] img').attr('src', 'http://promx.net/wp-content/themes/prorm/images/partners/New-Frontier-Slovakia2.jpg');
        });

        $('a[title=New-Frontier-Slovakia]').mouseout(function () {
            $('a[title=New-Frontier-Slovakia] img').attr('src', 'http://promx.net/wp-content/uploads/2015/07/New-Frontier-Slovakia.jpg');
        });

        $('a[title=nfc] ').mouseover(function () {
            $('a[title=nfc] img').attr('src', 'http://promx.net/wp-content/themes/prorm/images/partners/nfc32.jpg');
        });

        $('a[title=nfc]').mouseout(function () {
            $('a[title=nfc] img').attr('src', 'http://promx.net/wp-content/uploads/2015/07/nfc3.jpg');
        });

        $('a[title=redhouse] ').mouseover(function () {
            $('a[title=redhouse] img').attr('src', 'http://promx.net/wp-content/themes/prorm/images/partners/redhouse2.jpg');
        });

        $('a[title=redhouse]').mouseout(function () {
            $('a[title=redhouse] img').attr('src', 'http://promx.net/wp-content/uploads/2015/07/redhouse.jpg');
        });

        $('a[title=triomis] ').mouseover(function () {
            $('a[title=triomis] img').attr('src', 'http://promx.net/wp-content/themes/prorm/images/partners/triomis-gray.png');
        });

        $('a[title=triomis]').mouseout(function () {
            $('a[title=triomis] img').attr('src', 'http://promx.net/wp-content/uploads/2015/07/triomis.jpg');
        });

        $('a[title=wwork] ').mouseover(function () {
            $('a[title=wwork] img').attr('src', 'http://promx.net/wp-content/themes/prorm/images/partners/wwork2.jpg');
        });

        $('a[title=wwork]').mouseout(function () {
            $('a[title=wwork] img').attr('src', 'http://promx.net/wp-content/uploads/2015/07/wwork.jpg');
        });

        $('a[title=cloud-20] ').mouseover(function () {
            $('a[title=cloud-20] img').attr('src', 'http://promx.net/wp-content/themes/prorm/images/partners/cloud-gray(1).png');
        });

        $('a[title=cloud-20]').mouseout(function () {
            $('a[title=cloud-20] img').attr('src', 'http://promx.net/wp-content/uploads/2015/07/cloud1.png');
        });

        $('a[title=traviata] ').mouseover(function () {
            $('a[title=traviata] img').attr('src', 'http://promx.net/wp-content/uploads/2015/11/Traviata-gray.png');
        });

        $('a[title=traviata]').mouseout(function () {
            $('a[title=traviata] img').attr('src', 'http://promx.net/wp-content/uploads/2015/11/Travista.png');
        });


        //inside

        $('.imgPartner').mouseover(function () {
            $('.imgPartner').attr('src', 'http://promx.net/wp-content/themes/prorm/images/Inside/Partners-gray.png');
        });

        $('.imgPartner').mouseout(function () {
            $('.imgPartner').attr('src', 'http://promx.net/wp-content/themes/prorm/images/Inside/Partners.png');
        });

        $('.imgItcg').mouseover(function () {
            $('.imgItcg').attr('src', 'http://promx.net/wp-content/themes/prorm/images/Inside/ITCG-gray.png');
        });

        $('.imgItcg').mouseout(function () {
            $('.imgItcg').attr('src', 'http://promx.net/wp-content/themes/prorm/images/Inside/ITCG.png');
        });

        $('.imgCompetencies').mouseover(function () {
            $('.imgCompetencies').attr('src', 'http://promx.net/wp-content/themes/prorm/images/Inside/Competencies-gray.png');
        });

        $('.imgCompetencies').mouseout(function () {
            $('.imgCompetencies').attr('src', 'http://promx.net/wp-content/themes/prorm/images/Inside/Competencies.png');
        });

        $('.imgValues').mouseover(function () {
            $('.imgValues').attr('src', 'http://promx.net/wp-content/themes/prorm/images/Inside/Values-gray.png');
        });

        $('.imgValues').mouseout(function () {
            $('.imgValues').attr('src', 'http://promx.net/wp-content/themes/prorm/images/Inside/Values.png');
        });

        $('.imgVision').mouseover(function () {
            $('.imgVision').attr('src', 'http://promx.net/wp-content/themes/prorm/images/Inside/CRM-Vision-Group-gray.png');
        });

        $('.imgVision').mouseout(function () {
            $('.imgVision').attr('src', 'http://promx.net/wp-content/themes/prorm/images/Inside/CRM-Vision-Group.png');
        });

        $('.imgCareer').mouseover(function () {
            $('.imgCareer').attr('src', 'http://promx.net/wp-content/themes/prorm/images/Inside/Karriere-gray.png');
        });

        $('.imgCareer').mouseout(function () {
            $('.imgCareer').attr('src', 'http://promx.net/wp-content/themes/prorm/images/Inside/Karriere.png');
        });

        $('.imgCharity').mouseover(function () {
            $('.imgCharity').attr('src', 'http://promx.net/wp-content/themes/prorm/images/Inside/Charity-gray.png');
        });

        $('.imgCharity').mouseout(function () {
            $('.imgCharity').attr('src', 'http://promx.net/wp-content/themes/prorm/images/Inside/Charity.png');
        });

        $('.imgAgb').mouseover(function () {
            $('.imgAgb').attr('src', 'http://promx.net/wp-content/themes/prorm/images/Inside/AGB-gray.png');
        });

        $('.imgAgb').mouseout(function () {
            $('.imgAgb').attr('src', 'http://promx.net/wp-content/themes/prorm/images/Inside/AGB.png');
        });

        $('.imgGallery').mouseover(function () {
            $('.imgGallery').attr('src', 'http://promx.net/wp-content/themes/prorm/images/Inside/Our-Gallery-gray.png');
        });

        $('.imgGallery').mouseout(function () {
            $('.imgGallery').attr('src', 'http://promx.net/wp-content/themes/prorm/images/Inside/Our-Galery.png');
        });


      

        //packages

        $('.prorm-impl-en').mouseover(function () {
            $('.prorm-impl-en').attr('src', 'http://promx.net/wp-content/themes/prorm/images/packages/proRM-gray.png');
        });

        $('.prorm-impl-en').mouseout(function () {
            $('.prorm-impl-en').attr('src', 'http://promx.net/wp-content/themes/prorm/images/packages/proRM.png');
        });

        $('.crm-impl-en').mouseover(function () {
            $('.crm-impl-en').attr('src', 'http://promx.net/wp-content/themes/prorm/images/packages/CRM-gray.png');
        });

        $('.crm-impl-en').mouseout(function () {
            $('.crm-impl-en').attr('src', 'http://promx.net/wp-content/themes/prorm/images/packages/CRM.png');
        });

        $('.crm-prorm-en').mouseover(function () {
            $('.crm-prorm-en').attr('src', 'http://promx.net/wp-content/themes/prorm/images/packages/CRMandproRM-gray.png');
        });

        $('.crm-prorm-en').mouseout(function () {
            $('.crm-prorm-en').attr('src', 'http://promx.net/wp-content/themes/prorm/images/packages/CRMandproRM.png');
        });

        $('.sla-en').mouseover(function () {
            $('.sla-en').attr('src', 'http://promx.net/wp-content/themes/prorm/images/packages/SLA-gray.png');
        });

        $('.sla-en').mouseout(function () {
            $('.sla-en').attr('src', 'http://promx.net/wp-content/themes/prorm/images/packages/SLA.png');
        });

        $('.support-en').mouseover(function () {
            $('.support-en').attr('src', 'http://promx.net/wp-content/themes/prorm/images/packages/support-gray.png');
        });

        $('.support-en').mouseout(function () {
            $('.support-en').attr('src', 'http://promx.net/wp-content/themes/prorm/images/packages/support.png');
        });


        $('.prorm-impl-de').mouseover(function () {
            $('.prorm-impl-de').attr('src', 'http://promx.net/wp-content/themes/prorm/images/packages/proRM-gray-de.png');
        });

        $('.prorm-impl-de').mouseout(function () {
            $('.prorm-impl-de').attr('src', 'http://promx.net/wp-content/themes/prorm/images/packages/proRM-de.png');
        });

        $('.crm-impl-de').mouseover(function () {
            $('.crm-impl-de').attr('src', 'http://promx.net/wp-content/themes/prorm/images/packages/CRM-gray-de.png');
        });

        $('.crm-impl-de').mouseout(function () {
            $('.crm-impl-de').attr('src', 'http://promx.net/wp-content/themes/prorm/images/packages/CRM-de.png');
        });

        $('.crm-prorm-de').mouseover(function () {
            $('.crm-prorm-de').attr('src', 'http://promx.net/wp-content/themes/prorm/images/packages/CRMandproRM-gray-de.png');
        });

        $('.crm-prorm-de').mouseout(function () {
            $('.crm-prorm-de').attr('src', 'http://promx.net/wp-content/themes/prorm/images/packages/CRMandproRM-de.png');
        });

        $('.sla-de').mouseover(function () {
            $('.sla-de').attr('src', 'http://promx.net/wp-content/themes/prorm/images/packages/SLA-gray.png');
        });

        $('.sla-de').mouseout(function () {
            $('.sla-de').attr('src', 'http://promx.net/wp-content/themes/prorm/images/packages/SLA.png');
        });

        $('.support-de').mouseover(function () {
            $('.support-de').attr('src', 'http://promx.net/wp-content/themes/prorm/images/packages/support-gray-de.png');
        });

        $('.support-de').mouseout(function () {
            $('.support-de').attr('src', 'http://promx.net/wp-content/themes/prorm/images/packages/support-de.png');
        });

        $('.crm-individ-en').mouseover(function () {
            $('.crm-individ-en').attr('src', 'http://promx.net/wp-content/themes/prorm/images/packages/CRM-individual-gray.png');
        });

        $('.crm-individ-en').mouseout(function () {
            $('.crm-individ-en').attr('src', 'http://promx.net/wp-content/themes/prorm/images/packages/CRM-individual.png');
        });

        $('.prorm-individ-en').mouseover(function () {
            $('.prorm-individ-en').attr('src', 'http://promx.net/wp-content/themes/prorm/images/packages/proRM-individual-gray.png');
        });

        $('.prorm-individ-en').mouseout(function () {
            $('.prorm-individ-en').attr('src', 'http://promx.net/wp-content/themes/prorm/images/packages/proRM-individual.png');
        });

        $('.crm-prorm-individ-en').mouseover(function () {
            $('.crm-prorm-individ-en').attr('src', 'http://promx.net/wp-content/themes/prorm/images/packages/CRMandproRM-individual-gray.png');
        });

        $('.crm-prorm-individ-en').mouseout(function () {
            $('.crm-prorm-individ-en').attr('src', 'http://promx.net/wp-content/themes/prorm/images/packages/CRMandproRM-individual.png');
        });

        $('.standart-cons-en').mouseover(function () {
            $('.standart-cons-en').attr('src', 'http://promx.net/wp-content/themes/prorm/images/packages/standard-gray.png');
        });

        $('.standart-cons-en').mouseout(function () {
            $('.standart-cons-en').attr('src', 'http://promx.net/wp-content/themes/prorm/images/packages/standard-cons.png');
        });

        $('.standart-migr-en').mouseover(function () {
            $('.standart-migr-en').attr('src', 'http://promx.net/wp-content/themes/prorm/images/packages/standard-migr-gray.png');
        });

        $('.standart-migr-en').mouseout(function () {
            $('.standart-migr-en').attr('src', 'http://promx.net/wp-content/themes/prorm/images/packages/standard-migr.png');
        });

        $('.crm-individ-de').mouseover(function () {
            $('.crm-individ-de').attr('src', 'http://promx.net/wp-content/themes/prorm/images/packages/CRM-individual-gray-de.png');
        });

        $('.crm-individ-de').mouseout(function () {
            $('.crm-individ-de').attr('src', 'http://promx.net/wp-content/themes/prorm/images/packages/CRM-individual-de.png');
        });

        $('.prorm-individ-de').mouseover(function () {
            $('.prorm-individ-de').attr('src', 'http://promx.net/wp-content/themes/prorm/images/packages/proRM-individual-gray-de.png');
        });

        $('.prorm-individ-de').mouseout(function () {
            $('.prorm-individ-de').attr('src', 'http://promx.net/wp-content/themes/prorm/images/packages/proRM-individual-de.png');
        });

        $('.crm-prorm-individ-de').mouseover(function () {
            $('.crm-prorm-individ-de').attr('src', 'http://promx.net/wp-content/themes/prorm/images/packages/CRMandproRM-individual-gray-de.png');
        });

        $('.crm-prorm-individ-de').mouseout(function () {
            $('.crm-prorm-individ-de').attr('src', 'http://promx.net/wp-content/themes/prorm/images/packages/CRMandproRM-individual-de.png');
        });

        $('.standart-cons-de').mouseover(function () {
            $('.standart-cons-de').attr('src', 'http://promx.net/wp-content/themes/prorm/images/packages/standard-gray-de.png');
        });

        $('.standart-cons-de').mouseout(function () {
            $('.standart-cons-de').attr('src', 'http://promx.net/wp-content/themes/prorm/images/packages/standard-cons-de.png');
        });

        $('.standart-migr-de').mouseover(function () {
            $('.standart-migr-de').attr('src', 'http://promx.net/wp-content/themes/prorm/images/packages/standard-migr-gray-de.png');
        });

        $('.standart-migr-de').mouseout(function () {
            $('.standart-migr-de').attr('src', 'http://promx.net/wp-content/themes/prorm/images/packages/standard-migr-de.png');
        });

        //partners
        $('#microsoftreferences:first-child img').mouseover(function () {
            $('#microsoftreferences:first-child img').attr('src', 'http://promx.net/wp-content/themes/prorm/images/references/HRS-gray.png');
        });

        $('#microsoftreferences:first-child img').mouseout(function () {
            $('#microsoftreferences:first-child img').attr('src', 'http://promx.net/wp-content/themes/prorm/images/HRS.png');
        });

        $('#microsoftreferences:first-child+.partner img').mouseover(function () {
            $('#microsoftreferences:first-child+.partner img').attr('src', 'http://promx.net/wp-content/themes/prorm/images/references/holistic-solution-engineers-gray.png');
        });

        $('#microsoftreferences:first-child+.partner img').mouseout(function () {
            $('#microsoftreferences:first-child+.partner img').attr('src', 'http://promx.net/wp-content/uploads/2014/12/holistic-solution-engineers1-300x208.png');
        });

        $('#microsoftreferences:first-child+.partner+.partner img').mouseover(function () {
            $('#microsoftreferences:first-child+.partner+.partner img').attr('src', 'http://promx.net/wp-content/themes/prorm/images/references/hhp-berlin-gray.png');
        });

        $('#microsoftreferences:first-child+.partner+.partner img').mouseout(function () {
            $('#microsoftreferences:first-child+.partner+.partner img').attr('src', 'http://promx.net/wp-content/uploads/2015/09/hhp-berlin1.png');
        });

        $('#microsoftreferences:first-child+.partner+.partner+.partner img').mouseover(function () {
            $('#microsoftreferences:first-child+.partner+.partner+.partner img').attr('src', 'http://promx.net/wp-content/themes/prorm/images/references/pavlov-media-logo-gray.png');
        });

        $('#microsoftreferences:first-child+.partner+.partner+.partner img').mouseout(function () {
            $('#microsoftreferences:first-child+.partner+.partner+.partner img').attr('src', 'http://promx.net/wp-content/uploads/2014/04/pavlov-media-logo-300x120.png');
        });

        $('#microsoftreferences:first-child+.partner+.partner+.partner+.partner img').mouseover(function () {
            $('#microsoftreferences:first-child+.partner+.partner+.partner+.partner img').attr('src', 'http://promx.net/wp-content/themes/prorm/images/references/krohne-gray.png');
        });

        $('#microsoftreferences:first-child+.partner+.partner+.partner+.partner img').mouseout(function () {
            $('#microsoftreferences:first-child+.partner+.partner+.partner+.partner img').attr('src', 'http://promx.net/wp-content/uploads/2014/12/krohne-300x208.png');
        });

        $('#microsoftreferences:first-child+.partner+.partner+.partner+.partner+.partner img').mouseover(function () {
            $('#microsoftreferences:first-child+.partner+.partner+.partner+.partner+.partner img').attr('src', 'http://promx.net/wp-content/themes/prorm/images/references/snc-bayern-gray.png');
        });

        $('#microsoftreferences:first-child+.partner+.partner+.partner+.partner+.partner img').mouseout(function () {
            $('#microsoftreferences:first-child+.partner+.partner+.partner+.partner+.partner img').attr('src', 'http://promx.net/wp-content/uploads/2014/12/snc-bayern1-300x208.png');
        });


        $('#promxreferences:first-child img').mouseover(function () {
            $('#promxreferences:first-child img').attr('src', 'http://promx.net/wp-content/themes/prorm/images/references/synalis-gray.png');
        });

        $('#promxreferences:first-child img').mouseout(function () {
            $('#promxreferences:first-child img').attr('src', 'http://promx.net/wp-content/uploads/2014/12/synalis1-300x208.png');
        });

        $('#promxreferences:first-child+.partner img').mouseover(function () {
            $('#promxreferences:first-child+.partner img').attr('src', 'http://promx.net/wp-content/themes/prorm/images/references/ICT-gray.png');
        });

        $('#promxreferences:first-child+.partner img').mouseout(function () {
            $('#promxreferences:first-child+.partner img').attr('src', 'http://promx.net/wp-content/uploads/2014/12/ICT-300x208.png');
        });

        $('#promxreferences:first-child+.partner+.partner img').mouseover(function () {
            $('#promxreferences:first-child+.partner+.partner img').attr('src', 'http://promx.net/wp-content/themes/prorm/images/references/hpmidmarket-gray.png');
        });

        $('#promxreferences:first-child+.partner+.partner img').mouseout(function () {
            $('#promxreferences:first-child+.partner+.partner img').attr('src', 'http://promx.net/wp-content/uploads/2014/12/hpmidmarket1-300x208.png');
        });

        $('#promxreferences:first-child+.partner+.partner+.partner img').mouseover(function () {
            $('#promxreferences:first-child+.partner+.partner+.partner img')
                .attr('src', 'http://promx.net/wp-content/themes/prorm/images/references/kasper-gray.png');
        });

        $('#promxreferences:first-child+.partner+.partner+.partner img').mouseout(function () {
            $('#promxreferences:first-child+.partner+.partner+.partner img')
                .attr('src', 'http://promx.net/wp-content/uploads/2014/12/kasper-300x208.png');
        });


        $('#references:first-child img').mouseover(function () {
            $('#references:first-child img')
                .attr('src', 'http://promx.net/wp-content/themes/prorm/images/references/unicam-gray.png');
        });

        $('#references:first-child img').mouseout(function () {
            $('#references:first-child img')
                .attr('src', 'http://promx.net/wp-content/uploads/2014/12/unicam-300x208.png');
        });

        $('#references:first-child+.partner img').mouseover(function () {
            $('#references:first-child+.partner img')
                .attr('src', 'http://promx.net/wp-content/themes/prorm/images/references/ECG-gray.png');
        });

        $('#references:first-child+.partner img').mouseout(function () {
            $('#references:first-child+.partner img')
                .attr('src', 'http://promx.net/wp-content/uploads/2014/12/ECG-300x208.png');
        });

        $('#references:first-child+.partner+.partner img').mouseover(function () {
            $('#references:first-child+.partner+.partner img')
                .attr('src', 'http://promx.net/wp-content/themes/prorm/images/references/PlanTeam-gray.png');
        });

        $('#references:first-child+.partner+.partner img').mouseout(function () {
            $('#references:first-child+.partner+.partner img')
                .attr('src', 'http://promx.net/wp-content/uploads/2014/12/PlanTeam-300x208.png');
        });

        //social-links
    /*    $('.social-links a:first-child img').mouseover(function () {
            $('.social-links a:first-child img').attr('src', 'http://promx.net/wp-content/themes/prorm/images/facebook-gray.png');
        });

        $('.social-links a:first-child img').mouseout(function () {
            $('.social-links a:first-child img').attr('src', 'http://promx.net/wp-content/uploads/2014/03/facebook.png');
        });

        $('.social-links a:first-child+a img').mouseover(function () {
            $('.social-links a:first-child+a img').attr('src', 'http://promx.net/wp-content/themes/prorm/images/twitter-gray.png');
        });

        $('.social-links a:first-child+a img').mouseout(function () {
            $('.social-links a:first-child+a img').attr('src', 'http://promx.net/wp-content/uploads/2014/03/twitter.png');
        });

        $('.social-links a:first-child+a+a img').mouseover(function () {
            $('.social-links a:first-child+a+a img').attr('src', 'http://promx.net/wp-content/themes/prorm/images/youtube-gray.png');
        });

        $('.social-links a:first-child+a+a img').mouseout(function () {
            $('.social-links a:first-child+a+a img').attr('src', 'http://promx.net/wp-content/uploads/2014/03/youtube.png');
        });

        $('.social-links a:first-child+a+a+a img').mouseover(function () {
            $('.social-links a:first-child+a+a+a img').attr('src', 'http://promx.net/wp-content/themes/prorm/images/linkeddin-gray.png');
        });

        $('.social-links a:first-child+a+a+a img').mouseout(function () {
            $('.social-links a:first-child+a+a+a img').attr('src', 'http://promx.net/wp-content/uploads/2014/12/linkeddin.png');
        });*/

        $('img[alt=webinar]').mouseover(function () {
            $('img[alt=webinar]').attr('src', 'http://promx.net/wp-content/uploads/2015/12/webcast-after.png');
        });

        $('img[alt=webinar]').mouseout(function () {
            $('img[alt=webinar]').attr('src', 'http://promx.net/wp-content/uploads/2015/12/webinar.png');
        });

        $('img[alt=demo]').mouseover(function () {
            $('img[alt=demo]').attr('src', 'http://promx.net/wp-content/uploads/2015/12/schnell-chek-after.png');
        });

        $('img[alt=demo]').mouseout(function () {
            $('img[alt=demo]').attr('src', 'http://promx.net/wp-content/uploads/2015/12/schnell-check.png');
        });


        $('img[alt=contacts]').mouseover(function () {
            $('img[alt=contacts]').attr('src', 'http://promx.net/wp-content/uploads/2015/05/contact-after.png');
        });

        $('img[alt=contacts]').mouseout(function () {
            $('img[alt=contacts]').attr('src', 'http://promx.net/wp-content/uploads/2015/05/contact.png');
        });

        $('img[alt=request]').mouseover(function () {
            $('img[alt=request]').attr('src', 'http://promx.net/wp-content/uploads/2015/05/request-after.png');
        });

        $('img[alt=request]').mouseout(function () {
            $('img[alt=request]').attr('src', 'http://promx.net/wp-content/uploads/2015/05/request.png');
        });

        $('img[alt=meet]').mouseover(function () {
            $('img[alt=meet]').attr('src', 'http://promx.net/wp-content/uploads/2015/05/meet-after.png');
        });

        $('img[alt=meet]').mouseout(function () {
            $('img[alt=meet]').attr('src', 'http://promx.net/wp-content/uploads/2015/05/meet-us.png');
        });


        var $menuSwitcher = $('.menu-switcher');
        var $sideMenu = $('.side-menu');
        var $navbarTop = $('.navbar-top');

        if ($menuSwitcher.length && $sideMenu.length && $navbarTop.length) {
            $sideMenu.height(
                $('body').height() + $navbarTop.height() / 2
            );

            $menuSwitcher.bind('click', toggleSideMenu);
        }

        if ($("#bgvideo").length > 0) {
            $sideMenu.height(
                $('#bgvideo').height() + $navbarTop.height() / 2
            );
        }


        function toggleSideMenu() {
            $sideMenu.hasClass('shown') ? hideSideMenu() : showSideMenu();
        }

        function showSideMenu() {
            $sideMenu.addClass('shown');
        }

        function hideSideMenu() {
            $sideMenu.removeClass('shown');
        }
    })();

    (function () {
        jQuery('body')
            .on('click touchstart', function (e) {
                if (!jQuery(e.target).is('.menu-switcher.navbar-top-item') && !jQuery(e.target).is('ul[class=menu] li a')) {
                    $('.side-menu.shown').removeClass('shown');
                }
            });

    })();

    // Front page fader
    (function () {
//        var intervalDelay = __sliderInterval || 4000;
        var intervalFocusDelay = 10000;
//        var changingSpeed = __sliderChangingSpeed || 1000;
        var intervalId = null;
        var activeCardIndex = 0;
        var $cardsHolder = $('.cards-holder');
        var $cards = $cardsHolder.find('.card');
        var $cardsSwitcher = $cardsHolder.find('.cards-switcher');
        var $cardsPoints = $cardsSwitcher.find('.card-point');

        var cardsSwitcherHeight = $cardsSwitcher.height();

        $cardsHolder.on('activeCardChanged', function (event, $newCard, $newPoint) {
            $cardsPoints.stop();
            $cardsPoints.not($newPoint).fadeTo(changingSpeed / 2, .5);
            $newPoint.fadeTo(changingSpeed / 3, 1);

            $cards.stop();
            $cards.not($newCard).fadeOut(changingSpeed);
            $newCard.fadeIn(changingSpeed, function () {
            });

            if (navigator.userAgent.indexOf('Firefox') != -1) {
                $cardsHolder.height($newCard.height());
            } else {
                $cardsHolder.animate({
                    height: $newCard.height()
                }, changingSpeed);
            }

            var $cardBgSmall = $newCard.find('.card-bg-small');
            if ($cardBgSmall.is(':visible')) {
                $cardsSwitcher.css('bottom', 'auto').animate({
                    top: $cardBgSmall.height() - cardsSwitcherHeight - 20
                }, changingSpeed);
            }

            if (intervalId) {
                clearInterval(intervalId);
                intervalId = null;
            }
            intervalId = setTimeout(activateNextCard, intervalDelay);
        });

//        $(window).scroll(function () {
//            if ($(this).scrollTop() > 50) {
//                if (intervalId) {
//                    clearInterval(intervalId);
//                    intervalId = null;
//                }
//            } else {
//                if (!intervalId) {
//                    intervalId = setTimeout(activateNextCard, intervalDelay);
//                }
//            }
//        });

//        $cardsHolder.mouseover(function () {
//            if (intervalId) {
//                clearInterval(intervalId);
//                intervalId = setTimeout(activateNextCard, intervalFocusDelay);
//            }
//        });
//        $cardsHolder.mouseout(function () {
//            if (intervalId) {
//                clearInterval(intervalId);
//                intervalId = setTimeout(activateNextCard, intervalDelay);
//            }
//        });

        function activateNextCard() {
            var nextCardIndex = activeCardIndex + 1;
            if (nextCardIndex >= $cards.length) {
                nextCardIndex = 0;
            }
            var $nextCard = $($cards.get(nextCardIndex));
            var $nextPoint = $($cardsPoints.get(nextCardIndex));

            activeCardIndex = nextCardIndex;

            $cardsHolder.trigger('activeCardChanged', [$nextCard, $nextPoint]);
        }

        $cardsPoints.bind('click', function () {
            var $nextCard = $cards.filter('#card-' + $(this).data('card-name'));
            var nextCardIndex = $cards.index($nextCard);
            var $nextPoint = $($cardsPoints.get(nextCardIndex));

            activeCardIndex = nextCardIndex;

            $cardsHolder.trigger('activeCardChanged', [$nextCard, $nextPoint]);
        });

        function fixCardsBg() {
            $cards.each(function () {
                var $bgBig = $(this).find('.card-bg');
                var $bgSmall = $(this).find('.card-bg-small');

                var coeffBig = $bgBig.data('initial-height') / $cardsHolder.height();
                var newBigWidth = $bgBig.data('initial-width') / coeffBig;
				
                $bgBig.width(newBigWidth)
                    .css('margin-left', -newBigWidth / 2);

                var coeffSmall = $bgSmall.data('initial-width') / $(window).width();
                var newSmallHeight = $bgSmall.data('initial-height') / coeffSmall;
                $bgSmall.height(newSmallHeight);
            });
        }

        fixCardsBg();
        $(window).bind('resize', fixCardsBg);

        $cardsHolder.trigger('activeCardChanged', [
            $($cards.get(activeCardIndex)),
            $($cardsPoints.get(activeCardIndex))
        ]);

    })();

    // Collapsible news
    (function () {
        var $container = $('.collapsible-news');
        var $newsItems = $container.find('.news-item');
        $newsItems.find('h3, h3 a, time').bind('click', function (event) {
            event.preventDefault();
            event.stopPropagation();
            var $newsItem = $(this).parents('.news-item');
            if ($newsItem.hasClass('expanded')) {
                $newsItem.removeClass('expanded').addClass('collapsed');
            } else {
                $newsItem.removeClass('collapsed').addClass('expanded');
            }
        })
    })();

    // Category filter
    (function () {
        var $filters = $('.cat-filter');
        $filters.bind('change', function (event) {
            var urlTpl = $(this).data('url-tpl');
            location.href = urlTpl.replace(/\[cat\]/, $(this).val());
        });
    })();


    // App pages
    (function () {
        var $sideLinkLeft = $('.app-side-link.app-prev');
        var $sideLinkRight = $('.app-side-link.app-next');
        var linkWidth = $sideLinkLeft.width() || $sideLinkRight.width();
        var distanceFromContent = 90;


        var navbarTopHeight = $('.navbar-top').height();
        var navbarBottomHeight = $('.navbar-bottom').height();
        var docHeight = $(document).height();
        var footerHeight = $('body>footer').height();


        $sideLinkLeft.detach().appendTo('body');
        $sideLinkRight.detach().appendTo('body');

        fixSideLinksVerticalPosition();
        fixSideLinksHorizontalPosition();

        $(window)
            .bind('scroll', function () {
                fixSideLinksVerticalPosition();
            })
            .bind('resize', function () {
                fixSideLinksHorizontalPosition();
                fixSideLinksVerticalPosition();
            });

        function fixSideLinksHorizontalPosition() {
            var windowWidth = $(window).width();
            var containerWidth = $('.container').first().width();
            var gap = (windowWidth - containerWidth) / 2;
            var delta = Math.max(gap - linkWidth - distanceFromContent, 0);

            if (gap >= linkWidth) {
                $sideLinkLeft.css({left: delta, display: 'block'});
                $sideLinkRight.css({right: delta, display: 'block'});
            } else {
                $sideLinkLeft.css({display: 'none'});
                $sideLinkRight.css({display: 'none'});
            }
        }

        function fixSideLinksVerticalPosition() {
            var windowHeight = $(window).height();
            var offset = $(window).scrollTop();
            var areaHeight = windowHeight - navbarTopHeight - navbarBottomHeight;
            var linksTop = (areaHeight / 2) - 50 + navbarBottomHeight;

            var delta = 0;
            if (offset + windowHeight >= docHeight - footerHeight) {
                delta = offset + windowHeight - (docHeight - footerHeight);
            }

            $sideLinkLeft.css({bottom: linksTop + delta});
            $sideLinkRight.css({bottom: linksTop + delta});
        }
    })();

    (function () {
        var $sideLinkLefts = $('.app-side-links.app-prev');
        var $sideLinkRights = $('.app-side-links.app-next');
        var linkWidths = $sideLinkLefts.width() || $sideLinkRights.width();
        var distanceFromContents = 90;


        var navbarTopHeights = $('.navbar-top').height();
        var navbarBottomHeights = $('.navbar-bottom').height();
        var docHeights = $(document).height();
        var footerHeights = $('body>footer').height();


        $sideLinkLefts.detach().appendTo('body');
        $sideLinkRights.detach().appendTo('body');

        fixSideLinksVerticalPositions();
        fixSideLinksHorizontalPositions();

        $(window)
            .bind('scroll', function () {
                fixSideLinksVerticalPositions();
            })
            .bind('resize', function () {
                fixSideLinksHorizontalPositions();
                fixSideLinksVerticalPositions();
            });

        function fixSideLinksHorizontalPositions() {
            var windowWidths = $(window).width();
            var containerWidths = $('.container').first().width();
            if (screen.width >= 1600) {
                var gaps = (windowWidths - containerWidths) / 4;
            } else if (screen.width < 1600) {
                var gaps = (windowWidths - containerWidths) / 2;
            }
            var deltas = Math.max(gaps - linkWidths - distanceFromContents, 0);

            if (gaps >= linkWidths) {
                $sideLinkLefts.css({left: deltas, display: 'block'});
                $sideLinkRights.css({right: deltas, display: 'block'});
            } else {
                $sideLinkLefts.css({display: 'none'});
                $sideLinkRights.css({display: 'none'});
            }
        }

        function fixSideLinksVerticalPositions() {
            var windowHeights = $(window).height();
            var offsets = $(window).scrollTop();
            var areaHeights = windowHeights - navbarTopHeights - navbarBottomHeights;
            var linksTops = (areaHeights / 2) - 50 + navbarBottomHeights;

            var deltas = 0;
            if (offsets + windowHeights >= docHeights - footerHeights) {
                deltas = offsets + windowHeights - (docHeights - footerHeights);
            }

            $sideLinkLefts.css({bottom: linksTops + deltas});
            $sideLinkRights.css({bottom: linksTops + deltas});
        }
    })();


    // Add link classes by file extension
    (function () {
        var exts = ['pdf'];
        $.each(exts, function (index, value) {
            $("a[href$='." + value + "']").addClass(value + '-link');
        });
    })();

    // Fix partners blocks
    (function () {
        var $partners = $('.partners .partner');
        var maxHeight = 0;
        $partners.each(function () {
            var height = $(this).height();
            if (height > maxHeight) {
                maxHeight = height;
            }
        });
        $partners.height(maxHeight);
        $partners.each(function () {
            var $img = $(this).find('img');
            if ($img.height() < maxHeight) {
                $(this).css({
                    'padding-top': (maxHeight - $img.height()) / 2
                });
            }
        });
    })();

    // Scroll to form success message if it exists
    (function () {
        var $message = $('.form-success-message');
        if ($message.length) {
            $('html, body').animate({
                scrollTop: $message.offset().top - 130
            }, 500);
        }
    })();

    // Add circles to kaufen table
    (function () {
        var $table = $('.kaufen');
        $table.find('td').each(function () {
            var $td = $(this);
            if (/^(\d+|x)$/i.test($td.text())) {
                $td.html('<span class="circle">' + $td.html() + '</span>');
            }
        });
    })();


    // Change aligning on erleben page
    (function () {
        $('.post-erleben,.post-what-is-prorm').each(function () {
            $(this).find('h3').each(function () {
                var $h3 = $(this);
                var $afterH3 = $(this).next();
                if ($afterH3.is('ul')) {
                    var $row = $('<div class="row erleben-list"></div>');
                    $row.append($('<div class="col-md-5"></div>').append($h3.clone()));
                    $row.append($('<div class="col-md-7"></div>').append($afterH3));
                    $h3.replaceWith($row);
                }
            });
        })
    })();


    //help text
    (function () {

        var mobilecheck = function () {
            var check = false;
            (function (a) {
                if (/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i.test(a) || /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(a.substr(0, 4)))check = true
            })(navigator.userAgent || navigator.vendor || window.opera);
            return check;
        }

//        if ($.cookie('showHelpText') !== 'no' && mobilecheck() == false && generalHelpTextEnable == true) {
//
//
//            var intervalPeriod = generalHelpTextInterval;
//
//            function shuffle(array) {
//                var currentIndex = array.length, temporaryValue, randomIndex;
//
//                // While there remain elements to shuffle...
//                while (0 !== currentIndex) {
//
//                    // Pick a remaining element...
//                    randomIndex = Math.floor(Math.random() * currentIndex);
//                    currentIndex -= 1;
//
//                    // And swap it with the current element.
//                    temporaryValue = array[currentIndex];
//                    array[currentIndex] = array[randomIndex];
//                    array[randomIndex] = temporaryValue;
//                }
//
//                return array;
//            }
//
//            var helpText = $('.navbar-bottom-helper');
//
//            shuffle(helpText);
//
//            var counter = 0;
//
//            function showHelpText() {
//
//                console.log(counter);
//
//                if (counter > 0) {
//                    var i = counter;
//                    $(helpText[i - 1]).fadeOut(function () {
//                        $(this).css('display', 'none')
//                    });
//                }
//                $(helpText[counter]).fadeIn(2000);
//
//                $(helpText[counter]).find('.navbar-helper-close').on('click', function () {
//                    $(this).parent().fadeOut(function () {
//                        $(this).css('display', 'none')
//                    });
//                    clearInterval(interval);
//                    $.cookie('showHelpText', 'no', { expires: 7, path: '/' });
//                })
//
//                if (counter === (helpText.length - 1)) {
//                    showLast();
//                    clearInterval(interval);
//                }
//                counter++;
//            }
//
//            showHelpText();
//            var interval = setInterval(showHelpText, intervalPeriod);
//
//            function showLast() {
//                setTimeout(function () {
//                    $(helpText[helpText.length - 1]).fadeOut(function () {
//                        $(this).css('display', 'none')
//                    });
//                }, intervalPeriod);
//            }
//
//
//        }

    })();


    setTimeout(function () {
        $(window).trigger('resize');
    }, 300);

    // Load categories on page newsroom
    (function () {
        if (window.location.href.indexOf('promx-newsroom') != -1) {
            getNews();
        }
        if (
            (window.location.href.indexOf('contact-us') != -1)
                || (window.location.href.indexOf('kontakt') != -1)
                || (window.location.href.indexOf('/en/support') != -1)
                || (window.location.href.indexOf('/de/support') != -1)
            ) {

            getOffices();
        }

        jQuery('img.show-full-page').on('click', function (event) {
            if (jQuery(window).width() > 640) {
                var dialogBox = $('#fullpage-dialog-box');
                var dialogWidth = jQuery('body').width();
                var dialogHeight = jQuery(window).height();
                dialogBox.html(
                    '<div class="dialog-box-cancel"><img onclick="dialogBoxClose()" src="/wp-content/themes/prorm/images/but_dialog_cancel.png"></div>' +
                        '<img class="dialog-box-fp-image" src="' + jQuery(this).attr('src') + '"/>'
                );
                dialogBox.dialog({
                    modal: true,
                    autoOpen: false,
                    width: dialogWidth,
                    height: dialogHeight,
                    resizable: false
                });
                dialogBox.parent().css({"border-style": "none", "background": "transparent none", "padding": "4", "z-index": "1600", "position": "fixed"});
                dialogBox.prev('.ui-dialog-titlebar').css({"display": "none"});
                dialogBox.css({"height": dialogHeight - 4});
                dialogBox.find('img.dialog-box-fp-image').css({"max-width": dialogWidth - 10, "max-height": dialogHeight - 44});
                dialogBox.dialog("open");
                dialogBox.find('img').on('click', function () {
                    dialogBoxClose();
                });
            }
            event.preventDefault();
        });
    })();
})(jQuery);

function getNews() {
    var curWidth = jQuery('.container').outerWidth();
    var curHeight = jQuery(window).height();
    var curLang = getCurLang();
    jQuery.ajax({
        type: "post",
        dataType: "json",
        url: '/wp-admin/admin-ajax.php?action=get_box_news&lang=' + curLang,
        data: {clWidth: curWidth, clHeight: curHeight},
        success: function (msg) {
            if (!msg) {
                // Error
            } else {
                // var getting_data = jQuery.parseJSON(msg);
                jQuery('#newsroom-rightcol').before(msg.categBlocks);
                if (msg.tabs) $("div#tabs-categ").tabs();
            }
        }
    });
}
function getOffices() {
    var curWidth = jQuery('.container').outerWidth();
    var curHeight = jQuery(window).height();
    var curLang = getCurLang();
    jQuery.ajax({
        type: "post",
        dataType: "json",
        url: '/wp-admin/admin-ajax.php?action=get_box_offices&lang=' + curLang,
        data: {clWidth: curWidth, clHeight: curHeight},
        success: function (msg) {
            if (!msg) {
                // Error
            } else {
                jQuery('.entry-content').append(msg.sidebarOffices);
            }
        }
    });
}
function dialogBoxClose() {
    $('#fullpage-dialog-box').dialog("close");
}
function getCurLang() {
    var curLang = jQuery('#fb-root').attr('data-cur-lang');
    if (!curLang) curLang = 'de';
    return curLang;
}

function goBack() {
    window.history.back();
}
