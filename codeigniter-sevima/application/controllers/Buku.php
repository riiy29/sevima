<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Buku extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('buku_model');
        $this->load->library('form_validation');
	}

	public function home()
	{
        $data['buku'] = $this->buku_model->getAll();
		$this->load->view('layout/dashboard/header');
		$this->load->view('dashboard/buku', $data);
		$this->load->view('layout/dashboard/footer');
	}
    public function perpus()
	{
        $data['buku'] = $this->buku_model->getAll();
		$this->load->view('layout/landing/header');
		$this->load->view('perpustakaan', $data);
		$this->load->view('layout/landing/footer');
	}
    public function bukudetail($id = null)
	{
		$data["buku_detail"] = $this->db->get_where('sevima_buku', array('id_buku' => $id))->row();;
      
        $this->load->view('layout/landing/header');
		$this->load->view('bukudetail', $data);
		$this->load->view('layout/landing/footer');
	}
    public function autosendmsg() {
		include('WhatsappAPI.php'); // include given API file

		$wp = new WhatsappAPI("3062", "9413f4e6b0815d551dc5686a364a2ba147e90e3a"); // create an object of the WhatsappAPI class with your user id and api key

        $linkpdf = $this->input->post('linkpdf');
		$tujuan = $this->input->post('nomor');
		$number = "$tujuan"; // NOTE: Phone Number should be with country code
		$message = "Ini bukunya silahkan dibaca ya, dan semoga senang.. Mohon Tidak dibalas karena ini adalah pesan bot. "; // You can use WhatsApp Code to compose text messages like *bold*, ~Strikethrough~, ```Monospace```
        $media_url = "$linkpdf";

		// Send Text Message to number
		$status = $wp->sendText($number, $message, $media_url);

		$status = json_decode($status);

		if($status->status == 'error'){
			echo "<script>alert('nomor yang anda masukkan salah'); window.location.href='/perpustakaan';</script>";
		}else{
			echo "<script>alert('Pesan Berhasil dkirim, silahkan cek Whatsapp anda'); window.location.href='/perpustakaan';</script>";
		}
	}
    public function add()
    {
        $this->buku_model->save();
        redirect(site_url('dashboard/buku'));
       
    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->buku_model->delete($id)) {
            redirect(site_url('dashboard/buku'));
        }
    }
}
