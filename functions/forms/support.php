<?php

class ProRMForms_Support extends ProRMForms_Abstract
{
    const FORM_NAME = 'support';
    
    
    public function __construct(WP_Post $formPost)
    {
        parent::__construct($formPost);

        $this->fetcher = new Fetcher_Support($_POST['pro']);
        $this->formName = self::FORM_NAME;
    }
    
    /**
     * @return array
     */
    public function getDynamicsVersionOptions()
    {
        $options = array(
            '0' => get_field('dynamics_versions_header', $this->post->ID)
        );

        $rows = get_field('dynamics_version', $this->post->ID);
        if($rows)
        {
            foreach($rows as $row){
                $value = $row['dynamics_version_value'];
                $title = $row['dynamics_version_title'];
                $options[$value] = $title;
            }

        }
               
        return $options;
    }    

    /**
     * @return array
     */
    public function getPrormProductOptions()
    {
        $options = array(
            '0' => get_field('prorm_product_header', $this->post->ID)
        );

        $rows = get_field('prorm_product', $this->post->ID);
        if($rows)
        {
            foreach($rows as $row){
                $value = $row['prorm_product_value'];
                $title = $row['prorm_product_title'];
                $options[$value] = $title;
            }

        }
               
        return $options;
    } 
    
   public function getFastViewer(){
       
       $fastviewer = get_field('fastviewer_data', $this->post->ID);
       
       return $fastviewer;
       
   }
}