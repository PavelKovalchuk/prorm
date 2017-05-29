<section class="region">
    <div class="container">
        <p class="third-header-section"><?php _e('Our Offices', ProRMTheme::TEXTDOMAIN) ?></p>
        
        <?php
            $offices_first_block_text = get_field( "offices_first_block_text" );
            $offices_first_block_image = get_field( "offices_first_block_image" )["url"];
            $offices_first_block_alt = get_field( "offices_first_block_alt" );
            
            $offices_second_block_text = get_field( "offices_second_block_text" );
            $offices_second_block_image = get_field( "offices_second_block_image")["url"];
            $offices_second_block_alt = get_field( "offices_second_block_alt" );
            
            $offices_third_block_text = get_field( "offices_third_block_text" );
            $offices_third_block_image = get_field( "offices_third_block_image")["url"];
            $offices_third_block_alt = get_field( "offices_third_block_alt" );
            
            $offices_fourth_block_text = get_field( "offices_fourth_block_text" );
            $offices_fourth_block_image = get_field( "offices_fourth_block_image")["url"];
            $offices_fourth_block_alt = get_field( "offices_fourth_block_alt" );
            
            $settings = Registry::get('settings');
        
            $general_alt =  $settings->getOption('general_alt_text_for_images');
        
        
        ?>

        <ul class="tabset">
            <?php if (is_active_sidebar('offices-europa')) { ?>
                <li class="active-tab">
                    <a href="#tab3">
                        <span class="img-wrapper">
                            <img src="<?php echo $offices_first_block_image; ?>" alt="<?php echo $offices_first_block_alt ? $offices_first_block_alt : $general_alt; ?>">
                            <img class="hidden" src="<?php echo $offices_first_block_image; ?>" alt="<?php echo $offices_first_block_alt ? $offices_first_block_alt : $general_alt; ?>"></span>
                        <p><?php echo $offices_first_block_text; ?></p>
                    </a>
                </li>
            <?php } ?>
            <?php if (is_active_sidebar('offices-namerica')) { ?>
                <li>
                    <a href="#tab4">
                        <span class="img-wrapper">
                            <img src="<?php echo $offices_second_block_image; ?>" alt="<?php echo $offices_second_block_alt ? $offices_second_block_alt : $general_alt; ?>">
                            <img class="hidden" src="<?php echo $offices_second_block_image; ?>" alt="<?php echo $offices_second_block_alt ? $offices_second_block_alt : $general_alt; ?>">
                        </span>
                        <p><?php echo $offices_second_block_text; ?></p>
                    </a>
                </li>
            <?php } ?>
            <?php if (is_active_sidebar('offices-australia')) { ?>
                <li>
                    <a href="#tab5">
                        <span class="img-wrapper">
                            <img src="<?php echo $offices_third_block_image; ?>" alt="<?php echo $offices_third_block_alt ? $offices_third_block_alt : $general_alt; ?>">
                            <img class="hidden" src="<?php echo $offices_third_block_image; ?>" alt="<?php echo $offices_third_block_alt ? $offices_third_block_alt : $general_alt; ?>">
                        </span>
                        <p><?php echo $offices_third_block_text; ?></p>
                    </a>
                </li>
            <?php } ?>
            <?php if (is_active_sidebar('offices-africa')) { ?>
                <li>
                    <a href="#tab6">
                        <span class="img-wrapper">
                            <img src="<?php echo $offices_fourth_block_image; ?>" alt="<?php echo $offices_fourth_block_alt ? $offices_fourth_block_alt : $general_alt; ?>">
                            <img class="hidden" src="<?php echo $offices_fourth_block_image; ?>" alt="<?php echo $offices_fourth_block_alt ? $offices_fourth_block_alt : $general_alt; ?>">
                        </span>
                        <p><?php echo $offices_fourth_block_text; ?></p>
                    </a>
                </li>
            <?php } ?>
        </ul>
    </div>
    <div class="tab-content">
        <div id="tab3">
            <ul class="office-info">
                <li>
                    <div class="container">
                        <div class="col"><p><?php echo __('Location' , ProRMTheme::TEXTDOMAIN) ?></p></div>
                        <div class="col"><p><?php echo __('Company' , ProRMTheme::TEXTDOMAIN) ?></p></div>
                        <div class="col"><p><?php echo __('Contact' , ProRMTheme::TEXTDOMAIN) ?></p></div>
                    </div>
                </li>

                <?php
                    if (is_active_sidebar('offices-europa')) {
                        dynamic_sidebar('offices-europa');
                    }
                ?>


            </ul>
        </div>
        <div id="tab4">
            <ul class="office-info">
                <li>
                    <div class="container">
                        <div class="col"><?php echo __('Location' , ProRMTheme::TEXTDOMAIN) ?></div>
                        <div class="col"><?php echo __('Company' , ProRMTheme::TEXTDOMAIN) ?></div>
                        <div class="col"><?php echo __('Contact' , ProRMTheme::TEXTDOMAIN) ?></div>
                    </div>
                </li>

                <?php
                    if (is_active_sidebar('offices-namerica')) {
                        dynamic_sidebar('offices-namerica');
                    }
                ?>

            </ul>
        </div>
        <div id="tab5">
            <ul class="office-info">
                <li>
                    <div class="container">
                        <div class="col"><?php echo __('Location' , ProRMTheme::TEXTDOMAIN) ?></div>
                        <div class="col"><?php echo __('Company' , ProRMTheme::TEXTDOMAIN) ?></div>
                        <div class="col"><?php echo __('Contact' , ProRMTheme::TEXTDOMAIN) ?></div>
                    </div>
                </li>

                <?php
                    if (is_active_sidebar('offices-australia')) {
                        dynamic_sidebar('offices-australia');
                    }
                ?>

            </ul>
        </div>
        <div id="tab6">
            <ul class="office-info">
                <li>
                    <div class="container">
                        <div class="col"><?php echo __('Location' , ProRMTheme::TEXTDOMAIN) ?></div>
                        <div class="col"><?php echo __('Company' , ProRMTheme::TEXTDOMAIN) ?></div>
                        <div class="col"><?php echo __('Contact' , ProRMTheme::TEXTDOMAIN) ?></div>
                    </div>
                </li>

                <?php
                    if (is_active_sidebar('offices-africa')) {
                        dynamic_sidebar('offices-africa');
                    }
                ?>

            </ul>
        </div>
    </div>
</section>