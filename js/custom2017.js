
jQuery(document).ready(function () {
    formOpenSlide();
    formAnchor();
    linkSelector();
    showSubForm();
    closemodal();
    owlCarousels();
    noscroll_map();
    
    calculationPageNotFound();
    cookie();
    transferFromHomePage();
//    movePlanet();
    aboutUsMoveNumbers();
    initCustomerSlider();
    initVideoSlider();
    initModalWindow();
    initNewsSlider();
    initFixedSidebar();
    initTeamSlider();
    initAwardsSlider();
    initHomepageSlider();
    
//    initShiningStars();
//    
//    initFlyingBirds();
//    transformTextInit();
   
    initEventSlider();
    initOurPartnerSlider();
   
    
    magnific_popup();
//    playCube();
    
});

var WINDOWWIDTH = 1024,
        WINDOWHEIGHT = 600;
function calculationPageNotFound() {

    jQuery(window).resize(function () {
        var $heightWindow = jQuery(window).height(),
                $footerHeight = jQuery('#footer').outerHeight(),
                $contentHeight = jQuery("#main"),
                objectWindow = new WindowHeight($heightWindow, $footerHeight, $contentHeight);
        if (((jQuery(window).width()) < WINDOWWIDTH) && ((jQuery(window).height()) > WINDOWHEIGHT)) {
            objectWindow.heightWindows();
        } else {
            $contentHeight.css('height', 'inherit');
        }
    });
}

function cookie(){
    var result = getCookie('test');
    if ( result == undefined ){
        jQuery('.session_block').show();
    } else {
        jQuery('.session_block').hide();
    }
    jQuery(document).on('click', '.session_btn', function(){
        var CookieDate = new Date;
        CookieDate.setFullYear(CookieDate.getFullYear( ) +10);
        document.cookie = 'test=value; path=/; expires=' + CookieDate.toGMTString( ) + ';';

        jQuery('.session_block').hide();
    });

    
}

// return height founding object
var WindowHeight = function (heightWindow, footerHeight, heightCont) {
    this.heightWindow = heightWindow;
    this.footerHeight = footerHeight;
    this.heightCont = heightCont;
    this.heightWindows = function () {
        if (jQuery('.page_not_found').length != 0) {
            var diff = this.heightWindow - this.footerHeight,
                    height = this.heightCont;
            return height.outerHeight(diff);
        }
    };
}
// возвращает cookie с именем name, если есть, если нет, то undefined
function getCookie(name) {
  var matches = document.cookie.match(new RegExp(
    "(?:^|; )" + name.replace(/([\.$?*|{}\(\)\[\]\\\/\+^])/g, '\\$1') + "=([^;]*)"
  ));
  return matches ? decodeURIComponent(matches[1]) : undefined;
}


function formOpenSlide() {
    jQuery('.opener-scroll-slide').on('click', function (e) {

        e.preventDefault();

        var target = jQuery(this).parents('.tape-block');
        var block = target.siblings('.slide-scroll');
        var header_height = parseInt(jQuery('#header').css('height'));

        jQuery('.slide-scroll').not(block).removeClass('open').hide();

        if (!block.hasClass('open')) {
            block.find('.container').hide();
            block.find('.container').eq(0).show();
            block.addClass('open');
            block.slideDown();

            jQuery('html, body').stop().animate({
                scrollTop: block.position().top - header_height
            }, 1000);

        } else {
            block.removeClass('open');
            block.slideUp();
        }
        return false;
    });
}

function formAnchor() {
    if ((location.hash != '#form_success') && (location.hash != '')) {

        var slide_form = jQuery('form' + location.hash);
        var slide_block = jQuery(slide_form).parents('.slide-scroll');
        var header_height = parseInt(jQuery('#header').css('height'));
        
        if(slide_block.length > 0){
            slide_block.addClass('open').show();
            slide_block.find('.container').hide();
            slide_form.closest('.container').show();

            jQuery('html, body').stop().animate({
                scrollTop: slide_block.position().top - header_height
            }, 1000);
        }

       

    }
}

