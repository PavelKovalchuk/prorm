<?php
$formSubmitted = Tpl::get('form_submitted');

get_template_part('forms/common/messages');

if (!$formSubmitted) {
?>
<form class="pro-form" action="" id="cebitf-form"  method="post" role="form" style="    background-color: rgba(207, 233, 244, 0.7);">
    <input type="hidden" name="cebitf-form" value="cebitf">
    <div class="row form-road" style="margin:0 auto;">
        <div class="col-md-2 col-sm-12 form-col name" style="padding: 20px 10px 0px;width:12%">
            <?php ProRMForms::input('first_name', __('Name', ProRMTheme::TEXTDOMAIN), false); ?>
        </div>
        <div class="col-md-2 col-sm-12 form-col input" style="padding: 20px 10px 0px;width:12%">
            <?php ProRMForms::input('company', __('Company', ProRMTheme::TEXTDOMAIN), false); ?>
        </div>
        <div class="col-md-2 col-sm-12 form-col  input" style="padding: 20px 10px 0px;width:12%">
            <?php ProRMForms::inputMail('email', __('E-Mail', ProRMTheme::TEXTDOMAIN), false); ?>
        </div>
        <div class="col-md-2 col-sm-12 form-col  input phone" style="padding: 20px 10px 0px;width:12%">
            <?php ProRMForms::input('phone_number', __('Phone', ProRMTheme::TEXTDOMAIN), false); ?>
        </div>

        <div class="col-md-2 form-col  input phone" style="padding: 20px 10px 0px;width:12%">
            <?php ProRMForms::field('date-traviata', true) ?>
        </div>

        <div class="col-md-2 form-col  input phone" style="padding: 20px 10px 0px;width:12%">
            <?php ProRMForms::field('time', true) ?>
        </div>

        <div class="col-md-2 form-col" style="padding: 20px 10px 0px;width:12%">

            <?php ProRMForms::field('eintrittskarte', true) ?>
        </div>




        <div class="col-md-4 col-sm-12 form-col button" style="padding: 20px 10px 0px;width:16%">
            <button  class="link-road-form button-cebitf" style="text-decoration: none;color:#ffffff;
    background-color: #0179d8;
    font-weight: 500;
    border:none" onclick="_gaq.push(['_trackEvent', 'Сebit', 'Termin vereinbaren', 'DE'])">
                <span>Termin vereinbaren</span>
            </button>
        </div>
        </div>
</form>
<?php }  ?>