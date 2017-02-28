<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mapp_blog extends CI_Model{
    
    
      public function getBlog(){
        
        $this->db->select('*');
        $this->db->from('blog');
        $this->db->order_by('blog_id', 'ASC');
        $query = $this->db->get();
        if( $query->num_rows() > 0 ){
            return $query->result_array();
        }else return null;
      }

      public function getCatBlog(){
        
        $this->db->select('*');
        $this->db->from('blog_category');
        $this->db->order_by('blog_category_id', 'ASC');
        $query = $this->db->get();
        if($query->num_rows() > 0){
                return $query->result_array();
        }else return null;
      }

      public function editCatBlog($initial_id){
        
        $this->db->select('*');
        $this->db->from('blog_category');
        $this->db->where('blog_category_id', $initial_id);
        $query = $this->db->get();
        if($query->num_rows() > 0){
                return $query->row_array();
        }else return null;
      }

      public function getNameCatBlog(){
        
        $this->db->select('*');
        $this->db->from('blog_category');
        $this->db->order_by('blog_category_id','ASC');
        $query = $this->db->get();
        if($query->num_rows() > 0){
                return $query->result_array();
        }else return null;
      }

      public function getAllBlog()
      {
        $this->db->select('blog.blog_id, blog.judul, blog_category.blog_category_name, blog.isi_blog, blog.date, blog.status, blog.file');
        $this->db->from('blog');
        $this->db->join('blog_category','blog.blog_category_id=blog_category.blog_category_id','left');
        $query = $this->db->get();
          if($query->num_rows() > 0){
                return $query->result_array();
        }else return null;
      }

      public function grapImage($initial_id){
        
        $this->db->select('file', 'extension');
        $this->db->from('blog');
        $this->db->where('blog_id', $initial_id);
        $query = $this->db->get();
        if($query->num_rows() > 0){
            return $query->row_array();
        }else return null;
    }

    public function editBlog($initial_id){
        
        $this->db->select('blog.blog_id, blog.judul, blog_category.blog_category_name, blog_category.blog_category_id, blog.isi_blog, blog.date, blog.status, blog.file');
        $this->db->from('blog');
        $this->db->join('blog_category','blog.blog_category_id=blog_category.blog_category_id','left');
        $this->db->where('blog_id', $initial_id);
        $query = $this->db->get();
          if($query->num_rows() > 0){
                return $query->row_array();
        }else return null;
    }
}
