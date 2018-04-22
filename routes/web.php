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

Auth::routes();
Route::get('/admin', 'Admin\AdminController@index')->name('admin');
Route::get('/home', 'HomeController@index')->name('home');
//分类
Route::get('/tree','Admin\TreeController@index');
Route::any('/tree/create','Admin\TreeController@create');
Route::post('/tree/del','Admin\TreeController@del');
Route::get('/tree/edit/{id}','Admin\TreeController@edit');
Route::post('/tree/update','Admin\TreeController@update');
//路演项目
Route::get('/project','Admin\ProjectController@index');
Route::any('/project/create','Admin\ProjectController@create');
Route::post('/project/add','Admin\ProjectController@add');
Route::post('/project/del','Admin\ProjectController@del');
Route::get('/project/edit/{id}','Admin\ProjectController@edit');
Route::post('/project/update','Admin\ProjectController@update');
//会议安排
Route::get('/meet','Admin\MeetController@index');
Route::any('/meet/create','Admin\MeetController@create');
Route::post('/meet/add','Admin\MeetController@add');
Route::post('/meet/del','Admin\MeetController@del');
Route::get('/meet/edit/{id}','Admin\MeetController@edit');
Route::post('/meet/update','Admin\MeetController@update');
//产品展示
Route::get('/product','Admin\ProductController@index');
Route::any('/product/create','Admin\ProductController@create');
Route::post('/product/add','Admin\ProductController@add');
Route::post('/product/del','Admin\ProductController@del');
Route::get('/product/edit/{id}','Admin\ProductController@edit');
Route::post('/product/update','Admin\ProductController@update');
//网络营销
Route::get('/market','Admin\MarketController@index');
Route::any('/market/create','Admin\MarketController@create');
Route::post('/market/add','Admin\MarketController@add');
Route::post('/market/del','Admin\MarketController@del');
Route::get('/market/edit/{id}','Admin\MarketController@edit');
Route::post('/market/update','Admin\MarketController@update');