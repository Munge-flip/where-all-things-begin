<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\service;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\UserController;

Route::prefix('service')->name('service.')->group(function () {
    Route::get('/', [ServiceController::class, 'create'])->name('create');
    Route::get('/store', [ServiceController::class, 'store'])->name('store');
    Route::get('/view', [ServiceController::class, 'view'])->name('view');
    Route::get('/edit', [ServiceController::class, 'edit'])->name('edit');
    Route::get('/destroy', [ServiceController::class, 'destroy'])->name('destroy');
});
