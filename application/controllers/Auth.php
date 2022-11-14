<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller
 {

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        // is_login();
        // $this->load->model('M_Auth');
        
    }
	
	public function index()
	{
        $data['title'] = "sign in";

        if ($this->session->userdata('username')){
            redirect('admin');
        }
        $this->form_validation->set_rules('username','username','trim|required');
        $this->form_validation->set_rules('password','password','trim|required');

        if ($this->form_validation->run() == false) {
            // $this->load->view('auth/partial/v_auth_header', $data);
            $this->load->view('auth/login', $data);
            // $this->load->view('auth/partial/v_auth_footer', $data);
        } else {
            $this->_login();	
	}
}

  public function register()
  {
    $data['title'] = "sign up";

    if ($this->session->userdata('username')) {
        redirect('admin');
    }
    $this->form_validation->set_rules('nlengkap','nlengkap','required|trim');
    $this->form_validation->set_rules('username','username','required|trim|is_unique[users.username]',[
        'is_unique' => 'User ini sudah terdaftar'
    ]);
    $this->form_validation->set_rules('email','email','required|trim|is_unique[users.email]' ,[
        'is_unique' => 'Email ini sudah terdaftar'
    ]);

    $this->form_validation->set_rules ('password','password','required|trim|min_length[6]');
    if ($this->form_validation->run() == false) {
        $this->load->library('form_validation');

        // $this->load->view('auth/partial/v_auth header', $data);
        // $this->load->view('auth/v_register', $data);
        $this->load->view('auth/register');

    } else {
        $set = '';
        $code = substr(str_shuffle($set), 0, 12);

        $dataregister = [
            'nama' => htmlspecialchars($this->input->post('nlengkap', true)),
            'username' => htmlspecialchars($this->input->post('username', true)),
            'email' => htmlspecialchars($this->input->post('email', true)),
            'password' => password_hash($this->input->post('password'),PASSWORD_DEFAULT),
            'is_active' => 1,
             'gambar' => 'assets/user/img/default.jpg',
             'level' => 2,
             
        ];
        // $data_page = [
        //     'user_token' => $code,
        //     'page' => 'list',
        //     'val' => 'ON'
        // ];
        $this->db->insert('users', $dataregister);
        // $this->db->insert('menu_setting', $data_page);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Selamat akun anda sudah dibuat, Silahkan Login!</div>');
        redirect('auth');
    }
}

    private function _login()
    {

        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $user = $this->db->get_where('users', ['username'=> $username])->row_array();

        if ($user) {
            if ($user['is_active'] == 1) {
                if (password_verify($password, $user['password'])) {
                    $datalogin = [
                        'username' => $user['username'],
                        'id_petugas' => $user['id_petugas'],
                        'level' => $user['level']
                    ];
                    $this->session->set_userdata($datalogin);

                    redirect('cek');
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-succsess" role="alert">Password Salah!</div');

                    redirect('auth');
                }
                } else {
                     $this->session->set_flashdata('message', '<div class="alert alert-succsess" role="alert">Akun tidak aktif!</div');
                     redirect('auth');
                }
                 } else {
                     $this->session->set_flashdata('message', '<div class="alert alert-succsess" role="alert">Akun tidak terdaftar!</div');
                     redirect('auth');
                 }
        }
        public function logout()
        {
            $this->session->unset_userdata('username');

            $this->session->set_flashdata('message', '<div class="<div class="alert alert-succsess" role="alert">Akun tidak aktif!</div');
            redirect('auth');
        }
        public function blocked()
        {
            $this->load->view('auth/blocked');
    }

  }