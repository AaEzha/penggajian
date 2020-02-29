<form method="post" action="">
  <input type="hidden" name="id" id="inputId" class="form-control" value="<?=$data->id;?>">
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Jabatan</label>
    <div class="col-sm-10">
      <select name="jabatan" id="inputJabatan" class="form-control<?=(form_error('jabatan'))? ' is-invalid':'';?>">
      	<option value="">-- Pilih Jabatan --</option>
      	<?php foreach($jabatan as $j): ?>
      	<option value="<?=$j->id;?>"<?=($j->id==$data->idjabatan)?' selected':'';?>><?=$j->jabatan;?></option>
      	<?php endforeach; ?>
      </select>
      <?=form_error('jabatan');?>
    </div>
  </div>
  <div class="form-group row">
    <label for="masakerja" class="col-sm-2 col-form-label">Masa Kerja</label>
    <div class="col-sm-10">
      <input type="text" class="form-control<?=(form_error('masakerja'))? ' is-invalid':'';?>" id="masakerja" placeholder="Masa Kerja" name="masakerja" value="<?=$data->masakerja;?>">
      <?=form_error('masakerja');?>
    </div>
  </div>
  <div class="form-group row">
    <label for="insentif" class="col-sm-2 col-form-label">Insentif (Rp)</label>
    <div class="col-sm-10">
      <input type="text" class="form-control<?=(form_error('insentif'))? ' is-invalid':'';?>" id="insentif" placeholder="Insentif (tanpa tanda titik atau koma)" name="insentif" value="<?=$data->insentif;?>">
      <?=form_error('insentif');?>
    </div>
  </div>
  <div class="form-group row">
    <label for="bonus" class="col-sm-2 col-form-label">Bonus (Rp)</label>
    <div class="col-sm-10">
      <input type="text" class="form-control<?=(form_error('bonus'))? ' is-invalid':'';?>" id="bonus" placeholder="Bonus (tanpa tanda titik atau koma)" name="bonus"  value="<?=$data->bonus;?>">
      <?=form_error('bonus');?>
    </div>
  </div>
  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary">Simpan</button>
      <a href="<?=base_url('pengaturan');?>" class="btn btn-default">Kembali</a>
    </div>
  </div>
</form>