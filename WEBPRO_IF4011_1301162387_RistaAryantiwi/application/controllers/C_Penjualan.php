<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Penjualan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
		$this->load->model('m_penjualan');
		$this->load->model('m_barang');
		$this->load->helper('url');
		$this->load->library('session');
    }
	public function lihat_daftar_jual()
	{
		$data['title'] = 'Daftar Penjualan';
		$data['penjualan']['entries'] = $this->m_penjualan->get_penjualan();
		$this->load->view('v_daftar_penjualan',$data);
	}
	public function proses_hapus_jual($nota=0)
	{
		$this->m_penjualan->delete_penjualan($nota);
        redirect('C_penjualan/lihat_daftar_jual');
	}
	public function form_ubah_jual($nota=0)
	{
		$data = array(
			'nota'=>$nota,
			'penjualan'=>$this->m_penjualan->get_penjualan_bynota($nota),
			'title'=>'Edit Penjualan',
      		'barang'=>$this->m_barang->get_queryBarang()
    	);
    	$this->load->view('v_ubah_penjualan',$data);
	}
	public function proses_ubah_jual($nota)
	{
        $penjualan = array(
            'nota' => $this->input->post('nota'),
            'tanggal' => $this->input->post('tanggal'),
            'kode' => $this->input->post('kode'),
            'jumlah' => $this->input->post('jumlah'),
        );
		$this->m_penjualan->update_penjualan($nota,$penjualan);
        redirect('C_penjualan/lihat_daftar_jual');
	}
	public function form_tambah_jual()
	{
    	$data = array(
      		'title'=>'Tambah Penjualan',
      		'barang'=>$this->m_barang->get_queryBarang()
    	);
		$this->load->view('v_tambah_penjualan',$data);
	}
	public function proses_tambah_jual()
	{
        $penjualan = array
        (
            'nota' => $this->input->post('nota'),
            'tanggal' => $this->input->post('tanggal'),
            'kode' => $this->input->post('kode'),
            'jumlah' => $this->input->post('jumlah'),
        );
		$this->m_penjualan->insert_penjualan($penjualan);
        redirect('c_penjualan/lihat_daftar_jual');
	}
}