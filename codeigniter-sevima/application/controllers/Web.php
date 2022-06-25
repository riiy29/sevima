<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Web extends CI_Controller {

	public function index()
	{
		$this->load->view('layout/landing/header');
		$this->load->view('index');
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
