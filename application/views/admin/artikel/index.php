<div id="content">

  <!-- Begin Page Content -->
  <div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800"><?= $title ?></h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Tabel Artikel</h6>
      </div>
      <div class="card-body">
        <?= $this->session->flashdata('message')?>
        <div class="table-responsive">
          <a href="<?= base_url('admin/artikel/add')?>" class="btn btn-primary">Tambah Artikel</a>
          <br />
          <br />
          <table class="table table-hover" id="dataTable">
            <thead>
              <th>No. </th>
              <th>Gambar</th>
              <th>Judul</th>
              <th>Tanggal</th>
              <th>Isi</th>
              <th>Aksi</th>
            </thead>
            <tbody>
              <?php $no = 1; foreach ($artikel as $a): ?>
              <tr>
                <td><?= $no++ ?></td>
                <td><img src="<?= $a->gambar? base_url('assets/img/artikel/'. $a->gambar) : 'https://placehold.it/100' ?>" width="100" alt="<?= $a->arjudul ?>"></td>
                <td><?= $a->arjudul ?></td>
                <td>
                  <?php
                  $dc = date_create($a->artanggal );
                  echo date_format($dc, "d M Y");
                  ?>
                </td>
                <td>
                  <span class="collapsable">
                    <?= $a->arkonten ?>
                  </span>
                </td>
                <td>
                  <a href="<?= base_url('admin/artikel/detail/'. $a->id) ?>" class="badge badge-success">Lihat</a>
                  <a href="public/artikel/show/<?= $a->id ?>" target="_blank" class="badge badge-primary">Kunjungi</a>
                  <a href="<?= base_url('admin/artikel/edit/'. $a->id) ?>" class="badge badge-success">Ubah</a>
                  <a href="<?= base_url('admin/artikel/delete/'. $a->id) ?>" class="badge badge-danger" onclick="return confirm('Lanjutkan menghapus?')">Hapus</a>
                </td>
              </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>

  </div>
  <!-- /.container-fluid -->
</div>