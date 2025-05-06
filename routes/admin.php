<?php

use App\Http\Controllers\Dashboard\RoleController;
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

Route::middleware('guest:admin')->prefix('admin')->name('admin.')
    ->namespace('App\Http\Controllers\Dashboard')->group(function () {
        Auth::routes();
        Route::get('register', function () {
            return redirect()->route('admin.login');
        });

        Route::group(['middleware' => ['auth:admin']], function () {

            Route::get('/', 'DashboardController@index')->name('dashboard');
            Route::resource('admins', 'AdminController');
            Route::resource('roles', 'RoleController');
            Route::resource('sliders', 'SliderController');
            Route::resource('categories', 'CategoryController');
            Route::resource('products', 'ProductController');
            Route::resource('about-us', 'AboutUsController');
            Route::resource('testimonials', 'TestimonialController');

            Route::resource('about', 'AboutController');
            Route::resource('messages', 'MessageController');
            Route::resource('contacts', 'ContactController');
            Route::resource('settings', 'SettingController');
        });
    });
