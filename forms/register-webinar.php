<?php
$formSubmitted = Tpl::get('form_submitted');
$id_form = "register-webinar";
$analitic_name = 'Register-webinar';

$id_button = get_form_button_id(Tpl::get('general_page_id'), $id_form);

//["HTTP_HOST"]["post_name"]
//var_dump($post);
$fetcher = false;
if(!$form){
    $form = Tpl::get('form');
    $form_name = $form->getFormName();
    
}
if($form){
    $fetcher = get_class($form->getFetcher());
}


?>

<form id="<?= $id_form; ?>" class="contact-form form-validation ph-move hidden-recapctha" method="post">
    <input type="hidden" name="register-webinar" value="register-webinar">
    <input type="hidden" name="page-url" value="<?php echo $post->post_name; ?>">
    <input type="hidden" name="page-title" value="<?php echo $post->post_title; ?>">
    <input type="hidden" class="analitic_name" name="<?php echo $analitic_name; ?>" value="<?php echo $analitic_name; ?>">
    <input type="hidden" class="fetcher_name" name="fetcher-name" value="<?php echo $fetcher; ?>">
    
        <div class="field-holder radio-holder">
            <?php ProRMForms::radioField('salutation', array(__('Mr.' , ProRMTheme::TEXTDOMAIN) => __('Mr' , ProRMTheme::TEXTDOMAIN), __('Ms.' , ProRMTheme::TEXTDOMAIN) => __('Ms' , ProRMTheme::TEXTDOMAIN)), true, false, $form_name); ?>
        </div>
    
        <div class="field-holder">
             <?php ProRMForms::inputField('first_name', 'text', __('First Name' , ProRMTheme::TEXTDOMAIN), false, true, $form_name); ?>
        </div>
        
        <div class="field-holder">
            <?php ProRMForms::inputField('last_name', 'text', __('Last Name', ProRMTheme::TEXTDOMAIN), false, true, $form_name); ?>
        </div>
        
        <div class="field-holder">
            <?php ProRMForms::inputField('company', 'text', __('Company Name', ProRMTheme::TEXTDOMAIN), false, true, $form_name); ?>
        </div>
        
        <div class="field-holder">
            <?php ProRMForms::inputField('email', 'email', __('E-Mail', ProRMTheme::TEXTDOMAIN), false, true, $form_name); ?>
        </div>
        
        <div class="field-holder">
            <?php ProRMForms::inputField('phone', 'text', __('Phone', ProRMTheme::TEXTDOMAIN), false, false, $form_name); ?>
        </div>
        
                
        <div class="field-holder text-right">
           <?php echo get_text_cookies_width('Register'); ?>
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
        
        <div class="btn-holder">
             <div class="loader js-loader"></div>
            <?php ProRMForms::field('register_button', '', $id_button) ?>
        </div>
        
   
   
    
    
  
    
</form>


    <?php
if ($formSubmitted) {
    get_template_part('forms/common/messages');
}
?>