<?php


function prorm_widgets_init() {
    if ( !is_blog_installed() )
        return;

    register_widget('WP_Widget_Our_Offices');
    
    register_widget('About_Us_In_Numbers');
    
    register_widget('Customers_words');
    
    register_widget('Videos_works');
    
    register_widget('FastStart_videos');

    do_action('widgets_init');
}

add_action('init', 'prorm_widgets_init', 2);


abstract class ProRMWidgets
{
    public static function init()
    {
        register_sidebar(array(
            'name' => __('Contact Info', ProRMTheme::TEXTDOMAIN),
            'id' => 'contact-info',
            'description' => __('Appears on contact page', ProRMTheme::TEXTDOMAIN),
            'before_widget' => '',
            'after_widget' => '',
            'before_title' => '<h2 class="center text-bigger">',
            'after_title' => '</h2>',
        ));

        register_sidebar(array(
            'name' => __('Offices-Europa', ProRMTheme::TEXTDOMAIN),
            'id' => 'offices-europa',
            'description' => __('Appears on contact page', ProRMTheme::TEXTDOMAIN),
            'before_widget' => '<div class="col-md-4"><div class="office">',
            'after_widget' => '</div></div>',
            'before_title' => '<h5>',
            'after_title' => '</h5>',
        ));
        register_sidebar(array(
            'name' => __('Offices-N.America', ProRMTheme::TEXTDOMAIN),
            'id' => 'offices-namerica',
            'description' => __('Appears on contact page', ProRMTheme::TEXTDOMAIN),
            'before_widget' => '<div class="col-md-4"><div class="office">',
            'after_widget' => '</div></div>',
            'before_title' => '<h5>',
            'after_title' => '</h5>',
        ));
        register_sidebar(array(
            'name' => __('Offices-Australia', ProRMTheme::TEXTDOMAIN),
            'id' => 'offices-australia',
            'description' => __('Appears on contact page', ProRMTheme::TEXTDOMAIN),
            'before_widget' => '<div class="col-md-4"><div class="office">',
            'after_widget' => '</div></div>',
            'before_title' => '<h5>',
            'after_title' => '</h5>',
        ));
		
	register_sidebar(array(
            'name' => __('Offices-Africa', ProRMTheme::TEXTDOMAIN),
            'id' => 'offices-africa',
            'description' => __('Appears on contact page', ProRMTheme::TEXTDOMAIN),
            'before_widget' => '<div class="col-md-4"><div class="office">',
            'after_widget' => '</div></div>',
            'before_title' => '<h5>',
            'after_title' => '</h5>',
        ));
           
       register_sidebar( array(
            'name' => "About Us In Numbers sidebar",
            'id' => 'about-us-numbers-sidebar',
            'description' => 'These widgets is for About Us Item. It displays About us in Numbers block',
            'before_widget' => '<div class="about-us-item col-3 center" >',
            'after_widget' => '</div>',
            'before_title' => '<h2 class="widgettitle">',
            'after_title' => '</h2>',
	) );
       
        register_sidebar( array(
            'name' => "Customers words sidebar",
            'id' => 'customers-words-sidebar',
            'description' => 'These widgets is for Customer Item. It displays What our customers says block',
            'before_widget' => '<div class="customer-words-item center" >',
            'after_widget' => '</div>',
            'before_title' => '<h2 class="widgettitle">',
            'after_title' => '</h2>',
	) );
        
        register_sidebar( array(
            'name' => "Videos How does it work sidebar",
            'id' => 'videos-works-sidebar',
            'description' => 'These widgets is for Video Item. It displays How does it work block',
            'before_widget' => '<div class="videos-works-item center" >',
            'after_widget' => '</div>',
            'before_title' => '<h2 class="widgettitle">',
            'after_title' => '</h2>',
	) );
        
        register_sidebar( array(
            'name' => "Videos for Fast Start sidebar",
            'id' => 'videos-faststart-sidebar',
            'description' => 'These widgets is for Video Item for Fast Start.',
            'before_widget' => '<div class="videos-works-item center" >',
            'after_widget' => '</div>',
            'before_title' => '<h2 class="widgettitle">',
            'after_title' => '</h2>',
	) );

    }
}


/**
 * Videos widget class
 *  
 *
 */

class Videos_works extends WP_Widget {

