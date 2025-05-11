<?= $this->include('layouts/header.php') ?>

<section class="hero" id="beranda">
    <?php
    if (isset($gambarDetailLayanan[4])) {
        $gambar = $gambarDetailLayanan[4];
    }
    ?>
    <style>
        .hero {
            background-image: url('<?= base_url($gambar['path'] . $gambar['nama_file']) ?>');
        }
    </style>
    <main class="content">
        <h1>Perawatan Bayi dan Ibu Nifas.</h1>
    </main>
</section>
<section class="section-deskripsi py-5">
    <div class="container d-flex flex-column flex-md-row align-items-center gap-4">
        <?php
        if (isset($gambarDetailLayanan[3])) {
            $gambar = $gambarDetailLayanan[3];
        }
        ?>
        <img src="<?= base_url($gambar['path'].$gambar['nama_file']) ?>" class="card-img" alt="Perawatan Bayi" style="max-width: 250px;">
        <div>
            <h2 class="section-title text-center mb-4">Apa Itu Perawatan Bayi Baru Lahir dan Ibu Nifas?</h2>
            <p style="text-align: justify;">
                Layanan perawatan bayi baru lahir kami dirancang khusus untuk memberikan perhatian menyeluruh kepada buah hati Anda sejak hari pertama kehidupan.
                Melalui layanan ini, bidan profesional kami akan membantu menjaga kebersihan tubuh bayi, memantau tanda-tanda vital seperti suhu dan detak jantung, serta memastikan kebutuhan nutrisi bayi terpenuhi, terutama dalam hal pemberian ASI.
                Kami juga siap memberikan edukasi kepada orang tua mengenai cara menggendong bayi yang benar, mengenali tanda-tanda bahaya, hingga cara menenangkan bayi saat rewel.
            </p>
            <p style="text-align: justify;">
                Masa nifas adalah periode penting bagi pemulihan ibu setelah melahirkan.
                Layanan perawatan pasca persalinan difokuskan pada pemantauan kondisi fisik ibu seperti penyembuhan luka, kontraksi rahim, serta kelancaran produksi ASI.
                Kami juga memberikan edukasi mengenai perawatan diri, manajemen nyeri, pola makan sehat, hingga dukungan emosional agar ibu merasa tenang dan percaya diri menjalani masa nifas.
                Dengan pendampingan yang menyeluruh, kami siap membantu ibu pulih dengan nyaman dan aman.
            </p>
            <a href="<?= base_url('Kontak') ?>" class="btn btn-danger mt-2">Pesan Layanan</a>
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
                            Rp700.000 <br>–<br> Rp4.900.000
                        </div>
                        <small class="text-muted">*Harga sesuai jenis layanan</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<?= $this->include('layouts/footer.php') ?>