<?php
/** @var ProRMForms_SupportRequest $form */
$form = Tpl::get('form');

$topicOptions = array_merge(
    array(
        '0' => __('select please', ProRMTheme::TEXTDOMAIN)
    ),
    $form->getTopicOptions()
);

get_template_part('forms/common/messages');

$formSubmitted = Tpl::get('form_submitted');
if (!$formSubmitted) {
    ?>
    <form class="pro-form" action="" method="post" role="form" enctype="multipart/form-data">
        <input type="hidden" name="support-request" value="support-request">
        <div class="row">
            <div class="col-md-5 form-col">
                <div class="form-group">
                    <label for="pro_topic" class="red">
                        <?php _e('What topic do you<br>have question about?', ProRMTheme::TEXTDOMAIN); ?>
                    </label>
                    <?php ProRMForms::select('topic', null, $topicOptions) ?>
                </div>


                <?php get_template_part('forms/common/contact-info'); ?>
                <?php get_template_part('forms/common/address-info'); ?>
            </div>
            <div class="col-md-7 form-col">
                <?php ProRMForms::textarea_cust1('textarea_wattach', 'notes', __('Notes', ProRMTheme::TEXTDOMAIN), true); ?>


                <?php get_template_part('forms/common/right-col'); ?>
            </div>
        </div>
    </form>
<?php } ?>