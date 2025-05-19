<?= $this->include('layouts/header.php') ?>

<section class="hero" id="beranda">
    <?php
    if (isset($gambarDetailLayanan[1])) {
        $gambar = $gambarDetailLayanan[1];
    }
    ?>
    <style>
        .hero {
            background-image: url('<?= base_url($gambar['path'] . $gambar['nama_file']) ?>');
        }
    </style>
    <main class="content">
        <h1>KB dan Kontrasepsi.</h1>
    </main>
</section>
<section class="section-deskripsi py-5">
    <div class="container d-flex flex-column flex-md-row align-items-center gap-4" data-aos="fade-up" data-aos-duration="1000">
        <?php
        if (isset($gambarDetailLayanan[0])) {
            $gambar = $gambarDetailLayanan[0];
        }
        ?>
        <img src="<?= base_url($gambar['path']. $gambar['nama_file']) ?>" class="card-img" alt="Perawatan Bayi" style="max-width: 250px;">
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
            <div class="col-md-6" data-aos= "fade-up" data-aos-delay="100" data-aos-duration="1000">
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
            <div class="col-md-6" data-aos= "fade-up" data-aos-delay="200" data-aos-duration="1000">
                <div class="card shadow-sm h-100">
                    <div class="card-body text-center d-flex flex-column justify-content-center">
                        <p class="fw-bold mb-2">Harga Mulai dari</p>
                        <div class="harga-range mb-2">
                            Rp35.000 <br>–<br> Rp500.000
                        </div>
                        <small class="text-muted">*Harga sesuai jenis layanan</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?= $this->include('layouts/footer.php') ?>