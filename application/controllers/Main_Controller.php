<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main_Controller extends CI_Controller {

	function __construct(){
		parent:: __construct();
		$this->load->model('M_login');
		$this->load->model('M_addData');
		$this->load->model('M_deleteData');
		$this->load->model('M_getData');
	}
	public function index()
	{
		$x['data'] = $this->M_login->getData_mentor();
		$this->load->view('halamanutama/v_header');
		$this->load->view('halamanutama/v_halamanutama',$x);
		$this->load->view('halamanutama/v_footer');
	}
	public function registerUser()
	{
		$this->load->view('user/v_register_user');
	}
	public function addData(){
		 $config['upload_path'] = './assets/registerUser/images'; //Tempat menyimpan file
         $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //tipe filenya 
         $config['max_size']             = 0; //size limits
         $this->upload->initialize($config);
          if(!empty($_FILES['foto_user']['name']))// cek apakah file ada di form
            {
              if ($this->upload->do_upload('foto_user'))// cek kondisi do_upload == true
                {
			        $gbr = $this->upload->data(); // upload data 
			        $foto=$gbr['file_name']; //ambil file nama
			      	$username = $this->input->post('username_user');  
					$password = $this->input->post('password_user');
					$cpassword = $this->input->post('password_user2');
					$nama = $this->input->post('nama_user'); 
					$email = $this->input->post('email_user'); 
					$cp = $this->input->post('cp_user');  
					if($password == $cpassword){
						$this->M_addData->insert($username,$password,$nama,$email,$cp,$foto);
						redirect('Main_Controller');
					}
					else{
						$this->session->set_flashdata('info2','Password & Confirm Passowrd Harus Sama!');
						redirect('Main_Controller/registerUser');
					}
     			}
  			}
  	}
  	public function addFileKursus(){
		$config['upload_path'] = './assets/mentor/file'; 
		$config['allowed_types'] = '*';
        $config['max_size'] = 0; 

        $this->upload->initialize($config);
        if(!empty($_FILES['file_kursus']['name']))
        {
            if ($this->upload->do_upload('file_kursus'))
            {
			    $fl = $this->upload->data(); 
			    $file=$fl['file_name']; 
				$this->M_addData->insertFileKursus($file);
				redirect('Controller_Mentor/uploadmateri');
     		}
     		else{
     			echo "Gagal";
     		}
  		}
  		else{
  			echo "Gagal";
  		}
	}
  	public function delete($id){
		$this->M_deleteData->delete($id);
		redirect('Controller_Admin');
	}
	public function bookingkelas(){
		$x['data'] = $this->M_getData->getDataKelas();
		$this->load->view('halamanutama/v_header');
		$this->load->view('halamanutama/v_bookingkelas',$x);
		$this->load->view('halamanutama/v_footer');
	}
	public function tentang(){
		$this->load->view('halamanutama/v_header');
		$this->load->view('halamanutama/v_tentang');
		$this->load->view('halamanutama/v_footer');
	}
	public function kontak(){
		$this->load->view('halamanutama/v_header');
		$this->load->view('halamanutama/v_kontak');
		$this->load->view('halamanutama/v_footer');
	}
	public function kursuspopuler(){
		$this->load->view('halamanutama/v_header');
		$this->load->view('halamanutama/v_kursuspopuler');
		$this->load->view('halamanutama/v_footer');
	}
}
?>