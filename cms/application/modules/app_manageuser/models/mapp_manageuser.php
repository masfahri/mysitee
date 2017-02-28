<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mapp_manageuser extends CI_Model{
    
    
      
    /**
    * @desc Grap All user by id privileges
    * @params int
    * @return array 
    */ 
    public function getAllUser($id_privil, $offset="", $limit=""){
        
        $this->db->select('*');
        $this->db->from('sys_administrator');
        $this->db->where('id_privileges', $id_privil);
        if($offset !== "" || $limit !== ""){
            $this->db->limit($offset, $limit);
        }
        $this->db->order_by('id_administrator', 'DESC');
        $query = $this->db->get();
        if($query->num_rows() > 0)return $query->result_array();
        else return null;
    }
    
     /**
    * @desc get All Total Data for Pagination
    * @params int
    * @return array 
    */ 
    public function getTotalUser($id_privil){
        
        $this->db->select('id_administrator');
        $this->db->from('sys_administrator');
        $this->db->where('id_privileges', $id_privil);
        $query = $this->db->get();
        return $query->num_rows();
    }
    
    /**
    * @desc Check available username on table
    * @params string
    * @params int
    * @return array 
    */ 
    function checkAvailableUser($username, $initial_id = ''){
        
        $this->db->select('id_administrator');
        $this->db->from('sys_administrator');
        if( $initial_id !== "" ){
            $this->db->where_not_in('id_administrator', $initial_id);
        }
        $this->db->where('username', $username);
        $query = $this->db->get();
        if( $query->num_rows() > 0 )return TRUE;
        else FALSE;
    }
    
     
    /**
    * @desc Check available username on table
    * @params string
    * @params int
    * @return array 
    */ 
    function grapUserImage($array_id){
        
        $this->db->select('image, extention');
        $this->db->from('sys_administrator');
        $this->db->where('id_administrator', $array_id);
        $query = $this->db->get();
       
        if( $query->num_rows() > 0 )return $query->result_array();
        else null;
    }
    
    function grapUserImageIn($array_id){
        
        $this->db->select('image, extention');
        $this->db->from('sys_administrator');
        $this->db->where_in('id_administrator', $array_id);
        $query = $this->db->get();
       
        if( $query->num_rows() > 0 )return $query->result_array();
        else null;
    }
}