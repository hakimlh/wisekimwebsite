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

// Ajax
Route::get('/ajax',function(){
   return view('pages.ajaxpage');
});
Route::post('/ajax','AjaxController@index');



// Route::get('profile', 'UsersControllers@index')->middleware("authenticated");
// Or  do this :

Route::group(['middleware_2'=>'authenticated'],function ()
{
  Route::get('profile', 'UsersControllers@index');
});




// Route Group Middleware
Route::group(['middleware'=>'auth'],function ()
{
  // Site
  Route::get('/add', 'manage@AddProduct');
  Route::get('/home', 'HomeController@index')->name('home');
  Route::get('/add', 'manage@AddProduct');
  Route::post('/add', 'manage@AddProduct');
  // Route::get('/product', 'manage@ViewProducts');

  // dashboard
  Route::get('/dashboard', 'controlpanel@dashboard');
  Route::get('/user', 'controlpanel@user');
  Route::get('/table', 'controlpanel@table');
  Route::get('/typography', 'controlpanel@typography');
  Route::get('/icons', 'controlpanel@icons');
  Route::get('/maps', 'controlpanel@maps');
  Route::get('/notifications', 'controlpanel@notifications');
  Route::get('/upgrade', 'controlpanel@upgrade');
  Route::post('/products', 'controlpanel@Products');
  Route::get('/products', 'controlpanel@Products');


  // Route::post('/products', 'controlpanel@Products');
  Route::get('/products_tools/{id}', 'controlpanel@removeProduct');
  Route::get('/products_edit/{id}', 'controlpanel@editProduct');
  Route::post('/products_edit/{id}', 'controlpanel@editProduct');
});
