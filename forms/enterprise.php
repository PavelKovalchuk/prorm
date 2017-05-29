<?php
$formSubmitted = Tpl::get('form_submitted');

get_template_part('forms/common/messages');

if (!$formSubmitted) {
?>


<center><form action="" method="post" role="form" style="margin-top:20px;">
    <input type="hidden" name="enterprise-form" value="enterprise">
    <div class="row">
        <center><div class="col-sm-10 col-xs-12 enterprise-form"  style="font-size:18px;">

            <div class="col-sm-12 col-xs-12 form-enter-field"><?php ProRMForms::input('first_name', __('Name', ProRMTheme::TEXTDOMAIN), false); ?></div>
            <div class="col-sm-12 col-xs-12 form-enter-field"><?php ProRMForms::input('company', __('Company', ProRMTheme::TEXTDOMAIN), false); ?></div>
            <div class="col-sm-12 col-xs-12 form-enter-field"><?php ProRMForms::input('email', __('E-Mail', ProRMTheme::TEXTDOMAIN), false); ?></div>
            <div class="col-sm-12 col-xs-12 form-enter-field"><?php ProRMForms::input('phone_number', __('Phone', ProRMTheme::TEXTDOMAIN), false); ?></div>
        </div></center>

       
    </div>
    <p class="btn-row form-enter-field" style="margin-left:1300px;">
       <?php  if(pll_current_language('slug') == 'en'){ ?>
		   <button class="button-packages-form" style="background-color: #941043;border:0;padding: 10px 50px 10px;font-size:24px;font-weight:400;  margin-top: 20px;margin-bottom:40px;background-image: linear-gradient(to bottom, #941043 25%, #731135 100%);">
			   <span style="color:#ffffff;"><?php _e('Send', ProRMTheme::TEXTDOMAIN) ?></span>
		   </button>
	   <?php } else { ?>
			<button class="button-packages-form" style="background-color: #941043;border:0;padding: 10px 50px 10px;font-size:24px;font-weight:400;  margin-top: 20px;margin-bottom:40px;background-image: linear-gradient(to bottom, #941043 25%, #731135 100%);">
			   <span style="color:#ffffff;"><?php _e('Senden', ProRMTheme::TEXTDOMAIN) ?></span>
		   </button>
		<?php } ?>
    </p>
</form></center>
  
<?php } 