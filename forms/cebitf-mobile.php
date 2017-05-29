<?php
$formSubmitted = Tpl::get('form_submitted');

get_template_part('forms/common/messages');

if (!$formSubmitted) {
?>
<form class="pro-form" action="" id="cebitf-mobile-form" method="post" role="form" style="margin-bottom:0px;background-color: rgba(207, 233, 244, 0.7);padding: 20px 0px 40px;">
    <input type="hidden" name="cebitf-mobile-form" value="cebitf-mobile">
    <div class="row form-road" style="margin:0 auto;">
        <div class="col-sm-12">
            <div class="col-md-2 col-sm-12 form-col name" style="padding: 20px 42px 0px;">
                <?php ProRMForms::input('first_name', __('Name', ProRMTheme::TEXTDOMAIN), true); ?>
            </div>
            <div class="col-md-2 col-sm-12 form-col input" style="padding: 20px 42px 0px;">
                <?php ProRMForms::input('company', __('Company', ProRMTheme::TEXTDOMAIN), true); ?>
            </div>
            <div class="col-md-2 col-sm-12 form-col  input" style="padding: 20px 42px 0px;">
                <?php ProRMForms::inputMail('email', __('E-Mail', ProRMTheme::TEXTDOMAIN), true); ?>
            </div>
            <div class="col-md-2 col-sm-12 form-col  input phone" style="padding: 20px 42px 0px;">
                <?php ProRMForms::input('phone_number', __('Phone', ProRMTheme::TEXTDOMAIN), false); ?>
            </div>

            <div class="col-sm-12 form-col  input phone" style="padding: 20px 42px 0px;">
                <?php ProRMForms::field('date-traviata', false) ?>
            </div>

            <div class="col-sm-12 form-col  input phone" style="padding: 20px 42px 0px;">
                <?php ProRMForms::field('time', false) ?>
            </div>

            <div class="col-sm-12 form-col  input phone" style="padding: 20px 42px 0px;text-align:left;">
                <?php ProRMForms::field('eintrittskarte', false) ?>
            </div>


            <div class="col-md-4 col-sm-12 form-col button" style="padding: 20px 42px 0px; text-align: center;">
                <button  class="link-road-form" style="text-decoration: none;color:#ffffff;
     background-color: #0161ab;
    background-image: linear-gradient(to bottom, #0161ab 25%, #0179d8 100%);
   
    padding: 9px 45px;
    font-weight: 500;
    border:none" onclick="_gaq.push(['_trackEvent', 'Сebit', 'Termin vereinbaren', 'DE'])">
                    <span>Termin vereinbaren</span>
                </button>
            </div>
        </div>





    </div>
</form>
<?php }  ?>