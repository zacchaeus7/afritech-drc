<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Admin\AdminController;
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

Route::group(['namespace' => 'App\Http\Controllers'], function() {

    Route::get('/', 'AfritechController@index');
    Route::get('/about-us', 'AfritechController@about');
    Route::get('/contact-us', 'AfritechController@contact');
    Route::get('/our-services', 'AfritechController@service');

    Route::get('/my-service/{id}','ServiceController@repair_pump');

});

Route::get('login', [AuthController::class, 'index']);
Route::post('login', [AuthController::class, 'Login']);

Route::middleware('auth.basic')->group(function() {

    Route::get('registration', [AuthController::class, 'registration'])->name('register-user');
    Route::post('custom-registration', [AuthController::class, 'customRegistration'])->name('register.custom');
    Route::get('signout', [AuthController::class, 'signOut'])->name('signout');

Route::group(['namespace' => 'App\Http\Controllers\Admin'], function() {

        Route::resource('admin-home','AdminController');
        Route::resource('service/index','ServiceController');

});



});


