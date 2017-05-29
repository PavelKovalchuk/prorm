<?php
$formSubmitted = Tpl::get('form_submitted');
$id_form = "contact-us";
$analitic_name = 'Send_contacts';

?>

<form id="<?= $id_form; ?>" action="" class="contact-form form-validation" method="post" role="form">
    <input type="hidden" name="contact-us" value="contact-us">
    <input class="analitic_name" type="hidden" name="<?= $analitic_name; ?>" value="<?= $analitic_name; ?>">
    <div class="input-holder">
        <?php ProRMForms::input('first_name', __('Name', ProRMTheme::TEXTDOMAIN), true); ?>
        <?php ProRMForms::inputMail('email', __('E-Mail', ProRMTheme::TEXTDOMAIN), true); ?>
    </div>
    <div class="input-holder">
        <?php ProRMForms::input('company', __('Company', ProRMTheme::TEXTDOMAIN), true); ?>
        <?php ProRMForms::input('phone', __('Phone', ProRMTheme::TEXTDOMAIN)); ?>
    </div>
    <?php ProRMForms::textarea('notes', __('Notes', ProRMTheme::TEXTDOMAIN)); ?>
   
    
    <div class="button-group-outer-row">
        <div class="button-group-outer-left">
            <?php ProRMForms::field('data_usage', true); ?>
            <?php ProRMForms::field('form_comment') ?>
        </div>
        <!--For using recaptcha-->
        <div class="button-group-outer-right">
            <?php 
                if(!$form){
                    $form = Tpl::get('form');
                }
                $form->get_recaptcha_html(); 
            ?>
        </div>
    </div>
    
    <div class="btn-holder">
                <?php ProRMForms::field('send_button', '', $id_form . '-button') ?>
    </div>
    
    
</form> <?php
if ($formSubmitted) {
    get_template_part('forms/common/messages');
}
?>