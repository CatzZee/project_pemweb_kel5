<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('Beranda', 'Pages::index');
$routes->get('/', 'Pages::index');
$routes->get('Tentang_Kami', 'Pages::Tentang_Kami');
$routes->get('Jasa_Layanan', 'Pages::Jasa_Layanan');
$routes->get('Kontak', 'Pages::Kontak');

$routes->get('Detail_Layanan/Perawatan Bayi dan Ibu Nifas', 'Detail_Layanan::layanan1');
$routes->get('Detail_Layanan/Persalinan Normal', 'Detail_Layanan::layanan3');
$routes->get('Detail_Layanan/Periksa Kehamilan', 'Detail_Layanan::layanan4');
$routes->get('Detail_Layanan/KB dan Kontrasepsi', 'Detail_Layanan::layanan5');

$routes->get('login', 'Auth::login');
$routes->post('/login/process', 'Auth::loginProcess');
$routes->get('logout', 'Auth::logout');
$routes->get('dashboard', 'Dashboard::index', ['filter' => 'auth']);

$routes->post('assets/uploads/(:segment)/(:num)', 'Upload::upload_gambar_beranda/$1/$2');