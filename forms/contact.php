<?php $formSubmitted = Tpl::get('form_submitted'); ?>
<form class="pro-form" action="" method="post" role="form" id="contact-form">
    <input type="hidden" name="contact" value="contact">
    <div class="row">
        <div class="col-md-5 form-col">
            <?php get_template_part('forms/common/contact-info'); ?>
            <?php get_template_part('forms/common/address-info'); ?>
        </div>
        <div class="col-md-7 form-col">
            <?php ProRMForms::field('notes', false) ?>
            <br>
            <?php get_template_part('forms/common/right-col'); ?>
        </div>
    </div>
</form> <?php
if ($formSubmitted) {
    get_template_part('forms/common/messages');
}
?>