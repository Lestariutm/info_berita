<?php 
	class Contact extends CI_Controller{
		public function index(){
			$data['content']="contact";
			$this->load->view('home',$data);
		}
	}
 ?>