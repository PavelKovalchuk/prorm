<?php
$formSubmitted = Tpl::get('form_submitted');

get_template_part('forms/common/messages');

if (!$formSubmitted) {
?>
<form class="pro-form" action="" method="post" role="form" id="meet-us-form">
    <input type="hidden" name="meet-us" value="meet-us">
    <div class="row">
        <div class="col-md-5 form-col">
            <?php ProRMForms::field('microsoft_desired_date', true) ?>
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
<?php } else { ?>
    <script>
        console.log(typeof(_gaq.push));
        <?php if(pll_current_language('slug') == 'en'){ ?>
        _gaq.push(['_trackEvent', 'Meet us-Registration-EN', 'Meet us-EN', 'Meet us-Click-EN']);
        <?php } else { ?>
        _gaq.push(['_trackEvent', 'Meet us-Registration-DE', 'Meet us-DE', 'Meet us-Click-DE']);
        <?php }?>
    </script>
<?php } ?>