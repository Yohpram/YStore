<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - X Store</title>
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

        /* Box Login */
        .login-box {
            background: #000; /* Hitam pekat */
            padding: 35px;
            border-radius: 12px;
            box-shadow: 0 8px 16px rgba(0, 168, 255, 0.3); /* Efek glow biru */
            width: 100%;
            max-width: 400px;
            text-align: center;
            transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
        }
        .login-box:hover {
            transform: scale(1.02);
            box-shadow: 0 10px 20px rgba(0, 168, 255, 0.5);
        }

        /* Warna & Efek Teks */
        h2 {
            font-size: 2rem;
            font-weight: bold;
            color: #ffcc00; /* Kuning emas */
            text-shadow: 0 0 12px rgba(255, 204, 0, 0.9); /* Glow lebih kuat */
        }
        h5 {
            font-size: 1.2rem;
            color: #00a8ff;
            font-weight: bold;
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
            font-weight: bold;
            transition: background 0.3s ease-in-out, transform 0.2s;
            color: white;
            border-radius: 8px;
        }
        .btn-primary:hover {
            background-color: #007bb5;
            transform: scale(1.05);
        }

        /* Link Register */
        .register-link a {
            color: #ffcc00;
            font-weight: bold;
            text-decoration: none;
            transition: color 0.3s ease-in-out;
        }
        .register-link a:hover {
            color: #ffdd55;
            text-decoration: underline;
        }

        /* Tombol Google */
        .google-btn {
            display: inline-block;
            transition: transform 0.2s ease-in-out;
        }
        .google-btn.clicked {
            transform: scale(0.9);
        }
    </style>
</head>
<body>

<div class="login-box">
    <h2 class="text-center mb-4">LOGIN</h2>

    <?php if (session()->getFlashdata('error')) : ?>
        <div class="alert alert-danger"><?= session()->getFlashdata('error') ?></div>
    <?php endif; ?>

    <form action="<?= site_url('auth/loginProcess') ?>" method="POST">
        <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="email" name="email" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Password</label>
            <input type="password" name="password" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary w-100">LOGIN</button>
    </form>

    <p class="text-center mt-3 register-link">Belum punya akun? <a href="<?= site_url('auth/register') ?>">Daftar di sini</a></p>

    <hr>
    <h5 class="text-center">Atau login dengan</h5>
    
    <div class="d-flex justify-content-center">
        <a href="<?= site_url('auth/googleLogin') ?>" class="google-btn">
            <img src="https://developers.google.com/identity/images/btn_google_signin_light_normal_web.png" 
                 alt="Login with Google">
        </a>
    </div>
</div>

<script>
    document.querySelector('.google-btn').addEventListener('click', function() {
        this.classList.add('clicked');
        setTimeout(() => this.classList.remove('clicked'), 200);
    });
</script>

</body>
</html>
