<?= $this->include('layouts/header') ?>

<section class="hero" id="beranda">
    <?php
    if (isset($gambarBeranda[0])) {
        $gambar = $gambarBeranda[0];
    }
    ?>
    <style>
        .hero {
            background-image: url('<?= base_url($gambar['path'] . $gambar['nama_file']) ?>');
        }
    </style>
    <main class="content">
        <h1>Melayani Dengan Sepenuh Hati</h1>
        <p>Selamat Datang</p>
    </main>
</section>
<section class="container">
    <h2 class="section-title">Layanan Paling Dicari</h2>
    <div class="row justify-content-center">
        <div class="col-md-3 layanan-item">
            <?php
            if (isset($gambarBeranda[3])) {
                $gambar = $gambarBeranda[3];
            }
            ?>
            <img src="<?= base_url($gambar['path'] . $gambar['nama_file']) ?>" class="layanan-icon" alt="Perawatan Bayi">
            <h6>Pemeriksaan Kehamilan</h6>
        </div>

        <div class="col-md-3 layanan-item">
            <?php
            if (isset($gambarBeranda[4])) {
                $gambar = $gambarBeranda[4];
            }
            ?>
            <img src="<?= base_url($gambar['path'] . $gambar['nama_file']) ?>" class="layanan-icon" alt="<?= esc($gambar['foto']) ?>">
            <h6>Perawatan Bayi dan Ibu Nifas</h6>
        </div>

        <div class="col-md-3 layanan-item">
            <?php
            if (isset($gambarBeranda[5])) {
                $gambar = $gambarBeranda[5];
            }
            ?>
            <img src="<?= base_url($gambar['path'] . $gambar['nama_file']) ?>" class="layanan-icon" alt="<?= esc($gambar['foto']) ?>">
            <h6>Persalinan Normal</h6>
        </div>
    </div>
</section>

<section class="bg-light py-5">
    <div class="container">
        <div class="row text-center">
            <div class="col-md-3 mb-4" data-aos="fade-up" data-aos-delay="100">
                <h2 class="text-danger fw-bold"><span id="count1">0</span>+</h2>
                <p>Pasien Dirawat</p>
            </div>
            <div class="col-md-3 mb-4" data-aos="fade-up" data-aos-delay="200">
                <h2 class="text-danger fw-bold"><span id="count2">0</span>+</h2>
                <p>Harga Mulai Dari</p>
            </div>
            <div class="col-md-3 mb-4" data-aos="fade-up" data-aos-delay="300">
                <h2 class="text-danger fw-bold"><span id="count3">0</span>+</h2>
                <p>Kota Terjangkau</p>
            </div>
            <div class="col-md-3 mb-4" data-aos="fade-up" data-aos-delay="300">
                <h2 class="text-danger fw-bold"><span id="count4">0</span>+</h2>
                <p>Pengalaman(Tahun)</p>
            </div>
        </div>
    </div>
</section>
<section class="komitmen-section">
    <h2 class="section-title">Komitmen Kami</h5>

        <div class="container d-flex flex-column flex-md-row align-items-center justify-content-center gap-4">
            <?php
            if (isset($gambarBeranda[1])) {
                $gambar = $gambarBeranda[1];
            }
            ?>
            <img src="<?= base_url($gambar['path'] . $gambar['nama_file']) ?>" class="img-fluid" style="max-width: 300px;" alt="Komitmen">
            <div>
                <p>
                    Kami berkomitmen untuk memberikan pelayanan terbaik dengan penuh perhatian dan kasih sayang.
                    Kesehatan Anda adalah prioritas utama kami.
                </p>
                <a href="<?= base_url('Jasa_Layanan') ?>" class="btn-hubungi">Layanan Kami</a>
            </div>
        </div>
