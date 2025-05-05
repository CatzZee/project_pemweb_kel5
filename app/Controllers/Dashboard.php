<?php
namespace App\Controllers;
use App\Models\GambarBerandaModel;
use App\Models\GambarDetailLayananModel;
use App\Models\GambarJasaLayananModel;
use App\Models\GambarLogoModel;
use App\Models\GambarTentangKamiModel;

class Dashboard extends BaseController{
    public function index(){
        $gambar_beranda = new GambarBerandaModel();
                $gambar_detail_layanan = new GambarDetailLayananModel();
                $gambar_tentang_kami = new GambarTentangKamiModel();
                $gambar_jasa_layanan = new GambarJasaLayananModel();
                $gambar_logo = new GambarLogoModel();
                $data = [
                    'gambar_beranda' => $gambar_beranda-> findAll(),
                    'gambar_logo' => $gambar_logo-> findAll(),
                    'gambar_detail_layanan' => $gambar_detail_layanan-> findAll(),
                    'gambar_tentang_kami' => $gambar_tentang_kami-> findAll(),
                    'gambar_jasa_layanan' => $gambar_jasa_layanan-> findAll()
                ];
        return view('admin/dashboard', $data);
    }
}

?>