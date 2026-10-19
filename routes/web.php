<?php

use App\Http\Controllers\ToyController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ToyController::class, 'index'])->name('toys.index');
Route::get('/toys/{id}', [ToyController::class, 'show'])->name('toys.show');