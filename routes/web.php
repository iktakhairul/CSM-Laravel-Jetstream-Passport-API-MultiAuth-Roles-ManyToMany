<?php

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

Route::get('/', function () {
    return view('welcome');
});
Route::view('About','About');
Route::view('Contact','Contact');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::group(['middleware' => 'auth'], function() {
    Route::group(['middleware' => 'role:admin', 'prefix' => 'admin', 'as' => 'admin.'], function() {
        Route::resource('user', \App\Http\Controllers\Admin\AdminController::class);
        Route::post('car_panel', 'App\Http\Controllers\Admin\AdminAddBrandController@store')->name('car_panel');
        Route::get('car_panel', 'App\Http\Controllers\Admin\AdminAddBrandController@index')->name('car_panel');
        Route::get('about', 'App\Http\Controllers\Admin\AdminAboutContactController@index')->name('about');
        Route::get('contact', 'App\Http\Controllers\Admin\AdminAboutContactController@contact')->name('contact');

    });

   Route::group(['middleware' => 'role:employee', 'prefix' => 'employee', 'as' => 'employee.'], function() {
       Route::resource('user', \App\Http\Controllers\Employee\EmployeeController::class);
       Route::get('about', 'App\Http\Controllers\Employee\EmployeeAboutContactController@index')->name('about');
       Route::get('contact', 'App\Http\Controllers\Employee\EmployeeAboutContactController@contact')->name('contact');

   });

    Route::group(['middleware' => 'role:users', 'prefix' => 'users', 'as' => 'users.'], function() {
        Route::resource('user', \App\Http\Controllers\Users\UsersController::class);
        Route::post('add_brand', 'App\Http\Controllers\Users\AddBrandController@store')->name('add_brand');
        Route::get('add_brand', 'App\Http\Controllers\Users\AddBrandController@index')->name('add_brand');
        Route::get('about', 'App\Http\Controllers\Users\UsersAboutContactController@index')->name('about');
        Route::get('contact', 'App\Http\Controllers\Users\UsersAboutContactController@contact')->name('contact');

    });
});



