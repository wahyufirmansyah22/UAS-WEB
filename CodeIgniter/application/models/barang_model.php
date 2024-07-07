<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang_model extends CI_Model {
    public function __construct()
    {
        $this->load->database();
    }

    public function get_data() {
        $query = $this->db->get('tb_barang');  // ganti dengan nama tabel Anda
        return $query->result_array();
    }
    //public function search_barang($keyword)
    //{
        //$this->db->like('nama_barang', $keyword);
        //$query = $this->db->get('tb_barang');
        //return $query->result_array();
    //}

    public function search_barang($keyword)
    {
        $this->db->like('nama_barang', $keyword); // Contoh pencarian berdasarkan nama barang
        $this->db->or_like('kode_barang', $keyword); // Pencarian berdasarkan kode barang
        $this->db->or_like('kategori_barang', $keyword);
        $this->db->or_like('deskripsi_barang', $keyword);
        $this->db->or_like('harga_barang', $keyword);
        $this->db->or_like('status', $keyword);
        $this->db->or_like('tanggal_masuk', $keyword); // Pencarian berdasarkan kategori barang
        // Tambahkan sesuai kebutuhan dengan kolom lainnya
    
        $query = $this->db->get('tb_barang');
        return $query->result_array();
    }


    public function get_barang_by_id($id)
    {
        return $this->db->get_where('tb_barang', ['id_barang' => $id])->row_array();
    }

    public function insert_barang($data) {
        return $this->db->insert('tb_barang', $data);
    }

    public function update_barang($id, $data)
    {
        $this->db->where('id_barang', $id);
        return $this->db->update('tb_barang', $data);
    }

    public function delete_barang($id)
    {
        $this->db->where('id_barang', $id);
        return $this->db->delete('tb_barang');
    }
}
?>
