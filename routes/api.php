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
Route::prefix('/admin')->group(function () {
    Route::post('/login', 'App\Http\Controllers\Admin\AdminLoginController@login');
    Route::middleware('auth:api')->get('/info', 'App\Http\Controllers\Admin\AdminInfoController@index');
});

Route::prefix('/employee')->group(function () {
    Route::post('/login', 'App\Http\Controllers\Employee\EmployeeLoginController@login');
    Route::middleware('auth:api')->get('/info', 'App\Http\Controllers\Employee\EmployeeInfoController@index');
});

Route::prefix('/user')->group(function () {
    Route::post('/login', 'App\Http\Controllers\Users\LoginController@login');
    Route::middleware('auth:api')->get('/info', 'App\Http\Controllers\Users\UserInfoController@index');
});
