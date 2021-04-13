<?php
class Insert_data extends CI_Controller
{
    public function __construct()
    {
        /*call CodeIgniter's default Constructor*/
        parent::__construct();

        /*load database libray manually*/
        $this->load->database();

        /*load Model*/
        $this->load->model('insert_model');
    }
    /*Insert*/
    
    public function savedata()
    {
        $this->load->view('insert');
        $masv = $_POST["masv"];
        $monhoc = $_POST["monhoc"];

        $lophoc = $_POST["phonghoc"];
        $ca = $this->input->post('cahoc');
        // Chuyển dữ liệu thu được --> mảng
        $data = array(
            'masv' => $masv,
            'monhoc' => $monhoc,
            'phonghoc' => $lophoc,
            'ca' => $ca
        );

        // Chuyển mảng dữ liệu vào MODEL insert dữ liệu vào CSDL
        if ($this->input->post('diemdanh')) {
            $this->insert_model->severecords($data);
        }
        // /*load registration view form*/
        // $this->load->view('insert');

        // /*Check submit button */
        // if($this->input->post('diemdanh'))
        // {

        // $masv=$this->input->post('masv');
        // $monhoc=$this->input->post('monhoc');
        // $phonghoc=$this->input->post('phonghoc');

        // $this->insert_model->saverecords($masv,$monhoc,$phonghoc);
        echo '<script language="javascript">alert("Đã tạo thành viên thành công!");</script>';
        // }
    }
}
