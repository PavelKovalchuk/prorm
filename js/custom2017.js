
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
    
  
    
//    transferFromHomePage();
//    movePlanet();
    initAboutUsMoveNumbers();
    initCustomerSlider();
    initVideoSlider();
    initModalWindow();
    initNewsSlider();
    initFixedSidebar();
    initTeamSlider();
    initAwardsSlider();
    initHomepageSlider();
    
    initPageSideNav();
    
//    initAnimatedPageSideNav();
    
    initGraphES();
    initGraphFS();
    initUsersReport();
    
//    initWowJS();
//    initShiningStars();
//    
//    initFlyingBirds();
//    transformTextInit();
   
    initEventSlider();
    initOurPartnerSlider();
    
    initMobileSlider();
    
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
    
    if($gallery.length > 0 || $gallery_video.length > 0){
        init_magnific_popup($gallery, false);
        init_magnific_popup($gallery_video, true);
    }
    
    
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

function initAboutUsMoveNumbers(){
    
    if(jQuery('.about-us-numbers-block').length > 0){
        var height = jQuery(window).height(),
        block =  jQuery('.about-us-numbers-block'),
        blockPos =  block.position().top - height,
        status = block.attr('data-status');

        waitCounter(blockPos, block, status);
     
    }
    
    
}

function waitCounter(pos, block, status){
    
    jQuery(document).scroll(function(){
       
        if(jQuery(window).scrollTop() > pos && status === 'ready'){
            
            startCounter();
            block.attr('data-status', 'done');
        }
        
    });
    
}

function startCounter(){
    jQuery('.counter').each(function() {
        var $this = jQuery(this);
        if($this.attr('data-complete') == 'finished'){
            return;
        } 
        
        var countTo = $this.attr('data-count'),
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
            $this.attr('data-complete', 'finished');
            //alert('finished');
          }

        });  

    });
}

