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
// its just a test for git for bitbucket

Route::get('/index', 'manage@visitors');
Route::get('/', 'manage@visitors');

Auth::routes();

// Ajax
Route::get('/ajax',function(){
   return view('pages.ajaxpage');
});
Route::post('/ajax','AjaxController@index');

Route::get('/users/{user_id}/articles','ArticleUserController@index');

//One to one Inverse
Route::get('/onetoone',function(){
   return App\Profile::find(1);
});

// Route::get('profile', 'UsersControllers@index')->middleware("authenticated");
// Or  do this :

Route::group(['middleware_2'=>'authenticated'],function ()
{
  Route::get('/profile/{username}', 'UsersControllers@profile');
});

Route::resource('articles','ArticlesController');
// Route::get('/articles/create','ArticlesController');


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
