<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('assets/css/login.css') ?>">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="icon" href="<?= base_url('assets/uploads/logo/favicon.ico') ?>" type="image/x-icon">
</head>

<header class="position-absolute top-0 start-0 p-3">
    <a href="<?= base_url('Beranda') ?>" class="btn btn-outline-light d-flex align-items-center gap-2 shadow-sm rounded-pill px-3 py-2">
        <i class="bi bi-arrow-left fs-5"></i>
        <span class="fw-semibold">Back</span>
    </a>
</header>

<body class="bg-light d-flex align-items-center" style="height: 100vh;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card shadow-lg rounded-4">
                    <div class="card-body p-4">
                        <h3 class="text-center mb-4">Login</h3>

                        <?php if (session()->getFlashdata('error')) : ?>
                            <div class="alert alert-danger">
                                <?= session()->getFlashdata('error') ?>
                            </div>
                        <?php endif; ?>

                        <form action="/login/process" method="post">
                            <div class="mb-3">
                                <label for="username" class="form-label">Username</label>
                                <input type="text" name="username" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" name="password" class="form-control" required>
                            </div>
                            <button type="submit" class="btn btn-primary w-100">Login</button>
                        </form>

                        <div class="mt-3 text-center">
                            <small>&copy; <?= date('Y') ?> Praktek Bidan Mandiri</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>