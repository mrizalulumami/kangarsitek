<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cek extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_Architect');
        $this->load->model('M_Paket');
        $this->load->model('M_Artikel');
        $this->load->model('M_User');
        
    }
	public function index()
	{
        $ci=get_instance();
        $username=$ci->session->userdata('username');
        $cek = $this->M_User->data_user_by_username($username);
        if($cek['level']==1){
            redirect('halaman');
    
        }else{
            redirect('landing');
        }
        
	}
}
