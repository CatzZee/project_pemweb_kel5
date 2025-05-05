<?= $this->include('layouts/header')?>
    </header>

    <section class="kontak-section py-5">
        <div class="container text-center">
            <h2 class="kontak-title">Kontak</h2>
            <p class="kontak-subtitle">Informasi lebih lengkap hubungi kami</p>
            <div class="row justify-content-center g-4 mt-4">
                <div class="col-md-4">
                    <div class="kontak-box">
                        <i class="fab fa-whatsapp kontak-icon text-success"></i>
                        <h5>Whatsapp</h5>
                        <p>
                            <a href="https://wa.me/6281217453530?text=Halo%20saya%20mau%20bertanya" target="_blank" class="text-decoration-none fw-bold text-dark">
                                0812 - 1754 - 3530
                            </a>
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="kontak-box">
                        <i class="fas fa-phone-alt kontak-icon text-success"></i>
                        <h5>Call Center</h5>
                        <p>
                            <a href="tel:082223112004" class="text-decoration-none fw-bold text-dark">
                                0822 - 2311 - 2004
                            </a>
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="kontak-box">
                        <i class="fas fa-envelope kontak-icon text-danger"></i>
                        <h5>Gmail</h5>
                        <p>
                            <a href="mailto:pbm.ny.anisqoriah@gmail.com" target="_blank" class="text-decoration-none fw-bold text-dark">
                                pbm.ny.anisqoriah@gmail.com
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <?= $this->include('layouts/footer')?>