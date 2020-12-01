<?php 
class Task_model extends CI_Model {
    public function get_task($id) {
        $query = $this->db->get('tasks');
        $this->db->where('id', $id);
        return $query->row();
    }

    public function check_if_complete($id) {
        $this->db->where('id', $id);
        $query = $this->db->get('tasks');
        return $query->row()->is_complete;
    }
}