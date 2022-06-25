<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jurusan_model extends CI_Model {

    public function getAll()
    {
        return $this->db->get('sevima_jurusan')->result();
    }
    
    public function getById($id)
    {
        return $this->db->get_where('sevima_jurusan', ["id_jurusan" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->nama_jurusan = $post['nama'];
        $this->diinput_tgl = date('Y-m-d');
        return $this->db->insert('sevima_jurusan', $this);
    }

    public function delete($id)
    {
        return $this->db->delete('sevima_jurusan', array("id_jurusan" => $id));
    }
	
}
