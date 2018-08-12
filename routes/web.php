<?php

Route::get('/', function () {
    return view('web/home');
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('dashboard');

//Catalog.................................................................................
Route::get('/categories', 'adminpanel\PageController@categories');
Route::get('/category/add', 'adminpanel\Category\CategoryController@add');
