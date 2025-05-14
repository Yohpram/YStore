<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - X Store</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: #ffffff;
            margin: 0;
            padding-top: 56px;
        }

        .dashboard-box {
            background: #f8f9fa;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
            text-align: center;
            max-width: 400px;
            width: 100%;
            transition: transform 0.3s ease-in-out;
            margin-top: 50px;
        }

        .dashboard-box:hover {
            transform: scale(1.03);
        }

        .btn-danger {
            background-color: #dc3545;
            border: none;
            font-size: 16px;
            padding: 10px;
            border-radius: 8px;
            transition: background 0.3s;
        }

        .btn-danger:hover {
            background: #b02a37;
        }

        .avatar {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            object-fit: cover;
            border: 4px solid #6c757d;
            margin-bottom: 15px;
        }

        h2 {
            color: #343a40;
        }

        p {
            color: #555;
        }
    </style>
</head>
<body>

<!-- Navbar -->
<div class="fixed-top">
    <?php try {
        echo view('partials/navbar');
    } catch (\Throwable $e) {
        echo "<div class='alert alert-danger text-center'>Navbar error: " . $e->getMessage() . "</div>";
    } ?>
</div>

<div class="container d-flex justify-content-center align-items-center" style="min-height: 90vh;">
    <div class="dashboard-box">
        <h2 class="mb-3">User Profile</h2>

        <?php
        // Jika belum login, redirect ke login page
        if (!session()->has('user')) {
            header("Location: " . site_url('auth/login'));
            exit;
        }

        $user = session('user');

        // Tangani avatar path dengan benar
        if (!empty($user['avatar']) && filter_var($user['avatar'], FILTER_VALIDATE_URL)) {
            $avatar = $user['avatar']; // Avatar dari Google login misalnya
        } else {
            $avatarFile = $user['avatar'] ?? 'icon.jpg';
            $avatar = base_url('uploads/' . $avatarFile); // Avatar dari local file
        }
        ?>

        <!-- Avatar -->
        <img src="<?= htmlspecialchars($avatar) ?>" alt="Avatar" class="avatar">

        <!-- Nama -->
        <h2 class="mb-3"><?= htmlspecialchars($user['name'] ?? 'User') ?></h2>

        <!-- Email -->
        <p class="mb-1"><strong>Email:</strong> <?= htmlspecialchars($user['email'] ?? 'No Email') ?></p>

        <!-- Logout -->
        <a href="<?= site_url('auth/logout') ?>" class="btn btn-danger w-100 mt-3">Logout</a>
    </div>
</div>

<?= $this->include('layouts/footer'); ?>
</body>
</html>
