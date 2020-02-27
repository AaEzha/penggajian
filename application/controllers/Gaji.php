<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gaji extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_gaji','mgaji');
	}

	public function index()
	{
		$data = [
			'title' => 'Data Penggajian',
			'hal' => 'gaji/index',
			'data' => $this->mgaji->all()
		];
		$this->load->view('template/index', $data);
	}

	public function detail($id='')
	{
		if(!$id or $id<1 or $id=='') redirect('gaji','refresh');
		$data = [
			'title' => 'Detail Data Penggajian',
			'hal' => 'gaji/detail',
			'data' => $this->mgaji->find($id)
		];
		$this->load->view('template/index', $data);
	}

	public function tambah()
	{
		$this->load->model('M_karyawan','mkar');
		$this->load->library('form_validation');

		$this->form_validation->set_rules('idkaryawan', 'Nama Karyawan', 'trim|required');
		$this->form_validation->set_rules('tanggal', 'Tanggal Penerimaan', 'trim|required');

		if ($this->form_validation->run() == FALSE) {
			$data = [
				'title' => 'Tambah Data Penggajian',
				'hal' => 'gaji/tambah',
				'karyawan' => $this->mkar->all(),
				'js' => 'gaji/js'
			];
			$this->load->view('template/index', $data);
		} else {
			$cek = $this->mgaji->tambah();
			if ($cek) {
				$this->session->set_flashdata('name', '<div class="alert alert-success" role="alert">Data berhasil ditambah!</div>');
			} else {
				$this->session->set_flashdata('name', '<div class="alert alert-danger" role="alert">Data gagal ditambah!</div>');
			}
			redirect('gaji','refresh');
		}
	}

	public function hapus($id='')
	{
		if(!$id or $id<1 or $id=='') redirect('gaji','refresh');
		$cek = $this->mgaji->hapus($id);
		if ($cek) {
			$this->session->set_flashdata('name', '<div class="alert alert-success" role="alert">Data berhasil dihapus!</div>');
		} else {
			$this->session->set_flashdata('name', '<div class="alert alert-danger" role="alert">Data gagal dihapus!</div>');
		}
		redirect('gaji','refresh');
	}

}

/* End of file Gaji.php */
/* Location: ./application/controllers/Gaji.php */