function linkSelector() {
    jQuery('select[name=links]').on('change', function (e) {
        jQuery('a.goto-link').attr('href', jQuery(this).val());

        var span = jQuery('.slider-text-2');
        if (!jQuery(span).hasClass('break')) {
            span.addClass('break').before('<br>');
        }
    });
}

function showSubForm() {
    jQuery('.show-form').on('click', function (e) {
        e.preventDefault();

        jQuery(this).parents('.container').hide();
        jQuery(this).parents('.slide-scroll').find('.container.form-popup').show();
    });
}

// close modal window
function closemodal() {
    var $popup = jQuery('.window-overlay'),
            $wrap_popup = jQuery('.window'),
            $btn_close = jQuery('.close-modal'),
            $target = jQuery('.tape-block'),
            block = $target.siblings('.slide-scroll');
    $btn_close.on('click', function () {
        fadepopup($popup);
    });
    if (!$popup.css('display') == 'none') {
        
        if (!block.hasClass('open')) {
            block.find('.container').eq(0).show();
            block.slideDown();
            if (($popup.length < 2) && $wrap_popup.find('.form-success-message').hasClass('demo-version')) {
                var $demo = $wrap_popup.find('.form-success-message.demo-version');
                $demo.parents('.form-popup').show();
            }
        }
    }
    $popup.on('click', function (event) {
        if (jQuery(event.target).closest($wrap_popup).length)
            return;
        fadepopup($popup);
        event.stopPropagation();
    });
}
// fade popup
function fadepopup(popup) {
    if (jQuery('.form-popup')) {
        jQuery('.form-popup').hide();
        jQuery('.hide-form').show();
    }
//    popup.fadeOut();
    jQuery('body').removeClass('overflow-screen');
    popup.removeClass('show-modal');
}

function noscroll_map() {
    jQuery('.contact-holder')
            .click(function () { 
                jQuery(this).find('iframe').addClass('clicked');
            })
            .mouseleave(function () { 
                jQuery(this).find('iframe').removeClass('clicked');
            });
}
//initialize magnific popup
function magnific_popup() {
    $gallery = jQuery('.gallery-item');
    $gallery_video = jQuery('.popup-youtube');
    init_magnific_popup($gallery, false);
    init_magnific_popup($gallery_video, true);
}

function init_magnific_popup(magnific, video) {
    var addclass = 'mfp-zoom-out',
            arr = {};
    arr = {
        type: 'image',
        closeOnContentClick: true,
        fixedContentPos: true,
        mainClass: 'mfp-img-mobile',
        removalDelay: 500, //delay removal by X to allow out-animation
        image: {
            verticalFit: true
        },
        callbacks: {
            beforeOpen: function () {
                // just a hack that adds mfp-anim class to markup 
                this.st.image.markup = this.st.image.markup.replace('mfp-figure', 'mfp-figure mfp-with-anim');
                this.st.mainClass = this.st.el.attr('data-effect');
            },
            open: function () {
                if (!jQuery('body').hasClass(addclass)) {
                    jQuery('body').addClass(addclass);
                }
            },
        },
        midClick: true // allow opening popup on middle mouse click. Always set it to true if you don't provide alternative source.
    };
    if (video) {
        arr.type = 'iframe';
        arr.preloader = true;
        arr.disableOn = 0;
        arr.removalDelay = 100;
        arr.mainClass = 'mfp-fade';
    }
    magnific.magnificPopup(arr);
}
function owlCarousels() {
    var $owl = jQuery('.owl-carousel-gallery'),
            $owl_video = jQuery('.owl-carousel-video'),
            CONSTANTVIDEO = true;

    if($owl.length > 0){
        initializeOwlCarousel($owl, false);
    }
    
    if($owl_video.length > 0){
        initializeOwlCarousel($owl_video, CONSTANTVIDEO);
    }
    
    
}

