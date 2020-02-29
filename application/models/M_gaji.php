<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_gaji extends CI_Model {

	public function all()
	{
		return $this->db->select('g.*, k.nama, k.nip')
				 ->from('gaji g')
				 ->join('karyawan k','k.id=g.idkaryawan')
				 ->join('jabatan j','j.id=k.idjabatan')
				 ->order_by('g.tanggal','desc')
				 ->get()
				 ->result()
		;
	}

	public function find($id)
	{
		return $this->db->select('g.*, k.nama, k.nip, k.masakerja, j.jabatan')
				 ->from('gaji g')
				 ->join('karyawan k','k.id=g.idkaryawan')
				 ->join('jabatan j','j.id=k.idjabatan')
				 ->where('g.id',$id)
				 ->order_by('g.tanggal','desc')
				 ->get()
				 ->row()
		;
	}

	public function nominal($idkaryawan)
	{
		$data = $this->db->select('j.gaji')
				 ->from('jabatan j')
				 ->join('karyawan k','k.idjabatan=j.id')
				 ->where('k.id', $idkaryawan)
				 ->get()
				 ->row();
		;
		return $data->gaji;
	}

	public function datakaryawan($idkaryawan, $jenis)
	{
		$data = $this->db->where('id',$idkaryawan)->get('karyawan')->row();
		return $data->$jenis;
	}

	public function bonus($idkaryawan, $jenis)
	{
		
		$idjabatan = $this->datakaryawan($idkaryawan, 'idjabatan');
		$masakerja = $this->datakaryawan($idkaryawan, 'masakerja');
		$data = $this->db->select('a.insentif, a.bonus')
				 ->from('jabatan j')
				 ->join('karyawan k','k.idjabatan=j.id')
				 ->join('aturan a','a.idjabatan=j.id')
				 ->where('k.id', $idkaryawan)
				 ->where('a.idjabatan',$idjabatan)
				 ->where('a.masakerja',$masakerja)
				 ->get()
				 ->row();
		;
		if(isset($data)){
			return $data->$jenis;
		}else{
			return false;
		}
	}

	public function tambah()
	{
		$post = $this->input->post();
		$idkaryawan = htmlspecialchars(trim($post['idkaryawan']));
		if($this->bonus($idkaryawan,'bonus') and $this->bonus($idkaryawan,'insentif')){
			$data = [
				'idkaryawan' => $idkaryawan,
				'nominal' => $this->nominal($idkaryawan),
				'insentif' => $this->bonus($idkaryawan,'insentif'),
				'bonus' => $this->bonus($idkaryawan,'bonus'),
				'tanggal' => htmlspecialchars(trim($post['tanggal']))
			];
		
			return $this->db->insert('gaji',$data);
		}else{
			return false;
		}
	}

	public function hapus($id)
	{
		return $this->db->delete('gaji', ['id'=>$id]);
	}

}

/* End of file M_gaji.php */
/* Location: ./application/models/M_gaji.php */