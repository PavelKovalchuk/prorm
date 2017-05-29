<?php


?>
<nav class="navbar-top navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container-fluid">
        <div class="row navbar-top-row">
            <div class="col-xs-8 col-md-10"> <!-- was col-md-6 for left menu | col-md-8 for top -->
                <div class="menu-switcher navbar-top-item"></div>
                <div class="logos-holder navbar-top-item">
                    <div class="logo logo-prorm">
						
                        <a href="<?php echo esc_url(site_url()); ?>">
                            <img src="<?php echo ProRMTheme::url(); ?>/images/logo-prorm-new.png"
                                 alt="<?php bloginfo('name'); ?>">
                            <?php /* <img src="<?php echo ProRMTheme::url(); ?>/images/logo-prorm-new.png"
                                 width="124" height="45" alt="<?php bloginfo('name'); ?>"> */ ?>
                        </a>
                    </div>
                </div>
                <!-- added top menu -->
                 <?php  if(!is_page('3800')):?>

                <ul class="top-menu">
                    <?php ProRMTheme::showSideMenu(); ?>
                </ul>
                <?php endif;?>
            </div>
            <div class="col-xs-4 col-md-2"> <!-- was cal-md-6 for left menu | col-md-4 for top-->
                <div class="lang-switcher-holder">
                    <?php echo ProRMTheme::getLangSwitcher(); ?>
                </div>
            </div>
        </div>
    </div>
</nav>