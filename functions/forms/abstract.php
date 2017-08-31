<?php

abstract class ProRMForms_Abstract
{
    protected $formName;

    protected $post;

    protected $fetcher;
    
    protected $multi_recaptcha = false;
    
    public $is_recaptcha = false;
    
    public $sitekey_recaptcha;
    
    public $can_display_recaptcha;
    
    public $current_language = 'en';

    public function __construct(WP_Post $formPost)
    {
        $this->post = $formPost;
        
        $this->multi_recaptcha = $this->check_multi_recaptcha();
        
        $this->initRecaptcha();
        
    }

    public static function addCustomFields()
    {
        // do nothing by default
    }

    protected static function getLangSlugs()
    {
        /** @var $polylang PLL_Base */
        global $polylang;
        $slugs = array();
        if (isset($polylang)) {
//            $languages = $polylang->get_languages_list();
            $languages = PLL()->model->get_languages_list();
            if ($languages) {
                foreach ($languages as $language) {
                    $slugs[] = $language->slug;
                }
            }
        }
        return $slugs;
    }

    protected static function getLocations($formName)
    {
        $locations = array();
        foreach (self::getLangSlugs() as $slug) {
            $form = ProRMForms::getFormPost($formName . '-' . $slug, false);
            if ($form && $form->ID) {
                $locations[] = array (
                    array (
                        'param' => 'post',
                        'operator' => '==',
                        'value' => $form->ID,
                        'order_no' => 0,
                        'group_no' => 0,
                    ),
                );
            }
        }

        return $locations;
    }

    public function render()
    {
        ob_start();
       
        get_template_part(ProRMForms::getFormsDir() . '/' . $this->formName);
        $formHtml = ob_get_clean();

        // fix view placeholder input fields IE7-IE9
        if($this->checkUserAgentIE9()){
            $formHtml .= get_template_part('ie9form-fix');
        }

        return $formHtml;
    }

    /**
     * @return \WP_Post
     */
    public function getPost()
    {
        return $this->post;
    }

    /**
     * @return ProRMFormFetcher
     */
    public function getFetcher()
    {
        return $this->fetcher;
    }

    public function getSuccessMessage()
    {
        return get_field('form_success_message', $this->post->ID);
    }

    public function getCountries()
    {
        $json = file_get_contents(dirname(__FILE__) . '/countries.json');
        $countries = json_decode($json, true);
        $options = array(
            '0' => __('select please', ProRMTheme::TEXTDOMAIN)
        );
        foreach ($countries as $country) {
            $key = $country['code'] . ', ' . $country['name'];
            $options[$key] = $country['name'];
        }
        return $options;
    }

    public function isSubmitted()
    {
        return isset($_POST[$this->formName]);
    }
    public function checkUserAgentIE9(){
        $cli_brows_ie9 = false;
        if ($cli_brows_name = stripos($_SERVER['HTTP_USER_AGENT'], "MSIE")) {
            $cli_brows_ie_rev = intval(substr($_SERVER['HTTP_USER_AGENT'], $cli_brows_name + 5, 1));
            if (($cli_brows_ie_rev >= 7) && ($cli_brows_ie_rev <= 9)) $cli_brows_ie9 = true;
        }
        return $cli_brows_ie9;
    }
    
    public function get_recaptcha_html($text_align = 'right'){
    
        if($this->can_display_recaptcha){
           $text_align_class = 'recaptcha-outer-' . $text_align;
            ?>
            <div class="recaptcha-outer <?php echo $text_align_class; ?> required-field">
                <div class="g-recaptcha" id="<?php echo $this->post->ID; ?>" data-size="normal" data-sitekey="<?php echo $this->sitekey_recaptcha; ?>"></div>
                <span class="error-message error-message-recaptcha">
                    <span class="arrow-up">*</span>
                    <span><?php _e('This field is required.', ProRMTheme::TEXTDOMAIN); ?></span>
                </span>
            </div>
            <input type="hidden" name="form_id" value="<?php echo $this->post->ID; ?>">
            
            <?php
            
        }
        
    }
    
    public function initRecaptcha(){
        
        $this->is_recaptcha = apply_filters( 'is_recaptcha_filter', $this->post->ID );
        $this->sitekey_recaptcha = apply_filters( 'sitekey_recaptcha_filter', $this->is_recaptcha);
        
        if($this->is_recaptcha && $this->sitekey_recaptcha){
            $this->can_display_recaptcha = true;
            $this->current_language = apply_filters( 'get_recaptcha_language_filter', $this->post->ID );
//            $this->enqueue_recaptcha_script();////////////////////////////////////////////////////////!
            
        }
        
    }
    
    public function enqueue_recaptcha_script(){
   
        if($this->current_language && !$this->multi_recaptcha){
           
                $script_local = 'https://www.google.com/recaptcha/api.js?hl=' . $this->current_language;
                wp_register_script( 'recaptcha', $script_local); 
                wp_enqueue_script( 'recaptcha' );
            
        }
        
        if($this->multi_recaptcha){
          
            //add manually in header
            // /functions/recaptcha.php/ get_multi_recaptcha_js($sitekey_recaptcha);
            
            //
        }
      
    }
    
    
    public function check_multi_recaptcha(){
        
        global $post;
        
        return get_field('if_2_recaptchas' , $post->ID);
        
    }
    
    
    public function multi_recaptcha_js() {
         ?>
            <script src="https://www.google.com/recaptcha/api.js?hl=de&onload=CaptchaCallback&render=explicit" async defer></script>
            <script>
                var CaptchaCallback = function() {
                    var captchas = document.getElementsByClassName("g-recaptcha");

                    for (z = 0; z < captchas.length; z++) { 
                        grecaptcha.render(captchas[z], {'sitekey' : '<?php echo $sitekey_recaptcha; ?>'});
                    }

            };

            </script>
        
        <?php
    }
    
    
    /**
     * @return formName
     */
    public function getFormName(){
        return $this->formName;
    }

}