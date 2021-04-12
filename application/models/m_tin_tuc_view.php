<?php
class m_tin_tuc_view extends CI_Model {
        public function get_tin_tuc()
        {
                $query = $this->db->query("
                        SELECT * 
                        FROM tintuc
                ");

                return $query->result();
        }
        public function get_tin_tuc_theo_id($id)
        {
                $query = $this->db->query("
                        SELECT * 
                        FROM tintuc
                        WHERE idtintuc='".$id."'
                ");

                return $query->row();
        }
        public function getdata()
        {
       return $this->db->get('tintuc');
        }

        public function delete_tin_tuc()
        {
        }

}