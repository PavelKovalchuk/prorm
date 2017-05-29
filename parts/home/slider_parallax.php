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


$slider_info = get_field('slider_info');
if($slider_info)
{

    $slider_1 = $slider_info[0];
    $slider_2 = $slider_info[1];
    $slider_3 = $slider_info[2];
//    var_dump($slider_1["slider_button_link"]);
}

$slider_title_pos = '100,150';
$slider_text_pos = '200,150';
$slider_button_pos = '430,150';

$slider_title_width = '1000';
$slider_text_width = '1000';
$slider_button_width = '1000';

$slider_title_height = '100';
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

$slider_button_data = ' width="' . $slider_button_width . '" height="' . $slider_button_height . '" data-position="' . $slider_button_pos . '" data-in="' . $slider_button_data_in . 
                '" data-delay="' . $slider_button_data_delay . '" data-out="' . $slider_button_data_out . '" data-ease-in="' . $slider_button_data_ease_in . '" data-ease-out="' .
                $slider_button_data_ease_out . '"';



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
                        
                       <?php echo $slider_1["slider_title"] ?>
                    </div>

                    <div class="slider-text" <?php echo $slider_text_data; ?> >
                       <?php echo $slider_1["slider_text"] ?>
                    </div>

                    <div class="slider-button" <?php echo $slider_button_data; ?> >
                        <a href="<?php echo $slider_1["slider_button_link"] ?>" class="slider-button-link">
                            <?php echo $slider_1["slider_button_text"] ?>
                        </a>   
                    </div>

                  
            </div>
            
            
            
            <div class="slide <?php echo $s2 . '-slide'; ?>" data-in='fade'>
                    <img    
                        srcset="<?php echo $image_path . $s2; ?>/rock-bg.png  2500w,
                        <?php echo $image_path . $s2; ?>/rock-bg-1800-min.png 1800w,
                        <?php echo $image_path . $s2; ?>/rock-bg-1500-min.png  1500w,
                        <?php echo $image_path . $s2; ?>/rock-bg-1100-min.png 1100w"
                        sizes="(min-width: 768px) 100vw, 100vw"
                        src="<?php echo $image_path . $s2; ?>/rock-bg.png" alt="<?php echo $slider_general_alt; ?>"
                            width="2500" height="608"
                            class="bg-slider bg-slider-2" 
                            data-fixed
                            >
                   

                    <img    srcset="<?php echo $image_path . $s2; ?>/cloud.png  2500w,
                                <?php echo $image_path . $s2; ?>/cloud-420-min.png 1800w,
                                <?php echo $image_path . $s2; ?>/cloud-360-min.png 1500w"
                            sizes="(min-width: 768px) 100vw, 100vw"   
                            src="<?php echo $image_path . $s2; ?>/cloud.png" alt="<?php echo $slider_general_alt; ?>"
                            width="602" height="288" 
                            class="stars-slider stars-slider-2"
                            data-position="20,1600" data-in="bottomLeft" data-delay="0" data-out="bottomLeft" data-ease-in="easeOutQuart" data-ease-out="easeInSine">
                    
                    
                    <img    
                            srcset="<?php echo $image_path . $s2; ?>/cloud-dawn.png  2500w,
                                <?php echo $image_path . $s2; ?>/cloud-dawn-860-min.png 1800w"
                            sizes="(min-width: 768px) 100vw, 100vw"   
                            src="<?php echo $image_path . $s2; ?>/cloud-dawn.png" alt="<?php echo $slider_general_alt; ?>"
                            width="1250" height="340"
                            class="stars-rocket-slider stars-rocket-slider-2"
                            data-position="280,1300" data-in="bottomLeft" data-delay="200" data-out="bottomLeft" data-ease-in="easeInOutCirc" data-ease-out="easeInSine">
                    
                    
                    
                   <img    srcset="<?php echo $image_path . $s2; ?>/satellite.png  2500w,
                                <?php echo $image_path . $s2; ?>/satellite-100-min.png 1800w,
                                <?php echo $image_path . $s2; ?>/satellite-130-min.png 1500w"
                            sizes="(min-width: 768px) 100vw, 100vw" 
                            src="<?php echo $image_path . $s2; ?>/satellite.png" alt="<?php echo $slider_general_alt; ?>"
                            width="177" height="155"
                            class="rocket-slider rocket-slider-2"
                            data-position="200,1850" data-time="4000" data-in="bottomRight" data-delay="400" data-out="topRight" data-ease-in="easeOutCubic" data-ease-out="easeOutExpo">
                   
                   
                   <img    srcset="<?php echo $image_path . $s2; ?>/manuf-planet.png  2500w,
                                <?php echo $image_path . $s2; ?>/manuf-planet-1700-min.png 1800w,
                                <?php echo $image_path . $s2; ?>/manuf-planet-1500-min.png 1500w,
                                <?php echo $image_path . $s2; ?>/manuf-planet-1100-min.png 1100w"
                            sizes="(min-width: 768px) 100vw, 100vw" 
                            src="<?php echo $image_path . $s2; ?>/manuf-planet.png" alt="<?php echo $slider_general_alt; ?>"
                            class="earth-slider earth-slider-2"
                            <?php echo $planet_data; ?> >
                   
                   <div class="slider-title" <?php echo $slider_title_data; ?> >
                        
                       <?php echo $slider_2["slider_title"] ?>
                    </div>

                    <div class="slider-text" <?php echo $slider_text_data; ?> >
                       <?php echo $slider_2["slider_text"] ?>
                    </div>

                    <div class="slider-button" <?php echo $slider_button_data; ?> >
                        <a href="<?php echo $slider_2["slider_button_link"] ?>" class="slider-button-link">
                            <?php echo $slider_2["slider_button_text"] ?>
                        </a>   
                    </div>


            </div>
            
            
            
            
            
            
            <div class="slide <?php echo $s3 . '-slide'; ?>" data-in='fade'>
                    <img    
                        srcset="<?php echo $image_path . $s3; ?>/rock-bg.png  2500w,
                            <?php echo $image_path . $s3; ?>/rock-bg-1800-min.png 1800w,
                            <?php echo $image_path . $s3; ?>/rock-bg-1500-min.png  1500w,
                            <?php echo $image_path . $s3; ?>/rock-bg-1100-min.png 1100w"
                        sizes="(min-width: 768px) 100vw, 100vw"
                        src="<?php echo $image_path . $s3; ?>/rock-bg.png" alt="<?php echo $slider_general_alt; ?>"
                            width="2500" height="608"
                            class="bg-slider bg-slider-3" 
                            data-fixed
                            >
                            
