<?php
$formSubmitted = Tpl::get('form_submitted');

get_template_part('forms/common/messages');

if (!$formSubmitted) {
    ?>
    <form class="pro-form" id="roadshow-mobile-form" action="" method="post" role="form" style="background-color: transparent;padding-top:50px;,margin-bottom:0px;">
        <input type="hidden" name="traviata-mobile-form" value="traviata-mobile">
        <div class="row form-road" style="margin:0 auto;">
            <div class="col-sm-12">
                <div class="col-sm-12 form-col name" style="padding:20px 30px 0px 30px;">
                    <?php ProRMForms::input('first_name', __('Name', ProRMTheme::TEXTDOMAIN), true); ?>
                </div>

                <div class="col-sm-12 form-col input" style="padding:20px 30px 0px 30px; ">
                    <?php ProRMForms::input('company', __('Company', ProRMTheme::TEXTDOMAIN), true); ?>
                </div>

                <div class="col-sm-12 form-col  input" style="padding:20px 30px 0px 30px; ">
                    <?php ProRMForms::inputMail('email', __('E-Mail', ProRMTheme::TEXTDOMAIN), true); ?>
                </div>

                <div class="col-sm-12 form-col  input phone" style="padding:20px 30px 0px 30px; ">
                    <?php ProRMForms::input('phone_number', __('Phone', ProRMTheme::TEXTDOMAIN), false); ?>
                </div>
				
				<div class="col-sm-12 form-col  input phone" style="padding:20px 30px 0px 30px; ">
                    <?php ProRMForms::field('date-traviata', false) ?>
                </div>
				
				<div class="col-sm-12 form-col  input phone" style="padding:20px 30px 0px 30px; ">
                    <?php ProRMForms::field('time', false) ?>
                </div>
				
				<div class="col-sm-12 form-col  input phone" style="padding:20px 30px 0px 30px;text-align:left;">
                    <?php ProRMForms::field('eintrittskarte', false) ?>
                </div>


                <div class="col-sm-12 form-col button" style="padding:20px 30px 0px 30px; ">
                    <button  class="link-road-form" onclick="_gaq.push(['_trackEvent', 'Traviata', 'Termin vereinbaren', 'DE'])"
                             style="width:100%;
                                    background-color: #0179d8;
                                    border: 0;
                                    padding: 10px 0px 10px;
                                    font-size: 18px;
                                    font-weight: 400;
                                    margin-bottom: 50px;
                                    margin-top: 10px;
                                    text-decoration: none;">
                        <span style="color:#ffffff"><?php _e('Anmdelen', ProRMTheme::TEXTDOMAIN) ?></span>
                    </button>
                </div>
            </div>

        </div>
    </form>
<?php }  ?>