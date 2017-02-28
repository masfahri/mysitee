<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mapp_about extends CI_Model{
    
    public function getAbout(){
        
        $this->db->select('*');
        $this->db->from('about');
        $this->db->order_by('about_id', 'ASC');
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
    
       
    public function getTotalTestimonial(){
        
        $this->db->select('*');
        $this->db->from('about');
        $query = $this->db->get();
        return $query->num_rows();
    }
    
    public function grapImage($product_id){
        
        $this->db->select('file, extention');
        $this->db->from('product_image');
        $this->db->where('product_id', $product_id);
        $query = $this->db->get();
        if($query->num_rows() > 0){
            return $query->result_array();
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
}