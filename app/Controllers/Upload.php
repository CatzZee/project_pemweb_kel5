<?php

namespace App\Controllers;

use App\Models\GambarBerandaModel;
use App\Models\GambarDetailLayananModel;
use App\Models\GambarJasaLayananModel;
use App\Models\GambarTentangKamiModel;

class Upload extends BaseController
{
    public function upload_gambar_beranda($folder, $id)
    {
        $file = $this->request->getFile('gambar');
        $path = FCPATH . 'assets/uploads/' . $folder;
        $namabaru = $file->getRandomName();

        if (!is_dir($path)) {
            mkdir($path, 0755, true);
        }

        if ($file->isValid() && !$file->hasMoved()) {

            $extension = strtolower($file->getExtension());
            in_array($extension, ['jpg', 'jpeg', 'png']);
            // jadi disini aku buat percabnagan ngatur alur codingannya contoh: klw misal if(folder == 'beranda') maka dia akan akses ke table beranda dst.
            if ($folder == 'beranda') {
                $file->move($path, $namabaru, true);
                $berandaModel = new GambarBerandaModel();
                $berandaModel->set('nama_file', $namabaru)
                            ->where('id', $id)
                            ->update();
                return redirect()->back()->with('success', 'Gambar Beranda berhasil diupload!');
                // ini untuk logika klw upload gambar tentang_kami
                
            } elseif ($folder == 'tentang_kami') {
                $file->move($path, $namabaru, true);
                $tentangKamiModel = new GambarTentangKamiModel();
                $tentangKamiModel->set('nama_file', $namabaru)
                            ->where('id', $id)
                            ->update();
                return redirect()->back()->with('success', 'Gambar Tentang Kami berhasil diupload!');

                // ini logika untuk jasa layanan
            } elseif ($folder == 'jasa_layanan') {
                $file->move($path, $namabaru, true);
                $jasaLayananModel = new GambarJasaLayananModel();
                $jasaLayananModel->set('nama_file', $namabaru)
                ->where('id', $id)
                ->update();
                return redirect()->back()->with('success', 'Gambar Jasa Layanan berhasil diupload!');
                
                // ini logika untuk jasa layanan
            } elseif ($folder == 'detail_layanan') {
                $file->move($path, $namabaru, true);
                $detailLayananModel = new GambarDetailLayananModel();
                $detailLayananModel->set('nama_file', $namabaru)
                            ->where('id', $id)
                            ->update();
                return redirect()->back()->with('success', 'Gambar Jasa Layanan berhasil diupload!');
            } else {
                return redirect()->back()->with('error', 'Format file harus JPG atau PNG!');
            }
        } else {
            return redirect()->back()->with('error', 'Gagal upload gambar');
        }
    }
}
