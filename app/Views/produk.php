<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<body class="d-flex flex-column min-vh-100"> <!-- Tambahkan Flexbox -->
<?= $this->include('partials/navbar'); ?>
    <div class="container mt-5">
        <h2>Halaman Produk</h2>
        <p>Daftar produk akan ditampilkan di sini.</p>
        <a href="<?= base_url('/dashboard') ?>" class="btn btn-primary">Back to Home</a>
    </div>
    <?= $this->include('layouts/footer'); ?>
</body>
</html>
