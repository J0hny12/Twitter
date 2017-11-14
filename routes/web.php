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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/logout', 'HomeController@logout');

Route::get('/dashboard', 'TweetsController@index');
Route::get('/dashboard/create', 'TweetsController@create');
Route::post('/dashboard/create', 'TweetsController@store');
Route::get('/dashboard/{user}', 'TweetsController@showUserDashboard');

Route::post('dashboard/comment/{tweet}', 'CommentsController@store');