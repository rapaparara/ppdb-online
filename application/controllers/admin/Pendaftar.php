<?php
class Pendaftar extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('MainModel');
		$this->load->helper('url');
	}
	function index(){
		$data['pendaftar'] = $this->MainModel->tampilSemuaSiswa()->result();
		$this->load->view('v_pendaftar',$data);
	}
	function edit($id){
		$where = array('nisn'=>$id);
		$data['pendaftar'] = $this->MainModel->tampilSiswa($where)->result();
		$this->load->view('v_editpendaftar',$data);

	}
	function update(){
		$nisn = $this->input->post('nisn');
		$namaSiswa = $this->input->post('namaSiswa');
		$jenisKelamin = $this->input->post('jenisKelamin');
		$tanggalLahir = $this->input->post('tanggalLahir');
		$alamat = $this->input->post('alamat');
		$asalSekolah = $this->input->post('asalSekolah');
		$namaAyah = $this->input->post('namaAyah');
		$namaIbu = $this->input->post('namaIbu');
		$minatBakat = $this->input->post('minatBakat');

		$where = array('nisn'=>$nisn);
		$data = array(
				'namaSiswa' => $namaSiswa,
				'jenisKelamin' => $jenisKelamin,
				'tanggalLahir' => $tanggalLahir,
				'alamat' => $alamat,
				'asalSekolah' => $asalSekolah,
				'namaAyah' => $namaAyah,
				'namaIbu' => $namaIbu,
				'minatBakat' => $minatBakat
		);
		$this->MainModel->updateData($data, 'siswa', $where);
		redirect('admin/pendaftar');
	}
	function delete($id){
		$where = array('nisn' => $id);
		$this->MainModel->deleteData('siswa',$where);
		redirect('admin/pendaftar');
	}
}

?>