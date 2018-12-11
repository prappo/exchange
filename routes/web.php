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

Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/user/home', 'UserController@home');
Route::get('/user/package/add', 'AdminController@addIndex');
Route::post('/user/package/add', 'AdminController@add');
Route::get('/user/package/list', 'AdminController@packageList');
Route::get('/user/package/edit/{id}', 'AdminController@edit');
Route::post('/package/info','PackageController@info');