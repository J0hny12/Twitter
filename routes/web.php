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

Route::get('/', 'HomeController@index')->name('home');

Auth::routes();
Route::get('/logout', 'HomeController@logout');

Route::get('/dashboard/create', 'TweetsController@createTweet');
Route::post('/dashboard/create', 'TweetsController@storeTweet');
Route::get('/dashboard/update/{tweet}', 'TweetsController@showUpdateTweet');
Route::post('/dashboard/update/{tweet}', 'TweetsController@updateTweet');
Route::get('/dashboard/delete/{tweet}', 'TweetsController@deleteTweet');
Route::get('/dashboard/{user}', 'TweetsController@showDashboard');

Route::post('/comment/{tweet}', 'CommentsController@storeComment');
Route::get('/comment/delete/{comment}', 'CommentsController@deleteComment');

Route::get('/settings', 'SettingsController@showSettings');
Route::post('/settings', 'SettingsController@updateSettings');