<?php $this->load->view('layouts/base_start') ?>

<div class="container">
  <legend>Tambah Data Tujuan</legend>
  <div class="col-xs-12 col-sm-12 col-md-12">
  <?php echo form_open_multipart('jurusan/store'); ?>

	<div class="form-group">
      <label for="Jurusan">Tujuan</label>
      <input type="text" class="form-control" id="jurusan" name="jurusan" placeholder="Masukkan Destinasi Tujuan"
		value="<?php echo set_value('jurusan'); ?>">  
  </div>
  <div class="form-group">
      <label for="Berangkat">Jam Keberangkatan</label>
      <input type="text" class="form-control" id="jam_berangkat" name="jam_berangkat" placeholder="Masukkan Jam Berangkat"
		value="<?php echo set_value('jam_berangkat'); ?>">  
  </div>
  <div class="form-group">
      <label for="Harga">Tarif Biaya</label>
      <input type="text" class="form-control" id="harga" name="harga" placeholder="Masukkan Tarif Biaya"
		value="<?php echo set_value('harga'); ?>">  
  </div>

	<?php echo $error; ?>    

	<a class="btn btn-info" href="<?php echo site_url('jurusan/') ?>">Kembali</a>
    <button type="submit" class="btn btn-primary">OK</button>
  <?php echo form_close() ?>
  </div>
</div>

<?php $this->load->view('layouts/base_end') ?>