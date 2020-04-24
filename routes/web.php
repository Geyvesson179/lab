<?php

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

Route::get('/curso', function () {
    return view('website.courses');
})->name('site.courses');

Route::get('/contato', function () {
    return view('website.contact');
})->name('site.contact');

Route::get('/Coleta Domiciliar', function () {
    return view('site.homecollection');
})->name('site.homecollection');
