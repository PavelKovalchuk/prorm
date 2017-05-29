<?php
$formSubmitted = Tpl::get('form_submitted');
$id_form = 'form-meet-us';
$analitic_name = 'Meet_us';
$name = Tpl::get('field_name');
//$error_checkbox = Tpl::get('error_radio');
?>
<p><?php echo the_cfc_field('meet_us', 'form_title'); ?></p>
<p class="second-header-section six-header-section"><?php echo the_cfc_field('meet_us', 'form_select'); ?></p>
<div class="form-holder">
    <form id="<?= $id_form; ?>" action="" class="contact-form form-validation" method="post" role="form">
        <div class="block-inputs">
            <input type="hidden" name="microsoft" value="microsoft">
            <input class="analitic_name" type="hidden" name="<?= $analitic_name; ?>" value="<?= $analitic_name; ?>">
            <?php ProRMForms::field('microsoft_desired_date', true, null) ?>
            <div class="input-holder">
                <?php ProRMForms::input('first_name', __('Name', ProRMTheme::TEXTDOMAIN), true); ?>
                <?php ProRMForms::inputMail('email', __('E-Mail', ProRMTheme::TEXTDOMAIN), true); ?>
            </div>
            <div class="input-holder">
                <?php ProRMForms::input('company', __('Company', ProRMTheme::TEXTDOMAIN), true); ?>
                <?php ProRMForms::input('phone', __('Phone', ProRMTheme::TEXTDOMAIN)); ?>
            </div>
            <?php ProRMForms::textarea('notes', __('Notes', ProRMTheme::TEXTDOMAIN)); ?>
            
            <div class="button-group-outer-row">
                <div class="button-group-outer-left">
                    <?php ProRMForms::field('data_usage', true); ?>
                    <?php ProRMForms::field('form_comment') ?>
                </div>
                <!--For using recaptcha-->
                <div class="button-group-outer-right">
                    <?php 
                        if(!$form){
                            $form = Tpl::get('form');
                        }
                        $form->get_recaptcha_html(); 
                    ?>
                </div>
            </div>
            
        </div>
        <div class="btn-holder">
            <?php ProRMForms::field('send_button', true, $id_form . '-button') ?>
        </div>
    </form>
    <?php
if ($formSubmitted) {
    get_template_part('forms/common/messages');?>
<!--    <script>
        console.log(typeof (_gaq.push));
    <?php // if (pll_current_language('slug') == 'en') { ?>
            _gaq.push(['_trackEvent', 'Meet us-Registration-EN', 'Meet us-EN', 'Meet us-Click-EN']);
    <?php // } else { ?>
            _gaq.push(['_trackEvent', 'Meet us-Registration-DE', 'Meet us-DE', 'Meet us-Click-DE']);
    <?php // } ?>
    </script>-->
<?php } ?>
</div>
