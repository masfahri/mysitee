<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mapp_testimonial extends CI_Model{
    
    public function getTestimonial($tc_id = "", $offset="", $limit=""){
        
        $this->db->select('*');
        $this->db->from('testimonial_charter');
        if( $tc_id !== "" ){
            $this->db->where('tc_id', $tc_id);
        }
        if($offset !== "" || $limit !== ""){
            $this->db->limit($offset, $limit);
        }
        $this->db->order_by('tc_id', 'DESC');
        $query = $this->db->get();
        if($query->num_rows() > 0){
            if( $tc_id !== "" ){
                return $query->row_array();
            }else{
                return $query->result_array();
            }
        }else return null;
    }
    
       
    public function getTotalTestimonial(){
        
        $this->db->select('*');
        $this->db->from('testimonial_charter');
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