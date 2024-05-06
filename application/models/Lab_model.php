<?php
class Lab_model extends CI_Model {
    public function fetch_experiments(){
        return $this->db->get('experiments')->result_array();
    }
}