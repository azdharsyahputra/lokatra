<?php

use Illuminate\Support\Facades\Route;

// Halaman landing diarahkan ke tentang
Route::get('/', function () {
    return view('home');
})->name('landing');

// Halaman tentang
Route::get('/tentang', function () {
    return view('tentang');
})->name('tentang');

// Halaman tentang
Route::get('/home', function () {
    return view('home');
})->name('home');

Route::get('/register', function () {
    return view('register');
})->name('register');

Route::get('/login', function () {
    return view('login');
})->name('login');


// Halaman informasi
Route::get('/informasi', function () {
    return view('informasi');
})->name('informasi');

/* Pendaftaran dropdown:
   - daftar sekolah
   - daftar perlombaan
*/
Route::prefix('pendaftaran')->group(function () {
    Route::get('/daftar-sekolah', function () {
        return view('pendaftaran.daftar-sekolah');
    })->name('pendaftaran.daftar-sekolah');

    Route::get('/daftar-perlombaan', function () {
        return view('pendaftaran.daftar-perlombaan');
    })->name('pendaftaran.daftar-perlombaan');

    // Tambahan untuk Wira dan Madya
    Route::get('/wira', function () {
        return view('pendaftaran.wira');
    })->name('pendaftaran.wira');

    Route::get('/madya', function () {
        return view('pendaftaran.madya');
    })->name('pendaftaran.madya');

    // Tambahan: daftar sekolah wira dan madya
    Route::get('/daftar-sekolah-wira', function () {
        return view('pendaftaran.daftar-sekolah-wira');
    })->name('pendaftaran.daftar-sekolah-wira');

    Route::get('/daftar-sekolah-madya', function () {
        return view('pendaftaran.daftar-sekolah-madya');
    })->name('pendaftaran.daftar-sekolah-madya');
});



/* SDM dropdown:
   - kepanitiaan
   - juri
   - keamanan
   - kebersihan
*/
Route::prefix('sdm')->group(function () {
    Route::get('/kepanitiaan', function () {
        return view('kepanitiaan');
    })->name('kepanitiaan');

    Route::get('/juri', function () {
        return view('juri');
    })->name('juri');

    Route::get('/keamanan', function () {
        return view('keamanan');
    })->name('keamanan');

    Route::get('/kebersihan', function () {
        return view('kebersihan');
    })->name('kebersihan');
});

/* Rekapitulasi dropdown:
   - pertolongan pertama
   - tandu
   - rsps terakhir
*/
Route::prefix('rekapitulasi')->group(function () {
    // Route yang sudah ada...
    Route::get('/pertolongan-pertama', function () {
        return view('rekapitulasi.pp');
    })->name('rekapitulasi.pertolongan-pertama');

    Route::get('/tandu', function () {
        return view('rekapitulasi.tandu');
    })->name('rekapitulasi.tandu');

    // Route baru untuk submenu tandu wira & madya
    Route::get('/tandu/wira', function () {
        return view('rekapitulasi.tandu_wira');
    })->name('rekapitulasi.tandu.wira');

    Route::get('/tandu/madya', function () {
        return view('rekapitulasi.tandu_madya');
    })->name('rekapitulasi.tandu.madya');

    Route::get('/rsps', function () {
        return view('rekapitulasi.rsps');
    })->name('rekapitulasi.rsps');

    Route::get('/young-dunant', function () {
        return view('rekapitulasi.yd');
    })->name('rekapitulasi.yd');

    Route::get('/ckpl', function () {
        return view('rekapitulasi.ckpl');
    })->name('rekapitulasi.ckpl');

    Route::get('/tandu-tunggal', function () {
        return view('rekapitulasi.tandu_tunggal');
    })->name('rekapitulasi.tandu_tunggal');

    Route::get('/desain-poster', function () {
        return view('rekapitulasi.dp');
    })->name('rekapitulasi.dp');
});

// Halaman kerjasama
Route::get('/kerjasama', function () {
    return view('kerjasama');
})->name('kerjasama');
// Halaman kerjasama
Route::get('/kerjasama', function () {
    return view('kerjasama');
})->name('kerjasama');
use Illuminate\Http\Request;

Route::post('/daftar/submit', function (Request $request) {
    // proses data pendaftaran
    $validated = $request->validate([
        'lomba' => 'required|string',
        'nama_sekolah' => 'required|string',
        'nama_peserta' => 'required|string',
    ]);

    // Simpan ke database atau lakukan aksi lainnya
    // contoh return
    return back()->with('success', 'Pendaftaran berhasil dikirim!');
})->name('submit.daftar');
