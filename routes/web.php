<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Levels
Route::get('/levels', 'LevelsController@index')->name('levels.index');
Route::get('/levels/create', 'LevelsController@create')->name('levels.create');
Route::get('/levels/{level:name}', 'LevelsController@show')->name('levels.show');
Route::get('/levels/{level:name}/edit', 'LevelsController@edit')->name('levels.edit');

Route::post('/levels', 'LevelsController@store')->name('levels.store');
Route::post('/levels/{level}', 'LevelsController@update')->name('levels.update');
Route::delete('/levels/{level}', 'LevelsController@delete')->name('levels.delete');
