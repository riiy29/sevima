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
	public function bukudetail()
	{
		$this->load->view('layout/landing/header');
		$this->load->view('bukudetail');
		$this->load->view('layout/landing/footer');
	}
	public function belajar()
	{
		$this->load->view('layout/landing/header');
		$this->load->view('belajar');
		$this->load->view('layout/landing/footer');
	}
	public function subbelajar()
	{
		$this->load->view('layout/landing/header');
		$this->load->view('subbelajar');
		$this->load->view('layout/landing/footer');
	}
	public function murid()
	{
		$this->load->view('layout/landing/header');
		$this->load->view('murid/home-murid');
		$this->load->view('layout/landing/footer');
	}
	public function absen()
	{
		$this->load->view('layout/landing/header');
		$this->load->view('murid/absen');
		$this->load->view('layout/landing/footer');
	}
	public function hubungiguru()
	{
		$this->load->view('layout/landing/header');
		$this->load->view('murid/hubungiguru');
		$this->load->view('layout/landing/footer');
	}

}
