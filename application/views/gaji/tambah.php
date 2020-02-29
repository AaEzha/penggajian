<form action="" method="post">
  <div class="form-group row">
    <label for="inputIdkaryawan" class="col-sm-2 col-form-label">Nama Karyawan</label>
    <div class="col-sm-10">
      <select name="idkaryawan" id="inputIdkaryawan" class="form-control select2<?=(form_error('idkaryawan'))? ' is-invalid':'';?>">
      	<option value="">--Pilih Karyawan--</option>
      	<?php foreach($karyawan as $k): ?>
      	<option value="<?=$k->id;?>"><?=$k->nama;?></option>
      	<?php endforeach; ?>
      </select>
      <?=form_error('idkaryawan');?>
    </div>
  </div>
  <div class="form-group row">
    <label for="datepicker" class="col-sm-2 col-form-label">Tanggal Penerimaan</label>
    <div class="col-sm-10">
      <input type="text" class="form-control<?=(form_error('tanggal'))? ' is-invalid':'';?>" id="datepicker" placeholder="Tanggal Penerimaan" name="tanggal" value="<?=date('Y-m-d');?>">
      <?=form_error('tanggal');?>
    </div>
  </div>
  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary">Simpan</button>
      <a href="<?=base_url('gaji');?>" class="btn btn-default">Kembali</a>
    </div>
  </div>
</form>