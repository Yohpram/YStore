<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - X Store</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Background Halaman */
        body {
            background: linear-gradient(to right, #1a1a2e, #16213e);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        /* Box Register */
        .register-box {
            background: #000; /* Hitam pekat */
            padding: 35px;
            border-radius: 12px;
            box-shadow: 0 8px 16px rgba(0, 168, 255, 0.3); /* Efek glow biru */
            width: 100%;
            max-width: 400px;
            text-align: center;
            transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
        }
        .register-box:hover {
            transform: scale(1.02);
            box-shadow: 0 10px 20px rgba(0, 168, 255, 0.5);
        }

        /* Warna Teks */
        h2 {
            color: #ffcc00; /* Kuning emas */
            text-shadow: 0 0 8px rgba(255, 204, 0, 0.8); /* Efek glow */
        }
        label, p {
            color: #f8f9fa; /* Abu-abu terang */
        }

        /* Input */
        .form-control {
            background: #1a1a2e; /* Gelap */
            border: 1px solid #00a8ff; /* Biru Neon */
            color: white;
        }
        .form-control:focus {
            background: #222;
            color: white;
            border-color: #00a8ff;
            box-shadow: 0 0 5px rgba(0, 168, 255, 0.5);
        }

        /* Tombol */
        .btn-primary {
            background-color: #00a8ff; /* Biru neon */
            border: none;
            padding: 12px 20px;
            font-size: 1.1rem;
            transition: background 0.3s ease-in-out, transform 0.2s;
            color: white;
            border-radius: 8px;
        }
        .btn-primary:hover {
            background-color: #007bb5;
            transform: scale(1.05);
        }
    </style>
</head>
<body>

<div class="register-box">
    <h2 class="text-center mb-4">Register</h2>

    <?php if (session()->getFlashdata('error')) : ?>
        <div class="alert alert-danger"><?= session()->getFlashdata('error') ?></div>
    <?php endif; ?>

    <form action="<?= site_url('auth/registerProcess') ?>" method="POST">
        <div class="mb-3">
            <label class="form-label">Nama</label>
            <input type="text" name="name" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="email" name="email" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Password</label>
            <input type="password" name="password" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary w-100">Register</button>
    </form>

    <p class="text-center mt-3">Sudah punya akun? <a href="<?= site_url('auth/login') ?>" style="color: #00a8ff;">Login di sini</a></p>
</div>

</body>
</html>
