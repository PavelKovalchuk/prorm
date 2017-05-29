<?php
$page_for_posts = get_option( 'page_for_posts' );

$settings = Registry::get('settings');
$general_alt =  $settings->getOption('general_alt_text_for_images');
$angular_mode =  $settings->getOption('angular_mode_news_enable');
$img_placeholder =  $settings->getOption('image_placeholder');




if(!$angular_mode){
    
    get_header();
?>
<main id="main" role="main" class="single-post">
    <div id="content" class="news-content info-block">
        
        <div class="container-breadcrumbs">
            
            <div class="container">

                <div class="breadcrumbs-outer row-12">
            
                    <ul class="list-links breadcrumbs">
                        <li><a href="<?php the_permalink($page_for_posts) ?>"><?php echo get_the_title( $page_for_posts ); ?></a></li>

                        <li class="active"><?php the_title() ?></li>
                    </ul>
            
                </div>
                                   
            </div>
        
        </div>
        
        <div class="container">
            
                
                
                <div class="news-holder row-12">

                    
                    <h1><?php the_title() ?></h1>

                    <div class="post-inner">
                        <?php
                        if (have_posts()) {
                            while (have_posts()) {
                                the_post();
                                
                             
                                ?>
                                <div class="news-part-left">
                                    <?php
                                    $items = get_field('photo_item');
                                    if($items){
                                        get_gallery_slider($items, $general_alt);
                                    }

                                    elseif (has_post_thumbnail()) {
                                        ?>
                                        <div class="single-post-thumbnail">
                                            <a class="gallery-item magnifier-cursor" href="<?php the_post_thumbnail_url(); ?>" data-effect="mfp-newspaper">
                                                <?php the_post_thumbnail(); ?>
                                            </a>
                                        </div>
                                        <?php
                                    }
                                      the_content(); ?>
                                    
                                    <div class="bottom-holder f-bottom-holder">
                            
                                        <div class="share-outer"> 

                                            <div class="share-text-outer">
                                                <span class="share-text-inner"> 
                                                    <?php  _e('Share this: '); ?> 
                                                </span> 
                                            </div>

                                            <?php echo prorm_share_buttons(urlencode(get_permalink())); ?> 

                                        </div>

                                        <a href="<?php print $_SERVER['HTTP_REFERER']; ?>" class="button-prorm button-prorm-vinous btn-back">
                                            <span class="btn-text-outer"><?= __( 'Back', ProRMTheme::TEXTDOMAIN ); ?></span>
                                        </a>

                                    </div>
                        
                                    <div class="bottom-holder prev-next-holder">

                                        <?php  

                                        $prev_post = get_previous_post();
                                        if( ! empty($prev_post) ){ ?>
                                            <div class='prev-post-outer'>
                                                <?php //             var_dump($prev_post); ?>
                                                <a href="<?php echo get_permalink( $prev_post->ID ); ?>" class='prev-next-link tooltip' > 
                                                    <?php if($prev_post->post_excerpt) { ?>
                                                        <span class="tooltiptext left-orient"><?php echo $prev_post->post_excerpt; ?></span>
                                                    <?php } ?>

                                                    <div class="arrow"><i class="fa fa-chevron-left" aria-hidden="true"></i></div>
                                                    <div class="link-label"><?php _e('Previous Post'); ?></div>
<?php // echo substr($prev_post->post_title, 0, 35) . '...' ;  ?>
                                                    <div class="link-title"><h5><?php echo $prev_post->post_title;  ?> </h5></div>
                                                </a>
                                            </div>

                                        <?php } ?>


                                        <?php $next_post = get_next_post();
                                        if( ! empty($next_post) ){ ?>
                                            <div class='next-post-outer'>


                                                <a href="<?php echo get_permalink( $next_post->ID ); ?>" class='prev-next-link tooltip'>

                                                    <?php if($next_post->post_excerpt) { ?>
                                                        <span class="tooltiptext right-orient"><?php echo $next_post->post_excerpt; ?></span>
                                                    <?php } ?>

                                                    <div class="arrow"><i class="fa fa-chevron-right" aria-hidden="true"></i></div>
                                                    <div class="link-label"><?php _e('Next Post'); ?></div>

                                                    <div class="link-title"><h5><?php echo $next_post->post_title ; ?></h5></div>
                                                </a>
                                            </div>
                                        <?php } ?>


                                    </div>
                                    
                                    
                                </div>
                        
                                <div class="news-part-right">

                                    <?php get_prorm_recent_post($general_alt, get_the_ID(), $img_placeholder); ?>

                                </div>
           
            
                        <?php 
            
                            }
                        }
                        ?>
                        
                       
                        
                        
                        
                    </div>
                              
                </div>
          
        </div>
    </div>
</main>
<?php get_footer('2017'); ?>
    
<?php }else { 


    get_header('angular');
 ?>   
 
    
    <div ng-app="app">
           
        <div ui-view autoscroll="true"></div>
    </div>


<?php get_footer('angular'); ?>
    
<?php } ?>




