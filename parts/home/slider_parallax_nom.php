<?php
$image_path = get_template_directory_uri() . '/images/home_slider/';
$slider_general_alt = "proMX";
$s1 = 'first';
$s2 = 'second';
$s3 = 'third';


                           
$planet_width = '1900';
$planet_height = '608';
$planet_data_position = '0,300';
$planet_data_in = 'bottomLeft';
$planet_data_delay = '1000';
$planet_data_out = 'bottomLeft';
$planet_data_ease_in = 'easeOutQuart'; //'easeOutQuart';
$planet_data_ease_out = 'easeInExpo';
$planet_data_time = '3000';

$planet_data = ' width="' . $planet_width . '" height="' . $planet_height . '" data-time="' . $planet_data_time . '" data-position="' . $planet_data_position . '" data-in="' . $planet_data_in . 
                '" data-delay="' . $planet_data_delay . '" data-out="' . $planet_data_out . '" data-ease-in="' . $planet_data_ease_in . '" data-ease-out="' .
                $planet_data_ease_out . '"';


$slider_1 = array(
    'slider_title' => 'proRM Fast Start',
    'slider_text' => 'Project and resource management solution for Microsoft Dynamics 365'
);


$slider_title_pos = '100,150';
$slider_text_pos = '200,150';
$slider_button_pos = '430,150';

$slider_title_width = '1000';
$slider_text_width = '1000';
$slider_button_width = '1000';

$slider_title_height = '400';
$slider_text_height = '200';
$slider_button_height = '100';

$slider_title_data_in = 'bottom';
$slider_text_data_in = 'bottom';
$slider_button_data_in = 'bottom';

$slider_title_data_delay = '1000';
$slider_text_data_delay = '1300';
$slider_button_data_delay = '1600';

$slider_title_data_out = 'fade';
$slider_text_data_out = 'fade';
$slider_button_data_out = 'fade';

$slider_title_data_ease_in = 'easeOutQuart';
$slider_text_data_ease_in = 'easeOutQuart';
$slider_button_data_ease_in = 'easeOutQuart';

$slider_title_data_ease_out = 'easeOutQuart';
$slider_text_data_ease_out = 'easeOutQuart';
$slider_button_data_ease_out = 'easeOutQuart';


                         
                        
$slider_title_data = ' width="' . $slider_title_width . '" height="' . $slider_title_height . '" data-position="' . $slider_title_pos . '" data-in="' . $slider_title_data_in . 
                '" data-delay="' . $slider_title_data_delay . '" data-out="' . $slider_title_data_out . '" data-ease-in="' . $slider_title_data_ease_in . '" data-ease-out="' .
                $slider_title_data_ease_out . '"';

$slider_text_data = ' width="' . $slider_text_width . '" height="' . $slider_text_height . '" data-position="' . $slider_text_pos . '" data-in="' . $slider_text_data_in . 
                '" data-delay="' . $slider_text_data_delay . '" data-out="' . $slider_text_data_out . '" data-ease-in="' . $slider_text_data_ease_in . '" data-ease-out="' .
                $slider_text_data_ease_out . '"';



?>
<div class="slider-wrapper">
    <div class="responisve-container">
        <div class="slider">
            
            <div class="fs_loader"></div>
            
            <div class="slide <?php echo $s1 . '-slide'; ?>" data-in='fade'>
                    
                    <img
                            srcset="<?php echo $image_path . $s1; ?>/rock-bg.png  2500w,
                                <?php echo $image_path . $s1; ?>/rock-bg-1800-min.png 1800w,
                                <?php echo $image_path . $s1; ?>/rock-bg-1500-min.png  1500w,
                                <?php echo $image_path . $s1; ?>/rock-bg-1100-min.png 1100w"
                            sizes="(min-width: 768px) 100vw, 100vw"
                            src="<?php echo $image_path . $s1; ?>/rock-bg.png" 
                         
                            alt="<?php echo $slider_general_alt; ?>"
                            width="2500" height="608"
                            class="bg-slider bg-slider-1" data-fixed />
                    
                
                    
                    <div class="star star-1" data-fixed></div>
                    <div class="star star-2" data-fixed></div>
                    <div class="star star-3" data-fixed></div>
                    <div class="star star-4" data-fixed></div>
                    
                    <img
                            srcset="<?php echo $image_path . $s1; ?>/rock-stars.png  2500w,
                                <?php echo $image_path . $s1; ?>/rock-stars-1700-min.png 1800w,
                                <?php echo $image_path . $s1; ?>/rock-stars-1500-min.png  1500w,
                                <?php echo $image_path . $s1; ?>/rock-stars-1100-min.png 1100w"
                            sizes="(min-width: 768px) 100vw, 100vw"
                            src="<?php echo $image_path . $s1; ?>/rock-stars.png" alt="<?php echo $slider_general_alt; ?>"
                            width="2500" height="608" 
                            class="stars-slider stars-slider-1"
                            data-position="0,0" data-in="bottomLeft" data-out="bottomLeft" data-delay="0" >
                    
                    
                    <img    
                            srcset="<?php echo $image_path . $s1; ?>/rock-stars-front.png  2500w,
                                <?php echo $image_path . $s1; ?>/rock-stars-front-100-min.png 1800w,
                                <?php echo $image_path . $s1; ?>/rock-stars-front-80-min.png 1500w"
                            sizes="(min-width: 768px) 100vw, 100vw"
                            src="<?php echo $image_path . $s1; ?>/rock-stars-front.png" alt="<?php echo $slider_general_alt; ?>"
                            width="149" height="376"
                            class="stars-rocket-slider stars-rocket-slider-1"
                            data-position="200,1850" data-in="bottomLeft" data-delay="200" data-out="bottomLeft" data-ease-in="easeOutQuart" data-ease-out="easeInSine">
                    
                    
                    
                   <img    
                        srcset="<?php echo $image_path . $s1; ?>/rocket.png  2500w,
                            <?php echo $image_path . $s1; ?>/rocket-370-min.png 1800w,
                            <?php echo $image_path . $s1; ?>/rocket-240-min.png 1500w"
                            sizes="(min-width: 768px) 100vw, 100vw"
                        src="<?php echo $image_path . $s1; ?>/rocket.png" alt="<?php echo $slider_general_alt; ?>"
                            width="532" height="258"
                            class="rocket-slider rocket-slider-1"
                            data-position="270,1620" data-time="4000" data-in="bottomRight" data-delay="400" data-out="topRight" data-ease-in="easeOutCubic" data-ease-out="easeOutExpo">
            
                   
                   <img    
                        srcset="<?php echo $image_path . $s1; ?>/rock-planet.png  2500w,
                            <?php echo $image_path . $s1; ?>/rock-planet-1700-min.png 1800w,
                            <?php echo $image_path . $s1; ?>/rock-planet-1500-min.png 1500w,
                            <?php echo $image_path . $s1; ?>/rock-planet-1100-min.png 1100w"
                        sizes="(min-width: 768px) 100vw, 100vw"
                        src="<?php echo $image_path . $s1; ?>/rock-planet.png" alt="<?php echo $slider_general_alt; ?>"
                            class="earth-slider earth-slider-1"
                            <?php echo $planet_data; ?> >
                   
                                         
                    <div class="slider-title" <?php echo $slider_title_data; ?> >
                        
                       <?php echo $banner_header; ?>
                    </div>

                    <div class="slider-text" <?php echo $slider_text_data; ?> >
                       <?php echo $banner_text; ?>
                    </div>

                   

                  
            </div>
            
            
       
            
        </div>
    </div>
</div>