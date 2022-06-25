<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class absen extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('absen_model');
	}
    public function absen()
	{
		$data['listsiswa'] = $this->absen_model->getSiswa();
        $data['listbidang'] = $this->absen_model->getJurusan();
		$this->load->view('layout/landing/header');
		$this->load->view('murid/absen', $data);
		$this->load->view('layout/landing/footer');
	}
	public function home()
	{
        $data['absen'] = $this->absen_model->getAll();
		$this->load->view('layout/dashboard/header');
		$this->load->view('dashboard/absen', $data);
		$this->load->view('layout/dashboard/footer');
	}
    public function add()
    {
        $this->absen_model->save();
        redirect(site_url('dashboard/absen'));
    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->absen_model->delete($id)) {
            redirect(site_url('dashboard/absen'));
        }
    }
}
