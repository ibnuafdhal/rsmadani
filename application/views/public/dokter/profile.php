<main class="container-fluid my-3">
    <div class="jumbotron jumbotron-fluid text-center bg-white mb-3">
        <br>
        <br>
        <h1 class="m-3">Profil Dokter</h1>
    </div>

    <section id="jadwaldokter">
        <div class="card d-flex" style="align-items: center;">
            <div class="card-body" style="width: 540px;">
                <div class="filter-dokter">
                    <form action="<?php echo base_url('public/dokter/filterdokter') ?>" method="get">

                        <div class="form-group">
                            <select name="bdokter" id="poli" class="form-control">
                                <option value="">-- PILIH POLI --</option>
                                <option value="umum">Umum</option>
                                <option value="kandungan">Kandungan</option>
                                <option value="mata">Mata</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <input type="text" name="ndokter" class="form-control" placeholder="Nama Dokter (Opsional)">
                        </div>
                        <div class="form-group d-flex">
                            <button class="btn btn-danger btn-block">CARI</button>&nbsp;
                            <?php if (!empty($filter)) : ?>
                            <a href="<?= base_url('public/dokter/profil_dokter') ?>" class="btn btn-secondary">TUTUP</a>
                            <?php endif ?>
                        </div>
                    </form>
                </div>

                <!-- <div class="filter-by-abjad">
                    <a href="<?= base_url('public/dokter/profil_dokter') ?>" class=<?= current_url() == base_url('public/dokter/profil_dokter') ? 'text-danger' : '' ?>>All</a>
                    <?php
                    $alphabet = range('A', 'Z');
                    foreach ($alphabet as $a) :
                    ?>
                        <a href="<?= base_url('public/dokter/profil_dokter_abjad/' . $a) ?>" class="ml-1 <?= current_url() == base_url('public/dokter/profil_dokter_abjad/' . $a) ? 'text-danger' : '' ?>"><?= $a ?></a>
                    <?php endforeach; ?>
                </div> -->

            </div>
            <div class="profil-dokter-container">
                <?php foreach ($dokter as $d) : ?>
                <div class="profil-dokter-card">
                    <img src="<?= $d->gambar ? base_url('assets/img/dokter/' . $d->gambar) : 'https://placehold.it/200x300' ?>"
                        alt="<?= $d->ndokter ?>" class="profil-dokter-gambar">
                    <div class="profil-dokter-info">
                        <h4 class="profil-dokter-nama"><?= $d->ndokter ?></h4>
                        <span class="profil-dokter-bidang"><?= $d->bdokter ?></span>
                    </div>
                </div>
                <?php endforeach ?>
                <div style="flex-basis: 100%; text-align: center;">
                    <nav aria-label="Page navigation example" class="text-center">
                        <ul class="pagination d-flex justify-content-center">
                            <!-- <?php for ($i = 1; $i <= $total_pages; $i++) : ?> -->
                            <li class="page-item"><a class="page-link"
                                    href="<?= base_url('public/dokter/profil_dokter/' . $i) ?>"
                                    class=<?= current_url() == base_url('public/dokter/profil_dokter/' . $i) ? 'text-danger' : '' ?>><?= $i ?></a>
                            </li>
                            <?php endfor; ?>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </section>
</main>