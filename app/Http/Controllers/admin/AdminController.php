<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the profile form.
     */
    public function showProfile()
    {
        $admin = Auth::guard('admin')->user();
        return view('admin.profil', compact('admin'));
    }

    /**
     * Update the admin profile.
     */
    public function updateProfile(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'no_hp' => 'nullable|string|max:20',
            'alamat' => 'nullable|string',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $admin = Auth::guard('admin')->user();

        if ($request->hasFile('gambar')) {
            Log::info('Gambar ditemukan dalam request.');
            $profileImage = $request->file('gambar');
            $profileImageSaveAsName = time() . Auth::id() . "-profile." . $profileImage->getClientOriginalExtension();
            $upload_path = 'admin_images/';
            $profile_image_url = $upload_path . $profileImageSaveAsName;
            $profileImage->move(public_path($upload_path), $profileImageSaveAsName);
            Log::info('Gambar berhasil diunggah ke: ' . $profile_image_url);
            $admin->gambar = $profile_image_url;
        } else {
            Log::info('Gambar tidak ditemukan dalam request.');
        }

        $admin->nama = $request->nama;
        $admin->no_hp = $request->no_hp;
        $admin->alamat = $request->alamat;
        $admin->save();

        return redirect()->back()->with('success', 'Profile updated successfully');
    }
}
