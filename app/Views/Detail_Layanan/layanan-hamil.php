<?= $this->include('layouts/header.php') ?>

<section class="hero" id="beranda">
    <?php
    if (isset($gambarDetailLayanan[2])) {
        $gambar = $gambarDetailLayanan[2];
    }
    ?>
    <style>
        .hero {
            background-image: url('<?= base_url($gambar['path'] . $gambar['nama_file']) ?>');
        }
    </style>
    <main class="content">
        <h1>Pemeriksaan Kehamilan.</h1>
    </main>
</section>
<section class="section-deskripsi py-5">
    <div class="container d-flex flex-column flex-md-row align-items-center gap-4" data-aos="fade-up" data-aos-duration="1000">
        <?php
        if (isset($gambarDetailLayanan[5])) {
            $gambar = $gambarDetailLayanan[5];
        }
        ?>
        <img src="<?= base_url($gambar['path'].$gambar['nama_file']) ?>" class="card-img" alt="Perawatan Bayi" style="max-width: 250px;">
        <div>
            <h2 class="section-title text-center mb-4">Apa Itu Pemeriksaan Kehamilan?</h2>
            <p style="text-align: justify;">
                Pemeriksaan kehamilan atau antenatal care merupakan layanan penting untuk memastikan kesehatan ibu dan janin selama masa kehamilan.
                Pemeriksaan dilakukan secara berkala untuk memantau perkembangan janin, mendeteksi dini risiko kehamilan, serta memberikan informasi dan edukasi yang dibutuhkan oleh ibu hamil.
                Beberapa hal yang diperiksa meliputi tekanan darah, tinggi fundus uteri, berat badan ibu, detak jantung janin, serta kondisi umum kesehatan ibu.
            </p>
            <p style="text-align: justify;">
                Selain pemeriksaan fisik, layanan ini juga mencakup konseling dan edukasi mengenai pola makan, aktivitas harian, tanda-tanda bahaya kehamilan, hingga persiapan menghadapi persalinan.
                Dengan pendampingan yang penuh perhatian dan profesional, kami berkomitmen untuk membantu ibu hamil menjalani kehamilan yang sehat, aman, dan nyaman hingga waktu persalinan tiba.
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
            <div class="col-md-6" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
                <div class="card shadow-sm h-100">
                    <div class="card-body text-center d-flex flex-column justify-content-center">
                        <p class="fw-bold mb-2">Harga Mulai dari</p>
                        <div class="harga-range mb-2">
                            Rp50.000 <br>–<br> Rp75.000
                        </div>
                        <small class="text-muted">*Harga sesuai jenis layanan</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?= $this->include('layouts/footer.php') ?>