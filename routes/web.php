<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Admin\KelasController;
use App\Http\Controllers\Admin\KategoriController;
use App\Http\Controllers\Admin\MateriController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\PembelajaranController;

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

use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/program', [ProgramController::class, 'index'])->name('program');
Route::get('/materi/{id}', [PembelajaranController::class, 'index'])->name('materi');

Route::get('/alur', function () {
    return view('pages.alur');
})->name('alur');

Route::get('/tentang', function () {
    return view('pages.tentang');
})->name('tentang');

Route::get('/login', function () {
    return view('pages.login');
})->name('login');

Route::get('/register', function () {
    return view('pages.register');
})->name('register');

Route::get('/privacy', function () {
    return view('pages.privacy');
})->name('privacy');

Route::get('/pemberitahuan', function () {
    return view('pages.pemberitahuan');
})->name('pemberitahuan');

Route::get('/profil', function () {
    return view('pages.profil');
})->name('profil');

Route::get('/progres', function () {
    return view('pages.progres');
})->name('progres');

Route::get('/progresada', function () {
    return view('pages.progresada');
})->name('progresada');

Route::get('/kuisawal', function () {
    return view('pages.kuisawal');
})->name('kuisawal');

Route::get('/kuis', function () {
    return view('pages.kuis');
})->name('kuis');

Route::get('/kuisnilai', function () {
    return view('pages.kuisnilai');
})->name('kuisnilai');

Route::get('/admin', [AdminDashboardController::class, 'index'])
    ->name('dashboard');

Route::resource('admin/kelas', KelasController::class);

Route::resource('admin/kategori', KategoriController::class);

Route::resource('admin/materi', MateriController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');