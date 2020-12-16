<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('admin/dashboard') ?>">
    <div class="sidebar-brand-icon ">
      <i class="far fa-hospital"></i>
    </div>
    <div class="sidebar-brand-text mx-3">
      RSD Madani
    </div>
  </a>

  <!-- Divider -->


  <!-- QUERY MENU -->


  <!-- LOOPING MENU-->

  <div class="sidebar-heading">
    Admin
  </div>

  <!-- Nav Item - Beranda -->
  <li class="nav-item
    <?php echo current_url() == base_url('admin/dashboard') ? 'active' : '' ?>">
    <a class="nav-link" href="<?= base_url('admin/dashboard') ?>">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Beranda</span></a>
  </li>

  <!-- Divider -->

  <li class="nav-item
  <?php echo current_url() == base_url('admin/dokter/profil') || current_url() == base_url('admin/dokter') || current_url() == base_url('admin/khdokter') ? 'active' : '' ?>">
    <a class="nav-link
    <?php echo current_url() == base_url('admin/dokter/profil') || current_url() == base_url('admin/dokter') || current_url() == base_url('admin/khdokter') ? '' : 'collapsed' ?>" href="#" data-toggle="collapse" data-target="#collapseTwo">
      <i class="fas fa-fw fa-user-md"></i>
      <span>Dokter</span>
    </a>
    <div id="collapseTwo" class="collapse
    <?php echo current_url() == base_url('admin/dokter/profil') || current_url() == base_url('admin/dokter') || current_url() == base_url('admin/khdokter') ? 'show' : '' ?>" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">Menu Dokter:</h6>
        <a class="collapse-item
        <?php echo current_url() == base_url('admin/dokter/profil') ? 'active' : '' ?>" href="<?= base_url('admin/dokter/profil') ?>">Profil Dokter</a>
        <a class="collapse-item
        <?php echo current_url() == base_url('admin/dokter') ? 'active' : '' ?>" href="<?= base_url('admin/dokter') ?>">Jadwal Dokter</a>
        <a class="collapse-item
        <?php echo current_url() == base_url('admin/khdokter') ? 'active' : '' ?>" href="<?= base_url('admin/khdokter') ?>">Kehadiran Dokter</a>
      </div>
    </div>
  </li>

  <!-- Nav Item - Layanan -->
  <li class="nav-item
  <?= current_url() == base_url('admin/layanan') ? 'active' : '' ?>">
    <a class="nav-link" href="<?= base_url('admin/layanan') ?>">
      <i class="fas fa-fw fa-briefcase-medical"></i>
      <span>Layanan</span></a>
  </li>

  <!-- Divider -->


  <!-- Nav Item - Ruangan -->
  <li class="nav-item
    <?= current_url() == base_url('admin/ruangan') ? 'active' : '' ?>">
    <a class="nav-link" href="<?= base_url('admin/ruangan') ?>">
      <i class="fas fa-fw fa-procedures"></i>
      <span>Ruangan</span></a>
  </li>

  <!-- Divider -->


  <!-- Nav Item - Artikel -->
  <li class="nav-item
    <?= current_url() == base_url('admin/artikel') ? 'active' : '' ?> ">
    <a class="nav-link" href="<?= base_url('admin/artikel') ?>">
      <i class="fas fa-fw fa-newspaper"></i>
      <span>Artikel</span></a>
  </li>
  <!-- Divider -->
  <div class="sidebar-heading">
    System
  </div>
  <li class="nav-item
      <?= current_url() == base_url('admin/pengaturan') ? 'active' : '' ?>  ">
    <a class="nav-link" href="<?= base_url('admin/pengaturan'); ?>">
      <i class="fas fa-cog"></i>
      <span>Pengaturan</span></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="<?= base_url('admin/auth/logout'); ?>">
      <i class="fas fa-sign-out-alt"></i>
      <span>Logout</span></a>
  </li>


  <!-- Divider -->
  <hr class="sidebar-divider d-none d-md-block">

  <!-- Sidebar Toggler (Sidebar) -->
  <div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
  </div>

</ul>
<!-- End of Sidebar -->

<div id="content-wrapper" class="d-flex flex-column">