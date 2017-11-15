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

Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/logout', 'HomeController@logout');
Route::get('/dashboard', 'TweetsController@index');
Route::get('/dashboard/create', 'TweetsController@create');
Route::post('/dashboard/create', 'TweetsController@store');
Route::get('/dashboard/update/{tweet}', 'TweetsController@showEdit');
Route::post('/dashboard/update/{tweet}', 'TweetsController@update');

Route::get('/dashboard/delete/{tweet}', 'TweetsController@delete');
Route::get('/dashboard/{user}', 'TweetsController@showUserDashboard');

Route::post('comment/{tweet}', 'CommentsController@store');
Route::get('comment/delete/{comment}', 'CommentsController@delete');