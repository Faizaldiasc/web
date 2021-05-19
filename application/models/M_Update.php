<?php
	class M_Update extends CI_Model
	{
		public function updateStatusKelas($id){
			return $this->db->query("UPDATE tbl_kursus SET status='1' WHERE id_kursus = '$id'");
		}
		public function updateStatusKonfirmasi($id){
			return $this->db->query("UPDATE tbl_mengambil SET status='1' WHERE id_ambil = '$id'");
		}
		public function updateProfileMentor($id,$username,$password,$name,$email,$cp,$foto){
			return $this->db->query("UPDATE tbl_mentor SET username_mentor='$username', password_mentor='$password', nama_mentor='$name', email_mentor='$email', cp_mentor='$cp', foto_mentor='$foto' 
				WHERE id_mentor ='$id'");
		}
		public function updateProfileMentorTanpaFoto($id,$username,$password,$name,$email,$cp){
			return $this->db->query("UPDATE tbl_mentor SET username_mentor='$username', password_mentor='$password', nama_mentor='$name', email_mentor='$email', cp_mentor='$cp'
				WHERE id_mentor ='$id'");
		}
		public function updateProfileUser($id,$username,$password,$name,$email,$cp,$foto){
			return $this->db->query("UPDATE tbl_user SET username_user='$username', password_user='$password', nama_user='$name', email_user='$email', cp_user='$cp', foto_user='$foto' 
				WHERE id_user ='$id'");
		}
		public function updateProfileUserTanpaFoto($id,$username,$password,$name,$email,$cp){
			return $this->db->query("UPDATE tbl_user SET username_user='$username', password_user='$password', nama_user='$name', email_user='$email', cp_user='$cp'
				WHERE id_user ='$id'");
		}
	}
?>