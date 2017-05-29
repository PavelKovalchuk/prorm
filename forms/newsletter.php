<?php
$formSubmitted = Tpl::get('form_submitted');

get_template_part('forms/common/messages');

if (!$formSubmitted) {
?>
<form class="pro-form subscribe-form" action="" method="post" role="form">
    <input type="hidden" name="newsletter" value="newsletter">
    <div class="row">
        <div class="col-md-12">
            <?php ProRMForms::field('salutation', true) ?>
            <?php ProRMForms::input('first_name', __('Name', ProRMTheme::TEXTDOMAIN), false); ?>
            <?php ProRMForms::input('last_name', __('Last Name', ProRMTheme::TEXTDOMAIN), true); ?>
            <?php // ProRMForms::input('name', __('Name, Vorname', ProRMTheme::TEXTDOMAIN), true); ?>
            <?php ProRMForms::input('company', __('Company', ProRMTheme::TEXTDOMAIN), true); ?>
            <?php ProRMForms::input('email', __('E-Mail', ProRMTheme::TEXTDOMAIN), true); ?>
            <p class="btn-row">
                <button class="pro-btn"><span><?php _e('Subscribe', ProRMTheme::TEXTDOMAIN) ?></span></button>
            </p>
        </div>
    </div>
</form>
<?php } ?>