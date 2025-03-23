<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\UserController;
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

Route::get('/', [PagesController::class, 'index']);

Route::resource('/blog', PostsController::class);

Auth::routes();

Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/about-us', [App\Http\Controllers\PagesController::class, 'about_us']);
Route::get('/profile', [UserController::class, 'showProfile'])->name('profile');
Route::put('/profile', [UserController::class, 'updateProfile'])->name('profile.update');

Route::get('/contact-us', [ContactController::class, 'showContactForm'])->name('contact.show');
Route::post('/contact-us', [ContactController::class, 'submitContactForm'])->name('contact.submit');

Route::get('auth/google', [LoginController::class, 'redirectToGoogle'])->name('login.google');
Route::get('login/google/callback', [LoginController::class, 'handleGoogleCallback']);
Route::post('/comments', [CommentController::class, 'store'])->middleware('auth');
