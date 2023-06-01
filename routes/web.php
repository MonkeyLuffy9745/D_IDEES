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
    return view('pages.index');
})->name('app.index');
Route::get('/about-us', function () {
    return view('pages.about-us');
})->name('app.about-us');
Route::get('/contact', function () {
    return view('pages.contact');
})->name('app.contact');
Route::get('/post-detail', function () {
    return view('pages.post-detail');
})->name('app.post-detail');
Route::get('/courses', function () {
    return view('pages.courses');
})->name('app.courses');
Route::get('/elements', function () {
    return view('pages.elements');
})->name('app.elements');
Route::get('/single-blog', function () {
    return view('pages.single-blog');
})->name('app.single-blog');
Route::get('/blog', function () {
    return view('pages.blog');
})->name('app.blog');
Route::get('/login', function () {
    return view('pages.login');
})->name('app.login');
Route::get('/register', function () {
    return view('pages.register');
})->name('app.register');
Route::get('/blog-create', function () {
    return view('pages.blog-create');
})->name('app.blog-create');
Route::get('/post-create', function () {
    return view('pages.post-create');
})->name('app.post-create');
