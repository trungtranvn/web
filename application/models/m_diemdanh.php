<?php
class m_diemdanh extends CI_Model
{
    // public function severecords($masv, $monhoc, $lophoc)
    // {
    //     $query = "insert into diemdanh values('','','','','','$lophoc','$masv','$monhoc')";
    //     $this->db->query($query);
    //     // $this->db->insert('diemdanh',$data);
    // }
    public function insert_diemdanh($data)
    {
        $this->db->insert('diemdanh',$data);
        # code...
    }

}
