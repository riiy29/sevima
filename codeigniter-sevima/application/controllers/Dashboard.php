<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function home()
	{
		$this->load->view('layout/dashboard/header');
		$this->load->view('dashboard/home');
		$this->load->view('layout/dashboard/footer');
	}
	
}
