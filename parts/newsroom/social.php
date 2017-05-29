<?php
/** @var ProRMSocial $social */
$social = Registry::get('social');

$youtubeVideo = '//www.youtube.com/embed/2RjmOXHwtRw';

// for facebook setting
if (function_exists('pll_current_language')) {
    if(pll_current_language('slug') == 'de'){
        $facebook_cur_lang_setting = 'de_DE';
        $lang = 'de';
    } else {
        $facebook_cur_lang_setting = 'en_US';
        $lang = 'en';
    }
}
?>
<div id="fb-root"></div>
<script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/<?php echo $facebook_cur_lang_setting; ?>/all.js#xfbml=1&version=v2.0";
        console.log(js.src);
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>

<div class="col-lg-4 col-md-6">
    <div class="category-block social" id="category-facebook">
        <h3>
            <a href="<?php echo $social->getFacebookLink($lang); ?>"><?php _e('Facebook', ProRMTheme::TEXTDOMAIN) ?></a>
        </h3>
        <div class="cat-news-holder">
            <div class="news-item">
                <div class="fb-like-box"
                     data-width="280"
                     data-height="355"
                     data-href="<?php echo $social->getFacebookLink($lang); ?>"
                     data-colorscheme="light"
                     data-show-faces="false"
                     data-header="false"
                     data-stream="true"
                     data-show-border="false"></div>
            </div>
        </div>
        <div class="all-link">
            <p><a href="<?php echo $social->getFacebookLink($lang); ?>"><?php _e('To Profile', ProRMTheme::TEXTDOMAIN) ?></a></p>
        </div>
    </div>
</div>
<div class="col-lg-4 col-md-6">
    <div class="category-block social" id="category-twitter">
        <h3>
            <a href="<?php echo $social->getTwitterLink($lang); ?>"><?php _e('Twitter', ProRMTheme::TEXTDOMAIN) ?></a>
        </h3>
        <div class="cat-news-holder">
            <div class="news-item">
                <a class="twitter-timeline" height="350" width="273" href="<?php echo $social->getTwitterLink($lang); ?>" data-widget-id="<?php if($lang == 'de') { ?>442793228631146496<?php }else{?>502797922069536768<?php }?>">Tweets by @proRMSolution</a>
                <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
            </div>
        </div>
        <div class="all-link">
            <p><a href="<?php echo $social->getTwitterLink($lang); ?>"><?php _e('To Profile', ProRMTheme::TEXTDOMAIN) ?></a></p>
        </div>
    </div>
</div>
<div class="col-lg-4 col-md-6">
    <div class="category-block social" id="category-youtube">
        <h3>
            <a href="<?php echo $social->getYoutubeLink($lang); ?>"><?php _e('Youtube', ProRMTheme::TEXTDOMAIN) ?></a>
        </h3>
        <div class="cat-news-holder">
            <div class="news-item">
             
                <iframe width="100%" src="<?php echo $social->getYoutubeVideo($lang); ?>" frameborder="0" allowfullscreen></iframe>
              
            </div>
        </div>
        <div class="all-link">
            <p><a href="<?php echo $social->getYoutubeLink($lang); ?>"><?php _e('To Profile', ProRMTheme::TEXTDOMAIN) ?></a></p>
        </div>
    </div>
</div>