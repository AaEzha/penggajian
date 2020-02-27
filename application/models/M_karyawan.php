<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_karyawan extends CI_Model {

	public function all()
	{
		$this->db->select('k.*, j.jabatan');
		$this->db->from('karyawan k');
		$this->db->join('jabatan j', 'j.id = k.idjabatan');
		$this->db->order_by('masakerja', 'desc');
		$this->db->order_by('nama', 'asc');
		$this->db->group_by('k.id');
		return $this->db->get('karyawan')->result();
	}

	public function find($id='')
	{
		$this->db->where('id', $id);
		return $this->db->get('karyawan')->row();
	}

	public function tambah()
	{
		$post = $this->input->post();
		$data = [
			'nip' => htmlspecialchars(trim($post['nip'])),
			'nama' => htmlspecialchars(trim($post['nama'])),
			'jk' => htmlspecialchars(trim($post['jk'])),
			'tgl_lahir' => htmlspecialchars(trim($post['tgl_lahir'])),
			'telp' => htmlspecialchars(trim($post['telp'])),
			'email' => htmlspecialchars(trim($post['email'])),
			'alamat' => htmlspecialchars(trim($post['alamat'])),
			'idjabatan' => htmlspecialchars(trim($post['idjabatan'])),
			'masakerja' => htmlspecialchars(trim($post['masakerja']))
		];
		return $this->db->insert('karyawan', $data);
	}

	public function ubah()
	{
		$post = $this->input->post();
		$data = [
			'nama' => htmlspecialchars(trim($post['nama'])),
			'jk' => htmlspecialchars(trim($post['jk'])),
			'tgl_lahir' => htmlspecialchars(trim($post['tgl_lahir'])),
			'telp' => htmlspecialchars(trim($post['telp'])),
			'email' => htmlspecialchars(trim($post['email'])),
			'alamat' => htmlspecialchars(trim($post['alamat'])),
			'idjabatan' => htmlspecialchars(trim($post['idjabatan'])),
			'masakerja' => htmlspecialchars(trim($post['masakerja']))
		];
		$where = ['id'=>htmlspecialchars(trim($post['id']))];
		return $this->db->update('karyawan', $data, $where);
	}

	public function hapus($id)
	{
		return $this->db->delete('karyawan', ['id'=>$id]);
	}

}

/* End of file M_karyawan.php */
/* Location: ./application/models/M_karyawan.php */