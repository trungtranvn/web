<?php
defined('BASEPATH') or exit('No direct script access allowed');

class thongbaonguyco extends CI_Controller
{
	public	function __construct()
	{
		parent::__construct();

		// Load thư viện URL
		$this->load->helper('url');

		// Kết nối đến CSDL
		$this->load->database();

		// Kết nối đến MODEL
		$this->load->model('m_thongbaonguyco');

		// Thư viện session
		$this->load->library('session');

		$this->load->helper('form');
	}
	public function index()
	{
		$data["province"] = $this->m_thongbaonguyco->fetch_province();
		// Gọi hiển thị trên view
		$this->load->view('v_thongbaonguyco', $data);
	}
	function fetch_district()
	{
		if ($this->input->post('province_id')) {
			echo $this->m_thongbaonguyco->fetch_district($this->input->post('province_id'));
		}
	}

	function fetch_ward()
	{
		if ($this->input->post('district_id')) {
			echo $this->m_thongbaonguyco->fetch_ward($this->input->post('district_id'));
		}
	}
	public function savedata()
	{
		$ten = $_POST["ten"];
		$masv = $_POST["masv"];
		$lop = $_POST["lop"];
		$sdt = $_POST["sdt"];
		// $gioitinh = $_POST["gioitinh"];
		// $namsinh = $_POST["namsinh"];
		$tinhthanhpho = $_POST["province"];
		$quanhuyen = $_POST["district"];
		$xaphuong = $_POST["ward"];
		$diachi = $_POST["diachi"];
		$macbenh=$_POST["macbenh"];
		$tiepxuc=$_POST["tiepxuc"];
		// $sdt = $_POST["sdt"];
		// $email = $_POST["email"];
		// $dilai = $_POST["dilai"];
		// $sot = $_POST["sot"];
		// $ho = $_POST["ho"];
		// $khotho = $_POST["khotho"];
		// $viemphoi = $_POST["viemphoi"];
		// $dauhong = $_POST["dauhong"];
		// $metmoi = $_POST["metmoi"];
		// $benh = $_POST["benh"];
		// $bieuhien = $_POST["bieuhien"];
		// $nuocngoai = $_POST["nuocngoai"];
		// $gan = $_POST["gan"];
		// $mau = $_POST["mau"];
		// $phoi = $_POST["phoi"];
		// $than = $_POST["than"];
		// $tim = $_POST["tim"];
		// $huyetap = $_POST["huyetap"];
		// $suygiam = $_POST["suygiam"];
		// $gheptang = $_POST["gheptang"];
		// $tieuduong = $_POST["tieuduong"];
		// $ungthu = $_POST["ungthu"];
		// $thaiky = $_POST["thaiky"];

		$data1 = array(
			'ten' => $ten,
			'masv' => $masv,
			'lop' => $lop,
			'sdt' => $sdt,
			// 'gioitinh' => $gioitinh,
			// 'namsinh' => $namsinh,
			'tinhthanhpho' => $tinhthanhpho,
			'quanhuyen' => $quanhuyen,
			'xaphuong' => $xaphuong,
			'diachi' => $diachi,
			'sdt' => $sdt,
			'macbenh'=>$macbenh,
			'tiepxuc'=>$tiepxuc,
			// 'email' => $email,
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
		// $data = array(
			
		// 	'dilai' => $dilai,
		// 	'sot'		=>  	$sot,
		// 	'ho'		=>  	$ho,
		// 	'khotho'	=>		$khotho,
		// 	'viemphoi'	=>  	$viemphoi,
		// 	'dauhong'	=>  	$dauhong,
		// 	'metmoi'	=>  	$metmoi,
		// 	'benh'		=>  	$benh,
		// 	'bieuhien'	=>  	$bieuhien,
		// 	'nuocngoai'	=>  	$nuocngoai,
		// 	'gan'		=>  	$gan,
		// 	'mau'		=>  	$mau,
		// 	'phoi'		=>  	$phoi,
		// 	'than'		=>  	$than,
		// 	'tim'		=>  	$tim,
		// 	'huyetap'	=>   	$huyetap,
		// 	'suygiam'	=>  	$suygiam,
		// 	'gheptang'	=>  	$gheptang,
		// 	'tieuduong'	=>  	$tieuduong,
		// 	'ungthu'	=>  	$ungthu,
		// 	'thaiky'	=>  	$thaiky,


		// );
		# code...
		// $this->m_khaibao->insert_khaibao($data);
		$this->m_thongbaonguyco->insert_nguyco($data1);
		echo "
				<script type='text/javascript'>
					window.alert('Gửi thông tin thành công')
				</script>
			";
		echo "
			<script type='text/javascript'>
				window.location.href='../thongbaonguyco'
			</script>
		";

		# code...
	}
}