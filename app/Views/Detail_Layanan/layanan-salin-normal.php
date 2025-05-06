<?= $this->include('layouts/header.php') ?>


<section class="hero" id="beranda">
    <?php
    if (isset($gambarDetailLayanan[6])) {
        $gambar = $gambarDetailLayanan[6];
    }
    ?>
    <style>
        .hero {
            background-image: url('<?= base_url($gambar['path'] . $gambar['nama_file']) ?>');
        }
    </style>
    <main class="content">
        <h1>Persalinan Normal.</h1>
    </main>
</section>
<section class="section-deskripsi py-5">
    <div class="container d-flex flex-column flex-md-row align-items-center gap-4">
        <?php
        if (isset($gambarDetailLayanan[7])) {
            $gambar = $gambarDetailLayanan[7];
        }
        ?>
        <img src="<?= base_url($gambar['path'].$gambar['nama_file']) ?>" class="card-img" alt="Perawatan Bayi" style="max-width: 250px;">
        <div>
            <h2 class="section-title text-center mb-4">Apa Itu Persalinan Normal?</h2>
            <p style="text-align: justify;">
                Persalinan normal adalah proses melahirkan bayi secara alami melalui jalan lahir (vagina) tanpa bantuan tindakan operasi.
                Proses ini umumnya berlangsung secara fisiologis dan terjadi ketika kehamilan sudah cukup bulan, yaitu antara 37–42 minggu.
                Persalinan normal dapat berlangsung aman dan lancar jika ibu dan janin berada dalam kondisi sehat serta tidak terdapat faktor risiko atau komplikasi.
            </p>
            <p style="text-align: justify;">
                Di Praktek Mandiri Bidan Ny. Anis Qori’ah, kami memberikan pendampingan menyeluruh mulai dari pemeriksaan kehamilan rutin, persiapan menjelang persalinan, hingga proses melahirkan yang aman dan nyaman.
                Kami mengutamakan pendekatan yang tenang, suportif, dan penuh empati, sehingga ibu dapat menjalani pengalaman persalinan dengan lebih percaya diri dan tenang.
                Tim kami siap memberikan dukungan fisik dan emosional sepanjang proses persalinan, serta memastikan keselamatan ibu dan bayi menjadi prioritas utama.
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
                        <h5 class="fw-bold mb-2">Harga Mulai dari</h5>
                        <div class="harga-range mb-2">
                            <p class="mb-1">Gratis untuk Pasien BPJS</p>
                            <p class="mb-1">Umum: Rp1.500.000 – Rp2.000.000</p>
                        </div>
                        <small class="text-muted">*Harga sesuai jenis layanan</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?= $this->include('layouts/footer.php') ?>