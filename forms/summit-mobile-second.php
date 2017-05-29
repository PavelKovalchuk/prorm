<?php
$formSubmitted = Tpl::get('form_submitted');

get_template_part('forms/common/messages');

if (!$formSubmitted) {
?>
<form action="" method="post" id="business-form" role="form" style="margin-top:20px;">
    <input type="hidden" name="summit-mobile-second-form" value="summit-mobile-second">
    <div class="row">
        <div class="col-sm-7 col-xs-10 form-event-main" style="background-color: #f0f0f0;opacity:0.9;padding:20px;">

         <center><div class="form-text-crm-summit" style="margin-bottom:10px;"><span class="form-text-crm-summit">Fullen Sie bitte das Antragsformular</br>aus und Sie
         erhalten einen</br> kostenlosen CRM-Anpassungsworkshop</br>von den proMX-Experten</span></div></center>
							   
            <div class="col-sm-12 col-xs-12"><div class="form-group ">
    <label class="sr-only" for="pro_first_name">Name</label>
    <input id="pro_first_name" class="form-control" name="pro[first_name]" type="text" required="required" placeholder="Name" value="<?php echo $current_user->user_login;?>">
    </div></div>
       

            <div class="col-sm-12 col-xs-12"><div class="form-group ">
    <label class="sr-only" for="pro_company">Company</label>
    <input id="pro_company" class="form-control" name="pro[company]" type="text" required="required" placeholder="Firma" value="<?php echo $user_company; ?>">
    </div></div>
           <div class="col-sm-12 col-xs-12"><div class="form-group ">
			<label class="sr-only" for="pro_email">E-Mail</label>
			<input id="pro_email" class="form-control" name="pro[email]" type="text" required="required" placeholder="E-Mail" value="<?php echo $user_email;?>">
			</div></div>
			
            <div class="col-sm-12 col-xs-12"><?php ProRMForms::input('phone_number', __('Telefon', ProRMTheme::TEXTDOMAIN), false); ?></div>
			<div class="col-sm-12 col-xs-12 required-event-form" style="margin-left:5px;">* Bitte fullen Sie alle Felder aus</div>
			<center><div class="col-sm-12 col-xs-12"><button onclick="yaCounter32043416.reachGoal('684665')" class="landing-event-form-button" style="background-color: #941043;border:0;padding: 10px 20px 10px;font-size:12px;font-weight:400; margin-bottom:10px;margin-top:10px;">
           <span style="text-transform: uppercase;color:#ffffff;"><?php _e('jetzt anmelden!', ProRMTheme::TEXTDOMAIN) ?></span>
       </button>
	   <div id="download-form" style="display:none;margin-top:10px;margin-bottom:10px;font-size:17px;font-weight:500;">Download wird durchgefuhrt...</div>
	   </div></center>
        </div>

	
    </div>
  
</form>
<?php } else { ?>
    <script>
        console.log(typeof(_gaq.push));
        <?php if(pll_current_language('slug') == 'de'){ ?>
        _gaq.push(['_trackEvent', 'CRM_Summit-Einladung-Reg', 'CRM_Summit-Einladung-DE', 'CRM_Summit-Einladung-Click-DE']);
        <?php } else { ?>
        _gaq.push(['_trackEvent', 'CRM_Summit-Einladung-Reg', 'CRM_Summit-Einladung-DE', 'CRM_Summit-Einladung-Click-DE']);
        <?php }?>
    </script>
<?php } ?>