<?php
$formSubmitted = Tpl::get('form_submitted');
$anchor = Tpl::get('form_2_anchor');
  $id_form = 'demoversion';
  $analitic_name = 'Get_treal_version';

?>
<form id="<?php echo $anchor ?>" action="" method="post" role="form" class="contact-form form-validation">
    <input type="hidden" name="quick-check" value="quick-check">
    <input class="analitic_name" type="hidden" name="<?= $analitic_name; ?>" value="<?= $analitic_name; ?>">
    <div class="input-holder">
        <?php ProRMForms::input('first_name', __('Name', ProRMTheme::TEXTDOMAIN), true); ?>
        <?php ProRMForms::inputMail('email', __('E-Mail', ProRMTheme::TEXTDOMAIN), true); ?>
    </div>
    <div class="input-holder">
        <?php ProRMForms::input('company', __('Company', ProRMTheme::TEXTDOMAIN), true); ?>
        <?php ProRMForms::input('phone', __('Phone', ProRMTheme::TEXTDOMAIN)); ?>
    </div>
    <?php ProRMForms::textarea('notes', __('Notes', ProRMTheme::TEXTDOMAIN)); ?>
    <?php ProRMForms::field('data_usage', true) ?>
    <?php ProRMForms::field('form_comment') ?>

    <div class="btn-holder">
        <?php ProRMForms::field('send_button', '', $id_form . '-button') ?>
    </div>
</form>
<?php
if ($formSubmitted === true) {
    $formSubmitt = Tpl::set('id_form', $anchor);
    get_template_part('forms/common/messages');

    ?>
    <script>
        console.log(typeof (_gaq.push));
    <?php if (pll_current_language('slug') == 'en') { ?>
            _gaq.push(['_trackEvent', 'Online Demo-Registration-EN', 'Online Demo-EN', 'Online Demo-Click-EN']);
    <?php } else { ?>
            _gaq.push(['_trackEvent', 'Online Demo-Registration-DE', 'Online Demo-DE', 'Online Demo-Click-DE']);
    <?php } ?>
    </script>
<?php } ?>