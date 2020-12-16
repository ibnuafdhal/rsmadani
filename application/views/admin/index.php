<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800"><?= $title ?></h1>

    <!-- Content Row -->
    <div class="row">

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Semua Dokter</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                <?php
                                $dokter = $this->db->get('dokter')->result();
                                echo count($dokter);
                                ?>
                            </div>
                            <small class="badge badge-primary">
                                <?php
                                $dokter = $this->db->get_where('dokter', ['is_active' => 1])->result();
                                echo count($dokter);
                                ?> dokter hadir
                            </small>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-users fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Layanan</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                <?php
                                $layanan = $this->db->get_where('layanan')->result();
                                echo count($layanan);
                                ?>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-concierge-bell fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Ruangan</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                <?php
                                $ruangan = $this->db->get_where('dtl_ruangan')->result();
                                echo count($ruangan);
                                ?>
                            </div>
                            <small class="badge badge-primary pull-right">
                                <?php
                                $ruangan = $this->db->get_where('dtl_ruangan', ['is_active' => 1])->result();
                                echo count($ruangan);
                                ?> ruangan tersedia</small>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-bed fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Artikel</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                <?php
                                $artikel = $this->db->get_where('artikel')->result();
                                echo count($artikel);
                                ?>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-newspaper fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->