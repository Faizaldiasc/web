<?php
	class M_deleteData extends CI_Model
	{
		public function delete($id){
			return $this->db->query("DELETE FROM tbl_user WHERE id_user='$id'");
		}
		public function deletedatamentor($id){
			return $this->db->query("DELETE FROM tbl_mentor WHERE id_mentor='$id'");
		}
		public function deletekursus($id){
			return $this->db->query("DELETE FROM tbl_kursus WHERE id_kursus='$id'");
		}
	}
?>