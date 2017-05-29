<?php

//For using recaptcha

//filters in abstract class ProRMForms_Abstract

add_filter('is_recaptcha_filter', 'is_recaptcha');
add_filter('is_recaptcha_crm', 'is_recaptcha');
add_filter('sitekey_recaptcha_filter', 'get_sitekey_recaptcha');
add_filter('get_recaptcha_language_filter', 'get_current_language');


function is_recaptcha($form_id){
    
    $form_ID = intval($form_id);
    $is_recaptcha =  get_field( "is_recaptcha", $form_ID );
    
    if($is_recaptcha){
        return TRUE;
    }else{
        return FALSE;
    }
    
}

function get_sitekey_recaptcha($is_recaptcha){
    
    if($is_recaptcha){
        $settings = Registry::get('settings');
        $sitekey_recaptcha = $settings->getOption('sitekey_recaptcha');

        if($sitekey_recaptcha){
            return $sitekey_recaptcha;
        }else{
            return FALSE;
        }
    }else{
        return FALSE;
    }
    
    
    
}

function get_recaptcha_html($sitekey_recaptcha){
    
    ?>
    <div class="recaptcha-outer">
        <div class="g-recaptcha" data-size="normal" data-sitekey="<?php echo $sitekey_recaptcha; ?>"></div>
    </div>
    <?php
}

function register_recaptcha_source(){
     
    $lang = pll_current_language();
    $script_local = 'https://www.google.com/recaptcha/api.js?hl=' . $lang;
    wp_register_script( 'recaptcha', $script_local); 
    wp_enqueue_script( 'recaptcha' );
}

function get_current_language($form_id){
    
    $lang = pll_current_language();
    
    if($lang){
        return $lang;
    }
    
    return FALSE;
    
}

function get_multi_recaptcha_js(){
    
    $sitekey_recaptcha = get_sitekey_recaptcha(true);
    ?>
    <script src="https://www.google.com/recaptcha/api.js?hl=<?php echo pll_current_language(); ?>&onload=CaptchaCallback&render=explicit" async defer></script>
    
    <script>

        var widgetsIdRecaptcha = [];  
        var recaptchaStartId = 'captchaId';
       
        var CaptchaCallback = function() {
            var captchas = document.getElementsByClassName("g-recaptcha");
            for (z = 0; z < captchas.length; z++) { 

                widgetsIdRecaptcha[recaptchaStartId + captchas[z].id] = grecaptcha.render(captchas[z].id, {'sitekey' : '<?php echo $sitekey_recaptcha; ?>'});
            }

        };


    </script>
    
<?php }


