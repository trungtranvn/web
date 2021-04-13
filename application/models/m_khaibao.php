<?php
class m_khaibao extends CI_Model
{
        
        function fetch_province()
        {
                $this->db->order_by('province_name', 'ASC');
                $query = $this->db->get('province');
                return $query->result();
        }
        function fetch_district($province_id)
        {
                $this->db->where('province_id', $province_id);
                $this->db->order_by('district_name', 'ASC');
                $query = $this->db->get('district');
                $output = '<option value="">Chọn Quận/Huyện</option>';
                foreach ($query->result() as $row) {
                        // $output .= '<option value="' . $row->district_id . '">' . $row->district_name . '</option>';
                        $output .='<option value="' . $row->district_id .'"<?= set_select('.'district'.', '.$row->district_name .') ?> ' . $row->district_name  . '</option>';
                }
                return $output;
        }

        function fetch_ward($district_id)
        {
                $this->db->where('district_id', $district_id);
                $this->db->order_by('ward_name', 'ASC');
                $query = $this->db->get('ward');
                $output = '<option value="">Chọn Xã/Phường</option>';
                foreach ($query->result() as $row) {
                        // $output .= '<option value="' . $row->ward_id . '">' . $row->ward_name . '</option>';
                        $output .='<option value="' . $row->ward_id .'"<?= set_select('.'ward'.', '.$row->ward_name  .') ?> ' . $row->ward_name  . '</option>';
                }
                return $output;
        }
        public function insert_khaibao($data)
    {
        // $query="insert into khaibao values ('') ";
        $this->db->insert('khaibao',$data);
        # code...
    }
    public function insert_pesson($data1)
    {
        $this->db->insert('pesson',$data1);
        # code...
    }


}
?>