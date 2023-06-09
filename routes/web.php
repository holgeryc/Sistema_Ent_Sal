<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Models\Post;

    

// Route::get('/', function () {
//     return view('welcome');
// });

Route::view('/', 'welcome')->name('Inicio');
Route::get('/entrada/formularioE', [PostController::class, 'formularioE'])->name('posts.formularioE');
Route::get('/entrada/formularioS', [PostController::class, 'formularioS'])->name('posts.formularioS'); 
Route::post('/entrada', [PostController::class, 'store'])->name('posts.store');
// Route::post('/entrada', [PostController::class, 'storeS'])->name('posts.storeS');
Route::get('/entrada/{post}', [PostController::class, 'show'])->name('posts.show');
Route::get('/entrada', [PostController::class, 'index'])->name('Entrada');
Route::get('/entrada/{post}/editar', [PostController::class, 'editar'])->name('posts.editar');
Route::patch('/entrada/{post}', [PostController::class, 'update'])->name('posts.update');


Route::view('/salida', 'salida')->name('Salida');