<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\ArtikelController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\BibitController;
use App\Http\Controllers\User\UserBibitController;
use App\Http\Controllers\JadwalVaksinController;
use App\Http\Controllers\User\UserJadwalVaksinController;
use App\Http\Controllers\Admin\SewaAlatController;
use App\Http\Controllers\User\UserSewaAlatController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\SliderController;
use App\Models\Slider;
use App\Http\Controllers\Admin\StrukturController;
use App\Http\Controllers\User\UserStrukturOrganisasiController;
use App\Http\Controllers\Auth\AdminAuthController;
use Illuminate\Support\Facades\Auth;

// ================= AUTH ADMIN =================

Route::get('/hapus-session-admin', function () {
    Auth::guard('admin')->logout();
    session()->invalidate();
    session()->regenerateToken();

    return 'Session admin dihapus';
});

Route::get('/cek-admin', function () {
    dd(Auth::guard('admin')->check());
});

Route::middleware('guest:admin')->group(function () {

    Route::get('/login', [AdminAuthController::class, 'showLogin'])
        ->name('login');

    Route::post('/login', [AdminAuthController::class, 'login'])
        ->name('login.store');
});

Route::post('/logout', [AdminAuthController::class, 'logout'])
    ->middleware('auth:admin')
    ->name('logout');


    //// user ///////======

Route::get('/', [HomeController::class, 'index'])->name('home');



Route::get('/layanan/index', function () {
    $sliders = Slider::latest()->get();

    return view('layanan.index', compact('sliders'));
})->name('layanan.index');

Route::get('/profil', function () {
    return view('profil');
});
Route::get('/struktur', [UserStrukturOrganisasiController::class, 'index'])
    ->name('user.struktur');

Route::get('/profil/tupoksi', function () {
    return view('tupoksi.index'); 
})->name('tupoksi.index');

Route::get('/visi', function () {
    return view('visi');
});
Route::get('/artikel', [ArtikelController::class, 'userIndex'])
    ->name('artikel.index');

Route::get('/artikel/{id}', [ArtikelController::class, 'show'])
    ->name('artikel.show');

 Route::get('/galeri', [GaleriController::class, 'userGaleri'])
    ->name('galeri.index');


Route::get('/kontak', function () {
    return view('kontak');
});
Route::get('/tupoksi/perumusan-kebijakan', function () {
    return view('tupoksi.kebijakan'); 
})->name('tupoksi.perumusan');

Route::get('/tupoksi/pelaksanaan-teknis', function () {
    return view('tupoksi.pelaksanaan-teknis');
})->name('tupoksi.pelaksanaan');

Route::get('/tupoksi/koordinasi-evaluasi', function () {
    return view('tupoksi.koordinasi');
})->name('tupoksi.koordinasi');

Route::get('/tupoksi/pembinaan-sdm', function () {
    return view('tupoksi.pembinaan');
})->name('tupoksi.pembinaan');

Route::get('/tupoksi/sarana-prasarana', function () {
    return view('tupoksi.sarana-prasarana');
})->name('tupoksi.sarnas');

Route::get('/tupoksi/administrasi', function () {
    return view('tupoksi.administrasi');
})->name('tupoksi.administrasi');

Route::get('/layanan/bibit', [UserBibitController::class, 'katalog'])
    ->name('layanan.bibit');

Route::get('/layanan/sewa-alat', [UserSewaAlatController::class, 'index'])
    ->name('layanan.sewa-alat');

Route::get('/layanan/pendaftaran', function () {
    return view('layanan.pendaftaran'); 
})->name('layanan.pendaftaran');

Route::get('/layanan/jadwal-vaksin', [UserJadwalVaksinController::class, 'index'])
    ->name('layanan.jadwal-vaksin');

 Route::get('/layanan/jadwal-vaksin/pdf', [JadwalVaksinController::class, 'downloadPdf'])
    ->name('layanan.jadwal-vaksin.pdf');

Route::get('/layanan/detaillayanan', function () {
    return view('layanan.detaillayanan'); 
})->name('layanan.detaillayanan');





// ================= ADMIN =================
Route::resource('admin/slider', SliderController::class)
    ->names('admin.slider');

