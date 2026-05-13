<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImportController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/upload', [ImportController::class, 'form']);
Route::post('/import', [ImportController::class, 'import']);
Route::get('/users', [ImportController::class, 'users'])->name('admin.users');
