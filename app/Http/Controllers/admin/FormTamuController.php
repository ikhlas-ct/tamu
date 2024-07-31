<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\FormTamu;
use Illuminate\Http\Request;

class FormTamuController extends Controller
{
    public function index()
    {
        $tamus = FormTamu::all();
        return view('admin.form_tamu', compact('tamus'));
    }

    public function print()
{
    $tamus = FormTamu::all(); // Atau sesuaikan query sesuai kebutuhan
    return view('admin.print', compact('tamus'));
}
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'instansi' => 'required|string|max:255',
            'jabatan' => 'required|string|max:255',
            'keperluan' => 'required|string|max:255',
            'no_telp' => 'required|string|max:15',
            'keterangan' => 'nullable|string',
        ]);

        $tamu = FormTamu::findOrFail($id);
        $tamu->update($request->all());

        return redirect()->route('admin.data-tamu.index')->with('success', 'Tamu updated successfully.');
    }

    public function destroy($id)
    {
        $tamu = FormTamu::findOrFail($id);
        $tamu->delete();

        return redirect()->route('admin.data-tamu.index')->with('success', 'Tamu deleted successfully.');
    }
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'instansi' => 'required|string|max:255',
            'jabatan' => 'required|string|max:255',
            'no_telp' => 'required|string|max:20',
            'keperluan' => 'required|string',
        ]);

        FormTamu::create($request->all());

        return redirect()->route('admin.data-tamu.index')->with('success', 'Tamu berhasil ditambahkan.');
    }
}
