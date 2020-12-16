<body>
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">
        <div class="container">
            <h1>Welcome to RSD Madani Pekanbaru</h1>
        </div>
    </section><!-- End Hero -->

    <main id="main">

        <!-- ======= About Section ======= -->
        <section id="about" class="about" style:margin:10px;>
            <div class="container-fluid">

                <div class="row">
                    <div class="col-xl-5 col-lg-6 foto-box d-flex justify-content-center align-items-stretch">
                        <img src="<?= base_url('assets/img/situs/' . $situs['gambar']) ?>" alt="">
                    </div>
                    <div>
                    </div>
                    <div
                        class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-top py-5 px-lg-5">
                        <h3> <?= $situs['tentang'] ?></h3>

                        <h4> <?= $situs['isi'] ?></h4>
                    </div>
                </div>
            </div>
            </div>

            </div>
        </section><!-- End About Section -->
        <br>
        <br>
        <br>

        <!-- ======= Why Us Section ======= -->
        <section id="why-us" class="why-us">
            <div class="container">

                <div class="section-title">
                    <h2 style="text-align: center;">Artikel</h2>
                    <!-- <h5 style="text-align: center;">Berikut Adalah Layanan yang Terdapat di RSD Madani Kota Pekanbaru -->
                    </h5>
                </div>
                <br>
                <div class="row">
                    <?php foreach ($artikel as $art) : ?>
                    <div class="col-lg-4 d-flex align-items-stretch">
                        <div class="content">
                            <h3 class="home-artikel-judul">
                                <a href="<?= base_url('public/artikel/' . $art->id) ?>"></a>
                                <?= $art->arjudul ?>
                            </h3>
                            <span class="home-artikel-tanggal">
                                <?php $dc = date_create($art->artanggal);
                                    echo date_format($dc, "d M Y") ?>
                            </span>
                            <div style="max-height: 75px; overflow: hidden">
                                <span class="collapsed-text">
                                    <?= $art->arkonten ?>
                                </span>
                            </div>
                            <div class="text-center">
                                <a href="<?= base_url('public/artikel') ?>" class="more-btn">Lihat Lebih Banyak<i
                                        class="bx bx-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>

                    <!-- <div class="col-lg-8 d-flex align-items-stretch">
                        <div class="icon-boxes d-flex flex-column justify-content-center">
                            <div class="row">
                                <div class="col-xl-4 d-flex align-items-stretch">
                                    <div class="icon-box mt-4 mt-xl-0">
                                        <i class="bx bx-receipt"></i>
                                        <h4>Corporis voluptates sit</h4>
                                        <p>Consequuntur sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut
                                            aliquip</p>
                                    </div>
                                </div>
                                <div class="col-xl-4 d-flex align-items-stretch">
                                    <div class="icon-box mt-4 mt-xl-0">
                                        <i class="bx bx-cube-alt"></i>
                                        <h4>Ullamco laboris ladore pan</h4>
                                        <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                                            deserunt</p>
                                    </div>
                                </div>
                                <div class="col-xl-4 d-flex align-items-stretch">
                                    <div class="icon-box mt-4 mt-xl-0">
                                        <i class="bx bx-images"></i>
                                        <h4>Labore consequatur</h4>
                                        <p>Aut suscipit aut cum nemo deleniti aut omnis. Doloribus ut maiores omnis
                                            facere</p>
                                    </div>
                                </div>
                            </div> -->
                </div><!-- End .content-->
            </div>
            </div>

            </div>
        </section><!-- End Why Us Section -->

        <br>
        <br>
        <!-- ======= Counts Section ======= -->
        <section id="counts" class="counts">
            <div class="container">

                <div class="row">

                    <div class="col-lg-4 col-md-4">
                        <div class="count-box">
                            <i class="icofont-doctor-alt"></i>
                            <span data-toggle="counter-up"><?= count($total_dokter) ?></span>
                            <p>Dokter</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 mt-5 mt-md-0">
                        <div class="count-box">
                            <i class="icofont-patient-bed"></i>
                            <span data-toggle="counter-up"><?= count($layanan) ?></span>
                            <p>Layanan</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 mt-5 mt-lg-0">
                        <div class="count-box">
                            <i class="icofont-laboratory"></i>
                            <span data-toggle="counter-up"><?= count($total_artikel) ?></span>
                            <p>Artikel</p>
                        </div>
                    </div>

                    <!-- <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
                        <div class="count-box">
                            <i class="icofont-award"></i>
                            <span data-toggle="counter-up">150</span>
                            <p>Awards</p>
                        </div>
                    </div> -->

                </div>

            </div>
        </section><!-- End Counts Section -->
        <br>
        <br>
        <!-- ======= Services Section ======= -->
        <section id="services" class="services">
            <div class="container">

                <div class="section-title">
                    <h2 style="text-align: center;">Layanan</h2>
                    <h5 style="text-align: center;">Berikut Adalah Layanan yang Terdapat di RSD Madani Kota Pekanbaru
                    </h5>
                </div>
                <br>
                <div class="row">
                    <?php foreach ($layanan as $l) : ?>
                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                        <div class="icon-box">
                            <div class="icon"><i class="icofont-heart-beat"></i></div>
                            <img src="<?= $l->gambar == '' ? 'https://via.placeholder.com/300x200.png?text=' . $l->nlayanan : base_url('assets/img/layanan/' . $l->gambar) ?>"
                                style="height: 200px; object-fit: cover; object-position: center"
                                class="card-img-top img-fluid" alt="<?= $l->nlayanan ?>">
                            <div class="w-100 layanan-square d-flex flex-column align-items-center">
                                <div class="layanan-circle">
                                    <i class="fa fa-heart fa-lg text-white"></i>
                                </div>
                                <span style="text-decoration-color: lavender;"
                                    class="text-black mb-3"><?= $l->nlayanan ?></span>
                            </div>
                        </div>
                    </div>

                    <?php endforeach; ?>


                </div>

            </div>
        </section><!-- End Services Section -->
        <br>
        <br>

        <!-- contoh -->
        <section id="counts" class="counts">
            <div class="container">
                <div class="section-title">

                    <h2 style="text-align: center;">Ruang Inap</h2>
                    <h5 style="text-align: center;" class="mb-5">Ketersediaan Ruang Inap di RS Madani Kota Pekanbaru
                    </h5>
                </div>


                <div class="row">
                    <?php foreach ($ruangan as $r) : ?>

                    <?php

                        $active = $this->db->get_where('dtl_ruangan', ['id_kategori' => $r->id, 'is_active' => 1])->result();
                        $total = $this->db->get_where('dtl_ruangan', ['id_kategori' => $r->id])->result(); ?>

                    <div class="col-lg-4 col-md-4">
                        <div class="count-box">
                            <i class="icofont-patient-bed"></i>
                            <div class="card-body text-center">
                                <h5 class="card-text"><?= $r->ktruangan ?></h5>
                                <h6 class="card-text">Total Ruangan <?= count($total) ?>
                                </h6>
                                <p class="card-text">Ruangan yang tersedia: <?= count($active) ?></p>
                            </div>
                        </div>

                    </div>
                    <?php endforeach ?>

                </div>

            </div>
        </section>

        <!-- end -->

        <!-- ======= Appointment Section ======= -->
        <!-- <section id="appointment" class="appointment section-bg">
            <div class="container">

                <div class="section-title">
                    <h2 style="text-align: center;">Ruang Inap</h2>
                    <h5 style="text-align: center;">Ketersediaan Ruang Inap di RS Madani Kota Pekanbaru</h5>
                </div>
                <br>
                <?php foreach ($ruangan as $r) : ?>

                <?php

                    $active = $this->db->get_where('dtl_ruangan', ['id_kategori' => $r->id, 'is_active' => 1])->result();
                    $total = $this->db->get_where('dtl_ruangan', ['id_kategori' => $r->id])->result(); ?>

                <div class="card-deck">
                    <div class="card bg-primary">
                        <div class="card-body text-center">
                            <h5 class="card-text"><?= $r->ktruangan ?></h5>
                            <h6 class="card-text">Total Ruangan <?= count($total) ?>
                            </h6>
                            <p class="card-text">Ruangan yang tersedia: <?= count($active) ?></p>
                        </div>
                    </div>
                </div>

                <?php endforeach ?>

                <!-- <button type="button" class="btn btn-primary" data-toggle="tooltip" title="100 Kamar!">Jumlah Kamar
                    Yang
                    Tersedia<span class=" badge">100</span></button>
                <button type="button" class="btn btn-primary" data-toggle="tooltip" title="85 Kamar!">Jumlah Tempat
                    Tidur Yang Terisi<span class="badge">85</span></button>
                <button type="button" class="btn btn-primary" data-toggle="tooltip" title="15 Kamar!">umlah Tempat
                    Tidur
                    Yang kosong<span class="badge">15</span></button> -->
        </div>
        </section>
        <br>
        <hr>
        <br> -->
        <!-- ======= Departments Section ======= -->
        <section id="departments" class="departments">
            <div class="container">

                <div class="section-title">
                    <h2 style="text-align: center;">Tentang Kami</h2>
                    <br>
                    <div id="visi">
                        <h4 style="text-align: center;">Visi</h4>
                        <p style="text-align: left;">
                            <?= $tentang['visi'] ?>
                        </p>
                    </div>
                    <br>
                    <div id="misi">
                        <h4 style="text-align: center;">Misi</h4>
                        <p style="text-align: center;">
                            <?= $tentang['misi'] ?>
                        </p>
                    </div>
                </div>
            </div>
        </section><!-- End Departments Section -->
        <br>
        <hr>
        <br>
        <!-- ======= Doctors Section ======= -->
        <section id="doctors" class="doctors">
            <div class="container">

                <div class="section-title">
                    <h2 style="text-align: center;">Dokter Yang Hadir</h2>
                </div>
                <br>
                <section id="jadwaldokter">

                    <div class="row">
                        <?php foreach ($dokter as $d) : ?>
                        <div class="col-lg-6">
                            <div class="member d-flex align-items-start">
                                <div class="pic" style="box-sizing: content-box;">
                                    <img src="<?= $d->gambar === '' ? 'https://placehold.it/100' : 'assets/img/dokter/' . $d->gambar ?>"
                                        alt="<?= $d->ndokter ?>" class="img-fluid">
                                </div>
                                <div class="member-info">
                                    <b class="dokter-name"><?= strtoupper($d->ndokter) ?></b>
                                    <br />
                                    <b><?= $d->bdokter ?></b>
                                    <p>
                                        <span class="text-muted">Hari</span> :
                                        <b><?= $d->hari ?></b>
                                        <br />
                                        <span class="text-muted">Jam Hadir</span> :
                                        <b><?= $d->jammasuk ?></b>
                                        <br />
                                        <span class="text-muted">Jam Pulang</span> :
                                        <b><?= $d->jampulang ?></b>
                                    </p>

                                </div>
                            </div>
                        </div>

                        <?php endforeach ?>
                    </div>
            </div>

            </div>
        </section><!-- End Doctors Section -->
        <br>
        <hr>
        <br>
        <!-- ======= Frequently Asked Questions Section ======= -->

        <!-- ======= Testimonials Section ======= -->
        <section id="testimonials" class="testimonials">
            <div class="container">

                <div class="owl-carousel testimonials-carousel">

                    <div class="testimonial-wrap">
                        <div class="testimonial-item">
                            <img src=" <?= base_url('assets/medis/img/sponsor/logo.png') ?>">

                        </div>
                    </div>

                    <div class="testimonial-wrap">
                        <div class="testimonial-item static">

                            <img src=" <?= base_url('assets/medis/img/sponsor/kemenkes.png') ?> ">

                        </div>
                    </div>

                    <div class="testimonial-wrap">
                        <div class="testimonial-item static">

                            <img src=" <?= base_url('assets/medis/img/sponsor/kpcpen.png') ?> ">

                        </div>
                    </div>

        </section><!-- End Testimonials Section -->

        <!-- ======= Gallery Section ======= -->
        <!-- <section id="gallery" class="gallery">
            <div class="container">

                <div class="section-title">
                    <h2>Gallery</h2>
                    <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum
                        quidem. Sit
                        sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit
                        alias
                        ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
                </div>
            </div>

            <div class="container-fluid">
                <div class="row no-gutters">

                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="assets/medis/img/gallery/gallery-1.jpg" class="venobox" data-gall="gallery-item">
                                <img src="assets/medis/img/gallery/gallery-1.jpg" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="assets/medis/img/gallery/gallery-2.jpg" class="venobox" data-gall="gallery-item">
                                <img src="assets/medis/img/gallery/gallery-2.jpg" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="assets/medis/img/gallery/gallery-3.jpg" class="venobox" data-gall="gallery-item">
                                <img src="assets/medis/img/gallery/gallery-3.jpg" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="assets/medis/img/gallery/gallery-4.jpg" class="venobox" data-gall="gallery-item">
                                <img src="assets/medis/img/gallery/gallery-4.jpg" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="assets/medis/img/gallery/gallery-5.jpg" class="venobox" data-gall="gallery-item">
                                <img src="assets/medis/img/gallery/gallery-5.jpg" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="assets/medis/img/gallery/gallery-6.jpg" class="venobox" data-gall="gallery-item">
                                <img src="assets/medis/img/gallery/gallery-6.jpg" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="assets/medis/img/gallery/gallery-7.jpg" class="venobox" data-gall="gallery-item">
                                <img src="assets/medis/img/gallery/gallery-7.jpg" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="assets/medis/img/gallery/gallery-8.jpg" class="venobox" data-gall="gallery-item">
                                <img src="assets/medis/img/gallery/gallery-8.jpg" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>

                </div>

            </div>
        </section>
        End Gallery Section -->
        <br>

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container">

                <div class="section-title">
                    <h2>RSD Madani Kota Pekanbaru</h2>
                </div>
            </div>
            <br>
            <div class="container">
                <div class="info">
                    <div class="row">
                        <div class="col-sm-8">
                            <div class="address">
                                <a href="https://goo.gl/maps/QB2Pwon9SWr6g28XA"><i class="icofont-google-map"></i></a>
                                <h4>Lokasi:</h4>
                                <p> <a href="https://goo.gl/maps/QB2Pwon9SWr6g28XA">RSD
                                        Madani Pekanbaru</a></p>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="email">
                                <a href="mailto:rsdm_pku@yahoo.com"><i class="icofont-envelope"></i></a>
                                <h4>Email:</h4>
                                <p><a href="mailto:rsdm_pku@yahoo.com">rsdm_pku@yahoo.com</a></p>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="phone">
                                <i class="icofont-phone"></i>
                                <h4>Telepon:</h4>
                                <p> 0761-23213</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            </div>
        </section> <!-- End Contact Section -->
        <br>
        <br>

    </main> <!-- End #main -->



    <div id="preloader"></div>
    <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/medis/vendor/jquery/jquery.min.js"></script>
    <script src="assets/medis/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/medis/vendor/jquery.easing/jquery.easing.min.js"></script>
    <script src="assets/medis/vendor/php-email-form/validate.js"></script>
    <script src="assets/medis/vendor/venobox/venobox.min.js"></script>
    <script src="assets/medis/vendor/waypoints/jquery.waypoints.min.js"></script>
    <script src="assets/medis/vendor/counterup/counterup.min.js"></script>
    <script src="assets/medis/vendor/owl.carousel/owl.carousel.min.js"></script>
    <script src="assets/medis/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/medis/js/main.js"></script>

</body>