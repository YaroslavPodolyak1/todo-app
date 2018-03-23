<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::view('/', 'layouts/app');

Auth::routes();
Route::prefix('tasks')->name('tasks.')->middleware('auth')->group(function () {
    Route::get('/', 'TasksController@index');

    Route::get('/create/','TasksController@create')->name('create');
    Route::post('/store','TasksController@store')->name('store');
    
});

