<?php
class M_faq extends CI_Model{

	function get_all_faq(){
		$hsl=$this->db->query("SELECT * FROM tbl_faq");
		return $hsl;	
	}

	function simpan_faq($pertanyaan,$jawaban,$status){
		$hsl=$this->db->query("INSERT INTO tbl_faq (pertanyaan,jawaban,status) VALUES ('$pertanyaan','$jawaban','$status')");
		return $hsl;
	}

	function update_faq($kode,$pertanyaan,$jawaban,$status){
		$hsl=$this->db->query("update tbl_faq set pertanyaan='$pertanyaan',jawaban='$jawaban',status='$status' where id_faq='$kode'");
		return $hsl;
	}
	function hapus_faq($kode){
		$hsl=$this->db->query("delete from tbl_faq where id_faq='$kode'");
		return $hsl;
	}
	
	function get_faq_byid($id_faq){
		$hsl=$this->db->query("select * from tbl_faq where id_faq='$id_faq'");
		return $hsl;
	}

}