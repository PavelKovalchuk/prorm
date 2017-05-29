<?php
$formSubmitted = Tpl::get('form_submitted');
$anchor = Tpl::get('form_3_anchor');
$id_form = 'buy_now';

$stock_remark_db = get_field( "stock_remark", $post->ID );
$stock_remark = $stock_remark_db ? $stock_remark_db : 'none';
?>
<form id="<?php echo $anchor ?>" action="" method="post" role="form" class="contact-form form-validation">
    <input type="hidden" name="request" value="request">
    <input type="hidden" name="pro[stock_remark]" value="<?php echo $stock_remark; ?>">
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
    get_template_part('forms/common/messages');
    ?>
    <script>
        console.log(typeof (_gaq.push));
    <?php if (pll_current_language('slug') == 'en') { ?>
            _gaq.push(['_trackEvent', 'Reguest-Registration-EN', 'Request-EN', 'Request-Click-EN']);
    <?php } else { ?>
            _gaq.push(['_trackEvent', 'Reguest-Registration-DE', 'Request-DE', 'Request-Click-DE']);
    <?php } ?>
    </script>
<?php } ?>