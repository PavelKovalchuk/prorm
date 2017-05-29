<?php

require_once dirname(__FILE__) . '/forms/abstract.php';
require_once dirname(__FILE__) . '/forms/service-request.php';
require_once dirname(__FILE__) . '/forms/partnership-request.php';
require_once dirname(__FILE__) . '/forms/contact-us.php';
require_once dirname(__FILE__) . '/forms/webinar.php';
require_once dirname(__FILE__) . '/forms/fieldservices-webinar.php';
require_once dirname(__FILE__) . '/forms/quick-check.php';
require_once dirname(__FILE__) . '/forms/testing.php';
require_once dirname(__FILE__) . '/forms/request.php';
require_once dirname(__FILE__) . '/forms/microsoft.php';
require_once dirname(__FILE__) . '/forms/subscribe.php';
require_once dirname(__FILE__) . '/forms/licence30days.php';
require_once dirname(__FILE__) . '/forms/registration.php';
require_once dirname(__FILE__) . '/forms/wpc.php';
require_once dirname(__FILE__) . '/forms/wpcmobile.php';
require_once dirname(__FILE__) . '/forms/contact-client.php';
require_once dirname(__FILE__) . '/forms/register-webinar.php';
require_once dirname(__FILE__) . '/forms/subscribe-news.php';
require_once dirname(__FILE__) . '/forms/get-demo.php';
require_once dirname(__FILE__) . '/forms/meeting.php';
require_once dirname(__FILE__) . '/forms/support.php';

require_once dirname(__FILE__) . '/fetchers/contact-us.php';
require_once dirname(__FILE__) . '/fetchers/microsoft.php';
require_once dirname(__FILE__) . '/fetchers/partnership-request.php';
require_once dirname(__FILE__) . '/fetchers/quick-check.php';
require_once dirname(__FILE__) . '/fetchers/request.php';
require_once dirname(__FILE__) . '/fetchers/service-request.php';
require_once dirname(__FILE__) . '/fetchers/subscribe.php';
require_once dirname(__FILE__) . '/fetchers/testing.php';
require_once dirname(__FILE__) . '/fetchers/webinar.php';
require_once dirname(__FILE__) . '/fetchers/fieldservices-webinar.php';
require_once dirname(__FILE__) . '/fetchers/licence30days.php';
require_once dirname(__FILE__) . '/fetchers/registration.php';
require_once dirname(__FILE__) . '/fetchers/wpc.php';
require_once dirname(__FILE__) . '/fetchers/wpcmobile.php';
require_once dirname(__FILE__) . '/fetchers/contact-client.php';
require_once dirname(__FILE__) . '/fetchers/register-webinar.php';
require_once dirname(__FILE__) . '/fetchers/subscribe-news.php';
require_once dirname(__FILE__) . '/fetchers/get-demo.php';
require_once dirname(__FILE__) . '/fetchers/meeting.php';
require_once dirname(__FILE__) . '/fetchers/support.php';

abstract class ProRMForms
{
    const POST_TYPE = 'form';

    private static $fetchersPath;
    private static $formsDir;

    private static $formsCache = array();

    public static function init($fetchersPath, $formsDir)
    {
        self::$fetchersPath = $fetchersPath;
        self::$formsDir = $formsDir;

        self::loadForms();

        add_action('init', array(__CLASS__, 'registerPostType'));
        self::addCustomFields();
        
        $client = new CrmClient();
        $client -> ajaxForm();
       
        /*
         * Currently this filter doesn't make any affect because the apply_filter() is called earlier.
         * But we still add our filter in case developers will fix this issue.
         * The language support for forms is enabled in admin panel in language settings section.
         */
        add_filter('pll_get_post_types', array(__CLASS__, 'enableLanguageSupport'));
    }

