<?php
class Home extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('MainModel');
		$this->load->helper('url');
	}
	function index(){
		$this->load->view('v_home_admin');
	}
}

?>