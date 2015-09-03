<?php

namespace extensions\users{

    /* Prevent Direct Access */
    defined('ADAPT_STARTED') or die;
    
    class view_video extends \frameworks\adapt\view{
        
        public function __construct($data = null, $attributes = array()){
            parent::__construct('video');
            $this->add_class('video-js');
            $this->add_class('vjd-default-skin');
            $this->set_id();
            
        }
        
    }
    
}


?>