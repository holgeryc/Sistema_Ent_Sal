<?php

use Illuminate\Support\Facades\Route;


// Route::get('/', function () {
//     return view('welcome');
// });

Route::view('/', 'welcome')->name('Inicio');
Route::view('/entrada', 'entrada')->name('Entrada');
Route::view('/salida', 'salida')->name('Salida');