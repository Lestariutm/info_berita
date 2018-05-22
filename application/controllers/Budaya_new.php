<?php 
	class Budaya_new extends CI_Controller{
		public function index(){
			$data['data'] = array(
			'budaya' => $this->db->get('berita_budaya')
			);

			$data['content']="budaya";
			$this->load->view('home',$data);
		}
	}
 ?>