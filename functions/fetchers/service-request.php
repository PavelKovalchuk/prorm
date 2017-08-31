<?php
class Fetcher_ServiceRequest extends ProRMFormFetcher
{
    protected $formSubject = array(
        'de' => 'Support Anfrage von proRM Webseite',
        'en' => 'Support Anfrage von proRM Webseite',
        'es' => 'Support Anfrage von proRM Webseite',
    );

    public function __construct($source)
    {
        parent::__construct($source);

        /** @var ProRMSettings $settings */
        $settings = Registry::get('settings');

        $this->toEmail = $settings->getOption('forms_crm_to_email_support');

        $this->fieldsMap['topic'] = 'Interesse Thema';
        
        $this->fieldsMap['dynamics_version'] = __('Dynamics version', ProRMTheme::TEXTDOMAIN);
        $this->required['dynamics_version'] = __('Dynamics version', ProRMTheme::TEXTDOMAIN);
        
        $this->fieldsMap['prorm_product'] = __('Product', ProRMTheme::TEXTDOMAIN);
        $this->required['prorm_product'] = __('Product', ProRMTheme::TEXTDOMAIN);
        
        $this->required['first_name'] = __('First Name', ProRMTheme::TEXTDOMAIN);
        $this->required['email'] = __('E-Mail', ProRMTheme::TEXTDOMAIN);
        $this->required['company'] = __('Company', ProRMTheme::TEXTDOMAIN);
        $this->required['data_usage'] = __('Data usage', ProRMTheme::TEXTDOMAIN);
    }

    public function fetch()
    {
        parent::fetch();
        $this->getAttachFiles();

        return $this->mappedData;
    }

    public function getAttachFiles()
    {
        if(!$this->source['file-attach-name-ic'] && $this->source['file-attach-name-last']){
            // delete old file if file not attach
            unlink(self::DIR_TMP_UPLOADFILES .$this->source['file-attach-name-last']);
        }
        if($this->source['file-attach-name-ic']){
            if($this->source['file-attach-name-ic'] == $this->source['file-attach-name-last']){
                // file not change
                Tpl::set('file_attach_ic', $this->source['file-attach-name-ic']);
            } else {
                // file change
                if($_FILES['pro']['error']['field_file_attach'] == 0) {
                    // ??? !!! check type file !!!
                    // check size file
                    if($_FILES['pro']['size']['field_file_attach'] < 2049000 ){
                        $tmp = $_FILES['pro']['tmp_name']['field_file_attach'];
                        $name = $_FILES['pro']['name']['field_file_attach'];
                        move_uploaded_file($tmp, self::DIR_TMP_UPLOADFILES.$name);
                        Tpl::set('file_attach_ic', $this->source['file-attach-name-ic']);
                    } else {
                        // !!! error: big file size
                    }
                } else {
                    // !!! error loading attach file
                }
                if($this->source['file-attach-name-last']){
                    unlink(self::DIR_TMP_UPLOADFILES.$this->source['file-attach-name-last']);
                }
            }
        }
        if(Tpl::get('file_attach_ic')){
            Tpl::set('file_attachments', Tpl::get('file_attach_ic'));
        }
    }
}
