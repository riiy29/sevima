<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Guru extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Guru_model');
        $this->load->library('form_validation');
	}

	public function home()
	{
        $data['guru'] = $this->Guru_model->getAll();
        $data['jurusan'] = $this->Guru_model->getJurusan();
		$this->load->view('layout/dashboard/header');
		$this->load->view('dashboard/guru', $data);
		$this->load->view('layout/dashboard/footer');
	}
    public function add()
    {
        $this->guru_model->save();
        redirect(site_url('dashboard/guru'));
       
    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->guru_model->delete($id)) {
            redirect(site_url('dashboard/guru'));
        }
    }
}
