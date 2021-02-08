<?php 
    class Home extends CI_Controller{
        public function index(){

            $this->load->model('Post_model');

            $data['title'] = "Halaman Index";
            $data['post'] = $this->Post_model->getAllPosts();
            $this->load->view('layouts/header',$data);
            $this->load->view('index',$data);
            $this->load->view('layouts/footer');
        }
    }