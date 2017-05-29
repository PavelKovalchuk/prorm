<?php

$image_path = get_template_directory_uri() . '/images/home_slider/mobile/';
$slider_general_alt = "proMX";
$s1 = 'first';
$s2 = 'second';
$s3 = 'third';

$slider_info = get_field('slider_info');
if($slider_info)
{

    $slider_1 = $slider_info[0];
    $slider_2 = $slider_info[1];
    $slider_3 = $slider_info[2];
}

$class_img_outer = 'owl-img-outer';
?>

<div class="owl-carousel owl-theme" id="carousel_mobile_hp">
    <div class="item  <?php echo $class_img_outer; ?> first-slide"> 
        
        <div class="star star-1"></div>
        <div class="star star-2"></div>
        <div class="star star-3"></div>
        <div class="star star-4"></div>
        
        <img class="owl-img"  
            srcset="<?php echo $image_path; ?>rocket-min.png  1500w,
                <?php echo $image_path; ?>rocket-1000-min.png 1000w,
                <?php echo $image_path; ?>rocket-600-min.png 600w"
            sizes="(min-width: 320px) 100vw, 100vw"
            src="<?php echo $image_path; ?>rocket-min.png" alt="<?php echo $slider_general_alt; ?>" >
        
        <div class="slider-title" >
                        
           <?php echo $slider_1["slider_title"] ?>
        </div>

        <div class="slider-text">
           <?php echo $slider_1["slider_text"] ?>
        </div>

        <div class="slider-button" >
            <a href="<?php echo $slider_1["slider_button_link"] ?>" class="slider-button-link">
                <?php echo $slider_1["slider_button_text"] ?>
            </a>   
        </div>

    </div>
    
    
    
    <div class="item  <?php echo $class_img_outer; ?> second-slide"> 

        <img class="owl-img"  
            srcset="<?php echo $image_path; ?>field-service-min.png  1500w,
                <?php echo $image_path; ?>field-service-1000-min.png 1000w,
                <?php echo $image_path; ?>field-service-600-min.png 600w"
            sizes="(min-width: 320px) 100vw, 100vw"
            src="<?php echo $image_path; ?>field-service-min.png" alt="<?php echo $slider_general_alt; ?>" >
        
        <div class="slider-title" >
                        
           <?php echo $slider_2["slider_title"] ?>
        </div>

        <div class="slider-text">
           <?php echo $slider_2["slider_text"] ?>
        </div>

        <div class="slider-button" >
            <a href="<?php echo $slider_2["slider_button_link"] ?>" class="slider-button-link">
                <?php echo $slider_2["slider_button_text"] ?>
            </a>   
        </div>

    </div>
    
    
    
    <div class="item  <?php echo $class_img_outer; ?> third-slide"> 
 
        <img class="owl-img"  
            srcset="<?php echo $image_path; ?>ufo-min.png  1500w,
                <?php echo $image_path; ?>ufo-1000-min.png 1000w,
                <?php echo $image_path; ?>ufo-600-min.png 600w"
            sizes="(min-width: 320px) 100vw, 100vw"
            src="<?php echo $image_path; ?>ufo-min.png" alt="<?php echo $slider_general_alt; ?>" >
        
        <div class="slider-title" >
                        
           <?php echo $slider_3["slider_title"] ?>
        </div>

        <div class="slider-text">
           <?php echo $slider_3["slider_text"] ?>
        </div>

        <div class="slider-button">
            <a href="<?php echo $slider_3["slider_button_link"] ?>" class="slider-button-link">
                <?php echo $slider_3["slider_button_text"] ?>
            </a>   
        </div>

    </div>
    
    
    
</div>
