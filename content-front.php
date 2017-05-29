<?php
global $post;


ProRMHelper::handleLangRedirection();

$frontpageCategories = ProRMFrontPage::getCategories($post->ID);


/*$args = array(
    'category' => '5226,5269',
);*/

$posts_array = get_posts( $args );



$recentNewsDisplayOptions = array(
    'read_more' => true,
    'read_more_text' => __('more', ProRMTheme::TEXTDOMAIN),
);

get_header();
get_template_part('cards-holder');
?>


<!--<div id="fancybox-overlay" style="display: none; background-color: rgb(119, 119, 119);opacity:0.7;height:100%;position:fixed;width: 100%;"></div>
<div id="fancybox-wrap" style="left:13%;top:2% !important; position: fixed;">
<div id="fancybox-outer">
<div id="fancybox-content" style="border-width: 10px;">



<div id="first-video-block" style="height:85%;">
<iframe id="first-video" class="video-front" style="width: 100%;height:100%;padding: 0;margin-top: 0px;border: none;outline: none;line-height: 0;vertical-align: top;" src="//www.youtube.com/embed/zno2NgBbBbo"></iframe>
</div>

<div id="second-video-block" style="display:none;height:85%;">
<iframe id="second-video" class="video-front" style="height:100%;width: 100%;padding: 0;margin-top: 0px;border: none;outline: none;line-height: 0;vertical-align: top;" src="//www.youtube.com/embed/uyII_GxtjtU"></iframe>
</div>

<?php if (pll_current_language('slug') == 'en') { ?>

<div style="position:relative;top:5%;">
<span style="float:left;">Do you want to know more about security in the Cloud?</span>
<p class="btn-row" style="position:relative;top:-5px;left:20px;float:left;">
              <a href="http://promx.net/en/contact-us/" class="pro-btn" ><span>Contact us!</span></a>
            </p>
			
			<p id="video-button" style="float:right;color: #791239;cursor:pointer;">
                Watch the next Cloud Video
            </p>
			
			</div>
			<?php } else { ?>
			<div style="position:relative;top:5%;">
<span style="float:left;">Möchten Sie mehr über die Sicherheit in der Cloud erfahren? </span>
<p class="btn-row" style="position:relative;top:-5px;left:20px;float:left;">
               <a href="http://promx.net/de/kontakt/"  class="pro-btn"> <span>Kontaktieren Sie uns!</span></a>
            </p>
			
			<p id="video-button" style="float:right;color: #791239;cursor:pointer;">
                Schauen Sie sich das nächste Video an
            </p>
			
			</div>
			<?php } ?>
			
</div>
<a id="fancybox-close" class="close-video" style="display: inline;"></a>
</div>


</div>
</div> -->

<div id="fancybox-overlay"  style="display: none; background-color: rgb(119, 119, 119);opacity:0.7;height:100%;position:fixed;width: 100%;"></div>
<div id="fancybox-wrap" style="left:13%;top:2% !important; position: fixed;">
<div id="fancybox-outer" style="border:1px solid #791239;">
<div id="fancybox-content"  style="border-width: 10px;">




<?php if (pll_current_language('slug') == 'en') { ?>

<div style="position:relative;top:5%;">

			

			
			</div>
			<?php } else { ?>
			<div style="position:relative;top:5%;">


			
			</div>
			<?php } ?>
			
</div>
<a id="fancybox-close" class="close-video-home" style="display: inline;"></a>
</div>


</div>
</div>

<div class="container newsroom">
	<?php if (pll_current_language('slug') == 'en') { ?>
		<h2>Welcome to proMX World!</h2>
	<?php } else { ?>
		<h2>Willkommen in der proMX Welt!</h2>
	<?php } ?>
	</div>

  <div class="container newsroom">
		<div class="row bordered-top-row">
			<div class="col-sm-4 col-xs-12" style="margin-bottom: 30px;">
				<div class="video-home" style="cursor:pointer;text-align:center;background-image:url(http://promx.net/wp-content/themes/prorm/images/prev.jpg);height:179px;width: 314px;">
				</div>
			</div>
			<div class="col-sm-8 col-xs-12">
			<?php if (pll_current_language('slug') == 'en') { ?>
				<h3 style="margin-top:-5px;"><p>Being a Microsoft Partner is very important to the proMX-Team and we are proud of our Gold Competency in Customer Relationship Management and Gold Competency in Cloud Customer Relationship Management.
				</p>
				<p>
			
proMX provides customers with Microsoft CRM solutions, organizing the full spectrum of CRM consultancy and training for employees. Additionally we are developing our own software products integrated into Microsoft Dynamics CRM using the latest and most modern Microsoft technologies.</p>
<p> Do you want to know more? </p></h3>
				<div style="float:right;"><a href="http://promx.net/en/actions/contact-us/" class="pro-btn"><span>Contact us now</span></a></div>
			<?php } else { ?>
				<h3 style="margin-top:-5px;"><p>Eine Microsoft Partnerschaft bringt eine große 
				Verantwortung mit sich und deshalb sind wir stolz auf unsere Gold Kompetenzen in Customer Relationship Management sowie Cloud Customer Relationship Management.
</p>
<p>Wir helfen unseren Kunden mit persönlich zugeschnittenen Microsoft Dynamics CRM Lösungen und sind auch kompetenter Ansprechpartner für alle weiteren Themen rund um Dynamics CRM. Zusätzlich entwickeln wir als Software-Haus unsere eigenen Produkte, welche komplett in Microsoft Dynamics CRM integriert werden. Dabei greifen wir stets auf die aktuellsten Microsoft Technologien zurück.
</p>
<p>Möchten Sie noch mehr wissen? </p></h3>
				<div style="float:right;"><a href="http://promx.net/de/kontakt/" class="pro-btn"><span>Kontaktieren Sie uns</span></a></div>
			<?php } ?>
			</div>
		</div>
	</div> 

    <div class="container newsroom">
        <div class="row">
            <div class="col-sm-12">
                <?php
                if (have_posts()) {
                    while (have_posts()) {
                        the_post();
                        the_content();
                    }
                }
                ?>
            </div>
        </div>
        <div class="row bordered-top-row">
            <?php foreach ($frontpageCategories as $idx => $categoryId) { ?>

            <?php if ($idx > 0 && $idx % 2 == 0) { ?>
        </div>
        <div class="row bordered-news-items">
            <?php } ?>
            <div class="col-md-12 news-row-front">
                <?php ProRMNews::showRecentNews(2, $categoryId, $recentNewsDisplayOptions ) ?>
            </div>
            <?php } ?>
        </div>
    </div>


<?php get_sidebar(); ?>
<?php get_footer(); ?>