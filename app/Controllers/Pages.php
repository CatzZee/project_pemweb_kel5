<?php

namespace App\Controllers;

use App\Models\GambarBerandaModel;
use App\Models\GambarJasaLayananModel;
use App\Models\GambarTentangKamiModel;

class Pages extends BaseController
{
// -----------------------------------------------------------------------------------//
    public function Index()
    {
        $berandaModel = new GambarBerandaModel();
        $data = [
            'gambarBeranda' => $berandaModel->findAll(),
            'title' => 'Beranda',
            //ini untuk css
            'page'=> 'beranda'
        ];
        
        return view('Beranda', $data);
    }
    
    // -----------------------------------------------------------------------------------//
    public function Tentang_Kami()
    {
        $tentangKamiModel = new GambarTentangKamiModel();
        $data = [
            'gambarTentangKami' => $tentangKamiModel->findAll(),
            'title' => 'Tentang Kami',
            //ini untuk css
            'page'=> 'tentang-kami'
        ];
        return view('Tentang_Kami', $data);
    }

// -----------------------------------------------------------------------------------//
    public function Jasa_Layanan()
    {
        $jasaLayananModel = new GambarJasaLayananModel();
        $data = [
            'gambarJasaLayanan' => $jasaLayananModel->findAll(),
            'title' => 'Jasa Layanan',
            //ini untuk css
            'page'=> 'jasa-layanan'
        ];
        return view('Jasa_Layanan', $data);
    }

// -----------------------------------------------------------------------------------//
    public function Kontak()
    {
        $data = [
            'title' => 'Kontak Kami',
            //ini untuk css
            'page'=> 'kontak'
        ];
        return view('Kontak', $data);
    }
}
