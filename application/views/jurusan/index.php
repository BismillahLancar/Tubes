<?php $this->load->view('layouts/base_start') ?>

<div class="container">
  <legend>Daftar Tujuan Destinasi</legend>
  <div class="col-xs-12 col-sm-12 col-md-12">
    <table class="table table-striped">
      <thead>
        <th>No</th>
        <th>Tujuan</th>
        <th>Jam Berangkat</th>
        <th>Tarif Pemberangkatan</th>
        <th>
          <a class="btn btn-primary" href="<?php echo site_url('jurusan/create') ?>">
            Tambah
          </a>
        </th>
      </thead>
      <tbody>
        <?php $number = 1; foreach($jurusan as $row) { ?>
        <tr>
          <td>
            <?php echo $number++ ?>
          </td>
          <td>
            <?php echo $row->tujuan ?>
          </td>
          <td>
            <?php echo $row->jam_berangkat ?>
          </td>
          <td>
            <?php echo $row->harga ?>
          </td>
          <td>
            <?php echo form_open('jurusan/destroy/'.$row->kode); ?>
            <a class="btn btn-info" href="<?php echo site_url('jurusan/edit/'.$row->kode) ?>">
              Ubah
            </a>
            <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah anda yakin?')">Hapus</button>
            <?php echo form_close() ?>
          </td>
        </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>
</div>

<?php $this->load->view('layouts/base_end') ?>