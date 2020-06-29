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
Route::middleware('auth:api')->get('user', function (Request $request) {
    return $request->user();
});

// Route::group(['prefix' => 'auth', 'namespace' => 'Auth'], function () {
//     Route::post('signin', 'SignInController');
//     Route::post('signout', 'SignOutController');
//     Route::get('me', 'MeController');
// });

Route::get('books', 'BookController@index');
Route::get('user', 'UserController@user');

Route::group(['prefix' => 'book'], function () {
    Route::post('add', 'BookController@add');
    Route::get('edit/{id}', 'BookController@edit');
    Route::post('update/{id}', 'BookController@update');
    Route::delete('delete/{id}', 'BookController@delete');
});

Route::group(['prefix' => 'user'], function () {
    Route::post('register', 'UserController@register');
});