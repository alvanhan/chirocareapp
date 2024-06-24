<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontEnd\ContentControler;
use App\Http\Controllers\BackEnd\DashboardControler;
use App\Http\Controllers\BackEnd\JenisLayananControler;
use App\Http\Controllers\BackEnd\LayananControler;
use App\Http\Controllers\BackEnd\PembayaranControler;
use App\Http\Controllers\BackEnd\PemesananControler;
use App\Http\Controllers\Auth\AuthControler;
use App\Http\Controllers\FrontEnd\ProsesControler;

Route::get('/', function () {
    return  redirect()->route('content.index');
});
Route::post('/pembayaran-xendit', [PembayaranControler::class, 'xendit'])->name('pembayaran.xendit');
Route::get('/default', [AuthControler::class, 'login'])->name('login');


Route::controller(ContentControler::class)->group(function () {
    Route::get('/', 'index')->name('content.index');
    Route::get('/layanan', 'layanan')->name('content.layanan');
    Route::get('/riwayat-layanan', 'riwayatLayanan')->name('content.riwayat');
    Route::get('/kontak', 'kontak')->name('content.kontak');
});

Route::controller(ProsesControler::class)->group(function () {
    Route::get('pemesanan/{id}', 'index')->name('prosespesan.index');
});


Route::controller(AuthControler::class)->group(function () {
    Route::get('/login', 'login')->name('auth.login');
    Route::post('/login', 'login_post')->name('auth.login_post');
    Route::get('/register', 'register')->name('auth.register');
    Route::post('/register', 'register_post')->name('auth.register_post');
});

Route::group(['middleware' => 'auth'], function () {
    Route::get('/logout', [AuthControler::class, 'logout'])->name('auth.logout');
    Route::prefix('dashboard')->group(function () {

        Route::controller(ProsesControler::class)->group(function () {
            Route::post('sendpemabayaran', 'sendpemabayaran')->name('sendpemabayaran.index');
            Route::get('nontunaipesan', 'nontunaipesan')->name('nontunaipesan.index');

        });


        Route::group(['middleware' => 'Resepsionis'], function () {
            Route::get('/', [DashboardControler::class, 'index'])->name('dashboard.index');
            Route::prefix('layanan')->group(function () {
                Route::get('/', [LayananControler::class, 'index'])->name('layanan.index');
                Route::get('/create', [LayananControler::class, 'create'])->name('layanan.create');
                Route::post('/store', [LayananControler::class, 'store'])->name('layanan.store');
                Route::get('/edit/{id}', [LayananControler::class, 'edit'])->name('layanan.edit');
                Route::post('/update/{id}', [LayananControler::class, 'update'])->name('layanan.update');
                Route::delete('/delete/{id}', [LayananControler::class, 'destroy'])->name('layanan.destroy');
            });
            Route::prefix('jenis-layanan')->group(function () {
                Route::get('/', [JenisLayananControler::class, 'index'])->name('jenis_layanan.index');
                Route::get('/create', [JenisLayananControler::class, 'create'])->name('jenis_layanan.create');
                Route::post('/store', [JenisLayananControler::class, 'store'])->name('jenis_layanan.store');
                Route::get('/edit/{id}', [JenisLayananControler::class, 'edit'])->name('jenis_layanan.edit');
                Route::post('/update/{id}', [JenisLayananControler::class, 'update'])->name('jenis_layanan.update');
                Route::delete('/delete/{id}', [JenisLayananControler::class, 'destroy'])->name('jenis_layanan.destroy');
            });
            Route::prefix('pemesanan')->group(function () {
                Route::get('/', [PemesananControler::class, 'index'])->name('pemesanan.index');
                Route::get('/create', [PemesananControler::class, 'create'])->name('pemesanan.create');
                Route::post('/store', [PemesananControler::class, 'store'])->name('pemesanan.store');
                Route::get('/show/{id}', [PemesananControler::class, 'show'])->name('pemesanan.edit');
                Route::post('/update/{id}', [PemesananControler::class, 'update'])->name('pemesanan.update');
                Route::delete('/delete/{id}', [PemesananControler::class, 'destroy'])->name('pemesanan.destroy');
                Route::get('/laporan', [PemesananControler::class, 'laporan'])->name('pemesanan.laporan');

            });
            Route::prefix('pembayaran')->group(function () {
                Route::get('/', [PembayaranControler::class, 'index'])->name('pembayaran.index');
                Route::get('/create', [PembayaranControler::class, 'create'])->name('pembayaran.create');
                Route::post('/store', [PembayaranControler::class, 'store'])->name('pembayaran.store');
                Route::get('/edit/{id}', [PembayaranControler::class, 'edit'])->name('pembayaran.edit');
                Route::post('/update/{id}', [PembayaranControler::class, 'update'])->name('pembayaran.update');
                Route::delete('/delete/{id}', [PembayaranControler::class, 'destroy'])->name('pembayaran.destroy');
            });

        });

    });
});