// initialize owl carousel
function initializeOwlCarousel(owlcar, CONSTANTVIDEO) {
    var arr = {};
    arr = {
        navigation: false,
        dots: false,
        loop: true,
        smartSpeed: 450,
        navText: [ '', ''],
        autoplay: true,
        lazyLoad:true,
        margin: 20,
        autoplayTimeout: 4000,
        items: 1,
        responsive: {
            0: {
                items: 1
            },
            992: {
                items: 1
            }
        }
    };
    if (CONSTANTVIDEO === true) {
        arr.autoplay = false;
        arr.margin = 25;
        arr.items = 3;
        arr['responsive'] = {
            0: {
                items: 1
            },
            768: {
                items: 2
            },
            992: {
                items: 3
            }
        };
    }
    $owl_block = jQuery('.cycle-gallery');
    $owl_block.find('.icon-left').click(function () {
        owlcar.trigger('prev.owl.carousel');
    })
    // Go to the previous item
    $owl_block.find('.icon-right').click(function () {
        // With optional speed parameter
        // Parameters has to be in square bracket '[]'
        owlcar.trigger('next.owl.carousel', [300]);
    });
    owlcar.owlCarousel(arr);
}

function transferFromHomePage(){
    
    jQuery('#links').on('click', function (eventObject) {
        
        var linkBlock = jQuery('#software-block');
        
        if(linkBlock.hasClass('software-hidden')){
            linkBlock.removeClass('software-hidden');
            linkBlock.addClass("software-visible");
        }
        else if(linkBlock.hasClass('software-visible')){
            linkBlock.removeClass('software-visible');
            linkBlock.addClass("software-hidden");
        }
        
    });
    
}

function movePlanet(){
    
//    var mainTag = jQuery('main');
    var prormBanner = jQuery('#js-banner-objects');
    
    if(prormBanner.length > 0){

        jQuery(window).bind('scroll',function(e){

            parallaxScroll();
        });

        function parallaxScroll(){
            var scrolled = jQuery(window).scrollTop(); 
            
            var sodq = jQuery('.scrolling-object-down-quik'),
            sod = jQuery('.scrolling-object-down'),
            sot = jQuery('.scrolling-object-top'),
            soo = jQuery('.scrolling-object-opacity');
            
            if(sodq.length > 0){
                sodq.css('bottom',(0-(scrolled*.3))+'%');
            }
            
            if(sod.length > 0){
                sod.css('bottom',(0-(scrolled*.1))+'%');
            }
            
            if(sot.length > 0){
                sot.css('bottom',(0+(scrolled*.12))+'%');
            }
                        
            if(soo.length > 0){
                soo.css('opacity',(1-(scrolled/400)));
            }

        }
    
    }
}

function aboutUsMoveNumbers(){
    
    if(jQuery('.about-us-numbers-block').length > 0){
        var height = $(window).height() ;
        var block =  jQuery('.about-us-numbers-block');
        var blockPos =  block.position().top - height;
        var status = block.attr('data-status');
//    console.log('height', height);
//    console.log('blockPos', blockPos);
//        if(status === 'ready'){
            waitCounter(blockPos);
//        }
        
      
    }
    
    
}

function waitCounter(pos){
    
    jQuery(document).scroll(function(){
        var status = jQuery('.about-us-numbers-block').attr('data-status');
        
        if(jQuery(window).scrollTop() > pos && status === 'ready'){
            
            startCounter();
            jQuery('.about-us-numbers-block').attr('data-status', 'done');
        }
        
    });
    
}

function startCounter(){
    jQuery('.counter').each(function() {
        var $this = jQuery(this),
            countTo = $this.attr('data-count'),
            addSign = $this.attr('data-sign') ? $this.attr('data-sign') : false;

        jQuery({ countNum: $this.text()}).animate({
          countNum: countTo
        },

        {

          duration: 2000,
          easing:'linear',
          step: function() {
            $this.text(Math.floor(this.countNum));
          },
          complete: function() {
              
            $this.text(this.countNum + addSign);
            //alert('finished');
          }

        });  

    });
}