	function Videos_works() {
		$widget_ops = array( 'classname' => 'videos_works_class', 'description' => __('A widget appears in the  block  How does it work.', ProRMTheme::TEXTDOMAIN) );
		
		$control_ops = array( 'width' => 300, 'height' => 350, 'id_base' => 'videos_works_widget' );
		
		$this->WP_Widget( 'videos_works_widget', __('Video item', ProRMTheme::TEXTDOMAIN), $widget_ops, $control_ops );
                
         
	}
	
	function widget( $args, $instance ) {
		extract( $args );

		//Our variables from the widget settings.
                
                $video_vistia_id = $instance['video_id'];
                $video_youtube_id = $instance['video_youtube_id'];
                $image_id = intval($instance['image_id']);;
                $image_url = wp_get_attachment_image_url($image_id, 'slider-video' );
                $image_alt = $instance['image_alt'];
               
		echo $before_widget;
                
                if($video_youtube_id){
                    $video_start_data = "http://www.youtube.com/watch?v=";
                    $video_end_data = "?autoplay=1&rel=0&wmode=transparent&showinfo=0"; 
                    $video_id = $video_youtube_id;
                }else{
                    $video_start_data = "http://fast.wistia.net/embed/iframe/";
                    $video_end_data = "?seo=false";
                    $video_id = $video_vistia_id;
                }
                
                ?>
                <div class="item videos-item">
                   
                  
                    <a data-effect="mfp-zoom-in" class="item icon-play popup-youtube" href="<?php echo $video_start_data .  $video_id . $video_end_data; ?>">
                        <img src="<?php echo $image_url; ?>" alt="<?php echo $image_alt; ?>" class="video-item-img">
                    </a>
                    
                </div>
                    
                    
                <?php
		
		echo $after_widget;
	}

	//Update the widget 
	 
	function update( $new_instance, $old_instance ) {
		$instance = $old_instance;

		//Strip tags from title and name to remove HTML 
                $instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
		$instance['video_youtube_id'] = strip_tags( $new_instance['video_youtube_id'] );                 
                $instance['video_id'] = strip_tags( $new_instance['video_id'] );
                $instance['image_id'] = strip_tags( $new_instance['image_id']);
                $instance['image_alt'] = strip_tags( $new_instance['image_alt']);
               
          
		return $instance;
	}

	
	function form( $instance ) {

		//Set up some default widget settings.
               
		$defaults = array(
                            'image_id' => __('post id of the image'),
                            'image_alt' => __('ProMX', ProRMTheme::TEXTDOMAIN),
                            'video_id' => __('VIDEO ID ')
                );
                
                
                
                $title = @ $instance['title'] ?: 'Title';
                
		$instance = wp_parse_args( (array) $instance, $defaults ); 
                
                
                ?>
                
                <p>
			<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label> 
			<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>">
		</p>
                
                <p>
			<label for="<?php echo $this->get_field_id( 'video_id' ); ?>"><?php _e( 'VIDEO VIMEO ID:' ); ?></label> 
			<input class="widefat" id="<?php echo $this->get_field_id( 'video_id' ); ?>" name="<?php echo $this->get_field_name( 'video_id' ); ?>" type="text" value="<?php echo $instance['video_id'];?>">
		</p>
                
                <p>
			<label for="<?php echo $this->get_field_id( 'video_youtube_id' ); ?>"><?php _e( 'VIDEO YOUTUBE ID:' ); ?></label> 
			<input class="widefat" id="<?php echo $this->get_field_id( 'video_youtube_id' ); ?>" name="<?php echo $this->get_field_name( 'video_youtube_id' ); ?>" type="text" value="<?php echo $instance['video_youtube_id'];?>">
		</p>
                
                <p>
			<label for="<?php echo $this->get_field_id( 'image_id' ); ?>"><?php _e('ID for image:', ProRMTheme::TEXTDOMAIN); ?></label>
                        
			<input id="<?php echo $this->get_field_id( 'image_id' ); ?>" name="<?php echo $this->get_field_name( 'image_id' ); ?>" value="<?php echo $instance['image_id']; ?>" style="width:100%;" />
		</p>
                
                <p>
			<label for="<?php echo $this->get_field_id( 'image_alt' ); ?>"><?php _e('ALT for image:', ProRMTheme::TEXTDOMAIN); ?></label>
			<input id="<?php echo $this->get_field_id( 'image_alt' ); ?>" name="<?php echo $this->get_field_name( 'image_alt' ); ?>" value="<?php echo $instance['image_alt']; ?>" style="width:100%;" />
		</p>
                
              
	<?php
	}
        
      
}


