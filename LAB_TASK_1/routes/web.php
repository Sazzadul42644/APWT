<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

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
    return view('welcome');
});

Route::get('/hello', [PagesController::class, 'index'])->name('hello');
Route::get('/profile',[PagesController::class, 'profile'])->name('profile');
Route::get('/teams',[PagesController::class, 'teams'])->name('teams');
Route::get('/product',[PagesController::class, 'product'])->name('product');
Route::get('/contact',[PagesController::class, 'contact'])->name('contact');