<div id="content">

  <!-- Begin Page Content -->
  <div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800"><?= $title ?></h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Edit '<?= strtoupper($r->ktruangan) ?>' </h6>
      </div>
      <div class="card-body">
        <?= $this->session->flashdata('message'); ?>

        <form action="<?= base_url('admin/ruangan/edit/') ?>" method="post">
          <input type="hidden" name="id" value="<?= $r->id ?>">
          <div class="row">
            <div class="col-md-6 mb-3">
              <label for="ktruangan">Ubah nama</label>
              <input type="text" class="form-control" placeholder="Kategori ruangan... " name="ktruangan" value="<?= $r->ktruangan?>" required>
            </div>
            <div class="col-12">
              <a href="<?= base_url('admin/ruangan')?>" class="btn btn-danger btn-flat" type="button">Batal</a>
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