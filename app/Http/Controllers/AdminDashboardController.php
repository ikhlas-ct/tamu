<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    public function index()
    {
        // Bisa menambahkan logika di sini jika perlu, seperti mengambil data dari model.
        return view('admin.dashboard');
    }
}
