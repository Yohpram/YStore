<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="d-flex flex-column min-vh-100"> <!-- Tambahkan Flexbox -->

    <?= $this->include('partials/navbar'); ?>

    <div class="container mt-5 flex-grow-1"> <!-- flex-grow-1 agar mengisi ruang kosong -->
        <h2>Selamat datang di Website YStore</h2>
        <p>Text XXX.</p>
    </div>

    <!-- Tambahkan Footer -->
    <?= $this->include('layouts/footer'); ?>

</body>
</html>
