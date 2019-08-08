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

Route::post('register', 'Auth\RegisterController@register');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout');

Route::group(['middleware' => 'auth:api'], function() {
    Route::get('groups', 'GroupController@index');
    Route::post('groups', 'GroupController@store');
    Route::get('groups/{group}', 'GroupController@show');
    Route::put('groups/{group}', 'GroupController@update');
    Route::put('groups/{group}/schedule', 'GroupScheduleController');
    Route::post('groups/{group}/invite', 'GroupInviteController');
    Route::post('groups/{group}/join', 'JoinGroupController');
    Route::get('groups/{group}/users', 'GroupUserController@index');
    Route::get('groups/{group}/users/{user}', 'GroupUserController@show');
});

