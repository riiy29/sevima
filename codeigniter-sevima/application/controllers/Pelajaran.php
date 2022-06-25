<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pelajaran extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('pelajaran_model');
	}

	public function home()
	{
        $data['pelajaran'] = $this->pelajaran_model->getAll();
        $data['guru'] = $this->pelajaran_model->getGuru();
		$this->load->view('layout/dashboard/header');
		$this->load->view('dashboard/pelajaran', $data);
		$this->load->view('layout/dashboard/footer');
	}
    public function add()
    {
        $this->pelajaran_model->save();
        redirect(site_url('dashboard/pelajaran'));
    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->pelajaran_model->delete($id)) {
            redirect(site_url('dashboard/pelajaran'));
        }
    }
}
