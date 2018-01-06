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


//Route::get('/produtos', 'ProdutoController@index');
Route::get('produtos', 'ProdutoController@index');
Route::get('produtos/list', 'ProdutoController@list');
Route::get('produtos/details/{id}', 'ProdutoController@show');
Route::get('produtos/new', 'ProdutoController@new');
Route::post('produtos/create', 'ProdutoController@create');
Route::get('produtos/destroy/{id}', 'ProdutoController@destroy');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
