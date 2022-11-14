<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Landing extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_Architect');
        $this->load->model('M_Paket');
        $this->load->model('M_Artikel');
        
    }

    public function index()
    {
        $data['ar_data'] = $this->M_Architect->architect_data();
        $data['p_data'] = $this->M_Paket->data_paket();
        $data['ar_artikel'] = $this->M_Artikel->artikel_data();

        $this->load->view('landing/index', $data);
    }
    public function detail_artikel($id)
    {
        $data['ar_data'] = $this->M_Artikel->artikel_by_id($id);
        

        $this->load->view('landing/detail_artikel', $data);
    }
    public function detail_paket($id)
    {
        $data['p_data'] = $this->M_Paket->data_paket_by_id($id);
        $data['p_slider'] = $this->M_Paket->tampil_slider_by_id($id);
        

        $this->load->view('landing/detail_paket', $data);
    }
}