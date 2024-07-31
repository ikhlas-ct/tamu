<?php

use App\Http\Controllers\admin\FormTamuController;
use App\Http\Controllers\AdminSettingsController;
use App\Http\Controllers\Auth\AdminLoginController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TamuController;
use App\Http\Controllers\admin\AdminDashboardController;
use App\Http\Controllers\admin\AdminController;








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
        
        Route::prefix('data-tamu')->name('admin.data-tamu.')->group(function () {
            Route::get('/', [FormTamuController::class, 'index'])->name('index');
            Route::get('/create', [FormTamuController::class, 'create'])->name('create');
            Route::post('/', [FormTamuController::class, 'store'])->name('store');
            Route::get('/{id}/edit', [FormTamuController::class, 'edit'])->name('edit');
            Route::put('/{id}', [FormTamuController::class, 'update'])->name('update');
            Route::delete('/{id}', [FormTamuController::class, 'destroy'])->name('destroy');
            Route::get('/print', [FormTamuController::class, 'print'])->name('print');
        });

        Route::get('/profile', [AdminController::class, 'showProfile'])->name('admin.profile');
        Route::post('/profile', [AdminController::class, 'updateProfile'])->name('admin.profile.update');
    });
});


Route::get('/', [TamuController::class, 'index'])->name('buku-tamu');
Route::get('/buku-tamu', [TamuController::class, 'tamu'])->name('daftar_tamu');
Route::post('/buku-tamu', [TamuController::class, 'store'])->name('tambah_tamu');
Route::get('/buku-tamu/qrcode', [TamuController::class, 'generateQRCode'])->name('buku-tamu.qrcode');
Route::post('/form-submit', [TamuController::class, 'store'])->name('tamu.store');


Route::resource('admins', AdminController::class);
