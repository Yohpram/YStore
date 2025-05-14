<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Produk extends Controller
{
    public function index()
    {
        // Cek apakah user sudah login
        if (!session()->get('logged_in')) {
            return redirect()->to('/auth/login')->with('error', 'Silakan login terlebih dahulu!');
        }

        return view('produk'); // Tampilkan dashboard jika login
    }
}
