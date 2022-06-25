<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Absen_model extends CI_Model {

    public function getAll()
    {
        $this->db->select('*');
        $this->db->from('sevima_jurusan');
        $this->db->join('sevima_absen','sevima_absen.id_jurusan = sevima_jurusan.id_jurusan');  
        $this->db->join('sevima_user','sevima_absen.id_user = sevima_user.id_user');   
        $query = $this->db->get();
        return $query->result();
    }
    public function getJurusan()
    {
        $this->db->select('*');
        $this->db->from('sevima_jurusan');
        $query = $this->db->get();
        return $query->result();
    }
    public function getSiswa()
    {
        $this->db->select('*');
        $this->db->from('sevima_user');
        $this->db->where('user_akses = 3');
        $query = $this->db->get();
        return $query->result();
    }
    public function getById($id)
    {
        return $this->db->get_where('sevima_video', ["id_video" => $id])->row();
    }

    public function save()
    {
      
        $post = $this->input->post();
        $this->id_user = $post['nama'];
        $this->id_jurusan = $post['bidang'];
        $this->keterangan = $post['ket'];
        $this->tgl_absen = date('Y-m-d');
        $this->db->insert('sevima_absen', $this);
      
    }

    public function delete($id)
    {
        return $this->db->delete('sevima_pelajaran', array("id_pelajaran" => $id));
    }
	
}
