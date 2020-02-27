<form action="" method="post">
  <div class="form-group row">
    <label for="nip" class="col-sm-2 col-form-label">NIP</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="nip" placeholder="NIP" name="nip" value="<?=set_value('nip');?>">
      <?=form_error('nip');?>
    </div>
  </div>
  <div class="form-group row">
    <label for="nama" class="col-sm-2 col-form-label">Nama Karyawan</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="nama" placeholder="Nama Karyawan" name="nama" value="<?=set_value('nama');?>">
      <?=form_error('nama');?>
    </div>
  </div>
  <div class="form-group row">
    <label for="jk" class="col-sm-2 col-form-label">Jenis Kelamin</label>
    <div class="col-sm-10">
      <select name="jk" id="inputJk" class="form-control">
      	<option value="">-- Pilih Jenis Kelamin --</option>
      	<option value="L">Laki-laki</option>
      	<option value="P">Perempuan</option>
      </select>
      <?=form_error('jk');?>
    </div>
  </div>
  <div class="form-group row">
    <label for="datepicker" class="col-sm-2 col-form-label">Tanggal Lahir</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="datepicker" placeholder="Tanggal Lahir" name="tgl_lahir" value="<?=set_value('tgl_lahir');?>">
      <?=form_error('tgl_lahir');?>
    </div>
  </div>
  <div class="form-group row">
    <label for="telp" class="col-sm-2 col-form-label">No.Telepon</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="telp" placeholder="No.Telepon" name="telp" value="<?=set_value('telp');?>">
      <?=form_error('telp');?>
    </div>
  </div>
  <div class="form-group row">
    <label for="email" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="email" placeholder="Email" name="email" value="<?=set_value('email');?>">
      <?=form_error('email');?>
    </div>
  </div>
  <div class="form-group row">
    <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="alamat" placeholder="Alamat" name="alamat" value="<?=set_value('alamat');?>">
      <?=form_error('alamat');?>
    </div>
  </div>
  <div class="form-group row">
    <label for="idjabatan" class="col-sm-2 col-form-label">Jabatan</label>
    <div class="col-sm-10">
      <select name="idjabatan" id="inputIdjabatan" class="form-control">
      	<option value="">-- Pilih Jabatan --</option>
      	<?php foreach($jabatan as $j): ?>
      	<option value="<?=$j->id;?>"><?=$j->jabatan;?></option>
      	<?php endforeach; ?>
      </select>
      <?=form_error('idjabatan');?>
    </div>
  </div>
  <div class="form-group row">
    <label for="masakerja" class="col-sm-2 col-form-label">Masa Kerja</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="masakerja" placeholder="Masa Kerja" name="masakerja" value="<?=set_value('masakerja');?>">
      <?=form_error('masakerja');?>
    </div>
  </div>
  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary">Simpan</button>
      <a href="<?=base_url('karyawan');?>" class="btn btn-default">Kembali</a>
    </div>
  </div>
</form>