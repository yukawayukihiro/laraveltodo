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
Route::get('/','TodosController@index')->name('index');
Route::get('/create-page', 'TodosController@createPage')->name('create-page');
Route::post('/create', 'TodosController@create')->name('create');
Route::get('/edit-page/{id}','TodosController@editPage')->name('edit-page');
Route::post('/edit', 'TodosController@edit')->name('edit');
Route::get('/delete-page/{id}','TodosController@deletePage')->name('delete-page');
Route::post('/delete/{id}','TodosController@delete')->name('delete');
