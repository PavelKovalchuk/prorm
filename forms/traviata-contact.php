<?php
$formSubmitted = Tpl::get('form_submitted');

get_template_part('forms/common/messages');

if (!$formSubmitted) {
    ?>


    <form class="pro-form" action="" method="post" role="form" style="background-color:#0179d8;">
        <input type="hidden" name="traviata-contact" value="traviata-contact">
        <div class="row">



            <div class="col-md-5 form-col" style="padding: 20px 10px 0px;">

                <?php ProRMForms::input('first_name', __('Name', ProRMTheme::TEXTDOMAIN), true); ?>
                <?php ProRMForms::input('company', __('Company', ProRMTheme::TEXTDOMAIN), true); ?>
                <?php ProRMForms::inputMail('email', __('E-Mail', ProRMTheme::TEXTDOMAIN), true); ?>
                <?php ProRMForms::input('phone_number', __('Phone', ProRMTheme::TEXTDOMAIN), false); ?>
            </div>
            <div class="col-md-7 form-col" style="padding: 20px 10px 0px;">
                <?php ProRMForms::field('message', false) ?>
                <button  id="road-contact" style="float:right;text-decoration: none;color:#ffffff;
    background-color: #01325a;
    padding: 9px 45px;
    font-weight: 500;
    border:none" onclick="_gaq.push(['_trackEvent', 'Traviata', 'Termin vereinbaren', 'DE'])">
                    <span style="color:#ffffff;"><?php _e('Termin vereinbaren', ProRMTheme::TEXTDOMAIN) ?></span>
                </button>
            </div>
        </div>
    </form>
<?php }  ?>