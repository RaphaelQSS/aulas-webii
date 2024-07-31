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

Route::get('/',function () {
    return view('welcome');
});

Route::get('/eixo', 'App\Http\Controllers\EixoController@index');
Route::get('/eixo/create', 'App\Http\Controllers\EixoController@create')->name('eixo.create');
Route::post('/eixo', 'App\Http\Controllers\EixoController@store')->name('eixo.store');
