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

Route::get('/aboutUs', function () {
    return view('about');
})->name('about');

Route::get('/blogs', function () {
    return view('blogs');
})->name('blogs');


Route::get('/booking', function () {
    return view('brochures');
})->name('brochures');

Route::get('/clients', function () {
    return view('clients');
})->name('clients');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/gallery', function () {
    return view('gallery');
})->name('gallery');

Route::get('/manage', function () {
    return view('manage');
})->name('manage');

Route::get('/partners', function () {
    return view('partners');
})->name('partners');

Route::get('/port', function () {
    return view('port');
})->name('port');

Route::get('/services', function () {
    return view('services');
})->name('services');

Route::get('/team', function () {
    return view('team');
})->name('team');

Route::get('/training', function () {
    return view('training');
})->name('training');

Route::get('/videos', function () {
    return view('videos');
})->name('videos');

Route::get('/why', function () {
    return view('why');
})->name('why');

Route::get('/booking', function () {
    return view('booking');
})->name('booking');

Route::get('/brochures', function () {
    return view('brochures');
})->name('brochures');

Route::get('/dashboard', function () {
    // return view('admin.dashboard');
    return view('admin.dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';




/* <________ADMIN PANEL ROUTES_______________
____________________________________________> */



Route::get('/adminBlogs', function () {
    return view('admin.blogs.index');
})->name('adminBlogs');

Route::get('/adminBlogForm', function () {
    return view('admin.users.form');
})->name('adminBlogForm');


Route::resource('users', App\Http\Controllers\UsersController::class);
