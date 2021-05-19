<?php
class M_addData extends CI_Model
{
	public function insert($username, $password, $name, $email, $cp, $foto)
	{
		return $this->db->query("INSERT INTO tbl_user(username_user,password_user,nama_user,email_user,cp_user,foto_user) 
				VALUES('$username','$password','$name','$email','$cp','$foto')");
	}
	public function insertKursus($nama, $kelas, $jadwal, $jumlah_siswa, $deskripsi_kelas, $foto, $status,$enrollment_key)
	{
		return $this->db->query("INSERT INTO tbl_kursus(
				id_kursus,nama_kelas,kelas, jadwal, jumlah_siswa, deskripsi_kelas,foto_kursus,status,enrollment_key) 
				VALUES('', '$nama','$kelas', '$jadwal', '$jumlah_siswa', '$deskripsi_kelas','$foto','$status','$enrollment_key')");
	}
	public function insertFileKursus($id, $jdl, $deskripsi, $iink)
	{
		return $this->db->query("INSERT INTO tbl_file(id_fileKursus,nama_file,deskripsi_file,link_file)
				VALUES('$id','$jdl','$deskripsi','$iink')");
	}
	public function insertdatamentor($username, $password, $name, $email, $cp, $foto)
	{
		return $this->db->query("INSERT INTO tbl_mentor(username_mentor,password_mentor,nama_mentor,email_mentor,cp_mentor,foto_mentor) 
				VALUES('$username','$password','$name','$email','$cp','$foto')");
	}
	public function insertjoinclass($id_user, $id_kursus)
	{
		return $this->db->query("INSERT INTO tbl_mengambil(id_user,id_kursus)
				VALUES('$id_user','$id_kursus')");
	}
}
