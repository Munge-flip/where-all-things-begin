<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\service;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\UserController;

Route::get('/service', [ServiceController::class, "create"])->name("Service.create");
Route::get('/store', [ServiceController::class, "store"])->name("Service.store");
Route::get('/view', [ServiceController::class, "view"])->name("Service.view");
Route::get('/update', [ServiceController::class, "update"])->name("Service.update");
Route::get('/destroy', [ServiceController::class, "destroy"])->name("Service.destroy");