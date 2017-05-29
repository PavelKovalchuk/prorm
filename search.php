<?php get_header(); ?>
<?php

/*
Template Name: Search Page
*/

$s=get_search_query();

$site_section = $_GET['site_section'];


if ($site_section == 'blog-search' &&  pll_current_language('slug') == 'en') {

    $args = array(
        's' =>$s,
        'posts_per_page'=>'10',
        'cat' => '6'


    );

} else if ($site_section == 'blog-search' && pll_current_language('slug') == 'de') {

    $args = array(
        's' =>$s,
        'posts_per_page'=>'10',
        'cat' => '5227'


    );

}

else if ($site_section == 'news-search' && pll_current_language('slug') == 'en') {
    $args = array(
        's' =>$s,
        'posts_per_page'=>'10',
        'cat' => '5226'


    );
} else if ($site_section == 'news-search' && pll_current_language('slug') == 'de') { 
	$args = array(
        's' =>$s,
        'posts_per_page'=>'10',
        'cat' => '5269'


    );
}

// The Query
$the_query = new WP_Query( $args);






?>



<div class="container news-page">
<div class="row">
<div class="col-sm-12">
<div id="content">


<?php if ($site_section == 'news-search') {
    if(pll_current_language('slug') == 'en')  {
        echo '<div class="breadcrumbs" style="font-style: italic;margin-top: 35px;">
                            <a  class="bread-link" href="http://promx.net/en/promx-newsroom/">proMX Newsroom</a>
                          </div>';
    } else {
		
        echo '<div class="breadcrumbs" style="font-style: italic;margin-top: 35px;">
                                <a class="bread-link" href="http://promx.net/de/der-promx-newsroom/">Der proMX-Newsroom</a>
                              </div>';
    }

} else if ($site_section == 'blog-search') {

    if(pll_current_language('slug') == 'en')  {
        echo '<div class="breadcrumbs" style="font-style: italic;margin-top: 35px;">
                             <a class="bread-link" href="http://promx.net/en/technology-blog/">Technology Blog</a>
                          </div>';
    } else {
        echo '<div class="breadcrumbs" style="font-style: italic;margin-top: 35px;">
                            <a class="bread-link" href="http://promx.net/de/technologie-blog/">Technology Blog</a>
                          </div>';
    }

} ?>




<div class="row">

<div class="col-lg-8 col-md-6">
    <?php if(pll_current_language('slug') == 'en')  { ?>
        <?php _e("<h3 style='padding-bottom: 20px;color:#000000;font-style:italic;font-weight:300;border-bottom: 1px solid #cccccc;'>Results for: ".get_query_var('s')."</h3>"); ?>
    <? } else { ?>
        <?php _e("<h3 style='padding-bottom: 20px;color:#000000;font-style:italic;font-weight:300;border-bottom: 1px solid #cccccc;'>Ergebnisse für: ".get_query_var('s')."</h3>"); ?>
    <?php } ?>
    <?php
    if ( $the_query->have_posts() ) {

        while ( $the_query->have_posts() ) {
            $the_query->the_post();

            ?>



            <?php if (is_search() && ($post->post_type=='page')) continue; ?>


            <article id="post-<?php the_ID(); ?>"<?php post_class('post-' . $post->post_name); ?>>


                <div class="row" style="margin-bottom: 20px;">
                    <div class="col-sm-8">
                        <h3 class="entry-title post-title">
                            <a href="<?php the_permalink(); ?>">

                                <?php the_title();?>
                            </a>

                        </h3>
                    </div>

                    <div class="col-sm-4 block-post-info">
                        <img style="margin-top:-5px;padding-right:5px;"  src="<?php echo get_template_directory_uri(); ?>/images/newsroom-img/calendar.png">
                        <?php ProRMNews::showPubDate(); ?>

                    </div>

                </div>
                <div class="excerpt-block">
                    <?php the_excerpt();?>
                    <div class="read-posts" style="float:right;margin-top:-15px;">
                        <a href="<?php the_permalink(); ?>">
                            Read more
                        </a>
                    </div>
                </div>

            </article>


        <?php
        }

    }



    else{
        ?>

        <h2 style='font-weight:bold;color:#000'>Nothing Found</h2>
        <div class="alert alert-info">
            <p>Sorry, but nothing matched your search criteria. Please try again with some different keywords.</p>
        </div>
    <?php } ?>