</section>
<section class="py-5 bg-light">
    <div class="container">
        <h2 class="fw-bold text-center mb-5">Cara Pemesanan Layanan</h2>
        <div class="row g-4">
            <div class="col-md-3 text-center" data-aos="fade-up" data-aos-delay="100">
                <div class="p-4 bg-white rounded shadow h-100">
                    <div class="mb-3">
                        <i class="bi bi-browser-chrome fs-1 text-primary"></i>
                    </div>
                    <h5 class="fw-bold mb-2">1. Buka Website</h5>
                    <p class="text-muted">Kunjungi website resmi kami di <strong>www.ny.anisqoriah.com</strong>.</p>
                </div>
            </div>
            <div class="col-md-3 text-center" data-aos="fade-up" data-aos-delay="200">
                <div class="p-4 bg-white rounded shadow h-100">
                    <div class="mb-3">
                        <i class="bi bi-list-check fs-1 text-primary"></i>
                    </div>
                    <h5 class="fw-bold mb-2">2. Pilih Layanan</h5>
                    <p class="text-muted">Masuk ke halaman <strong>Jasa Layanan</strong> dan pilih layanan yang Anda butuhkan.</p>
                </div>
            </div>
            <div class="col-md-3 text-center" data-aos="fade-up" data-aos-delay="300">
                <div class="p-4 bg-white rounded shadow h-100">
                    <div class="mb-3">
                        <i class="bi bi-chat-dots fs-1 text-primary"></i>
                    </div>
                    <h5 class="fw-bold mb-2">3. Hubungi Kami</h5>
                    <p class="text-muted">Klik tombol <strong>Hubungi Kami</strong> untuk konsultasi dan konfirmasi pemesanan.</p>
                </div>
            </div>
            <div class="col-md-3 text-center" data-aos="fade-up" data-aos-delay="400">
                <div class="p-4 bg-white rounded shadow h-100">
                    <div class="mb-3">
                        <i class="bi bi-calendar-check fs-1 text-primary"></i>
                    </div>
                    <h5 class="fw-bold mb-2">4. Jadwalkan Kunjungan</h5>
                    <p class="text-muted">Tentukan jadwal kedatangan Anda bersama admin kami melalui WhatsApp.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="location-section">
    <h2 class="section-title">Our Location</h2>
    <div class="container">
        <div class="row g-4">
            <div class="col-12 col-md-6 d-flex justify-content-center">
                <div class="ratio ratio-16x9">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2022985.959027739!2d111.946738675!3d-7.984014430640749!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd3ffbdb187365b%3A0x7f1a8094e56082de!2sMASJID%20NURUL%20HASAN%20(LDII)!5e0!3m2!1sid!2sid!4v1745775212168!5m2!1sid!2sid"
                        width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
            </div>
            <div class="col-12 col-md-6 d-flex justify-content-center">
                <?php
                if (isset($gambarBeranda[2])) {
                    $gambar = $gambarBeranda[2];
                }
                ?>
                <img src="<?= base_url($gambar['path'] . $gambar['nama_file']) ?>" class="img-fluid rounded shadow" alt="lokasi">
            </div>
        </div>
    </div>
