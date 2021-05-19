<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controller_Admin extends CI_Controller {

	function __construct(){
		parent:: __construct();
		if($this->session->userdata('masuk') !=TRUE){
       	$url=base_url('Controller_Login_Admin');
      	redirect($url);
		};
		$this->load->model('M_login');
		$this->load->model('M_addData');
		$this->load->model('M_getData');
		$this->load->model('M_deleteData');
		$this->load->model('M_Update');
	}
	public function index(){
		if($this->session->userdata('akses')=='3'){
			$x['data'] = $this->M_login->getData_admin();
			$y['data'] = $this->M_login->getData_user();
			$this->load->view('admin/v_header');
			$this->load->view('admin/v_datauser',$y);
		}
		else{
			redirect('');
		}
	}
	public function addDataMentor(){
		 $config['upload_path'] = './assets/mentor/img'; //Tempat menyimpan file
         $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //tipe filenya 
         $config['max_size']             = 0; //size limits

         $this->upload->initialize($config);
          if(!empty($_FILES['foto_mentor']['name']))// cek apakah file ada di form
            {
              if ($this->upload->do_upload('foto_mentor'))// cek kondisi do_upload == true
                {
			        $gbr = $this->upload->data(); // upload data 
			        $foto=$gbr['file_name']; //ambil file nama
			      	$username = $this->input->post('username_mentor');  
					$password = $this->input->post('password_mentor');
					$nama = $this->input->post('nama_mentor'); 
					$email = $this->input->post('email_mentor'); 
					$cp = $this->input->post('cp_mentor');
					$this->M_addData->insertdatamentor($username,$password,$nama,$email,$cp,$foto);
				    redirect('Controller_Admin/datamentor');
     			}
  			}
  	}
  	public function deleteDataUser($id){
  		$y['data'] = $this->M_login->getData_user();
		$this->M_deleteData->delete($id);
		redirect('Controller_Admin');
	}
	public function updatestatus($id){
		$this->M_Update->updateStatusKelas($id);
		redirect('Controller_Admin/acckelas');
	}
	public function acckelas(){
		$a['data'] = $this->M_getData->getDataKelas2();
		$this->load->view('admin/v_header');
		$this->load->view('admin/v_acckelas',$a);
	}
	public function konfirmasi(){
		$x['data'] = $this->M_getData->getDataKonfirmasi();
		$this->load->view('admin/v_header');
		$this->load->view('admin/v_konfirmasi',$x);
	}
	public function feedback(){
		$this->load->view('admin/v_header');
		$this->load->view('admin/v_feedback');
	}
	public function datauser(){
		$this->load->view('admin/v_header');
		$this->load->view('admin/v_datauser');
	}
	public function datamentor(){
		$z['data'] = $this->M_login->getData_mentor();
		$this->load->view('admin/v_header');
		$this->load->view('admin/v_datamentor',$z);
	}
	public function dataadmin(){
		$x['data'] = $this->M_login->getData_admin();
		$this->load->view('admin/v_header');
		$this->load->view('admin/v_dataadmin',$x);
	}
	public function datakonfirmasi($id){
		$this->M_Update->updateStatusKonfirmasi($id);
		redirect('Controller_Admin/konfirmasi');
	}
	public function deleteDataKursus($id){
  		$a['data'] = $this->M_getData->getDataKelas();
		$this->M_deleteData->deletekursus($id);
		redirect('Controller_Admin/acckelas');
	}
}
?>