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
//Route::get('/register', '\App\Http\Controllers\RegisterCarListController@list');


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::group(['middleware' => 'auth'], function() {
    Route::group(['middleware' => 'role:admin', 'prefix' => 'admin', 'as' => 'admin.'], function() {
        Route::resource('user', \App\Http\Controllers\Admin\AdminController::class);
        Route::resource('user', \App\Http\Controllers\CarListController::class);

    });

   Route::group(['middleware' => 'role:employee', 'prefix' => 'employee', 'as' => 'employee.'], function() {
       Route::resource('user', \App\Http\Controllers\Employee\EmployeeController::class);
   });

    Route::group(['middleware' => 'role:users', 'prefix' => 'users', 'as' => 'users.'], function() {
        Route::resource('user', \App\Http\Controllers\Users\UsersController::class);
    });

});


