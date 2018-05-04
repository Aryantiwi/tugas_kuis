<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class M_barang extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }
    public function get_barang()
    {
        return $this->db->get('barang');
    }
    public function get_queryBarang()
    {
        $query = $this->db->get('barang');
        return $query->result();
    }
    public function get_barang_bykode($kode)
    {
        $query = $this->db->get_where('barang', array('kode' => $kode));
        return $query->row_array();
    }
	public function delete_barang($kode)
    {
		$this->db->where('kode', $kode);
		$this->db->delete('barang');
	}
    public function insert_barang($barang)
    {
        return $this->db->insert('barang', $barang);
    }
	public function update_barang($kode,$barang)
    {
		$this->db->where('kode', $kode);
        return $this->db->update('barang', $barang);
	}
}