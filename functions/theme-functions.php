<?php
if ( function_exists( 'add_theme_support' ) ) { 
    
    add_image_size( 'square-thumbnail', 54, 54, false );//used

//    add_image_size( 'banch-square-thumbnail', 90, 90, false );
//    add_image_size( 'portret-tablet-cropped', 130, 130, false );//used
    add_image_size( 'slider-video', 400, 230, false );//used
    add_image_size( 'slider-object-tablet-min', 360, 160, false );
    add_image_size( 'news-photo', 500, 300, false );//used
   
    add_image_size( 'preview-max', 1000, 500, false ); //used
    
}

// Async load
function prorm_async_scripts($url)
{
    if ( strpos( $url, '#asyncload') === false )
        return $url;
    else if ( is_admin() )
        return str_replace( '#asyncload', '', $url );
    else
	return str_replace( '#asyncload', '', $url )."' async='async"; 
    }
add_filter( 'clean_url', 'prorm_async_scripts', 11, 1 );




function replace_text($search, $replace, $cat) {
    if ( $cat == $search ) {
        $subject = str_replace($search, $replace, $cat);
        return $subject;
    }
}

function get_translated_text($de, $en, $es){
    
    $lang = pll_current_language();
   
    if($lang == 'de'){
        return $de;
    }
    elseif($lang == 'en'){
        return $en;
    }
    elseif($lang == 'es'){
        return $es;
    }
    else{
        return $en;
    }
 
}


function get_current_element_id_wp($test_id, $live_id){
    
    if($_SERVER["HTTP_HOST"] == 'promx.webdev.acceptic.com'){
        return $test_id;
    }else{
        return $live_id;
    }
    
}

function promx_is_mobile(){
    $useragent = $_SERVER['HTTP_USER_AGENT']; 
	if(
		
		preg_match(
			'/(android|bb\d+|meego).+mobile|android|ipad|playbook|silk|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i',
			$useragent
		)
		||
		preg_match(
			'/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',
			substr($useragent,0,4)
		)
	)
		return true;
    return false;   
}

function get_url_page_cookies($pll_current_language){
    
    if(!$pll_current_language){
        $pll_current_language = pll_current_language();  
    }
    $url = false;
    
    if ($pll_current_language == 'en') {
       $url = get_site_url() . '/en/privacy-and-cookies/';
    } 
    elseif ($pll_current_language == 'es') {
       $url = get_site_url() . '/es/privacidad-y-cookies/';
    }
    else {
       $url = get_site_url() . '/datenschutz/';
    }
    
    return $url;
}

function get_text_cookies(){
    
    $pll_current_language = pll_current_language();  
    
    $url = get_url_page_cookies(''); 
    
    if($pll_current_language == 'en'){
        $text = '<div class="input-col col form-info" ><p>' . 'By clicking on "Contact me" below, you agree to our' . '<br>' .
            '<a href="' . $url . '">' .'Privacy Policy' . '</a>' . '. </p></div>';
    }else{
        $text = '<div class="input-col col form-info" ><p>' . 'Durch Klick auf "Kontaktieren Sie mich", erklären Sie sich mit unseren' . '<br>' .
            '<a href="' . $url . '">' .'Datenschutz-Bestimmungen' . '</a>' . ' einverstanden' . '. </p></div>';
    }
      
   
    
    return $text;
    
}

function get_text_cookies_width($btn_title = 'Contact me'){
    
    $pll_current_language = pll_current_language();  
//    Kontaktieren Sie mich
    $url = get_url_page_cookies(''); 
    
    if($pll_current_language == 'en'){
        
        $text = '<div class="input-col col form-info" ><p class="marsala-colour" >' . 'By clicking on "' . __($btn_title, ProRMTheme::TEXTDOMAIN) . '" below, you agree to our' . 
        ' ' . '<a href="' . $url . '">' . 'Privacy Policy' . '</a>' . '. </p></div>';
        
    }else{
        $text = '<div class="input-col col form-info" ><p class="marsala-colour" >' . 'Durch Klick auf "' . __($btn_title, ProRMTheme::TEXTDOMAIN) . '", erklären Sie sich mit unseren ' . 
            ' ' . '<a href="' . $url . '">' . 'Datenschutz-Bestimmungen' . '</a>' . ' einverstanden' . '. </p></div>';
    }
     
//    $text = '<div class="input-col col form-info" ><p class="marsala-colour" >' . __('By clicking on "Contact me" below, you agree to our', ProRMTheme::TEXTDOMAIN) . 
//        ' ' . '<a href="' . $url . '">' . __('Privacy Policy', ProRMTheme::TEXTDOMAIN) . '</a>' . '. </p></div>';
    
    return $text;
    
}

