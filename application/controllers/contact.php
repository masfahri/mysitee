<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contact extends CI_Controller {

    # property
    protected  $base_template   = array(
    'container' => 'container',
    'template'  => 'contact' 
    );
    
    # method
    private function getContent($args = array()){
         
        try{
            $body_data['contents'] = $this->load->view($this->base_template['template'], $args, TRUE);
            $this->load->view($this->base_template['container'], $body_data);
        }catch(Exception $e) {
            echo 'Caught exception, params function getContent is wrong : ',  $e->getMessage(), "\n";
        }      
    }
    
   	public function index(){
	    
        if($_POST){
            
            if( $this->form_validation->run( 'contact' ) !== FALSE  ){ 
              
               $this->load->library('uidcontroll'); 
               if( $this->uidcontroll->insertData('contact_message', bindProcessing($_POST)) !== FALSE){
                
                   // send email after success saving data
                   // code here ....
                  $this->session->set_flashdata('msg_success', 'Terimakasih telah mengirimkan pesan'); 
                  redirect($_SERVER['HTTP_REFERER']);
               } 
            }else{ $this->messagecontroll->delivered('msg_warning', validation_errors()); } 
        }
        
        $this->load->model('mcontact');
        $params['datadb'] = $this->mcontact->bindDataContact();
        $this->getContent($params);
	}
}