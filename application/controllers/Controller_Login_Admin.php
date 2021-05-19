<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controller_Login_Admin extends CI_Controller {

	function __construct(){
		parent:: __construct();
		$this->load->model('M_login');
	}
	public function index(){
		$this->load->view('admin/v_loginadmin');
	}
	public function ceklogin()
	{
		$username = $this->input->post('username_admin');
		$password = $this->input->post('password_admin');
		$a = $this->M_login->login_admin($username,$password);
		if($a->num_rows()>0){
			$this->session->set_userdata('masuk',true);
			$this->session->set_userdata('username',$username);
			$this->session->set_userdata('akses','3');
			redirect('Controller_Admin');
		}
		else{
			$this->session->set_flashdata('info','Invalid Username or Password!');
			redirect('Controller_Login_Admin');
		}
	}
	public function logout(){
		$this->session->sess_destroy();
		redirect('');
	}
}
?>