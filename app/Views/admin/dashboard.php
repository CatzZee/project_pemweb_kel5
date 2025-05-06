<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('assets/css/dashboard.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/header.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/footer.css') ?>">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <title>Dashboard</title>
</head>

<body>
    <!-- header ya -->
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-gradient-custom">
            <div class="container">
                <a class="navbar-brand fw-bold text-light" href="<?= base_url('dashboard') ?>">Praktek Mandiri</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                    <ul class="navbar-nav align-items-center">
                        <li class="nav-item">
                            <a class="nav-link nav-custom <?= (uri_string() == 'dashboard') ? 'active' : '' ?>" href="<?= base_url('dashboard') ?>">
                                <i class="bi bi-house-door me-1"></i> Dashboard
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link nav-custom <?= (uri_string() == 'logout') ? 'active' : '' ?>" href="<?= base_url('logout') ?>">
                                <i class="bi bi-box-arrow-right me-1"></i> Logout
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!-- header ya -->

    <!-- isi -->
    <h1 class="text-center my-4 text-primary">
        <i class="bi bi-images"></i> Data Foto
    </h1>


    <!-- Ini untuk alert succes/eror -->
    <div class="container"> <?php if (session()->getFlashdata('success')) : ?>
            <div class="alert alert-success">
                <?= session()->getFlashdata('success') ?>
            </div>
        <?php elseif (session()->getFlashdata('error')) : ?>
            <div class="alert alert-danger">
                <?= session()->getFlashdata('error') ?>
            </div>
        <?php endif; ?>
    </div>
    <!-- Ini untuk alert succes/eror -->


    <!-- tabel -->
    <div class="container">
        <div class="table-responsive">
            <table class="table table-bordered table-hover table-custom bg-danger ">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Foto</th>
                        <th>Nama Foto</th>
                        <th>Halaman</th>
                        <th>Tombol</th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                    $no = 1;
                    // FORM GANTI GAMBAR BERANDA
                    foreach ($gambar_beranda as $beranda): ?>
                        <tr>
                            <td> <?= $no++ ?> </td>
                            <td>
                                <img src="<?= base_url($beranda['path'] . $beranda['nama_file']) ?>" alt="<?= esc($beranda['foto']) ?>" width="100" class="img-thumbnail">
                            </td>
                            <td> <?= esc($beranda['foto']) ?> </td>
                            <td> Beranda </td>
                            <td>
                                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#<?= esc($beranda['nama_file']) ?>">Edit Gambar</button>
                                <div class="modal fade" id="<?= esc($beranda['nama_file']) ?>" tabindex="-1" aria-labelledby="formModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="formModalLabel">Ganti Gambar</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <form action="<?= esc($beranda['path'] . $beranda['id']) ?>" method="post" enctype="multipart/form-data">
                                                <div class="modal-body">
                                                    <input type="file" name="gambar" class="form-control" accept=".png, .jpg, .jpeg" required>
                                                    <div class="form-text text-end text-muted">
                                                        *Format gambar wajib: .jpg, .jpeg, .png
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="submit" class="btn btn-success">Upload</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        <?php endforeach; ?>

                        <?php
                        // FORM GANTI GAMBAR TENTANG_KAMI
                        foreach ($gambar_tentang_kami as $tentang_kami): ?>
                        <tr>
                            <td> <?= $no++ ?> </td>
                            <td>
                                <img src="<?= base_url($tentang_kami['path'] . $tentang_kami['nama_file']) ?>" alt="<?= esc($tentang_kami['foto']) ?>" width="100" class="img-thumbnail">
                            </td>
                            <td> <?= esc($tentang_kami['foto']) ?> </td>
                            <td> tentang_kami </td>
                            <td>
                                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#<?= esc($tentang_kami['nama_file']) ?>">Edit Gambar</button>
                                <div class="modal fade" id="<?= esc($tentang_kami['nama_file']) ?>" tabindex="-1" aria-labelledby="formModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="formModalLabel">Ganti Gambar</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <form action="<?= esc($tentang_kami['path'] . $tentang_kami['id']) ?>" method="post" enctype="multipart/form-data">
                                                <div class="modal-body">
                                                    <input type="file" name="gambar" class="form-control" accept=".png, .jpg, .jpeg" required>
                                                    <div class="form-text text-end text-muted">
                                                        *Format gambar wajib: .jpg, .jpeg, .png
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="submit" class="btn btn-success">Upload</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    <?php endforeach; ?>

                    <?php
                    // FORM GANTI JASA LAYANAN
                    foreach ($gambar_jasa_layanan as $jasa_layanan): ?>
                        <tr>
                            <td> <?= $no++ ?> </td>
                            <td>
                                <img src="<?= base_url($jasa_layanan['path'] . $jasa_layanan['nama_file']) ?>" alt="<?= esc($jasa_layanan['foto']) ?>" width="100" class="img-thumbnail">
                            </td>
                            <td> <?= esc($jasa_layanan['foto']) ?> </td>
                            <td> jasa layanan </td>
                            <td>
                                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#<?= esc($jasa_layanan['nama_file']) ?>">Edit Gambar</button>
                                <div class="modal fade" id="<?= esc($jasa_layanan['nama_file']) ?>" tabindex="-1" aria-labelledby="formModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="formModalLabel">Ganti Gambar</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <form action="<?= esc($jasa_layanan['path'] . $jasa_layanan['id']) ?>" method="post" enctype="multipart/form-data">
                                                <div class="modal-body">
                                                    <input type="file" name="gambar" class="form-control" accept=".png, .jpg, .jpeg" required>
                                                    <div class="form-text text-end text-muted">
                                                        *Format gambar wajib: .jpg, .jpeg, .png
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="submit" class="btn btn-success">Upload</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        <?php endforeach; ?>
                        </tr>

                        <?php
                        // FORM GANTI JASA LAYANAN
                        foreach ($gambar_detail_layanan as $detail_layanan): ?>
                            <tr>
                                <td> <?= $no++ ?> </td>
                                <td>
                                    <img src="<?= base_url($detail_layanan['path'] . $detail_layanan['nama_file']) ?>" alt="<?= esc($detail_layanan['foto']) ?>" width="100" class="img-thumbnail">
                                </td>
                                <td> <?= esc($detail_layanan['foto']) ?> </td>
                                <td> detail layanan </td>
                                <td>
                                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#<?= esc($detail_layanan['nama_file']) ?>">Edit Gambar</button>
                                    <div class="modal fade" id="<?= esc($detail_layanan['nama_file']) ?>" tabindex="-1" aria-labelledby="formModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="formModalLabel">Ganti Gambar</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <form action="<?= esc($detail_layanan['path'] . $detail_layanan['id']) ?>" method="post" enctype="multipart/form-data">
                                                    <div class="modal-body">
                                                        <input type="file" name="gambar" class="form-control" accept=".png, .jpg, .jpeg" required>
                                                        <div class="form-text text-end text-muted">
                                                            *Format gambar wajib: .jpg, .jpeg, .png
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="submit" class="btn btn-success">Upload</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            <?php endforeach; ?>
                            </tr>
                            <!-- untuk ganti logo -->
                            <?php
                            foreach ($gambar_logo as $logo): ?>
                                <tr>
                                    <td> <?= $no++ ?> </td>
                                    <td>
                                        <img src="<?= base_url($logo['path'] . $logo['nama_file']) ?>" alt="<?= esc($logo['foto']) ?>" width="100" class="img-thumbnail">
                                    </td>
                                    <td> <?= esc($logo['foto']) ?> </td>
                                    <td> Logo </td>
                                    <td>
                                        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#<?= esc($logo['nama_file']) ?>">Edit Gambar</button>
                                        <div class="modal fade" id="<?= esc($logo['nama_file']) ?>" tabindex="-1" aria-labelledby="formModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="formModalLabel">Ganti Gambar</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <form action="<?= esc($logo['path'] . $logo['id']) ?>" method="post" enctype="multipart/form-data">
                                                        <div class="modal-body">
                                                            <input type="file" name="gambar" class="form-control" accept=".png, .jpg, .jpeg" required>
                                                            <div class="form-text text-end text-muted">
                                                                *Format gambar wajib: .jpg, .jpeg, .png
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="submit" class="btn btn-success">Upload</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                <?php endforeach; ?>
                                </tr>
                </tbody>
            </table>
        </div>
    </div>
    <!-- tabel -->
    <!-- isi -->

    <!-- footer jan di ganggu gugat -->
    <?= $this->include('layouts/footer') ?>