function initCustomerSlider(){
    
    if(jQuery('#carousel_clients').length > 0 ){
        
        jQuery('#carousel_clients').owlCarousel({
            loop:true,
            margin:0,
            navText: [ '', ''],
    //        autoplay: true,
//            animateInClass: 'flipInX',
//            animateOut: 'bounceIn',
            nav: true,
            dots: true,
            lazyLoad:true,
           
            responsive:{
                0:{
                    items:1
                },
                1024:{
                    items:2
                }
            }
        });
        
    }
    
   
    
}


function initHomepageSlider(){
    
    var homeSlider = jQuery('#homepage_slider');
    
    var interval;
    
    if(homeSlider.length > 0 ){
        
        homeSlider.owlCarousel({
            loop:true,
            margin: 20,
            navText: [ '', ''],
    //        autoplay: true,
//            animateInClass: 'flipInX',
//            animateOut: 'bounceIn',
            
            autoplay: true,
            autoplayHoverPause:false,
            autoplayTimeout: 5000,
            
            nav: true,
            dots: true,
            lazyLoad:true,
           
            responsive:{
                0:{
                    items:1
                },
                1024:{
                    items:1
                }
            }
        });
        
        jQuery('.owl-carousel').on('mouseleave',function(){
            homeSlider.trigger('play.owl.autoplay',[5000]);
        });
        jQuery('.owl-carousel').on('mouseenter',function(){
            homeSlider.trigger('stop.owl.autoplay');
        });
        
    }
    
   
    
}

function initTeamSlider(){
    
    var teamGallery = jQuery('#carouselTeam');
    
    if(teamGallery.length > 0 ){
        
        teamGallery.owlCarousel({
            loop:true,
            margin:40,
            navText: [ '', ''],
    //        autoplay: true,
//            animateInClass: 'flipInX',
//            animateOut: 'bounceIn',
            nav: true,
            dots: true,
            lazyLoad:true,
           
            responsive:{
                0:{
                    items:1
                },
                480:{
                    items:1
                },
                768:{
                    items:2
                },
                1024:{
                    items:2
                },
                1200:{
                    items:3
                }
            }
        });
        
        
        var groups = {};
        jQuery('.team-item-big').each(function() {
            var id = parseInt($(this).attr('data-group'), 10);

            if(!groups[id]) {
              groups[id] = [];
            } 

            groups[id].push( this );
        });


        jQuery.each(groups, function() {

            jQuery(this).magnificPopup({
                type: 'image',
                closeOnContentClick: false,
                closeBtnInside: false,
                midClick: true,
                callbacks: {
                    beforeOpen: function() {
                      // just a hack that adds mfp-anim class to markup 
                       this.st.image.markup = this.st.image.markup.replace('mfp-figure', 'mfp-figure mfp-with-anim');
                       this.st.mainClass = this.st.el.attr('data-effect');
                    }
                },
                image: {
//                    cursor: 'mfp-zoom-out-cur magnifier-cursor',
                    titleSrc: function(item) {
                                    return item.el.attr('title');
                          }
                },
                gallery: { 
                    enabled:true,
                    tCounter: '<span class="mfp-counter">%curr% / %total%</span>',
                    navigateByImgClick: false,
                    preload: [0,2]
                }
            });

        });
   
        
    }
    
   
    
}

function initAwardsSlider(){
    
    var awardsGallery = jQuery('#carouselAwards');
    
    if(awardsGallery.length > 0 ){
        
        awardsGallery.owlCarousel({
            loop:true,
            margin:0,
            navText: [ '', ''],
    //        autoplay: true,
//            animateInClass: 'flipInX',
//            animateOut: 'bounceIn',
            nav: true,
            dots: true,
            lazyLoad:true,
           
            responsive:{
                0:{
                    items:1
                },
               
                1024:{
                    items:1
                }
            }
        });
        
    
    }
    
   
    
}

function initVideoSlider(){
    
    if(jQuery('#video-carousel')){
        
        
        jQuery('#video-carousel').owlCarousel({
            loop:true,
            margin: 30,
            navText: [ '', ''],
    //        autoplay: true,
//            animateInClass: 'flipInX',
//            animateOut: 'bounceIn',
            nav: true,
            video:true,
//            lazyLoad:true,
            dots: true,
           
            responsive:{
                0:{
                    items:1
                },
                1024:{
                    items:3
                }
            }
        });
        
    }
 
}




