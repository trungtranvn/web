<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Quan_tri_he_thong extends CI_Controller {
	function __construct()
	{
		parent::__construct();

		// Load thư viện URL
		$this->load->helper('url');

		// Kết nối đến CSDL
		$this->load->database();

		// Kết nối đến MODEL
		// $this->load->model('m_tin_tuc');

		// Thư viện session
		$this->load->library('session');

		// Kiểm tra người dùng có qu=yền truy cập trang này không. Nếu không, đẩy người dùng ra trang Đăng nhập
		if($this->session->userdata("S_username")=="") {			
			// Thông báo người dùng họ không quyền truy cập trang này
			echo "
				<script type='text/javascript'>
					window.alert('Bạn không có quyền truy cập! Vui lòng đăng nhập hệ thống.')
				</script>
			";

			// Chuyển người dùng đến trang Quản trị hệ thống
			echo "
				<script type='text/javascript'>
					window.location.href='./dang_nhap'
				</script>
			";
		}
 	}

	public function index()
	{
		// Gọi hiển thị trên view
		$this->load->view('admin/v_quan_tri_he_thong');
	}
}
