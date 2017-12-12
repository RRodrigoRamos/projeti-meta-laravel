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

Route::get('/categoria/{categoria}','ProdutoController@produtos');
// Route::get('/categoria/{categoria}','ProdutoController@automotivos');
// Route::get('/categoria/{categoria}','ProdutoController@eletronicos');
// Route::get('/categoria/{categoria}','ProdutoController@eletrodomesticos');
// Route::get('/categoria/{categoria}','ProdutoController@imoveis');

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
