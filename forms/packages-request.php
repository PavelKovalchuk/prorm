<?php
$formSubmitted = Tpl::get('form_submitted');

get_template_part('forms/common/messages');

if (!$formSubmitted) {
?>
<form class="pro-form" action="" method="post" role="form" id="packages-request-form">
    <input type="hidden" name="packages-request" value="packages-request">
    <div class="row">
        <div class="col-md-5 form-col">
            <?php ProRMForms::field('package', true) ?>
            <br>
            <br>
            <?php get_template_part('forms/common/contact-info'); ?>
            <?php get_template_part('forms/common/address-info'); ?>
        </div>
        <div class="col-md-7 form-col">
            <?php ProRMForms::field('notes', false) ?>
            <br>
            <br>
            <?php get_template_part('forms/common/right-col') ?>
        </div>
    </div>
</form>
<?php }