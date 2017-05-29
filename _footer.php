<?php
/** @var ProRMSocial $social */
$social = Registry::get('social');
/** @var ProRMSettings $settings */
$settings = Registry::get('settings');
?>
<footer>

    <div class="container">


        <div class="row ">
            <div class="col-md-3 ">
                <?php logo_slider(); ?>
            </div>
    </div>
        <div class="row second-row " id="TextFooter">
            <div class="col-md-3 ">


                <?php if($_SERVER['REQUEST_URI'][1]=='e'){?>
                Project Management
                </br>
                </br>
                <?php }?>
                <?php if($_SERVER['REQUEST_URI'][1]=='d'){?>
                    Projektmanagement
                    </br>
                    </br>
                <?php }?>
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'footer-1',
                    'fallback_cb' => false
                ));
                ?>
            </div>
            <div class="col-md-3 ">
                <?php if($_SERVER['REQUEST_URI'][1]=='e'){?>
                    Resource Management
                    </br>
                    </br>
                <?php }?>
                <?php if($_SERVER['REQUEST_URI'][1]=='d'){?>
                    Ressourcenmanagement
                    </br>
                    </br>
                <?php }?>
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'footer-2',
                    'fallback_cb' => false
                ));
				?>





            </div>
            <div class="col-md-3 ">
                <?php if($_SERVER['REQUEST_URI'][1]=='e'){?>
                    Activity Management
                    </br>
                    </br>
                <?php }?>
                <?php if($_SERVER['REQUEST_URI'][1]=='d'){?>
                    Leistungsmanagement
                    </br>
                    </br>
                <?php }?>
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'footer-3',
                    'fallback_cb' => false
                ));
                ?>
            </div>
            <div class="col-md-3">
                <?php if($_SERVER['REQUEST_URI'][1]=='e'){?>
                   Invoice Management
                    </br>
                    </br>
                <?php }?>
                <?php if($_SERVER['REQUEST_URI'][1]=='d'){?>
                    Rechnungsmanagement
                    </br>

                    </br>

                <?php }?>
                <?php


                wp_nav_menu(array(
                    'theme_location' => 'footer-4',
                    'fallback_cb' => false
                ));
				?>
				</br></br>
						   <?php if($_SERVER['REQUEST_URI'][1]=='d'){?>
                   Vertriebsmanagement</br></br>
				   <a href="http://prorm.net/de/anwendungen/der_prorm_vertriebsassistent/" style="font-size:0.778em">Der proRM-Vertriebs­assistent</a>

                <?php }?>

				   <?php if($_SERVER['REQUEST_URI'][1]=='e'){?>
                   Sales Management</br></br>
				   <a href="http://prorm.net/en/applications/prorm-sales-assistant/" style="font-size:0.778em">proRM Sales Assistant</a>

                <?php }?>

                <?php if($_SERVER['REQUEST_URI'][1]=='d'){?>
                <div class="social-links" style="margin-top:60px;">
                    <?php if (is_active_sidebar('social-icons')) { ?>
                        <?php dynamic_sidebar('social-icons'); ?>
                    <?php } ?>

                </div>
				 <?php } ?>

				    <?php if($_SERVER['REQUEST_URI'][1]=='e'){?>
                <div class="social-links" style="margin-top:35px;">
                    <?php if (is_active_sidebar('social-icons')) { ?>
                        <?php dynamic_sidebar('social-icons'); ?>
                    <?php } ?>

                </div>
				 <?php } ?>

            </div>

        </div>

        <div class="row second-row" id="mobileSocial">

            <div class="col-md-3" align="center">

                <div class="social-links">
                    <?php if (is_active_sidebar('social-icons')) { ?>
                        <?php dynamic_sidebar('social-icons'); ?>
                    <?php } ?>

                </div>
            </div>

        </div>

        <div class="row second-row" id="legalContent">
            <div class="col-sm-10 col-sm-offset-3">
                <div class="legal-content">
                    <?php echo $settings->getOption('legal_copyright_text') ?>
                    <?php ProRMTheme::showLegalPages(); ?>
                </div>
            </div>

        </div>
    </div>
</footer>

<?php get_template_part('navbar', 'bottom'); ?>

<?php wp_footer(); ?>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

<script src="<?php echo get_template_directory_uri(); ?>/js/jquery-ui-1.10.4.custom.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.cookie.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/main.js?v=1.0"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/landing.js"></script>
<div id="fullpage-dialog-box" style="display: none">&nbsp;</div>
</body>
</html>
