<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <?php if (isset($page)): ?>
        <link rel="stylesheet" href="<?= base_url("assets/css/{$page}.css") ?>">
    <?php endif; ?>
    <link rel="stylesheet" href="<?= base_url('assets/css/header.css') ?>">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <title><?= $title ?? 'My Website' ?></title>
    <link rel="icon" href="<?= base_url('assets/uploads/logo/favicon.ico') ?>" type="image/x-icon">
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-gradient-custom shadow-sm py-3">
            <div class="container">
                <a class="navbar-brand d-flex align-items-center" href="<?= base_url('Beranda') ?>">
                    <img src="<?= base_url('assets/uploads/logo/img_logo_bidan.png') ?>" alt="Logo" width="40" height="40" class="me-2 rounded-circle">
                    <span class="fw-bold">Praktek Mandiri Bidan</span>
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                    <ul class="navbar-nav align-items-center gap-2">
                        <li class="nav-item">
                            <a class="nav-link nav-custom <?= (uri_string() == 'Beranda') ? 'active' : '' ?>" href="<?= base_url('Beranda') ?>">
                                <i class="bi bi-house-door me-1"></i> Beranda
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link nav-custom <?= (uri_string() == 'Tentang_Kami') ? 'active' : '' ?>" href="<?= base_url('Tentang_Kami') ?>">
                                <i class="bi bi-info-circle me-1"></i> Tentang Kami
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link nav-custom <?= (uri_string() == 'Jasa_Layanan') ? 'active' : '' ?>" href="<?= base_url('Jasa_Layanan') ?>">
                                <i class="bi bi-tools me-1"></i> Jasa Layanan
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle nav-custom <?= (uri_string() == 'Kontak' || uri_string() == 'login') ? 'active' : '' ?>" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="bi bi-telephone me-1"></i> Hubungi Kami
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end shadow-sm">
                                <li><a class="dropdown-item" href="<?= base_url('Kontak') ?>">Kontak</a></li>
                                <li><a class="dropdown-item" href="<?= base_url('login') ?>">Login</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>