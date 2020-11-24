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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/global','productController@global')->name('global');

Route::get('/insert','productController@insert')->name('insert');
Route::post('/global','productController@store')->name('store');

Route::get('/types','typesController@types')->name('types');
Route::get('/adminindex','typesController@index')->name('index');

Route::get('/users','typesController@users')->name('users');
Route::get('/profile/{id}','typesController@profile')->name('profile');
Route::get('/allproducts','typesController@allproducts')->name('allproducts');
Route::post('/types','typesController@store')->name('storetype');

Route::get('/edit/{id}/edit','productController@edit')->name('edit');
Route::put('/edit/{id}','productController@update')->name('update');

Route::delete('/delete/{id}','productController@destroy')->name('destroyroute');


Route::delete('/deletetype/{id}','typesController@destroy')->name('destroyroutetype');

Route::get('/moreproduct','productController@moreproduct')->name('moreproduct');
Route::get('/singleproduct/{id}','productController@singleproduct')->name('singleproduct');

Route::get('/typesproducts/{id}','productController@typesproducts')->name('typesproducts');
Route::get('/userprofile/{id}','productController@userprofile')->name('userprofile');

















Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
