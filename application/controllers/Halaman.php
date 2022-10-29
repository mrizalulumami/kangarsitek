<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Halaman extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_Architect');
        $this->load->model('M_Paket');
    }

    public function index()
    {
        $data['page'] = "dashboard";
        $data['title'] = "Dashboard";
        $data['tot_paket'] = $this->M_Paket->hitung_tot_paket();
        $data['tot_arsitek'] = $this->M_Architect->hitung_tot_arsitek();

        $this->load->view('admin/partial/admin_header', $data);
        $this->load->view('admin/partial/admin_topbar', $data);
        $this->load->view('admin/partial/admin_sidebar', $data);
        $this->load->view('admin/main/admin_dashboard', $data);
        $this->load->view('admin/partial/admin_footer', $data);
    }
    public function arsitek()
    {
        $data['page'] = "arsitek";
        $data['title'] = "Arsitek";

        $data['ar_data'] = $this->M_Architect->architect_data();

        $this->load->view('admin/partial/admin_header', $data);
        $this->load->view('admin/partial/admin_topbar', $data);
        $this->load->view('admin/partial/admin_sidebar', $data);
        $this->load->view('admin/main/admin_arsitek', $data);
        $this->load->view('admin/modal/modal_del_arsitek', $data);
        $this->load->view('admin/partial/admin_footer', $data);
    }
    public function add_arsitek()
    {
        $data['page'] = "arsitek";
        $data['title'] = "Tambah Arsitek";

        $this->load->view('admin/partial/admin_header', $data);
        $this->load->view('admin/partial/admin_topbar', $data);
        $this->load->view('admin/partial/admin_sidebar', $data);
        $this->load->view('admin/main/admin_add_arsitek', $data);
        $this->load->view('admin/modal/modal_del_arsitek', $data);
        $this->load->view('admin/partial/admin_footer', $data);
    }
    public function paket()
    {
        $data['page'] = "paket";
        $data['title'] = "Paket Desain";

        $data['p_data'] = $this->M_Paket->data_paket();

        $this->load->view('admin/partial/admin_header', $data);
        $this->load->view('admin/partial/admin_topbar', $data);
        $this->load->view('admin/partial/admin_sidebar', $data);
        $this->load->view('admin/main/admin_paket', $data);
        $this->load->view('admin/modal/modal_del_paket', $data);
        $this->load->view('admin/partial/admin_footer', $data);
    }
    public function artikel()
    {
        $data['page'] = "artikel";
        $data['title'] = "Artikel";

        $this->load->view('admin/partial/admin_header', $data);
        $this->load->view('admin/partial/admin_topbar', $data);
        $this->load->view('admin/partial/admin_sidebar', $data);
        $this->load->view('admin/main/admin_artikel', $data);
        $this->load->view('admin/modal/modal_del_artikel', $data);
        $this->load->view('admin/partial/admin_footer', $data);
    }
}