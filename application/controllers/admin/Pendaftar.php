<?php
class Pendaftar extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('MainModel');
		$this->load->helper('url');
	}
	function index(){
		$data['pendaftar'] = $this->MainModel->tampilSiswa()->result();
		$this->load->view('v_pendaftar',$data);
	}
	function edit($id){
		$data = $this->db->where('nisn',$id);
		$this->load->view('v_editpendaftar',$data);

	}
	function update(){
		
	}
	function delete(){
		
	}
}

?>