<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_pengaturan extends CI_Model {

	public function all()
	{
		return $this->db->select('j.jabatan, a.id, a.masakerja, a.insentif, a.bonus')
				 ->from('jabatan j')
				 ->join('aturan a','a.idjabatan=j.id')
				 ->order_by('a.masakerja','asc')
				 ->order_by('j.jabatan','asc')
				 ->get()
				 ->result()
				 ;
	}

	public function find($id)
	{
		$this->db->where('id', $id);
		return $this->db->get('aturan')->row();
	}

	public function cek($idjabatan, $masakerja)
	{
		$this->db->where('idjabatan', $idjabatan);
		$this->db->where('masakerja', $masakerja);
		return $this->db->get('aturan')->row();
	}

	public function tambah()
	{
		$post = $this->input->post();
		$data = [
			'idjabatan' => htmlspecialchars(trim($post['jabatan'])),
			'masakerja' => htmlspecialchars(trim($post['masakerja'])),
			'insentif' => htmlspecialchars(trim($post['insentif'])),
			'bonus' => htmlspecialchars(trim($post['bonus']))
		];
		if($this->cek($post['jabatan'], $post['masakerja'])){
			return false;
		}else{
			return $this->db->insert('aturan', $data);
		}
	}

	public function ubah()
	{
		$post = $this->input->post();
		$data = [
			'idjabatan' => htmlspecialchars(trim($post['jabatan'])),
			'masakerja' => htmlspecialchars(trim($post['masakerja'])),
			'insentif' => htmlspecialchars(trim($post['insentif'])),
			'bonus' => htmlspecialchars(trim($post['bonus']))
		];
		$where = [
			'id' => htmlspecialchars(trim($post['id']))
		];
		return $this->db->update('aturan', $data, $where);
	}

	public function hapus($id)
	{
		return $this->db->delete('aturan', ['id'=>$id]);
	}

}

/* End of file M_pengaturan.php */
/* Location: ./application/models/M_pengaturan.php */