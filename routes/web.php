<?php

Route::get('/', function () {
    return view('web/home');
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('dashboard');

//Catalog.................................................................................
Route::get('/categories', 'adminpanel\PageController@categories');
Route::post('/category/add', 'adminpanel\category\CategoryController@add');
Route::get('/category/edit/{id}', 'adminpanel\category\CategoryController@edit');
Route::get('/category/delete/{id}', 'adminpanel\category\CategoryController@delete');
