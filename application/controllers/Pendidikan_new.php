<?php 
	class Pendidikan_new extends CI_Controller{
		
		public function index(){
			$data['content']="pendidikan";
			$this->load->view('home',$data);
		}
	}
 ?>