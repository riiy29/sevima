<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class video_model extends CI_Model {

    public function getAll()
    {
        $this->db->select('*');
        $this->db->from('sevima_pelajaran');
        $this->db->join('sevima_video','sevima_video.id_pelajaran = sevima_pelajaran.id_pelajaran');      
        $query = $this->db->get();
        return $query->result();
    }
    public function getPelajaran()
    {
        $this->db->select('*');
        $this->db->from('sevima_pelajaran');
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
        $this->nama_video = $post['nama'];
        $this->id_pelajaran = $post['pelajaran'];
        $this->url_video = $post['ytb_url'];
        $this->diinput_tgl = date('Y-m-d');
        $this->db->insert('sevima_video', $this);
      
    }

    public function delete($id)
    {
        return $this->db->delete('sevima_pelajaran', array("id_pelajaran" => $id));
    }
	
}