function get_post_id_by_name( $post_name, $post_type = 'post' )
{

//    $post_ids = get_posts(array
//    (
//        'post_name'   => $post_name,
//        'post_type'   => $post_type,
//        'numberposts' => 1,
//        'fields' => 'ids'
//    ));
// 
//    return array_shift( $post_ids );
    
    $name   = esc_sql( $post_name );
    $post_type   = esc_sql( $post_type );
    global $wpdb;
    $postID = intval($wpdb->get_var("SELECT ID FROM $wpdb->posts WHERE post_type = '$post_type' AND post_name = '$name'"));

    return $postID;
   
}


add_action('wp_head', 'prorm_open_graph');

function prorm_open_graph(){
    $open_graph = '';

    if ( is_single() ){   
            global $post;
            $id = get_the_ID();
               
            $post_thumbnail_url = get_field('photo_item', $id)[0]["image_for_slider"]["url"]; 
            
            if(!$post_thumbnail_url){
                $post_thumbnail_id = get_post_thumbnail_id($id);
                $post_thumbnail_url = wp_get_attachment_url( $post_thumbnail_id );
            }
            
            $open_graph .= '<meta property="og:title" content="'. esc_html($post->post_title) . '" />'; 
            
            $open_graph .= '<meta property="og:type" content="article" />'; 
            $open_graph .= '<meta property="og:url" content="' . get_permalink() .'" />'; 
            
            if($post_thumbnail_url){
                $open_graph .= '<meta property="og:image" content="'.$post_thumbnail_url.'" />';
            }
            else{
                $open_graph .= '<meta property="og:image" content="http://prorm.net/wp-content/themes/prorm/images/FS.png" />'; 
            }
            
            if($post->post_excerpt){
                $open_graph .= '<meta property="og:description" content="'. esc_html($post->post_excerpt) . '" />'; 
            }
            else{
                $exc = substr($post->post_content, 0, 300);
                $open_graph .= '<meta property="og:description" content="'. wp_strip_all_tags( esc_html($exc), true ) . '" />'; 
            }
            
          
    } 
    elseif(is_page()){
        global $post;
       
        $id = get_the_ID();
        
        if(!$id){
            return;
        }
        
        $title_meta = get_post_meta($id, '_aioseop_title', true);
        $descr_meta = get_post_meta($id, '_aioseop_description', true);
        $img_id = get_post_meta($id, 'banner_object_page', true);
        
        if($img_id){
            $post_thumbnail_url = wp_get_attachment_url( $img_id );
        }
        
        
        if($title_meta){
            $open_graph .= '<meta property="og:title" content="'. esc_html($title_meta) . '" />'; 
        }
        
        $open_graph .= '<meta property="og:type" content="website" />'; 
        $open_graph .= '<meta property="og:url" content="' . get_permalink($id) .'" />'; 
        
        if($post_thumbnail_url){
            if($post_thumbnail_url){
                $open_graph .= '<meta property="og:image" content="'.$post_thumbnail_url.'" />';
            }
            else{
                $open_graph .= '<meta property="og:image" content="http://prorm.net/wp-content/themes/prorm/images/FS.png" />'; 
            }
        }
                
        if($descr_meta){
            $open_graph .= '<meta property="og:description" content="'. esc_html($descr_meta) . '" />'; 
        }
        
        
        
    }
    else {
        return;
    }

    echo $open_graph;
}





