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

Route::get('/index', 'manage@visitors');
Route::get('/', 'manage@visitors');




Auth::routes();

// Site
Route::get('/add', 'manage@AddProduct')->middleware('auth');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/add', 'manage@AddProduct')->middleware('auth');
Route::post('/add', 'manage@AddProduct')->middleware('auth');
// Route::get('/product', 'manage@ViewProducts')->middleware('auth');

Route::get('/profile', 'manage@ShowProfile');

// dashboard
Route::get('/dashboard', 'controlpanel@dashboard')->middleware('auth');
Route::get('/user', 'controlpanel@user')->middleware('auth');
Route::get('/table', 'controlpanel@table')->middleware('auth');
Route::get('/typography', 'controlpanel@typography')->middleware('auth');
Route::get('/icons', 'controlpanel@icons')->middleware('auth');
Route::get('/maps', 'controlpanel@maps')->middleware('auth');
Route::get('/notifications', 'controlpanel@notifications')->middleware('auth');
Route::get('/upgrade', 'controlpanel@upgrade')->middleware('auth');


Route::post('/products', 'controlpanel@Products')->middleware('auth');
Route::get('/products', 'controlpanel@Products')->middleware('auth');


// Route::post('/products', 'controlpanel@Products');
Route::get('/products_tools/{id}', 'controlpanel@removeProduct')->middleware('auth');
Route::get('/products_edit/{id}', 'controlpanel@editProduct')->middleware('auth');
Route::post('/products_edit/{id}', 'controlpanel@editProduct')->middleware('auth');
