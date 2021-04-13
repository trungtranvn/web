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

		$this->load->helper('form');
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
	public function savedata()
	{
		$ten = $_POST["ten"];
		$masv = $_POST["masv"];
		$lop = $_POST["lop"];
		$sdt = $_POST["sdt"];
		$gioitinh = $_POST["gioitinh"];
		$namsinh = $_POST["namsinh"];
		$tinhthanhpho = $_POST["province"];
		$quanhuyen = $_POST["district"];
		$xaphuong = $_POST["ward"];
		$diachi = $_POST["diachi"];
		$sdt = $_POST["sdt"];
		$email = $_POST["email"];
		$dilai = $_POST["dilai"];
		$sot = $_POST["sot"];
		$ho = $_POST["ho"];
		$khotho = $_POST["khotho"];
		$viemphoi = $_POST["viemphoi"];
		$dauhong = $_POST["dauhong"];
		$metmoi = $_POST["metmoi"];
		$benh = $_POST["benh"];
		$bieuhien = $_POST["bieuhien"];
		$nuocngoai = $_POST["nuocngoai"];
		$gan = $_POST["gan"];
		$mau = $_POST["mau"];
		$phoi = $_POST["phoi"];
		$than = $_POST["than"];
		$tim = $_POST["tim"];
		$huyetap = $_POST["huyetap"];
		$suygiam = $_POST["suygiam"];
		$gheptang = $_POST["gheptang"];
		$tieuduong = $_POST["tieuduong"];
		$ungthu = $_POST["ungthu"];
		$thaiky = $_POST["thaiky"];

		$data1 = array(
			'ten' => $ten,
			'masv' => $masv,
			'lop' => $lop,
			'sdt' => $sdt,
			'gioitinh' => $gioitinh,
			'namsinh' => $namsinh,
			'tinhthanhpho' => $tinhthanhpho,
			'quanhuyen' => $quanhuyen,
			'xaphuong' => $xaphuong,
			'diachi' => $diachi,
			'sdt' => $sdt,
			'email' => $email,
			// 'dilai' => $dilai,
			// 'sot'		=>  	$sot,
			// 'ho'		=>  	$ho,
			// 'khotho'	=>		$khotho,
			// 'viemphoi'	=>  	$viemphoi,
			// 'dauhong'	=>  	$dauhong,
			// 'metmoi'	=>  	$metmoi,
			// 'benh'		=>  	$benh,
			// 'bieuhien'	=>  	$bieuhien,
			// 'nuocngoai'	=>  	$nuocngoai,
			// 'gan'		=>  	$gan,
			// 'mau'		=>  	$mau,
			// 'phoi'		=>  	$phoi,
			// 'than'		=>  	$than,
			// 'tim'		=>  	$tim,
			// 'huyetap'	=>   	$huyetap,
			// 'suygiam'	=>  	$suygiam,
			// 'gheptang'	=>  	$gheptang,
			// 'tieuduong'	=>  	$tieuduong,
			// 'ungthu'	=>  	$ungthu,
			// 'thaiky'	=>  	$thaiky,


		);
		$data = array(
			// 'ten' => $ten,
			// 'masv' => $masv,
			// 'lop' => $lop,
			// 'sdt' => $sdt,
			// 'gioitinh' => $gioitinh,
			// 'namsinh' => $namsinh,
			// 'tinhthanhpho' => $tinhthanhpho,
			// 'quanhuyen' => $quanhuyen,
			// 'xaphuong' => $xaphuong,
			// 'diachi' => $diachi,
			// 'sdt' => $sdt,
			// 'email' => $email,
			'dilai' => $dilai,
			'sot'		=>  	$sot,
			'ho'		=>  	$ho,
			'khotho'	=>		$khotho,
			'viemphoi'	=>  	$viemphoi,
			'dauhong'	=>  	$dauhong,
			'metmoi'	=>  	$metmoi,
			'benh'		=>  	$benh,
			'bieuhien'	=>  	$bieuhien,
			'nuocngoai'	=>  	$nuocngoai,
			'gan'		=>  	$gan,
			'mau'		=>  	$mau,
			'phoi'		=>  	$phoi,
			'than'		=>  	$than,
			'tim'		=>  	$tim,
			'huyetap'	=>   	$huyetap,
			'suygiam'	=>  	$suygiam,
			'gheptang'	=>  	$gheptang,
			'tieuduong'	=>  	$tieuduong,
			'ungthu'	=>  	$ungthu,
			'thaiky'	=>  	$thaiky,


		);
		# code...
		$this->m_khaibao->insert_khaibao($data);
		$this->m_khaibao->insert_pesson($data1);
		echo "
				<script type='text/javascript'>
					window.alert('Khai Báo thành công')
				</script>
			";
		echo "
			<script type='text/javascript'>
				window.location.href='../Khai_bao'
			</script>
		";

		# code...
	}
	// public function them_moi_pesson() {
	// 	// Thu nhập dữ liệu từ FORM thêm mới chuyển sang
	// 	$ten = $_POST["txtten"];
	// 	$masv = $_POST["txtmsv"];
	// 	$lop = $_POST["txtlop"];
	// 	$sdt = $_POST["txtsdt"];
	// 	$sdt = $_POST["txtsdt"];
	// 	$sdt = $_POST["txtsdt"];
	// 	$sdt = $_POST["txtsdt"];
	// 	$sdt = $_POST["txtsdt"];
	// 	$sdt = $_POST["txtsdt"];
	// 	// Chuyển dữ liệu thu được --> mảng
	// 	$data = array(
	// 		'tieu_de' => $tieu_de,
	// 		'mo_ta' => $mo_ta,
	// 		'anh_minh_hoa' => $anh_minh_hoa,
	// 		'noi_dung' => $noi_dung
	// 	);

	// 	// Chuyển mảng dữ liệu vào MODEL insert dữ liệu vào CSDL
	// 	$this->m_tin_tuc->insert_tin_tuc($data);

	// 	// Thông báo người dùng thêm mới tin tức thành công & chuyển người dùng về trang quản trị tin tức
	// 	echo "
	// 		<script type='text/javascript'>
	// 			window.alert('Thêm mới tin tức thành công')
	// 		</script>
	// 	";

	// 	// Chuyển người dùng đến trang Quản trị hệ thống
	// 	echo "
	// 		<script type='text/javascript'>
	// 			window.location.href='../quan_tri_tin_tuc'
	// 		</script>
	// 	";
	// }
}
