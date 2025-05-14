<footer class="bg-dark text-light py-4 mt-auto">
    <div class="container">
        <div class="row">
            <!-- Kolom 1: Tentang -->
            <div class="col-md-4">
                <h5 class="text-warning">Tentang YStore</h5>
                <p class="small">YStore adalah toko online terbaik dengan produk berkualitas.</p>
            </div>

            <!-- Kolom 2: Navigasi -->
            <div class="col-md-4">
                <h5 class="text-warning">Navigasi</h5>
                <ul class="list-unstyled">
                    <li><a href="<?= site_url('/dashboard') ?>" class="text-light text-decoration-none">Beranda</a></li>
                    <li><a href="<?= site_url('/produk') ?>" class="text-light text-decoration-none">Produk</a></li>
                    <li><a href="<?= site_url('/akun') ?>" class="text-light text-decoration-none">Akun</a></li>
                </ul>
            </div>

            <!-- Kolom 3: Kontak -->
            <div class="col-md-4">
                <h5 class="text-warning">Hubungi Kami</h5>
                <p class="small mb-1">Email: support@Ystore.com</p>
                <p class="small mb-3">Telp: +62 812-3456-7890</p>

                <!-- Ikon Media Sosial -->
                <div class="d-flex gap-3">
                    <a href="https://www.linkedin.com/in/yohanes-walwiyo" target="_blank" class="text-light fs-4">
                        <i class="bi bi-linkedin"></i>
                    </a>
                    <a href="#" class="text-light fs-4"><i class="bi bi-twitter"></i></a>
                    <a href="#" class="text-light fs-4"><i class="bi bi-instagram"></i></a>
                    <a href="#" class="text-light fs-4"><i class="bi bi-youtube"></i></a>
                </div>
            </div>
        </div>

        <hr class="bg-secondary">
        <p class="text-center small mb-0">&copy; 2024 YStore. All Rights Reserved.</p>
    </div>
</footer>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">