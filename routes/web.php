<?php

use App\Http\Controllers\Admin\dashboardController;
use App\Http\Controllers\Admin\drinksController;
use App\Http\Controllers\Admin\foodsController;
use App\Http\Controllers\Auth\usersController;
use App\Http\Controllers\Admin\employeesController;
use App\Http\Controllers\Admin\profilesController;
use App\Http\Controllers\Admin\reportsController;
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
// ======
//  AUTH
// ======
Route::get('/', [usersController::class, 'formLogin'])->name('formMasuk');
Route::post('/masuk', [usersController::class, 'login'])->name('masuk');
Route::get('/keluar', [usersController::class, 'logout'])->name('keluar');
Route::get('/FormLupaPassword', [usersController::class, 'formForgotPassword'])->name('formLupaPassword');
Route::get('/FormGantiPassword', [usersController::class, 'formChangePasswordAdmin'])->name('formGantiPasswordAdmin');
Route::post('/GantiPassword', [usersController::class, 'changePasswordAdmin'])->name('gantiPasswordAdmin');

// =======================================================================================================================================================

// =======
//  ADMIN
// =======

// Dashboard
Route::get('/Dashboard', [dashboardController::class, 'index'])->name('dashboard');

// Profil Admin
Route::get('/ProfilAdmin', [profilesController::class, 'index'])->name('indexProfilAdmin');
Route::get('/FormEditProfilAdmin', [profilesController::class, 'edit'])->name('editProfilAdmin');

// Data Kasir
Route::get('/DataKasir', [employeesController::class, 'index'])->name('indexDataKasir');
Route::get('/FormDataKasirBaru', [employeesController::class, 'create'])->name('createDataKasir');
Route::post('/TambahDataKasirBaru', [employeesController::class, 'store'])->name('storeDataKasir');

// Data Makanan
Route::get('/DataMakanan', [foodsController::class, 'index'])->name('indexDataMakanan');
Route::get('/FormDataMakananBaru', [foodsController::class, 'create'])->name('createDataMakanan');
Route::post('/TambahDataMakananBaru', [foodsController::class, 'store'])->name('storeDataMakanan');
Route::get('/FormEditDataMakanan/{id}', [foodsController::class, 'edit'])->name('editDataMakanan');
Route::post('/UbahDataMakanan/{id}', [foodsController::class, 'update'])->name('updateDataMakanan');
Route::post('/HapusDataMakanan/{id}', [foodsController::class, 'destroy'])->name('destroyDataMakanan');
Route::get('/DetailDataMakanan/{id}', [foodsController::class, 'show'])->name('showDataMakanan');

// Data Minuman
Route::get('/DataMinuman', [drinksController::class, 'index'])->name('indexDataMinuman');
Route::get('/FormDataMinumanBaru', [drinksController::class, 'create'])->name('createDataMinuman');
Route::post('/TambahDataMinumanBaru', [drinksController::class, 'store'])->name('storeDataMinuman');
Route::get('/FormEditDataMinuman/{id}', [drinksController::class, 'edit'])->name('editDataMinuman');
Route::post('/UbahDataMinuman/{id}', [drinksController::class, 'update'])->name('updateDataMinuman');
Route::post('/HapusDataMinuman/{id}', [drinksController::class, 'destroy'])->name('destroyDataMinuman');
Route::get('/DetailDataMinuman/{id}', [drinksController::class, 'show'])->name('showDataMinuman');

// Data Laporan
Route::get('/DataLaporan', [reportsController::class, 'index'])->name('indexDataLaporan');

// =======================================================================================================================================================

// =======
//  KASIR
// =======
Route::get('/menuMakanan', function () {
    return view('kasir.pages.menu.menuMakanan');
});
Route::get('/menuMinuman', function () {
    return view('kasir.pages.menu.menuMinuman');
});
