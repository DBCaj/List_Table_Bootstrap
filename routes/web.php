<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/list', [UserController::class, 'list'])->name('user.list');