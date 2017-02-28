<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mhome extends CI_Model {
	
	function getAbout()
	{
		 $this->db->select('*');
                $this->db->from('about');
                $this->db->order_by('about_id', 'ASC');
                $query = $this->db->get();
                if($query->num_rows() > 0){
                        return $query->row_array();
                }else return null;
	}

	function getResume()
        {
                 $this->db->select('*');
                $this->db->from('resume');
                $this->db->order_by('resume_id', 'ASC');
                $query = $this->db->get();
                if($query->num_rows() > 0){
                        return $query->result_array();
                }else return null;
        }
    function getResumee()
        {
                 $this->db->select('*');
                $this->db->from('resumee');
                $this->db->order_by('resumee_id', 'ASC');
                $query = $this->db->get();
                if($query->num_rows() > 0){
                        return $query->result_array();
                }else return null;
        }

        function getPortfolio()
	{
        $this->db->select('*');
        $this->db->from('portfolio');
        $this->db->order_by('portfolio_id', 'ASC');
        $query = $this->db->get();
        if($query->num_rows() > 0){
                return $query->result_array();
        }else return null;
	}

    function getBlog($value='')
    {
        $this->db->select('*')
                 ->from('blog');
        $query = $this->db->get();
        if($query->num_rows() > 0){
            return $query->result_array();
        }else return null;
    }

}

/* End of file mhome.php */
/* Location: ./application/models/mhome.php */