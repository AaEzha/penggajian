<table class="table table-bordered">
	<tbody>
		<tr>
			<td class="col-md-3">NIP</td>
			<td><?=$data->nip;?></td>
		</tr>
		<tr>
			<td>Nama Karyawan</td>
			<td><?=$data->nama;?></td>
		</tr>
		<tr>
			<td>Jabatan</td>
			<td><?=$data->jabatan;?></td>
		</tr>
		<tr>
			<td>Masa Kerja</td>
			<td><?=$data->masakerja;?> Tahun</td>
		</tr>
		<tr>
			<td>Standar Gaji</td>
			<td>Rp <?=number_format($data->nominal,0,',','.');?></td>
		</tr>
		<tr>
			<td>Insentif</td>
			<td>Rp <?=number_format($data->insentif,0,',','.');?></td>
		</tr>
		<tr>
			<td>Bonus</td>
			<td>Rp <?=number_format($data->bonus,0,',','.');?></td>
		</tr>
		<tr>
			<td>Total Gaji</td>
			<td>Rp <?=number_format($data->bonus+$data->insentif+$data->nominal,0,',','.');?></td>
		</tr>
		<tr>
			<td colspan="2">
				<a href="<?=base_url('gaji');?>" class="btn btn-primary">Kembali</a>
			</td>
		</tr>
	</tbody>
</table>