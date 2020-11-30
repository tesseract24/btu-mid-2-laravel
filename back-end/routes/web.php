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


Route::post('/destroycomment', 'delcommentController@destroy')->name('destroycomment');
Route::get('/delcomment', 'delcommentController@index')->name('delcomment');


Route::post('/destroy', 'delProductController@destroy')->name('destroy');
Route::get('/delproduct', 'delProductController@index')->name('delproduct');


Route::get('/search', 'indexController@search')->name('search');


Route::get('/addcomment', function () {
    return view('Front-end/addComment');
});

Route::post('/insertcomment',"commentsController@store");





Route::get('/addproduct', function () {
    return view('Front-end/addProduct');
});


Route::post('/insert',"addProductController@store");



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'indexController@index')->name('index');

Route::get('/{product}', 'indexController@show')->name('show');




