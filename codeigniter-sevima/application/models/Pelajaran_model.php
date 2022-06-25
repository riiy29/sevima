<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pelajaran_model extends CI_Model {

    public function getAll()
    {
        $this->db->select('*');
        $this->db->from('sevima_guru');
        $this->db->join('sevima_pelajaran','sevima_pelajaran.id_guru = sevima_guru.id_guru');      
        $query = $this->db->get();
        return $query->result();
    }
    public function getGuru()
    {
        $this->db->select('*');
        $this->db->from('sevima_guru');
        $query = $this->db->get();
        return $query->result();
    }
    public function getById($id)
    {
        return $this->db->get_where('sevima_pelajaran', ["id_pelajaran" => $id])->row();
    }

    public function save()
    {
        $config['upload_path']          = './assets/img/modul';
        $config['allowed_types']        = 'pdf';
        $config['overwrite']            = true;
        $config['file_name']            = md5($_FILES["pdf_file"]['name']);

        $this->load->library('upload', $config);
        
        if (!$this->upload->do_upload('pdf_file')) {
            echo "<script>alert('Gagal menambah file'</script>";
        }
        else {
            $post = $this->input->post();
            $this->nama_pelajaran = $post['nama'];
            $this->desc_pelajaran = $post['deskripsi'];
            $this->id_guru = $post['guru'];
            $this->modul_url = base_url("assets/img/modul".$config['file_name']).'.'.pathinfo($_FILES["pdf_file"]['name'], PATHINFO_EXTENSION);
            $this->diinput_tgl = date('Y-m-d');
            $this->db->insert('sevima_pelajaran', $this);
        }
    }

    public function delete($id)
    {
        return $this->db->delete('sevima_pelajaran', array("id_pelajaran" => $id));
    }
	
}
