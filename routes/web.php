<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

    

// Route::get('/', function () {
//     return view('welcome');
// });

Route::view('/', 'welcome')->name('Inicio');
Route::get('/entrada', [PostController::class, 'index'])->name('Entrada');
    


Route::view('/salida', 'salida')->name('Salida');