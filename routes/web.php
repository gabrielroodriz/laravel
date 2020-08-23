<?php

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

Route::get('/books', 
[
    'uses' => 'BooksController@index'
]);

Route::get('/books/create', 
[
    'uses' => 'BooksController@create'
]);

Route::get('/books/delete/{id}', 
[
    'uses' => 'BooksController@delete',
    'as'=> 'delete.book'
]);

Route::get('/books/update-view/{id}', 
[
    'uses' => 'BooksController@updateView',
    'as'=> 'update.view'
]);

Route::get('/books/update/{id}', 
[
    'uses' => 'BooksController@update',
    'as'=> 'update.book'
]);