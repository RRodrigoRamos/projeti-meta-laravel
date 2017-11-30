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

Route::get('/', 'InicioController@index');
Route::get('/inicio', 'ProdutoController@index');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/produtos', 'ProdutoController@index');

Route::get('/acessorios',function() {
	return view('acessorios');
});

Route::get('/automotivos',function() {
	return view('automotivos');
});

Route::get('/eletronicos',function() {
	return view('eletronicos');
});

Route::get('/eletrodomesticos',function() {
	return view('eletrodomesticos');
});

Route::get('/imoveis',function() {
	return view('imoveis');
});

Route::get('/user',function() {
	return view('user');
});

########### Reset através de senha para meu email ##############
Route::get('/reset_email',function() {
	return view('auth.passwords.email');
});

Route::get('/reset',function() {
	return view('auth.passwords.reset');
});

/* Route::get('/{categorias}', function($categorias){
	dd($categorias);
}); */
