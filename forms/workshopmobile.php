<?php
$formSubmitted = Tpl::get('form_submitted');

get_template_part('forms/common/messages');

if (!$formSubmitted) {
?>
<form action="" method="post" role="form" style="margin-top:30px;">
    <input type="hidden" name="workshopmobile-form" value="workshopmobile">
    <center><strong><p class="first-form" style="margin-bottom:20px;"><span>Füllen Sie bitte</span></br>
                <span class="text-form">das Antragsformular aus und Sie erhalten einen kostenlosen</span></br>
                <span class="text-form">CRM-Anforderungsworkshop</span></br>
                <span class="text-form">von den proMX-Experten</span></p></strong></center>
    <div class="visible-xs visible-sm" style="padding: 30px 10px 20px 10px;background-color: #f0f0f0;">


        <div class="col-sm-10 col-xs-10  col-xs-push-1 col-sm-push-1" style="font-size: 20px;"><div class="form-group ">
    <label class="sr-only" for="pro_first_name">Name*</label>
    <input id="pro_first_name" class="form-control" name="pro[first_name]" type="text" required="required" placeholder="Name*" value="<?php echo $current_user->user_login;?>">
    </div></div>
        <div class="col-sm-10 col-xs-10 col-xs-push-1 col-sm-push-1" style="font-size: 20px;"><div class="form-group">
    <label class="sr-only" for="pro_company">Company*</label>
    <input id="pro_company" class="form-control" name="pro[company]" type="text" required="required" placeholder="Firma*" value="<?php echo $user_company; ?>">
    </div></div>
        <div class="col-sm-10 col-xs-10 col-xs-push-1 col-sm-push-1" style="font-size: 20px;"><div class="form-group ">
			<label class="sr-only" for="pro_email">E-Mail*</label>
			<input id="pro_email" class="form-control" name="pro[email]" type="text" required="required" placeholder="E-Mail*" value="<?php echo $user_email;?>">
			</div></div>
        <div class="col-sm-10 col-xs-10 col-xs-push-1 col-sm-push-1" style="font-size: 20px;"><?php ProRMForms::input('phone_number', __('Phone', ProRMTheme::TEXTDOMAIN), false); ?></div>


    <p class="btn-row">
    <center><button class="but-req" style="background-color: #941043;border:0;padding: 10px 15px 10px;font-weight:400;margin-top: 10px;">
            <span style="text-transform: uppercase;color:#ffffff;"><?php _e('Jetzt anmelden', ProRMTheme::TEXTDOMAIN) ?></span>
        </button></center>
    </p>
    </div>

</form>
<?php } 