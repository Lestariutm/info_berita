<?php
    class Dashboard extends CI_Controller{
    	public function index(){
    		$data['content']="home_view";
    		$this->load->view('home',$data); 	}

    }