    private static $formsMap = array(
        'service-request' => 'ProRMForms_ServiceRequest',
        'partnership-request' => 'ProRMForms_PartnershipRequest',
        'contact-us' => 'ProRMForms_ContactUs',
        'webinar' => 'ProRMForms_Webinar',
        'fieldservices-webinar' => 'ProRMForms_FieldServicesWebinar',
        'quick-check' => 'ProRMForms_QuickCheck',
        'testing' => 'ProRMForms_Testing',
        'request' => 'ProRMForms_Request',
        'microsoft' => 'ProRMForms_Microsoft',
        'subscribe' => 'ProRMForms_Subscribe',
        'licence30days' => 'ProRMForms_Licence30Days',
        'registration' => 'ProRMForms_Registration',
        'wpc' => 'ProRMForms_Wpc',
        'wpcmobile' => 'ProRMForms_Wpcmobile',
        'contact-client' => 'ProRMForms_ContactClient',
        'register-webinar' => 'ProRMForms_RegisterWebinar',
        'subscribe-news' => 'ProRMForms_SubscribeNews',
        'get-demo' => 'ProRMForms_GetDemo',
        'meeting' => 'ProRMForms_Meeting',
        'support' => 'ProRMForms_Support',
    );

    public static function handleForm($formName, $successText)
    {
        $form = self::getForm($formName);        
        //var_dump($form);
        if ($form) {
            Tpl::set('fetcher', $form->getFetcher());            
            Tpl::set('form', $form);
            
            $handledSuccessfully = self::handleFormSubmission($form);
            Tpl::set('form_submitted', true);
            if($successText){
                Tpl::set('form_success_message', $successText);
            } else {
                Tpl::set('form_success_message', $form->getSuccessMessage());
            }
            return $form->render();
        }

        return null;
    }
    
    protected static function handleFormSubmission(ProRMForms_Abstract $form)
    {
        $dataWasSent = false;
        $fetcher = $form->getFetcher();
            $fetcher_class = get_class($fetcher);
        $client = new CrmClient();
       
        $fetcher->fetch();
        try {
//            $client -> ajaxForm(); ////////////////////////////////NEW
            $fetcher->validate();
            
            $dataWasSent = true;
            $fetcher->delAttachFiles();
        } catch (Exception $e) {
            Tpl::set('form_error_message', $e->getMessage());
        }?>
        <?php
//        Tpl::set('fetcher', $fetcher);

        return $dataWasSent;
    }

    public static function field( $fieldName, $isRequired = null, $idbutton = null )
    {
        if (!is_null($isRequired)) {
            Tpl::set('field_is_required', $isRequired);
        }
        if (!is_null($idbutton)) {
            Tpl::set('id_btn', $idbutton);
        }
        get_template_part(self::$formsDir . '/fields/' . $fieldName);
        
        if (!is_null($isRequired)) {
            Tpl::unsetVar('field_is_required');
        } 
    }
    
   
    public static function field_radio($fieldFileName, $fieldName, $fieldGrLabel, $fieldOpt, $isRequired = null)
    {
        Tpl::set('field_name', $fieldName);
        Tpl::set('field_group_label', $fieldGrLabel);
        Tpl::set('field_options', $fieldOpt);
        if (!is_null($isRequired)) {
            Tpl::set('field_is_required', $isRequired);
        }

        get_template_part(self::$formsDir . '/fields/' . $fieldFileName);

        Tpl::unsetVar('field_name');
        Tpl::unsetVar('field_group_label');
        Tpl::unsetVar('field_options');
        if (!is_null($isRequired)) {
            Tpl::unsetVar('field_is_required');
        }
    }

    public static function fieldTpl($tplName, $name, $label, $isRequired = null)
    {
        Tpl::set('field_label', $label);
        Tpl::set('field_name', $name);

        self::field($tplName, $isRequired);

        Tpl::unsetVar('field_name');
        Tpl::unsetVar('field_value');
    }
    
    public static function fieldTplNew($tplName, $name, $type, $label, $placeholder, $isRequired = null)
    {
        Tpl::set('field_label', $label);
        Tpl::set('field_name', $name);
        Tpl::set('placeholder', $placeholder);
        Tpl::set('field_type', $type);

        self::field($tplName, $isRequired);

        Tpl::unsetVar('field_name');
        Tpl::unsetVar('field_value');
    }

