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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('index');
})->name('indexnew');

Route::get('/about', function () {
    return view('about');
})->name('aboutnew');

Route::get('/skills', function () {
    return view('skills');
})->name('skillsnew');

Route::get('/blogs', function () {
    return view('blogs');
})->name('blogsnew')->middleware(['auth', 'verified']);

Route::get('/contact', function () {
    return view('contact');
})->name('contactnew');

Auth::routes(['verify' => true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/logout', function () {
    Auth::logout();
    return redirect('/login');
})->name('logout');