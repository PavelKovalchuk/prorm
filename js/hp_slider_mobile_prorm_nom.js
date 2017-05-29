
jQuery(document).ready(function () {
    
    jQuery('#carousel_mobile_hp').owlCarousel({
        loop:true,
        margin:0,
        navText: [ '', ''],
//        autoplay: true,
        nav:true,
        lazyLoad:true,
        responsive:{
            0:{
                items:1
            },
            1000:{
                items:1
            }
        }
    });
    
    var heightParent = jQuery('#carousel_mobile_hp').height();
    jQuery('.owl-prev').height(heightParent);
    jQuery('.owl-next').height(heightParent);
    
    jQuery(window).resize(function() {
        
        setTimeout(function () {
            var heightP = jQuery('#carousel_mobile_hp').height();
            
            jQuery('.owl-prev').height(heightP);
            jQuery('.owl-next').height(heightP);
        }, 500);
        
    });

    setInterval(function () {
            jQuery('.star-1').fadeOut(150).delay(2000).fadeIn(300).fadeOut(150).delay(1254);
            jQuery('.star-2').fadeOut(300).fadeIn(120).fadeOut(120).delay(1920);
            jQuery('.star-3').fadeOut(150).delay(1200).fadeIn(300).fadeOut(150).delay(800);
            jQuery('.star-4').fadeOut(700).fadeIn(300).fadeOut(160).delay(1350);
    }, 1);
        
 
//    setInterval(function () {
//        jQuery('.second-slide').toggleClass("circle-shine");
//    }, 3000);
    
  
});

