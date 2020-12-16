  <main class="container-fluid my-3">
      <div class="jumbotron jumbotron-fluid text-center bg-white mb-3">
          <h1 class="m-3">Tentang Kami</h1>
      </div>

      <section id="tentang" class="mx-auto">
          <div class="text-center">
              <img src="https://placehold.it/300" alt="Logo" class="img-fluid mb-3" style="max-width: 300px">
              <div id="visi">
                  <h4>Visi</h4>
                  <p>
                      <?= $tentang['visi'] ?>
                  </p>
              </div>

              <div id="misi">
                  <h4>Misi</h4>
                  <p>
                      <?= $tentang['misi'] ?>
                  </p>
              </div>
          </div>
      </section>
  </main>