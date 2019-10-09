<?php
class MainModel extends CI_Model {

	function tampilSiswa() {
		return $this->db->get('siswa');
	}
	function tampilSiswaById($where){
		return $this->db->get_where('siswa',$where);
	}
	function input_data($data, $table){
		$this->db->insert($table,$data);
	}
	function updateData($data, $table){
		return $this->db->update();
	}
}
