<form action="" method="post">
  <div class="form-group row">
    <label for="kode" class="col-sm-2 col-form-label">Kode Jabatan</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="kode" placeholder="Kode Jabatan" name="kode" value="<?=set_value('kode');?>">
      <?=form_error('kode');?>
    </div>
  </div>
  <div class="form-group row">
    <label for="jabatan" class="col-sm-2 col-form-label">Nama Jabatan</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="jabatan" placeholder="Nama Jabatan" name="jabatan" value="<?=set_value('jabatan');?>">
      <?=form_error('jabatan');?>
    </div>
  </div>
  <div class="form-group row">
    <label for="gaji" class="col-sm-2 col-form-label">Gaji Standar</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="gaji" placeholder="Gaji Standar (tanpa tanda titik atau koma)" name="gaji" value="<?=set_value('gaji');?>">
      <?=form_error('gaji');?>
    </div>
  </div>
  <div class="form-group row">
    <label for="keterangan" class="col-sm-2 col-form-label">Keterangan</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="keterangan" placeholder="Keterangan" name="keterangan" value="<?=set_value('keterangan');?>">
    </div>
  </div>
  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary">Simpan</button>
      <a href="<?=base_url('jabatan');?>" class="btn btn-default">Kembali</a>
    </div>
  </div>
</form>