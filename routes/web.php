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

Route::get('/', 'TodoController@index')->name('index');
Route::get('login', 'TodoController@login')->name('login');
Route::post('login', 'TodoController@postLogin')->name('post.login');

Route::get('my-todo', 'TodoController@myTodo')->name('my-todo');
Route::get('todos/{id}', 'TodoController@show')->name('todos.show');
