<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class M_penjualan extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }
    public function get_penjualan()
    {
        return $this->db->get('penjualan');
    }
    public function get_penjualan_bynota($nota)
    {
        $query = $this->db->get_where('penjualan', array('nota' => $nota));
        return $query->row_array();
    }
	public function delete_penjualan($nota)
    {
		$this->db->where('nota', $nota);
		$this->db->delete('penjualan');
	}	
    public function insert_penjualan($penjualan)
    {
        return $this->db->insert('penjualan', $penjualan);
    }	
	public function update_penjualan($nota,$penjualan)
    {
		$this->db->where('nota', $nota);
        return $this->db->update('penjualan', $penjualan);
	}
}