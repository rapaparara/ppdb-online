<?php
class Pendaftaran extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('MainModel');
		$this->load->helper('url');
	}

	public function Index(){
		$data['siswa'] = $this->MainModel->tampilSiswa()->result();
		$this->load->view('v_pendaftaran',$data);
	}
	function input_data(){
		$namaSiswa = $this->input->post('namaSiswa');
		$nisn = $this->input->post('nisn');
		$jenisKelamin = $this->input->post('jenisKelamin');
		$tanggalLahir = $this->input->post('tanggalLahir');
		$alamat = $this->input->post('alamat');
		$asalSekolah = $this->input->post('asalSekolah');
		$namaAyah = $this->input->post('namaAyah');
		$namaIbu = $this->input->post('namaIbu');
		$minatBakat = $this->input->post('minatBakat');
		$data = array(
				'namaSiswa' => $namaSiswa,
				'nisn' => $nisn,
				'jenisKelamin' => $jenisKelamin,
				'tanggalLahir' => $tanggalLahir,
				'alamat' => $alamat,
				'asalSekolah' => $asalSekolah,
				'namaAyah' => $namaAyah,
				'namaIbu' => $namaIbu,
				'minatBakat' => $minatBakat
		);

		$this->MainModel->input_data($data,'siswa');
		redirect('pendaftaran');
	}
}


?>