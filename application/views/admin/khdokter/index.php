<div id="content">

  <!-- Begin Page Content -->
  <div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800"><?= $title ?></h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Tabel <?= $title ?></h6>
      </div>
      <div class="card-body">
        <div class="row ">
          <div class="col-lg-10 ml-4">
            <div class="table-responsive">
              <table class="table table-hover" id="dataTable">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Dokter</th>
                    <th scope="col">Bidang</th>
                    <th scope="col">Hari</th>
                    <th scope="col">Jam Masuk</th>
                    <th scope="col">Jam Pulang</th>
                    <th scope="col">Kehadiran</th>

                  </tr>
                </thead>
                <tbody>

                  <?php $i = 1; ?>
                  <?php foreach ($dokter as $d) : ?>

                  <tr>

                    <th scope="row"><?= $i; ?></th>
                    <td><?= $d->ndokter; ?></td>
                    <td><?= $d->bdokter; ?></td>
                    <td><?= $d->hari; ?></td>
                    <td><?= $d->jammasuk; ?></td>
                    <td><?= $d->jampulang; ?></td>
                    <td>
                      <div class="khdokter form-check">
                        <input type="checkbox" class="form-check-input"
                        <?= $d->is_active == 1? 'checked' : null ?> onchange="return setKehadiran('<?= $d->id ?>, <?= $d->is_active?>')">
                        <label class="form-check-label" for="hadir">Aktif</label>
                      </div>
                    </td>
                  </tr>
                  <?php $i++; ?>
                  <?php endforeach; ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
  <!-- /.container-fluid -->
</div>

<!-- Modal -->
<div class="modal fade" id="newMenuModal" tabindex="-1" role="dialog" aria-labelledby="newMenuModalLabel"
  aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?= base_url('dokter'); ?>" method="post">
        <div class="modal-body">
          <div class="form-group">
            <input type="text" class="form-control" id="ndokter" name="ndokter"
            placeholder="Nama Dokter">
          </div>
          <div class="form-group">
            <select name="bdokter" id="bdokter" class="form-control">
              <option value=""> Pilih Bidang Dokter </option>
              <option value="Dokter Umum"> Dokter Umum </option>
              <option value="Dokter Kandungan"> Dokter Kandungan </option>
              <option value="Dokter Mata"> Dokter Mata </option>
              <option value="Dokter Gigi"> Dokter Gigi </option>
              <option value="Dokter Penyakit Dalam"> Dokter Penyakit Dalam </option>
              <option value="Dokter THT"> Dokter THT </option>
            </select>
          </div>

          <div class="form-group">
            <select name="hari" id="hari" class="form-control">
              <option value=""> Pilih Hari </option>
              <option value="Senin"> Senin </option>
              <option value="Selasa"> Selasa </option>
              <option value="Rabu"> Rabu </option>
              <option value="Kamis"> Kamis </option>
              <option value="Jumat"> Jumat </option>
              <option value="Sabtu"> Sabtu </option>
              <option value="Minggu"> Minggu </option>
            </select>
          </div>

          <div class="form-group">
            <input type="text" class="form-control" id="jammasuk" name="jammasuk"
            placeholder="Jam Masuk">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" id="jampulang" name="jampulang"
            placeholder="Jam Pulang">
          </div>
        </div>
      </form>
    </div>
  </div>
</div>

<!--MY SCRIPTS-->
<script type="text/javascript">
  function setKehadiran(data) {
    const id = data.split(',')[0]
    const isActive = data.split(',')[1]


    if (isActive == 0) {
      window.location.href = 'khdokter/check/'+id
    } else if (isActive == 1) {
      window.location.href = 'khdokter/uncheck/'+id
    }
  }
</script> 