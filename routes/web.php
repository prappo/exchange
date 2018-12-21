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
    return view('home');
});

Auth::routes();


Route::get('/page/contact', 'Page@contact');
Route::get('/page/notice', 'Page@notice');
Route::get('/page/testimonials', 'Page@testimonials');
Route::get('/page/exchange', 'Page@exchange');
Route::get('/page/history', 'Page@history');
Route::get('/buy/account', 'Page@buyAccount');
Route::post('/buy/account', 'Page@buyAccountAction');
Route::get('/page/{id}', 'Page@page');


Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/mobile', 'HomeController@mobile');
Route::get('/user/home', 'UserController@home');

Route::get('/user/package/add', 'AdminController@addIndex');
Route::post('/user/package/add', 'AdminController@add');
Route::get('/user/package/list', 'AdminController@packageList');
Route::get('/user/package/edit/{id}', 'AdminController@editPackage');
Route::post('/user/package/update', 'AdminController@edit');
Route::post('/package/info', 'PackageController@info');

Route::get('/user/page/add', 'PageController@addPageIndex');
Route::post('/user/page/add', 'PageController@add');
Route::get('/user/page/list', 'PageController@pageList');
Route::get('/user/page/edit/{id}', 'PageController@editPageIndex');
Route::post('/user/page/update', 'PageController@edit');
Route::post('/user/page/delete', 'PageController@delete');

Route::get('/user/slider/add', 'SliderController@addSliderIndex');
Route::post('/user/slider/add', 'SliderController@add');
Route::get('/user/slider/list', 'SliderController@sliderList');
Route::get('/user/slider/edit/{id}', 'SliderController@edit');
Route::post('/user/slider/update', 'SliderController@update');
Route::post('/user/slider/delete', 'SliderController@delete');


Route::get('/user/bottom/slider/add', 'SliderController@addBottomSliderIndex');
Route::post('/user/bottom/slider/add', 'SliderController@addBottomSlider');
Route::get('/user/bottom/slider/list', 'SliderController@bottomSliderList');

Route::post('/user/slider/delete', 'SliderController@bottomSliderDelete');


Route::get('/user/review', 'ReviewController@addIndex');
Route::get('/user/review/add', 'ReviewController@addReview');

Route::post('/user/review/add', 'ReviewController@add');
Route::get('/user/review/list', 'ReviewController@reviewList');
Route::post('/user/review/delete', 'ReviewController@delete');


Route::get('/user/profile', 'ProfileController@index');
Route::post('/user/profile/update', 'ProfileController@update');

Route::get('/user/settings', 'AdminController@settingsPage');
Route::post('/user/settings/save', 'AdminController@saveSettings');


Route::get('/user/messages', 'AdminController@message');
Route::post('/page/contact', 'ContactController@add');

//Route::get('/exchange/{send}/{receive}/{amount}/{receiveAmount}', 'TransactionController@transaction');
Route::post('/transaction', 'TransactionController@transaction');
Route::get('/exchange/{id}', 'TransactionController@track');
Route::post('/transaction/track', 'TransactionController@trackWidget');