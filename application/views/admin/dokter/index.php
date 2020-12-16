<div id="content">

  <!-- Begin Page Content -->
  <div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800"><?= $title ?></h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Tabel Jadwal Dokter</h6>
      </div>
      <div class="card-body">
        <div class="row">
          <div class="col-lg-11 ml-4">
            <?= form_error('ndokter', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
            <?= form_error('bdokter', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
            <?= form_error('hari', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
            <?= form_error('jammasuk', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
            <?= form_error('jampulang', '<div class="alert alert-danger" role="alert">', '</div>'); ?>

            <?= $this->session->flashdata('message'); ?>

            <a href="" class="btn btn-primary mb-3 ml-3" data-toggle="modal" data-target="#newMenuModal">Tambahkan
              Dokter</a>
            <div class="table-responsive">
              <table class="table table-hover" id="dataTable">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Gambar</th>
                    <th scope="col">Nama Dokter</th>
                    <th scope="col">Bidang</th>
                    <th scope="col">Hari</th>
                    <th scope="col">Jam Masuk</th>
                    <th scope="col">Jam Pulang</th>
                    <th scope="col">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $i = 1; ?>
                  <?php foreach ($dokter as $d) : ?>
                  <tr>
                    <th scope="row"><?= $i; ?></th>
                    <th><img src="<?= $d->gambar == ''? 'https://placehold.it/50' : base_url('assets/img/dokter/'. $d->gambar) ?>" width="50" alt="<?= $d->ndokter; ?>"></th>
                    <td><?= $d->ndokter; ?></td>
                    <td><?= $d->bdokter; ?></td>
                    <td><?= $d->hari; ?></td>
                    <td><?= $d->jammasuk; ?></td>
                    <td><?= $d->jampulang; ?></td>
                    <td>
                      <a href="<?= base_url('admin/dokter/edit/'. $d->id) ?>" class="badge badge-success ">Ubah </a>
                      <a href="<?= base_url('admin/dokter/delete/'.$d->id) ?>" onclick="return confirm('Lanjutkan menghapus?')" class="badge badge-danger ">Hapus
                      </a>

                    </td>
                  </tr>
                  <?php $i++; ?>
                  <?php endforeach; ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
  <!-- /.container-fluid -->
</div>


<!-- Modal -->
<div class="modal fade" id="newMenuModal" tabindex="-1" role="dialog" aria-labelledby="newMenuModalLabel"
  aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="newMenuModalLabel">Tambahkan Dokter</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?= base_url('admin/dokter'); ?>" method="post" enctype="multipart/form-data">
        <div class="modal-body">
          <div class="form-group">
            <label for="gambar">Gambar</label>
            <input type="file" class="file-form-control" name="gambar">
          </div>
          <div class="form-group">
            <label for="ndokter">Nama</label>
            <input type="text" class="form-control" id="ndokter" name="ndokter"
            placeholder="Nama dokter... ">
          </div>
          <div class="form-group">
            <label for="bdokter">Bidang</label>
            <select name="bdokter" id="bdokter" class="form-control">
              <option value=""> Pilih Bidang Dokter </option>
              <option value="Dokter Umum"> Dokter Umum </option>
              <option value="Dokter Kandungan"> Dokter Kandungan </option>
              <option value="Dokter Mata"> Dokter Mata </option>
              <option value="Dokter Gigi"> Dokter Gigi </option>
              <option value="Dokter Penyakit Dalam"> Dokter Penyakit Dalam </option>
              <option value="Dokter THT"> Dokter THT </option>
            </select>
          </div>

          <div class="form-group">
            <label for="hari">Hari</label>
            <select name="hari" id="hari" class="form-control">
              <option value=""> Pilih Hari </option>
              <option value="Senin"> Senin </option>
              <option value="Selasa"> Selasa </option>
              <option value="Rabu"> Rabu </option>
              <option value="Kamis"> Kamis </option>
              <option value="Jumat"> Jumat </option>
              <option value="Sabtu"> Sabtu </option>
              <option value="Minggu"> Minggu </option>
            </select>
          </div>

          <div class="form-group">
            <label for="jammasuk">Jam Masuk</label>
            <input type="time" class="form-control" id="jammasuk" name="jammasuk"
            placeholder="Jam Masuk">
          </div>
          <div class="form-group">
            <label for="jampulang">Jam Pulang</label>
            <input type="time" class="form-control" id="jampulang" name="jampulang"
            placeholder="Jam Pulang">
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
          <button type="submit" class="btn btn-primary">Tambahkan</button>
        </div>
      </form>
    </div>
  </div>
</div>