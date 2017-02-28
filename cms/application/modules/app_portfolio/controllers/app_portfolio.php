<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class App_portfolio extends MX_Controller {
    
    # property
    public $root;
    public $app_name            = ''; 
    public $pageTitle           = ''; 
    public $initialPage         = 'Portfolio';
    # initial file image
    public $imgDir              = 'uploads/portfolio';
    public $initial_id;     
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
        $this->load->helper( array(
				'file/file'
        ));
    }
    
        
    public function registerValidation(){
        
        define("REG_VALIDATION", strtolower( __CLASS__ ));
        define("REG_VALIDATION2", strtolower( __CLASS__ ).'Album');
        define("REG_VALIDATION3", strtolower( __CLASS__ ).'Banner');        
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
        $params['datadb']     =  $this->coredb->getPortfolio();
        //echo '<pre>'.print_r($params['datadb'], true).'</pre>'; exit;
        $this->getContent($params);
    }

    public function add(){
        $params['datadb'] = $this->coredb->getAllPortfolio($this->session->userdata('portfolio_id'));       
        if( $_POST ){
               # processing file upload
               if( $_FILES['file']['name'] !== "" )
               {
                   $this->load->library('fileupload');
                   $this->fileupload->path_directory = $this->imgDir;
                   if( $this->fileupload->init($_FILES['file']) !== FALSE ){
                        $_POST['file']     = $this->fileupload->path_directory;
                        $_POST['extension'] = $this->fileupload->fileExt;
                   }
               }
             # -------------------------------------------------------------------------------------
                # record database    
                $this->load->library('uidcontroll');
                if( $this->uidcontroll->insertData('portfolio', bindProcessing($_POST) ) !== FALSE){
                    
                    $this->session->set_flashdata('msg_success', 'Success Save Data');  
                    redirect( base_url($this->app_name) );
                
                }else{$this->session->set_flashdata('msg_success', 'Invalid Data to Save !');}
        }
        $this->getContent($params);  
    } 
	
    public function edit(){
        if( $_POST ){              
               # processing file upload
               if( $_FILES['file']['name'] !== "" )
               {
                   $this->load->library('fileupload');
                   $this->fileupload->path_directory = $this->imgDir;
                   if( $this->fileupload->init($_FILES['file']) !== FALSE ){
                        $_POST['file']     = $this->fileupload->path_directory;
                        $_POST['extension'] = $this->fileupload->fileExt;
                   }
               }
             # -------------------------------------------------------------------------------------
             
                
               # update data
               $this->load->library('uidcontroll');
               $db_config['where'] = array('portfolio_id', $this->initial_id);
               $db_config['table'] = 'portfolio';
               $db_config['data']  =  bindProcessing($_POST);
               if( $this->uidcontroll->updateData( $db_config ) !== FALSE ){

                    $this->session->set_flashdata('msg_success', 'Success Update Data');
                    redirect( base_url($this->app_name) );
                    
               }else{$this->messagecontroll->delivered('msg_error', 'Invalid Data to Update !');}        
 
        }
        $params['datadb']     =  $this->coredb->getPort($this->initial_id);
        $this->getContent($params);
    }

    public function remove(){
        $this->load->library('uidcontroll');  
        # remove old file image
        $image  = $this->coredb->grapImage($this->initial_id);
        if(count($image) > 0){
            foreach($image as $row){
                $image     = $this->coredb->grapImage($_GET['id_image']);
                $dirPath   = $row['file'];
                $thumbPath = getThumbnailsImage($row['file'], $row['extention']);

                // remove original image
                if(file_exists($dirPath)){unlink($dirPath);}
                // remove thumbnails image
                if(file_exists($thumbPath)){unlink($thumbPath);} 
            }
        }
      
        # remove image
        $dataRemove = array('portfolio_id', $this->initial_id); 
        $this->uidcontroll->removeData('portfolio', $dataRemove);
        
        $dataRemove = array('portfolio_id', $this->initial_id); 
        if( $this->uidcontroll->removeData('portfolio', $dataRemove) == TRUE ){
            $this->session->set_flashdata('msg_success', 'Success Remove Data Banner');
        }
        redirect(base_url($this->app_name));
    }
}
?>