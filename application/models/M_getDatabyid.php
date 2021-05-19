<?php
	class M_getDatabyid extends CI_Model
	{
		public function getDataKursus($id){
			return $this->db->query("SELECT * FROM tbl_kursus WHERE id_kursus='$id'");			
		}
		public function getData_byidFile($id){
			return $this->db->query("SELECT * FROM tbl_file WHERE id_fileKursus='$id'");
		}
 		public function getData_byidUser($id){
		 	return $this->db->query("SELECT * FROM tbl_user WHERE id_user='$id'");
 		}
 		public function getDataLihatSiswa($id){
			return $this->db->query("SELECT a.id_ambil,a.id_user,b.*,a.id_kursus,DATE_FORMAT(a.tanggal,'%d %M %Y') AS tanggal FROM tbl_mengambil a,tbl_user b,tbl_kursus c WHERE a.id_kursus='$id' AND a.id_user=b.id_user AND a.id_kursus=c.id_kursus AND a.status='1'");
		}
		public function getData_byidMentor($id){
			return $this->db->query("SELECT * FROM tbl_mentor WHERE id_mentor='$id'");
		}
		public function getData_byidKursus($id){
			return $this->db->query("SELECT * FROM tbl_kursus WHERE id_kursus='$id'");
		}
	}
?>