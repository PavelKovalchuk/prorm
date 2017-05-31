<?php

class CrmClient {

    protected $fetcher;

    public $subj;


    /**
     * todo: add ability to configure from admin
     * @deprecated
     * @var string
     */
    protected $fromName = 'CRM Client';

    /**
     * todo: add ability to configure from admin
     * @deprecated
     * @var string
     */
    protected $fromEmail = 'crm-client@promx.staging.acceptic.com';

    /**
     * todo: add ability to configure from admin
     * @deprecated
     * @var string
     */
    protected $liveToEmail = 'websitesleads@promx.net';

    /**
     * @deprecated
     * @var string
     */
    protected $testToEmail = 'olegkriklivets@gmail.com';
    //protected $testToEmail = 'twebsite@promx.net';

    /** @var string  */
    protected $contentType = 'text/plain';

    /** @var string  */
    protected $charset = 'utf-8';

    /** @var string  */
    protected $keyValueDelimiter = ':';

    /** @var string  */
    protected $linesDelimiter = "\r\n";

    /** @var string  */
    protected $eolReplacement = ' ';
    
    protected $isTestingMode = false;
    
    public $has_recaptcha = false;
    
    public $is_valid_recaptcha = false;
    
    protected $status = 'none';
    
    public $captcha_test = '';

    public function __construct() {
        /** @var ProRMSettings $settings */
        $settings = Registry::get('settings');
//        if ($settings->getOption('forms_crm_is_testing_mode')) {
//            $this->setIsTestingMode(true);
//        }
    }
    
    
    public function setFetcher($fetcher){
        $this->fetcher = $fetcher;
    }
    
    public function getFetcher(){
        return $this->fetcher;
    }
    
    public function isFetcher(){
        if(isset($this->fetcher)){
            return true;
        }
        return false;
    }


    public function send() {
        if (!$toEmail) {
            $toEmail = $this->getToEmail();
        }
        $myemail = $this->testToEmail;
        
        if ($_POST) {
            $values = array();
            
            parse_str($_POST['form'], $values);
            
            
            if(!empty($values['fetcher-name'])){
                $this->setFetcher(wp_strip_all_tags( $values['fetcher-name'], 0 ));
            }
            
            foreach ($values['pro'] as $key => $value) {
                $values['pro'][$key] = wp_strip_all_tags( $value, 0 );
            }
            
            
            
            if(!empty($_POST['textcheckbox'])){
                $textCheckbox = array();
                parse_str($_POST['textcheckbox'], $textCheckbox);
            } 
            
            
            session_start();
            
            $mappedData = $_SESSION['mappedData'];
            
            if( $this->isFetcher() ){
                $datas = $_SESSION[$this->getFetcher()]['datas'];
                $subject = $_SESSION[$this->getFetcher()]['Subject'];
            }else{
                $datas = $_SESSION['datas'];
                $subject = $_SESSION['Subject'];
            }
            
            
            
            $fieldsMap = $_SESSION['fieldsMap'];
            $language = $_SESSION['language'];
            if(!empty($_SESSION['Events'])) {
                $events = $_SESSION['Events'];
            } 
            
            
             ///for captcha
            
            $this->has_recaptcha = apply_filters( 'is_recaptcha_crm', intval($values["form_id"]) ); //functions/recaptcha.php
            
            if($this->has_recaptcha){
               
               $this->is_valid_recaptcha = $this->checkRecaptcha($_POST["captcha"]);
               
            }
            
            if($this->has_recaptcha && !$this->is_valid_recaptcha){
                
                $resp = array(
                        'status' => $this->status, 
                        '$toEmail' => $toEmail, 
                        '$this->has_recaptcha' => $this->has_recaptcha,
                        '$this->is_valid_recaptcha' => $this->is_valid_recaptcha,
                        '$this->captcha_test' => $this->captcha_test
                        
                                              
                );
                
                wp_send_json($resp);
                
                exit();

            }
                
            
//            $mappedData = unserialize($_SESSION['mappedData']);
            $toEmail = $this->getToEmail();
            if (!$toEmail) {
                $toEmail = $this->getToEmail();
            }
            $headers = $this->getHeaders();
            $attachments = $this->getAttachments();
            
            $fields = '';

            foreach ($datas as $k => $v) {
                $fields .=  $k . ":" . $v. "\n";
            }
            foreach ($fieldsMap as $fk => $fv) {
                $fields .= $fv . ":"  . $values['pro'][$fk] ."\n" ;
            }
            if(!empty($_SESSION['Events'])) {
                foreach ($events as $k => $v) {
                    $fields .=  $k . ":" . $v. "\n";
                }
            }
            if(!empty($_POST['textcheckbox'])){
                foreach ($textCheckbox as $k => $v) {
                    $fields .= "Description:" . str_replace("_", " ", $k) . "\n";
                }
            }
            
            
            if(!empty($values['page-url'])){
                $fields .= "PageURL:" .$values['page-url']. "\n";
            }
            if(!empty($values['page-title'])){
                $fields .= "PageTitle:" . $values['page-title']. "\n";
            }
            
            
            
            $error = '';
            $this->status = 'success';
            
            if(!empty($values["type-email"]) && $values["type-email"] == 'service-request'){
                
                $toEmail = $this->getToSupportEmail();
               
            }else{
                
                $toEmail = $this->getToEmail();
                if (!$toEmail) {
                    $toEmail = $this->getToEmail();
                }
                
            }
        }
//        $message = "fields - " . $fields . " subject " . $subject . " mapped Data" . $data . "language - " . $lang .' textCheckbox - ' . $textbox . "</n>" . $all . ' language -' . $lang . "\n" .$rr . 'email - ' . $toEmail . "values" . $values . $ss;
        $message = $fields;
        
        get_currentuserinfo();
        
         if($this->status == 'success'){
            
            wp_mail($toEmail, $subject, $message, $headers, $attachments);
            
        }
        
        $resp = array(
            'status' => $this->status, 
            'errmessage' => $error
           
                
        );
        
        wp_send_json($resp);
    }

