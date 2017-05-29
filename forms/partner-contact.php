<?php
$formSubmitted = Tpl::get('form_submitted');

get_template_part('forms/common/messages');

if (!$formSubmitted) {
    ?>


    <form class="pro-form" id="partner-contact" action="" method="post" role="form" style="background-color:transparent;">
        <input type="hidden" name="partner-contact-form" value="partner-contact">
        <div class="row">

            <div class="col-md-5 form-col col-xs-12">

                <?php ProRMForms::input('first_name', __('Name', ProRMTheme::TEXTDOMAIN), false); ?>
                <?php ProRMForms::input('company', __('Company', ProRMTheme::TEXTDOMAIN), false); ?>
                <?php ProRMForms::inputMail('email', __('E-Mail', ProRMTheme::TEXTDOMAIN), false); ?>
                <?php ProRMForms::input('phone_number', __('Phone', ProRMTheme::TEXTDOMAIN), false); ?>
            </div>
            <div class="col-md-7 form-col col-xs-12">
                <?php ProRMForms::field('message', false) ?>
                <button class="button partner-contact-button" style="float: right">
                    <span style="color:#ffffff;"><?php _e('Send', ProRMTheme::TEXTDOMAIN) ?></span>
                </button>
            </div>
        </div>
    </form>
<?php }  ?>