<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tin_tuc extends CI_Controller {
	function __construct()
	{
		parent::__construct();

		// Load thư viện URL
		$this->load->helper('url');

		// Kết nối đến CSDL
		$this->load->database();

		// Kết nối đến MODEL
		$this->load->model('m_tin_tuc_view');

		// Thư viện session
		$this->load->library('session');
	}
	public function index()
	{
		$data["noi_dung_tin_tuc"]=$this->m_tin_tuc_view->get_tin_tuc();
		$this->load->view('v_tintuc',$data);
	}

	// public function data_view()
	// {
	// 	// lay du lieu tu model
	// 	$this->load->model('m_tin_tuc_view');
	// 	$this->m_tin_tuc_view->getdata()->result_aray();

	// 	echo '<prev>';
	// 	print_r($result);
	// }

}
