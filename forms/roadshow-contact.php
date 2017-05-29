<?php
$formSubmitted = Tpl::get('form_submitted');

get_template_part('forms/common/messages');

if (!$formSubmitted) {
    ?>


    <form class="pro-form" id="roadshow-contact" action="" method="post" role="form" style="background-color:#ffffff;">
        <input type="hidden" name="roadshow-contact-form" value="roadshow-contact">
        <div class="row">



            <div class="col-md-5 form-col" style="padding-right: 0px;">

                <?php ProRMForms::input('last_name', __('Name', ProRMTheme::TEXTDOMAIN), false); ?>
                <?php ProRMForms::input('company', __('Company', ProRMTheme::TEXTDOMAIN), true); ?>
                <?php ProRMForms::inputMail('email', __('E-Mail', ProRMTheme::TEXTDOMAIN), true); ?>
                <?php ProRMForms::input('phone_number', __('Phone', ProRMTheme::TEXTDOMAIN), false); ?>
            </div>
            <div class="col-md-7 form-col">
                <?php ProRMForms::field('message', false) ?>
                <button  id="road-contact" onclick="_gaq.push(['_trackEvent', 'Absenden', 'Click', 'DE'])">
                    <span style="color:#ffffff;"><?php _e('Absenden', ProRMTheme::TEXTDOMAIN) ?></span>
                </button>
            </div>
        </div>
    </form>
<?php }  ?>