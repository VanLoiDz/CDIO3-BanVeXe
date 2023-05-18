<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function index()
    {
        return view('client.page.trang_chu');
    }

    public function lichTrinh()
    {
        return view('client.page.lich_trinh');
    }

    public function lienHe()
    {
        return view('client.page.lien_he');
    }
}
