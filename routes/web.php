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

Route::group(['prefix' => 'form'], function() {
    Route::get('index', 'ProfileController@index')->name('form.index');

    Route::post('insert', 'ProfileController@insert')->name('form.insert');

    Route::get('create', 'ProfileController@create')->name('form.create')->middleware('CheckRole:user');

    Route::get('/{id}/update', 'ProfileController@update')->name('form.update')->middleware('CheckAge','auth');

    Route::post('/{id}/add', 'ProfileController@add')->name('form.add');

    Route::get('/{id}/delete', 'ProfileController@delete')->name('form.delete');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
