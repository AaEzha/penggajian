<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengaturan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_pengaturan','matur');
	}

	public function index()
	{
		$data = [
			'title' => 'Pengaturan Gaji',
			'hal' => 'aturan/index',
			'data' => $this->matur->all()
		];
		$this->load->view('template/index', $data);
	}

	public function tambah()
	{
		$this->load->model('M_jabatan','mjab');
		$this->load->library('form_validation');

		$this->form_validation->set_rules('jabatan', 'Jabatan', 'trim|required');
		$this->form_validation->set_rules('masakerja', 'Masa Kerja', 'trim|required|numeric');
		$this->form_validation->set_rules('insentif', 'Insentif', 'trim|required|numeric');
		$this->form_validation->set_rules('bonus', 'Bonus', 'trim|required|numeric');

		if ($this->form_validation->run() == FALSE) {
			$data = [
				'title' => 'Tambah Data - Pengaturan Gaji',
				'hal' => 'aturan/tambah',
				'data' => $this->matur->all(),
				'jabatan' => $this->mjab->all()
			];
			$this->load->view('template/index', $data);
		} else {
			$cek = $this->matur->tambah();
			if ($cek) {
				$this->session->set_flashdata('name', '<div class="alert alert-success" role="alert">Data berhasil ditambah!</div>');
			} else {
				$this->session->set_flashdata('name', '<div class="alert alert-danger" role="alert">Data gagal ditambah!</div>');
			}
			redirect('pengaturan','refresh');
		}
	}

	public function ubah($id='')
	{
		if(!$id or $id<1 or $id=='') redirect('pengaturan','refresh');
		$this->load->model('M_jabatan','mjab');
		$this->load->library('form_validation');

		$this->form_validation->set_rules('jabatan', 'Jabatan', 'trim|required');
		$this->form_validation->set_rules('masakerja', 'Masa Kerja', 'trim|required|numeric');
		$this->form_validation->set_rules('insentif', 'Insentif', 'trim|required|numeric');
		$this->form_validation->set_rules('bonus', 'Bonus', 'trim|required|numeric');

		if ($this->form_validation->run() == FALSE) {
			$data = [
				'title' => 'Ubah Data - Pengaturan Gaji',
				'hal' => 'aturan/ubah',
				'data' => $this->matur->find($id),
				'jabatan' => $this->mjab->all()
			];
			$this->load->view('template/index', $data);
		} else {
			$cek = $this->matur->ubah();
			if ($cek) {
				$this->session->set_flashdata('name', '<div class="alert alert-success" role="alert">Data berhasil diubah!</div>');
			} else {
				$this->session->set_flashdata('name', '<div class="alert alert-danger" role="alert">Data gagal diubah!</div>');
			}
			redirect('pengaturan','refresh');
		}
		
	}

	public function hapus($id='')
	{
		if(!$id or $id<1 or $id=='') redirect('pengaturan','refresh');
		$cek = $this->matur->hapus($id);
		if ($cek) {
			$this->session->set_flashdata('name', '<div class="alert alert-success" role="alert">Data berhasil dihapus!</div>');
		} else {
			$this->session->set_flashdata('name', '<div class="alert alert-danger" role="alert">Data gagal dihapus!</div>');
		}
		redirect('pengaturan','refresh');
	}

}

/* End of file Pengaturan.php */
/* Location: ./application/controllers/Pengaturan.php */