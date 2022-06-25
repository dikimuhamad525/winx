<?php

use App\Http\Controllers\ContohController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::name('login')->group(function(){
    Route::get('/login', [LoginController::class, 'index']);
    Route::post('/login', [LoginController::class, 'login']);
});

Route::middleware('auth')->group(function(){
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // Route::get('/tambah_artikel', [DashboardController::class, 'tambah_artikel'])->name('tambah_artikel');
    // Route::get('/edit_artikel/{id}', [DashboardController::class, 'edit_artikel'])->name('edit_artikel');
    // Route::get('/hapus_artikel/{id}', [DashboardController::class, 'hapus_artikel'])->name('hapus_artikel');
    // Route::post('/simpan_artikel', [DashboardController::class, 'simpan_artikel'])->name('simpan_artikel');
    // Route::post('/update_artikel/{id}', [DashboardController::class, 'update_artikel'])->name('update_artikel');

    Route::get('/tambah_artikel', [DashboardController::class, 'tambah_artikel'])->name('tambah_artikel');
    Route::get('/edit_artikel/{id}', [DashboardController::class, 'edit_artikel'])->name('edit_artikel');
    Route::get('/hapus_artikel/{id}', [DashboardController::class, 'hapus_artikel'])->name('hapus_artikel');
    Route::post('/simpan_artikel', [DashboardController::class, 'simpan_artikel'])->name('simpan_artikel');
    Route::post('/update_artikel/{id}', [DashboardController::class, 'update_artikel'])->name('update_artikel');

    Route::get('/tambah_testimonial', [DashboardController::class, 'tambah_testimonial'])->name('tambah_testimonial');
    Route::get('/edit_testimonial/{id}', [DashboardController::class, 'edit_testimonial'])->name('edit_testimonial');
    Route::get('/hapus_testimonial/{id}', [DashboardController::class, 'hapus_testimonial'])->name('hapus_testimonial');
    Route::post('/simpan_testimonial', [DashboardController::class, 'simpan_testimonial'])->name('simpan_testimonial');
    Route::post('/update_testimonial/{id}', [DashboardController::class, 'update_testimonial'])->name('update_testimonial');
});