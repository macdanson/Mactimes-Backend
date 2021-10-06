<?php

use App\Http\Resources\PostResource;
use App\Http\Resources\PostsResource;
use App\Post;
use Illuminate\Support\Facades\Auth;
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

Route::get('test', function () {
    // $test = Post::find(10);
    return new PostsResource(Post::paginate());
});

Route::get('/login', function () {
    return view('auth.login');
});

Auth::routes(['verify' => true]);

Auth::routes();

Route::get('/', 'HomeController@index')->name('home')->middleware('verified')->middleware('auth');
Route::resource('categories', 'CategoryController');
Route::resource('tags', 'TagController');
Route::resource('comments', 'CommentController');
Route::resource('posts', 'PostController');
