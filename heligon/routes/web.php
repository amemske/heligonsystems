<?php

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

Route::get('/', function () {
    return view('home.index');
})->name('home.index');

Route::get('/web-development', function () {
    return  view('home.webdev');
})->name('home.webdev');

Route::get('/cms-development', function () {
    return  view('home.cmsdev');
})->name('home.cmsdev');

Route::get('/mobile-development', function () {
    return  view('home.mobiledev');
})->name('home.mobiledev');

Route::get('/our-approach', function () {
    return  view('home.approach');
})->name('home.approach');

Route::get('/about', function () {
    return  view('home.about');
})->name('home.about');

Route::get('/contact', function () {
    return  view('home.contact');
})->name('home.contact');

