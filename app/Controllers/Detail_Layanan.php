<?php

namespace App\Controllers;
use App\Models\GambarDetailLayananModel;
class Detail_Layanan extends BaseController
{
    public function layanan1()
    {
        $gambarDetailLayanan = new GambarDetailLayananModel();
        $data = [
            'gambarDetailLayanan' => $gambarDetailLayanan->findAll(),
            'page' => 'detail-layanan',
            'title' => 'Layanan Lahir dan Nifas'
        ];
        return view('Detail_Layanan/layanan-lahir-nifas', $data);
    }

    public function layanan3()
    {
        $gambarDetailLayanan = new GambarDetailLayananModel();
        $data = [
            'gambarDetailLayanan' => $gambarDetailLayanan->findAll(),
            'page' => 'detail-layanan',
            'title' => 'Layanan Persalinan Normal'
        ];
        return view('Detail_Layanan/layanan-salin-normal', $data);
    }
    public function layanan4()
    {
        $gambarDetailLayanan = new GambarDetailLayananModel();
        $data = [
            'gambarDetailLayanan' => $gambarDetailLayanan->findAll(),
            'page' => 'detail-layanan',
            'title' => 'Layanan Kehamilan'
        ];
        return view('Detail_Layanan/layanan-hamil', $data);
    }
    public function layanan5()
    {
        $gambarDetailLayanan = new GambarDetailLayananModel();
        $data = [
            'gambarDetailLayanan' => $gambarDetailLayanan->findAll(),
            'page' => 'detail-layanan',
            'title' => 'Layanan KB dan Kontrasepsi'
        ];
        return view('Detail_Layanan/layanan-KB-kontrasepsi', $data);
    }
}