Route::middleware('auth:admin')
    ->prefix('admin')
    ->name('admin.')
    ->group(function () {


// INDEX
Route::get('/jadwal-vaksin',
    [JadwalVaksinController::class, 'index'])
    ->name('jadwal-vaksin.index');

    // Dashboard
    Route::get('/', function () {
        return view('admin.dashboard');
    })->name('home');

    // STOK BIBIT
    Route::get('/stok-bibit', function () {
        return view('admin.stok.index');
    })->name('stok.index');

    // ================= ARTIKEL =================
   
    Route::get('/artikel', [ArtikelController::class, 'index'])
        ->name('artikel.index');

    Route::get('/artikel/tambah', [ArtikelController::class, 'create'])
        ->name('artikel.create');

    Route::post('/artikel/simpan', [ArtikelController::class, 'store'])
        ->name('artikel.store');

    Route::get('/artikel/edit/{id}', [ArtikelController::class, 'edit'])
        ->name('artikel.edit');

    Route::put('/artikel/update/{id}', [ArtikelController::class, 'update'])
        ->name('artikel.update');

    Route::delete('/artikel/{id}', [ArtikelController::class, 'destroy'])
        ->name('artikel.destroy');

        
    // ================= GALERI =================
    Route::get('/galeri', [GaleriController::class, 'index'])
        ->name('galeri.index');

    Route::get('/galeri/tambah', [GaleriController::class, 'create'])
        ->name('galeri.create');

    Route::post('/galeri/simpan', [GaleriController::class, 'store'])
        ->name('galeri.store');

    Route::get('/galeri/edit/{id}', [GaleriController::class, 'edit'])
        ->name('galeri.edit');

    Route::put('/galeri/update/{id}', [GaleriController::class, 'update'])
        ->name('galeri.update');

    Route::delete('/galeri/hapus/{id}', [GaleriController::class, 'destroy'])
        ->name('galeri.destroy');

      Route::get('/{id}/edit', [GaleriController::class, 'edit'])->name('edit');
    Route::put('/{id}', [GaleriController::class, 'update'])->name('update');
    
    
    
    //============= Bibit ======================
    
      Route::get('/stok-bibit', [BibitController::class, 'index'])
        ->name('bibit.index');

    Route::get('/stok-bibit/create', [BibitController::class, 'create'])
        ->name('stok-bibit.create');

    Route::post('/stok-bibit/store', [BibitController::class, 'store'])
        ->name('stok-bibit.store');

    Route::get('/stok-bibit/{id}/edit', [BibitController::class, 'edit'])
        ->name('stok-bibit.edit');

    Route::put('/stok-bibit/{id}', [BibitController::class, 'update'])
        ->name('stok-bibit.update');

    Route::delete('/stok-bibit/{id}', [BibitController::class, 'destroy'])
        ->name('stok-bibit.destroy');


     // ================= jadwal-vaksin =================

  
    Route::get('/jadwal-vaksin', [JadwalVaksinController::class, 'index'])
        ->name('jadwal-vaksin.index');

    Route::get('/jadwal-vaksin/create', [JadwalVaksinController::class, 'create'])
        ->name('jadwal-vaksin.create');

    Route::post('/jadwal-vaksin/store', [JadwalVaksinController::class, 'store'])
        ->name('jadwal-vaksin.store');

    Route::get('/jadwal-vaksin/edit/{id}', [JadwalVaksinController::class, 'edit'])
        ->name('jadwal-vaksin.edit');

    Route::put('/jadwal-vaksin/update/{id}', [JadwalVaksinController::class, 'update'])
        ->name('jadwal-vaksin.update');

    Route::delete('/jadwal-vaksin/{id}', [JadwalVaksinController::class, 'destroy'])
        ->name('jadwal-vaksin.destroy');

   



   
   
        //===========sewa alat=============//
    
    Route::get('/sewa-alat', [SewaAlatController::class, 'index'])
        ->name('sewa_alat.index');

    Route::get('/sewa-alat/create', [SewaAlatController::class, 'create'])
        ->name('sewa_alat.create');

    Route::post('/sewa-alat/store', [SewaAlatController::class, 'store'])
        ->name('sewa_alat.store');

    Route::get('/sewa-alat/{id}/edit', [SewaAlatController::class, 'edit'])
    ->name('sewa_alat.edit');

    Route::put('/sewa-alat/{id}', [SewaAlatController::class, 'update'])
    ->name('sewa_alat.update');

    Route::delete('/sewa-alat/{id}', [SewaAlatController::class, 'destroy'])
    ->name('sewa_alat.destroy');



    //============= struktur ===========//

    // INDEX
    Route::get('/struktur', [StrukturController::class, 'index'])
        ->name('struktur.index');

    // CREATE FORM
    Route::get('/struktur/create', [StrukturController::class, 'create'])
        ->name('struktur.create');

    // STORE DATA
    Route::post('/struktur', [StrukturController::class, 'store'])
        ->name('struktur.store');

    // EDIT FORM
    Route::get('/struktur/{struktur}/edit', [StrukturController::class, 'edit'])
        ->name('struktur.edit');

    // UPDATE DATA
    Route::put('/struktur/{struktur}', [StrukturController::class, 'update'])
        ->name('struktur.update');

    // DELETE DATA
    Route::delete('/struktur/{struktur}', [StrukturController::class, 'destroy'])
        ->name('struktur.destroy');

});



