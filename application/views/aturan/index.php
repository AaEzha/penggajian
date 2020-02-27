<?=$this->session->flashdata('name');?>
<a href="<?=base_url('pengaturan/tambah');?>" class="btn btn-success btn-sm mb-3"><i class="fa fa-plus"></i> Tambah Data</a>
<table class="table table-hover table-bordered" id="table">
	<thead>
		<tr>
			<th>No</th>
			<th>Jabatan</th>
			<th>Masa Kerja</th>
			<th>Insentif</th>
			<th>Bonus</th>
			<th>Opsi</th>
		</tr>
	</thead>
	<tbody>
		<?php $no=1; foreach($data as $d) : ?>
		<tr>
			<td><?=$no++;?></td>
			<td><?=$d->jabatan;?></td>
			<td><?=$d->masakerja;?> tahun</td>
			<td>Rp <?=number_format($d->insentif,0,',','.');?></td>
			<td>Rp <?=number_format($d->bonus,0,',','.');?></td>
			<td>
				<a href="<?=base_url('pengaturan/ubah/'. $d->id);?>" class="btn btn-primary btn-sm">Ubah</a>
				<a href="<?=base_url('pengaturan/hapus/'. $d->id);?>" class="btn btn-danger btn-sm">Hapus</a>
			</td>
		</tr>
		<?php endforeach; ?>
	</tbody>
</table>