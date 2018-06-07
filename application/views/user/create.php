<?php $this->load->view('layouts/base_start') ?>

<div class="container">
  <legend>Tambah Data Pengguna</legend>
  <div class="col-xs-12 col-sm-12 col-md-12">
  <?php echo form_open('user/store'); ?>
    <div class="form-group">
      <label for="Nama">Nama</label>
      <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama"
		value="<?php echo set_value('nama'); ?>">  
    </div>
    <div class="form-group">
      <label for="No">No Telp</label>
      <input type="text" class="form-control" id="telepon" name="telepon" placeholder="Masukkan No Telepon"
		  value="<?php echo set_value('telepon'); ?>">  
    </div>
	<div class="form-group">
    <label for="Tujuan">Tujuan</label>
    <select class="form-control" id="jurusan" name="jurusan">
    
    <?php foreach($data as $row) { ?>
      <option value="<?php echo $row->kode ?>"><?php echo $row->tujuan ?></option>
    <?php } ?>
    
    </select>
  </div>

	<?php echo $error; ?>    

	<a class="btn btn-info" href="<?php echo site_url('user/') ?>">Kembali</a>
    <button type="submit" class="btn btn-primary">OK</button>
  <?php echo form_close() ?>
  </div>
</div>

<?php $this->load->view('layouts/base_end') ?>