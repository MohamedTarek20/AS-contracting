<?php

use Illuminate\Support\Facades\Route;


require __DIR__ . '/admin.php';

Route::
        namespace('App\Http\Controllers\Frontend')->group(function () {

            Route::get('/', 'HomeController@index')->name('home');
            Route::get('/change-lang/{lang}', 'HomeController@changeLanguage')->name('change-language');
            Route::get('about', 'AboutController@index')->name('about.index');
            Route::get('contacts', 'ContactController@index')->name('contacts.index');
            Route::post('messages', 'MessageController@store')->name('messages.store');
            Route::get('projects', 'ProjectController@index')->name('projects.index');
            Route::get('projects/{id}', 'ProjectController@show')->name('projects.show');
        });

use Illuminate\Support\Facades\Artisan;

Route::get('/run-storage-link', function () {
    Artisan::call('storage:link');
    return 'storage:link command has been executed.';
});