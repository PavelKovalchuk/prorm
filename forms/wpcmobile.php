<?php
$formSubmitted = Tpl::get('form_submitted');

get_template_part('forms/common/messages');

if (!$formSubmitted) {
?>
<form action="" method="post" role="form" style="margin-top:20px;">
    <input type="hidden" name="wpc-form" value="wpcmobile">
    <center><strong><p class="first-form" style="margin-bottom:20px;"><span>Please let us know</span></br>
                <span class="text-form">your contact details to provide</span></br>
                <span class="text-form">you with the FREE licenses</span></br>
                <span class="text-form">of proRM Business Solutions</span></p></strong></center>
    <div class="visible-xs visible-sm" style="padding: 30px 10px 20px 10px;background-color: #f0f0f0;">


        <div class="col-sm-10 col-xs-10  col-xs-push-1 col-sm-push-1" style="font-size: 20px;"><?php ProRMForms::input('first_name', __('Name*', ProRMTheme::TEXTDOMAIN), false); ?></div>
        <div class="col-sm-10 col-xs-10 col-xs-push-1 col-sm-push-1" style="font-size: 20px;"><?php ProRMForms::input('company', __('Company*', ProRMTheme::TEXTDOMAIN), false); ?></div>
        <div class="col-sm-10 col-xs-10 col-xs-push-1 col-sm-push-1" style="font-size: 20px;"><?php ProRMForms::input('email', __('E-Mail*', ProRMTheme::TEXTDOMAIN), false); ?></div>
        <div class="col-sm-10 col-xs-10 col-xs-push-1 col-sm-push-1" style="font-size: 20px;"><?php ProRMForms::input('phone_number', __('Phone', ProRMTheme::TEXTDOMAIN), false); ?></div>


    <p class="btn-row">
    <center><button class="but-req" style="background-color: #941043;border:0;padding: 10px 15px 10px;font-weight:400;margin-top: 10px;">
            <span style="text-transform: uppercase;color:#ffffff;"><?php _e('get a gift now', ProRMTheme::TEXTDOMAIN) ?></span>
        </button></center>
    </p>
    </div>

</form>
<?php } 