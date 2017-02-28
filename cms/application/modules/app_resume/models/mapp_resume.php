<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mapp_resume extends CI_Model{
    
    public function getResume(){
        
        $this->db->select('*');
        $this->db->from('resume');
        $this->db->order_by('resume_id', 'ASC');
        $query = $this->db->get();
        if($query->num_rows() > 0){
                return $query->row_array();
        }else return null;
    }

    public function getResumee(){
        
        $this->db->select('*');
        $this->db->from('resume');
        $this->db->order_by('resume_id', 'ASC');
        $query = $this->db->get();
        if($query->num_rows() > 0){
                return $query->result_array();
        }else return null;
    }

    public function getAllResume($id = "", $offset="", $limit=""){
        
        $this->db->select('*');
        $this->db->from('resume');
        if( $id !== "" ){
            $this->db->where('resume_id', $id);
        }
        if($offset !== "" || $limit !== ""){
            $this->db->limit($offset, $limit);
        }
        $this->db->order_by('resume_id', 'DESC');
        $query = $this->db->get();
        if($query->num_rows() > 0){
            if( $id !== "" ){
                return $query->row_array(); 
            }else{
                return $query->result_array(); 
            }
        }else return null;
    }  
    



    
    public function getResumed($initial_id){
        
        $this->db->select('*');
        $this->db->from('resumee');
        $this->db->where('resumee_id', $initial_id);
        $query = $this->db->get();
        if($query->num_rows() > 0)return $query->row_array();
        else return null;
    }

    public function getResumeed(){
        
        $this->db->select('*');
        $this->db->from('resumee');
        $this->db->order_by('resumee_id', 'ASC');
        $query = $this->db->get();
        if($query->num_rows() > 0){
                return $query->result_array();
        }else return null;
    }

    public function getAllResumed($id = "", $offset="", $limit=""){
        
        $this->db->select('*');
        $this->db->from('resumee');
        if( $id !== "" ){
            $this->db->where('resumee_id', $id);
        }
        if($offset !== "" || $limit !== ""){
            $this->db->limit($offset, $limit);
        }
        $this->db->order_by('resumee_id', 'DESC');
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