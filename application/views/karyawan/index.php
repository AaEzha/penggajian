<?=$this->session->flashdata('name');?>
<a href="<?=base_url('karyawan/tambah');?>" class="btn btn-success btn-sm mb-3"><i class="fa fa-plus"></i> Tambah Data</a>
<table class="table table-hover table-bordered" id="table">
	<thead>
		<tr>
			<th>No</th>
			<th>NIP</th>
			<th>Nama Karyawan</th>
			<th>JK</th>
			<th>Jabatan</th>
			<th>Opsi</th>
		</tr>
	</thead>
	<tbody>
		<?php $no=1; foreach($data as $d): ?>
		<tr>
			<td><?=$no++;?></td>
			<td><?=$d->nip;?></td>
			<td><?=$d->nama;?></td>
			<td><?=($d->jk=='L')?'Laki-laki':'Perempuan';?></td>
			<td><?=$d->jabatan;?></td>
			<td>
				<a href="<?=base_url('karyawan/ubah/'. $d->id);?>" class="btn btn-primary btn-sm">Ubah</a>
				<a href="<?=base_url('karyawan/hapus/'. $d->id);?>" class="btn btn-danger btn-sm">Hapus</a>
			</td>			
		</tr>
		<?php endforeach; ?>
	</tbody>
</table>