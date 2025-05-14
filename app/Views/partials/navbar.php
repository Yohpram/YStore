<nav class="navbar navbar-expand-lg navbar-dark bg-black">
    <div class="container">
        <!-- Logo -->
        <a class="navbar-brand" href="<?= site_url('/dashboard') ?>">
            <img id="logo" src="<?= base_url('uploads/logo.jpg') ?>" alt="YStore Logo" width="50" height="50" class="d-inline-block align-text-top">
        </a>

        <!-- Toggle Button (mobile) -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navbar Links -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link" href="<?= site_url('/produk') ?>">Produk</a>
                </li>
            </ul>

            <ul class="navbar-nav">
                <?php 
                    $isLoggedIn = session()->get('logged_in');
                    $user = session()->get('user');
                    
                    // Tangani avatar path dengan fallback
                    if (!empty($user['avatar']) && filter_var($user['avatar'], FILTER_VALIDATE_URL)) {
                        $avatar = $user['avatar'];
                    } else {
                        $avatarFilename = $user['avatar'] ?? 'icon.jpg';
                        $avatar = base_url('uploads/' . $avatarFilename);
                    }
                ?>

                <?php if ($isLoggedIn) : ?>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle d-flex align-items-center" href="#" id="userDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="<?= htmlspecialchars($avatar) ?>" alt="Avatar" class="rounded-circle me-2" width="35" height="35">
                            <span><?= htmlspecialchars($user['name'] ?? 'User') ?></span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
                            <li><a class="dropdown-item" href="<?= site_url('/akun') ?>">Profil</a></li>
                            <li><a class="dropdown-item text-danger" href="<?= site_url('/auth/logout') ?>">Logout</a></li>
                        </ul>
                    </li>
                <?php else : ?>
                    <li class="nav-item">
                        <a class="nav-link btn btn-primary text-white" href="<?= site_url('/auth/login') ?>">Login</a>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</nav>

<!-- Logo Animation CSS -->
<style>
    @keyframes logoClick {
        0% { transform: scale(1) rotate(0deg); }
        50% { transform: scale(1.2) rotate(10deg); }
        100% { transform: scale(1) rotate(0deg); }
    }

    .animate-logo {
        animation: logoClick 0.4s ease-in-out;
    }
</style>

<!-- Logo Animation JS -->
<script>
    document.getElementById("logo").addEventListener("click", function() {
        this.classList.add("animate-logo");
        setTimeout(() => {
            this.classList.remove("animate-logo");
        }, 400);
    });
</script>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
