<?php
$formSubmitted = Tpl::get('form_submitted');

get_template_part('forms/common/messages');

if (!$formSubmitted) {
    ?>
    <form class="pro-form" action="" method="post" role="form">
        <input type="hidden" name="request-products" value="request-products">
        <div class="row">
            <div class="col-md-5 form-col">
                <?php ProRMForms::field('edition', true) ?>
                <br>
                <br>
                <?php get_template_part('forms/common/contact-info'); ?>
                <!-- <?php ProRMForms::field('number_of_users', true) ?>-->
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
        _gaq.push(['_trackEvent', 'Reguest-Registration-EN', 'Request-EN', 'Request-Click-EN']);
        <?php } else { ?>
        _gaq.push(['_trackEvent', 'Reguest-Registration-DE', 'Request-DE', 'Request-Click-DE']);
        <?php }?>
    </script>
<?php } ?>