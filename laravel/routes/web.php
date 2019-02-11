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

Route::get('/faqs', function () {
    return view('faqs');
});

//Route::get('/dashboard', function () {
//    return view('dashboard');
//});

Route::get('/dashboard', [
  'uses'=>'PostController@getDashboard',
  'as'=>'dashboard',
  'middleware'=>'auth',

]);

Route::get('/post.delete/{post_id}', [
  'uses'=>'PostController@getDeletePost',
  'as'=>'post.delete',
  'middleware'=>'auth',
]);


//Route::get('/dashboard', 'PostController@createPost');
Route::post('/dashboard', 'PostController@createPost');


Auth::routes();

// Registration Routes...
$this->get('registro', 'Auth\RegisterController@showRegistrationForm')->name('register');
$this->post('registro', 'Auth\RegisterController@register');
