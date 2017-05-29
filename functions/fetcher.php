<?php

abstract class ProRMFormFetcher
{
    const YES = 'Ja';
    const NO  = 'Nein';
    const DIR_TMP_UPLOADFILES = "tmp-uploadfiles/";

    protected $source = array();

    protected $lang = 'de';

    /**
     * Email address to which message should be sent.
     * It defaults to null which means that global email will be used.
     * @var null|string
     */
    protected $toEmail = null;

    /** @var string  */
    protected $formSubject = array(
        'de' => '',
        'en' => '',
        'es' => ''
    );
    
    protected $formSubjectTemplates = array(
        'templates/enterprise-solution-2017.php' => 'Enterprise Solution',
        'templates/fast-start-2017.php' => 'Fast Start',
        'templates/field-service-automation-2017.php' => 'Field Service',
        'templates/partners-2017.php' => 'Partners',
        'templates/our-team-2017.php' => 'Team',
        'templates/contact-us-2017.php' => 'Contact Us',
        'templates/references-2017.php' => 'References',
        'single-reference.php' => 'Single reference',

    );
    
    protected $isFormOnManyPages = false;
    
   
    protected $formSubjectKey = 'Betreff';
    protected $formLangKey = 'Sprache';

    protected $langTitles = array(
        'de' => 'German',
        'en' => 'English',
        'es' => 'Spanish'
    );

    protected $fieldsMap = array(
        //'subject' => 'Betreff',
        'company' => 'Firma', // required
        'salutation' => 'Anrede', // required
        'first_name' => 'Vorname',
        'last_name' => 'Nachname',
        'email' => 'E-Mail', // required
        'phone' => 'Telefon', // required
        'notes' => 'Nachricht',
        'position' => 'Position',
        'street' => 'Strasse',
        'street_2' => 'Strasse 2',
        'zipcode' => 'PLZ',
        'city' => 'Ort',
        'country' => 'Land',
        'number_of_users' => 'Anzahl potenzieller User',
        'data_usage' => 'Datennutzung', // required
        'subscription' => 'Mehr Info',
        'test_package' => 'TestPaket',
//        'gender' => 'Gender',

    );

    protected $checkboxes = array(
        'data_usage',
        'subscription',
    );

    protected $required = array();

    protected $errors = array();

    protected $data = array();

    protected $mappedData = array();
    
    protected $datas = array();

    protected $flagTrimValues = true;

    public function __construct($source)
    {
        $this->setSource($source);
        if (function_exists('pll_current_language')) {
            $this->lang = pll_current_language('slug');
        }
        
        if($this->isFormOnManyPages === true){
           
            $this->changeFormSubject();
            
        }
        
        
    }

    public function fetch()
    {
        // Add Subject to fields list
        session_start();
        $_SESSION['fieldsMap'] = $this->fieldsMap;
        if ($this->getFormSubject() && $this->formSubjectKey) {
            $this->mappedData[$this->formSubjectKey] = $this->getFormSubject();
            $this->datas[$this->formSubjectKey] = $this->getFormSubject();
            
            $_SESSION['Subject'] = $this->getFormSubject();
            $_SESSION[get_class($this)]['Subject'] = $this->getFormSubject(); /////!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!  NEW 
        }

        // Add Language to fields list
        $this->mappedData[$this->formLangKey] = $this->getFormLanguage();
        $this->datas[$this->formLangKey] = $this->getFormLanguage();
        
        $_SESSION['datas'] = $this->datas; 
        $_SESSION[get_class($this)]['datas'] = $this->datas; /////!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!  NEW 
       
//        $_SESSION['language'] = $this->mappedData[$this->formLangKey];

        foreach ($this->fieldsMap as $field => $mappedKey) {
            $this->fetchField($field, $mappedKey);
        }

        if(Registry::get('settingsform')->getOption('add_events_to_email') == true) {
            $this->mappedData['Events'] = Registry::get('settingsform')->getOption('events_' . $this->lang);
            $_SESSION['Events'] = $this->mappedData['Events'];
        }
        
//        $_SESSION['mappedData'] = serialize($this->mappedData);
        return $this->mappedData;
    }

