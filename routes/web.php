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
    return view('hero');
});




Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/services', function () {
    return view('services');
})->name('services');


Route::get('/contact', function () {
    return view('contact');
})->name('contact');


Route::get('/team', function () {
    return view('team');
})->name('team');



Route::get('/booking', function () {
    return view('booking');
})->name('booking');


Route::get('/training', function () {
    return view('training');
})->name('training');



Route::get('/gallery', function () {
    return view('gallery');
})->name('gallery');

Route::get('/partners', function () {
    return view('partners');
})->name('partners');

Route::get('/blogs', function () {
    return view('blogs');
})->name('blogs');

Route::get('/videos', function () {
    return view('videos');
})->name('videos');

Route::get('/brochures', function () {
    return view('brochures');
})->name('brochures');

Route::get('/why', function () {
    return view('why');
})->name('why');


Route::get('/manage', function () {
    return view('manage');
})->name('manage');

Route::get('/partners', function () {
    return view('partners');
})->name('partners');

Route::get('/resource', function () {
    return view('resources');
})->name('resource');

Route::get('/why', function () {
    return view('why');
})->name('why');
