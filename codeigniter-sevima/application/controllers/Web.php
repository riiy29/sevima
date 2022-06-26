<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Web extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('buku_model');
        $this->load->library('form_validation');
	}

	public function index()
	{
		$data['buku'] = $this->buku_model->getAll();
		$this->load->view('layout/landing/header');
		$this->load->view('index', $data);
		$this->load->view('layout/landing/footer');
	}
	public function perpus()
	{
		$this->load->view('layout/landing/header');
		$this->load->view('perpustakaan');
		$this->load->view('layout/landing/footer');
	}
	
	
	
	public function murid()
	{
		$this->load->view('layout/landing/header');
		$this->load->view('murid/home-murid');
		$this->load->view('layout/landing/footer');
	}
	
	
	public function guru()
	{
		$this->load->view('layout/landing/header');
		$this->load->view('guru/home-guru');
		$this->load->view('layout/landing/footer');
	}
	

}
