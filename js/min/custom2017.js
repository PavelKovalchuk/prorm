function calculationPageNotFound(){jQuery(window).resize(function(){var e=jQuery(window).height(),t=jQuery("#footer").outerHeight(),i=jQuery("#main"),o=new WindowHeight(e,t,i);WINDOWWIDTH>jQuery(window).width()&&jQuery(window).height()>WINDOWHEIGHT?o.heightWindows():i.css("height","inherit")})}function cookie(){var e=getCookie("test");void 0==e?jQuery(".session_block").show():jQuery(".session_block").hide(),jQuery(document).on("click",".session_btn",function(){var e=new Date;e.setFullYear(e.getFullYear()+10),document.cookie="test=value; path=/; expires="+e.toGMTString()+";",jQuery(".session_block").hide()})}function getCookie(e){var t=document.cookie.match(RegExp("(?:^|; )"+e.replace(/([\.$?*|{}\(\)\[\]\\\/\+^])/g,"\\$1")+"=([^;]*)"));return t?decodeURIComponent(t[1]):void 0}function formOpenSlide(){jQuery(".opener-scroll-slide").on("click",function(e){e.preventDefault();var t=jQuery(this).parents(".tape-block"),i=t.siblings(".slide-scroll"),o=parseInt(jQuery("#header").css("height"));return jQuery(".slide-scroll").not(i).removeClass("open").hide(),i.hasClass("open")?(i.removeClass("open"),i.slideUp()):(i.find(".container").hide(),i.find(".container").eq(0).show(),i.addClass("open"),i.slideDown(),jQuery("html, body").stop().animate({scrollTop:i.position().top-o},1e3)),!1})}function formAnchor(){if("#form_success"!=location.hash&&""!=location.hash){var e=jQuery("form"+location.hash),t=jQuery(e).parents(".slide-scroll"),i=parseInt(jQuery("#header").css("height"));t.length>0&&(t.addClass("open").show(),t.find(".container").hide(),e.closest(".container").show(),jQuery("html, body").stop().animate({scrollTop:t.position().top-i},1e3))}}function linkSelector(){jQuery("select[name=links]").on("change",function(){jQuery("a.goto-link").attr("href",jQuery(this).val());var e=jQuery(".slider-text-2");jQuery(e).hasClass("break")||e.addClass("break").before("<br>")})}function showSubForm(){jQuery(".show-form").on("click",function(e){e.preventDefault(),jQuery(this).parents(".container").hide(),jQuery(this).parents(".slide-scroll").find(".container.form-popup").show()})}function closemodal(){var e=jQuery(".window-overlay"),t=jQuery(".window"),i=jQuery(".close-modal"),o=jQuery(".tape-block"),n=o.siblings(".slide-scroll");if(i.on("click",function(){fadepopup(e)}),"none"==!e.css("display")&&!n.hasClass("open")&&(n.find(".container").eq(0).show(),n.slideDown(),2>e.length&&t.find(".form-success-message").hasClass("demo-version"))){var a=t.find(".form-success-message.demo-version");a.parents(".form-popup").show()}e.on("click",function(i){jQuery(i.target).closest(t).length||(fadepopup(e),i.stopPropagation())})}function fadepopup(e){jQuery(".form-popup")&&(jQuery(".form-popup").hide(),jQuery(".hide-form").show()),jQuery("body").removeClass("overflow-screen"),e.removeClass("show-modal")}function noscroll_map(){jQuery(".contact-holder").click(function(){jQuery(this).find("iframe").addClass("clicked")}).mouseleave(function(){jQuery(this).find("iframe").removeClass("clicked")})}function magnific_popup(){$gallery=jQuery(".gallery-item"),$gallery_video=jQuery(".popup-youtube"),($gallery.length>0||$gallery_video.length>0)&&(init_magnific_popup($gallery,!1),init_magnific_popup($gallery_video,!0))}function init_magnific_popup(e,t){var i="mfp-zoom-out",o={};o={type:"image",closeOnContentClick:!0,fixedContentPos:!0,mainClass:"mfp-img-mobile",removalDelay:500,image:{verticalFit:!0},callbacks:{beforeOpen:function(){this.st.image.markup=this.st.image.markup.replace("mfp-figure","mfp-figure mfp-with-anim"),this.st.mainClass=this.st.el.attr("data-effect")},open:function(){jQuery("body").hasClass(i)||jQuery("body").addClass(i)}},midClick:!0},t&&(o.type="iframe",o.preloader=!0,o.disableOn=0,o.removalDelay=100,o.mainClass="mfp-fade"),e.magnificPopup(o)}function owlCarousels(){var e=jQuery(".owl-carousel-gallery"),t=jQuery(".owl-carousel-video"),i=!0;e.length>0&&initializeOwlCarousel(e,!1),t.length>0&&initializeOwlCarousel(t,i)}function initializeOwlCarousel(e,t){var i={};i={navigation:!1,dots:!1,loop:!0,smartSpeed:450,navText:["",""],autoplay:!0,lazyLoad:!0,margin:20,autoplayTimeout:4e3,items:1,responsive:{0:{items:1},992:{items:1}}},t===!0&&(i.autoplay=!1,i.margin=25,i.items=3,i.responsive={0:{items:1},768:{items:2},992:{items:3}}),$owl_block=jQuery(".cycle-gallery"),$owl_block.find(".icon-left").click(function(){e.trigger("prev.owl.carousel")}),$owl_block.find(".icon-right").click(function(){e.trigger("next.owl.carousel",[300])}),e.owlCarousel(i)}function transferFromHomePage(){jQuery("#links").on("click",function(){var e=jQuery("#software-block");e.hasClass("software-hidden")?(e.removeClass("software-hidden"),e.addClass("software-visible")):e.hasClass("software-visible")&&(e.removeClass("software-visible"),e.addClass("software-hidden"))})}function movePlanet(){function e(){var e=jQuery(window).scrollTop(),t=jQuery(".scrolling-object-down-quik"),i=jQuery(".scrolling-object-down"),o=jQuery(".scrolling-object-top"),n=jQuery(".scrolling-object-opacity");t.length>0&&t.css("bottom",0-.3*e+"%"),i.length>0&&i.css("bottom",0-.1*e+"%"),o.length>0&&o.css("bottom",0+.12*e+"%"),n.length>0&&n.css("opacity",1-e/400)}var t=jQuery("#js-banner-objects");t.length>0&&jQuery(window).bind("scroll",function(){e()})}function initAboutUsMoveNumbers(){if(jQuery(".about-us-numbers-block").length>0){var e=$(window).height(),t=jQuery(".about-us-numbers-block"),i=t.position().top-e;t.attr("data-status"),waitCounter(i)}}function waitCounter(e){jQuery(document).scroll(function(){var t=jQuery(".about-us-numbers-block").attr("data-status");jQuery(window).scrollTop()>e&&"ready"===t&&(startCounter(),jQuery(".about-us-numbers-block").attr("data-status","done"))})}function startCounter(){jQuery(".counter").each(function(){var e=jQuery(this),t=e.attr("data-count"),i=e.attr("data-sign")?e.attr("data-sign"):!1;jQuery({countNum:e.text()}).animate({countNum:t},{duration:2e3,easing:"linear",step:function(){e.text(Math.floor(this.countNum))},complete:function(){e.text(this.countNum+i)}})})}function initCustomerSlider(){jQuery("#carousel_clients").length>0&&jQuery("#carousel_clients").owlCarousel({loop:!0,margin:0,navText:["",""],nav:!0,dots:!0,lazyLoad:!0,responsive:{0:{items:1},1024:{items:2}}})}function initHomepageSlider(){var e=jQuery("#homepage_slider");e.length>0&&(e.owlCarousel({loop:!0,margin:20,navText:["",""],autoplay:!0,autoplayHoverPause:!1,autoplayTimeout:5e3,nav:!0,dots:!0,lazyLoad:!0,responsive:{0:{items:1},1024:{items:1}}}),jQuery(".owl-carousel").on("mouseleave",function(){e.trigger("play.owl.autoplay",[5e3])}),jQuery(".owl-carousel").on("mouseenter",function(){e.trigger("stop.owl.autoplay")}))}function initTeamSlider(){var e=jQuery("#carouselTeam");if(e.length>0){e.owlCarousel({loop:!0,margin:40,navText:["",""],nav:!0,dots:!0,lazyLoad:!0,responsive:{0:{items:1},640:{items:1},768:{items:2},1024:{items:2},1200:{items:3}}});var t={};jQuery(".team-item-big").each(function(){var e=parseInt($(this).attr("data-group"),10);t[e]||(t[e]=[]),t[e].push(this)}),jQuery.each(t,function(){jQuery(this).magnificPopup({type:"image",closeOnContentClick:!1,closeBtnInside:!1,midClick:!0,callbacks:{beforeOpen:function(){this.st.image.markup=this.st.image.markup.replace("mfp-figure","mfp-figure mfp-with-anim"),this.st.mainClass=this.st.el.attr("data-effect")}},image:{titleSrc:function(e){return e.el.attr("title")}},gallery:{enabled:!0,tCounter:'<span class="mfp-counter">%curr% / %total%</span>',navigateByImgClick:!1,preload:[0,2]}})})}}function initAwardsSlider(){var e=jQuery("#carouselAwards");e.length>0&&e.owlCarousel({loop:!0,margin:0,navText:["",""],nav:!0,dots:!0,lazyLoad:!0,responsive:{0:{items:1},1024:{items:1}}})}function initVideoSlider(){jQuery("#video-carousel")&&jQuery("#video-carousel").owlCarousel({loop:!0,margin:30,navText:["",""],nav:!0,video:!0,dots:!0,responsive:{0:{items:1},1024:{items:3}}})}function initModalWindow(){var e=jQuery(".modal-window");e.each(function(){var e=jQuery(this);if(e.length>0){var t=e.attr("data-aim-form-name"),i=jQuery("[data-form-name = "+t+"]"),o=e.find(".close")[0];i.on("click",function(){e.css("display","block")}),jQuery(o).on("click",function(){e.css("display","none")}),window.onclick=function(t){t.target.id===e[0].id&&e.css("display","none")},jQuery(window).bind("keyup",function(t){27==t.keyCode&&e.css("display","none")})}})}function initWowJS(){var e=jQuery(".js-wow");e.length>0&&(wow=new WOW({boxClass:"wow",animateClass:"animated",offset:0,mobile:!0,live:!0,scrollContainer:null}),wow.init())}function startGraphES(){var e=jQuery("#graph_1"),t=jQuery("#graph_2"),i=jQuery("#graph_3"),o=jQuery("#graph_text_main"),n=jQuery(".gi-1"),a=jQuery(".gi-2"),r=jQuery(".gi-3"),s={full:{top:"63px",right:"0px",opacity:1},hd_screen:{top:"53px",right:"0px",opacity:1},widescreen:{top:"43px",right:"0px",opacity:1},desktop:{top:"25px",right:"0px",opacity:1},tablet:{top:"25px",right:"0px",opacity:1},sm_tablet:{top:"25px",right:"0px",opacity:1}},l={},u=$(window).width();l=u>1400?s.full:1400>u&&u>1200?s.hd_screen:1200>u&&u>1024?s.widescreen:s.desktop;var c={full:{top:"0%",opacity:1},desktop:{bottom:"0%",opacity:1}},d={};d=u>1024?c.full:c.desktop,e.animate({top:"0%",opacity:1},{duration:700,specialEasing:{opacity:"easeInExpo",top:"easeInSine"}}),t.animate(d,{duration:700,specialEasing:{opacity:"easeInExpo",top:"easeInSine"}}),i.css("display","block").animate(l,{duration:1100,specialEasing:{opacity:"easeInExpo",right:"easeOutSine",top:"easeOutSine"}}),n.css("display","block").animate({top:"50%",left:"0%",opacity:1},{duration:1e3,specialEasing:{opacity:"easeInExpo",top:"easeInCirc",left:"easeInCirc"}}),a.css("display","block").animate({top:"0%",right:"0%",opacity:1},{duration:900,specialEasing:{opacity:"easeInExpo",top:"easeInCirc",right:"easeInCirc"}}),r.css("display","block").animate({bottom:"0%",right:"0%",opacity:1},{duration:1500,specialEasing:{opacity:"linear",bottom:"linear",right:"linear"}}),o.animate({marginTop:"0%"},{duration:800,specialEasing:{marginTop:"easeInSine"}})}function waitGraphES(e,t){jQuery(document).scroll(function(){var i=e.attr("data-graph-status");jQuery(window).scrollTop()>t&&"ready"===i&&(startGraphES(),e.attr("data-graph-status","done"))})}function initGraphES(){var e=jQuery(".js-graph-es");if(e.length>0){var t=$(window).height(),i=e.position().top-t;waitGraphES(e,i)}}function initNewsSlider(){var e=jQuery("#newsGallery");e.length>0&&e.lightSlider({gallery:!0,item:1,loop:!0,slideMargin:0,enableDrag:!0,auto:!1,currentPagerPosition:"left",onSliderLoad:function(){e.removeClass("cS-hidden"),jQuery(".lSAction .lSPrev").html('<i class="fa fa-chevron-left" aria-hidden="true"></i>'),jQuery(".lSAction .lSNext").html('<i class="fa fa-chevron-right" aria-hidden="true"></i>')}});var t={};jQuery(".gallery-item-news").each(function(){var e=parseInt($(this).attr("data-group"),10);t[e]||(t[e]=[]),t[e].push(this)}),jQuery.each(t,function(){jQuery(this).magnificPopup({type:"image",closeOnContentClick:!1,closeBtnInside:!1,midClick:!0,callbacks:{beforeOpen:function(){this.st.image.markup=this.st.image.markup.replace("mfp-figure","mfp-figure mfp-with-anim"),this.st.mainClass=this.st.el.attr("data-effect")}},image:{},gallery:{enabled:!0,tCounter:'<span class="mfp-counter">%curr% / %total%</span>',navigateByImgClick:!1,preload:[0,2]}})})}function initFixedSidebar(){var e=jQuery(".sticky"),t=parseInt(jQuery("main").css("padding-bottom")),i=parseInt(jQuery("footer").outerHeight(!0));if(e.length>0)var o=e.outerHeight(!0)+78,n=e.offset().top-jQuery(".breadcrumbs").outerHeight(!0);jQuery(window).width()>1024&&jQuery(window).scroll(function(){if(e.length>0){var a=jQuery(window).scrollTop(),r=jQuery("header").outerHeight();if(console.log(r),a>n){e.css("top",a-n+r);var s=e.offset().top+o,l=jQuery("#content").offset().top+jQuery("#content").height();if(s>l){var u=jQuery("#content").height()-o-i-t;e.css("top",u)}}else e.css("top","0")}}),jQuery(window).resize(function(){if(e.length>0)var o=e.outerHeight(!0)+78,n=e.offset().top-jQuery(".breadcrumbs").outerHeight(!0);jQuery(window).scroll(function(){if(jQuery(window).width()>1024){if(e.length>0){var a=jQuery(window).scrollTop();if(a>n){e.css("top",a-n);var r=e.offset().top+o,s=jQuery("#content").offset().top+jQuery("#content").height();if(r>s){var l=jQuery("#content").height()-o-i-t;e.css("top",l)}}else e.css("top","0")}}else e.removeAttr("style")})})}function initEventSlider(){var e=jQuery("#event-carousel");e.length>0&&e.owlCarousel({loop:!0,margin:30,navText:["",""],autoplay:!0,nav:!0,dots:!0,lazyLoad:!0,responsive:{0:{items:1},1024:{items:3}}})}function initOurPartnerSlider(){var e=jQuery("#op-carousel");e.length>0&&e.owlCarousel({loop:!0,margin:30,navText:["",""],autoplay:!0,nav:!0,dots:!0,lazyLoad:!0,responsive:{0:{items:1},1024:{items:1}}})}function randomInteger(e,t){var i=e-.5+Math.random()*(t-e+1);return i=Math.round(i)}function initShiningStars(){jQuery(window).width()>767&&jQuery(".js-shine-star").length>0&&setInterval(function(){jQuery(".star-1").animate({left:randomInteger(0,99)+"%"},{duration:100}).fadeOut(150).delay(2e3).fadeIn(300).fadeOut(150).delay(1254),jQuery(".star-2").animate({left:randomInteger(0,99)+"%"},{duration:200}).fadeOut(300).fadeIn(120).fadeOut(120).delay(1920),jQuery(".star-3").animate({left:randomInteger(0,99)+"%"},{duration:1e3}).fadeOut(150).delay(1200).fadeIn(300).fadeOut(150).delay(800),jQuery(".star-4").animate({left:randomInteger(0,99)+"%"},{duration:700}).fadeOut(700).fadeIn(300).fadeOut(160).delay(1350),jQuery(".star-5").animate({left:randomInteger(0,99)+"%"},{duration:600}).fadeOut(350).delay(500).fadeIn(400).fadeOut(150).delay(800),jQuery(".star-6").animate({left:randomInteger(0,99)+"%"},{duration:1500}).fadeOut(450).delay(1200).fadeIn(300).fadeOut(150).delay(200)},3)}function include(e){var t=document.createElement("script");t.src=e,console.log(t.src),document.getElementsByTagName("head")[0].appendChild(t)}function initFlyingBirds(){jQuery(window).width()>767&&jQuery(".birds_area").length>0&&include(window.location.protocol+"//"+window.location.host+"/wp-content/themes/prorm/js/birds.js")}function transformTextInit(){jQuery(window).width()>767&&jQuery(".banner-text").length>0&&(jQuery(".banner-text").each(function(){for(var e=jQuery(this).html(),t=e.split(" "),i="",o=0;t.length>o;o++)i+="<span class='part_sentence'>"+t[o]+"</span> ";jQuery(this).html(i)}),jQuery(".banner-text span").each(function(){jQuery(this).css({transform:"translate("+randomInteger(-100,100)+"px, "+randomInteger(-100,100)+"px)"})}),setTimeout(function(){$(".banner-text span").css({transform:"translate(0, 0)",opacity:1})},50))}function initMobileSlider(){function e(e){if(!(0>e||e>=i)){var o=-100*e+"%";t.animate({"margin-left":o},400,function(){n=e})}}var t=jQuery(".mobile-slider-ul"),i=t.children().length,o="100%",n=0;console.log("ul init"),console.log("slide_count",i),console.log("slide_width_pc",o),t.find(".mobile-slider-li").each(function(e){jQuery(this).css({left:"100%"})}),jQuery(".mobile-slider-prev").click(function(){console.log("prev button clicked",n-1),e(n-1)}),jQuery(".mobile-slider-next").click(function(){console.log("next button clicked",n+1),e(n+1)})}function playCube(){jQuery(function(){jQuery(".demo").refineSlide({maxWidth:1900,transition:"cubeV",fallback3d:"sliceV",customTransitions:[],perspective:1e3,useThumbs:!0,useArrows:!0,thumbMargin:3,autoPlay:!1,delay:5e3,transitionDuration:800,startSlide:0,keyNav:!0,captionWidth:100,arrowTemplate:'<div class="rs-arrows"><a href="#" class="rs-prev"></a><a href="#" class="rs-next"></a></div>',onInit:function(){},onChange:function(){},afterChange:function(){}})})}jQuery(document).ready(function(){formOpenSlide(),formAnchor(),linkSelector(),showSubForm(),closemodal(),owlCarousels(),noscroll_map(),calculationPageNotFound(),cookie(),transferFromHomePage(),initAboutUsMoveNumbers(),initCustomerSlider(),initVideoSlider(),initModalWindow(),initNewsSlider(),initFixedSidebar(),initTeamSlider(),initAwardsSlider(),initHomepageSlider(),initEventSlider(),initOurPartnerSlider(),initMobileSlider(),magnific_popup()});var WINDOWWIDTH=1024,WINDOWHEIGHT=600,WindowHeight=function(e,t,i){this.heightWindow=e,this.footerHeight=t,this.heightCont=i,this.heightWindows=function(){if(0!=jQuery(".page_not_found").length){var e=this.heightWindow-this.footerHeight,t=this.heightCont;return t.outerHeight(e)}}};