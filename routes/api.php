<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::resource('categories', 'Api\CategoryApiController');
Route::get('categories/{id}/posts', 'Api\CategoryApiController@posts');

Route::resource('posts', 'Api\PostApiController');

Route::resource('authors', 'Api\UserApiController');
Route::get('authors/{id}/posts', 'Api\UserApiController@posts');

Route::resource('tags', 'Api\TagApiController');
Route::get('tags/{id}/posts', 'Api\TagApiController@posts');

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
