<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\makanController;
use App\Http\Controllers\DetailPesananController;

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

route::get ('/makan',[makanController::class,'index']);

route::get ('/makan/pesan',[makanController::class, 'store']); 

route::get ('/makan/pesan/checkout',[makanController::class, 'checkout']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/ppppp', function () {
    return view('makan');
});
