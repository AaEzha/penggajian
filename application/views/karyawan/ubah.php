<form action="" method="post">
  <input type="hidden" name="id" id="inputId" class="form-control" value="<?=$data->id;?>">
  <div class="form-group row">
    <label for="nip" class="col-sm-2 col-form-label">NIP</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="nip" placeholder="NIP" name="nip" value="<?=$data->nip;?>" disabled readonly>
      <?=form_error('nip');?>
    </div>
  </div>
  <div class="form-group row">
    <label for="nama" class="col-sm-2 col-form-label">Nama Karyawan</label>
    <div class="col-sm-10">
      <input type="text" class="form-control<?=(form_error('nama'))? ' is-invalid':'';?>" id="nama" placeholder="Nama Karyawan" name="nama" value="<?=$data->nama;?>">
      <?=form_error('nama');?>
    </div>
  </div>
  <div class="form-group row">
    <label for="jk" class="col-sm-2 col-form-label">Jenis Kelamin</label>
    <div class="col-sm-10">
      <select name="jk" id="inputJk" class="form-control<?=(form_error('jk'))? ' is-invalid':'';?>">
      	<option value="">-- Pilih Jenis Kelamin --</option>
      	<option value="L"<?=('L'==$data->jk)?' selected':'';?>>Laki-laki</option>
      	<option value="P"<?=('P'==$data->jk)?' selected':'';?>>Perempuan</option>
      </select>
      <?=form_error('jk');?>
    </div>
  </div>
  <div class="form-group row">
    <label for="datepicker" class="col-sm-2 col-form-label">Tanggal Lahir</label>
    <div class="col-sm-10">
      <input type="text" class="form-control<?=(form_error('tgl_lahir'))? ' is-invalid':'';?>" id="datepicker" placeholder="Tanggal Lahir" name="tgl_lahir" value="<?=$data->tgl_lahir;?>">
      <?=form_error('tgl_lahir');?>
    </div>
  </div>
  <div class="form-group row">
    <label for="telp" class="col-sm-2 col-form-label">No.Telepon</label>
    <div class="col-sm-10">
      <input type="text" class="form-control<?=(form_error('telp'))? ' is-invalid':'';?>" id="telp" placeholder="No.Telepon" name="telp" value="<?=$data->telp;?>">
      <?=form_error('telp');?>
    </div>
  </div>
  <div class="form-group row">
    <label for="email" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
      <input type="text" class="form-control<?=(form_error('email'))? ' is-invalid':'';?>" id="email" placeholder="Email" name="email" value="<?=$data->email;?>">
      <?=form_error('email');?>
    </div>
  </div>
  <div class="form-group row">
    <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
    <div class="col-sm-10">
      <input type="text" class="form-control<?=(form_error('alamat'))? ' is-invalid':'';?>" id="alamat" placeholder="Alamat" name="alamat" value="<?=$data->alamat;?>">
      <?=form_error('alamat');?>
    </div>
  </div>
  <div class="form-group row">
    <label for="idjabatan" class="col-sm-2 col-form-label">Jabatan</label>
    <div class="col-sm-10">
      <select name="idjabatan" id="inputIdjabatan" class="form-control<?=(form_error('idjabatan'))? ' is-invalid':'';?>">
      	<option value="">-- Pilih Jabatan --</option>
      	<?php foreach($jabatan as $j): ?>
      	<option value="<?=$j->id;?>"<?=($j->id==$data->idjabatan)?' selected':'';?>><?=$j->jabatan;?></option>
      	<?php endforeach; ?>
      </select>
      <?=form_error('idjabatan');?>
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
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary">Simpan</button>
      <a href="<?=base_url('karyawan');?>" class="btn btn-default">Kembali</a>
    </div>
  </div>
</form>