<footer class="bg-dark py-5 p-3 mt-5">
    <div class="row border-bottom border-white m-3">
        <div class="col-md-6 col-sm-12">
            <div class="footer">
                <img src="<?= base_url('assets/img/logo.png') ?>" alt="logo rs" class="img-fluid">
                <div class="sosial">
                    <span class="text-muted m-2">Ikuti Kami</span>
                    <i class="fa fa-facebook text-white m-2"></i>
                    <i class="fa fa-twitter text-white m-2"></i>
                    <i class="fa fa-instagram text-white m-2"></i>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-sm-12">
            <div class="footer">
                <h4 class="text-white border-bottom border-danger d-inline">Menu</h4>
                <ul class="list-style-none" style="list-style: none">
                    <li class="py-1"><a href="<?= base_url('public/tentang') ?>" class="text-white">Tentang Kami</a>
                    </li>
                    <li class="py-1"><a href="<?= base_url('public/artikel') ?>" class="text-white">Artikel
                            Kesehatan</a></li>
                    <li class="py-1"><a href="<?= base_url('public/layanan') ?>" class="text-white">Pelayanan Kami</a>
                    </li>
                    <li class="py-1"><a href="<?= base_url('public/contact') ?>" class="text-white">Hubungi Kami</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>

<!--scripts-->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
    integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
</script>
<script type="text/javascript" charset="utf-8">
function collapseDokter() {
    const dokterCard = $('.dokter-card')

    dokterCard.toggleClass('uncollapse')
}
</script>
</body>

</html>