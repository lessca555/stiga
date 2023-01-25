<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//home
Route::get('/', function () {
    return view('home');
})->name('home');

//profile
Route::get('/profile/visi-misi', function () {
    return view('profile.visimisi');
})->name('visim');

Route::get('/profile/struktur_organisasi', function () {
    return view('profile.struktur-org');
})->name('struktur');

Route::get('/profile/fasilitas', function () {
    return view('profile.fasilitas');
})->name('fasilitas');

//jurusan
Route::get('/jurusan/jur_bkp', function () {
    return view('jurusan.bkp');
})->name('jur_bkp');

Route::get('/jurusan/jur_mm', function () {
    return view('jurusan.mm');
})->name('jur_mm');

Route::get('/jurusan/jur_pdib', function () {
    return view('jurusan.pdib');
})->name('jur_pdib');

Route::get('/jurusan/jur_tav', function () {
    return view('jurusan.tav');
})->name('jur_tav');

Route::get('/jurusan/jur_titl', function () {
    return view('jurusan.titl');
})->name('jur_titl');

Route::get('/jurusan/jur_tkro', function () {
    return view('jurusan.tkro');
})->name('jur_tkro');

Route::get('/jurusan/jur_tpm', function () {
    return view('jurusan.tpm');
})->name('jur_tpm');


//galery
Route::get('/galery/download', function () {
    return view('galery.download');
})->name('gal_down');

Route::get('/galery/video', function () {
    return view('galery.video');
})->name('gal_vid');

//program sekolah
Route::get('/program_sekolah/ekskul', function () {
    return view('program-sekolah.ekskul');
})->name('ps_ekskul');

Route::get('/program_sekolah/agenda', function () {
    return view('program-sekolah.agenda');
})->name('ps_agenda');

//ppdb
Route::get('/ppdb/ppdb_smkn3', function () {
    return view('ppdb.ppdbsmkn3');
})->name('ppdb_stiga');

//pengumuman
Route::get('/pengumuman', function () {
    return view('pengumuman.pengumuman');
})->name('notif');


