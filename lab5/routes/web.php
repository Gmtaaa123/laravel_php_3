<?php

use App\Http\Controllers\TinController;
use Illuminate\Support\Facades\Route;


Route::get('/', [TinController::class, 'index'])->name('tin.index');

Route::get('/tin/create', [TinController::class, 'create'])->name('tin.create');

Route::post('/tin/store', [TinController::class, 'store'])->name('tin.store');

Route::delete('tin/delete', [TinController::class, 'delete'])->name('tin.delete');