function initModalWindow(){
    
    // Get the modal
    var modals = jQuery('.modal-window');
    
    modals.each(function () {
    
        
        var $this = jQuery(this);
        
        if($this.length > 0 ){
        
            var formName = $this.attr('data-aim-form-name');
        
            // Get the button that opens the modal
            var btn = jQuery('[data-form-name = ' + formName + ']');
       
            // Get the <span> element that closes the modal
            var span = $this.find('.close')[0];


            // When the user clicks the button, open the modal 
            btn.on('click', function () {
               $this.css("display", "block");
            });


            // When the user clicks on <span> (x), close the modal
            jQuery(span).on('click', function () {
                $this.css("display", "none");
            });

            // When the user clicks anywhere outside of the modal, close it
            window.onclick = function(event) {
                if (event.target.id === $this[0].id) {

                    $this.css("display", "none");
                }
            };

            // When the user clicks esc outside of the modal, close it 
            jQuery(window).bind('keyup',function(e){
                if(e.keyCode == 27){
                   $this.css("display", "none");
                }

            });
        

        
        }
        
        
    });
   
    

}

function initNewsSlider(){
    
    var newsGallery = jQuery('#newsGallery');
    
    if(newsGallery.length > 0){
        
        newsGallery.lightSlider({
            gallery:true,
            item:1,
            loop:true,
//            thumbItem: 9,
            slideMargin:0,
            enableDrag: true,
//            mode: fade,
            auto: false,
                        
            currentPagerPosition:'left',
//            onSliderLoad: function(el) {
//                el.lightGallery({
//                    selector: '#newsGallery .lslide'
//                });
//            }   
            onSliderLoad: function() {
                newsGallery.removeClass('cS-hidden');
                jQuery('.lSAction .lSPrev').html('<i class="fa fa-chevron-left" aria-hidden="true"></i>');
                jQuery('.lSAction .lSNext').html('<i class="fa fa-chevron-right" aria-hidden="true"></i>');
            }  
        });  
        
    }
    
    
        var groups = {};
        jQuery('.gallery-item-news').each(function() {
          var id = parseInt($(this).attr('data-group'), 10);

          if(!groups[id]) {
            groups[id] = [];
          } 

          groups[id].push( this );
        });


        jQuery.each(groups, function() {

            jQuery(this).magnificPopup({
                type: 'image',
                closeOnContentClick: false,
                closeBtnInside: false,
                midClick: true,
                callbacks: {
                    beforeOpen: function() {
                      // just a hack that adds mfp-anim class to markup 
                       this.st.image.markup = this.st.image.markup.replace('mfp-figure', 'mfp-figure mfp-with-anim');
                       this.st.mainClass = this.st.el.attr('data-effect');
                    }
                },
                image: {
//                    cursor: 'mfp-zoom-out-cur magnifier-cursor',
                },
                gallery: { 
                    enabled:true,
                    tCounter: '<span class="mfp-counter">%curr% / %total%</span>',
                    navigateByImgClick: false,
                    preload: [0,2]
                }
            });

        });
   
    
  
    
}


