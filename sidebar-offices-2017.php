<section class="region offices-block info-block text-bigger-block">
    <div class="container">
        <h2 class="center text-bigger"><?php _e('Our Offices', ProRMTheme::TEXTDOMAIN) ?></h2>
        
        <?php
           
            $offices = get_fields();
                    
            $settings = Registry::get('settings');
        
            $general_alt =  $settings->getOption('general_alt_text_for_images');
        
        
        ?>

        <ul class="tabset">
            <?php if (is_active_sidebar('offices-europa')) { ?>
                <li class="active-tab">
                    <a href="#tab3">
                        <div class="img-wrapper">
                            <img src="<?php echo $offices["offices_first_block_image"]["url"]; ?>" alt="<?php echo $offices["offices_first_block_alt"] ? $offices["offices_first_block_alt"] : $general_alt; ?>">
                        </div>    
                        <h3 class="office-text"><?php echo $offices["offices_first_block_text"]; ?></h3>
                        
                    </a>
                </li>
            <?php } ?>
            <?php if (is_active_sidebar('offices-namerica')) { ?>
                <li>
                    <a href="#tab4">
                        <div class="img-wrapper">
                            <img src="<?php echo $offices["offices_second_block_image"]["url"]; ?>" alt="<?php echo  $offices["offices_second_block_alt"] ?  $offices["offices_second_block_alt"] : $general_alt; ?>">
                           
                        </div>
                        <h3 class="office-text"><?php echo $offices["offices_second_block_text"]; ?></h3>
                    </a>
                </li>
            <?php } ?>
            <?php if (is_active_sidebar('offices-australia')) { ?>
                <li>
                    <a href="#tab5">
                        <div class="img-wrapper">
                            <img src="<?php echo $offices["offices_third_block_image"]["url"]; ?>" alt="<?php echo $offices["offices_third_block_alt"] ? $offices["offices_third_block_alt"] : $general_alt; ?>">
                           
                        </div>
                        <h3 class="office-text"><?php echo $offices["offices_third_block_text"]; ?></h3>
                    </a>
                </li>
            <?php } ?>
            <?php if (is_active_sidebar('offices-africa')) { ?>
                <li>
                    <a href="#tab6">
                        <div class="img-wrapper">
                            <img src="<?php echo $offices["offices_fourth_block_image"]["url"]; ?>" alt="<?php echo $offices["offices_fourth_block_alt"] ? $offices["offices_fourth_block_alt"] : $general_alt; ?>">
                           
                        </div>
                        <h3 class="office-text"><?php echo $offices["offices_fourth_block_text"]; ?></h3>
                    </a>
                </li>
            <?php } ?>
        </ul>
    </div>
    <div class="tab-content">
        <div class="container">
        <div id="tab3">

            <table class="rwd-table">
                <tr>
                    <th><?php echo __('Location' , ProRMTheme::TEXTDOMAIN) ?></th>
                    <th><?php echo __('Company' , ProRMTheme::TEXTDOMAIN) ?></th>
                    <th><?php echo __('Contact' , ProRMTheme::TEXTDOMAIN) ?></th>
                    
                </tr>
                   <?php
                    if (is_active_sidebar('offices-europa')) {
                        dynamic_sidebar('offices-europa');
                    }
                    ?>
                  
            </table>

        </div>
        <div id="tab4">
            <table class="rwd-table">
                <tr>
                    <th><?php echo __('Location' , ProRMTheme::TEXTDOMAIN) ?></th>
                    <th><?php echo __('Company' , ProRMTheme::TEXTDOMAIN) ?></th>
                    <th><?php echo __('Contact' , ProRMTheme::TEXTDOMAIN) ?></th>
                    
                </tr>
                   <?php
                    if (is_active_sidebar('offices-namerica')) {
                        dynamic_sidebar('offices-namerica');
                    }
                    ?>
                  
            </table>
        </div>
        <div id="tab5">
            <table class="rwd-table">
                <tr>
                    <th><?php echo __('Location' , ProRMTheme::TEXTDOMAIN) ?></th>
                    <th><?php echo __('Company' , ProRMTheme::TEXTDOMAIN) ?></th>
                    <th><?php echo __('Contact' , ProRMTheme::TEXTDOMAIN) ?></th>
                    
                </tr>
                   <?php
                    if (is_active_sidebar('offices-australia')) {
                        dynamic_sidebar('offices-australia');
                    }
                    ?>
                  
            </table>
        </div>
        <div id="tab6">
            <table class="rwd-table">
                <tr>
                    <th><?php echo __('Location' , ProRMTheme::TEXTDOMAIN) ?></th>
                    <th><?php echo __('Company' , ProRMTheme::TEXTDOMAIN) ?></th>
                    <th><?php echo __('Contact' , ProRMTheme::TEXTDOMAIN) ?></th>
                    
                </tr>
                   <?php
                    if (is_active_sidebar('offices-africa')) {
                        dynamic_sidebar('offices-africa');
                    }
                    ?>
                  
            </table>
        </div>
        
        </div>
    </div>
</section>