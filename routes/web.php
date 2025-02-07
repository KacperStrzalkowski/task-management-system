<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\RegisteredUserController;

Route::view("/", "index");

Route::middleware(['guest'])->group(function () {
    Route::get("/login", [SessionController::class, 'create'])->name('login');
    Route::post('/login', [SessionController::class, 'store']);

    Route::get('/register', [RegisteredUserController::class, 'create']);
    Route::post('/register', [RegisteredUserController::class, 'store']);
});


Route::middleware(['auth'])->group(function () {

    Route::view("/", "dashboard.index");

    Route::delete("/logout", [SessionController::class, 'destroy']);

    Route::get("/teams", [TeamController::class, 'index']);
});