    /**
     * Add script and localize form
     */
    public function ajaxForm() {
        if (!function_exists('contactform_add_script')) {

            /**
             * Add script and localize form
             */
            function contactform_add_script() {
                wp_enqueue_script('contact-js', get_template_directory_uri() . '/js/contact2017.js"', array('jquery'), false, true);
                wp_localize_script(
                    'contact-js', 'ajax_object', array(
                    'ajax_url' => admin_url('admin-ajax.php')
                        )
                );
            }

        }

        add_action('wp_enqueue_scripts', 'contactform_add_script', 99);
        $this->postForm();
    }

    /*
     * Add to wp request action contact form
     */

    public function postForm() {
        add_action('wp_ajax_contactform_action', array($this, 'send'));
        add_action('wp_ajax_nopriv_contactform_action', array($this, 'send'));
    }

    protected function getToEmail() {
        /** @var ProRMSettings $settings */
        $settings = Registry::get('settings');
        $optionName = $this->isTestingMode ? 'forms_crm_to_email_test' : 'forms_crm_to_email_live';
//        echo $optionName;
//        var_dump($settings);
        $email = $settings->getOption($optionName);
//        echo $email;
        return $email;
    }
    
    protected function getToSupportEmail() {
       
        $settings = Registry::get('settings');
        if ($settings->getOption('forms_crm_is_testing_mode')) {
            $this->setIsTestingMode(true);
        }
        $optionName = $this->isTestingMode ? 'forms_crm_to_email_support_test' : 'forms_crm_to_email_support';

        $email = $settings->getOption($optionName);

        return $email;
    }


    protected function getFromEmail() {
        /** @var ProRMSettings $settings */
        $settings = Registry::get('settings');
        $email = $settings->getOption('forms_crm_from_email');
        return $email;
    }

    protected function getFromName() {
        /** @var ProRMSettings $settings */
        $settings = Registry::get('settings');
        $email = $settings->getOption('forms_crm_from_name');
        return $email;
    }

    protected function buildMessageBody($data) {
        $lines = array();
        foreach ($data as $key => $value) {
            $lines[] = $key . $this->keyValueDelimiter . $this->filterValue($value);
            ;
        }
        $body = implode($this->linesDelimiter, $lines);

        return $body;
    }

    protected function filterValue($value) {
        return str_replace(array("\r\n", "\n"), $this->eolReplacement, $value);
    }

    protected function getHeaders() {
        $break = chr(10);
        $headers = "MIME-Version: 1.0" . $break .
                "From: " . trim($this->fromName) + $break .
                "Reply-To: " . trim($this->getFromEmail()) + $break .
                "Content-Type: " . trim($this->contentType) . trim($this->charset) . $break;
//        $headers[] = sprintf('From: %s <%s>', $this->fromName, $this->getFromEmail());
//        $headers[] = sprintf('Reply-To: %s; X-Mailer: PHP/%s; Content-Type: %s; charset=%s', $this->getFromEmail(), phpversion(), $this->contentType, $this->charset);
        return $headers;
    }

    protected function getAttachments() {
        $attachments = false;
        if (Tpl::get('file_attachments')) {
            $attachments = ProRMFormFetcher::DIR_TMP_UPLOADFILES . Tpl::get('file_attachments');
        }
        return $attachments;
    }

    /**
     * @param boolean $isTestingMode
     */
    public function setIsTestingMode($isTestingMode) {
        $this->isTestingMode = $isTestingMode;
    }

    /**
     * @return boolean
     */
    public function getIsTestingMode() {
        return $this->isTestingMode;
    }
    
     /**
     * @return boolean
     */
    public function checkRecaptcha($answer_captcha) {
        
        $response = $answer_captcha;
         
        if($this->has_recaptcha && $response == false){
            
            $this->status = 'captcha_needed';
            
            return false;
        }
        
        $settings = Registry::get('settings');
        
        $secret = $settings->getOption('secret_sitekey_recaptcha');
        
        if($secret && $response){
            
            $ip=$_SERVER['REMOTE_ADDR'];
                 
            $verify = $this->getCurlData("https://www.google.com/recaptcha/api/siteverify?secret={$secret}&response={$response}&remoteip={$ip}");
            
            $this->captcha_test = $verify;/////////////////// ini_get('allow_url_fopen'); 
        
            $captcha_success=json_decode($verify);
            
            if ($captcha_success->success == true) {
                
                $this->status = 'success';
                
                return  true;
                
            }else{
                $this->status = 'captcha_false';
                                                
                return false;
            }
        }

   
        return false;

       
    }
    
    
    public function getCurlData($url){
        
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($curl, CURLOPT_TIMEOUT, 10);
        curl_setopt($curl, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US; rv:1.9.2.16) Gecko/20110319 Firefox/3.6.16");
        $curlData = curl_exec($curl);
        curl_close($curl);
        return $curlData;
        
    }

}

