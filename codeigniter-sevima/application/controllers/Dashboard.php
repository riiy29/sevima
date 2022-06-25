<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	function __construct(){
		parent::__construct();
		// if($this->session->userdata('masuk') !=TRUE){
        //     redirect('auth/view');
		// };
	}

	public function home()
	{
		$this->load->view('layout/dashboard/header');
		$this->load->view('dashboard/home');
		$this->load->view('layout/dashboard/footer');
	}
	
}
