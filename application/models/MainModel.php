<?php
class MainModel extends CI_Model {

	function tampilSiswa() {
		return $this->db->get('siswa');
	}
	function input_data($data, $table){
		$this->db->insert($table,$data);
	}
}
