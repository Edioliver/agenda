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

Auth::routes();


    Route::get('/', 'ContatoController@index');
    Route::get('/contatos/add', 'ContatoController@create');
    Route::post('/contatos/', 'ContatoController@store');
    Route::get('/contatos/{id}', 'ContatoController@show');
    Route::get('/contatos/edit/{id}', 'ContatoController@edit');
    Route::put('/contatos/{id}', 'ContatoController@update');
    Route::delete('/contatos/{id}', 'ContatoController@destroy');
