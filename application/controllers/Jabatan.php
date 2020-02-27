<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jabatan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_jabatan','mjab');
	}

	public function index()
	{
		$data = [
			'title' => 'Data Jabatan',
			'hal' => 'jabatan/index',
			'data' => $this->mjab->all()
		];
		$this->load->view('template/index', $data);
	}

	public function tambah()
	{
		$this->load->library('form_validation');

		$this->form_validation->set_rules('kode', 'Kode Jabatan', 'trim|required|is_unique[jabatan.kode]');
		$this->form_validation->set_rules('jabatan', 'Jabatan', 'trim|required');
		$this->form_validation->set_rules('gaji', 'Gaji', 'trim|required|numeric');

		if ($this->form_validation->run() == FALSE) {
			$data = [
				'title' => 'Tambah Data Jabatan',
				'hal' => 'jabatan/tambah'
			];
			$this->load->view('template/index', $data);
		} else {
			$cek = $this->mjab->tambah();
			if ($cek) {
				$this->session->set_flashdata('name', '<div class="alert alert-success" role="alert">Data berhasil ditambah!</div>');
			} else {
				$this->session->set_flashdata('name', '<div class="alert alert-danger" role="alert">Data gagal ditambah!</div>');
			}
			redirect('jabatan','refresh');
		}
	}

	public function ubah($id='')
	{
		if(!$id or $id<1 or $id=='') redirect('jabatan','refresh');
		$this->load->library('form_validation');

		$this->form_validation->set_rules('jabatan', 'Jabatan', 'trim|required');
		$this->form_validation->set_rules('gaji', 'Gaji', 'trim|required|numeric');

		if ($this->form_validation->run() == FALSE) {
			$data = [
				'title' => 'Ubah Data Jabatan',
				'hal' => 'jabatan/ubah',
				'data' => $this->mjab->find($id)
			];
			$this->load->view('template/index', $data);
		} else {
			$cek = $this->mjab->ubah();
			if ($cek) {
				$this->session->set_flashdata('name', '<div class="alert alert-success" role="alert">Data berhasil diubah!</div>');
			} else {
				$this->session->set_flashdata('name', '<div class="alert alert-danger" role="alert">Data gagal diubah!</div>');
			}
			redirect('jabatan','refresh');
		}
	}

	public function hapus($id='')
	{
		if(!$id or $id<1 or $id=='') redirect('jabatan','refresh');
		$cek = $this->mjab->hapus($id);
		if ($cek) {
			$this->session->set_flashdata('name', '<div class="alert alert-success" role="alert">Data berhasil dihapus!</div>');
		} else {
			$this->session->set_flashdata('name', '<div class="alert alert-danger" role="alert">Data gagal dihapus!</div>');
		}
		redirect('jabatan','refresh');
	}

}

/* End of file Jabatan.php */
/* Location: ./application/controllers/Jabatan.php */