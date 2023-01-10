<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BlogController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// welcome.blade.phpを削除しました。

Route::get('/', function () {
    return view('top'); 
});

Route::get('/home', [HomeController::class, 'index'])->name('home'); 

Route::get('/blog', [BlogController::class, 'create'])->name('blog');
Route::post('/blog', [BlogController::class, 'store']); 

Route::get('/blogs', [BlogController::class, 'index'])->name('blogs');

Route::get('/blogs/{id}', [BlogController::class, 'show'])->name('blogs.show');

Route::get('/blogs/{id}/edit', [BlogController::class, 'edit'])->name('blogs.edit');
Route::post('/blogs/{id}/edit', [BlogController::class, 'update']);

Route::get('/blogs/{id}', [BlogController::class, 'show'])->name('blogs.delete');
Route::post('/blogs/{id}', [BlogController::class, 'destroy']);
