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


Route::resource('posts', 'PostController');

Route::resource('users', 'UserController');


Route::get('users/{word}/{id}', 'UserController@showWithWord');

Route::get('posts/{word}/{id}', 'PostController@showWithWord');


 
 
 Route::any('/login',function(){
     return view('login');
     
 });
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
