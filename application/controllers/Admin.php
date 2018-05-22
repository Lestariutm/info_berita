<?php 
	class Admin extends CI_Controller{
		public function index(){
			$data['content']='Admin_page/dashboard';
			$this->load->view('Admin_page/index',$data);
		}
	}
 ?>