


<div class="col-lg-4 col-md-6 col-xs-12 col-sm-12 newsroom-rightcol">
    <div class="right-block-fixed">
        <?php  if(pll_current_language('slug') == 'en'){ ?>
            <h3 class="title-right-news" style="font-size:1.2em;">You can always learn more</h3>
        <? } else { ?>
            <h3 class="title-right-news" style="font-size:1.2em;">Sie können immer mehr erfahren</h3>
        <? } ?>
        <?php  if(pll_current_language('slug') == 'en'){ ?>
            <div class="right-block-first right-block-first">
                <img src="<?php echo get_template_directory_uri(); ?>/images/newsroom-img/icon_news_after.png">
                <center><p class="text-right-first">Newsroom</p></center>

            </div>

            <div  class="right-block-second-link right-block-second">
                <a style="text-decoration: none;" href="<?php echo get_site_url(); ?>/en/technology-blog/">
                    <img  class="right-block-img" src="<?php echo get_template_directory_uri(); ?>/images/newsroom-img/blog_icon_before.png"
                          onmouseover="this.src='<?php echo get_template_directory_uri(); ?>/images/newsroom-img/blog_icon_after.png';"
                          onmouseout="this.src='<?php echo get_template_directory_uri(); ?>/images/newsroom-img/blog_icon_before.png';">
                    <p class="text-right-second">Technology Blog</p>
                </a>
            </div>

        <?php } else {?>

            <div class="right-block-first ">
                <img src="<?php echo get_template_directory_uri(); ?>/images/newsroom-img/icon_news_after.png">
                <center><p class="text-right-first" >Newsroom</p></center>

            </div>

            <div class="right-block-second-link right-block-second">
                <a style="text-decoration: none;" href="<?php echo get_site_url(); ?>/de/technologie-blog/">
                    <img  class="right-block-img" src="<?php echo get_template_directory_uri(); ?>/images/newsroom-img/blog_icon_before.png"
                          onmouseover="this.src='<?php echo get_template_directory_uri(); ?>/images/newsroom-img/blog_icon_after.png';"
                          onmouseout="this.src='<?php echo get_template_directory_uri(); ?>/images/newsroom-img/blog_icon_before.png';">
                    <p class="text-right-second">Technologie-Blog</p>
                </a>
            </div>
        <?php } ?>

 
 
        <div class="category-block" id="category-subscribe">
            <div class="category-subscribe-title">
                <h3 class="cat-title"><?php _e('Subscribe to newsletter', ProRMTheme::TEXTDOMAIN) ?></h3>
            </div>
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
</div>