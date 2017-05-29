<?php
$formSubmitted = Tpl::get('form_submitted');

get_template_part('forms/common/messages');

if (!$formSubmitted) {
?>
<div style="padding:20px 50px 20px 50px;margin-left:-15%;">

<center><form action="" method="post" role="form" style="margin-top:20px;">
    <input type="hidden" name="wpc-form" value="wpc">
    <div class="row">
        <center><div class="col-sm-12" style="padding: 20px 0px 0px;font-size:18px;">

            <div class="col-sm-12"><?php ProRMForms::input('first_name', __('Name', ProRMTheme::TEXTDOMAIN), false); ?></div>
            <div class="col-sm-12"><?php ProRMForms::input('company', __('Company', ProRMTheme::TEXTDOMAIN), false); ?></div>
            <div class="col-sm-12"><?php ProRMForms::input('email', __('E-Mail', ProRMTheme::TEXTDOMAIN), false); ?></div>
            <div class="col-sm-12"><?php ProRMForms::input('phone_number', __('Phone', ProRMTheme::TEXTDOMAIN), false); ?></div>
        </div></center>

       
    </div>
    <p class="btn-row">
		<?php if(pll_current_language('slug') == 'en'){ ?>
		   <button class="visible-sm visible-md visible-lg youtube-form" style="border:0;padding: 10px 50px 10px;font-size:20px;font-weight:400;  margin-top: 20px;background-color: #941043;background-image: linear-gradient(to bottom, #941043 25%, #731135 100%);">
			   <span style="color:#ffffff;text-transform: uppercase;"><?php _e('Get the Download link', ProRMTheme::TEXTDOMAIN) ?></span>
		   </button>
		   <button class="visible-xs" style="background-color: #941043;border:0;padding: 10px;font-size:15px;font-weight:400;  margin-top: 20px;background-image: linear-gradient(to bottom, #941043 25%, #731135 100%);">
			   <span style="text-transform: uppercase;color:#ffffff;"><?php _e('Get the Download link', ProRMTheme::TEXTDOMAIN) ?></span>
		   </button>
		<?php } else { ?>
			<button class="visible-sm visible-md visible-lg youtube-form" style="background-color: #941043;border:0;padding: 10px 50px 10px;font-size:20px;font-weight:400;  margin-top: 20px;background-image: linear-gradient(to bottom, #941043 25%, #731135 100%);">
			   <span style="text-transform: uppercase;color:#ffffff;"><?php _e('Den Download-Link erhalten', ProRMTheme::TEXTDOMAIN) ?></span>
		   </button>
		   <button class="visible-xs" style="background-color: #941043;border:0;padding: 10px;font-size:15px;font-weight:400;  margin-top: 20px;background-image: linear-gradient(to bottom, #941043 25%, #731135 100%);">
			   <span style="text-transform: uppercase;color:#ffffff;"><?php _e('Den Download-Link erhalten', ProRMTheme::TEXTDOMAIN) ?></span>
		   </button>
		<?php }?>
    </p>
</form></center>
    </div>
<?php } 