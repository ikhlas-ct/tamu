<?php

use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\AdminSettingsController;
use App\Http\Controllers\Auth\AdminLoginController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TamuController;
use App\Http\Controllers\AdminController;




/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

    Route::prefix('admin')->group(function () {
    Route::get('login', [AdminLoginController::class, 'showLoginForm'])->name('admin.login');
    Route::post('login', [AdminLoginController::class, 'login'])->name('admin.login.post');
    Route::post('logout', [AdminLoginController::class, 'logout'])->name('admin.logout');

    Route::middleware('admin')->group(function () {
        Route::get('dashboard', [AdminDashboardController::class, 'index'])->name('admin.dashboard');
        Route::get('settings', [AdminSettingsController::class, 'index'])->name('admin.settings');
                
    });
});

Route::get('/', [TamuController::class, 'index'])->name('buku-tamu');
Route::get('/buku-tamu', [TamuController::class, 'tamu'])->name('daftar_tamu');
Route::post('/buku-tamu', [TamuController::class, 'store'])->name('tambah_tamu');
Route::get('/buku-tamu/qrcode', [TamuController::class, 'generateQRCode'])->name('buku-tamu.qrcode');
Route::post('/form-submit', [TamuController::class, 'store'])->name('tamu.store');


Route::resource('admins', AdminController::class);
