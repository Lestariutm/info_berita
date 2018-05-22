<?php 
	class Politik_new extends CI_Controller{
		public function index(){
			$data['content']="politik";
			$this->load->view('home',$data);
		}
	}
 ?>