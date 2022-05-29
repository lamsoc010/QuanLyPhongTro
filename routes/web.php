<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Clients\HomeController;
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

// Clients
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/category', [HomeController::class, 'category'])->name('category');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/latest_news', [HomeController::class, 'latest_news'])->name('latest_news');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/element', [HomeController::class, 'element'])->name('element');
Route::get('/blog', [HomeController::class, 'blog'])->name('blog');
Route::get('/blog_details', [HomeController::class, 'blog_details'])->name('blog_details');
Route::get('/details', [HomeController::class, 'details'])->name('details');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';




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

    // new routes
    Route::get('/', 'HomeController@index');

    Route::get('/hello', function () {
        return view('index');
    });
    Route::get('/users/listUser', 'HomeController@user');
    Route::get('/posts/newPost', 'HomeController@post');
    
    // get all user with datatable
    Route::get('/users/getList', 'HomeController@anyData');

    // show user with function details in view --- admin.users.details
    Route::get('/users/details/{id}', 'HomeController@details');

     // show user with function details in view --- admin.users.details
     Route::get('/users/edit/{id}', 'HomeController@getOneUser');

      // show user with function details in view --- admin.users.details
    Route::post('/users/edit/{id}', 'HomeController@edit');

    // add new user ----admin.users.create
    Route::post('/users/create', 'HomeController@create');
});