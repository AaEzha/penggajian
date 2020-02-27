<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Karyawan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_karyawan','mkar');
	}

	public function index()
	{
		$data = [
			'title' => 'Data Karyawan',
			'hal' => 'karyawan/index',
			'data' => $this->mkar->all()
		];
		$this->load->view('template/index', $data);
	}

	public function tambah()
	{
		$this->load->model('M_jabatan','mjab');
		$this->load->library('form_validation');

		$this->form_validation->set_rules('nama', 'Nama Karyawan', 'trim|required');
		$this->form_validation->set_rules('jk', 'Jenis Kelamin', 'trim|required');
		$this->form_validation->set_rules('tgl_lahir', 'Tanggal Lahir', 'trim|required');
		$this->form_validation->set_rules('alamat', 'Alamat', 'trim|required');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
		$this->form_validation->set_rules('telp', 'No.Telepon', 'trim|required|numeric');
		$this->form_validation->set_rules('nip', 'NIP', 'trim|required|numeric|is_unique[karyawan.nip]');
		$this->form_validation->set_rules('masakerja', 'Masa Kerja', 'trim|required|numeric');
		$this->form_validation->set_rules('idjabatan', 'Jabatan', 'trim|required|numeric');

		if ($this->form_validation->run() == FALSE) {
			$data = [
				'title' => 'Tambah Data Karyawan',
				'hal' => 'karyawan/tambah',
				'jabatan' => $this->mjab->all(),
				'js' => 'karyawan/js'
			];
			$this->load->view('template/index', $data);
		} else {
			$cek = $this->mkar->tambah();
			if ($cek) {
				$this->session->set_flashdata('name', '<div class="alert alert-success" role="alert">Data berhasil ditambah!</div>');
			} else {
				$this->session->set_flashdata('name', '<div class="alert alert-danger" role="alert">Data gagal ditambah!</div>');
			}
			redirect('karyawan','refresh');
		}
	}

	public function ubah($id='')
	{
		if(!$id or $id<1 or $id=='') redirect('karyawan','refresh');
		$this->load->model('M_jabatan','mjab');
		$this->load->library('form_validation');

		$this->form_validation->set_rules('nama', 'Nama Karyawan', 'trim|required');
		$this->form_validation->set_rules('jk', 'Jenis Kelamin', 'trim|required');
		$this->form_validation->set_rules('tgl_lahir', 'Tanggal Lahir', 'trim|required');
		$this->form_validation->set_rules('alamat', 'Alamat', 'trim|required');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
		$this->form_validation->set_rules('telp', 'No.Telepon', 'trim|required|numeric');
		$this->form_validation->set_rules('masakerja', 'Masa Kerja', 'trim|required|numeric');
		$this->form_validation->set_rules('idjabatan', 'Jabatan', 'trim|required|numeric');

		if ($this->form_validation->run() == FALSE) {
			$data = [
				'title' => 'Ubah Data Karyawan',
				'hal' => 'karyawan/ubah',
				'data' => $this->mkar->find($id),
				'jabatan' => $this->mjab->all(),
				'js' => 'karyawan/js'
			];
			$this->load->view('template/index', $data);
		} else {
			$cek = $this->mkar->ubah();
			if ($cek) {
				$this->session->set_flashdata('name', '<div class="alert alert-success" role="alert">Data berhasil ditambah!</div>');
			} else {
				$this->session->set_flashdata('name', '<div class="alert alert-danger" role="alert">Data gagal ditambah!</div>');
			}
			redirect('karyawan','refresh');
		}
	}

	public function hapus($id='')
	{
		if(!$id or $id<1 or $id=='') redirect('karyawan','refresh');
		$cek = $this->mkar->hapus($id);
		if ($cek) {
			$this->session->set_flashdata('name', '<div class="alert alert-success" role="alert">Data berhasil dihapus!</div>');
		} else {
			$this->session->set_flashdata('name', '<div class="alert alert-danger" role="alert">Data gagal dihapus!</div>');
		}
		redirect('karyawan','refresh');
	}

}

/* End of file Karyawan.php */
/* Location: ./application/controllers/Karyawan.php */