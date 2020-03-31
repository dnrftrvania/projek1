<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
Route::post('register', 'UserController@register');
Route::post('login', 'UserController@login');

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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });
Route::middleware(['jwt.verify'])->group(function(){
    Route::get('book', 'BookController@book');
    Route::get('bookall', 'BookController@bookAuth');
    Route::get('user', 'UserController@getAuthenticatedUser');
});
