<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('assets/css/layanan-KB-kontrasepsi.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/header.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/footer.css') ?>">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-gradient-custom">
            <div class="container">
                <a class="navbar-brand d-flex align-items-center" href="<?= base_url('Beranda') ?>">
                    <img src="<?= base_url('assets/images/logo/logo-bidan.png') ?>" alt="Logo" width="40" height="40" class="me-2" style="border-radius: 50%; object-fit:">
                    Praktek Mandiri Bidan Ny. Anis Qori'ah
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                    <ul class="navbar-nav align-items-center">
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
                            <a class="nav-link dropdown-toggle nav-custom <?= (uri_string() == 'Kontak' || uri_string() == 'Login') ? 'active' : '' ?>" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="bi bi-telephone me-1"></i> Hubungi Kami
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li><a class="dropdown-item" href="<?= base_url('Kontak') ?>">Kontak</a></li>
                                <li><a class="dropdown-item" href="<?= base_url('login') ?>">Login</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <section class="hero" id="beranda">
        <main class="content">
            <h1>KB dan Kontrasepsi.</h1>
        </main>
    </section>
    <section class="section-deskripsi py-5">
        <div class="container d-flex flex-column flex-md-row align-items-center gap-4">
        <img src="<?= base_url('assets/images/detail_layanan/KB-kontrasepsi.jpg') ?>" class="card-img" alt="Perawatan Bayi" style="max-width: 250px;">
            <div>
                <h2 class="section-title text-center mb-4">Apa Itu KB dan Kontrasepsi?</h2>
                <p style="text-align: justify;">
                    Layanan Keluarga Berencana (KB) bertujuan membantu pasangan dalam merencanakan kehamilan sesuai dengan kesiapan fisik, mental, dan ekonomi. 
                    Melalui konsultasi KB, bidan akan memberikan informasi dan edukasi tentang berbagai metode kontrasepsi yang aman dan sesuai dengan kebutuhan masing-masing individu. 
                    Pendekatan ini membantu menjaga kesehatan reproduksi ibu serta mendukung tumbuh kembang keluarga yang seimbang.
                </p>
                <p style="text-align: justify;">
                    Beberapa pilihan kontrasepsi yang tersedia antara lain suntik KB, yang diberikan setiap 1 atau 3 bulan; IUD (alat kontrasepsi dalam rahim) yang efektif dalam jangka panjang; implan yang dipasang di bawah kulit lengan dan bekerja hingga 3 tahun; serta pil KB yang diminum setiap hari. 
                    Setiap metode memiliki keunggulan dan cara kerja yang berbeda, dan kami siap membantu Anda memilih yang paling tepat melalui konsultasi yang nyaman dan menyeluruh.
                </p>
            
                <a href="<?= base_url('Kontak') ?>" class="btn btn-primary mt-2">Pesan Layanan</a>
            </div>
        </div>
    </section>
    <section class="jadwal-harga py-5 bg-light">
        <div class="container">
            <div class="row justify-content-center g-4">
                <div class="col-md-6">
                    <div class="card shadow-sm h-100">
                        <div class="card-body text-center">
                            <h5 class="card-title mb-3">Bidan Ny. Anis Qori'ah</h5>
                            <p class="fw-bold mb-1">Jadwal Praktek</p>
                            <p class="mb-0">Senin - Sabtu</p>
                            <p class="mb-2">06.00 WIB & 14.00 – 22.00 WIB</p>
                            <p class="mb-2 fw-semibold">Persalinan: 24 Jam</p>
                            <p class="text-muted mb-0">Dapat Melayani Homecare</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card shadow-sm h-100">
                        <div class="card-body text-center d-flex flex-column justify-content-center">
                            <p class="fw-bold mb-2">Harga Mulai dari</p>
                            <div class="harga-range mb-2">
                                Rp30.000 <br>–<br> Rp500.000
                            </div>
                            <small class="text-muted">*Harga sesuai jenis layanan</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="bg-dark text-white mt-auto py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-3">
                    <h5>Praktek Mandiri Bidan Ny. Anis Qori'ah</h5>
                    <p>Kami siap melayani kebutuhan Anda dengan profesional.</p>
                </div>
                <div class="col-md-4 mb-3">
                    <h5>Jasa Layanan</h5>
                    <ul class="list-unstyled">
                        <li><a href="<?= base_url('Detail_Layanan/Periksa Kehamilan')  ?>" class="text-white text-decoration-none">Pemeriksaan Kehamilan</a></li>
                        <li><a href="<?= base_url('Detail_Layanan/Persalinan Normal') ?>" class="text-white text-decoration-none">Persalinan Normal</a></li>
                        <li><a href="<?= base_url('Detail_Layanan/Perawatan Bayi dan Ibu Nifas')  ?>" class="text-white text-decoration-none">Perawatan Bayi dan Ibu Nifas</a></li>
                        <li><a href="<?= base_url('Detail_Layanan/KB dan Kontrasepsi') ?>" class="text-white text-decoration-none">KB dan Kontrasepsi</a></li>
                    </ul>
                </div>
                <div class="col-md-4 mb-3">
                    <h5>Kontak Kami</h5>
                    <p>Email: pbm.ny.anisqoriah@gmail.com</p>
                    <p>Telepon: 0812-1754-3530</p>
                    <p>Alamat: Dsn. Kepatihan RT/RW 01/01 Ds. Cluring Kec. Cluring Kab. Banyuwangi Prov. Jawa Timur</p>
                </div>
            </div>
            <div class="text-center mt-3">
                <small>&copy; <?= date('Y') ?> Praktek Mandiri Bidan Ny. Anis Qori'ah. All rights reserved.</small>
            </div>
        </div>
    </footer>

</body>

</html>