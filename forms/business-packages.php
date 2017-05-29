<?php
$formSubmitted = Tpl::get('form_submitted');
get_template_part('forms/common/messages');
if (!$formSubmitted) {
    ?>
    <center>
        <form action="" method="post" role="form">
            <input type="hidden" name="business-packages-form" value="business-packages">
            <div class="row">
                <center>
                    <?php if (pll_current_language('slug') == 'en') { ?>
                        <center><h2 class="entry-title" style="font-size:2em;">Let our experts provide you with more information about our services </h2></center>
                    <?php } else { ?>
                        <center><h2 class="entry-title" style="font-size:2em;">Erlauben Sie unseren Fachleuten Ihnen mit mehr Informationen</br>über unseren Service zur Verfügung zu stehen

                            </h2></center>
                    <?php } ?>

                    <div class="col-sm-10 col-md-6 col-xs-10 business-packages-form" style="font-size:18px;">

                        <div class="col-sm-9"><?php ProRMForms::input('first_name', __('Name', ProRMTheme::TEXTDOMAIN), false); ?></div>
                        <div class="col-sm-9"><?php ProRMForms::input('company', __('Company', ProRMTheme::TEXTDOMAIN), false); ?></div>
                        <div class="col-sm-9"><?php ProRMForms::input('email', __('E-Mail', ProRMTheme::TEXTDOMAIN), false); ?></div>
                        <div class="col-sm-9"><?php ProRMForms::input('phone_number', __('Phone', ProRMTheme::TEXTDOMAIN), false); ?></div>
                    </div></center>


            </div>
            <p class="btn-row">
                <?php if (pll_current_language('slug') == 'en') { ?>
                    <button class="button-packages-form" style="background-color: #941043;border:0;padding: 10px 50px 10px;font-size:24px;font-weight:400;  margin-top: 20px;margin-bottom:40px;background-image: linear-gradient(to bottom, #941043 25%, #731135 100%);">
                        <span style="color:#ffffff;"><?php _e('Send', ProRMTheme::TEXTDOMAIN) ?></span>
                    </button>
                <?php } else { ?>
                    <button class="button-packages-form" style="background-color: #941043;border:0;padding: 10px 50px 10px;font-size:24px;font-weight:400;  margin-top: 20px;margin-bottom:40px;background-image: linear-gradient(to bottom, #941043 25%, #731135 100%);">
                        <span style="color:#ffffff;"><?php _e('Senden', ProRMTheme::TEXTDOMAIN) ?></span>
                    </button>
                <?php } ?>
            </p>
        </form>
    </center>

    <?php
} 