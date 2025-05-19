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
                // ini untuk hapus file foto lama agar tidak memnuhi resource
                $namalama = $berandaModel->select('nama_file')
                    ->where('id', $id)
                    ->first();
                $path_lama = FCPATH . 'assets/uploads' . '/' . $folder . '/' . $namalama['nama_file'];
                if (file_exists($path_lama)) {
                    unlink($path_lama);
                }
                // ini logika untuk ubah data di table
                $berandaModel->set('nama_file', $namabaru)
                    ->where('id', $id)
                    ->update();
                return redirect()->back()->with('success', 'Gambar Beranda berhasil diupload!');
                
            } elseif ($folder == 'tentang_kami') {
                $file->move($path, $namabaru, true);
                $tentangKamiModel = new GambarTentangKamiModel();
                $namalama = $tentangKamiModel->select('nama_file')
                    ->where('id', $id)
                    ->first();
                $path_lama = FCPATH . 'assets/uploads' . '/' . $folder . '/' . $namalama['nama_file'];
                if (file_exists($path_lama)) {
                    unlink($path_lama);
                }
                $tentangKamiModel->set('nama_file', $namabaru)
                    ->where('id', $id)
                    ->update();
                return redirect()->back()->with('success', 'Gambar Tentang Kami berhasil diupload!');
            } elseif ($folder == 'jasa_layanan') {
                $file->move($path, $namabaru, true);
                $jasaLayananModel = new GambarJasaLayananModel();
                $namalama = $jasaLayananModel->select('nama_file')
                    ->where('id', $id)
                    ->first();
                $path_lama = FCPATH . 'assets/uploads' . '/' . $folder . '/' . $namalama['nama_file'];
                if (file_exists($path_lama)) {
                    unlink($path_lama);
                }
                $jasaLayananModel->set('nama_file', $namabaru)
                    ->where('id', $id)
                    ->update();
                return redirect()->back()->with('success', 'Gambar Jasa Layanan berhasil diupload!');
            } elseif ($folder == 'detail_layanan') {
                $file->move($path, $namabaru, true);
                $detailLayananModel = new GambarDetailLayananModel();
                $namalama = $detailLayananModel->select('nama_file')
                    ->where('id', $id)
                    ->first();
                $path_lama = FCPATH . 'assets/uploads' . '/' . $folder . '/' . $namalama['nama_file'];
                if (file_exists($path_lama)) {
                    unlink($path_lama);
                }
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
