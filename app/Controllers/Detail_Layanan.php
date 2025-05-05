<?php

namespace App\Controllers;

class Detail_Layanan extends BaseController
{
    public function layanan1()
    {
        return view('Detail_Layanan/layanan-lahir-nifas');
    }

    public function layanan3()
    {
        return view('Detail_Layanan/layanan-salin-normal');
    }
    public function layanan4()
    {
        return view('Detail_Layanan/layanan-hamil');
    }
    public function layanan5()
    {
        return view('Detail_Layanan/layanan-KB-kontrasepsi');
    }
}
