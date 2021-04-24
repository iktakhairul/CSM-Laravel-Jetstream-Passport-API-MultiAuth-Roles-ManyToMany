<?php

use Illuminate\Support\Facades\Route;

Route::prefix('/admin')->group(function () {
    Route::post('/login', 'App\Http\Controllers\Admin\AdminLoginController@login');
    Route::group([ 'middleware' => 'auth:api'], function() {
        Route::get('/info', 'App\Http\Controllers\Admin\AdminInfoController@index');
        Route::get('/brand', 'App\Http\Controllers\Admin\AdminInfoController@brand');
        Route::get('/car_model', 'App\Http\Controllers\Admin\AdminInfoController@carModel');
    });
});

Route::prefix('/employee')->group(function () {
    Route::post('/login', 'App\Http\Controllers\Employee\EmployeeLoginController@login');
    Route::group([ 'middleware' => 'auth:api'], function() {
        Route::get('/info', 'App\Http\Controllers\Employee\EmployeeInfoController@index');
        Route::get('/brand', 'App\Http\Controllers\Employee\EmployeeInfoController@brand');
        Route::get('/car_model', 'App\Http\Controllers\Employee\EmployeeInfoController@carModel');
    });
});

Route::prefix('/user')->group(function () {
    Route::post('/login', 'App\Http\Controllers\Users\LoginController@login');
    Route::group([ 'middleware' => 'auth:api'], function() {
        Route::get('/info', 'App\Http\Controllers\Users\UserInfoController@index');
        Route::get('/brand', 'App\Http\Controllers\Users\UserInfoController@brand');
        Route::get('/car_model', 'App\Http\Controllers\Users\UserInfoController@carModel');
    });
});

Route::get('/car_model', 'App\Http\Controllers\Users\UserInfoController@toPublicBrandInfo');
Route::get('/brand', 'App\Http\Controllers\Users\UserInfoController@toPublicCarModelInfo');
