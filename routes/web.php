<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CommentController;

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

Route::get('/', [AppController::class, "index"])->name('app.index');

Route::get('/about-us', [AppController::class, 'about_us'])->name('app.about-us');

Route::get('/contact', [AppController::class, 'contact_us'])->name('app.contact');

Route::get('/blog', [AppController::class, 'blog'])->name('app.blog');

Route::get('/forum', [AppController::class, 'forum'])->name('app.forum');

Route::get('/login', [AppController::class,'login'])->name('app.login');

Route::get('/register', [AppController::class, 'register'])->name('app.register');

Route::get('/post-detail', function () {
    return view('pages.post-detail');
})->name('app.post-detail');

Route::get('/elements', function () {
    return view('pages.elements');
})->name('app.elements');

Route::get('/single-blog', function () {
    return view('pages.single-blog');
})->name('app.single-blog');

Route::get('/blog-create', function () {
    return view('pages.blog-create');
})->name('app.blog-create');

Route::get('/post-create', function () {
    return view('pages.post-create');
})->name('app.post-create');

Route::apiResource("/comment",CommentController::class);
Route::apiResource("/user",UserController::class);
Route::apiResource("/post",PostController::class);
