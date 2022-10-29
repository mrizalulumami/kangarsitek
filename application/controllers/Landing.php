<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Landing extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_Architect');
        $this->load->model('M_Paket');
    }

    public function index()
    {
        $data['ar_data'] = $this->M_Architect->architect_data();
        $data['p_data'] = $this->M_Paket->data_paket();

        $this->load->view('landing/index', $data);
    }
}