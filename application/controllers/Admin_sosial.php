<?php 
	class Admin_sosial extends CI_Controller{
		public function index(){
			$data['query']=$this->db->get('berita_sosial');
			$data['content']='Admin_page/sosial/b_sosial';
			$this->load->view('Admin_page/index',$data);
		}
		function add(){
			$data['content']='Admin_page/sosial/add';
			$this->load->view('Admin_page/index',$data);
		}
		function save(){
			$judul = $this->input->post("judul");
			$isi =   $this->input->post("isi_berita");

			$config = array(
				'upload_path'=> './upload/sosial/',
				'allowed_types'=> 'png|jpg|jpeg'
			);
			//echo "<script>alert('".$config['allowed_types']."')</script>";
			$this->load->library('upload',$config);

			if ($this->upload->do_upload('gambar')) {
			$data=array(
				'judul'=>$judul,
				'isi_berita'=>$isi,
				'data_entri'=>date('Y-m-d H-s-i'),
				'gambar'=> $this->upload->data('file_name')
			);
			
						$this->db->insert('berita_sosial',$data);
						redirect('Admin_sosial');
						
				}else{
					echo $this->upload->display_errors();
				}
		}
		function edit($id){
			$data['query']=$this->db->get_where('berita_sosial',['sosial_id'=>$id])->row();
			$data['content']='Admin_page/sosial/edit';
			$this->load->view('Admin_page/index',$data);
		}
		function update(){
			$id =$this->input->post("id");
			$judul = $this->input->post("judul");
			$isi =   $this->input->post("isi_berita");

			$config = array(
				'upload_path'=> './upload/sosial/',
				'allowed_types'=> 'png|jpg|jpeg'
			);
			//echo "<script>alert('".$config['allowed_types']."')</script>";
			$this->load->library('upload',$config);

			if ($this->upload->do_upload('gambar')) {
			$data=array(
				'judul'=>$judul,
				'isi_berita'=>$isi,
				'data_entri'=>date('Y-m-d H-s-i'),
				'gambar'=> $this->upload->data('file_name')
			);
						$this->db->where('sosial_id',$id);
						$this->db->update('berita_sosial',$data);
						redirect('Admin_sosial');
						
				}else{
					echo $this->upload->display_errors();
				}
		}
		function hapus($id){
			if($this->db->delete('berita_sosial',['sosial_id'=>$id])){
				?>
				<script type="text/javascript">
					alert("Data Berhasil di hapus");
					window.location="<?php echo base_url('index.php/Admin_sosial'); ?>";
				</script>
				<?php
			}
		}
	}
 ?>