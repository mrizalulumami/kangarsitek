<?php
defined('BASEPATH') or exit('No direct script access allowed');

class OArtikel extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_Artikel');
    }

    public function tambah_artikel()
    {
        
      //$this->form_validation->set_rules('jenis', 'Jenis', 'required|trim');
        $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required|trim');
       // $this->form_validation->set_rules('artikel', 'Artikel', 'required|trim');
        $this->form_validation->set_rules('judul', 'Judul', 'required|trim');
        if ($this->form_validation->run()) {
            $judul  = $_POST['judul'];
           // $jenis = $_POST['jenis'];
            $deskripsi = $_POST['deskripsi'];
           // $artikel = $_POST['artikel'];

            $upload_image = $_FILES['image']['name'];

            if ($upload_image) {
                $config['allowed_types'] = 'gif|jpg|jpeg|png';
                $config['max_size']      = '5048';
                $config['upload_path']   = './assets/artikel/img';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('image')) {
                    $new_image = $this->upload->data('file_name');

                    $data = [
                        'judul' => $judul,
                       // 'jenis' => $jenis,
                        'gambar' => 'assets/artikel/img/'. $new_image,
                        'deskripsi' => $deskripsi,
                        // 'id_artikel' => $artikel
                    ];

                    $this->M_Artikel->tambah_artikel($data);
                } else {
                    echo $this->upload->display_errors();
                }

                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Paket Berhasil Di Tambah</div>');
                redirect(base_url('halaman/artikel'));
            }else{
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Data Gagal Ditambah!</div>');
                redirect(base_url('halaman/artikel'));
            }
        }
    }
    public function edit_artikel($id)
    {
        //$this->form_validation->set_rules('jenis', 'Jenis', 'required|trim');
        $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required|trim');
        // $this->form_validation->set_rules('artikel', 'Artikel', 'required|trim');
        $this->form_validation->set_rules('judul', 'Judul', 'required|trim');
        if ($this->form_validation->run()) {
            $judul  = $_POST['judul'];
            //$jenis = $_POST['jenis'];
            $deskripsi = $_POST['deskripsi'];
            // $artikel = $_POST['artikel'];

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
                           // 'jenis' => $jenis,
                            'gambar' => 'assets/paket/img/'. $new_image,
                            'deskripsi' => $deskripsi,
                            // 'id_artikel' => $artikel
                        ];

                        $this->M_Artikel->edit_artikel($data, $id);
                    } else {
                        echo $this->upload->display_errors();
                    }

                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Paket Berhasil Di Tambah</div>');
                    redirect(base_url('halaman/artikel'));
                }

                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil Diedit!</div>');
                redirect(base_url('halaman/artikel'));
            }else{

                    $data = [
                        'judul' => $judul,
                        //'jenis' => $jenis,
                        'deskripsi' => $deskripsi,
                        // 'id_artikel' => $artikel
                    ];

                    $this->M_Artikel->edit_artikel($data, $id);

                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Data Gagal Ditambah!</div>');
                    redirect(base_url('halaman/artikel'));
                
            }
        }else{
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Data Gagal Ditambah!</div>');
            redirect(base_url('halaman/artikel'));
        }   
    }

    public function delete_artikel($id)
    {
        $lakukan = $this->M_Artikel->hapus_artikel($id);
        if ($lakukan = "berhasil") {
            redirect('halaman/artikel');
        } else {
            echo "Gagal Menghapus";
        }
    }
}
