<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jurusan extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Jurusan_model');
	}

	public function home()
	{
        $data['jurusan'] = $this->Jurusan_model->getAll();
		$this->load->view('layout/dashboard/header');
		$this->load->view('dashboard/jurusan', $data);
		$this->load->view('layout/dashboard/footer');
	}
    public function add()
    {
        $this->Jurusan_model->save();
        redirect(site_url('dashboard/jurusan'));
    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->Jurusan_model->delete($id)) {
            redirect(site_url('dashboard/jurusan'));
        }
    }
}
