<div id="content">

  <!-- Begin Page Content -->
  <div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800"><?= $title ?></h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Edit Dokter dengan nama '<?= strtoupper($d->ndokter) ?>' </h6>
      </div>
      <div class="card-body">
        <?= $this->session->flashdata('message'); ?>

        <form action="<?= base_url('admin/dokter/edit') ?>" method="post" enctype="multipart/form-data">
          <input type="hidden" name="id" value="<?= $d->id ?>">
          <div class="row">
            <div class="col-md-6 col-sm-12 mb-3">
              <label for="ndokter">Nama Dokter</label>
              <input type="text" class="form-control" placeholder="Nama dokter... " name="ndokter" value="<?= $d->ndokter ?>" required>
            </div>
            <div class="col-md-6 col-sm-12 mb-3">
              <label for="gambar">Ubah Gambar</label>
              <input type="file" class="file-form-control d-inline" placeholder="Gambar... " name="gambar">
              <img src="<?= $d->gambar?base_url('assets/img/dokter/'.$d->gambar) : 'https://placehold.it/50' ?>" width="50" class="mb-2" alt="Gambar Dokter">
            </div>
            <div class="col-md-6 col-sm-12 mb-3">
              <label for="bdokter">Bidang</label>
              <select name="bdokter" id="" class="form-control">
                <option value="<?= $d->bdokter ?>"><?= $d->bdokter ?></option>
                <option value="Dokter Umum"> Dokter Umum </option>
                <option value="Dokter Kandungan"> Dokter Kandungan </option>
                <option value="Dokter Mata"> Dokter Mata </option>
                <option value="Dokter Gigi"> Dokter Gigi </option>
                <option value="Dokter Penyakit Dalam"> Dokter Penyakit Dalam </option>
                <option value="Dokter THT"> Dokter THT </option>
              </select>
            </div>
            <div class="col-md-6 col-sm-12 mb-3">
              <label for="hari">Hari</label>
              <select name="hari" id="hari" class="form-control">
                <option value="<?= $d->hari ?>"><?= $d->hari ?></option>              <option value="Senin"> Senin </option>
                <option value="Selasa"> Selasa </option>
                <option value="Rabu"> Rabu </option>
                <option value="Kamis"> Kamis </option>
                <option value="Jumat"> Jumat </option>
                <option value="Sabtu"> Sabtu </option>
                <option value="Minggu"> Minggu </option>
              </select>
            </select>
          </div>
          <div class="col-md-6 col-sm-12 mb-3">
            <label for="jammasuk">Jam Masuk</label>
            <input type="time" placeholder="Jam masuk... " name="jammasuk" class="form-control" value="<?= $d->jammasuk ?>" required>
          </div>
          <div class="col-md-6 col-sm-12 mb-3">
            <label for="jampulang">Jam Pulang</label>
            <input type="time" placeholder="Jam pulag... " name="jampulang" class="form-control" value="<?= $d->jampulang ?>" required>
          </div>
          <div class="col-12 text-center">
            <button class="btn btn-danger btn-flat" type="button" onclick="window.history.back()">Batal</button>
            <button class="btn btn-success btn-flat" type="submit">Ubah</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>

</div>
<!-- /.container-fluid -->
</div>