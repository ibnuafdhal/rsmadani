<main class="container-fluid my-3">
    <div class="jumbotron jumbotron-fluid text-center bg-white mb-3">
        <br>
        <br>
        <h1 class="m-3">Artikel</h1>
    </div>

    <section id="artikel">
        <?php foreach ($artikel as $a) : ?>
        <div class="mb-3 d-flex flex-row">
            <img src="<?= $a->gambar ? base_url('assets/img/artikel/' . $a->gambar) : 'https://placehold.it/150' ?>"
                width="150" class="gambar-artikel" alt="<?= $a->arjudul ?>">
            <div class="ml-3 d-flex flex-column konten-artikel">
                <div>
                    <a href="<?= base_url('public/artikel/' . $a->id) ?>" class="judul-artikel">
                        <h2><?= $a->arjudul ?></h2>
                    </a>
                    <span class="tanggal-artikel">
                        <?php $dc = date_create($a->artanggal);
              echo date_format(
                $dc,
                'd F Y'
              ) ?></span>
                </div>

                <!-- <div class="share-artikel">
                    <span class="label-share text-muted text-sm">Bagikan Artikel Ini</span>
                    <div class="sosial-media">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                    </div>
                </div> -->
            </div>
        </div>
        <?php endforeach; ?>
    </section>
</main>