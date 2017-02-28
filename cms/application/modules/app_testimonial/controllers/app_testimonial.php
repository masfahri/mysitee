<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class App_testimonial extends MX_Controller {
    
    # property
    public $root;
    public $app_name            = ''; 
    public $pageTitle           = ''; 
    public $initialPage         = 'Testimonial Charter';
    public $initial_template    = ''; 
    # initial file image
    public $imgDir              = 'uploads/image/testimonial/charter/';
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
        $this->load->helper( array(
        'blog/blog',
        'product/product',
        'image/image'
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
    
    public function data(){

        $this->breadcrumb = array('Master Data' => 'javascript:;');          
        $this->load->library('pagination');
        $config['base_url']     = base_url(strtolower($this->app_name)).'/data';
        $config['total_rows']   = $this->coredb->getTotalTestimonial();
        $config['per_page']     = 10; 
        $config['uri_segment']  = 3 ;
        $this->pagination->initialize($config);
        // result of page
        $params['result_all'] =  $config['total_rows'];
        $params['datadb']     =  $this->coredb->getTestimonial($tc_id="", $config["per_page"], $this->uri->segment(3));
        
        $this->getContent($params);
    }
 
    public function add(){
        
        $this->breadcrumb = array('Master Data' => base_url($this->app_name).'/data','Add' => 'javascript:;');
        $msg = '';
        if($_POST){
            
            
            # check  validaton size
            if( isset( $_FILES['fileupl']) ){
               
                if( $_FILES['fileupl']['tmp_name'] !== "" ){
                 
                    # check minimum width and height
                    list($width, $height, $type, $attr) = getimagesize($_FILES['fileupl']['tmp_name']);      
                    if( $width <  config_item('img_testis')['width'] || $height <  config_item('img_testis')['height'] ){ 
                        $msg .= 'Minimum file images must be in size '.config_item('img_img_testistestis')['width'].' x '.config_item('img_testis')['height'];     
                    }
                }else{
                    $msg = 'File image user must be uploaded';
                }
            }
        
            if( $this->form_validation->run( REG_VALIDATION ) !== FALSE && $msg  == '' ){ 
                
                # processing file upload
                if( $_FILES['fileupl']['name'] !== "" )
                {   
                   $this->load->library('fileupload');
                   $this->fileupload->path_directory = $this->imgDir;
                   if( $this->fileupload->init($_FILES['fileupl']) !== FALSE ){
                        $_POST['file']      = $this->fileupload->path_directory;
                        $_POST['extention'] = $this->fileupload->fileExt;
                   }
                }
                
                //echo '<pre>'.print_r($_POST, true).'</pre>'; exit;
                # record database    
                $this->load->library('uidcontroll');
                if( $this->uidcontroll->insertData('testimonial_charter', bindProcessing($_POST) ) !== FALSE){
                    
                    $this->session->set_flashdata('msg_success', 'Success Save Data');  
                    redirect( base_url($this->app_name).'/data' );
                
                }else{$this->session->set_flashdata('msg_success', 'Invalid Data to Save !');}
                

            }else{ $this->messagecontroll->delivered('msg_warning', validation_errors().$msg); } 
        }
        $this->getContent();
    } 
    
    public function edit(){
        
        $this->breadcrumb = array('Master Data' => base_url($this->app_name).'/data','Edit' => 'javascript:;');  
        if( $_POST ){
            
            if( $this->form_validation->run( REG_VALIDATION ) !== FALSE ){
               
               # processing file upload
               if( $_FILES['fileupl']['name'] !== "" )
               {
                   $this->load->library('fileupload');
                   $this->fileupload->path_directory = $this->imgDir;
                   if( $this->fileupload->init($_FILES['fileupl']) !== FALSE ){
                        $_POST['file']     = $this->fileupload->path_directory;
                        $_POST['extention'] = $this->fileupload->fileExt;
                   }
               }
                
               # update data
               $this->load->library('uidcontroll');
    		   $db_config['where'] = array('tc_id', $this->initial_id);
    		   $db_config['table'] = 'testimonial_charter';
    		   $db_config['data']  =  bindProcessing($_POST);
               if( $this->uidcontroll->updateData( $db_config ) !== FALSE ){

                    $this->session->set_flashdata('msg_success', 'Success Update Data');
    				redirect( $this->root );
                    
    		   }else{$this->messagecontroll->delivered('msg_error', 'Invalid Data to Update !');}    
                
            }else{ $this->messagecontroll->delivered('msg_warning', validation_errors()); }   
        }
        
        $params['datadb'] =  $this->coredb->getTestimonial($this->initial_id);
        $this->getContent($params);  
    }
    
    
    public function remove(){
        
        # remove old file image
        $image     = $this->coredb->grapOnlyImage($_GET['id_image']);     
        $dirPath   = $image['file'];
        $thumbPath = getThumbnailsImage($image['file'], $image['extention']);
        // remove original image
        if(file_exists($dirPath)){unlink($dirPath);}
        // remove thumbnails image
        if(file_exists($thumbPath)){unlink($thumbPath);} 
        
        $this->load->library('uidcontroll');  
        $dataRemove = array('tc_id', $this->initial_id); 
        if( $this->uidcontroll->removeData('testimonial_charter', $dataRemove) == TRUE ){
            
            $this->session->set_flashdata('total_data', $this->uidcontroll->totalRecord);
            $this->session->set_flashdata('msg_success', 'Success Remove Data Banner');
       }
       redirect(base_url($this->app_name).'/data');
    }
    
    public function removeAll(){
       
       $this->load->library('uidcontroll');
       
       # remove image
       $userImage = $this->coredb->grapImageIn($_POST['id_table']);
       if( count($userImage) > 0 ){
            foreach($userImage as $row){
                
                $dirPath   = $row['file'];
                $thumbPath = getThumbnailsImage($row['file'], $row['extention']);
                
                // remove original image
                if(file_exists($dirPath)){unlink($dirPath);}
                
                // remove thumbnails image
                if(file_exists($thumbPath)){unlink($thumbPath);}          
            }
       }
       
       $dataRemove = array('tc_id', $_POST['id_table']); 
       if( $this->uidcontroll->removeDataIn('testimonial_charter', $dataRemove) == TRUE ){
            
            $this->session->set_flashdata('msg_success', 'Success Remove Data');
       }
      redirect(base_url($this->app_name).'/data');
    }
}
?>