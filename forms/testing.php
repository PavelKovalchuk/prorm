<?php $formSubmitted = Tpl::get('form_submitted'); 
  $id_form = 'testing';  
  $analitic_name = 'Get_treal_version';
?>
<form id="<?php echo pll_current_language() == 'en' ? 'trial-version' : 'testversion' ?>" action="" method="post" role="form" class="contact-form form-validation">
    <input type="hidden" name="testing" value="testing">
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
</form> <?php
if ($formSubmitted) {
    
    get_template_part('forms/common/messages'); ?>
    <script>
        
        console.log(typeof (_gaq.push));
        
    <?php if (pll_current_language('slug') == 'en') { ?>
            _gaq.push(['_trackEvent', 'Trial-Registration-EN', 'Trial-EN', 'Trial-Click-EN']);
    <?php } else { ?>
            _gaq.push(['_trackEvent', 'Trial-Registration-DE', 'Trial-DE', 'Trial-Click-DE']);
    <?php } ?>
    </script>
<?php } ?>