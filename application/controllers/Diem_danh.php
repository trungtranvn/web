<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Diem_danh extends CI_Controller
{
	public	function __construct()
	{
		parent::__construct();

		// Load thư viện URL
		$this->load->helper('url');

		// Kết nối đến CSDL
		$this->load->database();

		// Kết nối đến MODEL
		$this->load->model('m_diemdanh');

		// Thư viện session
		$this->load->library('session');

		$this->load->helper('form');
	}
	public function index()
	{
		$this->load->view('v_diemdanh');
		
	}
	public function savedata()
	{
			$ten=$_POST["ten"];
			$masv=$_POST["masv"];
			$monhoc=$_POST["monhoc"];
			$phonghoc=$_POST["phonghoc"];
			$ca=$_POST["ca"];
			$toanha=$_POST["toanha"];
			$data= array(
				'tensv'=>$ten,
				'masv'=>$masv,
				'monhoc'=>$monhoc,
				'phonghoc'=>$phonghoc,
				'ca'=>$ca,
				'toanha'=>$toanha
			);
			# code...
			$this->m_diemdanh->insert_diemdanh($data);
			echo "
				<script type='text/javascript'>
					window.alert('Thêm mới đối tác thành công')
				</script>
			";
			echo "
			<script type='text/javascript'>
				window.location.href='../diem_danh'
			</script>
		";
		
		# code...
	}
}
