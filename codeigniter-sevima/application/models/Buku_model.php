
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Buku_model extends CI_Model {

    public function getAll()
    {
        return $this->db->get('sevima_buku')->result();
    }
    
    public function getById($id)
    {
        return $this->db->get_where('sevima_buku', ["id_buku" => $id])->row();
    }

    public function save()
    {
        $config['upload_path']          = './assets/img/cover-buku/';
        $config['allowed_types']        = 'pdf';
        $config['overwrite']            = true;
        $config['file_name']            = md5($_FILES["pdf_file"]['name']);

        $this->load->library('upload', $config);
        
        if (!$this->upload->do_upload('pdf_file')) {
            echo "<script>alert('Gagal menambah foto'</script>";
        }
        else {
            $post = $this->input->post();
            $this->nama_buku = $post['nama'];
            $this->desc_buku = $post['deskripsi'];
            $this->file_buku = base_url("assets/img/cover-buku/".$config['file_name']).'.'.pathinfo($_FILES["pdf_file"]['name'], PATHINFO_EXTENSION);
            $this->diinput_tgl = date('Y-m-d');
            $this->db->insert('sevima_buku', $this);
        }
        
        
    }

    public function delete($id)
    {
        return $this->db->delete('sevima_buku', array("id_buku" => $id));
    }
	
}