<!--                    <div id="space" data-fixed>
                        <div class="space-stars" data-fixed></div>
                        <div class="space-stars" data-fixed></div>
                        <div class="space-stars" data-fixed></div>
                        <div class="space-stars" data-fixed></div>
                        <div class="space-stars" data-fixed></div>
                    </div>
                -->

                    <img    
                        srcset="<?php echo $image_path . $s3; ?>/ufo-front.png  2500w,
                                <?php echo $image_path . $s3; ?>/ufo-front-1700-min.png 1800w,
                                <?php echo $image_path . $s3; ?>/ufo-front-1500-min.png  1500w,
                                <?php echo $image_path . $s3; ?>/ufo-front-1100-min.png 1100w"
                        sizes="(min-width: 768px) 100vw, 100vw" 
                        src="<?php echo $image_path . $s3; ?>/ufo-front.png" alt="<?php echo $slider_general_alt; ?>"
                            width="2500" height="608" 
                            class="stars-slider stars-slider-3"
                            data-position="0,0" data-in="bottomLeft" data-delay="0" data-out="bottomLeft" data-ease-in="easeOutQuart" data-ease-out="easeInSine">
                    
                    
                    <img    
                        srcset="<?php echo $image_path . $s3; ?>/ufo-clouds.png  2500w,
                            <?php echo $image_path . $s3; ?>/ufo-clouds-765-min.png 1800w,
                            <?php echo $image_path . $s3; ?>/ufo-clouds-660-min.png 1500w"
                        sizes="(min-width: 768px) 100vw, 100vw" 
                        src="<?php echo $image_path . $s3; ?>/ufo-clouds.png" alt="<?php echo $slider_general_alt; ?>"
                            width="1100" height="280"
                            class="stars-rocket-slider stars-rocket-slider-3"
                            data-position="350,700" data-in="left" data-time="4000" data-delay="400" data-out="bottomLeft" data-ease-in="easeOutCubic" data-ease-out="easeOutQuart">
                    
                    
                    
                   <img    
                        srcset="<?php echo $image_path . $s3; ?>/ufo.png  2500w,
                            <?php echo $image_path . $s3; ?>/ufo-240-min.png 1800w"
                        sizes="(min-width: 768px) 100vw, 100vw"
                        src="<?php echo $image_path . $s3; ?>/ufo.png" alt="<?php echo $slider_general_alt; ?>"
                            width="349" height="135"
                            class="rocket-slider rocket-slider-3"
                            data-time="4000" data-position="350,1650" data-in="bottomRight" data-delay="400" data-out="topRight" data-ease-in="easeOutCubic" data-ease-out="easeOutExpo">
                   
                   
                   <img   
                        srcset="<?php echo $image_path . $s3; ?>/ufo-planet.png  2500w,
                            <?php echo $image_path . $s3; ?>/ufo-planet-1700-min.png 1800w,
                            <?php echo $image_path . $s3; ?>/ufo-planet-1500-min.png 1500w,
                            <?php echo $image_path . $s3; ?>/ufo-planet-1100-min.png 1100w"
                        sizes="(min-width: 768px) 100vw, 100vw"
                        src="<?php echo $image_path . $s3; ?>/ufo-planet.png" alt="<?php echo $slider_general_alt; ?>"
                            class="earth-slider earth-slider-3"
                             <?php echo $planet_data; ?> >
                   
                   <div class="slider-title" <?php echo $slider_title_data; ?> >
                        
                       <?php echo $slider_3["slider_title"] ?>
                    </div>

                    <div class="slider-text" <?php echo $slider_text_data; ?> >
                       <?php echo $slider_3["slider_text"] ?>
                    </div>

                    <div class="slider-button" <?php echo $slider_button_data; ?> >
                        <a href="<?php echo $slider_3["slider_button_link"] ?>" class="slider-button-link">
                            <?php echo $slider_3["slider_button_text"] ?>
                        </a>   
                    </div>


            </div>
            
            
            
            
            
        </div>
    </div>
</div>