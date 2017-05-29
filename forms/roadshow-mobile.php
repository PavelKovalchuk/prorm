<?php
$formSubmitted = Tpl::get('form_submitted');

get_template_part('forms/common/messages');

if (!$formSubmitted) {
    ?>
    <form class="pro-form" id="roadshow-mobile-form" action="" method="post" role="form" style="background-color: rgba(0, 0, 0, 0.2);">
        <input type="hidden" name="roadshow-mobile" value="roadshow-mobile">
        <div class="row form-road" style="margin:0 auto;">
            <div class="col-sm-12">
                <div class="col-sm-12 form-col name">
                    <?php ProRMForms::input('last_name', __('Name', ProRMTheme::TEXTDOMAIN), false); ?>
                </div>

                <div class="col-sm-12 form-col input">
                    <?php ProRMForms::input('company', __('Company', ProRMTheme::TEXTDOMAIN), true); ?>
                </div>

                <div class="col-sm-12 form-col  input">
                    <?php ProRMForms::inputMail('email', __('E-Mail', ProRMTheme::TEXTDOMAIN), true); ?>
                </div>

                <div class="col-sm-12 form-col  input phone">
                    <?php ProRMForms::input('phone_number', __('Phone', ProRMTheme::TEXTDOMAIN), false); ?>
                </div>

                <div class="col-sm-12 form-col input">
                    <?php ProRMForms::field('city_mobile', true) ?>
                </div>

                <div class="col-sm-12 form-col date">
                    <?php ProRMForms::field('date_mobile', true) ?>
                </div>

                <div class="col-sm-12 form-col button">
                    <button  class="link-road-form" onclick="_gaq.push(['_trackEvent', 'Absenden', 'Click', 'DE'])">
                        <span style="color:#ffffff;"><?php _e('Anmelden', ProRMTheme::TEXTDOMAIN) ?></span>
                    </button>
                </div>
            </div>

        </div>
    </form>
<?php }  ?>