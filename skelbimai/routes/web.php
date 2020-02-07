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
Route::get('/skelbimas', 'HomeController@skelbimas');
Route::get('/apie', 'HomeController@apie');
Route::get('/kontaktai', 'HomeController@kontaktai');
Route::get('/prisijungti', 'HomeController@prisijungti');
Route::get('/registracija', 'HomeController@registracija');
Route::get('/pridetikategorija', 'CategoriesController@addcategory');
Route::get('/pridetiskelbima', 'SkelbimaiController@addad');
Route::post('/storecategory', 'CategoriesController@storeCategory');
Route::get('/categories', 'CategoriesController@categories');