    public function validate()
    {
        foreach ($this->required as $field => $label) {
            $value = isset($this->data[$field]) ? $this->data[$field] : null;

            $this->validateField($field, $value, $label);
			
        }

        if (!empty($this->errors)) {
            throw new Exception(__('Please fill all required fields', ProRMTheme::TEXTDOMAIN));
        }
    }

    public function validateField($field, $value, $label)
    {
        $camelCasedFieldName = $this->getCamelCasedFieldName($field);
        $validatingMethodName = 'validate' . $camelCasedFieldName;
        if (method_exists($this, $validatingMethodName)) {
            $this->$validatingMethodName($field, $value, $label);
        } else {
            if ($this->isCheckbox($field)) {
                if ($value !== self::YES) {
                    $this->errorText($field);
//                    $this->errors[$field] = '<span class="arrow-up">*</span> ' . __('This field is required.', ProRMTheme::TEXTDOMAIN);
                }
            } else {
                if (!$value) {
                    $this->errorText($field);
                }
            }
            
        }
    }
    
    protected function fetchField($field, $mappedKey)
    {
        $camelCasedFieldName = $this->getCamelCasedFieldName($field);
        $fetchingMethodName = 'fetch' . $camelCasedFieldName;
        $fetchedValue = null;
        if (method_exists($this, $fetchingMethodName)) {
            $fetchedValue = $this->$fetchingMethodName($field, $mappedKey);
        } else {
            if ($this->isCheckbox($field)) {
                $fetchedValue = $this->fetchCheckbox($field, $mappedKey);
            } else {
                $fetchedValue = $this->source[$field];
            }
        }
        if ($this->flagTrimValues) {
            if(is_string($fetchedValue)){
                $fetchedValue = trim($fetchedValue);
            }
            if(is_array($fetchedValue)){
                foreach($fetchedValue as $key => $value){
                    if(is_string($value)){
                        $fetchedValue[$key] = trim($value);
                    }
                }
            }
        }
        $this->data[$field] = $fetchedValue;
        $_SESSION['Value'][$this->data[$field]] = $fetchedValue;
        if(!isset($this->mappedData[$mappedKey])){
            $this->mappedData[$mappedKey] = $fetchedValue;
            $_SESSION['Value'][$this->mappedData[$mappedKey]] = $fetchedValue;
        }
    }

    protected function fetchDefault($field, $mappedKey)
    {
        return $this->source[$field];
    }

    protected function fetchCheckbox($field, $mappedKey)
    {
        return isset($this->source[$field]) ? self::YES : self::NO;
    }

    protected function fetchPhone($field, $mappedKey)
    {
        $phone = $this->source[$field];
//        $last_delimiter = $this->source[$field]['add_part'] ? '-' : '';
//        $this->mappedData[$mappedKey] = '+' . $this->source[$field]['country_code'] . ' (' . $this->source[$field]['town_code'] . ') ' . $this->source[$field]['main_part'] . $last_delimiter . $this->source[$field]['add_part'];
//        return $phone;
        $this->mappedData[$mappedKey] = $phone;
        return $phone;
    }
    protected function validatePhone($field, $value, $label)
    {
        $error = false;
        if(!isset($value['country_code']) || !isset($value['town_code']) || !isset($value['main_part'])){
            $error = true;
        } elseif(!ereg('^([0-9]{1,3})$', $value['country_code']) || !ereg('^([0-9]{1,5})$', $value['town_code']) || !ereg('^([0-9]{3,8})$', $value['main_part']))
        {
            $error = true;
        }
        if(isset($value['add_part']) && $value['add_part'] && !ereg('^([0-9]{1,3})$', $value['add_part'])){
            $error = true;
        }
        if ($error) {
            // Überprüfen Sie bitte Ihre Eingabe. Dieses Feld muss eine gültige Telefonnummer enthalten.
            $this->errors[$field] = '<span class="arrow-up">*</span> ' . __('Please check this field, it is required and must contain a valid phone number.', ProRMTheme::TEXTDOMAIN);
        }
    }

