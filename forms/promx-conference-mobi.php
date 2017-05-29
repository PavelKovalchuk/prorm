<?php
$formSubmitted = Tpl::get('form_submitted');

get_template_part('forms/common/messages');

if (!$formSubmitted) {
?>
<form class="pro-form" id="promx-conference-mobi-form" action="" method="post" role="form">
    <input type="hidden" name="promx-conference-mobi" value="promx-conference-mobi">
    <div class="row partner-row">

        <div class=" col-sm-12  col-md-2 col-xs-12 form-col name" style="padding: 20px 10px 0px;">
            <?php ProRMForms::input('last_name', __('Name', ProRMTheme::TEXTDOMAIN), true); ?>
        </div>
        <div class="col-sm-12 col-xs-12 col-md-2 form-col input" style="padding: 20px 10px 0px;">
            <?php ProRMForms::input('company', __('Company', ProRMTheme::TEXTDOMAIN), true); ?>
        </div>
        <div class="col-sm-12 col-md-2 col-xs-12 form-col  input" style="padding: 20px 10px 0px;">
            <?php ProRMForms::inputMail('email', __('E-Mail', ProRMTheme::TEXTDOMAIN), true); ?>
        </div>
        <div class="col-sm-12 col-xs-12 col-md-2 form-col  input phone" style="padding: 20px 10px 0px;;">
            <?php ProRMForms::input('phone_number', __('Phone', ProRMTheme::TEXTDOMAIN), false); ?>
        </div>

        <div class="col-sm-12 col-xs-12 col-md-2 form-col" style="padding: 20px 10px 0px;color:#ffffff">
            <button  class="button" style="height:43px;margin-top:0px;width:100%">
                <span>Send</span>
            </button>
        </div>






    </div>
</form>
<?php } ?>
