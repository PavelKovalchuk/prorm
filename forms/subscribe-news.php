<?php
$formSubmitted = Tpl::get('form_submitted');
$id_form = "subscribe-news";
$analitic_name = 'Subscribe-news';

//["HTTP_HOST"]["post_name"]
//var_dump($post);

$add_class_field = '';

if(is_home()){ 
            
   $add_class_field = 'line-type';
//   $add_class_recaptcha = 'hidden-recapctha';
        
} 
if(!$form){
    $form = Tpl::get('form');
    
    
}                        
$fetcher = false;

if($form){
    $fetcher = get_class($form->getFetcher());
}


?>

<form id="<?= $id_form; ?>" action="" class="contact-form form-validation ph-move <?php echo $add_class_field; ?> hidden-recapctha" method="post" role="form">
    <input type="hidden" name="subscribe-news" value="subscribe-news">
   
    <input type="hidden" class="analitic_name" name="<?php echo $analitic_name; ?>" value="<?php echo $analitic_name; ?>">
    <input type="hidden" class="fetcher_name" name="fetcher-name" value="<?php echo $fetcher; ?>">
    
        
        <div class="field-holder field-holder-name <?php echo $add_class_field; ?>">
             <?php ProRMForms::inputField('first_name', 'text', __('Name', ProRMTheme::TEXTDOMAIN), false,  true); ?>
        </div>
              
        <div class="field-holder field-holder-email <?php echo $add_class_field; ?>">
            <?php ProRMForms::inputField('email', 'email',  __('E-Mail', ProRMTheme::TEXTDOMAIN), false, true); ?>
        </div>
    
        

        <div class="field-holder field-holder-recaptcha <?php echo $add_class_field; ?>">
            <div class="input-col col">
                <!--For using recaptcha-->
                 <?php 
                    if(!$form){
                        $form = Tpl::get('form');
                    }
                    $form->get_recaptcha_html('left'); 
                ?>
            </div>
        </div>
        
        <div class="btn-holder <?php echo $add_class_field; ?>">
             <div class="loader" id="js-loader"></div>
            <?php ProRMForms::field('subscribe', '', $id_form . '-button') ?>
        </div>
        
   
   
    
    
  
    
</form>


    <?php
if ($formSubmitted) {
    get_template_part('forms/common/messages');
}
?>