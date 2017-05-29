<?php
$formSubmitted = Tpl::get('form_submitted');
$id_form = "support";
$analitic_name = 'Send_contacts';


$form = Tpl::get('form');

$dynamics_version_options = $form->getDynamicsVersionOptions();
$prorm_product_options = $form->getPrormProductOptions();
$fastviewer = $form->getFastViewer();

$fetcher = false;

if($form){
    $fetcher = get_class($form->getFetcher());
}


?>

<form id="<?= $id_form; ?>" action="" class="contact-form form-validation ph-move hidden-recapctha" method="post" role="form">
    <input type="hidden" name="support" value="support">
    <input type="hidden" name="page-url" value="<?php echo $post->post_name; ?>">
    <input type="hidden" name="page-title" value="<?php echo $post->post_title; ?>">
    <input type="hidden" class="analitic_name" name="<?php echo $analitic_name; ?>" value="<?php echo $analitic_name; ?>">
    <input type="hidden" class="fetcher_name" name="fetcher-name" value="<?php echo $fetcher; ?>">
    
    
    <div class="field-holder products-holder">
        
        <?php ProRMForms::select('dynamics_version', '', $dynamics_version_options, true); ?>
        
        
    </div>

    <div class="field-holder products-holder">
        
        <?php ProRMForms::select('prorm_product', '', $prorm_product_options, true); ?>
        
    </div>
    
    <div class="field-holder radio-holder">
        <?php ProRMForms::radioField('salutation', array(__('Mr.' , ProRMTheme::TEXTDOMAIN) => __('Mr' , ProRMTheme::TEXTDOMAIN), __('Ms.' , ProRMTheme::TEXTDOMAIN) => __('Mrs' , ProRMTheme::TEXTDOMAIN)), true); ?>
    </div>

    
    <div class="left-f-block">

        <div class="field-holder">
             <?php ProRMForms::inputField('first_name', 'text', __('First Name' , ProRMTheme::TEXTDOMAIN), false, true); ?>
        </div>

    </div>

    <div class="right-f-block">

        <div class="field-holder">
            <?php ProRMForms::inputField('last_name', 'text', __('Last Name', ProRMTheme::TEXTDOMAIN), false, true); ?>
        </div>

    </div>



    <div class="field-holder">
        <?php ProRMForms::inputField('company', 'text', __('Company Name', ProRMTheme::TEXTDOMAIN), false, true); ?>
    </div>

    <div class="field-holder">
        <?php ProRMForms::inputField('email', 'email', __('E-Mail', ProRMTheme::TEXTDOMAIN), false, true); ?>
    </div>

    <div class="field-holder">
        <?php ProRMForms::inputField('phone', 'text', __('Phone', ProRMTheme::TEXTDOMAIN), false, false); ?>
    </div>

    <div class="field-holder">
        <?php ProRMForms::textareaField('notes', __('Message', ProRMTheme::TEXTDOMAIN), false, false); ?>
    </div>

    <div class="field-holder">
       <?php echo get_text_cookies_width('Contact me'); ?>
    </div>

    <div class="field-holder field-holder-recaptcha">
        <div class="input-col col">
            <!--For using recaptcha-->
             <?php 
                if(!$form){
                    $form = Tpl::get('form');
                }
                $form->get_recaptcha_html('right'); 
            ?>
        </div>
    </div>

    
    <div class="btn-holder cf">
            <div class="loader" id="js-loader"></div>
            <?php ProRMForms::field('send_button_3d', '', $id_form . '-button') ?>
    </div>
        
    
    <div class="field-holder">
        
        
        <div class="field-holder fastviewer-outer">
            <?php if ($fastviewer) { ?>
                <div class="fastviewer-inner input-col">
                    <a href="<?php echo $fastviewer[0]['fastviewer_url']; ?>" class="fastviewer-link">
                         <img src="<?php echo $fastviewer[0]['fastviewer_img']; ?>"
                             class="fastviewer-img"
                             alt="<?php echo $fastviewer[0]['fastviewer_img_alt']; ?>"
                            />
                         <p class="marsala-colour fastviewer-text"><?php echo $fastviewer[0]['fastviewer_title']; ?></p>
                    </a>
                </div>
            <?php } ?>
        </div>
        
    </div>
        
        
</form>


    <?php
if ($formSubmitted) {
    get_template_part('forms/common/messages');
}
?>