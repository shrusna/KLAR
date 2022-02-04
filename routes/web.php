<?php

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
    return view('dashboard');
});

Route::get('/kehadiran', function () {
    return view('kehadiran');
});

Route::get('/laporan', function () {
    return view('laporan');
});

Route::get('/member', function () {
    return view('member');
});

Route::get('/transaksi', function () {
    return view('transaksi');
});
