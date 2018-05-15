<?php

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



Route::get('/fares', function(){
   return 'U are not admin';
})->name('notAdmin');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
/**
 * All admin routes
 */
Route::group(['prefix' => 'admin'], function () {
    // DASHBOARD
    Route::get('/dashboard', function () {
        return view('backend.dashboard');
    })->name('dashboard');

    // POSTS
    Route::get('/posts/trash', 'PostsController@trash')->name('admin.posts.trash');
    Route::get('/posts/trash/{post}/remove', 'PostsController@remove')->name('admin.posts.remove');
    Route::get('/posts/{post}/restore', 'PostsController@restore')->name('admin.posts.restore');
    Route::resource('/posts', 'PostsController')->names('admin.posts');

    // CATEGORIES
    Route::resource('/categories', 'CategoryController')->names('admin.categories');

});

