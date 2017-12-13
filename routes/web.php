<?php

Route::get('/', 'HomeController@index');

Route::get('/post/{id}', 'HomeController@post')->name('post');

Route::prefix('admin')
    ->middleware(['auth'])
    ->group(function () {
        Route::resource('posts','Admin\PostController');
    });

Auth::routes();


