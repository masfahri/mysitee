<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mapp_portfolio extends CI_Model{
    
    public function getPortfolio(){
        
        $this->db->select('*');
        $this->db->from('portfolio');
        $this->db->order_by('portfolio_id', 'ASC');
        $query = $this->db->get();
        if($query->num_rows() > 0){
                return $query->result_array();
        }else return null;
    }

    public function getPortfolioo(){
        
        $this->db->select('*');
        $this->db->from('portfolio');
        $this->db->order_by('portfolio_id', 'ASC');
        $query = $this->db->get();
        if($query->num_rows() > 0){
                return $query->row_array();
        }else return null;
    }

    public function getOfficers($id = "", $offset="", $limit=""){
        
        $this->db->select('*');
        $this->db->from('about');
        if( $id !== "" ){
            $this->db->where('about_id', $id);
        }
        if($offset !== "" || $limit !== ""){
            $this->db->limit($offset, $limit);
        }
        $this->db->order_by('about_id', 'DESC');
        $query = $this->db->get();
        if($query->num_rows() > 0){
            if( $id !== "" ){
                return $query->row_array(); 
            }else{
                return $query->result_array(); 
            }
        }else return null;
    }  
    
       
    public function getPort($initial_id){
        
        $this->db->select('*');
        $this->db->from('portfolio');
        $this->db->where('portfolio_id', $initial_id);
        $query = $this->db->get();
        if($query->num_rows() > 0)return
         $query->row_array();
        else return null;
    }
    
    public function grapImage($portfolio_id){
        
        $this->db->select('file', 'extention');
        $this->db->from('portfolio');
        $this->db->where('portfolio_id', $portfolio_id);
        $query = $this->db->get();
        if($query->num_rows() > 0){
            return $query->row_array();
        }else return null;
    }
    
    public function grapImageIn($product_id){
        
        $this->db->select('file, extention');
        $this->db->from('product_image');
        $this->db->where_in('product_id', $product_id);
        $query = $this->db->get();
        if($query->num_rows() > 0){
           return $query->result_array();
        }else return null;
    }

    public function getAllPortfolio($id = "", $offset="", $limit=""){
        
        $this->db->select('*');
        $this->db->from('portfolio');
        if( $id !== "" ){
            $this->db->where('portfolio_id', $id);
        }
        if($offset !== "" || $limit !== ""){
            $this->db->limit($offset, $limit);
        }
        $this->db->order_by('portfolio_id', 'DESC');
        $query = $this->db->get();
        if($query->num_rows() > 0){
            if( $id !== "" ){
                return $query->row_array(); 
            }else{
                return $query->result_array(); 
            }
        }else return null;
    }  
}