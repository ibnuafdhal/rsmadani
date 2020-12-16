<div id="content">

  <!-- Begin Page Content -->
  <div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800"><?= $title ?></h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Tabel Ruangan</h6>
      </div>
      <div class="card-body">
        <?= $this->session->flashdata('message'); ?>

        <button class="btn btn-primary" data-toggle="modal" data-target="#tambahruangan">Tambah Kategori</button>
        <div class="table-responsive">
          <br />
          <br />
          <table class="table table-hover" id="dataTable">
            <thead>
              <th>No. </th>
              <th>Kategori</th>
              <th>Tersedia</th>
              <th>Total Ruangan</th>
              <th>Aksi</th>
            </thead>
            <tbody>
              <?php $no = 1; foreach ($ruangan as $r): ?>
              <tr>
                <td><?= $no++ ?></td>
                <td><?= $r->ktruangan ?></td>
                <td>
                  <?php
                  $active = $this->db->get_where('dtl_ruangan', ['id_kategori' => $r->id, 'is_active' => 1])->result();
                  $total = $this->db->get_where('dtl_ruangan', ['id_kategori' => $r->id])->result();

                  echo count($active).'/'. count($total). ' ruangan tersedia';
                  ?>
                </td>
                <td>
                  <?php
                  echo count($total). ' ruangan';
                  ?>
                </td>
                <td>
                  <a href="<?= base_url('admin/ruangan/detail/'. $r->id) ?>" class="badge badge-info">Detail</a>
                  <a href="<?= base_url('admin/ruangan/edit/'. $r->id) ?>" class="badge badge-success">Ubah</a>
                  <a href="<?= base_url('admin/ruangan/delete/'. $r->id) ?>" class="badge badge-danger" onclick="return confirm('Lanjutkan menghapus?')">Hapus</a>
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

<!-- Modal -->
<div class="modal fade" id="tambahruangan" tabindex="-1" role="dialog" aria-labelledby="newMenuModalLabel"
  aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="labeltambahlayanan">Tambahkan Kategori</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?= base_url('admin/ruangan'); ?>" method="post" enctype="multipart/form-data">
        <div class="modal-body">
          <div class="form-group">
            <label for="ktruangan">Nama Kategori</label>
            <input type="text" class="form-control" id="ktruangan" name="ktruangan"
            placeholder="Nama kategori ruangan... " required>
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