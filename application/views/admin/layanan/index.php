<div id="content">

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800"><?= $title ?></h1>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Tabel Layanan</h6>
            </div>
            <div class="card-body">
                <?= $this->session->flashdata('message'); ?>
                <button class="btn btn-primary" data-toggle="modal" data-target="#tambahlayanan">Tambah Layanan</button>
                <div class="table-responsive">
                    <br />
                    <br />
                    <table class="table table-hover" id="dataTable">
                        <thead>
                            <th>No. </th>
                            <th>Gambar</th>
                            <th>Nama</th>
                            <th></th>
                            <!-- <th>Deskripsi</th> -->
                            <th>Aksi</th>
                        </thead>
                        <tbody>
                            <?php $no = 1;
                            foreach ($layanan as $l) : ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><img src="<?= $l->gambar ? base_url('assets/img/layanan/' . $l->gambar) : 'https://placehold.it/500' ?>"
                                        width="50" alt="<?= $l->nlayanan ?>"></td>
                                <td><?= $l->nlayanan ?></td>
                                <td>
                                    <span class="collapsable">
                                        <?= $l->dlayanan ?>
                                    </span>
                                </td>
                                <td>
                                    <a href="<?= base_url('admin/layanan/edit/' . $l->id) ?>"
                                        class="badge badge-success">Ubah</a>
                                    <a href="<?= base_url('admin/layanan/delete/' . $l->id) ?>"
                                        class="badge badge-danger"
                                        onclick="return confirm('Lanjutkan menghapus?')">Hapus</a>
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
<div class="modal fade" id="tambahlayanan" tabindex="-1" role="dialog" aria-labelledby="newMenuModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="labeltambahlayanan">Tambahkan Layanan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('admin/layanan'); ?>" method="post" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="gambar">Gambar</label>
                        <input type="file" class="file-form-control" name="gambar">
                    </div>
                    <div class="form-group">
                        <label for="nlayanan">Nama</label>
                        <input type="text" class="form-control" id="nlayanan" name="nlayanan"
                            placeholder="Nama layanan... " required>
                    </div>

                    <div class="form-group">
                        <label for="dlayanan">Deskripsi</label>
                        <textarea name="dlayanan" id="dlayanan" cols="30" rows="10" class="form-control"
                            placeholder="Deskripsi layanan... "></textarea>
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