<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controller_User extends CI_Controller {

	function __construct(){
		parent:: __construct();
		if($this->session->userdata('masuk') !=TRUE){
       	$url=base_url('Controller_Login_User');
      	redirect($url);
		};
		$this->load->model('M_login');
		$this->load->model('M_deleteData');
		$this->load->model('M_getData');
		$this->load->model('M_addData');
		$this->load->model('M_getDatabyid');
		$this->load->model('M_Update');
	}
	public function index(){
		if($this->session->userdata('akses')=='1'){
			$x['data'] = $this->M_login->getData_mentor();
			$this->load->view('user/v_header');
			$this->load->view('user/v_user',$x);
			$this->load->view('user/v_footer');
		}
		else{
			redirect('');
		}
	}
	public function bookingkelas(){
		$x['data'] = $this->M_getData->getDataKelas();
		$this->load->view('user/v_header');
		$this->load->view('user/v_bookingkelas',$x);
		$this->load->view('user/v_footer');
	}
	public function tentang(){
		$this->load->view('user/v_header');
		$this->load->view('user/v_tentang');
		$this->load->view('user/v_footer');
	}
	public function kontak(){
		$this->load->view('user/v_header');
		$this->load->view('user/v_kontak');
		$this->load->view('user/v_footer');
	}
	public function mykelas($id){
		$x['data'] = $this->M_getData->getDataKelasAmbil($id);
		$this->load->view('user/v_header');
		$this->load->view('user/v_mykelas',$x);
		$this->load->view('user/v_footer');
	}
	public function accountsetting($id){
		$x['data'] = $this->M_getDatabyid->getData_byidUser($id);
		$this->load->view('user/v_header');
		$this->load->view('user/v_accountsetting',$x);
		$this->load->view('user/v_footer');
	}
	public function detailkelas($id){
		$x['data'] = $this->M_getDatabyid->getData_byidKursus($id);
		$x['data2'] = $this->M_getDatabyid->getData_byidFile($id);
		$this->load->view('user/v_header');
		$this->load->view('user/v_detailkelas',$x);
		$this->load->view('user/v_footer');
	}
	public function uploadtugas($id){
		$x['data'] = $this->M_getDatabyid->getData_byidKursus($id);
		$x['data2'] = $this->M_getDatabyid->getData_byidFile($id);
		$this->load->view('user/v_header');
		$this->load->view('user/v_detailkelas',$x);
		$this->load->view('user/v_footer');
	}
	public function joinclass($id){
		$id_user = $this->session->userdata('id');
		$id_kursus = $id;
		$this->M_addData->insertjoinclass($id_user,$id_kursus);
		redirect('Controller_User/bookingkelas');
	}
	public function editProfileuser(){
		$config['upload_path'] = './assets/user/img'; //Tempat menyimpan file
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //tipe filenya 
        $config['max_size']        = 0; //size limits

        $this->upload->initialize($config);
        if(!empty($_FILES['foto_user']['name']))// cek apakah file ada di form
           {
            if($this->upload->do_upload('foto_user'))// cek kondisi do_upload == true
                {
			        $gbr = $this->upload->data(); // upload data 
					$foto=$gbr['file_name']; //ambil file nama
					$id = $this->input->post('id_user');
					$username = $this->input->post('username_user');
					$password = $this->input->post('password_user'); 
					$name = $this->input->post('nama_user');  
					$email = $this->input->post('email_user');
					$cp = $this->input->post('cp_user');
					$this->M_Update->updateProfileUser($id,$username,$password,$name,$email,$cp,$foto);
					redirect('Controller_User/accountsetting/'.$id);
			}
	    }
	    else{
	    			$id = $this->input->post('id_user');
					$username = $this->input->post('username_user');
					$password = $this->input->post('password_user'); 
					$name = $this->input->post('nama_user');  
					$email = $this->input->post('email_user');
					$cp = $this->input->post('cp_user');
					$this->M_Update->updateProfileUserTanpaFoto($id,$username,$password,$name,$email,$cp);
					redirect('Controller_User/accountsetting/'.$id);
	    }
	}
}