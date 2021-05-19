<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Controller_Mentor extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('masuk') != TRUE) {
			$url = base_url('Controller_Login_Mentor');
			redirect($url);
		};
		$this->load->model('M_login');
		$this->load->model('M_deleteData');
		$this->load->model('M_addData');
		$this->load->model('M_getDatabyid');
		$this->load->model('M_Update');
	}
	public function index()
	{
		if ($this->session->userdata('akses') == '2') {
			$x['data'] = $this->M_login->getData_kursus();
			$this->load->view('mentor/v_header');
			$this->load->view('mentor/v_mentor', $x);
		} else {
			redirect('');
		}
	}
	public function addDataKursus()
	{
		$config['upload_path'] = './assets/kursus/img'; //Tempat menyimpan file
		$config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //tipe filenya 
		$config['max_size']        = 0; //size limits

		$this->upload->initialize($config);
		if (!empty($_FILES['foto_kursus']['name'])) // cek apakah file ada di form
		{
			if ($this->upload->do_upload('foto_kursus')) // cek kondisi do_upload == true
			{


				$nama = $this->input->post('nama_kelas');
				$kelas = $this->input->post('kelas');
				$jadwal = $this->input->post('jadwal');
				$jumlah_siswa = $this->input->post('jumlah_siswa');
				$deskripsi_kelas = $this->input->post('deskripsi_kelas');
				$gbr = $this->upload->data(); // upload data 
				$foto = $gbr['file_name']; //ambil file nama
				$status = 0;
				$this->M_addData->insertKursus($nama, $kelas, $jadwal, $jumlah_siswa, $deskripsi_kelas, $foto, $status);
				redirect('Controller_Mentor');
			}
		}
	}
	public function addMateri($id)
	{
		$jdl = $this->input->post('nama_file');
		$deskripsi = $this->input->post('deskripsi_file');
		$iink = $this->input->post('link_file');
		$this->M_addData->insertFileKursus($id, $jdl, $deskripsi, $iink);
		redirect('Controller_Mentor/uploadmateri/' . $id);
	}
	public function deleteDataMentor($id)
	{
		$y['data'] = $this->M_login->getData_mentor();
		$this->M_deleteData->deletedatamentor($id);
		redirect('Controller_Admin/datamentor', $y);
	}
	public function uploadmateri($id)
	{
		$y['data'] = $this->M_getDatabyid->getDataKursus($id);
		$y['data2'] = $this->M_getDatabyid->getData_byidFile($id);
		$this->load->view('mentor/v_header');
		$this->load->view('mentor/v_uploadmateri', $y);
	}
	public function datasiswa($id)
	{
		$x['data'] = $this->M_getDatabyid->getDataLihatSiswa($id);
		$this->load->view('mentor/v_header');
		$this->load->view('mentor/v_datasiswa', $x);
	}
	public function settingMentor($id)
	{
		$a['data'] = $this->M_getDatabyid->getData_byidMentor($id);
		$this->load->view('mentor/v_settingmentor', $a);
	}
	public function editProfileMentor()
	{
		$config['upload_path'] = './assets/mentor/img'; //Tempat menyimpan file
		$config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //tipe filenya 
		$config['max_size']        = 0; //size limits

		$this->upload->initialize($config);
		if (!empty($_FILES['foto_mentor']['name'])) // cek apakah file ada di form
		{
			if ($this->upload->do_upload('foto_mentor')) // cek kondisi do_upload == true
			{
				$gbr = $this->upload->data(); // upload data 
				$foto = $gbr['file_name']; //ambil file nama
				$id = $this->input->post('id_mentor');
				$username = $this->input->post('username_mentor');
				$password = $this->input->post('password_mentor');
				$name = $this->input->post('nama_mentor');
				$email = $this->input->post('email_mentor');
				$cp = $this->input->post('cp_mentor');
				$this->M_Update->updateProfileMentor($id, $username, $password, $name, $email, $cp, $foto);
				redirect('Controller_Mentor/settingMentor/' . $id);
			}
		} else {
			$id = $this->input->post('id_mentor');
			$username = $this->input->post('username_mentor');
			$password = $this->input->post('password_mentor');
			$name = $this->input->post('nama_mentor');
			$email = $this->input->post('email_mentor');
			$cp = $this->input->post('cp_mentor');
			$this->M_Update->updateProfileMentorTanpaFoto($id, $username, $password, $name, $email, $cp);
			redirect('Controller_Mentor/settingMentor/' . $id);
		}
	}
}
