<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controller_Login_Mentor extends CI_Controller {

	function __construct(){
		parent:: __construct();
		$this->load->model('M_login');
	}
	public function index(){
		$this->load->view('mentor/v_loginmentor');
	}
	public function ceklogin()
	{
		$username = $this->input->post('username_mentor');
		$password = $this->input->post('password_mentor');
		$a = $this->M_login->login_mentor($username,$password);
		if($a->num_rows()>0){
			$this->session->set_userdata('masuk',true);
			$this->session->set_userdata('username',$username);
			$this->session->set_userdata('akses','2');
			$b=$a->row_array();
			$id=$b['id_mentor'];
			$this->session->set_userdata('id',$id);
			redirect('Controller_Mentor');
		}
		else{
			$this->session->set_flashdata('info','Invalid Username or Password!');
			redirect('Controller_Login_Mentor');
		}
	}
	public function logout(){
		$this->session->sess_destroy();
		redirect('');
	}
}
?>