<div id="content">

  <!-- Begin Page Content -->
  <div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800"><?= $title ?></h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <a href="<?= base_url('admin/artikel')?>"><i class="fa fa-arrow-left"></i></a>
        <h6 class="m-0 font-weight-bold text-primary d-inline ml-3">Detail '<?= $artikel->arjudul ?></h6>
      </div>
      <div class="card-body">
        <?= $this->session->flashdata('message') ?>

        <div class="form-group border-bottom pb-3">
          <label for="arjudul">Judul</label>
          <br />
          <strong><?= $artikel->arjudul ?></strong>
        </div>
        <div class="form-group border-bottom pb-3">
          <label for="arjudul">Tanggal Publikasi</label>
          <br />
          <strong><?php $dc = date_create ($artikel->artanggal); echo date_format($dc, 'd M Y') ?></strong>
        </div>
        <div class="form-group">
          <label for="arkonten">Isi</label>
          <br />
          <div class="border px-3" style="border: 1px solid black">
            <p>
              <?= $artikel->arkonten ?>
            </p>
          </div>
        </div>
      </div>
    </div>

  </div>
  <!-- /.container-fluid -->
</div>