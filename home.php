<?php

if(!isset($_SESSION)) {
    session_start();
}


$settings = Registry::get('settings');
        
$general_alt =  $settings->getOption('general_alt_text_for_images');

$img_placeholder =  $settings->getOption('news_image_placeholder');

$current_page_id = get_option( 'page_for_posts' );

$fields = get_fields($current_page_id);



$banner_args = array(
    'banner_object' => $fields['banner_object_page']["url"],
    'banner_header' => $fields['banner_header_page'],
    'banner_header_tag' => $fields['banner_header_tag'],
    'banner_text' => $fields['banner_text_page'],
    'banner_buttons' => $fields['banner_buttons_page']
    
   
);



?>
<?php get_header(); ?>
    <main id="main" class="latest-news-page">
        <div id="content">
            <?php // get_prorm_banner_page($banner_args, $general_alt ); ?>
            
            <?php get_prorm_banner_block($banner_args, $general_alt ); ?>
            
            <div class="latest-news-inner">
                <div class="container">
                    <h1 class="third-header-section"><?php echo get_field('page_header', $current_page_id); ?></h1>
                    
                    <?php 
                   
                    $label_button = $fields['label_button'];
                    
                    if( ! $wp_query ){
                            wp_reset_query();
                            global $wp_query;
                            
                           
                    }
//                    $posts_per_page = (int) $wp_query->get('posts_per_page');
                    get_prorm_latest_post( $wp_query->posts, $label_button, $general_alt, $img_placeholder);
                    ?>
                </div>
            </div>
            
            
            <?php 
            
            $pagenavi_args = array(
		'text_num_page'   => '', // Текст перед пагинацией. {current} - текущая; {last} - последняя (пр. 'Страница {current} из {last}' получим: "Страница 4 из 60" )
		'num_pages'       => 3, // сколько ссылок показывать
		'step_link'       => 0, // ссылки с шагом (значение - число, размер шага (пр. 1,2,3...10,20,30). Ставим 0, если такие ссылки не нужны.
		'dotright_text'   => '…', // промежуточный текст "до".
		'dotright_text2'  => '…', // промежуточный текст "после".
		'back_text'       => '<div class="arrow"><i class="fa fa-chevron-left" aria-hidden="true"></i></div>', // текст "перейти на предыдущую страницу". Ставим 0, если эта ссылка не нужна.
		'next_text'       => '<div class="arrow"><i class="fa fa-chevron-right" aria-hidden="true"></i></div>', // текст "перейти на следующую страницу". Ставим 0, если эта ссылка не нужна.
		'first_page_text' => false, // текст "к первой странице". Ставим 0, если вместо текста нужно показать номер страницы.
		'last_page_text'  => false, // текст "к последней странице". Ставим 0, если вместо текста нужно показать номер страницы.
            );
            
            kama_pagenavi('', '', true,  $pagenavi_args, $wp_query); ?>
           
            
            
                
                <?php 
                    $p_f_header = $fields['page_footer_header'];
                    $p_f_text = $fields['page_footer_text'];
                    $p_f_footer_img = $fields['page_footer_img'];
                    $p_f_img_alt = $fields['page_footer_img_alt'];
                    
                    get_subscribe_footer($p_f_header, $p_f_text, $p_f_footer_img, $p_f_img_alt,  $general_alt, 'subscribe-news');
                ?>
            


        </div>
    </main>
<?php get_footer('2017'); ?>