<?php
$formSubmitted = Tpl::get('form_submitted');

$anchor = Tpl::get('form_anchor');
$id_form = "subscribe";
$analitic_name = 'Send_contacts';
?>
<form id="<?php echo $anchor ?>" action="" method="post" role="form" class="contact-form form-validation">
        <input type="hidden" name="subscribe" value="subscribe">
        <input class="analitic_name" type="hidden" name="<?= $analitic_name; ?>" value="<?= $analitic_name; ?>">
        <div class="input-holder">
            <?php ProRMForms::input('first_name', __('Name', ProRMTheme::TEXTDOMAIN), true); ?>
            <?php ProRMForms::inputMail('email', __('E-Mail', ProRMTheme::TEXTDOMAIN), true); ?>
        </div>
        <div class="input-holder">
            <?php ProRMForms::input('company', __('Company', ProRMTheme::TEXTDOMAIN), true); ?>
            <?php ProRMForms::input('phone', __('Phone', ProRMTheme::TEXTDOMAIN)); ?>
        </div>
        
        <div class="button-group-outer-row top-padding">
            <div class="button-group-outer-left">
                 <!--For using recaptcha-->
                <?php 
                    if(!$form){
                        $form = Tpl::get('form');
                    }
                    $form->get_recaptcha_html('left'); 
                ?>
            </div>
           
            <div class="button-group-outer-right">
                <div class="btn-holder">
                    <?php ProRMForms::field('send_button', '', $id_form . '-button') ?>
                </div>
            </div>
            
        </div>

        
    </form>
<?php
if ($formSubmitted) {
    get_template_part('forms/common/messages');}
?>
