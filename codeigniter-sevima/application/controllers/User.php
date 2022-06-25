<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('user_model');
        $this->load->library('form_validation');
	}

	public function home()
	{
        $data['user'] = $this->user_model->getAll();
		$this->load->view('layout/dashboard/header');
		$this->load->view('dashboard/user', $data);
		$this->load->view('layout/dashboard/footer');
	}
    public function add()
    {
        $this->user_model->save();
        redirect(site_url('dashboard/user'));
       
    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->user_model->delete($id)) {
            redirect(site_url('dashboard/user'));
        }
    }
}
