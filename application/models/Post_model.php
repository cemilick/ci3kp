<?php 
    class Post_model extends CI_Model{
        public function getAllPosts(){
            return $this->db->get('posts')->result_array();
        } 
        public function getPostById($id){
            $this->db->where('id',$id);
            return $this->db->get('posts')->result_array();
        }
        public function updatePost($id){
            $data = [
                'judul' => $this->input->post('judul',true),
                'isi' => $this->input->post('isi',true) 
            ];
            $this->db->where('id',$id);
            $this->db->update('posts',$data);
        }
    }
