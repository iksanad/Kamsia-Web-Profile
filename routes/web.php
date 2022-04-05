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
    return view('home', [
    	'url' => 'home'
    ]);
});

Route::get('/fitur', function () {
    return view('feature', [
    	'url' => 'fitur'
    ]);
});

Route::get('/harga', function () {
    return view('pricing', [
    	'url' => 'harga'
    ]);
});

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/keunggulan-untuk-masyarakat', function () {
    return view('public-advantage', [
        'url' => ''
    ]);
});

Route::get('/keunggulan-untuk-pemilik-usaha', function () {
    return view('owner-advantage', [
        'url' => ''
    ]);
});
