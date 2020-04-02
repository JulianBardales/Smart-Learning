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
    return view('index');
});


//Route::resource('/componentes','ComponenteController');




Auth::routes();

Route::get('/componentes', function(){
	return view('admin.index');
});

Route::get('/componentes', function(){
	return view('componentes.index');
});


Route::get('/componentes', 'ComponenteController@index')->name('componentes');

Route::resource('/componentes','ComponenteController',);