function initFixedSidebar(){
    
    var stickySidebar = jQuery('.sticky');
    var paddingMain =  parseInt(jQuery('main').css('padding-bottom'));
    var footer =  parseInt(jQuery('footer').outerHeight(true));

    if (stickySidebar.length > 0) { 
        var stickyHeight = stickySidebar.outerHeight(true) + 78,  //recaptcha height
            sidebarTop = stickySidebar.offset().top - jQuery('.breadcrumbs').outerHeight(true);
       
    }


    if(jQuery(window).width() > 1024){
        // on scroll move the sidebar
        jQuery(window).scroll(function () {

            if (stickySidebar.length > 0) { 
                var scrollTop = jQuery(window).scrollTop();
                var menuHigh = jQuery('header').outerHeight(); console.log(menuHigh);

                if (sidebarTop < scrollTop) {
                  stickySidebar.css('top', scrollTop - sidebarTop + menuHigh);

                    // stop the sticky sidebar at the footer to avoid overlapping
                    var sidebarBottom = stickySidebar.offset().top + stickyHeight,
                        stickyStop = jQuery('#content').offset().top + jQuery('#content').height();


                    if (stickyStop < sidebarBottom) {
                      var stopPosition = jQuery('#content').height() - stickyHeight - footer - paddingMain;
                      stickySidebar.css('top', stopPosition);
                    }
                }
                else {
                    stickySidebar.css('top', '0');
                } 
            }
        });
    }



    jQuery(window).resize(function () {
     
        if (stickySidebar.length > 0) { 
        var stickyHeight = stickySidebar.outerHeight(true) + 78,  //recaptcha height
            sidebarTop = stickySidebar.offset().top - jQuery('.breadcrumbs').outerHeight(true);
       
        }
        
        
            // on scroll move the sidebar
            jQuery(window).scroll(function () {
                if(jQuery(window).width() > 1024){
                    
                    if (stickySidebar.length > 0) { 
                        var scrollTop = jQuery(window).scrollTop();

                        if (sidebarTop < scrollTop) {
                          stickySidebar.css('top', scrollTop - sidebarTop);

                            // stop the sticky sidebar at the footer to avoid overlapping
                            var sidebarBottom = stickySidebar.offset().top + stickyHeight,
                                stickyStop = jQuery('#content').offset().top + jQuery('#content').height();


                            if (stickyStop < sidebarBottom) {
                              var stopPosition = jQuery('#content').height() - stickyHeight - footer - paddingMain;
                              stickySidebar.css('top', stopPosition);
                            }
                        }
                        else {
                            stickySidebar.css('top', '0');
                        } 
                    }
                    
                }else{
                    
                    stickySidebar.removeAttr("style");
                    
                }
               
            });
        
    });
    
}


function initEventSlider(){
    
    var eventCarousel = jQuery('#event-carousel');
    
    if(eventCarousel.length > 0){
            
        eventCarousel.owlCarousel({
            loop:true,
            margin:30,
            navText: [ '', ''],
            autoplay: true,
//            animateInClass: 'flipInX',
//            animateOut: 'bounceIn',
            nav: true,
            dots: true,
            lazyLoad:true,
           
            responsive:{
                0:{
                    items:1
                },
                1024:{
                    items:3
                }
            }
        });
        
    }
    
   
    
}


function initOurPartnerSlider(){
    
    var opCarousel = jQuery('#op-carousel');
    
    if(opCarousel.length > 0){
            
        opCarousel.owlCarousel({
            loop:true,
            margin:30,
            navText: [ '', ''],
            autoplay: true,
//            animateInClass: 'flipInX',
//            animateOut: 'bounceIn',
            nav: true,
            dots: true,
            lazyLoad:true,
           
            responsive:{
                0:{
                    items:1
                },
                1024:{
                    items:1
                }
            }
        });
        
    }
    
   
    
}



function randomInteger(min, max) {
    var rand = min - 0.5 + Math.random() * (max - min + 1)
    rand = Math.round(rand);
    return rand;
}


function initShiningStars(){
    
    if(jQuery(window).width() > 767 && jQuery('.js-shine-star').length > 0){ 
    
        setInterval(function () {
            jQuery('.star-1').animate({left: randomInteger(0, 99) + '%'}, {duration: 100}).fadeOut(150).delay(2000).fadeIn(300).fadeOut(150).delay(1254);
            jQuery('.star-2').animate({left: randomInteger(0, 99)+ '%'}, {duration: 200}).fadeOut(300).fadeIn(120).fadeOut(120).delay(1920);
            jQuery('.star-3').animate({left: randomInteger(0, 99)+ '%'}, {duration: 1000}).fadeOut(150).delay(1200).fadeIn(300).fadeOut(150).delay(800);
            jQuery('.star-4').animate({left: randomInteger(0, 99)+ '%'}, {duration: 700}).fadeOut(700).fadeIn(300).fadeOut(160).delay(1350);
            jQuery('.star-5').animate({left: randomInteger(0, 99)+ '%'}, {duration: 600}).fadeOut(350).delay(500).fadeIn(400).fadeOut(150).delay(800);
            jQuery('.star-6').animate({left: randomInteger(0, 99)+ '%'}, {duration: 1500}).fadeOut(450).delay(1200).fadeIn(300).fadeOut(150).delay(200);
        }, 3);
        
 
    }
    
}

 function include(url) {
        var script = document.createElement('script');
        script.src = url;
        console.log(script.src); //!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
        document.getElementsByTagName('head')[0].appendChild(script);
    }


