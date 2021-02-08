<?php 
    class Post extends CI_Controller{
        public function __construct()
        {
            parent::__construct();
            $this->load->model('Post_model');
        }
        public function index(){
            $data['posts'] = $this->Post_model->getAllPosts();
            echo var_dump($data['posts']);
        }
        public function show($id = 0){
            $data['post'] = $this->Post_model->getPostById($id);
            $this->load->view('post',$data);
        }
        public function update($id){
            $this->Post_model->updatePost($id);
            redirect(base_url() . 'post/show/' . $id);
        }
    }
