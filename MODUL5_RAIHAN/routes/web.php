<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\MahasiswaController;

Route::get('/', function() {
    return view('layouts.app');
})->name('home');

Route::prefix('dosen')->group(function () {
    Route::get('/', [DosenController::class, 'index'])->name('dosens.index');
    Route::get('create', [DosenController::class, 'getCreateForm'])->name('dosens.create');
    Route::post('store', [DosenController::class, 'store'])->name('dosens.store');
    Route::get('{id}/edit', [DosenController::class, 'getEditForm'])->name('dosens.edit');
    Route::put('{id}', [DosenController::class, 'update'])->name('dosens.update');
    Route::delete('{id}', [DosenController::class, 'destroy'])->name('dosens.destroy');
});

Route::prefix('mahasiswas')->group(function () {
    Route::get('/', [MahasiswaController::class, 'index'])->name('mahasiswas.index');
    Route::get('create', [MahasiswaController::class, 'getCreateForm'])->name('mahasiswas.create'); 
    Route::post('store', [MahasiswaController::class, 'store'])->name('mahasiswas.store');
    Route::get('{id}/edit', [MahasiswaController::class, 'getEditForm'])->name('mahasiswas.edit');
    Route::put('{id}', [MahasiswaController::class, 'update'])->name('mahasiswas.update');
    Route::delete('{id}', [MahasiswaController::class, 'destroy'])->name('mahasiswas.destroy');
});
?>