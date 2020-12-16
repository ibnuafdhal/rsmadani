<main class="container-fluid my-3">
    <div class="jumbotron jumbotron-fluid text-center bg-white mb-3">
        <br>
        <br>
        <h1 class="m-3">Layanan Kami</h1>
    </div>

    <section id="layanan">
        <div class="card">
            <div class="card-header">
                <h4>SEMUA LAYANAN</h4>
            </div>
            <div class="card-body">
                <div class="mb-3">
                    <div class="row">
                        <?php foreach ($layanan as $l) : ?>
                        <div class="col-md-4 col-sm-12">
                            <div class="card my-3">
                                <img src="<?= $l->gambar == '' ? 'https://via.placeholder.com/300x200.png?text=' . $l->nlayanan : base_url('assets/img/layanan/' . $l->gambar) ?>"
                                    class="card-img-top" alt="<?= $l->nlayanan ?>">
                                <div class="w-100 layanan-square d-flex flex-column align-items-center">
                                    <div class="layanan-circle">
                                        <i class="fa fa-heart fa-lg text-blacl"></i>
                                    </div>
                                    <span class="text-black mb-3"><?= $l->nlayanan ?></span>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>