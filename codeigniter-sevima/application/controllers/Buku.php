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
