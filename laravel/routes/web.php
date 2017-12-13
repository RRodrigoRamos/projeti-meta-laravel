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

Route::get('/', 'ProdutoController@index');
Route::get('/inicio', 'ProdutoController@index');
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/categoria/acessorios','ProdutoController@acessorios');
Route::get('/categoria/automotivos','ProdutoController@automotivos');
Route::get('/categoria/eletronicos','ProdutoController@eletronicos');
Route::get('/categoria/eletrodomesticos','ProdutoController@eletrodomesticos');
Route::get('/categoria/imoveis','ProdutoController@imoveis');

Route::get('/user',function() {
	return view('gerencia.user');
});

########### Reset através de senha meu email ##############
Route::get('/reset_email',function() {
	return view('auth.passwords.email');
});
################# Resetar Senha ##################
Route::get('/reset',function() {
	return view('auth.passwords.reset');
});

/* Route::get('/{categorias}', function($categorias){
	dd($categorias);
}); */
