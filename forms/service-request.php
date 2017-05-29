<?php
/** @var ProRMForms_ServiceRequest $form */
$form = Tpl::get('form');
$client_view = Tpl::get('client_view');
$anchor = Tpl::get('form_1_anchor');
$id_form = 'testing';  
$analitic_name = 'Send_support';

$topicOptions = array_merge(
        array(
    '0' => __('select please', ProRMTheme::TEXTDOMAIN)
        ), $form->getTopicOptions()
);

$dynamics_version_options = $form->getDynamicsVersionOptions();
$prorm_product_options = $form->getPrormProductOptions();


$formSubmitted = Tpl::get('form_submitted');


?>

<form id="<?php echo $anchor ?>" action="" method="post" role="form" class="contact-form form-validation">
    <input type="hidden" name="service-request" value="service-request">
    <input type="hidden" name="type-email" value="service-request">
    <input class="analitic_name" type="hidden" name="<?= $analitic_name; ?>" value="<?= $analitic_name; ?>">
    
    <div class="input-holder">
        <?php ProRMForms::select('dynamics_version', '', $dynamics_version_options, true); ?>
        <?php ProRMForms::select('prorm_product', '', $prorm_product_options, true); ?>
    </div>
    
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
    
    <div class="button-group-outer-row">
        
        <div class="button-group-outer-left">
            <div class="btn-holder">
                <?php if ($client_view) { ?>
                    <div class="fast-view"><a href="<?php echo the_cfc_field('support', 'client_url'); ?>"><?php echo the_cfc_field('support', 'client_text'); ?></a></div>
                <?php } ?>
            </div>
        </div>
        
        <div class="button-group-outer-right button-group-outer-button">
             <?php ProRMForms::field('send_button', '', $id_form . '-button') ?>
        </div>
        
        
    </div>
    
    
    
    
    
    
</form> <?php
if ($formSubmitted) {
    get_template_part('forms/common/messages');
}
?>