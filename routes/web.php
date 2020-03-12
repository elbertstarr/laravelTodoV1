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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'TodosController@index');
Route::post('todos', 'TodosController@store');
Route::patch('todos/{todo}', 'TodosController@update');
Route::delete('todos/{todo}', 'TodosController@destroy');

// 補充 未完成
Route::patch('todos/uncomplate/{todo}', 'TodosController@uncomplate');
