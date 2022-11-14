<?php

class M_Paket extends CI_Model
{
   
    public function data_paket()
    {
        $hasil = $this->db->query("Select * from tb_paket as a, tb_arsitek as b where a.id_arsitek=b.id_arsitek");
        return $hasil->result_array();
    }
    public function data_paket_by_id($id)
    {
        $hasil = $this->db->query("Select * from tb_paket as a, tb_arsitek as b where a.id_arsitek=b.id_arsitek and a.id_paket='$id'");
        return $hasil->result_array();
    }
    public function hitung_tot_paket()
    {
        $hasil = $this->db->query("SELECT COUNT(*) AS total_paket FROM tb_paket");
        return $hasil->row();
    }
    public function hapus_paket($id)
    {
        $this->db->where('id_paket', $id);
        $hapus = $this->db->delete('tb_paket');
        if ($hapus) {
            return "berhasil";
        } else {
            return "gagal";
        }
    }
    public function tambah_paket($data){
        $this->db->set($data);
        $this->db->insert('tb_paket');
    }

    public function edit_paket($data, $id){
        $this->db->where('id_paket', $id);
        $this->db->update('tb_paket', $data);
    }
    public function drop_arsitek()
    {
        $hasil = $this->db->query("Select * from tb_arsitek" );
        return $hasil->result_array();
    }
    public function tambah_slider($data){
        $this->db->set($data);
        $this->db->insert('tb_slider_gambar');
    }
    public function tampil_slider_by_id($id)
    {
        $hasil = $this->db->query("Select * from tb_slider_gambar where id_paket='$id'" );
        return $hasil->result_array();
    }
}