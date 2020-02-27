<?=$this->session->flashdata('name');?>
<a href="<?=base_url('gaji/tambah');?>" class="btn btn-success btn-sm mb-3"><i class="fa fa-plus"></i> Tambah Data</a>

<table class="table table-hover table-bordered" id="table">
	<thead>
		<tr>
			<th>No</th>
			<th>NIP</th>
			<th>Nama Karyawan</th>
			<th>Nominal</th>
			<th>Tanggal Penerimaan</th>
			<th>Opsi</th>
		</tr>
	</thead>
	<tbody>
		<?php $no=1; foreach($data as $d): ?>
		<tr>
			<td><?=$no++;?></td>
			<td><?=$d->nip;?></td>
			<td><?=$d->nama;?></td>
			<td>Rp <?=number_format($d->nominal+$d->insentif+$d->bonus,0,',','.');?></td>
			<td><?=date_indo($d->tanggal);?></td>
			<td>
				<a href="<?=base_url('gaji/detail/'.$d->id);?>" class="btn btn-primary btn-sm">Detail</a>
				<a href="<?=base_url('gaji/hapus/'.$d->id);?>" class="btn btn-danger btn-sm">Hapus</a>
			</td>
		</tr>
		<?php endforeach; ?>
	</tbody>
</table>