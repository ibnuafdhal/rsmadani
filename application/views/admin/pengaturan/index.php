<div id="content">

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800"><?= $title ?></h1>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Ubah Data Situs</h6>
            </div>
            <!--preview situs-->
            <div class="preview_wrap">
                <iframe src="<?= base_url() ?>" frameborder="0" class="frame_wrap"></iframe>
            </div>
            <div class="card-body">
                <?= $this->session->flashdata('message') ?>
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="form-row">
                        <div class="form-group col-md-6 col-sm-12">
                            <label for="gambar">Gambar Depan</label>
                            <input type="file" name="gambar" id="" class="file-form-control mb-1">
                            <img src="<?= base_url('assets/img/situs/') . $pengaturan['gambar'] ?>" alt="gambar depan"
                                width="150">
                        </div>
                        <div class="form-group col-md-6 col-sm-12">
                            <label for="banner">Banner</label>

                            <div class="d-flex flex-row flex-wrap">
                                <?php foreach ($banner as $b) : ?>
                                <img src="<?= base_url('assets/img/banner/') . $b->gambar ?>" alt="Banner" width="100"
                                    height="100" style="object-fit: cover; object-position: center; margin-left: 10px">
                                <?php endforeach; ?>
                            </div>
                            <button type="button" class="btn btn-default border">Tambah Banner</button>
                        </div>
                        <div class="form-group col-12">
                            <label for="tentang">Tentang</label>
                            <textarea name="tentang" id="tentang" class="form-control"
                                rows="10"><?= $pengaturan['tentang'] ?></textarea>
                        </div>
                        <div class="form-group col-12">
                            <label for="isi">Isi</label>
                            <textarea name="isi" id="isi" class="form-control"
                                rows="10"><?= $pengaturan['isi'] ?></textarea>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="form-group">
                                <label for="visi">Visi</label>
                                <textarea name="visi" id="" cols="30" rows="10" class="form-control"
                                    placeholder="Visi..."><?= $pengaturan['visi'] ?></textarea>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="form-group">
                                <label for="misi">Misi</label>
                                <textarea name="misi" id="arkonten" cols="30" rows="10" class="form-control"
                                    placeholder="Misi... "><?= $pengaturan['misi'] ?> </textarea>
                            </div>
                        </div>
                        <div class="col-12 text-center">
                            <button class="btn btn-primary" type="submit">Perbarui</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->
</div>