function initCustomerSlider(){
    
    var carouselClients = jQuery('#carousel_clients');
    
    if(carouselClients.length > 0 ){
        
        carouselClients.owlCarousel({
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
                640:{
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
    
    var videoCarousel = jQuery('#video-carousel');
    
    if(videoCarousel.length > 0){
        
        
        videoCarousel.owlCarousel({
            loop:true,
            margin: 30,
            navText: [ '', ''],
            autoplay: true,
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

function initWowJS(){
    
            
        var wowBlock = jQuery('.js-wow');
    
        if(wowBlock.length > 0){

            wow = new WOW(
                {
                    boxClass:     'wow',      // animated element css class (default is wow)
                    animateClass: 'animated', // animation css class (default is animated)
                    offset:       0,          // distance to the element when triggering the animation (default is 0)
                    mobile:       true,       // trigger animations on mobile devices (default is true)
                    live:         true,       // act on asynchronously loaded content (default is true)
    //                callback:     function(box) {
    //                  // the callback is fired every time an animation is started
    //                  // the argument that is passed in is the DOM node being animated
    //                },
                    scrollContainer: null // optional scroll container selector, otherwise use window
                }
            );
            wow.init();

        }
   
    
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

function runMobileSlider(slider){
    
    slider.addClass('owl-theme owl-carousel ');
    
    slider.owlCarousel({
            loop:false,
            margin:0,
            navText: [ '', ''],
            autoplay: true,
            nav: true,
            dots: false,
            lazyLoad:true,
            rewind:true,
            autoplayTimeout: 1500,
           
            responsive:{
                0:{
                    items:1
                },
                768:{
                    items:1
                }
            }
    });
    
}

function sweepMobileSlider(slider){
    
    if(slider.hasClass('owl-carousel')){
        
        slider.removeClass('owl-theme owl-carousel ');
        slider.trigger('destroy.owl.carousel');
        slider.on('resized.owl.carousel', function(event) {
            
            if(jQuery(window).width() > 767){
                console.log('sweepMobileSlider');
                slider.find('.owl-stage').removeAttr("style");
            }
        });
        
        slider.find('.owl-stage').removeAttr("style");
    }
    
    
}


function initMobileSlider(){
    
     
    var slider = jQuery('.owl-mobile-carousel');
    
    if(slider.length > 0){ 
        
        if(jQuery(window).width() > 767){
                
           sweepMobileSlider(slider);

        }else{
            
            runMobileSlider(slider);

        }
        
        jQuery(window).resize(function() {
            
            if(jQuery(window).width() > 767){
                
               sweepMobileSlider(slider);
               
            }else{
                console.log('runMobileSlider 2');
                runMobileSlider(slider);
                
            }
            
        });
        
    }

}

//Displays on the Enterprise Solution page/ Animataed graph
function initGraphES(){
        
    var block = jQuery('.js-graph-es');

    if(block.length > 0){
        
        var circle_1 = jQuery('.circle-1'),
        circle_2 = jQuery('.circle-2'),
        half_circle = jQuery('.half-circle'),
        text_1 = jQuery('.graph-item-text-outer.gi-1'),
        text_2 = jQuery('.graph-item-text-outer.gi-2'),
        text_3 = jQuery('.graph-item-text-outer.gi-3'),
        outer = jQuery('.graph-img-inner');
             
        if(circle_1.length > 0 && circle_2.length > 0 && half_circle.length > 0){
            
           
            circle_1.on('mouseenter', function(){
                
                circle_2.removeClass('circle-hover');
                half_circle.removeClass('half-moved');
                circle_1.addClass('circle-hover');
                
                text_2.removeClass('visible');
                text_3.removeClass('visible');

                                
            });
            
            circle_1.on('click', function(){
                                
                text_1.addClass('visible');
                
                text_2.removeClass('visible');
                text_3.removeClass('visible');
                
                outer.removeClass('moved-left');
                outer.addClass('moved-right');
                
            });
           
        
            circle_2.on('mouseenter', function(){
                
                circle_1.removeClass('circle-hover');
                circle_2.addClass('circle-hover');
                half_circle.addClass('half-moved');
                
                text_1.removeClass('visible');
                
                
            });
            
            circle_2.on('click', function(){
                
                text_1.removeClass('visible');
                text_2.addClass('visible');
                text_3.addClass('visible');
                
                outer.removeClass('moved-right');
                outer.addClass('moved-left');
                
            });
     
            outer.parent().on('mouseleave', function(){
                
                outer.removeClass('moved-left');
                outer.removeClass('moved-right');
                
                circle_2.removeClass('circle-hover');
                
                text_1.removeClass('visible');
                text_2.removeClass('visible');
                text_3.removeClass('visible');
                
                half_circle.removeClass('half-moved');
                
            });
        
        }

    }
        
    
       
}


//Displays on the Field Service Automatization page/ Animataed graph
function initGraphFS(){
        
    var block = jQuery('.js-graph-fs');

    if(block.length > 0){
        
        var circle = jQuery('.circle-fsa'),
            rectOuter = jQuery('.rect-outer'),
            canvasHTML = jQuery('#canvas-fsa'),
            rect = jQuery('.rect'),
            rectText = jQuery('.rect-descr'),
            canvas = document.getElementById('canvas-fsa'),
            mistakes = [],
            contextData = [],
            rectangleActive = 'passive';
        
        var addMistake = function (mistake){
            
            if(mistake){
                mistakes.push(mistake);
                return true;
            }
            return false;
        };
        
        
        if(!canvas){
            addMistake('NO canvas with ID canvas-fsa');
            checkMistakes();
            return;
            
        }
            //For Canvas animation

        var finish = 100,
            x = canvas.width / 2,
            y = canvas.height / 2,
            radius = 150,
            counterClockwise = false,
            lineWidth = 90,
            speed = 4,
            speedBack = 6,
            maxWidth = 100,
            lineHeight = 14;
            
       
       // Enables browser-decided smooth animation (60fps)
        var raf =
            window.requestAnimationFrame ||
            window.mozRequestAnimationFrame ||
            window.webkitRequestAnimationFrame ||
            window.msRequestAnimationFrame;
            window.requestAnimationFrame = raf;
            
        
        
        var ctx_1 = new Object();
            ctx_1.context = canvas.getContext('2d');
            ctx_1.startAngle = 1.25 * Math.PI;
            ctx_1.endAngle = 1.5 * Math.PI;
            ctx_1.color = '#351417';
            ctx_1.curr = 0;
            ctx_1.top = 0;
            ctx_1.left = 100;
            ctx_1.text = "Optimized scheduling";
            ctx_1.textX = 140;
            ctx_1.textY = 60;

        var ctx_2 = new Object();
            ctx_2.context = canvas.getContext('2d');
            ctx_2.startAngle = 1.5 * Math.PI;
            ctx_2.endAngle = 1.75 * Math.PI;
            ctx_2.color = '#491423';
            ctx_2.curr = 0;
            ctx_2.top = 105;
            ctx_2.left = 100;
            ctx_2.text = "Contract management";
            ctx_2.textX = 255;
            ctx_2.textY = 55;

        var ctx_3 = new Object();
            ctx_3.context = canvas.getContext('2d');
            ctx_3.startAngle = 1.75 * Math.PI;
            ctx_3.endAngle = 2.00 * Math.PI;
            ctx_3.color = '#72122f';
            ctx_3.curr = 0;
            ctx_3.top = 200;
            ctx_3.left = 200;
            ctx_3.text = "Inventory management";
            ctx_3.textX = 340;
            ctx_3.textY = 140;

        var ctx_4 = new Object();
            ctx_4.context = canvas.getContext('2d');
            ctx_4.startAngle = 2.00 * Math.PI;
            ctx_4.endAngle = 2.25 * Math.PI;
            ctx_4.color = '#99183e';
            ctx_4.curr = 0;
            ctx_4.top = 300;
            ctx_4.left = 300;
            ctx_4.text = "Mobile productivity";
            ctx_4.textX = 335;
            ctx_4.textY = 250;

        var ctx_5 = new Object();
            ctx_5.context = canvas.getContext('2d');
            ctx_5.startAngle = 2.25 * Math.PI;
            ctx_5.endAngle = 2.50 * Math.PI;
            ctx_5.color = '#ac4665';
            ctx_5.curr = 0;
            ctx_5.top = 400;
            ctx_5.left = 400;
            ctx_5.text = "Connected Field Service";
            ctx_5.textX = 260;
            ctx_5.textY = 330;


        var ctx_6 = new Object();
            ctx_6.context = canvas.getContext('2d');
            ctx_6.startAngle = 2.50 * Math.PI;
            ctx_6.endAngle = 2.75 * Math.PI;
            ctx_6.color = '#c2748c';
            ctx_6.curr = 0;
            ctx_6.top = 500;
            ctx_6.left = 300;
            ctx_6.text = "Customer communications";
            ctx_6.textX = 135;
            ctx_6.textY = 330;


        
    
        contextData.push(ctx_1);
        contextData.push(ctx_2);
        contextData.push(ctx_3);
        contextData.push(ctx_4);
        contextData.push(ctx_5);
        contextData.push(ctx_6);
         

        function checkMistakes(){
            
            
            if(!rect.length > 0){
                mistakes.push('NO rectangles');
                
            }

            if(!contextData.length > 0){
                mistakes.push('NO contextData');
            }
            
            if(!canvasHTML.length > 0){
                mistakes.push('NO canvasHTML');
            }
            
            if(!circle.length > 0){
                mistakes.push('NO circle');
            }
            
            if(!rectOuter.length > 0){
                mistakes.push('NO rectOuter');
            }
            
            
            if(mistakes.length > 0){
                
                console.log('____________Mistakes start_______________________');
                
                mistakes.forEach(function(item, index, array) {

                    console.log('WARNING! function initGraphFS() has problem: ', item);

                });
                
                console.log('____________Mistakes end_______________________');
                mistakes.splice(0,mistakes.length+1);
                return;
            }
           
        };
        
        
        var drawText = function(item, maxWidth, lineHeight) {
            var words = item.text.split(' '),
            line = '',
            x = item.textX,
            y = item.textY;

            for(var n = 0; n < words.length; n++) {
                var testLine = line + words[n] + ' ';
                var metrics = item.context.measureText(testLine);
                var testWidth = metrics.width;

                if (testWidth > maxWidth && n > 0) {
                    
                  item.context.fillText(line, x, y);
                  line = words[n] + ' ';
                  y += lineHeight;
                  
                }
                else {
                  line = testLine;
                }
            }
            item.context.fillText(line, x, y);
        };


        var createContext = function( data) {
                
                if(!data.length > 0 ){
                    addMistake('NO data passed to the function createContext');
                    checkMistakes();
                }
                
                console.log('createContext works', data);
                
                data.forEach(function(item, index, array) {
   
                    item.context.beginPath();
                    
                    //Shadow border
//                        item.context.shadowBlur = 3;
//                        item.context.shadowOffsetX= 1;
//                        item.context.shadowOffsetY= 0;
//                        item.context.shadowColor = "rgba(0,0,0,0.15)";
                
                    item.context.arc(x, y, radius, item.startAngle, item.endAngle, counterClockwise);
                    item.context.lineWidth = lineWidth;
                    item.context.strokeStyle = item.color;
                    item.context.stroke(); 
                    
                    //Drawing text
                    item.context.fillStyle = '#ffffff';
                    item.context.font = "15px Arial";
                    item.context.textAlign="center"; 
//                    item.context.fillText(item.text, item.textX, item.textY, 90);
                    
                    drawText(item, maxWidth, lineHeight);
                    

                });

        };
        
        var cutCircle = function(context, x, y, radius){
            context.globalCompositeOperation = 'destination-out';
            context.clearRect(x, y, canvas.width, canvas.height);
            context.arc(x, y, radius, 0, Math.PI*2, false);
            context.fill();


            console.log('cutCircle');
        };

       // Animate Circle function

        var animateSegment  = function(draw_to, item, customCurr ) {
//                console.log('animateSegment ', draw_to);
                item.context.beginPath();
                
                item.context.arc(x, y, radius, item.endAngle, draw_to, true);
                //    https://developer.mozilla.org/ru/docs/Web/API/CanvasRenderingContext2D/globalCompositeOperation
                if(item.context.globalCompositeOperation !== 'destination-out'){
                    item.context.globalCompositeOperation = 'destination-out';
                }
                
                if(item.context.strokeStyle === item.color){
                    item.context.strokeStyle = '#ffffff';
                }

                
//                    context.shadowBlur = 0;
//                    context.shadowOffsetX= 0;
//                    context.shadowColor = "#ffffff";
            

                item.context.stroke();
                if ( draw_to === undefined) {
                    customCurr = 0;
                }else{
                    customCurr = customCurr + speed;
                }


                var path =  item.endAngle - (item.endAngle - item.startAngle) * (customCurr) / finish;

                if ( customCurr < finish + 1 ) {
//console.log('customCurr ', customCurr);
                    requestAnimationFrame(function () {

                        animateSegment(path, item, customCurr);

                    });

                } 
                if ( customCurr > finish) {
                    item.context.closePath();
                }
              
        };
        
        
        var animateSegmentBack = function(draw_to, item, customCurr) {
//            
                // Start over
                item.context.beginPath();
    
                item.context.arc(x, y, radius, item.startAngle, draw_to, false);
                
                if(item.context.globalCompositeOperation !== 'source-over'){
                    item.context.globalCompositeOperation = 'source-over';
                }
                
                if(item.context.strokeStyle !== item.color){
                    item.context.strokeStyle = item.color;
                }
                
//                item.context.strokeStyle = item.color;
          
                item.context.stroke();
                
                if ( draw_to === undefined) {
                    customCurr = 0;
                    
                }else{
                    customCurr = customCurr + speedBack;
                }             
                
      
                var path =  item.startAngle - (item.startAngle - item.endAngle) * (customCurr) / finish;
             
                if ( customCurr < finish + speedBack ) {

                    requestAnimationFrame(function () {
        
                        animateSegmentBack(path, item, customCurr);

                    });

                } else if(customCurr > finish ){
                    
                    item.context.beginPath();
                  
                    item.context.fillStyle = '#ffffff';
                    item.context.font = "15px Arial";
                    item.context.textAlign="center"; 
                    drawText(item, maxWidth, lineHeight);
//                    console.log('drawText b');       
                    item.context.closePath(); 
                } 
                
               

        };
      
      
        
        var animateRectangles = function(rect, visible){
            
            if(rect.length > 0){
                
                if(visible === true){
                    
                    rect.each(function(indx, element){
                       
                        jQuery(this).addClass('visible');

                        jQuery(this).addClass('rect-clicked');

                    });
                    
                }else{
                    
                    rect.each(function(indx, element){
                       
                        jQuery(this).removeClass('visible');

                        jQuery(this).removeClass('rect-clicked');

                    });
                    
                }
                
            }
        
        };
        
        
        checkMistakes();  
        
        //Create context on load
        createContext(contextData);
//        debugger;
        
          
        
        //Create event on click for rectangles
        rect.each(function(indx, element){
                       
            jQuery(this).on('click', function(){
                
                var elementId = jQuery(this).attr('data-title-id'),
                    element = jQuery(rectText).find('[data-text-id=' + elementId + ']'),
                    elementParent = element.parent(),
                    showedElement = jQuery(rectOuter).find('.shown');
                
                if(!element.length > 0){
                    addMistake('Cannot find element with attr data-text-id');
                }
                
                if(!showedElement.length > 0 && rectangleActive !== 'passive'){
                    addMistake('Cannot find showedElement with class .rect-descr and class .shown');
                }
                
                
                
                if(rectOuter.hasClass('rect-visible')){
                    rectangleActive = elementId;
                
                    showedElement.removeClass('shown');

                    elementParent.addClass('shown');

                    checkMistakes(); 
                }
               
                
            });

        });
        
    
          
           
        circle.on('mouseenter', function(){

            circle.addClass('circle-hover');

            canvasHTML.addClass('canvas-hover');


        });

        circle.on('mouseleave', function(){

            circle.removeClass('circle-hover');

            canvasHTML.removeClass('canvas-hover');

        });


        circle.on('click', function(){


            if( canvasHTML.hasClass('canvas-clicked') && circle.hasClass('moved-left') && rectOuter.hasClass('rect-visible')){
                
//                console.log('___________BAck animateSegment_____________');

                
                contextData.forEach(function(item, index, array) {

                    animateSegmentBack(undefined,  item, item.curr);   

                });
                
                animateRectangles(rect, false);

                canvasHTML.removeClass('canvas-clicked');

                circle.removeClass('moved-left');

                rectOuter.removeClass('rect-visible');

                rectOuter.find('.shown').removeClass('shown');



            }else{
//                console.log('___________animateSegment_____________');
                
                contextData.forEach(function(item, index, array) {
                
                    animateSegment(undefined, item, item.curr);   

                });
                canvasHTML.addClass('canvas-clicked');

                canvasHTML.addClass('js-canvas-clicked');

                circle.addClass('moved-left');

                rectOuter.addClass('rect-visible');

                animateRectangles(rect, true);

            }

       

        }); 
       
    }
        
    
       
}

function initUsersReport(){
    
    var block =  jQuery('.js-circle-animated');
    
    if(block.length > 0){
        var height = jQuery(window).height(),
        blockPos =  block.position().top - height,
        status = block.attr('data-status');

        waitUsersReport(blockPos, block, status);

    }
    
    
}

function waitUsersReport(pos, block, status){
    
    jQuery(document).scroll(function(){
   
        if(jQuery(window).scrollTop() > pos && status === 'ready'){
            
            startUsersReport();
            block.attr('data-status', 'done');
        }
        
        
    });
    
}

function startUsersReport(){
    jQuery('.js-circle').each(function() {
        jQuery( this ).addClass( "shown colored" );
    });
}


function initPageSideNav(){
    
    var block =  jQuery('#pageSideNav'),
        links = jQuery('.js-side-nav-link'),
        menuLinks = jQuery('.js-side-nav-link');
    
    
    
    var getTargetTop = function (elem){
	var id = elem.attr("href");
	var offset = 60;
	return jQuery(id).offset().top - offset;
    };
    
    var initSections = function (){
        var i;
        
        for (i = 0; i < links.length; i++) {
            var link = jQuery(links[i]);
            
            if(link.hasClass("red-bg-class")){
                var id = link.attr("href");
                jQuery(id).addClass("red-bg-section-class");
            }
        }
        
    };

    initSections();

    var isSelected = function(scrolledTo){

        var threshold = 50;
        var i;
        var k;
        var activeLink;

        for (i = 0; i < links.length; i++) {
                var link = jQuery(links[i]);
                var target = getTargetTop(link);
          
                                
//                                links.each(function(indx, element){
//                                    if(jQuery(element).hasClass('active')){
//                                       activeLink = element;  
//                                    }
//                                    
//                                });
//
//                                
//                                if(activeLink){
//                                    var linkPosition = link.offset().top;
//                                    var activeSection = jQuery(activeLink).attr("href");
//                                    
//                                    jQuery('.activeSection').removeClass("activeSection");
//                                    jQuery(activeSection).addClass("activeSection");
//
//                                    if(jQuery(activeSection).hasClass("red-bg-section-class")){
//                                        var activeSectionFrom = jQuery(activeSection).offset().top;
//                                        var activeSectionTo = activeSectionFrom + jQuery(activeSection).outerHeight();
//                                                                            
//                                        for (k = 0; k < links.length; k++) {
//                                            if(linkPosition + 15 > activeSectionFrom && linkPosition + 15 < activeSectionTo){
//                                                link.addClass("white-color");
//                                            }else{
//                                                link.removeClass("white-color");
//                                            }
//                                        }
//                                    }else{
//                                    
//                                    }
//                                }
                                
                
                if (scrolledTo > target - threshold && scrolledTo < target + threshold) {
                        
                        links.removeClass("active");
                        link.addClass("active");
                      
                }
                
        }

    };
   
    
    
    
    
    if(block.length > 0 && links.length > 0){
        
        initPageSideNavLinks(block, false);
        
        jQuery(window).scroll(function(e){
            
            isSelected(jQuery(window).scrollTop());
        });
       

    }
    
}


function initAnimatedPageSideNav(){
    
     var block =  jQuery('#pageSideNav'),
    hamburger = jQuery('#hamburger'),
    shadow = jQuery('.js-shadow-side-nav'),
    footer = jQuery('footer');
//    banner = jQuery('.plain-banner-block');        
    
    var doJob = function(){
        
        if(!footer.length  || !block.length || !shadow.length){
            return ;
        }
        
        footer.toggleClass("moved");
        block.toggleClass("open");
        shadow.toggleClass("open");
    };
    
    
    if(block.length > 0){
        
        //prepare footer to move
        footer.toggleClass("ready-to-move");
//        banner.toggleClass("ready-to-move");
        initPageSideNavLinks(block, shadow);
        
        hamburger.click(function(e){
            e.preventDefault();
            
            doJob();
            
        });
        
        shadow.click(function(e){
            
            doJob();
            
        });
        
        jQuery(document).keyup(function(e) {
                if (e.keyCode == 27 && shadow.hasClass("open")) { // escape key maps to keycode `27`
                   doJob();
               }
        });

    }
    
}


function smoothScrollTo(target, block, shadow) {
    target = target.length ? target : jQuery('[name=' + this.hash.slice(1) +']');
    
    if (target.length) {

        jQuery('body,html').animate({
          scrollTop: (target.offset().top + parseInt(target.css('paddingTop')) - 110)
        }, {
            duration: 1000,
            complete: function () {
                if(jQuery(block).hasClass("open")){
                    
                    jQuery(block).removeClass("open");
                }
                
                if(shadow !== false){
                    if(jQuery(shadow).hasClass("open")){
                    
                        jQuery(shadow).removeClass("open");
                    }
                }
            
            }
        });
    }
}

function initPageSideNavLinks(block, shadow){
    
//    setTimeout(function() {
//        if (location.hash) {
//            /* we need to scroll to the top of the window first, 
//             * because the browser will always jump to the anchor first 
//             * before JavaScript is ready, thanks Stack Overflow: http://stackoverflow.com/a/3659116 */
//            window.scrollTo(0, 0);
//            target = location.hash.split('#');
//            smoothScrollTo(jQuery('#'+target[1]), block, shadow);
//        }
//    }, 1);
    
    
    // taken from: https://css-tricks.com/snippets/jquery/smooth-scrolling/
    var links = jQuery('.js-side-nav-link');

    
    links.each(function(indx, element){
        
        
        jQuery(this).click(function() {

            if( !(jQuery(this).attr('href').length > 1 ) ){
               
                return;
            }

            if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
                                               
                jQuery(this).siblings('.active').removeClass('active');
               
                jQuery(this).addClass('active');
                
                smoothScrollTo(jQuery(this.hash), block, shadow);
                                                
                return false;
            }
            
        });
        
    });
    
    
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
