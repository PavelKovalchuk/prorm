<?php
$formSubmitted = Tpl::get('form_submitted');

get_template_part('forms/common/messages');

if (!$formSubmitted) {
    ?>
    <form class="pro-form" action="" method="post" role="form">
        <input type="hidden" name="msbsc-fur-20-benutzer" value="msbsc-fur-20-benutzer">
        <div class="row">
            <div class="col-md-6 form-col">
                <?php ProRMForms::input('first_name', __('Name', ProRMTheme::TEXTDOMAIN), false); ?>
                <?php ProRMForms::input('last_name', __('Last Name', ProRMTheme::TEXTDOMAIN), true); ?>
                <?php ProRMForms::field('salutation', true) ?>
            </div>
            <div class="col-md-6 form-col">
                <?php ProRMForms::input('company', __('Company', ProRMTheme::TEXTDOMAIN), true); ?>
                <?php ProRMForms::input('email', __('E-Mail', ProRMTheme::TEXTDOMAIN), true); ?>
                <?php ProRMForms::field('phone_valid', __('Phone', ProRMTheme::TEXTDOMAIN), true); ?>
            </div>
            <div class="col-sm-12 form-col" style="margin-top:-7%">
                <?php ProRMForms::field('data_usage', true) ?>
            </div>

            <div class="col-md-6 form-col" style="margin-top:-6%">
                <?php ProRMForms::field('form_comment') ?>
            </div>
            <div class="col-md-6 form-col" style="margin-top:-8%">
                <?php ProRMForms::field('send_button') ?>
            </div>
        </div>
    </form>
<?php } ?>