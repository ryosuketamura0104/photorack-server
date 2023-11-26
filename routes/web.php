<?php

use App\Http\Controllers\TestController;
use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::resource('tests', TestController::class);

Route::get('/', function () {
    return view('welcome');
});

/*  https://qiita.com/mumucochimu/items/3d4ff8fa8fcb9826339f
    https://qiita.com/nakaji0210/items/036877bf6fe71f5cf9ef */
// Auth::routes();
Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