/**
 * Videos Fast Start widget class
 *  
 *
 */

class FastStart_videos extends WP_Widget {

	function FastStart_videos() {
		$widget_ops = array( 'classname' => 'videos_works_class', 'description' => __('A widget appears in the  block  Fast Start Video block.', ProRMTheme::TEXTDOMAIN) );
		
		$control_ops = array( 'width' => 300, 'height' => 350, 'id_base' => 'videos_faststart_widget' );
		
		$this->WP_Widget( 'videos_faststart_widget', __('Video item', ProRMTheme::TEXTDOMAIN), $widget_ops, $control_ops );
                
         
	}
	
	function widget( $args, $instance ) {
		extract( $args );

		//Our variables from the widget settings.
                
                $video_vistia_id = $instance['video_id'];
                $video_youtube_id = $instance['video_youtube_id'];
                $image_id = intval($instance['image_id']);
                $image_url = wp_get_attachment_image_url($image_id, 'slider-video' );
                $image_alt = $instance['image_alt'];
               
		echo $before_widget;
                
                if($video_youtube_id){
                    $video_start_data = "http://www.youtube.com/watch?v=";
                    $video_end_data = "?autoplay=1&rel=0&wmode=transparent&showinfo=0"; 
                    $video_id = $video_youtube_id;
                }else{
                    $video_start_data = "http://fast.wistia.net/embed/iframe/";
                    $video_end_data = "?seo=false";
                    $video_id = $video_vistia_id;
                }

                ?>
                <div class="item videos-item">
                   
                  
                    <a data-effect="mfp-zoom-in" class="item icon-play popup-youtube" href="<?php echo $video_start_data .  $video_id . $video_end_data; ?>">
                        <img src="<?php echo $image_url; ?>" alt="<?php echo $image_alt; ?>" class="video-item-img">
                    </a>
                    
                </div>
                    
                    
                <?php
		
		echo $after_widget;
	}

	//Update the widget 
	 
	function update( $new_instance, $old_instance ) {
		$instance = $old_instance;

		//Strip tags from title and name to remove HTML 
                $instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
		$instance['video_youtube_id'] = strip_tags( $new_instance['video_youtube_id'] );              
                $instance['video_id'] = strip_tags( $new_instance['video_id'] );
                $instance['image_id'] = strip_tags( $new_instance['image_id']);
                $instance['image_alt'] = strip_tags( $new_instance['image_alt']);
               
          
		return $instance;
	}

	
	function form( $instance ) {

		//Set up some default widget settings.
               
		$defaults = array(
                            'image_id' => __('post id of the image'),
                            'image_alt' => __('ProMX', ProRMTheme::TEXTDOMAIN),
                            'video_id' => __('VIDEO VISTIA ID ')
                            
                );
                
                
                
                $title = @ $instance['title'] ?: 'Title';
                
		$instance = wp_parse_args( (array) $instance, $defaults ); 
                
                
                ?>
                
                <p>
			<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label> 
			<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>">
		</p>
                
                <p>
			<label for="<?php echo $this->get_field_id( 'video_id' ); ?>"><?php _e( 'VIDEO VIMEO ID:' ); ?></label> 
			<input class="widefat" id="<?php echo $this->get_field_id( 'video_id' ); ?>" name="<?php echo $this->get_field_name( 'video_id' ); ?>" type="text" value="<?php echo $instance['video_id'];?>">
		</p>
                
                <p>
			<label for="<?php echo $this->get_field_id( 'video_youtube_id' ); ?>"><?php _e( 'VIDEO YOUTUBE ID:' ); ?></label> 
			<input class="widefat" id="<?php echo $this->get_field_id( 'video_youtube_id' ); ?>" name="<?php echo $this->get_field_name( 'video_youtube_id' ); ?>" type="text" value="<?php echo $instance['video_youtube_id'];?>">
		</p>
                
                <p>
			<label for="<?php echo $this->get_field_id( 'image_id' ); ?>"><?php _e('ID for image:', ProRMTheme::TEXTDOMAIN); ?></label>
                        
			<input id="<?php echo $this->get_field_id( 'image_id' ); ?>" name="<?php echo $this->get_field_name( 'image_id' ); ?>" value="<?php echo $instance['image_id']; ?>" style="width:100%;" />
		</p>
                
                <p>
			<label for="<?php echo $this->get_field_id( 'image_alt' ); ?>"><?php _e('ALT for image:', ProRMTheme::TEXTDOMAIN); ?></label>
			<input id="<?php echo $this->get_field_id( 'image_alt' ); ?>" name="<?php echo $this->get_field_name( 'image_alt' ); ?>" value="<?php echo $instance['image_alt']; ?>" style="width:100%;" />
		</p>
                
              
	<?php
	}
        
      
}










