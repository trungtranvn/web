<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Quan_tri_tin_tuc extends CI_Controller {
	function __construct()
	{
		parent::__construct();

		// Load thư viện URL
		$this->load->helper('url');

		// Kết nối đến CSDL
		$this->load->database();

		// Kết nối đến MODEL
		$this->load->model('m_tin_tuc');

		// Thư viện session
		$this->load->library('session');

		// Kiểm tra người dùng có qu=yền truy cập trang này không. Nếu không, đẩy người dùng ra trang Đăng nhập
		if($this->session->userdata("S_EMAIL")=="") {			
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
		// Lấy dữ liệu, chuẩn bị dữ liệu để đẩy sang View
		$data["noi_dung_tin_tuc"] = $this->m_tin_tuc->get_tin_tuc();

		// Gọi hiển thị trên view
		$this->load->view('admin/v_quan_tri_tin_tuc', $data);
	}

	public function them_moi()
	{
		// Gọi hiển thị trên view
		$this->load->view('admin/v_quan_tri_tin_tuc_them_moi');
	}

	public function thuc_hien_them_moi() {
		// Thu nhập dữ liệu từ FORM thêm mới chuyển sang
		$tieu_de = $_POST["txtTieuDe"];
		$mo_ta = $_POST["txtMoTa"];
		$anh_minh_hoa = $_POST["txtAnhMinhHoa"];
		$noi_dung = $_POST["txtNoiDung"];

		// Chuyển dữ liệu thu được --> mảng
		$data = array(
			'tieu_de' => $tieu_de,
			'mo_ta' => $mo_ta,
			'anh_minh_hoa' => $anh_minh_hoa,
			'noi_dung' => $noi_dung
		);

		// Chuyển mảng dữ liệu vào MODEL insert dữ liệu vào CSDL
		$this->m_tin_tuc->insert_tin_tuc($data);

		// Thông báo người dùng thêm mới tin tức thành công & chuyển người dùng về trang quản trị tin tức
			echo "
				<script type='text/javascript'>
					window.alert('Thêm mới tin tức thành công')
				</script>
			";

			// Chuyển người dùng đến trang Quản trị hệ thống
			echo "
				<script type='text/javascript'>
					window.location.href='../quan_tri_tin_tuc'
				</script>
			";
	}
}