function initFlyingBirds(){
    
    if(jQuery(window).width() > 767 && jQuery('.birds_area').length > 0){
        
        include( window.location.protocol + '//' + window.location.host + "/wp-content/themes/prorm/js/birds.js");
    
    }
    
}


function transformTextInit(){
    
    if(jQuery(window).width() > 767 && jQuery('.banner-text').length > 0){ 

    jQuery(".banner-text").each(function() {
      var text = jQuery(this).html();
      var words = text.split(" ");
      var spanSentence = "";
      for (var i = 0; i < words.length; i++) {
        spanSentence += "<span class='part_sentence'>" + words[i] + "</span> ";
      }
      jQuery(this).html(spanSentence);
    });

    jQuery(".banner-text span").each(function() {
      jQuery(this)
        .css({
          "transform": "translate(" + randomInteger(-100, 100) + "px, " + randomInteger(-100, 100) + "px)"
        });
    });

    setTimeout(function() {
      $(".banner-text span").css({
        "transform": "translate(0, 0)",
        "opacity": 1
      });
    }, 50);

//    setTimeout(function() {
//      $("p:nth-child(2) span").css({
//        "transform": "translate(0, 0)",
//        "opacity": 1
//      });
//    }, 3050);

    }
    
}





















function playCube(){
    
    
    jQuery(function () {
        jQuery('.demo').refineSlide({
        maxWidth              : 1900,      // Max slider width - should be set to image width
        transition            : 'cubeV',  // String (default 'cubeV'): Transition type ('custom', random', 'cubeH', 'cubeV', 'fade', 'sliceH', 'sliceV', 'slideH', 'slideV', 'scale', 'blockScale', 'kaleidoscope', 'fan', 'blindH', 'blindV')
        fallback3d            : 'sliceV', // String (default 'sliceV'): Fallback for browsers that support transitions, but not 3d transforms (only used if primary transition makes use of 3d-transforms)
        customTransitions     : [],       // Arr (Custom transitions wrapper)
        perspective           : 1000,     // Perspective (used for 3d transforms)
        useThumbs             : true,     // Bool (default true): <a href="http://www.jqueryscript.net/tags.php?/Navigation/">Navigation</a> type thumbnails
        useArrows             : true,    // Bool (default false): Navigation type previous and next arrows
        thumbMargin           : 3,        // Int (default 3): Percentage width of thumb margin
        autoPlay              : false,    // Int (default false): Auto-cycle slider
        delay                 : 5000,     // Int (default 5000) Time between slides in ms
        transitionDuration    : 800,      // Int (default 800): Transition length in ms
        startSlide            : 0,        // Int (default 0): First slide
        keyNav                : true,     // Bool (default true): Use left/right arrow keys to switch slide
        captionWidth          : 100,       // Int (default 50): Percentage of slide taken by caption
        arrowTemplate         : '<div class="rs-arrows"><a href="#" class="rs-prev"></a><a href="#" class="rs-next"></a></div>', // String: The markup used for arrow controls (if arrows are used). Must use classes '.rs-next' & '.rs-prev'
        onInit                : function () {}, // Func: User-defined, fires with slider initialisation
        onChange              : function () {}, // Func: User-defined, fires with transition start
        afterChange           : function () {}  // Func: User-defined, fires after transition end
        });
    });
    
}
