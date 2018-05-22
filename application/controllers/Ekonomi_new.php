<?php 
	class Ekonomi_new extends CI_Controller{
		public function index(){
			$data['content']="ekonomi";
			$this->load->view('home',$data);
		}
	}
 ?>