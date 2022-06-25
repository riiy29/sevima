<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class video extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('video_model');
	}

	public function home()
	{
        $data['video'] = $this->video_model->getAll();
        $data['pelajaran'] = $this->video_model->getPelajaran();
		$this->load->view('layout/dashboard/header');
		$this->load->view('dashboard/video', $data);
		$this->load->view('layout/dashboard/footer');
	}
    public function belajardetail($id=null)
	{
        $data["video"] = $this->db->get_where('sevima_video', array('id_video' => $id))->row();;
		$this->load->view('layout/landing/header');
		$this->load->view('belajar-detail', $data);
		$this->load->view('layout/landing/footer');
	}
    public function add()
    {
        $this->video_model->save();
        redirect(site_url('dashboard/video'));
    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->video_model->delete($id)) {
            redirect(site_url('dashboard/video'));
        }
    }

    // Page guru
    public function v_addpelajaran()
	{
		$data['video'] = $this->video_model->getAll();
		$this->load->view('layout/landing/header');
		$this->load->view('guru/form-add-pelajaran', $data);
		$this->load->view('layout/landing/footer');
	}
}
