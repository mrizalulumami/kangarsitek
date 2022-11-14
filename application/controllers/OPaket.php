<?php
defined('BASEPATH') or exit('No direct script access allowed');

class OPaket extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_Paket');
    }

    public function tambah_paket()
    {
        
        $this->form_validation->set_rules('jenis', 'Jenis', 'required|trim');
        $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required|trim');
        $this->form_validation->set_rules('arsitek', 'Arsitek', 'required|trim');
        $this->form_validation->set_rules('judul', 'Judul', 'required|trim');
        if ($this->form_validation->run()) {
            $judul  = $_POST['judul'];
            $jenis = $_POST['jenis'];
            $deskripsi = $_POST['deskripsi'];
            $arsitek = $_POST['arsitek'];

            $upload_image = $_FILES['image']['name'];

            if ($upload_image) {
                $config['allowed_types'] = 'gif|jpg|jpeg|png';
                $config['max_size']      = '2048';
                $config['upload_path']   = './assets/paket/img';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('image')) {
                    $new_image = $this->upload->data('file_name');

                    $data = [
                        'judul' => $judul,
                        'jenis' => $jenis,
                        'gambar' => 'assets/paket/img/'. $new_image,
                        'deskripsi' => $deskripsi,
                        'id_arsitek' => $arsitek
                    ];

                    $this->M_Paket->tambah_paket($data);
                } else {
                    echo $this->upload->display_errors();
                }

                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Paket Berhasil Di Tambah</div>');
                redirect(base_url('halaman/paket'));
            }else{
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Data Gagal Ditambah!</div>');
                redirect(base_url('halaman/paket'));
            }
        }
    }
    public function edit_paket($id)
    {
        $this->form_validation->set_rules('jenis', 'Jenis', 'required|trim');
        $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required|trim');
        $this->form_validation->set_rules('arsitek', 'Arsitek', 'required|trim');
        $this->form_validation->set_rules('judul', 'Judul', 'required|trim');
        if ($this->form_validation->run()) {
            $judul  = $_POST['judul'];
            $jenis = $_POST['jenis'];
            $deskripsi = $_POST['deskripsi'];
            $arsitek = $_POST['arsitek'];

            $upload_image = $_FILES['image']['name'];

            if ($upload_image != null) {
                if ($upload_image) {
                    $config['allowed_types'] = 'gif|jpg|jpeg|png';
                    $config['max_size']      = '2048';
                    $config['upload_path']   = './assets/paket/img';

                    $this->load->library('upload', $config);

                    if ($this->upload->do_upload('image')) {
                        $new_image = $this->upload->data('file_name');

                        $data = [
                            'judul' => $judul,
                            'jenis' => $jenis,
                            'gambar' => 'assets/paket/img/'. $new_image,
                            'deskripsi' => $deskripsi,
                            'id_arsitek' => $arsitek
                        ];

                        $this->M_Paket->edit_paket($data, $id);
                    } else {
                        echo $this->upload->display_errors();
                    }

                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Paket Berhasil Di Tambah</div>');
                    redirect(base_url('halaman/paket'));
                }

                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil Diedit!</div>');
                redirect(base_url('halaman/arsitek'));
            }else{

                    $data = [
                        'judul' => $judul,
                        'jenis' => $jenis,
                        'deskripsi' => $deskripsi,
                        'id_arsitek' => $arsitek
                    ];

                    $this->M_Paket->edit_paket($data, $id);

                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Data Gagal Ditambah!</div>');
                    redirect(base_url('halaman/paket'));
                
            }
        }else{
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Data Gagal Ditambah!</div>');
            redirect(base_url('halaman/paket'));
        }   
    }

    public function delete_paket($id)
    {
        $lakukan = $this->M_Paket->hapus_paket($id);
        if ($lakukan = "berhasil") {
            redirect('halaman/paket');
        } else {
            echo "Gagal Menghapus";
        }
    }
    public function tambah_slider($id)
    {
        
        $upload_image = $_FILES['image']['name'];

        if ($upload_image) {
            $config['allowed_types'] = 'gif|jpg|jpeg|png';
            $config['max_size']      = '5048';
            $config['upload_path']   = './assets/slider/img';

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('image')) {
                $new_image = $this->upload->data('file_name');

                $data = [
                    'id_paket' => $id,
                    'gambar' => 'assets/slider/img/'. $new_image,
                ];

                $this->M_Paket->tambah_slider($data);
            } else {
                echo $this->upload->display_errors();
            }

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Paket Berhasil Di Tambah</div>');
            redirect(base_url('halaman/paket'));
        }
    }
}
