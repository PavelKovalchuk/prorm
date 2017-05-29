<?php
$formSubmitted = Tpl::get('form_submitted');

get_template_part('forms/common/messages');

if (!$formSubmitted) {
?>
<form class="pro-form" id="conference-form" action="" method="post" role="form">
    <input type="hidden" name="conference" value="conference">
    <div class="row">
        <div class="col-md-5 form-col">
            <?php get_template_part('forms/common/contact-info'); ?>
            <!-- <?php ProRMForms::field('number_of_users', true) ?>-->
            <?php get_template_part('forms/common/address-info'); ?>
        </div>
        <div class="col-md-7 form-col">

            <?php get_template_part('forms/common/right-col') ?>
        </div>
    </div>
</form>
<?php } ?>
