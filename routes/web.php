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
    return view('clients.index');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

// Route::get('/category', [HomeController::class, 'category'])->name('category');
// Route::get('/about', [HomeController::class, 'about'])->name('about');
// Route::get('/latest_news', [HomeController::class, 'latest_news'])->name('latest_news');
// Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
// Route::get('/elements', [HomeController::class, 'elements'])->name('elements');
// Route::get('/blog', [HomeController::class, 'blog'])->name('blog');
// Route::get('/single-blog', [HomeController::class, 'single_blog'])->name('single_blog');
// Route::get('/details', [HomeController::class, 'details'])->name('details');


// Admin
Route::namespace('Admin')->prefix('admin')->name('admin.')->group(function() {
    Route::namespace('Auth')->middleware('guest:admin')->group(function() {
        // login route
        Route::get('login', 'AuthenticatedSessionController@create')->name('login');
        Route::post('login', 'AuthenticatedSessionController@store')->name('adminlogin');
    });

    Route::middleware('admin')->group(function() {
        Route::get('dashboard', 'HomeController@index')->name('dashboard');
    });
    Route::post('logout', 'Auth\AuthenticatedSessionController@destroy')->name('logout');
});