<?php

Route::get('/', function () {
    return view('web/home');
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('dashboard');

//Catalog.................................................................................

//Categories..............................................................................
Route::get('/categories', 'adminpanel\PageController@categories');
Route::post('/category/add', 'adminpanel\category\CategoryController@add');
Route::get('/category/edit/{id}', 'adminpanel\category\CategoryController@edit');
Route::get('/category/delete/{id}', 'adminpanel\category\CategoryController@delete');
//SubCategories...........................................................................
Route::get('/subcategories', 'adminpanel\PageController@subcategories');
Route::post('/subcategory/add', 'adminpanel\subcategory\SubcategoryController@add');
Route::get('/subcategory/edit/{id}', 'adminpanel\subcategory\SubcategoryController@edit');
Route::get('/subcategory/delete/{id}', 'adminpanel\subcategory\SubcategoryController@delete');