</div>
<div class="col-lg-4 col-md-6 col-xs-12 col-sm-12 newsroom-rightcol">
    <?php  if(pll_current_language('slug') == 'en'){ ?>
        <h3 class="title-right-news" style="font-size:1.2em;">You can always learn more</h3>
    <? } else { ?>
        <h3 class="title-right-news" style="font-size:1.2em;">Sie können immer mehr erfahren</h3>
    <? } ?>



    <?php  if(pll_current_language('slug') == 'en'){ ?>

        <?php  if ($site_section == 'news-search') { ?>
            <div class="right-block-first-link right-block-first">
                <a style="text-decoration: none;" href="<?php echo get_site_url(); ?>/en/promx-newsroom/">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/newsroom-img/icon_news_after.png">
                    <center><p style="padding-top:10px;color:#6c1234;font-weight: 500;">Newsroom</p></center>
                </a>
            </div>


            <div class="right-block-second-link right-block-second">
                <a style="text-decoration: none;" href="<?php echo get_site_url(); ?>/en/technology-blog/">
                    <img  class="right-block-img" src="<?php echo get_template_directory_uri(); ?>/images/newsroom-img/blog_icon_before.png"
                          onmouseover="this.src='<?php echo get_template_directory_uri(); ?>/images/newsroom-img/blog_icon_after.png';"
                          onmouseout="this.src='<?php echo get_template_directory_uri(); ?>/images/newsroom-img/blog_icon_before.png';">
                    <p style="padding-top:10px;margin-left:50px;color:#6c1234;font-weight: 300;">Technology Blog</p>
                </a>
            </div>
        <?php } else {?>
            <div class="right-block-first-link right-block-first">
                <a style="text-decoration: none;" href="<?php echo get_site_url(); ?>/en/promx-newsroom/">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/newsroom-img/icon_news_before.png"
                         onmouseover="this.src='<?php echo get_template_directory_uri(); ?>/images/newsroom-img/icon_news_after.png';"
                         onmouseout="this.src='<?php echo get_template_directory_uri(); ?>/images/newsroom-img/icon_news_before.png';"
                        >
                    <center><p style="padding-top:10px;color:#6c1234;font-weight: 300;">Newsroom</p></center>
                </a>
            </div>


            <div class="right-block-second-link right-block-second">
                <a style="text-decoration: none;" href="<?php echo get_site_url(); ?>/en/technology-blog/">
                    <img  class="right-block-img" src="<?php echo get_template_directory_uri(); ?>/images/newsroom-img/blog_icon_after.png">
                    <p style="padding-top:10px;margin-left:45px;color:#6c1234;font-weight: 400;">Technology Blog</p>
                </a>
            </div>
        <?php } ?>



    <?php } else {?>

        <?php  if ($site_section == 'news-search') { ?>

            <div class="right-block-first">
                <a style="text-decoration: none;" href="<?php echo get_site_url(); ?>/de/der-promx-newsroom/">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/newsroom-img/icon_news_after.png">
                    <center><p style="padding-top:10px;color:#6c1234;font-weight: 500;">Newsroom</p></center>
                </a>
            </div>

            <div class="right-block-second">
                <a style="text-decoration: none;" href="<?php echo get_site_url(); ?>/de/technologie-blog/">
                    <img  class="right-block-img" src="<?php echo get_template_directory_uri(); ?>/images/newsroom-img/blog_icon_before.png"
                          onmouseover="this.src='<?php echo get_template_directory_uri(); ?>/images/newsroom-img/blog_icon_after.png';"
                          onmouseout="this.src='<?php echo get_template_directory_uri(); ?>/images/newsroom-img/blog_icon_before.png';">
                    <p style="padding-top:10px;margin-left:50px;color:#6c1234;font-weight: 300;">Technologie-Blog</p>
                </a>
            </div>

        <?php } else {?>

            <div class="right-block-first">
                <a style="text-decoration: none;" href="<?php echo get_site_url(); ?>/de/der-promx-newsroom/">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/newsroom-img/icon_news_before.png"
                         onmouseover="this.src='<?php echo get_template_directory_uri(); ?>/images/newsroom-img/icon_news_after.png';"
                         onmouseout="this.src='<?php echo get_template_directory_uri(); ?>/images/newsroom-img/icon_news_before.png';"
                        >
                    <center><p style="padding-top:10px;color:#6c1234;font-weight: 300;">Newsroom</p></center>
                </a>
            </div>

            <div class="right-block-second">
                <a style="text-decoration: none;" href="<?php echo get_site_url(); ?>/de/technologie-blog/">
                    <img  style="margin-left:50px;" src="<?php echo get_template_directory_uri(); ?>/images/newsroom-img/blog_icon_after.png">
                    <p style="padding-top:10px;margin-left:45px;color:#6c1234;font-weight: 400;">Technologie-Blog</p>
                </a>
            </div>

        <?php } ?>

    <?php } ?>



    <div>
        <form method="get" id="jobsearch" action="http://promx.net/" >
            <div>
                <?php  if ($site_section == 'news-search') { ?>
                    <input type="hidden" name="site_section" value="news-search" />
                <?php } else { ?>
                    <input type="hidden" name="site_section" value="blog-search" />
                <?php } ?>
                <?php  if(pll_current_language('slug') == 'en'){ ?>
                    <input type="text" placeholder="Search News" style="margin-top:40px;width:100%;border:1px solid #cccccc;padding:10px;font-weight:500;" value="<?php echo wp_specialchars($s, 1); ?>" name="s" id="s" />
                <?php } else { ?>
                    <input type="text" placeholder="Nachrichten suchen" style="margin-top:40px;width:100%;border:1px solid #cccccc;padding:10px;font-weight:500;" value="<?php echo wp_specialchars($s, 1); ?>" name="s" id="s" />
                <?php } ?>

                <img id="imgSearch" src="http://blog.promx.net/wp-content/uploads/2015/02/7.png" style="margin-top:-75px;margin-left:90%;">
            </div>
        </form>
    </div>


    <div class="category-block" id="category-subscribe" style="background-color: #f0f0f0;margin-top:15px;">
        <div class="category-subscribe-title" style="background-color:#f0f0f0;height:70px;"><h3 style="color:#000000;font-weight:300;font-size:27px;"><?php _e('Subscribe to newsletter', ProRMTheme::TEXTDOMAIN) ?></h3></div>
        <div class="cat-news-holder">
            <?php echo ProRMForms::handleForm('newsletter', __('<p>Thank you for subscription.</p>', ProRMTheme::TEXTDOMAIN)) ?>

        </div>


    </div>

    <div style="margin-top:40px;">
        <?php  if(pll_current_language('slug') == 'en'){ ?>
            <a href="https://www.facebook.com/promx.en?ref=bookmarks" target="_blank" style="text-decoration: none;">
                <img src="<?php echo get_template_directory_uri(); ?>/images/newsroom-img/facebook.jpg">
            </a>

            <a href="https://twitter.com/proRM_en" target="_blank" style="text-decoration: none;">
                <img  style="margin-left:3px;"  src="<?php echo get_template_directory_uri(); ?>/images/newsroom-img/twitter.jpg">
            </a>

            <a href="https://www.youtube.com/channel/UCT1jnwo5wAsb4SJ-s8YFsag" target="_blank" style="text-decoration: none;">
                <img  style="margin-left:2px;"  src="<?php echo get_template_directory_uri(); ?>/images/newsroom-img/youtube.jpg">
            </a>

            <a href="https://www.linkedin.com/company/promx-gmbh" target="_blank" style="text-decoration: none;">
                <img  style="margin-left:3px;"  src="<?php echo get_template_directory_uri(); ?>/images/newsroom-img/linkedin.jpg">
            </a>

            <a href="https://plus.google.com/u/0/b/104762463130763371022/+PrormNet-Business-Solutions/posts" target="_blank" style="text-decoration: none;">
                <img  style="margin-left:2px;"  src="<?php echo get_template_directory_uri(); ?>/images/newsroom-img/google.jpg">
            </a>

            <a href="http://feeds.feedburner.com/ProMX-Newsroom" target="_blank" style="text-decoration: none;">
                <img  style="margin-left:3px;" src="<?php echo get_template_directory_uri(); ?>/images/newsroom-img/social.jpg">
            </a>
        <?php } else { ?>
            <a href="https://www.facebook.com/promx.de?ref=bookmarks" target="_blank" style="text-decoration: none;">
                <img src="<?php echo get_template_directory_uri(); ?>/images/newsroom-img/facebook.jpg">
            </a>

            <a href="https://twitter.com/proMX_CRMexpert" target="_blank" style="text-decoration: none;">
                <img  style="margin-left:3px;"  src="<?php echo get_template_directory_uri(); ?>/images/newsroom-img/twitter.jpg">
            </a>

            <a href="https://www.youtube.com/channel/UCT1jnwo5wAsb4SJ-s8YFsag" target="_blank" style="text-decoration: none;">
                <img  style="margin-left:2px;"  src="<?php echo get_template_directory_uri(); ?>/images/newsroom-img/youtube.jpg">
            </a>

            <a href="https://www.linkedin.com/company/promx-gmbh" target="_blank" style="text-decoration: none;">
                <img  style="margin-left:3px;"  src="<?php echo get_template_directory_uri(); ?>/images/newsroom-img/linkedin.jpg">
            </a>

            <a href="https://plus.google.com/u/0/b/104762463130763371022/+PrormNet-Business-Solutions/posts" target="_blank" style="text-decoration: none;">
                <img  style="margin-left:2px;"  src="<?php echo get_template_directory_uri(); ?>/images/newsroom-img/google.jpg">
            </a>

            <a href="http://feeds.feedburner.com/ProMX-Newsroom" target="_blank" style="text-decoration: none;">
                <img  style="margin-left:3px;" src="<?php echo get_template_directory_uri(); ?>/images/newsroom-img/social.jpg">
            </a>
        <?php } ?>
    </div>
</div>
</div></div></div></div></div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
