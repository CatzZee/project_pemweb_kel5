<?= $this->include('layouts/header') ?>

<section class="section-grid">
    <div class="text-center mb-5">
        <h2 class="fw-bold">Layanan Kami</h2>
        <p class="text-muted">Berikut adalah beberapa layanan unggulan dari Praktek Mandiri Bidan Ny. Anis Qori'ah</p>
    </div>
    <section class="image-text-section py-5">
        <div class="container">
            <?php foreach ($gambarJasaLayanan as $i => $gambar): ?>
                <div class="row align-items-center mb-5">
                    <?php if ($i % 2 == 0): ?>
                        <div class="col-md-6 order-md-1">
                            <h2 class="fw-bold mb-2"><?= esc($gambar['foto']) ?></h2>
                            <p class="text-muted mb-4"><?= esc($gambar['keterangan']) ?></p>
                            <a href="<?= base_url('Detail_Layanan/' . $gambar['foto']) ?>" class="btn btn-dark me-2">Lihat Detail</a>
                        </div>
                        <div class="col-md-6 order-md-2">
                            <img src="<?= base_url($gambar['path'] . $gambar['nama_file']) ?>" alt="Foto" class="img-fluid rounded">
                        </div>
                    <?php else: ?>
                        <div class="col-md-6 order-md-1">
                            <img src="<?= base_url($gambar['path'] . $gambar['nama_file']) ?>" alt="Foto" class="img-fluid rounded">
                        </div>
                        <div class="col-md-6 order-md-2">
                            <h2 class="fw-bold mb-2"><?= esc($gambar['foto']) ?></h2>
                            <p class="text-muted mb-4"><?= esc($gambar['keterangan']) ?></p>
                            <a href="<?= base_url('Detail_Layanan/' . $gambar['foto']) ?>" class="btn btn-dark me-2">Lihat Detail</a>
                        </div>
                    <?php endif; ?>
                </div>
            <?php endforeach; ?>
        </div>
    </section>
</section>

<section class="faq-section py-5 bg-white">
    <div class="container">
        <h2 class="section-title text-center mb-4">Pertanyaan yang Sering Diajukan</h2>
        <div class="accordion" id="faqAccordion">
            <div class="accordion-item">
                <h2 class="accordion-header" id="faqHeading1">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse1" aria-expanded="true" aria-controls="faqCollapse1">
                        1. Apakah perlu membuat janji sebelum datang?
                    </button>
                </h2>
                <div id="faqCollapse1" class="accordion-collapse collapse show" aria-labelledby="faqHeading1" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Kami sangat menyarankan Anda untuk membuat janji terlebih dahulu, terutama jika ingin datang di jam-jam sibuk.
                        Hal ini membantu kami memberikan pelayanan yang lebih cepat dan efisien.
                        Namun, kami tetap melayani pasien yang datang langsung tanpa janji, selama masih dalam jam operasional dan kapasitas layanan mencukupi.
                        Anda bisa membuat janji melalui WhatsApp atau telepon yang tersedia di halaman kontak.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="faqHeading2">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse2" aria-expanded="false" aria-controls="faqCollapse2">
                        2. Apa saja dokumen yang perlu dibawa saat pemeriksaan kehamilan?
                    </button>
                </h2>
                <div id="faqCollapse2" class="accordion-collapse collapse" aria-labelledby="faqHeading2" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Bawalah KTP, buku KIA, serta hasil pemeriksaan sebelumnya jika ada.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="faqHeading3">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse3" aria-expanded="false" aria-controls="faqCollapse3">
                        3. Apakah layanan tersedia di hari Minggu atau hari libur?
                    </button>
                </h2>
                <div id="faqCollapse3" class="accordion-collapse collapse" aria-labelledby="faqHeading3" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Layanan kami umumnya tersedia Senin–Sabtu.
                        Untuk hari Minggu dan hari libur, harap hubungi terlebih dahulu untuk memastikan ketersediaan.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="faqHeading4">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse4" aria-expanded="false" aria-controls="faqCollapse4">
                        4. Apakah tersedia layanan konsultasi KB untuk pasangan?
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
                        5. Apakah bisa melakukan home visit untuk perawatan bayi atau ibu nifas?
                    </button>
                </h2>
                <div id="faqCollapse5" class="accordion-collapse collapse" aria-labelledby="faqHeading5" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Ya, kami menyediakan layanan kunjungan ke rumah untuk perawatan bayi dan ibu nifas dengan syarat dan ketentuan tertentu.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="faqHeading6">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse6" aria-expanded="false" aria-controls="faqCollapse6">
                        6. Bagaimana cara menghubungi kami untuk membuat janji?
                    </button>
                </h2>
                <div id="faqCollapse6" class="accordion-collapse collapse" aria-labelledby="faqHeading6" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Anda dapat menghubungi kami melalui WhatsApp, telepon langsung, atau melalui halaman
                        <a href="<?= base_url('Kontak') ?>">Kontak</a> di website ini.
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