<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controller_Login_User extends CI_Controller {

	function __construct(){
		parent:: __construct();
		$this->load->model('M_login');
	}
	public function index(){
		$this->load->view('user/v_loginuser');
	}
	public function ceklogin()
	{
		$username = $this->input->post('username_user');
		$password = $this->input->post('password_user');
		$a = $this->M_login->login_user($username,$password);
		if($a->num_rows()>0){
			$this->session->set_userdata('masuk',true);
			$this->session->set_userdata('username',$username);
			$this->session->set_userdata('akses','1');
			$b=$a->row_array();
			$id=$b['id_user'];
			$this->session->set_userdata('id',$id);
			redirect('Controller_User');
		}
		else{
			$this->session->set_flashdata('info','Invalid Username or Password!');
			redirect('Controller_Login_User');
		}
	}
	public function logout(){
		$this->session->sess_destroy();
		redirect('');
	}
}
?>