<?php
class M_Siswa extends CI_Model {

	function tampil() {
		return $this->db->get('siswa');
	}
	function input_data($data, $table){
		$this->db->insert($table,$data);
	}
}