    protected function getCamelCasedFieldName($field)
    {
        $destSep = '';
        $srcSep = '-';
        return str_replace(' ', $destSep, ucwords(str_replace($srcSep, ' ', $field)));
    }

    /**
     * @param boolean $flagTrimValues
     */
    protected  function setFlagTrimValues($flagTrimValues)
    {
        $this->flagTrimValues = $flagTrimValues;
    }

    /**
     * @return string
     */
    public function getFormSubject()
    {
        return $this->formSubject[$this->lang];
    }
    
     /**
     * @return 
     */
    public function setFormSubject($newSubject)
    {
        
        $this->formSubject[$this->lang] = $newSubject;
        
        return true;
    }
    
    public function changeFormSubject()
    {
        $template = false;
        
        if($_SESSION['template']){
            $template = $_SESSION['template'];
        }
        
        if(!$template && !$post){
            global $post;
            $template = get_post_meta( $post->ID, '_wp_page_template', true );
            
        }
        
        
        if(key_exists($template, $this->formSubjectTemplates)){
            
            $newFormSubject = $this->getFormSubject() . ' - ' . $this->formSubjectTemplates[$template];
      
            $this->setFormSubject($newFormSubject);
            
            return true;
            
        }
        
        return false;
    }

    /**
     * @param array $source
     */
    public function setSource($source)
    {
        $this->source = $source;
    }

    public function getFormLanguage()
    {
        return $this->langTitles[$this->lang];
    }

    public function isCheckbox($field)
    {
        return in_array($field, $this->checkboxes);
    }
    /**
     * @return array
     */
    public function getErrors()
    {
        return $this->errors;
    }

    public function getError($field)
    {
        return isset($this->errors[$field]) ? $this->errors[$field] : null;
    }

    public function hasError($field)
    {
        return isset($this->errors[$field]);
    }

    /**
     * @return array
     */
    public function getMappedData()
    {
        return $this->mappedData;
    }

    /**
     * @param string|null $field
     *
     * @return array
     */
    public function getData($field = null)
    {
        if (!$field) {
            return $this->data;
        } else {
            return isset($this->data[$field]) ? $this->data[$field] : null;
        }
    }

    /**
     * @return null|string
     */
    public function getToEmail()
    {
        return $this->toEmail;
    }

    public function delAttachFiles()
    {
        $ret = false;
        $attachFiles = $this->source['file-attach-name-ic'];
        if($attachFiles){
            if(file_exists(self::DIR_TMP_UPLOADFILES.$attachFiles)){
                if(unlink(self::DIR_TMP_UPLOADFILES.$attachFiles)) {
                    $ret = true;
                }
            }
        }
        return $ret;
    }
    
    protected function errorText($field){
        switch ($field){
            case 'first_name':
                $error_text = __('Please fill in your name.', ProRMTheme::TEXTDOMAIN);break;
            case 'last_name':
                $error_text = __('Please fill in your last name.', ProRMTheme::TEXTDOMAIN);break;
            case 'email':
                $error_text = __('Please fill in your e-mail address.', ProRMTheme::TEXTDOMAIN);break;
            case 'company':
                $error_text = __('Please fill in your company.', ProRMTheme::TEXTDOMAIN);break;
            case 'desired_date':
                $error_text = __('Please select an event.', ProRMTheme::TEXTDOMAIN);break;
            case 'dynamics_version':
                $error_text = __('Please select your Dynamics version.', ProRMTheme::TEXTDOMAIN);break;
            case 'prorm_product':
                $error_text = __('Please select your product.', ProRMTheme::TEXTDOMAIN);break;
//            case 'contact_gender':
//                $error_text = __('Please select your product.', ProRMTheme::TEXTDOMAIN);break;
            default:
                $error_text = __('This field is required.', ProRMTheme::TEXTDOMAIN);break;
        }
        $this->errors[$field] = '<span class="arrow-up">*</span> ' . $error_text;
    }
}
?>