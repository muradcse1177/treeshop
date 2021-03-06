<?php
Auth::routes();
Route::get('/home', 'HomeController@index')->name('dashboard');
//WebHome...............................................................................................................
Route::get('/', 'web\WebhomeController@webhome');
Route::get('/single-product/{id}', 'web\WebhomeController@singleProduct');
Route::get('/cart', 'web\WebhomeController@cart');

//Catalog...............................................................................................................

    //Categories..................................................................................
    Route::get('/categories', 'adminpanel\PageController@categories');
    Route::post('/category/add', 'adminpanel\catalog\CategoryController@add');
    Route::get('/category/edit/{id}', 'adminpanel\catalog\CategoryController@edit');
    Route::get('/category/delete/{id}', 'adminpanel\catalog\CategoryController@delete');
    //SubCategories...............................................................................
    Route::get('/subcategories', 'adminpanel\PageController@subcategories');
    Route::post('/subcategory/add', 'adminpanel\catalog\SubcategoryController@add');
    Route::get('/subcategory/edit/{id}', 'adminpanel\catalog\SubcategoryController@edit');
    Route::get('/subcategory/delete/{id}', 'adminpanel\catalog\SubcategoryController@delete');
    //Products....................................................................................
    Route::get('/products', 'adminpanel\PageController@products');
    Route::post('/selectSubcategory', 'adminpanel\catalog\ProductController@selectSubcategory');
    Route::post('/product/add', 'adminpanel\catalog\ProductController@add');
    Route::get('/product/edit/{id}/{category_id}', 'adminpanel\catalog\ProductController@edit');
    //Banners.....................................................................................
    Route::get('/banners', 'adminpanel\PageController@banners');
    Route::post('/banner/add', 'adminpanel\catalog\BannerController@add');
    Route::get('/banner/edit/{id}', 'adminpanel\catalog\BannerController@edit');