<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

    # property
    protected  $base_template   = array(
    'container' => 'container',
    'template'  => 'home'
    );

    public function __construct(){
        parent::__construct();
        $this->load->library('messagecontroll');
        $this->load->helper('global');
    }

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
        $this->load->model('mhome');
        $params['datadb']  = $this->mhome->getAbout();
        $params['datadb2'] = $this->mhome->getResume();
        $params['datadb6'] = $this->mhome->getResumee();
        $params['datadb3'] = $this->mhome->getPortfolio();
        $params['datadb4'] = $this->mhome->getBlog();
        // $params['datadb4'] = $this->mhome->getBlog();
        // $params['datadb5'] = $this->mhome->getContact();
        //echo '<pre>'.print_r($params['ads'], true).'</pre>';      
        $this->getContent($params);
    }
}
