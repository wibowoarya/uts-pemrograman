<?php

use App\Http\Controllers\Home;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\PostsController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. Thesse
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Route::get('/', function () {
//    return view('dashboard');
//});

Route::get('/', [Home::class, 'index']);
Route::get('/profile', [Home::class, 'profile']);
Route::get('/about', [Home::class, 'about']);

Route::get('/posts', [PostsController::class, 'index']);
Route::get('/kategori', [KategoriController::class, 'index']);
