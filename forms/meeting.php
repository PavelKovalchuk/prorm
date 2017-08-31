<?php
$formSubmitted = Tpl::get('form_submitted');
$id_form = "meeting";
$analitic_name = 'Send_contacts';


$form = Tpl::get('form');
$form_name = $form->getFormName();

$options = $form->getEventsObjects();

$events_header = $form->getEventsHeader();

$fetcher = false;

if($form){
    $fetcher = get_class($form->getFetcher());
}

?>

<form id="<?= $id_form; ?>" class="contact-form form-validation ph-move hidden-recapctha" method="post">
    <input type="hidden" name="meeting" value="meeting">
    <input type="hidden" name="page-url" value="<?php echo $post->post_name; ?>">
    <input type="hidden" name="page-title" value="<?php echo $post->post_title; ?>">
    <input type="hidden" class="analitic_name" name="<?php echo $analitic_name; ?>" value="<?php echo $analitic_name; ?>">
    <input type="hidden" class="fetcher_name" name="fetcher-name" value="<?php echo $fetcher; ?>">
    
    <div class="field-holder radio-holder events-holder">
        <div class="events-header radio-block">
            <h3 class="marsala-colour"><?php echo $events_header; ?></h3>
        </div>
            <?php ProRMForms::radioField('event_name', $options, true, true); ?>
    </div>
    
    <div class="field-holder radio-holder">
        <?php ProRMForms::radioField('salutation', array(__('Mr.' , ProRMTheme::TEXTDOMAIN) => __('Mr' , ProRMTheme::TEXTDOMAIN), __('Ms.' , ProRMTheme::TEXTDOMAIN) => __('Ms' , ProRMTheme::TEXTDOMAIN)), true, false, $form_name); ?>
    </div>
    
    <div class="left-f-block">
       
        <div class="field-holder">
             <?php ProRMForms::inputField('first_name', 'text', __('First Name' , ProRMTheme::TEXTDOMAIN), false, true, $form_name); ?>
        </div>
    
    </div>
    
    <div class="right-f-block">
        
        <div class="field-holder">
            <?php ProRMForms::inputField('last_name', 'text', __('Last Name', ProRMTheme::TEXTDOMAIN), false, true, $form_name); ?>
        </div>
        
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
        
        <div class="field-holder">
            <?php ProRMForms::textareaField('notes', __('Message', ProRMTheme::TEXTDOMAIN), false, false, $form_name); ?>
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
            <div class="loader js-loader"></div>
            <?php ProRMForms::field('send_button_3d', '', $id_form . '-button') ?>
        </div>
   
    
    
  
    
</form>


    <?php
if ($formSubmitted) {
    get_template_part('forms/common/messages');
}
?>