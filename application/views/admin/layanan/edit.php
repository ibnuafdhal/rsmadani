<div id="content">

  <!-- Begin Page Content -->
  <div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800"><?= $title ?></h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Edit Layanan dengan nama '<?= strtoupper($l->nlayanan) ?>' </h6>
      </div>
      <div class="card-body">
        <?= $this->session->flashdata('message'); ?>

        <form action="<?= base_url('admin/layanan/edit/') ?>" method="post" enctype="multipart/form-data">
          <input type="hidden" name="id" value="<?= $l->id ?>">
          <div class="row">
            <div class="col-md-6 col-sm-12 mb-3">
              <label for="nlayanan">Nama Layanan</label>
              <input type="text" class="form-control" placeholder="Nama layanan... " name="nlayanan" value="<?= $l->nlayanan?>" required>
            </div>
            <div class="col-md-6 col-sm-12 mb-3">
              <label for="gambar">Gambar</label>
              <input type="file" name="gambar" id="gambar" class="form-control form-control-file">
              <img src="<?= base_url('assets/img/layanan/'.$l->gambar) ?>" width="50" class="mb-2" alt="Gambar Layanan">
            </div>
            <div class="col-12 mb-3">
              <label for="description">Deskripsi</label>
              <textarea name="dlayanan" id="dlayanan" cols="30" rows="5" class="form-control" placeholder="Deskripsi layanan... "><?= $l->dlayanan ?></textarea>
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