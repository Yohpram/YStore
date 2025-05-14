<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
    public function index()
    {
        // Jika belum login, redirect ke login
        if (!session()->get('logged_in')) {
            return redirect()->to('/auth/login')->with('error', 'Silakan login terlebih dahulu!');
        }

        return view('dashboard'); // Tampilkan dashboard jika login
    }
}
