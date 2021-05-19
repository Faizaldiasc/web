<?php
	class M_login extends CI_Model
	{
		public function getData_kursus(){
			return $this->db->query("SELECT * FROM tbl_kursus");			
		}
		public function getData_user(){
			return $this->db->query("SELECT * FROM tbl_user");			
		}
		public function login_user($username,$password){		
			return $this->db->query("SELECT * FROM tbl_user WHERE username_user='$username' AND password_user='$password'");
		}
		public function getData_mentor(){
			return $this->db->query("SELECT * FROM tbl_mentor");			
		}
		public function login_mentor($username,$password){		
			return $this->db->query("SELECT * FROM tbl_mentor WHERE username_mentor='$username' AND password_mentor='$password'");
		}
		public function getData_admin(){
			return $this->db->query("SELECT * FROM tbl_admin");			
		}
		public function login_admin($username,$password){
			return $this->db->query("SELECT * FROM tbl_admin WHERE username_admin='$username' AND password_admin='$password'");
		}
		
	}
?>