    public static function input($name, $label, $isRequired = null)
    {
        self::fieldTpl('_input.text', $name, $label, $isRequired);
    }
    
    public static function inputField($name, $type, $label, $placeholder, $isRequired = null)
    {
        self::fieldTplNew('_input.textField', $name, $type, $label, $placeholder, $isRequired);
    }
         
    public static function textareaField($name, $label, $placeholder, $isRequired = null)
    {
        self::fieldTplNew('_input.textareaField', $name, 'textarea', $label, $placeholder, $isRequired);
    }
    
     public static function radioField($name, $options, $isRequired = null, $highlight = false)
    {
        Tpl::set('field_options', $options);
        if(!$highlight){
            $input_template = '_input.radioField';
        }else{
            $input_template = '_input.HighlightRadioField';
        }
        self::fieldTpl($input_template, $name, null, $isRequired);
        Tpl::unsetVar('field_options');
    }
    
    public static function checkboxField($name, $label, $value = '1', $isRequired = null)
    {
        Tpl::set('field_value', $value);
        self::fieldTpl('_input.checkboxField', $name, $label, $isRequired);
        Tpl::unsetVar('field_value');
    }


	
    public static function inputMail($name, $label, $isRequired = null)
    {
        self::fieldTpl('_input.email', $name, $label, $isRequired);
    }

    public static function checkbox($name, $label, $value = '1', $isRequired = null)
    {
        Tpl::set('field_value', $value);
        self::fieldTpl('_input.checkbox', $name, $label, $isRequired);
        Tpl::unsetVar('field_value');
    }

    public static function radio($name, $options, $isRequired = null)
    {
        Tpl::set('field_options', $options);
        self::fieldTpl('_input.radio', $name, null, $isRequired);
        Tpl::unsetVar('field_options');
    }

    public static function textarea($name, $label, $isRequired = null)
    {
        self::fieldTpl('_input.textarea', $name, $label, $isRequired);
    }
   
    public static function textarea_cust($name, $label, $isRequired = null)
    {
        self::fieldTpl('textarea_cust', $name, $label, $isRequired);
    }

    public static function textarea_cust1($type, $name, $label, $isRequired = null)
    {
        self::fieldTpl($type, $name, $label, $isRequired);
    }

    public static function select($name, $label, $options, $isRequired = null)
    {
        Tpl::set('field_options', $options);
        self::fieldTpl('_input.select', $name, $label, $isRequired);
        Tpl::unsetVar('field_options');
    }

    /**
     * @deprecated
     * @param $name
     * @return array
     */
    public static function getSelectOptions($name)
    {
        $options = array();
        /** @var ProRMSettings $settings */
        $settings = Registry::get('settings');
        $text = $settings->getOption('forms_options_' . $name);
        if ($text) {
            $lines = explode("\n", $text);
            foreach ($lines as $line) {
                if (trim($line)) {
                    if (strpos($line, '|')) {
                        list($key, $value) = explode('|', $line);
                    } else {
                        $key = $line;
                        $value = $line;
                    }
                    $options[trim($key)] = trim($value);
                }
            }
        }

        return $options;
    }


    /**
     * Register Form post type
     *
     * @return void
     */
    public static function registerPostType()
    {
        $labels = array(
            'name'               => __('Forms', ProRMTheme::TEXTDOMAIN),
            'singular_name'      => __('Form', ProRMTheme::TEXTDOMAIN),
            'add_new'            => __('Add New', ProRMTheme::TEXTDOMAIN),
            'add_new_item'       => __('Add New Form', ProRMTheme::TEXTDOMAIN),
            'edit_item'          => __('Edit Form', ProRMTheme::TEXTDOMAIN),
            'new_item'           => __('New Form', ProRMTheme::TEXTDOMAIN),
            'all_items'          => __('All Forms', ProRMTheme::TEXTDOMAIN),
            'view_item'          => __('View Form', ProRMTheme::TEXTDOMAIN),
            'search_items'       => __('Search Forms', ProRMTheme::TEXTDOMAIN),
            'not_found'          => __('No Forms found', ProRMTheme::TEXTDOMAIN),
            'not_found_in_trash' => __('No Forms found in Trash', ProRMTheme::TEXTDOMAIN),
            'parent_item_colon'  => '',
            'menu_name'          => __('Forms', ProRMTheme::TEXTDOMAIN),
        );

        $args = array(
            'labels'             => $labels,
            'public'             => true,
            'publicly_queryable' => true,
            'show_ui'            => true,
            'show_in_menu'       => true,
            'query_var'          => true,
            'rewrite'            => array('slug' => self::POST_TYPE),
            'capability_type'    => 'post',
            'has_archive'        => true,
            'hierarchical'       => true,
            'menu_position'      => null,
            'supports'           => array('title')
        );

        register_post_type(self::POST_TYPE, $args);
    }

