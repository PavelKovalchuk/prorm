
jQuery(document).ready(function () {
    formOpenSlide();
    formAnchor();
    linkSelector();
    showSubForm();
    closemodal();
    owlCarousels();
    noscroll_map();
    magnific_popup();
    calculationPageNotFound();
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

        slide_block.addClass('open').show();
        slide_block.find('.container').hide();
        slide_form.closest('.container').show();

        jQuery('html, body').stop().animate({
            scrollTop: slide_block.position().top - header_height
        }, 1000);

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
                jQuery(this).find('iframe').addClass('clicked')
            })
            .mouseleave(function () {
                jQuery(this).find('iframe').removeClass('clicked')
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

    initializeOwlCarousel($owl, false);
    initializeOwlCarousel($owl_video, CONSTANTVIDEO);
}

// initialize owl carousel
function initializeOwlCarousel(owlcar, CONSTANTVIDEO) {
    var arr = {};
    arr = {
        navigation: false,
        dots: false,
        loop: true,
        smartSpeed: 450,
        autoplay: true,
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