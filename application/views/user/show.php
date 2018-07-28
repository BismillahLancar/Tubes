<?php $this->load->view('layouts/base_start') ?>

<div class="container">
  <legend>Lihat Pengguna</legend>
  <div class="content">
    <div class="form-group">
      <label for="nama">Nama</label>
      <p><?php echo $data->nama ?></p>
    </div>
    <div class="form-group">
      <label for="notelp">No Telepon</label>
      <p><?php echo $data->telepon ?></p>
    </div>
    <div class="form-group">
      <label for="Jenis">Jenis Pesawat</label>
      <p><?php echo $data->pesawat ?></p>
    </div>
    <div class="form-group">
      <label for="tujuan">Tujuan</label>
      <p><?php echo $data->tujuan ?></p>
    </div>
    <a class="btn btn-info" href="<?php echo site_url('user/') ?>">Kembali</a>
  </div>
</div>

<?php $this->load->view('layouts/base_end') ?>


