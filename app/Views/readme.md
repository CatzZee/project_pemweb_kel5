# 05/05/2025

## Misahin header & footer
jadi disini aku memisahkan pagenya menjadi 3 bagian, yaitu:

1. header
2. footer
3. isi websitenya.

nanti tinggal di panggil menggunakan:
> <?= $this->include('layouts/header')?>
> <?= $this->include('layouts/footer')?>

alasan aku misahin karna biar klw mau ubah header/footernya cukup di satu aja nanti ke ganti semua, ga kaya kemaren pas kita
ubah headernya harus ubah di semua halaman, itu ribet banget.

Namun, disitu ada sebuah problem yaitu setiap page punya CSS nya masing masing, jadi aku ngasi param di controller nya
contoh:
*'page'=> 'beranda'*
*'page'=> 'dst.'*


ini nanti akan di kirim ke page
dipakainya gimana??
**<?php if (isset($page)): ?>**
<!-- <link rel="stylesheet" href="<?= base_url("assets/css/{$page}.css") ?>"> -->
**<?php endif; ?>**

## Memisahkan script JS ke tempat yang seharusnya
aku memindahkan script JS sebagai animasi dll ke file public/assets/js/header.js 
> NOTE:mungkin penamaanya kurang tepat dengan tempat ia digunakan.