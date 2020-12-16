<!-- ======= Top Bar ======= -->
<div id="topbar" class="d-none d-lg-flex align-items-center fixed-top">
    <div class="container d-flex">
        <!-- <div class="contact-info mr-auto">
            <i class="icofont-envelope"></i> <a href="mailto:contact@example.com">rsdm_pku@yahoo.com</a>
            <i class="icofont-phone"></i> 0761-23213
            <i class="icofont-google-map"></i> A108 Adam Street, NY
        </div>
        <div class="social-links">
            <a href="#" class="twitter"><i class="icofont-twitter"></i></a>
            <a href="#" class="facebook"><i class="icofont-facebook"></i></a>
            <a href="#" class="instagram"><i class="icofont-instagram"></i></a>
            <a href="#" class="skype"><i class="icofont-skype"></i></a>
            <a href="#" class="linkedin"><i class="icofont-linkedin"></i></i></a>
        </div> -->
    </div>
</div>

<!-- ======= Header ======= -->
<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

        <img src="<?= base_url('assets/img/logo-nobg.png') ?>" alt="Logo RS Madani" class="logo">
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html" class="logo mr-auto"><img src="assets/medis/img/logo.png" alt="" class="img-fluid"></a>-->

        <nav class="nav-menu d-none d-lg-block">
            <ul>
                <li class="active"><a href="<?= base_url('public/index') ?>">Home</a></li>
                <li><a href="#about">Banner</a></li>
                <!-- <li><a href="#services">Layanan</a></li> -->
                <li><a href="#departments">Tentang Kami</a></li>
                <li><a href="#doctors">Dokter</a></li>
                <li class="drop-down"><a href="" class="disabled">Spesifik</a>
                    <ul>
                        <li class="drop-down"><a href="#">Dokter</a>
                            <ul>
                                <li><a href="<?= base_url('public/profiledokter') ?>">Profil Dokter</a></li>
                                <li><a href="<?= base_url('public/dokter/jadwal_dokter') ?>">Jadwal Dokter</a></li>
                            </ul>
                        </li>
                        <li><a href="  <?= base_url('public/layanan') ?>">Layanan</a></li>
                        <li><a href="<?= base_url('public/artikel') ?>">Artikel</a></li>
                    </ul>
                </li>
                <li><a href="#contact">Kontak</a></li>

            </ul>
        </nav><!-- .nav-menu -->

        <a href="#appointment" class="appointment-btn scrollto">Ruangan</a>

    </div>
</header><!-- End Header -->

<script>
document.querySelectorAll('.nav-item .nav-link').forEach(item => {
    console.log(item.href);
    if (item.href === window.location.href) item.parentElement.classList.add('link-active')
})
</script>