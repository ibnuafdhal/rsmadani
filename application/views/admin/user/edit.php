<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
  <div class="card mb-3">
    <div class="card-body">
      <form action="<?= base_url('admin/user/edit') ?>" method="post" enctype="multipart/form-data">
        <div class="row">
          <img src="<?= $user['image'] ? base_url('assets/images/profile/' . $user['image']) : base_url('assets/img/profile/default.jpg') ?>" alt="user image" class="rounded-circle col-md-3 col-sm-12" width="75">
          <div class="form-group col-md-9 col-sm-12">
            <label for="image">Ubah Gambar</label>
            <br />
            <input type="file" class="file-form-control" name="img" />
          </div>

          <div class="form-group col-md-6 col-sm-12">
            <label for="name">Nama</label>
            <input type="text" name="name" id="name" class="form-control" placeholder="Nama anda... ">
          </div>

          <div class="form-group col-md-6 col-sm-12">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" class="form-control" placeholder="Email anda... ">
            <small class="text-warning">dengan mengganti email anda akan mengubah info login ke admin panel</small>
          </div>
          <div class="col-12">
            <h4>Ganti Password</h4>
            <small class="text-warning">dengan mengganti password anda akan mengubah info login ke admin panel</small>
          </div>
          <div class="form-group col-md-6 col-sm-12">
            <label for="oldpass">Password Lama</label>
            <input type="password" class="form-control oldpass" name="oldpass" id="oldpass" placeholder="Password lama...">
          </div>
          <div class="col-md-6 col-sm-12">
            <div class="form-group">
              <label for="newpass">Password Baru</label>
              <input type="password" class="form-control newpass" name="newpass" placeholder="Password baru... ">
            </div>
            <div class="form-group">
              <label for="newpassconf">Konfirmasi Password Baru</label>
              <input type="password" class="form-control newpassconf" name="newpassconf" placeholder="Konfirmasi password baru... ">
              <div class="form-alert mt-3"></div>
            </div>
          </div>
          <div class="form-group col-12 text-center">
            <a href="<?= base_url('admin/user') ?>" class="btn btn-secondary">Batal</a>
            <button type="submit" class="btn btn-success btnchangepass">Ubah</button>
          </div>
        </div>
      </form>
    </div>
  </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<script>
  const newpass = document.querySelector('.newpass')
  const newpassconf = document.querySelector('.newpassconf')
  const btnchangepass = document.querySelector('.btnchangepass')
  const formAlert = document.querySelector('.form-alert')

  newpass.addEventListener('keyup', () => {
    if (newpass.value !== '' || newpassconf.value !== '') {
      btnchangepass.setAttribute('disabled', true)
    } else {
      btnchangepass.removeAttribute('disabled', true)
      formAlert.innerHTML = ''
      newpassconf.classList.remove("is-invalid")
      newpassconf.classList.remove("is-valid")
    }
  })

  newpassconf.addEventListener('keyup', () => {
    if (newpassconf === '') {
      newpassconf.classList.remove("is-invalid")
      formAlert.innerHTML = ''
    } else {
      if (newpass.value !== newpassconf.value) {
        formAlert.innerHTML = '<div class="alert alert-danger">Pastikan password dan konfirmasi sudah sesuai!</div>'
        newpassconf.classList.add("is-invalid")
        btnchangepass.setAttribute('disabled', true)
      } else {
        formAlert.innerHTML = ''
        newpassconf.classList.remove("is-invalid")
        newpassconf.classList.add("is-valid")
        btnchangepass.removeAttribute('disabled', true)
      }
    }
  })
</script>