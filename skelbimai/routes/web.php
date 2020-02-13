<?php

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

Route::get('/', 'HomeController@index');
Route::get('/skelbimai', 'HomeController@skelbimai');
Route::get('/skelbimas/{ad}', 'HomeController@skelbimas');
Route::get('/apie', 'HomeController@apie');
Route::get('/kontaktai', 'HomeController@kontaktai');
Route::get('/prisijungti', 'HomeController@prisijungti');
Route::get('/registracija', 'HomeController@registracija');
Route::get('/pridetikategorija', 'CategoriesController@addcategory');
Route::get('/pridetiskelbima', 'SkelbimaiController@addad');
Route::post('/storecategory', 'CategoriesController@storeCategory');
Route::get('/categories', 'CategoriesController@categories');
Route::get('/delete/category/{category}', 'CategoriesController@deleteCategory');
Route::post('/storead', 'SkelbimaiController@storeAd');
Route::get('/ads', 'SkelbimaiController@ads');
Route::get('/addelete/{ad}', 'SkelbimaiController@adDelete');
Route::get('/addata/{ad}', 'SkelbimaiController@adData');
Route::post('/adupdate/{ad}', 'SkelbimaiController@adUpdate');
Route::get('/search/', 'HomeController@searchAction');

