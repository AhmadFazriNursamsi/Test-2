<?php

use App\Http\Controllers\BooksController;
use App\Http\Controllers\DaftarController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
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

Route::get('/', function () {
    return view('home', [
        'title' => 'Home'
    ]);
});
Route::get('/about', function () {
    return view('about', [
        'title' => 'About'
    ]);
});

// Route::get('/post', ['App\Http\Controllers\PostController@index']);
Route::get('/post', [PostController::class, 'index']);
Route::get('/post/{post}', [PostController::class, 'show']);

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'auth']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

// Route::post('/books', [RegisterController::class, 'store']);
// Route::get('/dash', function () {
//     return view('lol', [
//         'title' => 'Profile',
//         'title2' => 'Dash'
//     ]);

Route::get('/dash', [DashboardController::class, 'index'])->middleware('auth');
Route::get('/profile', [DashboardController::class, 'index']);

Route::get('/dasss', [DaftarController::class, 'index']);
Route::get('/dasss/create', [DaftarController::class, 'create']);
Route::get('/dasss/{daftar}', [DaftarController::class, 'show']);
Route::post('/dasss', [DaftarController::class, 'store']);

Route::get('/dasss/{daftar}/edit', [DaftarController::class, 'edit']);

Route::post('/dasss/lol', [DaftarController::class, 'update']);

Route::delete('/dasss/{daftar}', [DaftarController::class, 'destroy']);
Route::get('/user', [BooksController::class, 'index2']);
// Route::post('/dasss', [BooksController::class, 'store']);
// Route::post('/edit/{book}/edit', [BooksController::class, 'edit']);
// Route::get('/edit/{book}', [BooksController::class, 'edit']);
// Route::patch('/edit/{book}', [BooksController::class, 'update']);
