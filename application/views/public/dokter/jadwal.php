  <main class="container-fluid my-3">
      <div class="jumbotron jumbotron-fluid text-center bg-white mb-3">
          <br>
          <br>
          <h1 class="m-3">Jadwal Dokter</h1>
      </div>

      <section id="jadwaldokter">
          <div class="card">
              <div class="card-header">
                  <!-- <h4>JADWAL DOKTER</h4> -->
              </div>
              <div class="card-body">
                  <?php foreach ($dokter as $d) : ?>
                  <div class="mb-5">
                      <div class="mb-3 row">
                          <img src="<?= $d->gambar ? base_url('assets/img/dokter/' . $d->gambar) : 'https://placehold.it/150' ?>"
                              class="col-4" alt="<?= $d->ndokter ?>" style="max-width: 100px">
                          <div class="col-8">
                              <strong><?= $d->ndokter ?></strong>
                              <br />
                              <small class="text-muted"><?= $d->bdokter ?></small>
                          </div>
                      </div>
                      <div class="table-responsive">
                          <h5><i class="fa fa-info-circle"></i> Jadwal</h5>
                          <table class="table">
                              <thead>
                                  <th scope="row">Senin</th>
                                  <th>Selasa</th>
                                  <th>Rabu</th>
                                  <th>Kamis</th>
                                  <th>Jumat</th>
                                  <th>Sabtu</th>
                              </thead>
                              <tbody>
                                  <td scope="col">
                                      <?= strtoupper($d->hari) === 'SENIN' ? $d->jammasuk . ' - ' . $d->jampulang : null; ?>
                                  </td>
                                  <td scope="col">
                                      <?= strtoupper($d->hari) === 'SELASA' ? $d->jammasuk . ' - ' . $d->jampulang : null; ?>
                                  </td>
                                  <td scope="col">
                                      <?= strtoupper($d->hari) === 'RABU' ? $d->jammasuk . ' - ' . $d->jampulang : null; ?>
                                  </td>
                                  <td scope="col">
                                      <?= strtoupper($d->hari) === 'KAMIS' ? $d->jammasuk . ' - ' . $d->jampulang : null; ?>
                                  </td>
                                  <td scope="col">
                                      <?= strtoupper($d->hari) === 'JUMAT' ? $d->jammasuk . ' - ' . $d->jampulang : null; ?>
                                  </td>
                                  <td scope="col">
                                      <?= strtoupper($d->hari) === 'SABTU' ? $d->jammasuk . ' - ' . $d->jampulang : null; ?>
                                  </td>
                              </tbody>
                          </table>
                      </div>
                  </div>
                  <?php endforeach; ?>
              </div>
          </div>
      </section>
  </main>