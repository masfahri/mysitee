<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mapp_socmed extends CI_Model{
    
    
    #property 
    public $totalRecord     = 0;
    public $resultDb        = null;
    
    
    # method
    /**
     * @desc Query insert Data
     * @param int | null
     * @return array
     */
    public function bindDataSocmed($initial_id = ""){
    
        $this->db->select('*');
        $this->db->from('socmed');
        if($initial_id !== ""){$this->db->where('socmed_id', $initial_id);}
        $query = $this->db->get();
        if($query->num_rows() > 0){
           if($initial_id !== ""){
                return $query->row_array();
            }else{
                return $query->result_array();
            }
        }else return null;  
    }
    
    public function checkOrderno($no, $init){
        
        $this->db->select('socmed_arrangement');
        $this->db->from('socmed');
        if( $init == true ){
            $this->db->where('socmed_arrangement', $no);
        }else{
            $this->db->where_not_in('socmed_arrangement', $no);
        }
        $query = $this->db->get();
        if($query->num_rows() > 0){
            
            if( $init == true ){
                 return TRUE;
            }else{
                
                $ang = $query->result_array();
                $res = '';
                foreach($ang as $row){ $res .= $row['socmed_arrangement'].'|';}
                $expl = explode('|', rtrim($res, '|'));
                echo '<pre>'.print_r($expl, true).'</pre>'; exit;
                //echo $no; exit;
                if( in_array($no, $expl)){
                   echo 'atas';exit;
                    return TRUE;
                }else{
                    echo 'kfjdskfsd'; exit;
                    return FALSE; 
                }
            }
           
        }else{
          return FALSE;   
        } 
    }
    
    public function grapIcons($array_id){
        
        $this->db->select('file, extention');
        $this->db->from('socmed');
        $this->db->where_in('socmed_id', $array_id);
        $query = $this->db->get();
       
        if( $query->num_rows() > 0 )return $query->result_array();
        else null;
    }
    
}