<header class="text-center">
    <nav class="navbar navbar-expand-md navbar-light bg-white fixed-top">
        <a class="navbar-brand" href="#">
            <img src="<?= base_url('assets/img/logo.png') ?>" alt="Logo RS Madani" class="logo">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url() ?>">Beranda</a>
                </li>
                <li
                    class="nav-item dropdown <?= current_url() === base_url('public/dokter/profil_dokter') || current_url() === base_url('public/dokter/jadwal_dokter') ? 'link-active' : '' ?>">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Dokter
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="<?= base_url('public/dokter/profil_dokter') ?>">Profil Dokter</a>
                        <a class="dropdown-item" href="<?= base_url('public/dokter/jadwal_dokter') ?>">Jadwal Dokter</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('public/layanan') ?>">Layanan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('public/tentang') ?>">Tentang Kami</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('public/artikel') ?>">Artikel</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('public/darurat') ?>">Darurat</a>
                </li>
            </ul>
        </div>
    </nav>
</header>

<script>
document.querySelectorAll('.nav-item .nav-link').forEach(item => {
    console.log(item.href);
    if (item.href === window.location.href) item.parentElement.classList.add('link-active')
})
</script>