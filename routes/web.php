<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SessionController;

Route::view("/", "index");

Route::get("/login", [SessionController::class, 'create'])->name('login');