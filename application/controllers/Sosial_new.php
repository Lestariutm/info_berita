<?php 
	class Sosial_new extends CI_Controller{
		public function index(){
			$data['content']="sosial";
			$this->load->view('home',$data);
		}
	}
 ?>