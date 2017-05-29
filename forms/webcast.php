<?php
$formSubmitted = Tpl::get('form_submitted');

get_template_part('forms/common/messages');

if (!$formSubmitted) {
    ?>
    <form id="webcast" class="pro-form" action="" method="post" role="form">
        <input type="hidden" name="webcast" value="webcast">
        <div class="row">
            <div class="col-md-5 form-col">
				<?php ProRMForms::field('productswebinar', true) ?>
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
<?php } else { ?>
    <script>
        console.log(typeof(_gaq.push));
        <?php if(pll_current_language('slug') == 'en'){ ?>
        _gaq.push(['_trackEvent', 'Webinar-EN', 'Send', 'Webinar-Form']);
        <?php } else { ?>
        _gaq.push(['_trackEvent', 'Webinar-DE', 'Send', 'Webinar-Form']);
        <?php }?>
    </script>
<?php } ?>