<?php

use Illuminate\Http\Request;

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


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
//User Related
Route::middleware('api')->post('/auth/login', 'AuthController@login');
Route::middleware('api')->post('/auth/register', 'AuthController@register');
Route::middleware('auth:api')->get('/user/info', 'UserController@details');


//TodoItem Related
Route::middleware('auth:api')->get('/todo/get{id}', 'TodoController@get');
Route::middleware('auth:api')->post('/todo/create', 'TodoController@create');
