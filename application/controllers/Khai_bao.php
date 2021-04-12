<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Khai_bao extends CI_Controller
{
	public	function __construct()
	{
		parent::__construct();

		// Load thư viện URL
		$this->load->helper('url');

		// Kết nối đến CSDL
		$this->load->database();

		// Kết nối đến MODEL
		$this->load->model('m_khaibao');

		// Thư viện session
		$this->load->library('session');
	}

	public function index()
	{
		$data["province"] = $this->m_khaibao->fetch_province();
		// Gọi hiển thị trên view
		$this->load->view('v_Khaibao', $data);
	}
	function fetch_district()
	{
		if ($this->input->post('province_id')) {
			echo $this->m_khaibao->fetch_district($this->input->post('province_id'));
		}
	}

	function fetch_ward()
	{
		if ($this->input->post('district_id')) {
			echo $this->m_khaibao->fetch_ward($this->input->post('district_id'));
		}
	}
}
