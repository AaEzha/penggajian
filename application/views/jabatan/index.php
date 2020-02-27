<?=$this->session->flashdata('name');?>
<a href="<?=base_url('jabatan/tambah');?>" class="btn btn-success btn-sm mb-3"><i class="fa fa-plus"></i> Tambah Data</a>
<table class="table table-hover" id="table">
	<thead>
		<tr>
			<th>No</th>
			<th>Kode</th>
			<th>Jabatan</th>
			<th>Gaji</th>
			<th>Keterangan</th>
			<th>Opsi</th>
		</tr>
	</thead>
	<tbody>
		<?php $no=1; foreach($data as $d): ?>
		<tr>
			<td><?=$no++;?></td>
			<td><?=$d->kode;?></td>
			<td><?=$d->jabatan;?></td>
			<td>Rp <?=number_format($d->gaji,0,',','.');?></td>
			<td><?=$d->keterangan;?></td>
			<td>
				<a href="<?=base_url('jabatan/ubah/'. $d->id);?>" class="btn btn-primary btn-sm">Ubah</a>
				<a href="<?=base_url('jabatan/hapus/'. $d->id);?>" class="btn btn-danger btn-sm">Hapus</a>
			</td>			
		</tr>
		<?php endforeach; ?>
	</tbody>
</table>