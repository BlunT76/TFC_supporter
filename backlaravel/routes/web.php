<?php

use App\Http\Controllers\TfcplayerController;

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


Auth::routes();

Route::get('/', 'HomeController@index')->name('home')->middleware('auth');
Route::get('/register')->name('register')->middleware('auth');
Route::get('/players', 'TfcplayerController@index')->name('players_index')->middleware('auth');
Route::get('/players/create', 'TfcplayerController@create')->name('players_create')->middleware('auth');
Route::post('/players/store', 'TfcplayerController@store')->name('players_store')->middleware('auth');
