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

Route::get('/tarefas', 'TarefaController@index');
Route::get('/tarefas/lista', 'TarefaController@indexLista');
Route::get('/tarefas/quadro', 'TarefaController@indexQuadro');
Route::get('/tarefas/visao', 'TarefaController@indexVisao');


Route::get('/users', 'UserController@index');
Route::get('/categorias', 'UserController@index');

Auth::routes();

Route::get('/home', 'TarefaController@index')->name('home');
