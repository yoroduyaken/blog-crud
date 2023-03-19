<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('/register', [RegisterController::class, 'register'])->name('register');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);

Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');

Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();

    return redirect('/home');
})->middleware(['auth', 'signed'])->name('verification.verify');

Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();

    return back()->with('message', 'Verification link sent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');

Route::get('/profile', function () {
    // 確認済みのユーザーのみがこのルートにアクセス可能
})->middleware(['auth', 'verified']);

Route::get('/home', [HomeController::class, 'index'])->name('home'); 

Route::get('/blog', [BlogController::class, 'create'])->name('blog');
Route::post('/blog', [BlogController::class, 'store']); 

Route::get('/blogs', [BlogController::class, 'index'])->name('blogs');

Route::get('/blogs/{id}', [BlogController::class, 'show'])->name('blogs.show');

Route::get('/blogs/{id}/edit', [BlogController::class, 'edit'])->name('blogs.edit');
Route::post('/blogs/{id}/edit', [BlogController::class, 'update']);

Route::post('/blogs/{id}/delete', [BlogController::class, 'destroy'])->name('blogs.delete');