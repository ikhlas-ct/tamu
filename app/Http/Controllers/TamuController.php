<?php

namespace App\Http\Controllers;

use App\Models\FormTamu;
use App\Models\Tamu;
use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class TamuController extends Controller
{
    public function index()
    {
        return view('buku-tamu.home');
    }
    public function tamu()
    {
        return view('buku-tamu.index');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'instansi' => 'required|string|max:255',
            'jabatan' => 'required|string|max:255',
            'no_telp' => 'required|string|max:15',
            'keperluan' => 'required|string',
        ]);

        try {
            FormTamu::create($request->all());
            return redirect()->back()->with('success', 'Data tamu berhasil disimpan.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan saat menyimpan data.');
        }
    }


    public function generateQRCode()
    {
        $url = route('daftar_tamu');
        $qrCode = QrCode::size(300)->generate($url);

        return view('buku-tamu.qrcode', compact('qrCode'));
    }
}
