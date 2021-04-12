<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lien_he extends CI_Controller {
	public function index()
	{
		// Gọi hiển thị trên view
		$this->load->view('v_lienhe');
	}

}