    /**
     * Add custom fields.
     *
     * @return void
     */
    private static function addCustomFields()
    {
        if (function_exists("register_field_group")) {
            register_field_group(array(
                'id' => 'acf_common-form-attributes',
                'title' => __('Form Attributes', ProRMTheme::TEXTDOMAIN),
                'fields' => array (
                    array (
                        'key' => 'field_form_success_message',
                        'label' => __('Success Message', ProRMTheme::TEXTDOMAIN),
                        'name' => 'form_success_message',
                        'type' => 'wysiwyg',
                        'instructions' => __('Appears after successful form submission.', ProRMTheme::TEXTDOMAIN),
                        'default_value' => '',
                        'toolbar' => 'basic',
                        'media_upload' => 'no',
                    )
                ),
                'location' => array (
                    array (
                        array (
                            'param' => 'post_type',
                            'operator' => '==',
                            'value' => self::POST_TYPE,
                            'order_no' => 0,
                            'group_no' => 0,
                        ),
                    ),
                ),
                'options' => array (
                    'position' => 'normal',
                    'layout' => 'no_box',
                    'hide_on_screen' => array (
                    ),
                ),
                'menu_order' => 1,
            ));

            ProRMForms_ServiceRequest::addCustomFields();
            ProRMForms_PartnershipRequest::addCustomFields();
            ProRMForms_ContactUs::addCustomFields();
            ProRMForms_Webinar::addCustomFields();
            ProRMForms_QuickCheck::addCustomFields();
            ProRMForms_Testing::addCustomFields();
            ProRMForms_Request::addCustomFields();
            ProRMForms_Microsoft::addCustomFields();
            ProRMForms_Licence30Days::addCustomFields();
            ProRMForms_Registration::addCustomFields();
        }
    }

    /**
     * Add Form post type to 'languaged' types.
     *
     * @param $types
     * @return array
     */
    public static function enableLanguageSupport($types)
    {
        return array_merge($types, array(self::POST_TYPE => self::POST_TYPE));
    }

    /**
     * @param string $formKey
     * @param bool $appendSlug
     * @return WP_Post|null
     */
    public static function getFormPost($formKey, $appendSlug = true)
    {
        if ($appendSlug && function_exists('pll_current_language')) {
            $slug = pll_current_language('slug');
            if ($slug) {
                $formKey .= '-' . $slug;
            }
        }

        return isset(self::$formsCache[$formKey]) ? self::$formsCache[$formKey] : null;
    }

    protected static function loadForms()
    {
        $forms = get_posts(array(
            'numberposts' => -1,
            'post_type' => self::POST_TYPE,
            'post_status' => 'publish'
        ));
        self::$formsCache = array();
        foreach ($forms as $form) {
            self::$formsCache[$form->post_name] = $form;
        }
    }

    /**
     * @param $formName
     * @return ProRMForms_Abstract
     */
    protected static function getForm($formName)
    {
        $formPost = self::getFormPost($formName);
        if ($formPost) {
            if (isset(self::$formsMap[$formName])) {                
                $className = self::$formsMap[$formName];
                return new $className($formPost);
            }
        }

        return null;
    }

    /**
     * @return mixed
     */
    public static function getFormsDir()
    {
        return self::$formsDir;
    }
}