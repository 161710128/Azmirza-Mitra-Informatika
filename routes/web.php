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
    return view('jadi');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::group(['prefix'=>'admin', 'middleware'=>['auth']], function () {
    Route::resource('career','CareerController');
    Route::resource('portofolio','PortofolioController');
    Route::resource('contact','Contact_usController');
    Route::resource('product','ProductController');
    Route::resource('indexs','IndexsController');
    Route::resource('others','OthersController');
    });
    

    Route::get('/product','FrontendController@product')->name('product');
    Route::get('/contact','FrontendController@contact')->name('contact');
    Route::get('/indexs','FrontendController@indexs')->name('indexs');
    Route::get('/others','FrontendController@others')->name('others');
    Route::get('/beranda','FrontendController@beranda')->name('beranda');