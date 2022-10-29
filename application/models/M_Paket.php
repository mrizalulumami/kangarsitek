<?php

class M_Paket extends CI_Model
{
    public function data_paket()
    {
        $hasil = $this->db->query("Select * from tb_paket as a, tb_arsitek as b where a.id_arsitek=b.id_arsitek");
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
}