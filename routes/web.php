<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\AdminShowController;
use App\Http\Controllers\AdminController;


//admin routes
// Routes for Admins
Route::get('admin/login', [AdminShowController::class, 'showLoginForm'])->name('admin.login');
Route::post('admin/login', [AdminController::class, 'login']);
Route::post('admin/register', [AdminController::class, 'register']);
Route::post('admin/logout', [AdminController::class, 'logout']);
Route::group(['middleware' => ['auth:admin']], function () {
    Route::get('admin/dashboard', [AdminShowController::class, 'ShowAdminHome'])->name('admin.dashboard');

    Route::get('admin/data-mapel', [AdminShowController::class, 'ShowDataMapel']);
    Route::post('admin/data-mapel', [AdminController::class, 'InsertDataMapel']);

    Route::get('admin/data-guru', [AdminShowController::class, 'ShowDataGuru']);
    Route::post('admin/data-guru', [AdminController::class, 'InsertDataGuru']);

    Route::get('admin/data-siswa', [AdminShowController::class, 'ShowDataSiswa']);
    Route::post('admin/data-siswa', [AdminController::class, 'InsertDataSiswa']);

    Route::get('admin/data-kelas', [AdminShowController::class, 'ShowDataKelas']);
    Route::post('admin/data-kelas', [AdminController::class, 'InsertDataKelas']);

    Route::get('admin/data-kelas-belajar', [AdminShowController::class, 'ShowDataKelasBelajar']);
    Route::post('admin/data-kelas-belajar', [AdminController::class, 'InsertDataKelasBelajar']);


    Route::get('admin/jadwal', [AdminController::class, 'ShowAdminJadwal'])->name('admin.jadwal');
    // Route::get('admin/jadwal', [AdminAuthController::class, 'Jadwal_User'])->name('admin.jadwal');
});
