<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Halaman extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_Architect');
        $this->load->model('M_Paket');
        $this->load->model('M_Artikel');
        $this->load->model('M_User');
        // $this->load->helper('arsitek');
        is_login();
        // is_ceking();
        // $ci=get_instance();
        // $username=$ci->session->userdata('username');
        // $users = $this->M_User->data_user_by_username($username);
        // if ($users['level']==1){
        //     redirect(base_url('halaman'));
        // }else{
        //      redirect(base_url('landing'));
        // }
    }

    public function index()
    {
        $ci=get_instance();
        $username=$ci->session->userdata('username');
        $users = $this->M_User->data_user_by_username($username);
        if ($users['level']==1){
            $data['page'] = "dashboard";
            $data['title'] = "Dashboard";
            $data['tot_paket'] = $this->M_Paket->hitung_tot_paket();
            $data['tot_arsitek'] = $this->M_Architect->hitung_tot_arsitek();
            $data['tot_artikel'] = $this->M_Artikel->hitung_tot_artikel();
            $data['tot_user'] = $this->M_User->hitung_tot_user();
            
            $data['d_user'] = $this->M_User->data_user_by_username($username);
            
            $this->load->view('admin/partial/admin_header', $data);
            $this->load->view('admin/partial/admin_topbar', $data);
            $this->load->view('admin/partial/admin_sidebar', $data);
            $this->load->view('admin/main/admin_dashboard', $data);
            $this->load->view('admin/partial/admin_footer', $data);
        }else{
             redirect(base_url('landing'));
        }
        
       
    }
    public function arsitek()
    {
        $ci=get_instance();
        $username=$ci->session->userdata('username');
        $users = $this->M_User->data_user_by_username($username);
        if ($users['level']==1){
            $data['page'] = "arsitek";
            $data['title'] = "Arsitek";
    
            $data['ar_data'] = $this->M_Architect->architect_data();
            $ci=get_instance();
            $username=$ci->session->userdata('username');
            $data['d_user'] = $this->M_User->data_user_by_username($username);
    
            $this->load->view('admin/partial/admin_header', $data);
            $this->load->view('admin/partial/admin_topbar', $data);
            $this->load->view('admin/partial/admin_sidebar', $data);
            $this->load->view('admin/main/admin_arsitek', $data);
            $this->load->view('admin/modal/modal_del_arsitek', $data);
            $this->load->view('admin/modal/modal_detail_arsitek', $data);
            $this->load->view('admin/partial/admin_footer', $data);
        }else{
             redirect(base_url('landing'));
        }
        
    }
    public function add_arsitek()
    {
        $ci=get_instance();
        $username=$ci->session->userdata('username');
        $users = $this->M_User->data_user_by_username($username);
        if ($users['level']==1){
            $data['page'] = "arsitek";
            $data['title'] = "Tambah Arsitek";
            $ci=get_instance();
            $username=$ci->session->userdata('username');
            $data['d_user'] = $this->M_User->data_user_by_username($username);
    
            $this->load->view('admin/partial/admin_header', $data);
            $this->load->view('admin/partial/admin_topbar', $data);
            $this->load->view('admin/partial/admin_sidebar', $data);
            $this->load->view('admin/main/admin_add_arsitek', $data);
            $this->load->view('admin/partial/admin_footer', $data);
        }else{
             redirect(base_url('landing'));
        }
        
    }
    public function edit_arsitek($id)
    {
        $ci=get_instance();
        $username=$ci->session->userdata('username');
        $users = $this->M_User->data_user_by_username($username);
        if ($users['level']==1){
            $data['page'] = "arsitek";
            $data['title'] = "Edit Arsitek";
    
            $data['a_data'] = $this->M_Architect->architect_data_byid($id);
            $ci=get_instance();
            $username=$ci->session->userdata('username');
            $data['d_user'] = $this->M_User->data_user_by_username($username);
    
            $this->load->view('admin/partial/admin_header', $data);
            $this->load->view('admin/partial/admin_topbar', $data);
            $this->load->view('admin/partial/admin_sidebar', $data);
            $this->load->view('admin/main/admin_edit_arsitek', $data);
            $this->load->view('admin/partial/admin_footer', $data);
        }else{
             redirect(base_url('landing'));
        }
        
    }
    public function paket()
    {
        $ci=get_instance();
        $username=$ci->session->userdata('username');
        $users = $this->M_User->data_user_by_username($username);
        if ($users['level']==1){
            $data['page'] = "paket";
            $data['title'] = "Paket Desain";
    
            $data['p_data'] = $this->M_Paket->data_paket();
            $ci=get_instance();
            $username=$ci->session->userdata('username');
            $data['d_user'] = $this->M_User->data_user_by_username($username);
    
            $this->load->view('admin/partial/admin_header', $data);
            $this->load->view('admin/partial/admin_topbar', $data);
            $this->load->view('admin/partial/admin_sidebar', $data);
            $this->load->view('admin/main/admin_paket', $data);
            $this->load->view('admin/modal/modal_del_paket', $data);
            $this->load->view('admin/modal/modal_detail_paket', $data);
            $this->load->view('admin/partial/admin_footer', $data);
        }else{
             redirect(base_url('landing'));
        }
        
    }

    public function add_paket()
    {
        $ci=get_instance();
        $username=$ci->session->userdata('username');
        $users = $this->M_User->data_user_by_username($username);
        if ($users['level']==1){
            $data['page'] = "paket";
            $data['title'] = "Tambah Paket";
            $ci=get_instance();
            $username=$ci->session->userdata('username');
            $data['d_user'] = $this->M_User->data_user_by_username($username);
    
            $data['jenis'] = [
                [
                    'jenis' => 'vip'
                ],
                [
                    'jenis' => 'medium'
                ],
                [
                    'jenis' => 'standar'
                ],
                [
                    'jenis' => 'keluarga'
                ]
            ];
    
            $data['arsitek'] = $this->db->get('tb_arsitek')->result_array();
    
            $this->load->view('admin/partial/admin_header', $data);
            $this->load->view('admin/partial/admin_topbar', $data);
            $this->load->view('admin/partial/admin_sidebar', $data);
            $this->load->view('admin/main/admin_add_paket', $data);
            $this->load->view('admin/partial/admin_footer', $data);
        }else{
             redirect(base_url('landing'));
        }
        
    }
    public function edit_paket($id)
    {
        $ci=get_instance();
        $username=$ci->session->userdata('username');
        $users = $this->M_User->data_user_by_username($username);
        if ($users['level']==1){
            $data['page'] = "Paket";
            $data['title'] = "Edit Paket";
            $ci=get_instance();
            $username=$ci->session->userdata('username');
            $data['d_user'] = $this->M_User->data_user_by_username($username);
    
            $data['jenis'] = [
                [
                    'jenis' => 'vip'
                ],
                [
                    'jenis' => 'medium'
                ],
                [
                    'jenis' => 'standar'
                ],
                [
                    'jenis' => 'keluarga'
                ]
            ];
    
            $data['paket'] = $this->db->get_where('tb_paket',['id_paket' => $id])->row_array();
            $data['arsitek'] = $this->db->get('tb_arsitek')->result_array();
            $this->load->view('admin/partial/admin_header', $data);
            $this->load->view('admin/partial/admin_topbar', $data);
            $this->load->view('admin/partial/admin_sidebar', $data);
            $this->load->view('admin/main/admin_edit_paket', $data);
            $this->load->view('admin/partial/admin_footer', $data);
        }else{
             redirect(base_url('landing'));
        }
        
    }
    public function artikel()
    {
        $ci=get_instance();
        $username=$ci->session->userdata('username');
        $users = $this->M_User->data_user_by_username($username);
        if ($users['level']==1){
            $data['page'] = "artikel";
            $data['title'] = "Artikel";
            $ci=get_instance();
            $username=$ci->session->userdata('username');
            $data['d_user'] = $this->M_User->data_user_by_username($username);
    
            $data['artikel'] = $this->M_Artikel->artikel_data();
    
            $this->load->view('admin/partial/admin_header', $data);
            $this->load->view('admin/partial/admin_topbar', $data);
            $this->load->view('admin/partial/admin_sidebar', $data);
            $this->load->view('admin/main/admin_artikel', $data);
            $this->load->view('admin/modal/modal_del_artikel', $data);
            $this->load->view('admin/partial/admin_footer', $data);
        }else{
             redirect(base_url('landing'));
        }
        
    }
    public function add_artikel()
    {
        $ci=get_instance();
        $username=$ci->session->userdata('username');
        $users = $this->M_User->data_user_by_username($username);
        if ($users['level']==1){
            $data['page'] = "artikel";
            $data['title'] = "Tambah Artikel";
            $ci=get_instance();
            $username=$ci->session->userdata('username');
            $data['d_user'] = $this->M_User->data_user_by_username($username);
    
            $this->load->view('admin/partial/admin_header', $data);
            $this->load->view('admin/partial/admin_topbar', $data);
            $this->load->view('admin/partial/admin_sidebar', $data);
            $this->load->view('admin/main/admin_add_artikel', $data);
            $this->load->view('admin/partial/admin_footer', $data);
        }else{
             redirect(base_url('landing'));
        }
       
    }
    public function edit_artikel($id)
    {
        $ci=get_instance();
        $username=$ci->session->userdata('username');
        $users = $this->M_User->data_user_by_username($username);
        if ($users['level']==1){
            $data['page'] = "artikel";
            $data['title'] = "Edit Artikel";
            $ci=get_instance();
            $username=$ci->session->userdata('username');
            $data['d_user'] = $this->M_User->data_user_by_username($username);
    
            $data['a_data'] = $this->M_Artikel->artikel_edit($id);
    
            $this->load->view('admin/partial/admin_header', $data);
            $this->load->view('admin/partial/admin_topbar', $data);
            $this->load->view('admin/partial/admin_sidebar', $data);
            $this->load->view('admin/main/admin_edit_artikel', $data);
            $this->load->view('admin/partial/admin_footer', $data);
        }else{
             redirect(base_url('landing'));
        }
        
    }
    
}