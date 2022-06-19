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


Route::get('/', 'IndexController@index')->name('site.index');

Route::get('/{type}', 'IndexController@filterTypes')->name('site.index-types');

Route::post('/', 'IndexController@listPokemons')->name('site.index');

Route::get('/teste', function () {
    return view('site.teste');
});

Route::post('/teste', 'IndexController@teste')->name('site.teste');

Route::get('/create', 'IndexController@create')->name('site.index');
