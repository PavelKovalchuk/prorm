<?php
$formSubmitted = Tpl::get('form_submitted');
$id_form = Tpl::get('id_form');
$formErrorMessage = Tpl::get('form_error_message');
$formSuccessMessage = Tpl::get('form_success_message', __('Thank you for your request.', ProRMTheme::TEXTDOMAIN));

?>
<?php // if ($formSubmitted == true) { 
    ?>
    <div class="window-overlay">
        <div class="window">
            <div class="window-wrapper form-success-message <?php echo $id_form;?>">
                <button class="btn icon-close close-modal"></button>
                <img src="<?php echo ProRMTheme::url(); ?>/images/modal_window.png" alt="modal_window">
                <?php echo $formSuccessMessage; ?>
                               
                <button type="button" class="close-modal button-prorm button-prorm-vinous">
                    <span class="btn-text-outer"><?php _e('Close', ProRMTheme::TEXTDOMAIN) ?></span>
                </button>
                
            </div>
        </div>
    </div>
<?php // } elseif ($formErrorMessage) { ?>
    <!--<p class="form-error-message"><?php // echo $formErrorMessage ?></p>-->
<?php // } ?>