<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class App_login extends MX_Controller {
    
    # property
    public $root;
    public $initial_template    = '';
    private  $reg_validation    = '';
    protected  $base_template   = array(
    'container' => 'container',
    'template'  => 'tpl' 
    );


    # method
    public function __construct(){
        
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
  
    public function index(){ $this->getContent(); }
  
    public function authentication(){
        
        if($_POST)
        {    

             if($this->form_validation->run($this->reg_validation) !== FALSE){
                $this->accesscontroll->loginCheck($_POST, base_url('app_dashboard'));   

                $row = $this->mapp_login->data_login($this->input->post('username'), md5($this->input->post('password')));
                    $data = array(
                    'logged' => TRUE,
                    'username' => $row->username
            );
            $this->session->set_userdata($data);
             }else{   
                $this->messagecontroll->delivered('msg_warning', validation_errors()); 
             }
        }
        
        $this->getContent();
    } 
    
    public function logout(){ $this->session->sess_destroy();
        
//        redirect ke halaman login
        redirect(site_url('app_login')); }           
    }
?>