/**
 * Customers_words widget class
 *
 *
 */

class Customers_words extends WP_Widget {

	function Customers_words() {
		$widget_ops = array( 'classname' => 'customers_words_class', 'description' => __('A widget appears in the  block  What our customers say.', ProRMTheme::TEXTDOMAIN) );
		
		$control_ops = array( 'width' => 300, 'height' => 350, 'id_base' => 'customers_words_widget' );
		
		$this->WP_Widget( 'customers_words_widget', __('Customer item', ProRMTheme::TEXTDOMAIN), $widget_ops, $control_ops );
                
         
	}
	
	function widget( $args, $instance ) {
		extract( $args );

		//Our variables from the widget settings.

		$image_id = intval($instance['image_id']);
                $image_url = wp_get_attachment_image_url($image_id, 'slider-object-tablet-min' );
                $image_alt = $instance['image_alt'];
                $image_path = get_template_directory_uri() . '/images/';                
                $current_lang = pll_current_language();
                
                $person_name = $instance['person-name-' . $current_lang];
                $person_position = $instance['person-position-' . $current_lang];
                $description = $instance['description-' . $current_lang];

		echo $before_widget;
                
                ?>
                <div class="item customer-item">
                    
                    <div class="customer-description">
                        <p class="small"><?php echo $description; ?></p>
                       
                    </div>
                    
                    <div class="customer-person-outer">
                        <div class="customer-img-outer">
                            <img src="<?php echo $image_url; ?>" alt="<?php echo $image_alt; ?>" class="customer-img">
                        </div>
                        <div class="customer-person">
                            <p>
                                <span class="person-name"><?php echo $person_name . '<br>'; ?></span>
                                <span class="person-position"><?php echo $person_position; ?></span>
                            </p>
                            
                        </div>
                    </div>

                </div>
                    
                    
                <?php
		
		echo $after_widget;
	}

	//Update the widget 
	 
