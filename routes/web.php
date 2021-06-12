<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MobilController;

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

Route::get('/lexus', function () {
    return view('home');
});

Route::get('/lm', [PageController::class, 'flm']);

Route::get('/ls', [PageController::class, 'fls']);

Route::get('/rx', [PageController::class, 'frx']);

Route::resource('/mobil', (MobilController::class));

Route::get('/contoh', [PageController::class, 'fcontoh']);