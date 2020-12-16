<main class="container-fluid my-3">
    <div class="jumbotron jumbotron-fluid text-center bg-white mb-3">
        <h1 class="m-3">Artikel</h1>
    </div>

    <section id="artikel" class="show-artikel">
        <div class="mb-5">
            <a href="<?= base_url('public/artikel') ?>"><i class="fa fa-arrow-left fa-lg"></i></a>
        </div>

        <img src="<?= $artikel['gambar'] ? base_url('assets/img/artikel/' . $artikel['gambar']) : 'https://placehold.it/600x400' ?>"
            class="col-md-4 mx-auto d-block" style="max-height: 300px; object-fit: cover; object-position: center;"
            alt="<?= $artikel['arjudul'] ?>">
        <div class="my-5">
            <h3 class="show-artikel-judul mb-0"><?= $artikel['arjudul'] ?>
            </h3>
            <span class="show-artikel-tanggal">
                <?php $dc = date_create($artikel['artanggal']);
        echo date_format($dc, 'd M Y'); ?>
            </span>
        </div>
        <p class="show-artikel-konten">
            <?= $artikel['arkonten'] ?>
        </p>

        <div class="show-artikel-sosial-media">
            <i class="fa fa-facebook fa-lg mr-3"></i>
            <i class="fa fa-twitter fa-lg mr-3"></i>
        </div>
    </section>
</main>