	function update( $new_instance, $old_instance ) {
		$instance = $old_instance;

		//Strip tags from title and name to remove HTML 
                $instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
		$instance['image_id'] = $new_instance['image_id'];
                $instance['image_alt'] = strip_tags( $new_instance['image_alt'] );
                
                $lang_list = pll_languages_list();
                
                foreach ($lang_list as $key => $lang) {
                    $instance['person-name-' . $lang ] = strip_tags( $new_instance['person-name-' . $lang] );
                    $instance['person-position-' . $lang ] = strip_tags( $new_instance['person-position-' . $lang] );
                    $instance['description-' . $lang ] = strip_tags( $new_instance['description-' . $lang] );
                }
          
		return $instance;
	}

	
	function form( $instance ) {

		//Set up some default widget settings.
                $lang_array = array();
                
                $lang_list = pll_languages_list();
                
                foreach ($lang_list as $key => $lang) {
                    $lang_array['person-name-' . $lang ] = __('Leonardo Dicaprio_' . $lang );
                    $lang_array['person-position-' . $lang ] = __('Leader_' . $lang );
                    $lang_array['description-' . $lang ] = __('What customers say_' . $lang );
                }
                
		$defaults_common = array(
                            'image_id' => __('id'),
                            'image_alt' => __('ProMX', ProRMTheme::TEXTDOMAIN),
                    
                );
                
                $defaults = array_merge($defaults_common, $lang_array);
                
                $title = @ $instance['title'] ?: 'Title';
                
		$instance = wp_parse_args( (array) $instance, $defaults ); 
                
                
                ?>
                
                <p>
			<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label> 
			<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>">
		</p>
                
                <p>
			<label for="<?php echo $this->get_field_id( 'image_id' ); ?>"><?php _e('ID of the image:', ProRMTheme::TEXTDOMAIN); ?></label>
                        
			<input id="<?php echo $this->get_field_id( 'image_id' ); ?>" name="<?php echo $this->get_field_name( 'image_id' ); ?>" value="<?php echo $instance['image_id']; ?>" style="width:100%;" />
		</p>
                               
                <p>
			<label for="<?php echo $this->get_field_id( 'image_alt' ); ?>"><?php _e('ALT for image:', ProRMTheme::TEXTDOMAIN); ?></label>
			<input id="<?php echo $this->get_field_id( 'image_alt' ); ?>" name="<?php echo $this->get_field_name( 'image_alt' ); ?>" value="<?php echo $instance['image_alt']; ?>" style="width:100%;" />
		</p>
                
                
                
                <?php  
                
                foreach ($lang_array as $key => $value) { ?>
                    
                    <p>
			<label for="<?php echo $this->get_field_id( $key ); ?>"><?php _e( $key . ': ', ProRMTheme::TEXTDOMAIN); ?></label>
                        
                    <?php  if(preg_match("/description/i", $key)){ ?>
                        
                        <textarea id="<?php echo $this->get_field_id( $key ); ?>" rows="6" cols="20" name="<?php echo $this->get_field_name( $key ); ?>" style="width:100%;" ><?php echo $instance[$key]; ?></textarea>
                        
                    <?php }else{ ?>
                                   
			<input id="<?php echo $this->get_field_id( $key ); ?>" name="<?php echo $this->get_field_name( $key ); ?>" value="<?php echo $instance[$key]; ?>" style="width:100%;" />
                    
                    <?php } ?>
                    
                    </p>
                     
                <?php } ?>
                
                
             
	<?php
	}
        
      
}








/**
 * About us in numbers widget class
 *
 *
 */

class About_Us_In_Numbers extends WP_Widget {

	function About_Us_In_Numbers() {
		$widget_ops = array( 'classname' => 'about-us-numbers_class', 'description' => __('A widget appears in the  block  About Us In Numbers.', ProRMTheme::TEXTDOMAIN) );
		
		$control_ops = array( 'width' => 300, 'height' => 350, 'id_base' => 'about_us_numbers_widget' );
		
		$this->WP_Widget( 'about_us_numbers_widget', __('About us item', ProRMTheme::TEXTDOMAIN), $widget_ops, $control_ops );
                
         
	}
	
	function widget( $args, $instance ) {
		extract( $args );

		//Our variables from the widget settings.
//		$title = apply_filters('widget_title', $instance['title'] );
		$image_url = $instance['image_url'];
		$image_alt = $instance['image_alt'];
                $add_sign = $instance['add_sign'];
                $number = intval($instance['number']);
                
                $current_lang = pll_current_language();
                
                $description = $instance['description-' . $current_lang];

		echo $before_widget;
                
                ?>
                    <div class="counter-img-outer">
                        <img src="<?php echo $image_url; ?>" alt="<?php echo $image_alt; ?>" class="counter-img">
                        <div class="counter-outer">
                            <div class="counter" data-count="<?php echo $number; ?>" data-status="ready"
                                <?php if($add_sign){ ?>
                                 data-sign="<?php echo $add_sign; ?>"
                                <?php } ?>
                            >
                            </div>
                            
                        </div>
                    </div>
                    
                    <div class="counter-description"><p><?php echo $description; ?></p></div>
                <?php
		
		echo $after_widget;
	}

	//Update the widget 
	 
