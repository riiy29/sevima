<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

    public function getAll()
    {
        $this->db->select('*');
        $this->db->from('sevima_user');
        $query = $this->db->get();
        return $query->result();
    }

    public function getById($id)
    {
        return $this->db->get_where('sevima_user', ["id_user" => $id])->row();
    }


    public function delete($id)
    {
        return $this->db->delete('sevima_user', array("id_user" => $id));
    }
	
}
