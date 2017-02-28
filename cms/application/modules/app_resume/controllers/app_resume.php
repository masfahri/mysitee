<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class App_Resume extends MX_Controller {
    
    # property
    public $root;
    public $app_name            = ''; 
    public $initialPage         = 'Resume Page';
    
    protected  $base_template   = array(
    'container' => '../../layout/container',
    'template'  => 'tpl' 
    );

    
    # method
    public function __construct(){
      
       $this->accesscontroll->authenticate();
       $this->load->model('m'.strtolower( __CLASS__ ), 'coredb'); 
       parent::__construct();
       $this->init();  
       // initial helper
       $this->load->helper( array(  
        'image/image'
       ));        
    }
    
    protected function init(){
        
        isset($_SERVER['HTTP_REFERER']) ? $this->root = $_SERVER['HTTP_REFERER'] : '';  
        $this->app_name         = strtolower( __CLASS__ ); 
        $this->initial_id       = $this->uri->segment(3);
        $this->initial_template = $this->uri->segment(2); 
        $this->registerValidation();
        
        // initial helper
        $this->load->helper( array(
        'file/file'
        ));
    }
    
        
    public function registerValidation(){
        
         define("REG_VALIDATION", strtolower( __CLASS__ ));
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
        
        $params['datadb'] =  $this->coredb->getResumee();
        $params['datadb2'] =  $this->coredb->getResumeed();
        $this->getContent($params);          
    }

    public function addSchool(){
        $params['datadb'] = $this->coredb->getAllResume($this->session->userdata('resume_id'));
        if( $_POST ){
                $this->load->library('uidcontroll');
                if( $this->uidcontroll->insertData('resume', bindProcessing($_POST) ) !== FALSE){
                    
                    $this->session->set_flashdata('msg_success', 'Success Save Data');  
                    redirect( base_url($this->app_name) );
                
                }else{$this->session->set_flashdata('msg_success', 'Invalid Data to Save !');}

        }
        $this->getContent($params);       
    }

     public function edit(){
        if( $_POST ){
            
               # update data
               $this->load->library('uidcontroll');
               $db_config['where'] = array('resume_id', $this->initial_id);
               $db_config['table'] = 'resume';
               $db_config['data']  =  bindProcessing($_POST);
               if( $this->uidcontroll->updateData( $db_config ) !== FALSE ){

                    $this->session->set_flashdata('msg_success', 'Success Update Data');
                    redirect( base_url($this->app_name) );
                    
               }else{$this->messagecontroll->delivered('msg_error', 'Invalid Data to Update !');}    
        }
        
        $params['datadb'] =  $this->coredb->getResume($this->initial_id);
        $params['datadb2'] =  $this->coredb->getResumed($this->initial_id);

        $this->getContent($params);  
    }

    public function remove(){

        $this->load->library('uidcontroll');  
        # remove all image
        $dataRemove = array('resume_id', $this->initial_id); 
        if( $this->uidcontroll->removeData('resume', $dataRemove) == TRUE ){

            $this->session->set_flashdata('total_data', $this->uidcontroll->totalRecord);
            $this->session->set_flashdata('msg_success', 'Success Remove Data Gallery');
       }
        redirect(base_url($this->app_name));
    }

    public function addExperience(){
        $params['datadb'] = $this->coredb->getAllResume($this->session->userdata('resumee_id'));
        if( $_POST ){
                $this->load->library('uidcontroll');
                if( $this->uidcontroll->insertData('resumee', bindProcessing($_POST) ) !== FALSE){
                    
                    $this->session->set_flashdata('msg_success', 'Success Save Data');  
                    redirect( base_url($this->app_name) );
                
                }else{$this->session->set_flashdata('msg_success', 'Invalid Data to Save !');}
            }
        $this->getContent($params);           
    }

    public function removeExperience(){

        $this->load->library('uidcontroll');  
        # remove all image
        $dataRemove = array('resumee_id', $this->initial_id); 
        if( $this->uidcontroll->removeData('resumee', $dataRemove) == TRUE ){

            $this->session->set_flashdata('total_data', $this->uidcontroll->totalRecord);
            $this->session->set_flashdata('msg_success', 'Success Remove Data Gallery');
       }
        redirect(base_url($this->app_name));
    }

    public function editExperience(){
        
        if( $_POST ){
            
               # update data
               $this->load->library('uidcontroll');
               $db_config['where'] = array('resumee_id', $this->initial_id);
               $db_config['table'] = 'resumee';
               $db_config['data']  =  bindProcessing($_POST);
               if( $this->uidcontroll->updateData( $db_config ) !== FALSE ){

                    $this->session->set_flashdata('msg_success', 'Success Update Data');
                    redirect( base_url($this->app_name) );
                    
               }else{$this->messagecontroll->delivered('msg_error', 'Invalid Data to Update !');}    
                
              
        }
        
        //$params['datadb'] =  $this->coredb->getResume($this->initial_id);
        $params['datadb2'] =  $this->coredb->getResumed($this->initial_id);

        $this->getContent($params);  
    }
  }
?>