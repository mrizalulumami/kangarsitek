<?php

class M_Artikel extends CI_Model
{
    public function artikel_data()
    {
        $hasil = $this->db->query("Select id_artikel,judul,gambar,deskripsi,date_format(created_at,'%d %M %Y') AS dibuat,date_format(created_at,'%H:%I') as jam from tb_artikel");
        return $hasil->result_array();
    }
    public function artikel_edit($id)
    {
        $hasil = $this->db->query("Select * from tb_artikel where id_artikel = $id");
        return $hasil->row_array();
    }
    public function artikel_by_id($id)
    {
        $hasil = $this->db->query("Select * from tb_artikel where id_artikel = $id");
        return $hasil->result_array();
    }
    public function hitung_tot_artikel()
    {
        $hasil = $this->db->query("SELECT COUNT(*) AS total_artikel FROM tb_artikel");
        return $hasil->row();
    }
    public function hapus_artikel($id)
    {
        $this->db->where('id_artikel', $id);
        $hapus = $this->db->delete('tb_artikel');
        if ($hapus) {
            return "berhasil";
        } else {
            return "gagal";
        }
    }
    public function tambah_artikel($data){
        $this->db->set($data);
        $this->db->insert('tb_artikel');
    }

    public function edit_artikel($data, $id){
        $this->db->where('id_artikel', $id);
        $this->db->update('tb_artikel', $data);
    }
    public function drop_arsitek()
    {
        $hasil = $this->db->query("Select * from tb_artikel" );
        return $hasil->result_array();
    }
}