<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {


	public function login($email, $password)
    {
        $this->db->where('email', $email);
        $this->db->where('password', md5($password));
        $query = $this->db->get('sevima_user');
        if ($query->num_rows() > 0) {
            return $query->row();
        } else {
            return false;
        }
    }
	
}
