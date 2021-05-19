<?php
	class M_getData extends CI_Model
	{
		public function getDataKelas(){
			return $this->db->query("SELECT * FROM tbl_kursus WHERE status='1'");			
		}
		public function getDataKonfirmasi(){
			return $this->db->query("SELECT a.status,a.id_ambil,a.id_user,b.nama_user,a.id_kursus,c.nama_kelas,DATE_FORMAT(a.tanggal,'%d %M %Y') AS tanggal FROM tbl_mengambil a,tbl_user b,tbl_kursus c WHERE a.id_user=b.id_user AND a.id_kursus=c.id_kursus");
		}
		public function getDataKelas2(){
			return $this->db->query("SELECT * FROM tbl_kursus");			
		}
		public function getDataKelasAmbil($id){
			return $this->db->query("SELECT a.id_kursus,b.foto_kursus,b.nama_kelas,b.deskripsi_kelas,b.jadwal FROM tbl_mengambil a,tbl_kursus b 
				WHERE b.id_kursus=a.id_kursus AND a.status='1' AND a.id_user='$id'");
		}
	}
?>