function kama_pagenavi( $before = '', $after = '', $echo = true, $args = array(), $wp_query = null ) {
	if( ! $wp_query ){
		wp_reset_query();
		global $wp_query;
	}
// var_dump($wp_query);
	// параметры по умолчанию
	$default_args = array(
		'text_num_page'   => '', // Текст перед пагинацией. {current} - текущая; {last} - последняя (пр. 'Страница {current} из {last}' получим: "Страница 4 из 60" )
		'num_pages'       => 10, // сколько ссылок показывать
		'step_link'       => 10, // ссылки с шагом (значение - число, размер шага (пр. 1,2,3...10,20,30). Ставим 0, если такие ссылки не нужны.
		'dotright_text'   => '…', // промежуточный текст "до".
		'dotright_text2'  => '…', // промежуточный текст "после".
		'back_text'       => '« назад', // текст "перейти на предыдущую страницу". Ставим 0, если эта ссылка не нужна.
		'next_text'       => 'вперед »', // текст "перейти на следующую страницу". Ставим 0, если эта ссылка не нужна.
		'first_page_text' => '« к началу', // текст "к первой странице". Ставим 0, если вместо текста нужно показать номер страницы.
		'last_page_text'  => 'в конец »', // текст "к последней странице". Ставим 0, если вместо текста нужно показать номер страницы.
	);

	$default_args = apply_filters('kama_pagenavi_args', $default_args ); // чтобы можно было установить свои значения по умолчанию

	$args = array_merge( $default_args, $args );

	extract( $args );

	$posts_per_page = (int) $wp_query->get('posts_per_page');
	$paged          = (int) $wp_query->get('paged');
	$max_page       = $wp_query->max_num_pages;
// var_dump($posts_per_page);
//  var_dump($max_page);
	//проверка на надобность в навигации
	if( $max_page <= 1 )
		return false;

	if( empty( $paged ) || $paged == 0 )
		$paged = 1;

	$pages_to_show = intval( $num_pages );
	$pages_to_show_minus_1 = $pages_to_show-1;

	$half_page_start = floor( $pages_to_show_minus_1/2 ); //сколько ссылок до текущей страницы
	$half_page_end = ceil( $pages_to_show_minus_1/2 ); //сколько ссылок после текущей страницы

	$start_page = $paged - $half_page_start; //первая страница
	$end_page = $paged + $half_page_end; //последняя страница (условно)

	if( $start_page <= 0 )
		$start_page = 1;
	if( ($end_page - $start_page) != $pages_to_show_minus_1 )
		$end_page = $start_page + $pages_to_show_minus_1;
	if( $end_page > $max_page ) {
		$start_page = $max_page - $pages_to_show_minus_1;
		$end_page = (int) $max_page;
	}

	if( $start_page <= 0 )
		$start_page = 1;

	//выводим навигацию
	$out = '';

	// создаем базу чтобы вызвать get_pagenum_link один раз
	$link_base = str_replace( 99999999, '___', get_pagenum_link( 99999999 ) );
	$first_url = get_pagenum_link( 1 );
	if( false === strpos( $first_url, '?') )
		$first_url = user_trailingslashit( $first_url );

	$out .= $before . "<div class='wp-pagenavi'>\n";

		if( $text_num_page ){
			$text_num_page = preg_replace( '!{current}|{last}!', '%s', $text_num_page );
			$out.= sprintf( "<span class='pages'>$text_num_page</span> ", $paged, $max_page );
		}
		// назад
		if ( $back_text && $paged != 1 )
			$out .= '<a class="prev" href="'. ( ($paged-1)==1 ? $first_url : str_replace( '___', ($paged-1), $link_base ) ) .'">'. $back_text .'</a> ';
		// в начало
		if ( $start_page >= 2 && $pages_to_show < $max_page ) {
			$out.= '<a class="first" href="'. $first_url .'">'. ( $first_page_text ? $first_page_text : 1 ) .'</a> ';
			if( $dotright_text && $start_page != 2 ) $out .= '<span class="extend">'. $dotright_text .'</span> ';
		}
		// пагинация
		for( $i = $start_page; $i <= $end_page; $i++ ) {
			if( $i == $paged )
				$out .= '<span class="current">'.$i.'</span> ';
			elseif( $i == 1 )
				$out .= '<a href="'. $first_url .'">1</a> ';
			else
				$out .= '<a href="'. str_replace( '___', $i, $link_base ) .'">'. $i .'</a> ';
		}

		//ссылки с шагом
		$dd = 0;
		if ( $step_link && $end_page < $max_page ){
			for( $i = $end_page+1; $i<=$max_page; $i++ ) {
				if( $i % $step_link == 0 && $i !== $num_pages ) {
					if ( ++$dd == 1 )
						$out.= '<span class="extend">'. $dotright_text2 .'</span> ';
					$out.= '<a href="'. str_replace( '___', $i, $link_base ) .'">'. $i .'</a> ';
				}
			}
		}
		// в конец
		if ( $end_page < $max_page ) {
			if( $dotright_text && $end_page != ($max_page-1) )
				$out.= '<span class="extend">'. $dotright_text2 .'</span> ';
			$out.= '<a class="last" href="'. str_replace( '___', $max_page, $link_base ) .'">'. ( $last_page_text ? $last_page_text : $max_page ) .'</a> ';
		}
		// вперед
		if ( $next_text && $paged != $end_page )
			$out.= '<a class="next" href="'. str_replace( '___', ($paged+1), $link_base ) .'">'. $next_text .'</a> ';

	$out .= "</div>". $after ."\n";

	$out = apply_filters('kama_pagenavi', $out );

	if( $echo )
		return print $out;

	return $out;
}


