<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class App_socmed extends MX_Controller {
    
    # property
    public $root;
    public $app_name            = ''; 
    public $pageTitle           = ''; 
     public $initialPage         = 'Page Social Link';
    public $initial_template    = ''; 
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
	}
    
    protected function init(){
        
        isset($_SERVER['HTTP_REFERER']) ? $this->root = $_SERVER['HTTP_REFERER'] : '';  
        $this->app_name         = strtolower( __CLASS__ ); 
        $this->initial_id       = $this->uri->segment(3);
        $this->initial_template = $this->uri->segment(2); 
        $this->registerValidation();
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
    
    public function data(){
   
        $this->breadcrumb = array('Master Data' => 'javascript:;');          
        $params['datadb'] =  $this->coredb->bindDataSocmed();
        $this->getContent($params);
	}
    
    public function add(){
           
        $this->breadcrumb = array('Master Data' => base_url($this->app_name).'/data','Add' => 'javascript:;');
        if($_POST){
            
            // check uploaded file
            $_POST['file'] = 'true'; 
            if( $_FILES['fileupl']['name'] !== "" ){

                # check minimum width and height
                list($width, $height, $type, $attr) = getimagesize($_FILES['fileupl']['tmp_name']);
                $min_width  = 21;
                $min_height = 18;
                if( $width != $min_width || $height != $min_height ){
                   
                    $_POST['file'] = '';
                    $this->session->set_flashdata('msg_error', 'Primary images must be in size '.$min_width.' x '.$min_height);
                    redirect($this->root);    
                }
            
            }else{
               
                $_POST['file'] = '';
                $this->messagecontroll->delivered('msg_error', 'File image cannot be empty');
                $this->form_validation->run();                
            }
            
            if( $this->form_validation->run( REG_VALIDATION ) !== FALSE ){ 
               
               # processing file upload
               $this->load->library('fileupload');
               if( $this->fileupload->init($_FILES['fileupl']) !== FALSE ){
                    $_POST['file']      = $this->fileupload->path_directory;
                    $_POST['extention'] = $this->fileupload->fileExt;
               } 
             
               $_POST['author'] = $this->session->userdata('sys_id_administrator');       
               $this->load->library('uidcontroll');
               if( $this->uidcontroll->insertData('socmed', bindProcessing($_POST) ) !== FALSE){
                    $this->session->set_flashdata('msg_success', 'Success Save Data');
                    redirect($this->root);
               }else{$this->messagecontroll->delivered('msg_error', 'Invalid Data to Save !');}
               
            }else{ echo $this->messagecontroll->delivered('msg_warning', validation_errors()); } 
        }
        
        $this->getContent();
    }
    
    public function edit(){
        
        $this->breadcrumb = array('Master Data' => base_url($this->app_name).'/data','Edit' => 'javascript:;');
        if( $_POST )
        {   

            if( $this->form_validation->run(REG_VALIDATION) !== FALSE ){
               
               $this->load->library('uidcontroll')  ;
               $db_update['where'] = array('socmed_id', $this->initial_id);
			   $db_update['table'] = 'socmed';
			   $db_update['data']  =  bindProcessing($_POST);
               if( $this->uidcontroll->updateData($db_update) !== FALSE){
                    $this->session->set_flashdata('msg_success', 'Success Update Data');
                    redirect($this->root);
               }else{$this->messagecontroll->delivered('msg_error', 'Invalid Data to Update !');}
                
            }else{$this->messagecontroll->delivered('msg_warning', validation_errors()); } 
        }
       
        $params['datadb'] =  $this->coredb->bindDataSocmed($this->initial_id);
        $this->pageTitle = 'Edit';
        $this->getContent($params);
    }
    
}
?>