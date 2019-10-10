<?php
class MainModel extends CI_Model {

	function tampilSemuaSiswa() {
		return $this->db->get('siswa');
	}
	function tampilSiswa($where){
		return $this->db->get_where('siswa',$where);
	}
	function input_data($data, $table){
		$this->db->insert($table,$data);
	}
	function updateData($data, $table, $where){
		$this->db->where($where);
		$this->db->update($table, $data);
	}
	function deleteData($table, $where){
		$this->db->where($where);
		$this->db->delete($table);
	}
}
