<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Y Store</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Background Halaman dengan Gradasi Warna */
        body {
            background: linear-gradient(to right, #1a1a2e, #16213e);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            color: white;
        }

        /* Box Welcome */
        .welcome-box {
            background: #000; /* Hitam */
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 8px 16px rgba(0, 168, 255, 0.3); /* Efek glow biru */
            max-width: 400px;
            width: 90%;
            transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
        }
        .welcome-box:hover {
            transform: scale(1.05);
            box-shadow: 0 10px 20px rgba(0, 168, 255, 0.5);
        }

        /* Warna Teks */
        h2 {
            color: #ffcc00; /* Kuning emas */
            text-shadow: 0 0 8px rgba(255, 204, 0, 0.8); /* Glow efek */
        }
        p {
            color: #f8f9fa; /* Abu-abu terang */
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

        /* Logo */
        .logo {
            width: 120px;
            height: auto;
            margin-bottom: 15px;
        }
    </style>
</head>
<body>

<div class="welcome-box">
    <img src="<?= base_url('uploads/logo.jpg') ?>" alt="YStore Logo" class="logo">
    <h2 class="mb-3">Welcome to <strong>YStore</strong></h2>
    <p>Your one-stop shop for the best products.</p>
    <a href="<?= site_url('/auth/login') ?>" class="btn btn-primary mt-3">Login</a>
</div>

</body>
</html>
