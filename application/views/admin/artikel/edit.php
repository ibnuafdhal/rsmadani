<div id="content">

  <!-- Begin Page Content -->
  <div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800"><?= $title ?></h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Edit Artikel '<?= strtoupper($a->arjudul) ?>' </h6>
      </div>
      <div class="card-body">
        <?= $this->session->flashdata('message'); ?>

        <form action="<?= base_url('admin/artikel/edit/') ?>" method="post" enctype="multipart/form-data">
          <input type="hidden" name="id" value="<?= $a->id ?>">
          <div class="row">
            <div class="col-md-6 col-sm-12 mb-3">
              <label for="arjudul">Judul Artikel</label>
              <input type="text" class="form-control" placeholder="Judul artikel... " name="arjudul" value="<?= $a->arjudul ?>" required>
            </div>
            <div class="col-md-6 col-sm-12 mb-3">
              <label for="gambar">Gambar</label>
              <input type="file" name="gambar" id="gambar" class="form-control form-control-file">
            </div>
            <div class="col-md-6 col-sm-12 mb-3">
              <label for="artanggal">Tanggal</label>
              <input type="date" name="artanggal" id="artanggal" class="form-control" placeholder="Pilih tanggal " value="<?= $a->artanggal ?>">
            </div>
            <div class="col-md-6 col-sm-12 mb-3">
              <img src="<?= base_url('assets/img/artikel/'.$a->gambar) ?>" width="100" alt="<?= $a->gambar ?>">
            </div>

            <div class="col-12 mb-3">
              <label for="arkonten">Isi</label>
              <textarea name="arkonten" id="arkonten" cols="30" rows="15"><?= $a->arkonten ?></textarea>
            </div>
            <div class="col-12 text-center">
              <a href="<?= base_url('admin/artikel')?>" class="btn btn-danger btn-flat" type="button">Batal</a>
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