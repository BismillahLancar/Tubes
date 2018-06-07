<?php $this->load->view('layouts/base_start') ?>

<div class="container">
  <legend>Edit Data Tujuan</legend>
  <div class="col-xs-12 col-sm-12 col-md-12">
  <?php echo form_open_multipart('jurusan/update/'.$data->kode); ?>

    <?php echo form_hidden('kode', $data->kode) ?>
    
  	<div class="form-group">
      <label for="Jurusan">Tujuan</label>
      <input type="text" class="form-control" id="jurusan" name="jurusan" placeholder="Masukkan Tujuan"
        value="<?php echo $data->tujuan ?>">
    </div>
    <div class="form-group">
      <label for="Jurusan">Tujuan</label>
      <input type="text" class="form-control" id="jam_berangkat" name="jam_berangkat" placeholder="Masukkan Jam Berangkat"
        value="<?php echo $data->jam_berangkat ?>">
    </div>
    <div class="form-group">
      <label for="Jurusan">Tujuan</label>
      <input type="text" class="form-control" id="harga" name="harga" placeholder="Masukkan Tarif Biaya"
        value="<?php echo $data->harga ?>">
    </div>

    <?php echo $error;?>

    <a class="btn btn-info" href="<?php echo site_url('jurusan/') ?>">Kembali</a>
    <button type="submit" class="btn btn-primary">OK</button>

  <?php echo form_close(); ?>
  </div>
</div>

<?php $this->load->view('layouts/base_end') ?>