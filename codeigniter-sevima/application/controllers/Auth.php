<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    function __construct(){
        parent::__construct();
		$this->load->model('Login_model');
    }

	public function view()
	{
	
        $this->load->view('Auth/login');
   
	}

    // public function login() {
    //     $email=htmlspecialchars($this->input->post('email',TRUE),ENT_QUOTES);
    //     $password=htmlspecialchars($this->input->post('password',TRUE),ENT_QUOTES);
 
    //     $cek_guru=$this->Login_model->auth_guru($email,$password);
 
    //     if($cek_guru->num_rows() > 0){ //jika login sebagai 
    //                     $data=$cek_guru->row_array();
    //             $this->session->set_userdata('masuk',TRUE);
    //              if($data['hak_akses']=='1'){ //Akses admin
    //                 $this->session->set_userdata('akses','1');
    //                 $this->session->set_userdata('ses_id',$data['username']);
    //                 $this->session->set_userdata('ses_nama',$data['nama']);
    //                 redirect('dashboard');
 
    //              }else{ //akses guru
    //                 $this->session->set_userdata('akses','2');
    //                 $this->session->set_userdata('ses_id',$data['username']);
    //                 $this->session->set_userdata('ses_nama',$data['nama']);
    //                 redirect('guru');
    //              }
 
    //     }else{ //jika login sebagai murid
    //                 $cek_murid=$this->login_model->auth_murid($username,$password);
    //                 if($cek_murid->num_rows() > 0){
    //                         $data=$cek_murid->row_array();
    //                 $this->session->set_userdata('masuk',TRUE);
    //                         $this->session->set_userdata('akses','3');
    //                         $this->session->set_userdata('ses_id',$data['username']);
    //                         $this->session->set_userdata('ses_nama',$data['nama']);
    //                         redirect('murid');
    //                 }else{  // jika username dan password tidak ditemukan atau salah
    //                         $url=base_url();
    //                         echo $this->session->set_flashdata('msg','Username Atau Password Salah');
    //                         redirect($url);
    //                 }
    //     }
    // }

    function logout(){
        $this->session->sess_destroy();
        redirect('/');
    }
	
}
