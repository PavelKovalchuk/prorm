
jQuery(document).ready(function () {
    
    jQuery('.slider').fractionSlider({
	'slideTransition' : 'fade', // default slide transition
        'slideTransitionSpeed' : 500, // default slide transition time
        'slideEndAnimation' : true, // if set true, objects will transition out before next slide moves in      
        'position' : '0,0', // default position | should never be used
        'transitionIn' : 'left', // default in - transition
        'transitionOut' : 'left', // default out - transition
        'fullWidth' : true, // transition over the full width of the window
        'delay' : 100, // default delay for elements
        'timeout' : 1500, // default timeout before switching slides
        'speedIn' : 2000, // default in - transition speed
        'speedOut' : 2000, // default out - transition speed
        'easeIn' : 'easeOutExpo', // default easing in
        'easeOut' : 'easeInOutCirc', // default easing out

        'controls' : false, // controls on/off
        'pager' : false, // pager inside of the slider on/off OR $('someselector') for a pager outside of the slider
        'autoChange' : false, // auto change slides
        'pauseOnHover' : false, // Pauses slider on hover (current step will still be completed)

        'backgroundAnimation' : true, // background animation
        'backgroundElement' : '.slide', // element to animate | default fractionSlider element
//        'backgroundElement' : '.bg-slider-1', // element to animate | default fractionSlider element
        'backgroundX' : 0, // background animation x distance
        'backgroundY' : 0, // background animation y distance
        'backgroundSpeed' : 100, // default background animation speed
        'backgroundEase' : 'easeOutExpo', // default background animation easing

        'responsive' : true, // responsive slider (see below for some implementation tipps)
        'increase' : true, // if set, slider is allowed to get bigger than basic dimensions
        'dimensions' : '2500, 608', 
        /* IMPORTANT:
        if you use the responsive option, you have to set dimensions to the origin (width,height) in px
        you use for data-position,heights of elements, etc. */

        'startCallback' : null, // callbacks, see below for more information on callbacks
        'startNextSlideCallback' : null,
        'stopCallback' : null,
        'pauseCallback' : null,
        'resumeCallback' : null,
        'nextSlideCallback' : null,
        'prevSlideCallback' : null,
        'pagerCallback' : null
    });
    
    
    
    
    
    jQuery(window).bind('scroll',function(e){
       
        parallaxScroll();
    });

    function parallaxScroll(){
        var scrolled = jQuery(window).scrollTop();
        jQuery('.stars-slider').css('top',(0-(scrolled*.55))+'px');
        jQuery('.earth-slider').css('top',(0+(scrolled*.75))+'px');
        
        
   
    }
    
  
});

jQuery(function () {
    
    if(jQuery(window).width() > 767){ 
    
        setInterval(function () {
            jQuery('.star-1').fadeOut(150).delay(2000).fadeIn(300).fadeOut(150).delay(1254);
            jQuery('.star-2').fadeOut(300).fadeIn(120).fadeOut(120).delay(1920);
            jQuery('.star-3').fadeOut(150).delay(1200).fadeIn(300).fadeOut(150).delay(800);
            jQuery('.star-4').fadeOut(700).fadeIn(300).fadeOut(160).delay(1350);
        }, 1);
        
 
        setInterval(function () {
            jQuery('.second-slide').toggleClass("circle-shine");
        }, 3000);

        
    }
    
    
//    jQuery('.prev').on('click', function(){
//      
//        alert('Вы нажали на элемент с текстом '); 
//    });
    
});
