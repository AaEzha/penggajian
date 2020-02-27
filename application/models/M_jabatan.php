<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_jabatan extends CI_Model {

	public function all()
	{
		$this->db->order_by('jabatan', 'asc');
		return $this->db->get('jabatan')->result();
	}

	public function find($id)
	{
		$this->db->where('id', $id);
		return $this->db->get('jabatan')->row();
	}

	public function tambah()
	{
		$post = $this->input->post();
		$data = [
			'kode' => htmlspecialchars(trim($post['kode'])),
			'jabatan' => htmlspecialchars(trim($post['jabatan'])),
			'gaji' => htmlspecialchars(trim($post['gaji'])),
			'keterangan' => htmlspecialchars(trim($post['keterangan']))
		];
		return $this->db->insert('jabatan', $data);
	}

	public function ubah()
	{
		$post = $this->input->post();
		$data = [
			'jabatan' => htmlspecialchars(trim($post['jabatan'])),
			'gaji' => htmlspecialchars(trim($post['gaji'])),
			'keterangan' => htmlspecialchars(trim($post['keterangan']))
		];
		$where = ['id'=>htmlspecialchars(trim($post['id']))];
		return $this->db->update('jabatan', $data, $where);
	}

	public function hapus($id)
	{
		return $this->db->delete('jabatan', ['id'=>$id]);
	}

}

/* End of file M_jabatan.php */
/* Location: ./application/models/M_jabatan.php */