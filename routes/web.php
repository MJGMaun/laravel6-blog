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

use App\Post;

Route::get('/', function () {
    return view('welcome', [
        'posts' => Post::orderBy('id', 'desc')->get()
    ]);
});

Route::resource('posts', 'PostController');

// Route::get('posts', 'PostController@index');
// Route::get('post/{id}', 'PostController@index');
// Route::get('show_post/{id}', 'PostController@show')->name('post.show');
// Route::get('/create_post', function () {
//     return view('create_post');
// });
