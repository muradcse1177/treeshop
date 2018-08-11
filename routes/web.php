<?php

Route::get('/', function () {
    return view('web/home');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('dashboard');
