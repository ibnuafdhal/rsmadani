<div id="content">

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800"><?= $title ?></h1>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Tambah Artikel Baru</h6>
            </div>
            <div class="card-body">
                <?= $this->session->flashdata('message'); ?>

                <form action="<?= base_url('admin/artikel/add/') ?>" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-6 col-sm-12 mb-3">
                            <label for="arjudul">Judul Artikel</label>
                            <input type="text" class="form-control" placeholder="Judul artikel... " name="arjudul"
                                required>
                        </div>
                        <div class="col-md-6 col-sm-12 mb-3">
                            <label for="gambar">Gambar</label>
                            <input type="file" name="gambar" id="gambar" class="form-control form-control-file">
                        </div>
                        <div class="col-12 mb-3">
                            <label for="arkonten">Isi</label>
                            <textarea name="arkonten" id="arkonten" cols="30" rows="15"></textarea>
                        </div>
                        <div class="col-12 text-center">
                            <a href="<?= base_url('admin/artikel') ?>" class="btn btn-danger btn-flat"
                                type="button">Batal</a>
                            <button class="btn btn-success btn-flat" type="submit">Tambah</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->
</div>