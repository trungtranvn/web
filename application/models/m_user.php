<?php
class m_user extends CI_Model {
        public function check_user($username, $pass)
        {
                $query = $this->db->query("
                        SELECT * 
                        FROM user
                        WHERE username='".$username."' AND pass='".$pass."'
                ");

                return $query->num_rows();
        }

        public function get_user()
        {
                $query = $this->db->query("
                        SELECT * 
                        FROM user
                ");

                return $query->result();
        }

        public function insert_user()
        {
        }

        public function update_user()
        {
        }

        public function delete_user()
        {
        }

}