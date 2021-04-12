<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dang_nhap extends CI_Controller {
	function __construct()
	{
		parent::__construct();

		// Load thư viện URL
		$this->load->helper('url');

		// Kết nối đến CSDL
		$this->load->database();

		// Kết nối đến MODEL
		$this->load->model('m_user');

		// Thư viện session
		$this->load->library('session');
	}

	public function index()
	{
		// Gọi hiển thị trên view
		$this->load->view('admin/v_dang_nhap');
	}

	// Mục đích: kiểm tra thông tin đăng nhập của người dùng đúng hay sai?
	public function kiem_tra_dang_nhap()
	{
		// Lấy ra thông tin từ FORM ĐĂNG NHẬP chuyển sang
		$username = $_POST["txtusername"];
		$pass = $_POST["txtPass"];

		// Check thử Email & Password
		// echo $email." | ".$password;

		if($this->m_user->check_user($username, $pass)==1) {
			// Khởi tạo phiên làm việc cho người đăng nhập hệ thống thành công
			$this->session->set_userdata('S_username', $username);

			// Thông báo đăng nhập thành công
			echo "
				<script type='text/javascript'>
					window.alert('Đăng nhập thành công!')
				</script>
			";

			// Chuyển người dùng đến trang Quản trị hệ thống
			echo "
				<script type='text/javascript'>
					window.location.href='../quan_tri_he_thong'
				</script>
			";

		} else {
			// Thông báo đăng nhập thành công
			echo "
				<script type='text/javascript'>
					window.alert('Đăng nhập thất bại! Vui lòng kiểm tra lại thông tin đăng nhập!')
				</script>
			";
		}


	}
}
