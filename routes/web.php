<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Clients\HomeController;
use App\Http\Controllers\Clients\MotelController;
use App\Http\Controllers\Clients\PostController;
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
Route::get('/handleIndex', [HomeController::class, 'handleIndex'])->name('handleIndex');
Route::get('/category', [HomeController::class, 'category'])->name('category');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/latest_news', [HomeController::class, 'latest_news'])->name('latest_news');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/element', [HomeController::class, 'element'])->name('element');
Route::get('/blog', [HomeController::class, 'blog'])->name('blog');
Route::get('/blog_details', [HomeController::class, 'blog_details'])->name('blog_details');

// Post
Route::get('/all-posts', [PostController::class, 'all_posts'])->name('all_posts');
Route::get('/handleAllPosts', [PostController::class, 'handleAllPosts'])->name('handleAllPosts');
Route::get('/details-post/{id}', [PostController::class, 'detailsPost'])->name('details_post');
Route::get('/handleDetailsPost/{id}', [PostController::class, 'handleDetailsPost'])->name('handleDetailsPost');
Route::get('/handleReplyCommentPosts' , [PostController::class, 'handleReplyComment'])->name('posts.handleReplyComment');
Route::get('/handleCommentPosts' , [PostController::class, 'handleComment'])->name('posts.handleComment');

// Motels
Route::get('/all-motels/{price?}-{person?}', [MotelController::class, 'all_motels'])->name('all_motels');
Route::get('/handleAllMotels', [MotelController::class, 'handleAllMotels'])->name('handleAllMotels');
Route::get('/details-motel/{id}', [MotelController::class, 'detailsMotel'])->name('details_motel');
Route::get('/handleDetailsMotel/{id}', [MotelController::class, 'handleDetailsMotel'])->name('handleDetailsMotel');
Route::get('/handleReplyCommentMotels' , [MotelController::class, 'handleReplyComment'])->name('handleReplyComment');
Route::get('/handleCommentMotels' , [MotelController::class, 'handleComment'])->name('handleComment');
Route::get('/loadMoreCommentMotels' , [MotelController::class, 'loadMoreComment'])->name('loadMoreComment');




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
        // new routes
        Route::get('/', 'HomeController@index');
        Route::get('/handleAdminIndex', 'HomeController@handleAdminIndex');
    
        Route::get('/hello', function () {
            return view('index');
        });
        Route::get('/users/listUser', 'HomeController@user');
       
        
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

        //---------------------------------------Motels------------------------------------------------------
        // show view motels
        Route::get('/motels/listMotels', 'MotelsController@index');
        // get all motel with datatable
        Route::get('/motels/getList', 'MotelsController@anyData');
        // get all name motels --- admin/motels/getAllNameMotels
        Route::get('/motels/getAllNameMotels', 'MotelsController@getAllNameMotels');

        //-------------------------------------------Rooms----------------------------------------------------
        // show view rooms 
        Route::get('/rooms/listRooms', 'RoomsController@index');

         //-------------------------------------------Motels----------------------------------------------------
        // save motel
        Route::post('/motels/create/{id}', 'MotelsController@create');

        //-------------------------------------------Posts----------------------------------------------------
        // show view posts
        Route::get('/posts/listPosts', 'PostsController@index');
        // get all posts with datatable
        Route::get('/posts/getList', 'PostsController@anyData');
        // view new post
        Route::get('/posts/newPost/{id}', 'PostsController@post');
        // get all name category --- admin/posts/getAllNameCategory
        Route::get('/posts/getAllNameCategory', 'PostsController@getAllNameCategory');
        // add new post
        Route::post('/posts/create', 'PostsController@create');

        //-------------------------------------------Host----------------------------------------------------
        // show view host
        Route::get('/hosts/listHosts', 'HostsController@index');
        // get all host with datatable(chủ nhà)
        Route::get('/hosts/getHost', 'HomeController@anyData');
    });
    
    Route::post('logout', 'Auth\AuthenticatedSessionController@destroy')->name('logout');
    
});

// administration
Route::namespace('Administration')->prefix('administration')->name('administration.')->group(function() {
    // Route::namespace('Auth')->middleware('guest:admin')->group(function() {
    //     // login route
    //     Route::get('login', 'AuthenticatedSessionController@create')->name('login');
    //     Route::post('login', 'AuthenticatedSessionController@store')->name('adminlogin');
    // });
    
    Route::middleware(['auth'])->group(function() {
        // Route::get('dashboard', 'HomeController@index')->name('dashboard');
        // new routes
        Route::get('/', 'HomeController@index');
    });
    //-------------------------------------------Posts----------------------------------------------------
    // view new post
    Route::get('/posts/newPost/{id}', 'PostsController@post');
    // add new post
    Route::post('/posts/create', 'PostsController@create');


<<<<<<< HEAD
=======
        //-------------------------------------------Posts----------------------------------------------------
        // show view posts
        Route::get('/posts/listPosts', 'PostsController@index')->name('listPosts');
        // get all posts with datatable
        Route::get('/posts/getList', 'PostsController@anyData');
        // view new post
        Route::get('/posts/newPost/{id}', 'PostsController@post');
        // get all name category --- admin/posts/getAllNameCategory
        Route::get('/posts/getAllNameCategory', 'PostsController@getAllNameCategory');
        // add new post
        Route::post('/posts/create', 'PostsController@create');

        //-------------------------------------------Host----------------------------------------------------
        // show view host
        Route::get('/hosts/listHosts', 'HostsController@index');
        // get all host with datatable(chủ nhà)
        Route::get('/hosts/getHost', 'HomeController@anyData');
   });
>>>>>>> da7b053af2c6f560c582c491dc4f0c37188d5d0f
    
//    Route::post('logout', 'Auth\AuthenticatedSessionController@destroy')->name('logout');
    
});