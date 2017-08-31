<?php
/** @var ProRMSocial $social */
$social = Registry::get('social');
/** @var ProRMSettings $settings */
$settings = Registry::get('settings');

$sliders = ProRmSlider::getPublishedSliders();

$pll_current_language = pll_current_language();
?>

</div>
<!-- footer -->
<footer id="footer">
    <div class="container">
        
        <div class="footer-outer">
            
            <ul class="list-links">
                <li><span class="copyright"><?php echo $settings->getOption('legal_copyright_text') ?></span></li>
                <?php ProRMTheme::showLegalPages(); ?>
            </ul>
            <ul class="social-networks">
                <?php if ($pll_current_language == 'en') : ?>
                    <li><a target="_blank" href="<?php echo $settings->getOption('social_facebook_link_en') ?>" class="icon-facebook"></a></li>
                    <li><a target="_blank" href="<?php echo $settings->getOption('social_twitter_link_en') ?>" class="icon-twitter"></a></li>
                    <li><a target="_blank" href="<?php echo $settings->getOption('social_youtube_link_en') ?>" class="icon-youtube"></a></li>
                <?php elseif ($pll_current_language == 'de') : ?>
                    <li><a target="_blank" href="<?php echo $settings->getOption('social_facebook_link_de') ?>" class="icon-facebook"></a></li>
                    <li><a target="_blank" href="<?php echo $settings->getOption('social_twitter_link_de') ?>" class="icon-twitter"></a></li>
                    <li><a target="_blank" href="<?php echo $settings->getOption('social_youtube_link_de') ?>" class="icon-youtube"></a></li>
                <?php elseif ($pll_current_language == 'es') : ?>
                    <li><a target="_blank" href="<?php echo $settings->getOption('social_facebook_link_es') ?>" class="icon-facebook"></a></li>
                    <li><a target="_blank" href="<?php echo $settings->getOption('social_twitter_link_es') ?>" class="icon-twitter"></a></li>
                    <li><a target="_blank" href="<?php echo $settings->getOption('social_youtube_link_es') ?>" class="icon-youtube"></a></li>
                <?php endif; ?>
                <li><a target="_blank" href="<?php echo $settings->getOption('social_linkedin_link') ?>" class="icon-linkedin"></a></li>
                <li><a target="_blank" href="<?php echo $settings->getOption('social_xing_link_common') ?>" class="icon-xing"></a></li>
            </ul>
            
        </div>    
    </div>
</footer>
<?php wp_footer(); ?>
<div class="session_block">
    <div class="container">
        <p class="text-block"><?= __('I accept that this site uses cookies for analysis, personalized content and advertisment.', ProRMTheme::TEXTDOMAIN); ?></p>
        <div class="right-block"><?php
            if ($pll_current_language == 'en') {
                $url = get_site_url() . '/en/privacy-and-cookies/';
            } 
            elseif ($pll_current_language == 'es') {
                $url = get_site_url() . '/es/privacidad-y-cookies/';
            }
            else {
                $url = get_site_url() . '/datenschutz/';
            }?>
            <a href="<?= $url; ?>"><?= __('Learn more', ProRMTheme::TEXTDOMAIN); ?></a>
            <button class="session_btn btn" type="button"><img src="<?php echo ProRMTheme::url(); ?>/images/close-btn.png" alt="close button"></button>
        </div>
    </div>

</div>

 <?php if(is_live_site()){ get_yandex_script(); } ?>

</body>
</html>