	function update( $new_instance, $old_instance ) {
		$instance = $old_instance;

		//Strip tags from title and name to remove HTML 
                $instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
		$instance['image_url'] = $new_instance['image_url'];
                $instance['image_alt'] = strip_tags( $new_instance['image_alt'] );
                $instance['add_sign'] = strip_tags( $new_instance['add_sign'] );
                
                $lang_list = pll_languages_list();
                
                foreach ($lang_list as $key => $lang) {
                    $instance['description-' . $lang ] = strip_tags( $new_instance['description-' . $lang] );
                   
                }
                
                $instance['number'] = intval( $new_instance['number'] );

		return $instance;
	}

	
	function form( $instance ) {

		//Set up some default widget settings.
		$lang_array = array();
                
                $lang_list = pll_languages_list();
                
                foreach ($lang_list as $key => $lang) {
                    
                    $lang_array['description-' . $lang ] = __('What number means - ' . $lang );
                }
                
		$defaults_common = array(
                            'image_url' => __('http://'),
                            'image_alt' => __('ProMX', ProRMTheme::TEXTDOMAIN),
                    
                );
                
                $defaults = array_merge($defaults_common, $lang_array);
                
                $title = @ $instance['title'] ?: 'Title';
                
		$instance = wp_parse_args( (array) $instance, $defaults ); ?>
                
                <p>
			<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label> 
			<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>">
		</p>
                
                <p>
			<label for="<?php echo $this->get_field_id( 'image_url' ); ?>"><?php _e('URL for image:', ProRMTheme::TEXTDOMAIN); ?></label>
                        <br><small><?php _e('Use image size 170x150 px:', ProRMTheme::TEXTDOMAIN); ?></small>
			<input id="<?php echo $this->get_field_id( 'image_url' ); ?>" name="<?php echo $this->get_field_name( 'image_url' ); ?>" value="<?php echo $instance['image_url']; ?>" style="width:100%;" />
		</p>

		<p>
			<label for="<?php echo $this->get_field_id( 'number' ); ?>"><?php _e('Number:', ProRMTheme::TEXTDOMAIN); ?></label>
                        <input type="number" id="<?php echo $this->get_field_id( 'number' ); ?>" name="<?php echo $this->get_field_name( 'number' ); ?>" value="<?php echo $instance['number']; ?>" style="width:100%;" />
		</p>
                
                <p>
			<label for="<?php echo $this->get_field_id( 'add_sign' ); ?>"><?php _e('Addition sign:', ProRMTheme::TEXTDOMAIN); ?></label>
                        <input type="text" id="<?php echo $this->get_field_id( 'add_sign' ); ?>" name="<?php echo $this->get_field_name( 'add_sign' ); ?>" value="<?php echo $instance['add_sign']; ?>" style="width:100%;" />
		</p>
                
                <p>
			<label for="<?php echo $this->get_field_id( 'image_alt' ); ?>"><?php _e('ALT for image:', ProRMTheme::TEXTDOMAIN); ?></label>
			<input id="<?php echo $this->get_field_id( 'image_alt' ); ?>" name="<?php echo $this->get_field_name( 'image_alt' ); ?>" value="<?php echo $instance['image_alt']; ?>" style="width:100%;" />
		</p>
                
                
                 <?php  
                
                foreach ($lang_array as $key => $value) { ?>
                     
                    <p>
			<label for="<?php echo $this->get_field_id( $key ); ?>"><?php _e( $key . ': ', ProRMTheme::TEXTDOMAIN); ?></label>
			<input id="<?php echo $this->get_field_id( $key ); ?>" name="<?php echo $this->get_field_name( $key ); ?>" value="<?php echo $instance[$key]; ?>" style="width:100%;" />
                    </p>
                     
                <?php } ?>
             
	<?php
	}
        
      
}




/**
 * Our offices widget class
 *
 *
 */
class WP_Widget_Our_Offices extends WP_Widget {

    function __construct() {
        $widget_ops = array('classname' => 'widget_our_offices', 'description' => __('Contact Info Offices (text or HTML).'));
        $control_ops = array('width' => 400, 'height' => 350);
        parent::__construct('our_offices', __('Our Offices'), $widget_ops, $control_ops);
    }

