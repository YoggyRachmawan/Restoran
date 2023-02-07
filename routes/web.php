<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\usersController;
use App\Http\Controllers\Admin\foodsController;
use App\Http\Controllers\Admin\drinksController;
use App\Http\Controllers\Admin\reportsController;
use App\Http\Controllers\Admin\profilesController;
use App\Http\Controllers\Kasir\cashiersController;
use App\Http\Controllers\Admin\dashboardController;
use App\Http\Controllers\Admin\employeesController;

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
Route::get('/FormLupaPassword', [usersController::class, 'formForgotPassword'])->name('formLupaPassword');
Route::group(['middleware' => 'auth'], function () {
    Route::get('/keluar', [usersController::class, 'logout'])->name('keluar');
    Route::post('/GantiPassword', [usersController::class, 'changePassword'])->name('gantiPassword');
});
Route::group(['middleware' => ['auth', 'Admin']], function () {
    Route::get('/FormGantiPassword', [usersController::class, 'formChangePasswordAdmin'])->name('formGantiPasswordAdmin');
});
// =======================================================================================================================================================

// =======
//  ADMIN
// =======
// Dashboard
Route::group(['middleware' => ['auth', 'Admin']], function () {
    Route::get('/Dashboard', [dashboardController::class, 'index'])->name('dashboard');
});


// Profil Admin
Route::group(['middleware' => ['auth', 'Admin']], function () {
    Route::get('/ProfilAdmin', [profilesController::class, 'index'])->name('indexProfilAdmin');
    Route::get('/FormEditProfilAdmin/{id}', [profilesController::class, 'edit'])->name('editProfilAdmin');
    Route::post('/UbahProfilAdmin/{id}', [profilesController::class, 'update'])->name('updateProfilAdmin');
});

// Data Kasir
Route::group(['middleware' => ['auth', 'Admin']], function () {
    Route::get('/DataKasir', [employeesController::class, 'index'])->name('indexDataKasir');
    Route::get('/FormDataKasirBaru', [employeesController::class, 'create'])->name('createDataKasir');
    Route::post('/TambahDataKasirBaru', [employeesController::class, 'store'])->name('storeDataKasir');
    Route::get('/DetailDataKasir/{id}', [employeesController::class, 'show'])->name('showDataKasir');
    Route::post('/HapusDataKasir/{id}', [employeesController::class, 'destroy'])->name('destroyDataKasir');
});

// Data Makanan
Route::group(['middleware' => ['auth', 'Admin']], function () {
    Route::get('/DataMakanan', [foodsController::class, 'index'])->name('indexDataMakanan');
    Route::get('/FormDataMakananBaru', [foodsController::class, 'create'])->name('createDataMakanan');
    Route::post('/TambahDataMakananBaru', [foodsController::class, 'store'])->name('storeDataMakanan');
    Route::get('/DetailDataMakanan/{id}', [foodsController::class, 'show'])->name('showDataMakanan');
    Route::get('/FormEditDataMakanan/{id}', [foodsController::class, 'edit'])->name('editDataMakanan');
    Route::post('/UbahDataMakanan/{id}', [foodsController::class, 'update'])->name('updateDataMakanan');
    Route::post('/HapusDataMakanan/{id}', [foodsController::class, 'destroy'])->name('destroyDataMakanan');
});


// Data Minuman
Route::group(['middleware' => ['auth', 'Admin']], function () {
    Route::get('/DataMinuman', [drinksController::class, 'index'])->name('indexDataMinuman');
    Route::get('/FormDataMinumanBaru', [drinksController::class, 'create'])->name('createDataMinuman');
    Route::post('/TambahDataMinumanBaru', [drinksController::class, 'store'])->name('storeDataMinuman');
    Route::get('/DetailDataMinuman/{id}', [drinksController::class, 'show'])->name('showDataMinuman');
    Route::get('/FormEditDataMinuman/{id}', [drinksController::class, 'edit'])->name('editDataMinuman');
    Route::post('/UbahDataMinuman/{id}', [drinksController::class, 'update'])->name('updateDataMinuman');
    Route::post('/HapusDataMinuman/{id}', [drinksController::class, 'destroy'])->name('destroyDataMinuman');
});


// Data Laporan
Route::group(['middleware' => ['auth', 'Admin']], function () {
    Route::get('/DataLaporan', [reportsController::class, 'index'])->name('indexDataLaporan');
});


// =======================================================================================================================================================

// =======
//  KASIR
// =======
Route::group(['middleware' => ['auth', 'Kasir']], function () {
    Route::get('/MenuMakanan', [cashiersController::class, 'indexFoods'])->name('indexMenuMakanan');
    Route::get('/MenuMinuman', [cashiersController::class, 'indexDrinks'])->name('indexMenuMinuman');
    Route::post('/UbahProfilKasir/{id}', [cashiersController::class, 'updateProfile'])->name('updateProfilKasir');
});
