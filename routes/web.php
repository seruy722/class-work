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


Route::get('form/index', 'ProfileController@index')->name('form.index');

Route::post('form/insert', 'ProfileController@insert')->name('form.insert');

Route::get('form/create', 'ProfileController@create')->name('form.create');

Route::get('form/{id}/update', 'ProfileController@update')->name('form.update');

Route::post('form/{id}/add', 'ProfileController@add')->name('form.add');

Route::get('form/{id}/delete', 'ProfileController@delete')->name('form.delete');