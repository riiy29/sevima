<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {


	//cek nip dan password dosen
    function auth_guru($email,$password){
        $query=$this->db->query("SELECT * FROM sevima_user WHERE email='$email' AND password=MD5('$password') LIMIT 1");
        return $query;
    }
 
    //cek nim dan password mahasiswa
    function auth_murid($email,$password){
        $query=$this->db->query("SELECT * FROM sevima_user WHERE email='$email' AND password=MD5('$password') LIMIT 1");
        return $query;
    }
	
}
