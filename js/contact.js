var ERRORCLASS = "invalid",
        VALIDCLASS = "valid",
        ENGLISHTEXT = "Please fill in your phone.",
        DEITCHTEXT = "Bitte geben Sie eine Telefonnummer ein.";
jQuery(document).ready(function ($) {
    
//    var hiddenRecaptcha = false;
//    if($('form.hidden-recapctha').length > 0){
//        var hiddenRecaptcha = true;
//    }
    
    
    
// Name can't be blank
    $('.contact_first_name').on('input focusout', function () {
        
        var  parent = $(this).parents('.col');
        checkName($(this).val(), parent);
        if($(this).val().length > 0 ){
             checkSpace($(this).val(), parent);
        }
       
    });
    
    $('.contact_first_name').on('focusin', function () {
        var  parent = $(this).parents('.col');
        returnFocusState(parent);
        
        var currentForm = $(this).parents('.hidden-recapctha');
        if(currentForm.length > 0 ){
            displayRecaptcha($(this).parents('.hidden-recapctha'));
        }
        
    });
  
    $('.contact_last_name').on('input focusout', function () {
        var  parent = $(this).parents('.col');
        checkName($(this).val(), parent);
        if($(this).val().length > 0 ){
            checkSpace($(this).val(), parent);
        }
        
    });
    
    $('.contact_last_name').on('focusin', function () {
        var  parent = $(this).parents('.col');
        returnFocusState(parent);    
        
        var currentForm = $(this).parents('.hidden-recapctha');
        if(currentForm.length > 0 ){
            displayRecaptcha($(this).parents('.hidden-recapctha'));
        }
    });
    
    $('.contact_company').on('input focusout', function () {
        var  parent = $(this).parents('.col');

        checkCompany($(this).val(), parent);
        if($(this).val().length > 0 ){
            checkSpace($(this).val(), parent);
        }
        
    });
    
    $('.contact_company').on('focusin', function () {
        var  parent = $(this).parents('.col');
        returnFocusState(parent);     
        
        var currentForm = $(this).parents('.hidden-recapctha');
        if(currentForm.length > 0 ){
            displayRecaptcha($(this).parents('.hidden-recapctha'));
        }
    });
    
    // Email must be an email
    $('.contact_email').on('input focusout', function () {
        var parent = $(this).parents('.col');
        checkEmail($(this).val(), parent);
        if($(this).val().length > 0 ){
            checkSpace($(this).val(), parent);
        }
       
    });
    
    $('.contact_email').on('focusin', function () {
        var parent = $(this).parents('.col');
        returnFocusState(parent);    
          
        var currentForm = $(this).parents('.hidden-recapctha');
        if(currentForm.length > 0 ){
            displayRecaptcha($(this).parents('.hidden-recapctha'));
        }
       
    });
    
    
    $('#pro_dynamics_version').on('change', function () {
       
        var parent = $(this).parents('.col'),
        childrenS = $(this).val();
//            console.log(childrenS);
            
        addErrorClassSelect(childrenS, parent, true);
        
        var currentForm = $(this).parents('.hidden-recapctha');
        if(currentForm.length > 0 ){
            displayRecaptcha($(this).parents('.hidden-recapctha'));
        }
        
    });
    
    $('#pro_prorm_product').on('change', function () {
       
        var parent = $(this).parents('.col'),
        childrenS = $(this).val();
        addErrorClassSelect(childrenS, parent, true);
        
        var currentForm = $(this).parents('.hidden-recapctha');
        if(currentForm.length > 0 ){
            displayRecaptcha($(this).parents('.hidden-recapctha'));
        }
        
    });
   
    // Phone must be a phone
    if ($('.contact_phone').length){
        var text = '';
        if ($('#wrapper').hasClass('de')){
            
            text = DEITCHTEXT;
        } else {
            
            text = ENGLISHTEXT;
        }
        $('.contact_phone').after('<label for="before"></label><span class="error-message ">'+ text +'</span>');
        

    }
    $('.contact_phone').on('input focusout', function () {
        var parent = $(this).parents('.col');

        checkPhone($(this).val(), parent);
        
        if($(this).val().length > 0 ){
            checkSpace($(this).val(), parent);
        }
        
    });
    $('.contact_phone').on('focusin', function () {
        var parent = $(this).parents('.col');
        returnFocusState(parent);    
        
        var currentForm = $(this).parents('.hidden-recapctha');
        if(currentForm.length > 0 ){
            displayRecaptcha($(this).parents('.hidden-recapctha'));
        }
    });
    
    
    $('.contact_desired_date, .contact_data_usage, .contact_gender, .contact_event_name').on('change', function () {
        var parent = $(this).parents('.col'),
                check_parent = $(this).parents('span');
        setTimeout(function () {
            var is_checked = check_parent.hasClass('jcf-checked');
            addErrorClass(is_checked, parent);
        }, 200);
    });
    
    
 
    // Send form
    $(document).on('click', '.contact-button', function (e) {
        
        var $label, $text, $form = $(this).parents('.contact-form'),
        $radio = $form.find('.blocks'),
        $btn = $form.find('button');
        $loader = $form.find('#js-loader');
        
        
        if ($radio){
            $label = $radio.find('.jcf-label-active'),
            $text = $label.find('p').text();
        }
        e.preventDefault();
//    console.log($form.serialize());   
        ///for captcha
        var dataCaptcha = 'none';
        if($form.find('.g-recaptcha').length > 0){
             //THIS WILL TELL THE FORM IF THE USER IS CAPTCHA VERIFIED.
            var ci = recaptchaStartId + $form.find('.g-recaptcha').prop('id');

            dataCaptcha = grecaptcha.getResponse(widgetsIdRecaptcha[ci]);
        }else{
            dataCaptcha = false;
        }

        if(dataCaptcha){
            returnFocusState($form.find('.recaptcha-outer'));
            
        }
    
        $.ajax({
            url: ajax_object.ajax_url,
            type: 'POST',
            data: {
                action: 'contactform_action',
                form: $form.serialize(),
                textcheckbox: $text,
               
                ///for captcha
               captcha: dataCaptcha
            },
            beforeSend: function (data, xhr) {
               
                $btn.attr('disabled', true); 
    
                doLoader($loader);
                
                $form.find('.required-field').each(function () {
                                        
                    if ($(this).hasClass('radio-block')) {
                        
                        $(this).find('.check-row').each(function () {
                            var $parent = $(this).parents('.col'),
                                    $check_parent_radio = $(this).find('.jcf-radio'),
                                    $check_parent_checkbox = $(this).find('.jcf-checkbox'),
                                    is_checked = '';
                            if ($(this).hasClass('check-variant')) {
                                is_checked = $check_parent_radio.hasClass('jcf-checked');
                                addErrorClass(is_checked, $parent);
                                if (is_checked) {
                                    return false;
                                }
                            }
                            else {
                                is_checked = $check_parent_checkbox.hasClass('jcf-checked');
                                addErrorClass(is_checked, $parent);
                            }
                        });
                    }
                    
                    else if($(this).hasClass('select-group')){
                         //For SELECT
                        var parent = $(this),
                        childrenS = $(this).find('select').val();
                        addErrorClassSelect(childrenS, parent, true);
                    } 
                    else if($(this).hasClass('recaptcha-outer')){

                        var parent = $(this);  
                          
                        addErrorClass(dataCaptcha, parent);
                
                            displayRecaptcha($form);
                       
        
                    }
                    
//                    else if($(this).hasClass('contact_notes')){
//                        
//                        var parent = $(this);
//                        addErrorClass(dataCaptcha, parent, true);
//                                        
//                    }
                   
                    else {
                        var parent = $(this),
                        children = $(this).find('input'),
                        childVar = children.val();
                        
//                        addErrorClass(children, parent, true);
                        if(children.hasClass('contact_company')){
                            checkCompany(childVar, parent);
                            checkSpace(childVar, parent);
                        }
                        else if(children.hasClass('contact_email')){
                            checkEmail(childVar, parent);
                            checkSpace(childVar, parent);
                        }
                        else if(children.hasClass('contact_phone')){
                            checkPhone(childVar, parent);
                            checkSpace(childVar, parent);
                        }
                        else if(children.hasClass('contact_first_name') || children.hasClass('contact_last_name')){
                            checkName(childVar, parent);
                            checkSpace(childVar, parent);
                        }
                        else{
                            checkCompany(childVar, parent);
                            checkSpace(childVar, parent);
                        }
//                        checkEmpty(childVar, parent);
                    }
                });
                
                if ($form.find('.required-field').hasClass('invalid')) {
 
                    $btn.attr('disabled', false);
                    doLoader($loader);
                    return false;
                }
//                if ($form.find('.col').hasClass('invalid')) {
//                    console.log('.col is invalid');
//                    return false;
//                }
            },
            success: function (response, jqXHR, errorThrown) {

                $btn.attr('disabled', false);
                doLoader($loader);
                ///for captcha
                if(response.status === 'captcha_false' || response.status === 'captcha_needed' || response.status === 'none'){
                   
                    return false;
                }
                
                $form[0].reset();
                var $name_analitic = $form.find('.analitic_name').val();
//                dataLayer.push({'event': $name_analitic});
                jQuery('body').addClass('overflow-screen');
                
//                var modalForm = jQuery('#register-webinar');
//                if(modalForm.length > 0 && modalForm.css("display") === 'block' ){
//                    modalForm.css("display", "none");
//                }
                
                $form.siblings('.window-overlay').addClass('show-modal');
                
                $form.find('.required-field').each(function () {
                    returnFocusState($(this));
                });
                
                var inpPhone = $form.find('.contact_phone');
               
                if( inpPhone.length > 0 ){
                    returnFocusState(inpPhone.parent());
                }
                
                window.location.hash = 'form_success';
            },
            error: function(response, jqXHR, errorThrown){
                $btn.attr('disabled', false); 
                doLoader($loader);

            }
        });
        return false;
    });
    
    
    function returnFocusState(parent){
    
        if ($(parent).hasClass(ERRORCLASS)){
           parent.removeClass(ERRORCLASS);
        }
        if ($(parent).hasClass(VALIDCLASS)){
           parent.removeClass(VALIDCLASS);
        }
    
    }
    
    function checkName(val, parent){
       
        if(val.length > 0 ){
            var re = /^[a-zA-ZäüößÖÜÄ\s]+$/,
            is_name = re.test(val); 
    
            addErrorClass(is_name, parent);
        }
        
        
    }
    
    function checkCompany(val, parent){
        
        if(val.length > 0 ){
            var re = /^[0-9a-zA-ZäüößÖÜÄ\s]+$/,
            is_name = re.test(val); 
    
            addErrorClass(is_name, parent);
        }
     
    }
    
    function checkEmail(val, parent){
        
        if(val.length > 0 ){
            var re = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/,
            is_email = re.test(val);
            addErrorClass(is_email, parent);
        }
       
        
    }
    
    function checkPhone(val, parent){
        
        if (val == '' || !val){
            $(val).parent().removeClass('invalid');
        }else{
            var re = /^[/+]?[0-9-/(/)\s]+$/,
            is_phone = re.test(val);
            addErrorClass(is_phone, parent);
        }
        
    }
    
    function stripTags(val){
        if(val.length > 0 ){
           var regex = /(<([^>]+)>)/ig;
           var result = val.replace(regex, "");
           return result;
        }
    }
    
    function displayRecaptcha(form){
       
        
        var rec =  form.find('.field-holder-recaptcha');
        var buttonRow = form.find('.btn-holder');
        
        if(rec.length > 0 && buttonRow.length > 0){
            
            var visibility = rec.css('display');
       
            if(visibility === 'none'){
                rec.slideDown(300);
                buttonRow.addClass('button-move-down');

    //            row.slideUp('slow');
            }
 
        }
       
    }
  
});

