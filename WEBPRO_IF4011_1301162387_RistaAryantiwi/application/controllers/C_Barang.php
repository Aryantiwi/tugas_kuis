<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Barang extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
		$this->load->model('m_barang');
		$this->load->helper('url');
		$this->load->library('session');
    }
    
	public function lihat_daftar()
	{
		$data['title'] = 'Daftar Barang';
		$data['barang']['entries'] = $this->m_barang->get_barang();
		$this->load->view('v_daftar_barang',$data);
	}
	public function proses_hapus($kode=0)
	{
		$this->m_barang->delete_barang($kode);
        redirect('c_barang/lihat_daftar');
	}
	public function form_ubah($kode=0)
	{
		$data = array
		(
			'kode'=>$kode,
			'barang'=>$this->m_barang->get_barang_bykode($kode),	
			'title'=>'Edit Barang',
		);
		$this->load->view('v_ubah_barang',$data);
	}
	public function proses_ubah($kode)
	{
        $barang = array
        (
            'kode' => $this->input->post('kode'),
            'nama' => $this->input->post('nama'),
            'harga' => $this->input->post('harga'),
        );
		$this->m_barang->update_barang($kode,$barang);
        redirect('c_barang/lihat_daftar');
	}
	public function form_tambah()
	{
		$data = array
		(
			'title'=>'Tambah Barang',
			'barang'=>$this->m_barang->get_barang()
		);
		$this->load->view('v_tambah_barang',$data);
	}
	public function proses_tambah()
	{
        $barang = array
        (
            'kode' => $this->input->post('kode'),
            'nama' => $this->input->post('nama'),
            'harga' => $this->input->post('harga'),
        );
		$this->m_barang->insert_barang($barang);
        redirect('c_barang/lihat_daftar');
	}
}