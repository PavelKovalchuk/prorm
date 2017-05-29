<?php
global $post;

?>
<?php $categories = get_the_category(); ?>
<?php foreach ($categories as $category) {
$cat =  $category->cat_name;
if($cat=="News" || $cat=="Meldungen") { ?>

<div class="col-lg-4 col-md-6 col-xs-12 col-sm-12 newsroom-rightcol" id="custom-news-right-block">
    
	<?php } else if ($cat=="Technology Blog" || $cat=="Blog") {?>
	
    <div class="col-lg-4 col-md-6 col-xs-12 col-sm-12 newsroom-rightcol" id="custom-blog-right-block">
        <?php }} ?>


        <?php  if(pll_current_language('slug') == 'en'){ ?>
            <h3 class="title-right-news" style="font-size:1.2em;">You can always learn more</h3>
        <? } else { ?>
            <h3 class="title-right-news" style="font-size:1.2em;">Sie können immer mehr erfahren</h3>
        <? } ?>
        <?php  if(pll_current_language('slug') == 'en'){ ?>
            <div class="right-block-first-link" style="float:left;padding-bottom:10px;">
                <a style="text-decoration: none;" href="<?php echo get_site_url(); ?>/en/promx-newsroom/">
                    <?php $categories = get_the_category(); ?>
                    <?php foreach ($categories as $category) {
                        $cat =  $category->cat_name;
                        if($cat=="News" || $cat=="Meldungen") { ?>
                            <img src="<?php echo get_template_directory_uri(); ?>/images/newsroom-img/icon_news_after.png">
                            <center><p style="padding-top:10px;color:#6c1234;font-weight: 500;">Newsroom</p></center>
                        <?php } else if($cat=="Technology Blog" || $cat=="Blog") { ?>
                            <img src="<?php echo get_template_directory_uri(); ?>/images/newsroom-img/icon_news_before.png"
                                 onmouseover="this.src='<?php echo get_template_directory_uri(); ?>/images/newsroom-img/icon_news_after.png';"
                                 onmouseout="this.src='<?php echo get_template_directory_uri(); ?>/images/newsroom-img/icon_news_before.png';"
                                >
                            <center><p style="padding-top:10px;color:#6c1234;font-weight: 300;">Newsroom</p></center>
                        <?php } } ?>
                </a>
            </div>

            <div  class="right-block-second-link" style="float:left;padding-bottom:9px;">
                <a style="text-decoration: none;" href="<?php echo get_site_url(); ?>/en/technology-blog/">
                    <?php $categories = get_the_category(); ?>
                    <?php foreach ($categories as $category) {
                        $cat =  $category->cat_name;
                        if($cat=="News" || $cat=="Meldungen") { ?>
                            <img  style="margin-left:50px;" src="<?php echo get_template_directory_uri(); ?>/images/newsroom-img/blog_icon_before.png"
                                  onmouseover="this.src='<?php echo get_template_directory_uri(); ?>/images/newsroom-img/blog_icon_after.png';"
                                  onmouseout="this.src='<?php echo get_template_directory_uri(); ?>/images/newsroom-img/blog_icon_before.png';">
                            <p style="padding-top:10px;margin-left:50px;color:#6c1234;font-weight: 300;">Technology Blog</p>
                        <?php } else if($cat=="Technology Blog" || $cat=="Blog") {?>
                            <img  style="margin-left:50px;" src="<?php echo get_template_directory_uri(); ?>/images/newsroom-img/blog_icon_after.png">
                            <p style="padding-top:10px;margin-left:50px;color:#6c1234;font-weight: 500;">Technology Blog</p>
                        <?php  } } ?>
                </a>
            </div>

        <?php } else {?>
            <div  class="right-block-first-link"  style="float:left;padding-bottom:10px;">
                <a style="text-decoration: none;" href="<?php echo get_site_url(); ?>/de/der-promx-newsroom/">
                    <?php $categories = get_the_category(); ?>
                    <?php foreach ($categories as $category) {
                        $cat =  $category->cat_name;
                        if($cat=="News" || $cat=="Meldungen") { ?>
                            <img src="<?php echo get_template_directory_uri(); ?>/images/newsroom-img/icon_news_after.png">
                            <center><p style="padding-top:10px;color:#6c1234;font-weight: 500;">Newsroom</p></center>
                        <?php  } else if($cat=="Technology Blog" || $cat=="Blog") { ?>
                            <img src="<?php echo get_template_directory_uri(); ?>/images/newsroom-img/icon_news_before.png"
                                 onmouseover="this.src='<?php echo get_template_directory_uri(); ?>/images/newsroom-img/icon_news_after.png';"
                                 onmouseout="this.src='<?php echo get_template_directory_uri(); ?>/images/newsroom-img/icon_news_before.png';">
                            <center><p style="padding-top:10px;color:#6c1234;font-weight: 300;">Newsroom</p></center>
                        <?php } } ?>
                </a>
            </div>

            <div  class="right-block-second-link"  style="float:left;padding-bottom:9px;">
                <a style="text-decoration: none;" href="<?php echo get_site_url(); ?>/de/technologie-blog/">
                    <?php $categories = get_the_category(); ?>
                    <?php foreach ($categories as $category) {
                        $cat =  $category->cat_name;
                        if($cat=="News" || $cat=="Meldungen") { ?>
                            <img  style="margin-left:50px;" src="<?php echo get_template_directory_uri(); ?>/images/newsroom-img/blog_icon_before.png"
                                  onmouseover="this.src='<?php echo get_template_directory_uri(); ?>/images/newsroom-img/blog_icon_after.png';"
                                  onmouseout="this.src='<?php echo get_template_directory_uri(); ?>/images/newsroom-img/blog_icon_before.png';">
                            <p style="padding-top:10px;margin-left:50px;color:#6c1234;font-weight: 300;">Technologie-Blog</p>
                        <?php } else if($cat=="Technology Blog" || $cat=="Blog") {?>
                            <img  style="margin-left:50px;" src="<?php echo get_template_directory_uri(); ?>/images/newsroom-img/blog_icon_after.png">
                            <p style="padding-top:10px;margin-left:45px;color:#6c1234;font-weight: 400;">Technologie-Blog</p>
                        <?php } } ?>
                </a>
            </div>
        <?php } ?>



        <div class="category-block" id="category-subscribe" style="background-color: #f0f0f0;margin-top:15px;">
            <div class="category-subscribe-title" style="background-color:#f0f0f0;height:70px;"><h3 style="color:#000000;font-weight:300;font-size:27px;"><?php _e('Subscribe to newsletter', ProRMTheme::TEXTDOMAIN) ?></h3></div>
            <div class="cat-news-holder">
                <?php echo ProRMForms::handleForm('newsletter', __('<p>Thank you for subscription.</p>', ProRMTheme::TEXTDOMAIN)) ?>
            </div>
        </div>

      <!-- <?php  if($cat=="News" || $cat=="Meldungen") { ?>

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

        <?php } ?> -->


    </div>

