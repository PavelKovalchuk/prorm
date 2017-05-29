<?php
$formSubmitted = Tpl::get('form_submitted');

get_template_part('forms/common/messages');

if (!$formSubmitted) {
?>
<div class="wrap-form-workshop" style="background-color:#d5dde3;">
    <strong><center><span class="form-words"><span class="first-form-words">Füllen Sie bitte</span></br>
das Antragsformular aus und Sie erhalten einen kostenlosen</br>CRM-Anforderungsworkshop</br>
von den proMX-Experten</span></center></strong>
<form action="" method="post" role="form" style="margin-top:20px;margin-left:15%;">
    <input type="hidden" name="workshop-form" value="workshop">
    <div class="row">
        <center><div class="col-sm-10 visible-md visible-lg block-form-workshop" style="padding: 20px 0px 0px;background-color: #f0f0f0;font-size:18px;">

            <div class="col-sm-12 col-xs-12"><div class="form-group ">
    <label class="sr-only" for="pro_first_name">Name*</label>
    <input id="pro_first_name" class="form-control" name="pro[first_name]" type="text" required="required" placeholder="Name*" value="<?php echo $current_user->user_login;?>">
    </div></div>
       

            <div class="col-sm-12 col-xs-12"><div class="form-group">
    <label class="sr-only" for="pro_company">Company*</label>
    <input id="pro_company" class="form-control" name="pro[company]" type="text" required="required" placeholder="Firma*" value="<?php echo $user_company; ?>">
    </div></div>
           <div class="col-sm-12 col-xs-12"><div class="form-group ">
			<label class="sr-only" for="pro_email">E-Mail*</label>
			<input id="pro_email" class="form-control" name="pro[email]" type="text" required="required" placeholder="E-Mail*" value="<?php echo $user_email;?>">
			</div></div>
			
            <div class="col-sm-12 col-xs-12"><?php ProRMForms::input('phone_number', __('Telefon', ProRMTheme::TEXTDOMAIN), true); ?></div>
        </div></center>

       
    </div>
    <p class="btn-row visible-md visible-lg">
       <button class="btn-workshop" style="background-color: #941043;border:0;padding: 10px 50px 10px;font-weight:400;">
           <span style="text-transform: uppercase;color:#ffffff;"><?php _e('Jetzt anmelden', ProRMTheme::TEXTDOMAIN) ?></span>
       </button>
    </p>
</form>
    </div>
<?php } 