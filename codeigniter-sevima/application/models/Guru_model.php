<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Guru_model extends CI_Model {

    public function getAll()
    {
        $this->db->select('*');
        $this->db->from('sevima_jurusan');
        $this->db->join('sevima_guru','sevima_guru.id_jurusan = sevima_jurusan.id_jurusan');      
        $query = $this->db->get();
        return $query->result();
    }
    public function getJurusan() {
        return $this->db->get('sevima_jurusan')->result();
    }
    public function getById($id)
    {
        return $this->db->get_where('sevima_guru', ["id_guru" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->nama_guru = $post['nama'];
        $this->no_wa = $post['no_wa'];
        $this->id_jurusan = $post['jurusan'];
        $this->diinput_tgl = date('Y-m-d');
        return $this->db->insert('sevima_guru', $this);
    }

    public function delete($id)
    {
        return $this->db->delete('sevima_guru', array("id_guru" => $id));
    }
	
}
