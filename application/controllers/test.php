<?php
    class test extends CI_Controller{
        
        function __construct(){
            parent::__construct();
            $this->load->model('test');
        }
        
        function index(){
            $data['data'] = $this->Book_Model->list_all();
            $this->load->view('v_tintuc',$data);
        }
        
    } ?>