    function widget( $args, $instance ) {
        extract($args);
        $title = apply_filters( 'widget_title', empty( $instance['title'] ) ? '' : $instance['title'], $instance, $this->id_base );
        $office_addr = apply_filters( 'widget_office_addr', empty( $instance['office_addr'] ) ? '' : $instance['office_addr'], $instance );
        $company_name = apply_filters( 'widget_company_name', empty( $instance['company_name'] ) ? '' : $instance['company_name'], $instance );
        $office_contacts = apply_filters( 'widget_office_contacts', empty( $instance['office_contacts'] ) ? '' : $instance['office_contacts'], $instance );

       
        ?>

            <?php if(is_page_template('templates/contact-us-2017.php')){ ?>
                    
                    <tr>
                        <td data-th="<?php echo __('Location' , ProRMTheme::TEXTDOMAIN) ?>">
                            <p><?php echo !empty( $instance['filter'] ) ? wpautop( $office_addr ) : $office_addr; ?></p>
                        </td>
                        <td data-th="<?php echo __('Company' , ProRMTheme::TEXTDOMAIN) ?>">
                            <p><?php echo !empty( $instance['filter'] ) ? wpautop( $company_name ) : $company_name; ?></p>
                        </td>
                        <td data-th="<?php echo __('Contact' , ProRMTheme::TEXTDOMAIN) ?>">
                            <p><?php echo !empty( $instance['filter'] ) ? wpautop( $office_contacts ) : $office_contacts; ?></p>
                        </td>

                    </tr>
                    
                
            <?php } else{ ?>
                    <li>
                        <div class="container">
                            <div class="col">
                                <?php echo !empty( $instance['filter'] ) ? wpautop( $office_addr ) : $office_addr; ?>
                            </div>
                            <div class="col"><?php echo !empty( $instance['filter'] ) ? wpautop( $company_name ) : $company_name; ?></div>
                            <div class="col">
                                <?php echo !empty( $instance['filter'] ) ? wpautop( $office_contacts ) : $office_contacts; ?>
                            </div>
                        </div>
                    </li>
            <?php } ?>

       
    <?php }

    function update( $new_instance, $old_instance ) {
        $instance = $old_instance;
        $instance['title'] = strip_tags($new_instance['title']);
        if ( current_user_can('unfiltered_html') ) {
            $instance['office_addr'] =  $new_instance['office_addr'];
            $instance['company_name'] =  $new_instance['company_name'];
            $instance['office_contacts'] =  $new_instance['office_contacts'];
        } else { // wp_filter_post_kses() expects slashed
            $instance['office_addr'] = stripslashes( wp_filter_post_kses( addslashes($new_instance['office_addr']) ) );
            $instance['company_name'] = stripslashes( wp_filter_post_kses( addslashes($new_instance['company_name']) ) );
            $instance['office_contacts'] = stripslashes( wp_filter_post_kses( addslashes($new_instance['office_contacts']) ) );
        }

        $instance['filter'] = isset($new_instance['filter']);
        return $instance;
    }

    function form( $instance ) {
        $instance = wp_parse_args( (array) $instance, array( 'title' => '', 'office_addr' => '', 'company_name' => '', 'office_contacts' => '' ) );
        $title = strip_tags($instance['title']);
        $office_addr = esc_textarea($instance['office_addr']);
        $company_name = esc_textarea($instance['company_name']);
        $office_contacts = esc_textarea($instance['office_contacts']);
        ?>

        <p><label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:'); ?></label>
        <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo esc_attr($title); ?>" /></p>
        <p><label for="<?php echo $this->get_field_id('office_addr'); ?>"><?php _e('Office Address:'); ?></label>
        <textarea class="widefat" rows="6" cols="20" id="<?php echo $this->get_field_id('office_addr'); ?>" name="<?php echo $this->get_field_name('office_addr'); ?>"><?php echo $office_addr; ?></textarea>
        <p><label for="<?php echo $this->get_field_id('company_name'); ?>"><?php _e('Company Name:'); ?></label>
        <textarea class="widefat" rows="4" cols="20" id="<?php echo $this->get_field_id('company_name'); ?>" name="<?php echo $this->get_field_name('company_name'); ?>"><?php echo $company_name; ?></textarea>
        <p><label for="<?php echo $this->get_field_id('office_contacts'); ?>"><?php _e('Office Contacts:'); ?></label>
        <textarea class="widefat" rows="6" cols="20" id="<?php echo $this->get_field_id('office_contacts'); ?>" name="<?php echo $this->get_field_name('office_contacts'); ?>"><?php echo $office_contacts; ?></textarea>

        <p><input id="<?php echo $this->get_field_id('filter'); ?>" name="<?php echo $this->get_field_name('filter'); ?>" type="checkbox" <?php checked(isset($instance['filter']) ? $instance['filter'] : 0); ?> />&nbsp;<label for="<?php echo $this->get_field_id('filter'); ?>"><?php _e('Automatically add paragraphs'); ?></label></p>
    <?php
    }
}
