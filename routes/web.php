<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\KatalogController;
use Illuminate\Support\Facades\Auth;
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
    return view('welcome');
});

Route::get('/company', [AboutController::class, 'company']);
// Route::get('/homepage', [AboutController::class, 'homepage']);
Route::resource('barangs', BarangController::class);
Route::get('/katalog', [KatalogController::class, 'index']);


Auth::routes();

Route::get('/home', [App\Http\Controllers\AboutController::class, 'homepage'])->name('home');
