<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class App_dashboard extends MX_Controller {
    
    # property
    public $root;
    protected  $base_template   = array(
    'container' => '../../layout/container',
    'template'  => 'tpl' 
    );


    # method
    public function __construct(){
       $this->accesscontroll->authenticate();
       parent::__construct();
       $this->init();  
	}
    
    protected function init(){
    
        isset($_SERVER['HTTP_REFERER']) ? $this->root = $_SERVER['HTTP_REFERER'] : '';
        $this->reg_validation = strtolower( __CLASS__ );  
    }

    private function getContent($args = array()){
         
        try{
            $body_data['contents'] = $this->load->view($this->base_template['template'], $args, TRUE);
            $this->load->view($this->base_template['container'], $body_data);
        }catch(Exception $e) {
            echo 'Caught exception, params function getContent is wrong : ',  $e->getMessage(), "\n";
        }      
    }
  
    public function index(){
      
       $this->getContent();
	}
}
?>