</section>
<section class="faq-section py-5 bg-white">
    <div class="container">
        <h2 class="section-title text-center mb-4">Pertanyaan yang Sering Diajukan (FAQ)</h2>
        <div class="accordion" id="faqAccordion">
            <div class="accordion-item">
                <h2 class="accordion-header" id="faqHeading1">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse1" aria-expanded="true" aria-controls="faqCollapse1">
                        1. Apa saja layanan yang tersedia di Praktek Mandiri Bidan Ny. Anis Qori'ah?
                    </button>
                </h2>
                <div id="faqCollapse1" class="accordion-collapse collapse show" aria-labelledby="faqHeading1" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Kami menyediakan berbagai layanan kesehatan ibu dan anak, di antaranya adalah pemeriksaan kehamilan rutin, persalinan normal, perawatan ibu nifas dan bayi baru lahir, konsultasi keluarga berencana dan kontrasepsi.
                        Semua dilakukan dengan pendekatan personal dan penuh kasih sayang, demi mendukung kesehatan dan kesejahteraan keluarga Anda.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="faqHeading2">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse2" aria-expanded="false" aria-controls="faqCollapse2">
                        2. Apakah saya perlu membuat janji terlebih dahulu sebelum datang?
                    </button>
                </h2>
                <div id="faqCollapse2" class="accordion-collapse collapse" aria-labelledby="faqHeading2" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Kami sangat menyarankan Anda untuk membuat janji terlebih dahulu, terutama jika ingin datang di jam-jam sibuk.
                        Hal ini membantu kami memberikan pelayanan yang lebih cepat dan efisien.
                        Namun, kami tetap melayani pasien yang datang langsung tanpa janji, selama masih dalam jam operasional dan kapasitas layanan mencukupi.
                        Anda bisa membuat janji melalui WhatsApp atau telepon yang tersedia di halaman kontak.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="faqHeading3">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse3" aria-expanded="false" aria-controls="faqCollapse3">
                        3. Apakah layanan persalinan tersedia 24 jam?
                    </button>
                </h2>
                <div id="faqCollapse3" class="accordion-collapse collapse" aria-labelledby="faqHeading3" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Ya, kami menyediakan layanan persalinan normal selama 24 jam.
                        Kami memahami bahwa persalinan bisa terjadi kapan saja, sehingga tim kami selalu siaga untuk memberikan pertolongan dengan fasilitas yang memadai dan suasana yang nyaman.
                        Kami juga siap memberikan rujukan jika diperlukan penanganan lebih lanjut di rumah sakit.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="faqHeading4">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse4" aria-expanded="false" aria-controls="faqCollapse4">
                        4. Apakah saya bisa berkonsultasi mengenai KB dan kontrasepsi di tempat ini?
                    </button>
                </h2>
                <div id="faqCollapse4" class="accordion-collapse collapse" aria-labelledby="faqHeading4" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Tentu, kami menyediakan layanan konsultasi dan pemasangan alat kontrasepsi seperti pil KB, suntik, dan implan.
                        Konsultasi ini bertujuan untuk membantu Anda memilih metode KB yang sesuai dengan kondisi kesehatan, kebutuhan, dan gaya hidup Anda.
                        Tim kami akan memberikan informasi yang jelas dan terbuka agar Anda bisa membuat keputusan terbaik bersama pasangan.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="faqHeading5">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse5" aria-expanded="false" aria-controls="faqCollapse5">
                        5. Apakah ada layanan home visit atau kunjungan ke rumah?
                    </button>
                </h2>
                <div id="faqCollapse5" class="accordion-collapse collapse" aria-labelledby="faqHeading5" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Saat ini kami menyediakan layanan kunjungan ke rumah (home visit), seperti layanan perawatan bayi dan ibu nifas.
                        Kami terus berupaya memperluas layanan agar ke depan bisa menjangkau pasien yang memiliki keterbatasan mobilitas, terutama ibu pasca melahirkan dan bayi baru lahir yang membutuhkan pengawasan khusus.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="faqHeading6">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse6" aria-expanded="false" aria-controls="faqCollapse6">
                        6. Bagaimana cara mengetahui jadwal praktik bidan?
                    </button>
                </h2>
                <div id="faqCollapse6" class="accordion-collapse collapse" aria-labelledby="faqHeading6" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Jadwal praktik kami biasanya tersedia di halaman Jasa layanan bagian detail layanan, namun Anda juga bisa langsung menghubungi kami melalui WhatsApp atau telepon untuk mendapatkan informasi terkini.
                        Kami berusaha fleksibel dalam penjadwalan untuk memastikan setiap pasien mendapatkan waktu dan perhatian yang optimal.
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<a href="https://wa.me/6281217453530?text=Halo%20saya%20mau%20bertanya" target="_blank" class="btn btn-success hubungi-kami-btn">
    <i class="bi bi-whatsapp me-2"></i> Hubungi Kami
</a>


<?= $this->include('layouts/footer') ?>