function addErrorClass(is_val, parent) {
    if (!is_val) {
        parent.removeClass(VALIDCLASS).addClass(ERRORCLASS);
    } else {
        parent.addClass(VALIDCLASS).removeClass(ERRORCLASS);
    }
}

function addErrorClassSelect(is_val, parent) {
    if (is_val ==  '0') {
        parent.removeClass(VALIDCLASS).addClass(ERRORCLASS);
    } else {
        parent.addClass(VALIDCLASS).removeClass(ERRORCLASS);
    }
}

function checkSpace(val, parent){
//    console.log(val.length);
//    if(val.length > 0 ){
        if (val.trim().length === 0){
            addErrorClass(false, parent);
//        }
    }
 
}

function checkEmpty(val, parent){
    if(val.length > 0 ){
        addErrorClass(false, parent);
    }
}

function doLoader($loader){
        
    if($loader.length > 0 ){
        
        if($loader.css('display') === 'none'){
            $loader.css('display', 'block');
        }else{
            $loader.css('display', 'none');
        }
        
    }
}




(function($){
	function floatLabel(inputType){
                
		$(inputType).each(function(){
			var $this = $(this);
			// on focus add cladd active to label
                        var label = $this.siblings('.floated');
                        
                        if(label.length > 0){
                            
                            $this.focus(function(){ 
				label.addClass("active");
                            });
                            //on blur check field and remove class if needed
                            $this.blur(function(){
                                    if($this.val() === '' || $this.val() === 'blank'){
                                           label.removeClass("active");
                                    }
                            });
                            
                        }
                        
			
		});
	}
	// just add a class of "js-float-label to the input field!"
	floatLabel(".js-float-label");
})(jQuery);


