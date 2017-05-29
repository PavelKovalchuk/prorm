<?php
//$blogCategoryIds = ProRMTheme::getBlogIds();
//$limit = 2;
//$categories = ProRMNews::getNewsByCategories($limit, array('exclude' => $blogCategoryIds));

get_header();

?>



<div class="cards-holder slider-top verticals-slider" >
    <div class="card active card-1" style="display: block; background-image: url(<?php echo get_site_url(); ?>/wp-content/themes/prorm/images/newsroom-img/blog_bg.jpg); background-size: cover;">
        <?php  if(pll_current_language('slug') == 'en'){ ?>
            <div class="card-bg-small visible-xs" style="height: 211px; background-image: url(<?php echo get_site_url(); ?>/wp-content/themes/prorm/images/newsroom-img/blog_banner_mb.jpg);" data-initial-width="600" data-initial-height="211">
                <div style="font-weight: 300;font-style: italic;font-size:1.8em;color:#791239;top:5%;position:relative;margin-left: 5%;">Technology Blog </div>
            </div>

            <div class="visible-xs" style="padding:20px;">
                <p>
			<span style="position:relative;font-weight: 100;font-style: italic;font-size:1.5em;">

            </span>
                </p>

               
            </div>

            <div class="visible-sm" style="padding:20px;">
                <span style="font-weight: 300;font-style: italic;font-size:2.5em;color:#791239;top:5%;position:relative;">Technology Blog </span>
                <p>
                     <span style="position:relative;font-weight: 100;font-style: italic;font-size:2em;color:#791239;top:20px;">

                     </span>
                </p>

            </div>





        <?php } else { ?>
            <div class="card-bg-small visible-xs " style="height: 211px; background-image: url(<?php echo get_site_url(); ?>/wp-content/themes/prorm/images/newsroom-img/blog_banner_mb.jpg);" data-initial-width="600" data-initial-height="211">
                <div style="font-weight: 300;font-style: italic;font-size:1.8em;color:#791239;top:5%;position:relative;margin-left: 5%;">Technologie-Blog </div>
            </div>

            <div class="visible-xs" style="padding:20px;">
                <p>
                        <span style="position:relative;font-weight: 100;top:-10px;font-style: italic;font-size:1.5em;">

                        </span>
                </p>

               

            </div>


            <div class="visible-sm" style="padding:20px;">
                <span class="visible-sm" style="font-weight: 300;font-style: italic;font-size:2.5em;color:#791239;top:5%;position:relative;">Technologie-Blog </span>
                <p>
                        <span style="position:relative;color:#791239;font-weight: 100;top:20px;font-style: italic;font-size:2em;">

                        </span>
                </p>


            </div>

        <?php } ?>


        <div class="card-bg visible-md visible-lg" style="background-image: url(<?php echo get_site_url(); ?>/wp-content/themes/prorm/images/newsroom-img/blog_banner.jpg);"      data-initial-width="1600" data-initial-height="540">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-9 card-col">
                        <?php  if(pll_current_language('slug') == 'en'){ ?>
                            <span class="news-text visible-md visible-lg" style="position:relative;color:#791239;top:40px;font-weight: 300;font-style: italic;font-size:50px;">Technology Blog</span>

                        <?php } else { ?>
                            <span class="news-text visible-md visible-lg" style="position:relative;color:#791239;font-weight: 300;top:40px;font-style: italic;font-size:50px;">Technologie-Blog </span>

                        <?php } ?>
                        <div class="news-textholder visible-md visible-lg">
                            <p>
                                <?php  if(pll_current_language('slug') == 'en'){ ?>
                                    <span class="vertical-slide-text" style="position:relative;color:#454545;font-weight: 100;top:50px;font-style: italic;">

                                    </span>
                                <?php } else { ?>
                                    <span class="vertical-slide-text" style="position:relative;color:#454545;font-weight: 100;top:50px;font-style: italic;">
                                        </span>
                                <?php } ?>
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>


<div class="container news-page">
    <div class="row">
        <div class="col-sm-12">
            <div id="content">

                <?php ProRMNews::showPageForPosts('content'); ?>
                <div  class="row news-feed" id="news-feed-content">

                    <?php get_template_part('parts/newsroom/custom-blog-block'); ?>
                    <div class="clear"></div>
                    <!--  <?php get_template_part('parts/newsroom/social'); ?> -->
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
