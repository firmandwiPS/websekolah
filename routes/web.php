<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\SesiController;
use Illuminate\Support\Facades\Route;



Route::middleware(['guest'])->group(function () {

    Route::get('/',[SesiController::class, 'index'])->name('login');
    Route::post('/',[SesiController::class, 'login']);
});

Route::get('/home', function () {
    return redirect('/admin');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/admin',[AdminController::class, 'index']);
    Route::get('/admin/guru',[AdminController::class, 'guru']);
    Route::get('/admin/guru/halamanguru',[AdminController::class, 'halamanguru']);
    Route::get('/admin/siswa/pembelajaran', [AdminController::class, "pembelajaransiswa"]);
    Route::get('/admin/guru/pembelajaran', [AdminController::class, "pembelajaranguru"]);
    Route::get('/admin/siswa/halamansiswa',[AdminController::class, 'halamansiswa']);
    Route::get('/admin/detail',[AdminController::class, 'detail']);
    Route::get('/admin/siswa',[AdminController::class, 'siswa']);
    
    
    
    
    Route::get('/logout',[SesiController::class, 'logout']);
});
Route::get('/halaman',[AdminController::class, 'halaman']);

