<?php

Auth::routes();

Route::group(['prefix' => 'admin',  'middleware' => 'auth'], function()
{
    Route::resource('/general', 'GeneralController');
    Route::resource('/about', 'AboutController');
    Route::resource('/news', 'NewsController');
    Route::resource('/type', 'TypeController');
    Route::resource('/partner', 'PartnerController');
    Route::resource('/languages', 'LanguagesController');
    Route::resource('/categories', 'CategoriesController');
    Route::resource('/menus', 'MenusController');
    Route::resource('/images', 'ImagesController');
    Route::resource('/staff-types', 'StaffTypeController');
    Route::post('/getImages', 'ImagesController@getImages');
});

Route::get('/', 'HomeController@index');
Route::get('/about', 'SiteAboutController@index');
Route::get('/news/{id?}', 'SiteNewsController@index');
Route::get('/banner-type/{id}', 'BannerController@get_banner');