function show_pub_date($id)
    {
        $dateFormat = get_option('date_format');
        $dateString = '';
        if (function_exists('pll_current_language')) {
            if(pll_current_language('slug') == 'de'){
                $dateFormat = 'j. M. Y';
                $dateArr = explode('.', get_the_date($dateFormat, $id));
                $dateArr[1] = __(trim($dateArr[1]), ProRMTheme::TEXTDOMAIN);
                $dateString = $dateArr[0] . '. ' . $dateArr[1] . ' ' . $dateArr[2];
            }
        }
        if(!$dateString){
            $dateString = get_the_date($dateFormat, $id);
        }
        /* <time datetime="<?php echo esc_attr(get_the_date('c')); ?>" pubdate><?php echo esc_html(get_the_date($dateFormat)); ?></time> */
    ?>
        <time datetime="<?php echo esc_attr(get_the_date('c')); ?>" class="date"><?php echo esc_html($dateString); ?></time>
    <?php
    }


    
 add_action('nav_menu_css_class', 'add_current_nav_class', 10, 2 );
	
	function add_current_nav_class($classes, $item) {
		
		// Getting the current post details
		global $post;
                if( is_singular('reference')){
                
                    $menu_slug = strtolower(trim($item->url)); 
                    
                    if (strpos($menu_slug,ProRMReferences::PARENT_URL) == true
                            || strpos($menu_slug,ProRMReferences::PARENT_URL_de) == true
                            || strpos($menu_slug,ProRMReferences::PARENT_URL_es) == true) {
		
                        $classes[] = 'current_page_parent';
                        
		
                    }else{
                        $key_p = array_search('current_page_parent', $classes);
                        if($key_p){
                            $classes[$key_p] = '';
                        }
                    }
                }

		// Return the corrected set of classes to be added to the menu item
		return $classes;
	
	}
        
        
function get_url_from_data_img($width, $height, $url){
    if($width >= 450 && $height >= 300){
        return $url;
    } else{
        return false;
    }
}

function get_name_from_str($str){
    
    $sect_name = preg_replace('/\s+/', '_', strtolower($str));
    
    if($sect_name){
        return $sect_name;
    }else{
        return false;
    }
}

function is_live_site(){
    
    if($_SERVER["HTTP_HOST"] == 'promx.webdev.acceptic.com'){
        return false;
    }else{
        return true;
    }
    
}


function get_google_tag_anal(){
    ?>
    
        <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-ND92CZ');</script>
    <!-- End Google Tag Manager -->
        
    <?php
}

function get_google_no_script(){
    ?>
   <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-ND92CZ"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->    
    <?php
}

function get_yandex_script(){
    ?>
  <!-- Yandex.Metrika counter -->
<script type="text/javascript" >
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter32043881 = new Ya.Metrika({
                    id:32043881,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true,
                    webvisor:true
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/32043881" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
    <?php
}

function get_noindex_tag(){
    ?>
    <meta name="robots" content="noindex, nofollow"/>
    <?
}

function get_form_button_id($id_general, $id_form){
    
    if(!$id_form){
        return false;
    }
    
    if($id_general){
        $id_button = $id_form . '-' . $id_general .'-button';
    }else{
        $id_button = $id_form . '-button';
    }
    
    return $id_button;
}

function get_browser_name($user_agent)
{
    if (strpos($user_agent, 'Opera') || strpos($user_agent, 'OPR/')){ return 'Opera';}
    elseif (strpos($user_agent, 'Edge')){ return 'Edge';}
    elseif (strpos($user_agent, 'Chrome')){ return 'Chrome';}
    elseif (strpos($user_agent, 'Safari')){ return 'Safari';}
    elseif (strpos($user_agent, 'Firefox')){ return 'Firefox';}
    elseif (strpos($user_agent, 'MSIE') || strpos($user_agent, 'Trident/7')){ return 'Internet Explorer';}
    
    return 'Other';
}

function build_block_attr($data){
    
    if($data){
        
        foreach ($data as $key => $value) {
            
            if($key && $value){
                                
                echo ' ' .  $key . '="' . $value . '" ';
                
            }
            
        }
      
    } 
    
}