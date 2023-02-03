<?php

use App\Http\Controllers\Admin\dashboardController;
use App\Http\Controllers\Admin\drinksController;
use App\Http\Controllers\Admin\foodsController;
use App\Http\Controllers\Auth\usersController;
use App\Http\Controllers\Admin\employeesController;
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
// Auth
Route::get('/', [usersController::class, 'formLogin'])->name('formMasuk');
Route::post('/masuk', [usersController::class, 'login'])->name('masuk');
Route::get('/keluar', [usersController::class, 'logout'])->name('keluar');
Route::get('/FormLupaPassword', [usersController::class, 'formForgotPassword'])->name('formLupaPassword');

// ==========================================================================

// Kasir
Route::get('/menuMakanan', function () {
    return view('kasir.pages.menu.menuMakanan');
});
Route::get('/menuMinuman', function () {
    return view('kasir.pages.menu.menuMinuman');
});

// ==========================================================================

// Admin
// Dashboard
Route::get('/Dashboard', [dashboardController::class, 'index'])->name('dashboard');
// End Dashboard

// DAta Kasir
// --read--
Route::get('/DataKasir', [employeesController::class, 'index'])->name('indexDataKasir');
// --create--
Route::get('/FormDataKasirBaru', [employeesController::class, 'create'])->name('createDataKasir');
Route::post('/TambahDataKasirBaru', [employeesController::class, 'store'])->name('storeDataKasir');
// --update--
// --delete--
// --show--
// End Data Kasir

// Data Makanan
// --read--
Route::get('/DataMakanan', [foodsController::class, 'index'])->name('indexDataMakanan');
// --create--
Route::get('/FormDataMakananBaru', [foodsController::class, 'create'])->name('createDataMakanan');
Route::post('/TambahDataMakananBaru', [foodsController::class, 'store'])->name('storeDataMakanan');
// --update--
Route::get('/FormEditDataMakanan/{id}', [foodsController::class, 'edit'])->name('editDataMakanan');
Route::post('/UbahDataMakanan/{id}', [foodsController::class, 'update'])->name('updateDataMakanan');
// --delete--
Route::post('/HapusDataMakanan/{id}', [foodsController::class, 'destroy'])->name('destroyDataMakanan');
// --show--
Route::get('/DetailDataMakanan/{id}', [foodsController::class, 'show'])->name('showDataMakanan');
// End Data Makanan

// Data Minuman
Route::get('/DataMinuman', [drinksController::class, 'index'])->name('indexDataMinuman');
// --create--
Route::get('/FormDataMinumanBaru', [drinksController::class, 'create'])->name('createDataMinuman');
Route::post('/TambahDataMinumanBaru', [drinksController::class, 'store'])->name('storeDataMinuman');
// --update--
Route::get('/FormEditDataMinuman/{id}', [drinksController::class, 'edit'])->name('editDataMinuman');
Route::post('/UbahDataMinuman/{id}', [drinksController::class, 'update'])->name('updateDataMinuman');
// --delete--
Route::post('/HapusDataMinuman/{id}', [drinksController::class, 'destroy'])->name('destroyDataMinuman');
// --show--
Route::get('/DetailDataMinuman/{id}', [drinksController::class, 'show'])->name('showDataMinuman');
// End Data Minuman

// Data Laporan
// --read--
Route::get('/readDataLaporan', function () {
    return view('admin.pages.laporan.readDataLaporan');
});
// --show--
Route::get('/showDataLaporan', function () {
    return view('admin.pages.laporan.showDataLaporan');
});
// End Data Laporan

// Profil Admin
// --read--
Route::get('/readProfilAdmin', function () {
    return view('admin.pages.profil.readProfil');
});
// --update--
Route::get('/updateProfilAdmin', function () {
    return view('admin.pages.profil.updateProfil');
});
// End Profil

// Ganti Password Admin
Route::get('/passwordAdmin', function () {
    return view('admin.pages.gantiPassword.formGantiPassword');
});
// End Ganti Password Admin
