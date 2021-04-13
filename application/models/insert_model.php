<?php
class Insert_model extends CI_Model
{
/*Insert*/
// function saverecords($masv,$monhoc,$phonghoc)
// {
 
// $query="insert into diemdanh values('','','','','','$phonghoc','$masv','','$monhoc')";
// $this->db->query($query);
// }
public function severecords($data)
{
    // $query = "insert into diemdanh values('','','','','','$lophoc','$masv','$monhoc')";
    // $this->db->query($query);
    $this->db->insert('diemdanh',$data);
}
}