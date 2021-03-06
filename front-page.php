<?php
/*
 * Template Name: Home page
 */

global $post;

$frontpageCategories = ProRMFrontPage::getCategories($post->ID);

$recentNewsDisplayOptions = array(
    'read_more' => true,
    'read_more_text' => __('more', ProRMTheme::TEXTDOMAIN),
);

$settings = Registry::get('settings');
        
$general_alt =  $settings->getOption('general_alt_text_for_images');

$fields = get_fields();

$slider_args = array(
    'items' => $fields['slider_items'],
    'label' => $fields['slider_buttom_label'],
    'css_class' => $fields['slider_buttom_class'],
    
);

get_header();
?>

<main id="main" class="home-page">
    <div id="content">
     
        <?php get_homepage_slider_block($slider_args, $general_alt, '') ?> 
           
        <!-- intro -->
        <section class="intro info-block text-bigger-block">
            <div class="container">
                <div class="intro-post-outer">
                <h1 class="text-bigger"><?php echo $fields['headline']; ?></h1>
                
                    <article class="intro-post">
                        <div class="image">
                            <img src="<?php echo $fields['related_page'][0]["page_image"]; ?>" 
                                 alt="<?php echo $fields['related_page'][0]["page_image_alt"] ? $fields['related_page'][0]["page_image_alt"] : $general_alt ; ?>">
                        </div>
                        <div class="holder">
                            <h2><?php echo $fields['related_page'][0]["page_title"] ?></h2>
                            <p><?php echo $fields['related_page'][0]["page_excerpt"]; ?></p>
                            <a href="<?php echo $fields['related_page'][0]["page_link"]; ?>" class="button-prorm button-prorm-vinous" id="hp-learnmore-1">
                                <span class="btn-text-outer"><?php echo $fields['related_page'][0]["page_link_label"]; ?></span>
                            </a>
                        </div>
                    </article>

                    <article class="intro-post">
                        <div class="image">
                            <img src="<?php echo $fields['related_page'][1]["page_image"]; ?>" 
                                 alt="<?php echo $fields['related_page'][1]["page_image_alt"] ? $fields['related_page'][1]["page_image_alt"] : $general_alt ; ?>">
                        </div>
                        <div class="holder">
                            <h2><?php echo $fields['related_page'][1]["page_title"] ?></h2>
                            <p><?php echo $fields['related_page'][1]["page_excerpt"]; ?></p>
                            <a href="<?php echo $fields['related_page'][1]["page_link"]; ?>" class="button-prorm button-prorm-vinous" id="hp-learnmore-2">
                                <span class="btn-text-outer"><?php echo $fields['related_page'][1]["page_link_label"]; ?></span>
                            </a>
                        </div>
                    </article>
                    
                </div>
            </div>
        </section>
        <section class="cta-block download-block cta-meet-us-block">
            <!--<div class="container">-->
                
                <div class="download-btn-outer">
                    <h2 class="center white-style cta-header"><?php echo  $fields['cta_text']; ?></h2>
                
                    <a  href="<?php echo $fields['cta_button_link']; ?>" class="button-prorm button-prorm-white-transparent" id="hp-events">
                        <span class="btn-text-outer"><?php echo $fields['cta_button_label']; ?></span>
                    </a>
                </div>
                
            <!--</div>-->
        </section>
      
        <?php if($frontpageCategories){ ?>
            <section class="newsroom-index-block info-block text-bigger-block ">
                <div class="container">
                    <h2 class="black-style-center center text-bigger news-section-header"><?php echo $fields['news_title']; ?></h2>
                    
                    <div class="newsroom-index-outer">
                        
                        <?php ProRMNews::showRecentNews(2, $frontpageCategories, $recentNewsDisplayOptions) ?>
                        
                    </div>
                    
                </div>
            </section>
        <?php } ?>
        
    </div>
</main>

<?php get_footer('2017'); ?>
