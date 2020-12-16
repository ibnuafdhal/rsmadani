<div id="content">

  <!-- Begin Page Content -->
  <div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800"><?= $title ?></h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <a href="<?= base_url('admin/ruangan') ?>"><i class="fa fa-arrow-left"></i></a>
        <h6 class="m-0 font-weight-bold text-primary d-inline ml-3">Tabel Detail Ruangan</h6>
      </div>
      <div class="card-body">
        <?= $this->session->flashdata('message'); ?>

        <button class="btn btn-primary" data-toggle="modal" data-target="#tambahruangan">Tambah Ruangan</button>
        <div class="table-responsive">
          <br />
          <br />
          <table class="table table-hover" id="dataTable">
            <thead>
              <th>No. </th>
              <th>Nama Ruangan</th>
              <th>Kategori</th>
              <th>Aksi</th>
            </thead>
            <tbody>
              <?php $no = 1; foreach ($dtl_ruangan as $d): ?>
              <tr>
                <td><?= $no++ ?></td>
                <td><?= $d->nama ?></td>
                <td><?= $d->ktruangan ?></td>
                <td>
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input"
                    <?= $d->is_active == 1? 'checked' : null ?> onchange="return setTersedia('<?= $d->id ?>, <?= $d->is_active ?>')">
                    <label class="form-check-label" for="tersedia">Tersedia</label>
                  </div>
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
        <h5 class="modal-title" id="labeltambahlayanan">Tambahkan Ruangan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="" method="post" enctype="multipart/form-data">
        <div class="modal-body">
          <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" name="nama" placeholder="Nama ruangan... " required>
          </div>
          <div class="form-group">
            <label for="ktruangan">Kategori</label>
            <input type="hidden" name="ktruangan" value="<?= $ruangan->id ?>">
            <input type="text" class="form-control" id="ktruangan" readonly placeholder="Kategori ruangan... " value="<?= $ruangan->ktruangan ?>">
          </div>
          <div class="form-group">
            <div class="form-check">
              <input type="checkbox" name="is_active" class="form-check-input"> Tersedia
            </div>
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


<script>
  function setTersedia(data) {
    const id = data.split(',')[0]
    const isActive = data.split(',')[1]


    if (isActive == 0) {
      window.location.href = '?check='+id
    } else if (isActive == 1) {
      window.location.href = '?uncheck='+id
    }
  }
</script>